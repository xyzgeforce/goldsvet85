<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class StopPositions
{
    public static function getPositions($reelsSet, $reelSetNumber, $reelCount){
        $positions = [];
        for ($i=0; $i < $reelCount; $i++){
            $positions[] = rand(0, strlen($reelsSet[$reelSetNumber][$i]) - 1);
        }
        return $positions;
    }

}
