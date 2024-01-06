<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class ManyBook
{
    public static function getFirst($gameSettings){
        // просто генерируем строку для needX выбрав рандомно символ из возможных и отдаем для needX.
        return ','.$gameSettings->manyBookSymbols[array_rand($gameSettings->manyBookSymbols)];
    }

    public static function getSymbol($needX){
        // функция для возврата символа чтобы не считать его в линиях
        $tmpArr = explode(',', $needX);
        $symbols =  str_split($tmpArr[2]);
        return $symbols;
    }

    public static function addToSpin($needX, $gameSettings){
        // просто добавляем в левую часть строки то что находится в правой части, чтобы каждый спин было одинаково
        // x,3,,T,3
        $tmpArr = explode(',', $needX);
        if (!isset($gameSettings->clearManySymbolsRight)) $tmpArr[2] = $tmpArr[3];
        else $tmpArr[2] .= $tmpArr[3];
        if (isset($gameSettings->clearManySymbolsRight)) $tmpArr[3] = '';
        return implode(',', $tmpArr);
    }

    public static function addSymbol($gameSettings, $needX){
        $needX = self::addToSpin($needX, $gameSettings);
        // добавляем в строку еще один сгенерированый символ кроме тех что уже есть
        $tmpArr = explode(',', $needX); // получаем уже используемые символы
        $usedSymbols = str_split($tmpArr[2]);
        // если уже все символы использованы то ничего не добавлять
        if (count($usedSymbols) === count($gameSettings->manyBookSymbols)) return $needX;

        $newSymbol = $gameSettings->manyBookSymbols[array_rand($gameSettings->manyBookSymbols)];
        while (in_array($newSymbol,$usedSymbols)) $newSymbol = array_shift($gameSettings->manyBookSymbols);
        if (!isset($gameSettings->clearManySymbolsRight)) $tmpArr[3] .= $newSymbol;
        if (isset($gameSettings->clearManySymbolsRight)) {
            unset($tmpArr[3]);
            $tmpArr[3] = $newSymbol;
        }
        return implode(',', $tmpArr);
    }

    public static function checkPay($slotArea,$gameSettings,$gameData,$needX){
        $result = false;
        $needX = self::addToSpin($needX, $gameSettings);
        $bonusSymbols = self::getSymbol($needX);
        foreach ($bonusSymbols as $bonusSymbol) {
            // проверить игровое поле на наличие символов выбранной катушки
            $countWinSymbols = 0;
            $positions = '';
            foreach ($slotArea as $key => $reel) {
                foreach ($reel as $symbolKey => $symbol) {
                    if ( $symbol === $bonusSymbol || $symbol === $gameSettings->extraWild){
                        $countWinSymbols++;
                        $positions .= $key.$symbolKey;
                        break;
                    }
                }
            }
            if (array_key_exists($countWinSymbols, $gameSettings->paymentTable[$bonusSymbol])){
                $pay = $gameSettings->paymentTable[$bonusSymbol][$countWinSymbols] *
                    $gameData['BetToLine'] * $gameData['Lines'];
                $bonus = [
                    'Symbol' => $gameSettings->ReplaceManyBookSymbols[$bonusSymbol],
                    'Count' => $countWinSymbols,
                    'Pay' => $pay,
                    'SymbolsPositions' => $positions,
                    'FreeSpinCount' => 0 //для формата
                ];
                $result[] = $bonus;
            }
        }
        return $result;
    }

}
