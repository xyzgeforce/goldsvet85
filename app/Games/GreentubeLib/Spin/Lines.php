<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class Lines
{
    public static function toLines($slotArea, $lines, $linesSet, $maxLines){
        $readyLines = [];
        for ($i = 0; $i < $lines && $i < $maxLines; $i++) { //цикл по количеству линий
            for ($j = 0; $j < count($slotArea); $j++) { // цикл по количеству катушек
                $readyLines[$i][$j] = $slotArea[$j][$linesSet[$i][$j]];
            }
        }
        return $readyLines;
    }

}
