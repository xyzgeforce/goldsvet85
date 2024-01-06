<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


use VanguardLTE\Games\GreentubeLib\Spin\SymbolsPositions;

class BonusIdentifier
{
    public static function checkBonus($slotArea, $gameSettings, $gameData, $fs = false, $fsreel = false){
        $result = false;
        $fsMult = FsMultiplier::getFsMult($fs, $gameSettings, $fsreel);

        $scattersCount = 0;

        if ($gameSettings->lrBonus){ // считаем скаттеры слева направо
            foreach ($slotArea as $reel) {
                if (!in_array($gameSettings->scatter, $reel)) break;
                else $scattersCount++;
            }
        }elseif ($gameSettings->FSscatter && $gameData['Command'] === 'freespin'){ // если во фриспинах другой скаттер
            foreach ($slotArea as $reel) {
                foreach ($reel as $symbol) {
                    if ($symbol === $gameSettings->FSscatter) $scattersCount++;
                }
            }
        }
        else{ // обычный поиск скаттеров
            // посчитать сколько на поле скаттеров
            foreach ($slotArea as $reel) {
                foreach ($reel as $symbol) {
                    if ($symbol === $gameSettings->scatter || $symbol === $gameSettings->extraWild){
                        $scattersCount++;
                    }
                }
            }
        }

        // если набирается минимальное кличество скаттеров - то идем дальше
        if ($scattersCount >= $gameSettings->minNeedScatter) {
            $freeSpinCount = $gameSettings->freeSpinsCountScatter[$scattersCount];
            // смотрим в таблице выплат сколько выплатить за скаттер и пишем это в выигрыш
            $pay = array_key_exists($gameSettings->scatter, $gameSettings->paymentTable) ?
                $gameSettings->paymentTable[$gameSettings->scatter][$scattersCount] * $gameData['BetToLine'] * $gameData['Lines'] : 0;
            $result = [
                'Symbol' => $gameSettings->scatter,
                'Count' => $scattersCount,
                'Pay' => $pay < 0 ? $pay * $fsMult * -1 : $pay * $fsMult,
                'FreeSpinCount' => $gameSettings->needFreeSpinCount ? $freeSpinCount : 0,
                'SymbolsPositions' => SymbolsPositions::scatterPositions($slotArea, $gameSettings->scatter, $scattersCount, $gameSettings->extraWild)
            ];
        }
        return $result;
    }

}
