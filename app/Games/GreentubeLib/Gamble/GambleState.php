<?php


namespace VanguardLTE\Games\GreentubeLib\Gamble;


class GambleState
{
    public static function setState($log){
        $log['State'] = 's,3';
        $log['q'] = self::getQ($log['TotalWin']);
        return $log;
    }

    private static function getQ($win){
        $arrQ = [];
        $q = $win;
        // TODO Сделать максимальную сумму удвоения и проверку на это
        for ($i = 0; $i < 10; $i++){
            $arrQ[] = 'q,'.($q * 2).',0';
            $q *= 2;
        }
        return $arrQ;
    }
}
