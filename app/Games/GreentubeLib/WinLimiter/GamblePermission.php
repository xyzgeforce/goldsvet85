<?php


namespace VanguardLTE\Games\GreentubeLib\WinLimiter;


class GamblePermission
{
    public static function canWin($bank, $totalWin, $denomination, $card){
        // Проверить достаточно ли в банке денег для выигрыша
        if ($bank > $totalWin / $denomination){
            return rand(0,1);
        }else{
            return $card === 'black' ? 1 : 0;
        }
    }

}
