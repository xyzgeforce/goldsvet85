<?php


namespace VanguardLTE\Games\GreentubeLib;


class ClearState
{
    public static function clear($log){
        $state = 's,1';
        if($log['FreeSpins']){
            $log['FreeSpins']['TotalWin'] = $log['FreeSpins']['Pay'];
            if ($log['FreeSpins']['CountFreeSpins'] > $log['FreeSpins']['CurrentFreeSpin']) $state = 's,5';
            else {
                $state = 's,1';
                unset($log['Sticky']);
            }
        }
        unset($log['TotalWin']);
        unset($log['q']);
       // unset($log['WinLines']);
        unset($log['GambleRound']);
        $log['State'] = $state;
        return $log;
    }

    public static function clearFreeSpins($log){}

}
