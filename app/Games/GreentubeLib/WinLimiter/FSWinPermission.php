<?php


namespace VanguardLTE\Games\GreentubeLib\WinLimiter;


class FSWinPermission
{
    public static function canWin($bank, $bet, $denomination){
        // проверить достаточно ли в банке денег для резерва
        return $bank->bonus > ($bet / $denomination);
    }

}
