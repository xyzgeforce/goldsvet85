<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class ExpandWild
{
    public static function replaceSlotArea($slotArea, $gameSettings){
        // если в катушке есть дикий символ - то заменить всю катушку на символы расширяющегося вайлда
        foreach ($slotArea as &$reel) {
            if (count(array_intersect($gameSettings->wild, $reel)) >= 1){
                foreach ($reel as &$symbol) {
                    $symbol = $gameSettings->expandReplaceSymbol;
                }
            }
        }
        return $slotArea;
    }

}
