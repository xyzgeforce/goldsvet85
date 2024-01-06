<?php


namespace VanguardLTE\Games\GreentubeLib\WinLimiter;


class SpinWinPermission
{
    public static function canWin($bankOrReserve, $totalWin, $game, $RTP, $bet){
        //$bet = $bet / $game->denomination;
        //$currentRTP = $game->stat_out > 0 && $game->stat_in > 0 ? $game->stat_out / $game->stat_in * 100 : 0;

        // чтобы убрать тупые выигрыши меньше ставки
        //if ( ($totalWin / $game->denomination) <= $bet && $currentRTP < $RTP) return false;

        // Если нет выигрыша - проверить низкий ли текущий RTP
        /*if ($totalWin < 1) {
            // Если RTP низкий - и в банке есть х10 ставок - респин (вернуть false)
            if ($currentRTP < $RTP && $bankOrReserve > $bet * 5) return false;
            // Если в банке нет х10 ставок - то пропускаем (вернуть true)
            else return true;
        }*/
        // Проверить достаточно ли в банке денег для выигрыша
        if ($bankOrReserve < $totalWin / $game->denomination) return false;
        else return true;
    }

}
