<?php


namespace VanguardLTE\Games\GreentubeLib;


class OffFeature
{
    public static function similarReels($slotArea){
        if ($slotArea[0] === $slotArea[1] && $slotArea[0] === $slotArea[2]) return true;
        else return false;
    }

    public static function offJackpot($winlines, $symbols){
        foreach ($winlines as $winline) {
            if(in_array($winline['WinSymbol'], $symbols) && $winline['CountSymbols'] === 5) return false;
        }
    }

}
