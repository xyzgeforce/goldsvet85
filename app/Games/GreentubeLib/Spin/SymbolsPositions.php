<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class SymbolsPositions
{
    public static function getStringPositions($lines, $wild){
        foreach ($lines as &$line){
            $stringSymbols = '';
            $endLine = false;
            foreach ($line['Symbols'] as $symbol) {
                if (!$endLine && (in_array($symbol, $wild) || $symbol === $line['WinSymbol'])) $stringSymbols .= $symbol;
                else {
                    $stringSymbols .= '-';
                    $endLine = true;
                }
            }
            $line['Positions'] = $stringSymbols;
        }
        return $lines;
    }

    public static function scatterPositions($slotArea, $scatter, $scattersCount, $extraWild): string
    {
        $positions = '';
        foreach ($slotArea as $keyReel => $reel) {
            foreach ($reel as $keySymbol => $symbol) {
                if ($scattersCount <= strlen($positions) / 2) break;
                if ($symbol === $scatter || $extraWild && $symbol === $extraWild) $positions .= $keyReel.$keySymbol;
            }
        }
        return $positions;
    }

}
