<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class TotalWin
{
    public static function getTotal($lines, $bonus, $scatteredWin, $bookBonus = false, $manyBookBonus = false,
                                    $beetleBonus = false){
        $total = 0;
        foreach ($lines as $line){
            $total += $line['Pay'];
        }
        $total += $bonus['Pay'] ?: 0;
        $total += $bookBonus['Pay'] ?: 0;
        if ($scatteredWin){
            foreach ($scatteredWin as $item) {
                $total += $item['Pay'];
            }
        }
        if ($manyBookBonus){
            foreach ($manyBookBonus as $manyBonus) {
                $total += $manyBonus['Pay'];
            }
        }
        if ($beetleBonus){
                $total += $beetleBonus['Pay'];
        }
        return $total;
    }

}
