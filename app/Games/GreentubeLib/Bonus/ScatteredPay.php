<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


use VanguardLTE\Games\GreentubeLib\Spin\SymbolsPositions;

class ScatteredPay
{
    public static function getPay($slotArea, $gameSettings, $gameData){
        $result = false;


        foreach ($gameSettings->scatteredSymbols as $scatteredSymbol) { // перебираем скаттеры
            $scattersCount = 0;
            // посчитать сколько на поле скаттеров
            foreach ($slotArea as $reel) {
                foreach ($reel as $symbol) {
                    if ($symbol === $scatteredSymbol || $symbol === $gameSettings->extraWild){
                        $scattersCount++;
                    }
                }
            }
            // если набирается минимальное кличество скаттеров - то идем дальше
            if ($scattersCount >= $gameSettings->minNeedScatter) {
                // смотрим в таблице выплат сколько выплатить за скаттер и пишем это в выигрыш
                $pay = array_key_exists($scatteredSymbol, $gameSettings->paymentTable) ?
                    $gameSettings->paymentTable[$scatteredSymbol][$scattersCount] * $gameData['BetToLine'] * $gameData['Lines'] : 0;
                $bonus = [
                    'Symbol' => $scatteredSymbol,
                    'Count' => $scattersCount,
                    'Pay' => $pay < 0 ? $pay * -1 : $pay,
                    'FreeSpinCount' => 0,
                    'SymbolsPositions' => SymbolsPositions::scatterPositions($slotArea, $scatteredSymbol, $scattersCount, $gameSettings->extraWild)
                ];
                $result[] = $bonus;
            }
        }
        return $result;
    }
}
