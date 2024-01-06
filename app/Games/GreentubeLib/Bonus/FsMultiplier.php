<?php

namespace VanguardLTE\Games\GreentubeLib\Bonus;

class FsMultiplier
{
    public static function getFsMult($fs, $gameSettings, $fsreel){
        if (isset($gameSettings->Chicago) && $fs){
            $multiplier = $fsreel;
            switch ($fsreel){
                case 4:
                    $multiplier = 5;
                    break;
                case 5:
                    $multiplier = 10;
                    break;
            }
            return $multiplier;
        }
        return $fs ? $gameSettings->freeSpinWinMultiplayer : 1;
    }

}
