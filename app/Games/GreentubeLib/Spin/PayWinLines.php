<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


use VanguardLTE\Games\GreentubeLib\Bonus\FsMultiplier;
use VanguardLTE\Games\GreentubeLib\Bonus\Multiplier;

class PayWinLines
{
    // перебираем линии, в каждой линии
    // ищем оплату в таблице, добавляем в элемент массива строку с оплатой
    // добавляем общий выигрыш
    public static function getPay($lines, $gameSettings, $gameData, $fs, $fsreel = false){
        $fsMult = FsMultiplier::getFsMult($fs, $gameSettings, $fsreel);
        foreach ($lines as &$line){

            $multiplier = Multiplier::getMult($gameSettings,$line);

            $pay = $gameSettings->paymentTable[$line['WinSymbol']][$line['CountSymbols']] *
                $gameData['BetToLine'] * $fsMult * $multiplier;
            if ($pay < 0) {
                $pay = $gameSettings->paymentTable[$line['WinSymbol']][$line['CountSymbols']] * -1 *
                    $gameData['BetToLine'] * $fsMult * $multiplier * $gameData['Lines'];
            }
            $line['Pay'] = $pay;
        }
        return $lines;
    }

}
