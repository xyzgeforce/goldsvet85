<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class WinWaysWinLines
{
    public static function getWinLines($slotArea, $gameSettings, $bet, $multiplier){
        $winLines = [];
        $firstSymbols = $slotArea[0];
        $slotArea = self::CutSlotArea($slotArea, $multiplier);
        // берем первый символ и перебираем возможные комбинации с ним
        foreach ($firstSymbols as $firstKey => $firstSymbol) {
            if ($firstSymbol === $gameSettings->scatter) continue; // если первый символ скаттер то парсим следующую линию

            unset($tmpWinLines);
            unset($tmpLine);
            $tmpWinLines = []; // массив для формирования всех линий за проход
            $tmpLine[] = ['Symbol' => $firstSymbol, 'Reel' => 0, 'Position' => $firstKey]; // массив для формирования временной линии

            foreach ($slotArea as $reelKey => $reel) {
                if ($reelKey === 0) {
                    $tmpWinLines[] = $tmpLine;
                    continue; // если первая катушка - то переходим ко второй
                }
                // получить выигрышный символ чтобы сравнивать его
                $WinSymbol = $firstSymbol === $gameSettings->wild ? self::WinSymbol($tmpWinLines,$gameSettings->wild,$gameSettings->scatter) : $firstSymbol;
                // узнать является ли последний символ диким
                $lastSymbolIsWild = self::lastIsWild($tmpWinLines,$gameSettings->wild);

                // проверить содержит ли катушка нужные символы, иначе не продолжать искать и выйти break
                if (!count(array_intersect($gameSettings->wild, $reel)) >= 1 // если нет в катушке дикого символа
                    && !in_array($WinSymbol, $reel) // если нет в катушке  выигрышного символа
                    && !$lastSymbolIsWild // если предыдущий символ не дикий
                ) break;

                unset($tmpSymbols);
                $tmpSymbols = [];

                // перебирать посимвольно катушки. Если в одной катушке задержались то дублировать массив временных линий
                foreach ($reel as $symbolKey => $symbol) {
                    if (in_array($symbol, $gameSettings->wild)  // если символ дикий
                        || $symbol === $WinSymbol  // или если символ равен выигрышному в линии
                        || $lastSymbolIsWild // или если предыдущий символ дикий
                    ){ // тогда можно брать этот символ и работать с ним
                        unset($tmpSymbol);
                        $tmpSymbol[] = ['Symbol' => $symbol, 'Reel' => $reelKey, 'Position' => $symbolKey];
                        $tmpSymbols[] = $tmpSymbol;
                    }
                }
                $tmpLinesBox = [];
                foreach ($tmpSymbols as $Symbol) {
                    foreach ($tmpWinLines as $tmpWinLine) {
                        $tmpLinesBox[] = array_merge($tmpWinLine, $Symbol);
                    }
                }
                $tmpWinLines = $tmpLinesBox;
                unset($tmpLinesBox);
            }
            // заполняем массив линий правильным массивом выигрышной линии
            foreach ($tmpWinLines as $tmpWL) {
                // отсеиваем неоплачиваемые комбинации
                $winSymbol = self::WinSymbol($tmpWL, $gameSettings->wild, $gameSettings->scatter);
                $countWin = count($tmpWL);
                if (array_key_exists($countWin,$gameSettings->paymentTable[$winSymbol])) {
                    // заполняем массив
                    array_push($winLines, [
                        'WinSymbol' => $winSymbol,
                        'CountSymbols' => $countWin,
                        'Positions' => self::getPositions($tmpWL,$gameSettings->formatSymbols),
                        'Pay' => $gameSettings->paymentTable[$winSymbol][$countWin] * $bet * $gameSettings->freeSpinWinMultiplayer,
                        'Line' => 0
                    ]);
                }
            }
        }
        return $winLines;
    }

    private static function CutSlotArea($slotArea, $multiplier){
        foreach ($slotArea as $key => &$reel) {
            if ($key > $multiplier){
                unset($reel[0]);
                unset($reel[2]);
            }
        }
        return $slotArea;
    }

    private static function lastIsWild($winLines, $wild){
        foreach ($winLines as $line) {
            $symbol = $line[array_key_last($line)];
            if ($symbol['Symbol'] === $wild) return true;
        }
        return false;
    }

    private static function getPositions($winLine, $formatSymbols){
        $positions = '';
        foreach ($winLine as $symbol) {
            if ($formatSymbols === 'arr') $positions .= $symbol['Reel'].';'.$symbol['Position'].';';
            else $positions .= $symbol['Reel'].$symbol['Position'];
        }
        return $positions;
    }

    private static function WinSymbol($winLine, $wild, $scatter){
        $result = $wild;
        foreach ($winLine as $symbol) {
            // отдаем символ если он не из диких и не скаттер
            if (!in_array($symbol['Symbol'], $wild) && $symbol['Symbol'] !== $scatter) {
                $result = $symbol['Symbol'];
                break;
            }
        }
        return $result;
    }

}
