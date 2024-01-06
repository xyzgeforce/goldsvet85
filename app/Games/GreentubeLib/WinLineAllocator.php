<?php


namespace VanguardLTE\Games\GreentubeLib;


use VanguardLTE\Games\GreentubeLib\Spin\AllPaysWinlines;
use VanguardLTE\Games\GreentubeLib\Spin\Lines;
use VanguardLTE\Games\GreentubeLib\Spin\PayWinLines;
use VanguardLTE\Games\GreentubeLib\Spin\SymbolsPositions;
use VanguardLTE\Games\GreentubeLib\Spin\WinLines;
use VanguardLTE\Games\GreentubeLib\Spin\WinWaysWinLines;

class WinLineAllocator
{
    public static function allocateLines($slotArea, $gameData, $gameSettings, $fs, $fsreel, $excludeSymbol = []){
        // если тип винвейс - то считаем выигрышные линии по другому
        if ($gameSettings->typeGame === 'WinWays'){
            $winLines = WinWaysWinLines::getWinLines($slotArea, $gameSettings, $gameData['BetToLine'], $gameData['Multiplier']);
        }elseif ($gameSettings->typeGame === 'AllPays'){
            $winLines = AllPaysWinLines::getWinLines($slotArea, $gameSettings, $gameData['BetToLine'], $gameData['Multiplier']);
        }
        else {
            $maxLines = $gameSettings->maxLines ?? $gameData['Lines'];
            //распределяем по линиям
            $lines = Lines::toLines($slotArea, $gameData['Lines'], $gameSettings->linesSet, $maxLines);
            //выбираем из линий выигрышные
            $winLines = WinLines::getWinLines($lines, $gameSettings, $excludeSymbol);
            //считаем выигрыш в каждой линии
            $winLines = PayWinLines::getPay($winLines, $gameSettings, $gameData, $fs, $fsreel);
            //находим позиции символов
            $winLines = SymbolsPositions::getStringPositions($winLines, $gameSettings->wild);
        }
        return $winLines;
    }

}
