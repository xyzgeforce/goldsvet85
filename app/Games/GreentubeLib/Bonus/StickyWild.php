<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class StickyWild
{
    // функция для замены символов на дикий в игровом поле
    public static function replaceSlotArea($slotArea, $wild, $log){
        $wild = $wild[0]; // для того чтобы работать с диким символом не как с массивом (для двойных диких нет липкого)
        // заполнить игровое поле липкими символами
        $sticky = $log['Sticky'];
        $pointer = 0;
        foreach ($slotArea as &$reel){
            foreach ($reel as &$symbol) {
                if ($sticky[$pointer] === $wild){
                    $symbol = $wild;
                    $pointer++;
                }else $pointer++;
            }
        }
        return $slotArea;
    }
    //функция для формирования массива липких диких из игрового поля
    public static function getSticky($slotArea, $wild, $firstStateSticky){
        $wild = $wild[0]; // для того чтобы работать с диким символом не как с массивом (для двойных диких нет липкого)
        $sticky = [];
        // проверяем игровое поле на наличие диких символов и пишем в массив липких 1 или 0 если есть или нет.
        foreach ($slotArea as $reel){
            foreach ($reel as $symbol) {
                if ($symbol === $wild && $firstStateSticky) $sticky[] = $wild;
                else $sticky[] = '-';
            }
        }
        return $sticky;
    }
}
