<?php


namespace VanguardLTE\Games\GreentubeLib\MoneyTransfer;


class SlotBank
{
    
    public static function addBank($totalBet, $shop, $bank, $toJackpot, $toProfit){
        // расчитать сколько идет в банк
        $toBank = $totalBet - $toJackpot - $toProfit;
        $bank->slots += $toBank*0.3;
        $bank->bonus += $toBank*0.7;
        return $toBank;
    }

}
