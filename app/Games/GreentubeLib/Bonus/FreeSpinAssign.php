<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class FreeSpinAssign
{
    public static function assign($bonus, $gameSettings){
        if ($bonus){
            // назначить количество фриспинов в зависимости от количества выпавших скаттеров
            $freeSpinsCount = $gameSettings->freeSpinsCountScatter[$bonus['Count']];
            // если игра книжная - то выбираем катушку рандомно иначе - берем катушку из настроек
            $reel = $gameSettings->bookReels ? array_rand($gameSettings->bookReels) : $gameSettings->freeSpinsReel;
            if ($gameSettings->upgradeReel) $reel ++;
            if (isset($gameSettings->startUpgradeReel)) $reel = $gameSettings->startUpgradeReel;
            //формируем массив для строки фриспинов
            return [
                'CountFreeSpins' => $freeSpinsCount,
                'CurrentFreeSpin' => 0,
                'Reel' => $reel,
                'TotalWin' => 0,
                'Pay' => $bonus['Pay']

            ];
        }else{ return false; }
    }

    public static function countFreeSpin($bonus, $gameSettings, $currentFreeSpins, $reelNumber){
        $currentFreeSpins['Reel'] = $reelNumber;
        $currentFreeSpins['AddFs'] = false;
        if ($bonus){ // если выпал бонус - добавляем фриспинов
            $freeSpinsCount = $gameSettings->freeSpinsCountScatter[$bonus['Count']];
            $currentFreeSpins['CountFreeSpins'] += $freeSpinsCount;
            $currentFreeSpins['AddFs'] = $freeSpinsCount > 0;
        }
        $currentFreeSpins['CurrentFreeSpin']++;
        return $currentFreeSpins;
    }

    public static function addWin($currentFreeSpins, $totalWin){
        $currentFreeSpins['Pay'] = $totalWin + $currentFreeSpins['TotalWin'];
        return $currentFreeSpins;
    }

}
