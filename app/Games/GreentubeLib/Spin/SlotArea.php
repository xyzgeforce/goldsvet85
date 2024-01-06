<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class SlotArea
{
    public static function getSlotArea($positions, $reelsSet, $reelSetNumber, $reelCount, $symbolsToReel, $extraBet){
        $slotArea = [];
        for ($i=0; $i< $reelCount; $i++){ // цикл по количеству катушек для игры
            //зацикливаем строку чтобы катушки были скреплены
            $cyclReelSet = $reelsSet[$reelSetNumber][$i].substr($reelsSet[$reelSetNumber][$i], 0, 10);
            // для каждой катушки берем строку и отсчитывая от позиции забираем количество символов для катушки, преобразуем в массив
            $slotArea[] = str_split(substr($cyclReelSet, $positions[$i], $symbolsToReel));
        }
        if(!$extraBet && count($slotArea) > 4) unset($slotArea[5]);
        return $slotArea;
    }

}
