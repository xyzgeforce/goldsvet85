<?php

namespace VanguardLTE\Games\FruitParty2\PragmaticLib;

use VanguardLTE\Services\Api\Api;

class Spin
{
    public static function spinResult($user, $game, $bet, $lines, $log, $gameSettings, $index, $counter, $callbackUrl, $doubleChance, $buyFS, $bank, $shop, $jpgs){
        
        $newSpinCnt = 0;
        $gameSettings = $gameSettings->all;
        $currentLog = $log->getLog();
        $lines = $doubleChance == 0 ? $lines : $lines * 1.25;
        $failTime = 0;
        $failPay = 0;
        if ($currentLog &&
            ($currentLog['State'] != 'Spin' && $currentLog['State'] != 'LastRespin' ||
                array_key_exists('FreeState', $currentLog) && $currentLog['FreeState'] != 'LastFreeSpin')){
            $changeBalance = 0;
        }else{
            $changeBalance = ($bet * $lines * -1);
            if ($buyFS === '0') $changeBalance *= 100;
        }
        if ($user->balance < -1 * $changeBalance) return false;
		
		$FREE_SPIN_ACCESS = true;
		
        NewSpin:
        //построить игровое поле
		
        $reelSet = $doubleChance == 0 ? 0 : 1;
        if ($FREE_SPIN_ACCESS && $currentLog && array_key_exists('FreeState', $currentLog)
            && $currentLog['FreeState'] != 'LastFreeSpin' && $currentLog['FreeSpinNumber'] > 1) $reelSet = 3; // if free spins - then the set of reels is 4th
        $slotArea = SlotArea::getSlotArea($gameSettings,$reelSet,$currentLog);

        if ($buyFS === '0') BuyFreeSpins::getFreeSpin($slotArea['SlotArea'], $gameSettings); // покупка фриспинов
        // SlotArea::setMulti($slotArea);
        //проверить выигрыш (вернуть массив с суммой выигрыша и позициями символов
        $winChecker = new WinChecker($gameSettings);
        $win = $winChecker->getWin($bet, $slotArea, $currentLog);

        $freeSpins = false;
        // проверить фриспины если нет выигрыша
        if ($win['TotalWin'] == 0) {
            $freeSpins = FreeSpin::check($slotArea['SlotArea'], $currentLog, $gameSettings, $bet);
            /*if ($freeSpins && $currentLog && array_key_exists('FreeSpins', $currentLog) && $currentLog['FreeState'] == 'LastFreeSpin')
                goto NewSpin;*/
        }
		
		// When freespin appear $freespins = string(74) "AGA:{"FreeSpins":"10","Pay":0.15,"ScatterPositions":[0,2,5],"Scatter":"1"}"
		if($freeSpins){
			// var_dump('IS_FREESPIN:' . json_encode($freeSpins));
			// var_dump('buyFS:' . $buyFS);
		} else {
			// var_dump('IS_FREESPIN: FALSE');
			// var_dump('buyFS:' . $buyFS);
		}

        // отключить получение дополнительных фриспинов при последнем фриспине, иначе они не засчитываются.
        //if ($currentLog && array_key_exists('FreeSpins', $currentLog) && $currentLog['FreeSpinNumber'] >= $currentLog['FreeSpins']) if (!$freeSpins) goto NewSpin;
        // проверить множители если фриспины
        $multipliers = false;
        // if ($currentLog && array_key_exists('FreeSpins', $currentLog) && $currentLog['FreeState'] != 'LastFreeSpin')
        //     $multipliers = Multiple::getBonanzaMultiple($slotArea['SlotArea'], $gameSettings, $currentLog);


        //составить все в удобный массив
        $logAndServer = LogAndServer::getResult($slotArea, $index, $counter, $bet, $lines, $doubleChance, $reelSet,
            $win, $currentLog, $user, $freeSpins, $multipliers, $changeBalance, $bank, $game);
        // проверить можно ли выиграть
        if ($win['TotalWin'] > 0 || array_key_exists('tmb_win', $logAndServer['Log']))
            $win_permission = WinPermission::winCheck($freeSpins,$buyFS,$bank,$logAndServer['Log'],$win['TotalWin'], $multipliers, $currentLog, $failTime, $failPay);
        else $win_permission = true;
        if (!$win_permission) {
            $newSpinCnt ++;
            goto NewSpin;
        }
        // check rtp when you spin
        $checkRtpSlots = new CheckRtp($gameSettings['rtp_slots'], $game);
        if(!$freeSpins && $currentLog && !array_key_exists('FreeSpinNumber', $currentLog) && !$checkRtpSlots->checkRtp($bet * $lines, $win['TotalWin'] , $user, $game, $bank) && $newSpinCnt < 4 && $bank->slots > $bet * $lines){
            $newSpinCnt ++;
            goto NewSpin;
        }
        // check rtp when you're on free spin
        $checkRtpBonus = new CheckRtp($gameSettings['rtp_bonus'], $game);
        if($currentLog 
        && array_key_exists('FreeSpinNumber', $currentLog) 
        && !$checkRtpBonus->checkRtp($bet * $lines * 100 / $currentLog['FreeSpins'], $win['TotalWin'] , $user, $game, $bank)
        && $bank->bonus + $bank->slots > $bet * $lines * 100 / $currentLog['FreeSpins']
        && $newSpinCnt < 4){
            $newSpinCnt ++;
            goto NewSpin;
        }
		
		
		// User rtp controller author:: https://t.me/ClassicBanana
		// Check user rtp
		if(!isset($fswin)) $fswin = 0;
		if(!isset($lines)) $lines = 1;
		if(($win["TotalWin"] + $fswin)>0 || ($freeSpins && array_key_exists('FreeSpins', $freeSpins) && $buyFS !== '0')){
			if($freeSpins && array_key_exists('FreeSpins', $freeSpins) && $buyFS !== '0'){
				var_dump('FREESPIN_GELDI_AMA');
				\Illuminate\Support\Facades\Log::info("FREE_SPIN_GELDI");
				$isFreeSpin = true;
			} else {
				$isFreeSpin = false;
			}
			$checkUserRtp = \VanguardLTE\Games\PragmaticLib\CheckUserRtp::user_permission($user, $gameSettings, $bet * $lines, $win["TotalWin"], $fswin, $isFreeSpin);
			if(!$checkUserRtp && $newSpinCnt < 50){
				$FREE_SPIN_ACCESS = false;
				$newSpinCnt ++;
				goto NewSpin;
			}
		}
		
		
		// allocate money to the bank and write it down in statistics
        // распределить деньги в банк и записать в статистику
        SwitchMoney::set($changeBalance, $shop, $bank, $jpgs, $user, $game, $callbackUrl, $win['TotalWin'], $slotArea, $freeSpins, $logAndServer['Log'], $win_permission);
        //записать лог
        Log::setLog($logAndServer['Log'], $game->id, $user->id, $user->shop_id);

        //отдать серверу
        $response = '&'.implode('&', $logAndServer['Server']);
        return $response;
    }

}
