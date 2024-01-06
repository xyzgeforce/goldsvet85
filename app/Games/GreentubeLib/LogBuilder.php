<?php


namespace VanguardLTE\Games\GreentubeLib;


class LogBuilder
{
    public static function build($balance, $denomination, $totalWin, $freeSpins, $lines, $bet,$multiplier,
                                 $reelCount, $reelSetNumber, $positions, $winLines, $lastWin,
                                 $cardHistory, $bonus, $sticky = false, $needX = false, $scatteredWin = false, $bookBonus = false,
                                    $upgradeSymbolsBonus = false, $manyBookBonus = false, $beetleBonus = false,
                                 $bookOfMayaBonus = false){

        $s = 's,1';
        if ($freeSpins) $s = 's,5';
        if ($freeSpins['CountFreeSpins'] <= $freeSpins['CurrentFreeSpin']) $s = 's,1';
        if ($totalWin > 0 || $bonus || $upgradeSymbolsBonus || $scatteredWin || $manyBookBonus) $s = 's,11';

        return [
            'Balance' => $balance * $denomination,
            'Denomination' => $denomination,
            'TotalWin' => $totalWin,
            'FreeSpins' => $freeSpins,
            'LinesBet' => [$lines, $bet, $multiplier],
            'LastWin' => $lastWin,
            'State' => $s,
            'q' => $totalWin > 0 || $bonus ? 'q,1': 'q,0',
            'CardHistory' => $cardHistory,
            'ReelSet' => $reelSetNumber.','.$reelCount.','.implode(',', $positions),
            'NeedX' => $needX,
            'Sticky' => $sticky,
            'WinLines' => $winLines,
            'Bonus' => $bonus,
            'BookBonus' => $bookBonus,
            'UpgradeSymbolsBonus' => $upgradeSymbolsBonus,
            'ScatteredWin' => $scatteredWin,
            'ManyBookBonus' => $manyBookBonus,
            'BeetleBonus' => $beetleBonus,
            'BookOfMayaBonus' => $bookOfMayaBonus
        ];
    }

}
