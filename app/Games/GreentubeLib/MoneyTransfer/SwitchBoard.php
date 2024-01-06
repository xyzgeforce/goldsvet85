<?php


namespace VanguardLTE\Games\GreentubeLib\MoneyTransfer;


use VanguardLTE\Services\Api\Api;
use Illuminate\Support\Facades\Log;
use VanguardLTE\Games\GreentubeLib\Statistic\Statistic;

class SwitchBoard
{
	public function FormatFloat($num)
	{
		$str0 = explode('.', $num);
		if( isset($str0[1]) ) 
		{
			if( strlen($str0[1]) > 4 ) 
			{
				return round($num * 100) / 100;
			}
			else if( strlen($str0[1]) > 2 ) 
			{
				return floor($num * 100) / 100;
			}
			else
			{
				return $num;
			}
		}
		else
		{
			return $num;
		}
	}
    public static function SwitchMoney($slotArea, $shop, $bank, $jpgs, $gameSettings, $totalWin, $user, $game, $gameData, $needReserve, $freespins = false){
        $bet = ($gameData['BetToLine'] * $gameSettings->multipliers[$gameData['Multiplier']]) / $game->denomination;
        $totalWin = $totalWin / $game->denomination;
        $endFS = false;
		// file_put_contents(storage_path('logs/').'gtubetest.txt','SwitchMoney bet: ' . $bet . PHP_EOL,FILE_APPEND); 
		if(isset($jpgs) && $jpgs && $bet > 0){
			$bet = $bet;
			$count_balance = $user->count_balance;
			$jsum = [];
			$payJack = 0;
			for( $i = 0; $i < count($jpgs); $i++ ) 
			{
				if( $count_balance == 0 ) 
				{
					$jsum[$i] = $jpgs[$i]->balance;
				}
				else if( $count_balance < $bet ) 
				{
					$jsum[$i] = $count_balance / 100 * $jpgs[$i]->percent + $jpgs[$i]->balance;
				}
				else
				{
					$jsum[$i] = $bet / 100 * $jpgs[$i]->percent + $jpgs[$i]->balance;
				}
				if( $jpgs[$i]->get_pay_sum() < $jsum[$i] && $jpgs[$i]->get_pay_sum() > 0 ) 
				{
					if( $jpgs[$i]->user_id && $jpgs[$i]->user_id != $user->id ) 
					{
					}
					else
					{
						$payJack = $jpgs[$i]->get_pay_sum();
						$jsum[$i] = $jsum[$i] - $jpgs[$i]->get_pay_sum();
						$user->balance = self::FormatFloat($user->balance + $jpgs[$i]->get_pay_sum());
						$user->save();
						if( $jpgs[$i]->get_pay_sum() > 0 ) 
						{
							\VanguardLTE\StatGame::create([
								"user_id" => $user->id, 
								"balance" => $user->balance, 
								"bet" => 0, 
								"win" => $jpgs[$i]->get_pay_sum(), 
								"game" => $game->name . " JPG " . $jpgs[$i]->id, 
								"in_game" => 0, 
								"in_jpg" => 0, 
								"in_profit" => 0, 
								"shop_id" => $user->shop_id, 
								"date_time" => \Carbon\Carbon::now()
							]);
						}
					}
				}
				$jpgs[$i]->balance = $jsum[$i] + ($bet / 100);
				if( isset($payJack) &&  $payJack > 0 )$jpgs[$i]->user_id = NULL;
				if( isset($isJackPay) && $isJackPay === 1 )$jpgs[$jp - 1]->user_id = NULL;
				$jpgs[$i]->save();
				if( $jpgs[$i]->balance < $jpgs[$i]->get_min("start_balance") ) 
				{
					$summ = $jpgs[$i]->get_start_balance();
					if( $summ > 0 ) 
					{
						$jpgs[$i]->add_jpg("add", $summ);
					}
				}
			}
		}
        // если выигрыша нет - то просто отнять ставку у пользователя и записать в статистику результат спина,
        //а так же добавить деньги в банк и джекпот и в rtp поля слота total_in
        //Если игрок играет на выигранные деньги а свои закончились - то вся сумма ставки идет в банк слота.
        if ($freespins) $bet = 0;
        $user->balance -= $bet;
        if ($user->count_balance > 0 && $user->count_balance > $bet ) { // если не закончились свои деньги
        $user->count_balance -= $bet;
        $myMoney = $bet;
        }
        elseif ($user->count_balance < $bet && $user->count_balance > 0) { // если своих денег недостаточно для ставки
            $myMoney = $user->count_balance;
            $user->count_balance = 0;
        }else $myMoney = 0;
        $user->save();

        $toJackpot = Jackpots::toJP($myMoney, $jpgs);
        $toProfit = $myMoney * ((100 - $shop->percent) / 100);
        $toSlotBank = SlotBank::addBank($bet, $shop, $bank, $toJackpot, $toProfit); // в банк идет bet потому что в маймоней может быть 0

        $game->stat_in += $toSlotBank;
        $game->save();

        if (!$freespins) { // если не фриспины то расчет из банка, иначе из резерва
            // Если выигрыш - то отнять от банка выигрыш и изменить в игре количество выплаченого
            $bank->slots -= $totalWin;
        }else{
            $bank->bonus -= $totalWin;
        }

        // запись в статистику
        Statistic::setStatistic($user, $totalWin, $game, $bank, $bet, $toSlotBank, $toJackpot, $toProfit, $freespins, $slotArea);

        $bank->save();
    }

    public static function collectMoney($log,$user,$game){
        //записать в баланс пользователю
        $user->balance += $log['TotalWin'] / $game->denomination;
        //записать в выплаты слоту
        $game->stat_out += $log['TotalWin'] / $game->denomination;
        $user->save();
        $game->save();
        $log['Balance'] = $user->balance * $game->denomination;
        return $log;
    }

    public static function gambleCalculateMoney($user,$game,$bank, $bet, $totalWin){
        $bet = $bet / $game->denomination;
        $totalWin =$totalWin / $game->denomination;
        // вернуть в банк если проигрыш
        if ($totalWin == 0) $bank->slots += $bet;
        // забрать из банка если выигрыш
        else $bank->slots -= $totalWin / 2;
        // записать в статистику
        Statistic::setGamble($user,$game,$bet,$totalWin,$bank);
        // сохранить банк
        $bank->save();
    }
}
