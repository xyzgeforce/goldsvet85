<?php

namespace VanguardLTE\Games\GreentubeLib\Bonus;

class Multiplier
{
    public static function getMult($gameSettings, $line){
        $multiplier = 1;
        if($gameSettings->wildMultiplier){
            if(in_array($gameSettings->wildMultiplier['Symbol'], $line['Symbols'])){
                $multiplier = $gameSettings->wildMultiplier['Multiplier'];
            }
        }
        if($gameSettings->fsWildMutiplier) {
            if (in_array($gameSettings->fsWildMutiplier['Symbol'], $line['Symbols'])) {
                $multiplier = $gameSettings->fsWildMutiplier['Multiplier'];
            }
        }
        return $multiplier;
    }

}
