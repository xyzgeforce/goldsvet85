<?php


namespace VanguardLTE\Games\GreentubeLib\Crutches;


class MysticSecret
{
    public static function bastardsFromGreentube($positions, $reelsSet, $reelSetNumber){
        foreach ($positions as $reel => &$position) {
            //зацикливаем строку чтобы катушки были скреплены
            $cyclReelSet = $reelsSet[$reelSetNumber][$reel].substr($reelsSet[$reelSetNumber][$reel], 0, 10);
            newPosition:
            // для каждой катушки берем строку и отсчитывая от позиции забираем количество символов для катушки, преобразуем в массив
            $reelSymbols = substr($cyclReelSet, $position, 3);

            if ($reelSymbols === 'SSS')continue;

            if (stripos($reelSymbols, 'SS') !== false){
                $position++;
                goto newPosition;
            }

            if (stripos($reelSymbols, 'S') !== false) {// Если в катушке одна S и предыдущий или последующий символ тоже S
                if (substr($cyclReelSet, ($position + 1), 1) === 'S' || substr($cyclReelSet, ($position - 1), 1) === 'S'){
                    // то есть если катушка зацепила S из тройного S
                    $position++;
                    goto newPosition;
                }
            }
        }
        return $positions;
    }
}
