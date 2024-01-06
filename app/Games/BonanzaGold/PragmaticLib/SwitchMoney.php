<?php

namespace VanguardLTE\Games\BonanzaGold\PragmaticLib;


class SwitchMoney
{

    public static function set($bet, $shop, $bank, $jpgs, $user, $game, $callbackUrl, $win, $slotArea, $freespins, $currentLog, $win_permisson){
        if ($bet){ // если ставка не 0
            $bet *= -1;
            $user->decrement('balance', $bet);
            $user->save();
        }
        if (is_array($win_permisson)) $win = $win_permisson['CurrentWin'];

        $toBonus = array_key_exists('FSPay', $currentLog) ? $currentLog['FSPay'] : false;
        
        if ($user->count_balance > 0 && $user->count_balance > $bet ) { // if you don't run out of money
            $user->count_balance -= $bet;
			// Fix bonus balances
			$_var_1_sum = $_var_2 = $sum = abs(floatval($bet));
			if ($user->count_balance == 0 || $user->count_balance < $_var_1_sum) {
				foreach ([
					"count_tournaments",
					"count_happyhours",
					"count_refunds",
					"count_progress",
					"count_daily_entries",
					"count_invite",
					"count_welcomebonus",
					"welcomebonus",
					"count_smsbonus",
					"count_wheelfortune"
				] as $field) {
					$value = floatval($user->$field);
					if ($value > 0) {
						if ($_var_2 == 0) {
							break;
						} else {
							if ($value < $_var_2) {
								$_var_2 = $_var_2 - $value;
								$user->decrement($field, $value);
							} else {
								$user->decrement($field, $_var_2);
								$_var_2 = 0;
							}
						}
					}
				}
			}
			// Fix bonus balances
            $myMoney = $bet;
        }
        else if ($user->count_balance < $bet && $user->count_balance > 0) { // if own money is not enough to bet
            $myMoney = $user->count_balance;
            $user->count_balance = 0;
        }else $myMoney = 0;
        $user->save();
        $toJackpot = Jackpots::toJP($myMoney, $jpgs); // распределить по джекпотам
        $toProfit = $myMoney * ((100 - $shop->percent) / 100); // посчитать прибыль владельцу

        $toSlotBank = SlotBank::addBank($bet, $bank, $toJackpot, $toProfit, $toBonus); // добавить деньги в банк и посчитать сколько денег вообще в слот

        if (array_key_exists('FSPay', $currentLog)) $win = $currentLog['FSPay']; // если выпали фриспины то добавить к выигрышу

        $game->stat_out += $win;
        $game->stat_in += $toSlotBank; // добавить сумму внесенных в слот денег
        $game->save();

        Statistic::setStatistic($user, $win, $game, $bank, $bet, $toSlotBank, $toJackpot, $toProfit, $freespins, $slotArea);


        if (array_key_exists('FreeState', $currentLog)){
            $bank->decrement('bonus',$win);
        }else{
            $bank->decrement('slots',$win);
        }
        $bank->save();
    }
}
