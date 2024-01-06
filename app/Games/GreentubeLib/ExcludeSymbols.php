<?php

namespace VanguardLTE\Games\GreentubeLib;

use VanguardLTE\Games\GreentubeLib\Bonus\ManyBook;

class ExcludeSymbols
{
    public static function getExclude($gameSettings, $needX, $reelNumber){
        if (isset($gameSettings->manyBookSymbols)) return ManyBook::getSymbol($needX);
        if (isset($gameSettings->bookGame)) return [$gameSettings->bookReels[$reelNumber]];
    }

}
