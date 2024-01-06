<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class BeetleBonus
{
    public static function beetlePay($slotArea, $gameSettings, $freeSpins){
        // проверить есть ли символ жука, если есть - то забрать сумму которую уже выиграли в фриспинах и выплатить
        foreach ($slotArea[2] as $key => $symbols) {
            if ($symbols === $gameSettings->beetleSymbol){
                $pay = $freeSpins['TotalWin'];
                return [
                    'Symbol' => $gameSettings->beetleSymbol,
                    'Count' => 1,
                    'Pay' => $pay,
                    'SymbolsPositions' => '2'.$key,
                    'FreeSpinCount' => 0 //для формата
                ];
            }
        }
        return false;
    }

}
