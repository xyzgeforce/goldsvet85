<?php


namespace VanguardLTE\Games\GreentubeLib\Spin;


class WinLines
{
    public static function getWinLines($lines, $gameSettings, $excludeSymbol = []){
        $winLines = [];
        foreach ($lines as $ln => $line) {
            //если уникальных элементов столько же сколько элементов всего в массиве
            // и нет диких символов на 1 и 2 символе - то идем в следующую линию
            if (count(array_unique($line)) === count($line)
                && !in_array($line[0], $gameSettings->wild)
                && !in_array($line[1], $gameSettings->wild)) continue;
            //если первые 2 символа не равны, и первые 2 символа не дикие то идем в следующую линию
            if ($line[0] !== $line[1]
                && !in_array($line[0], $gameSettings->wild)
                && !in_array($line[1], $gameSettings->wild)) continue;
            //если первый символ скаттер - то парсим следующую линию
            if ($line[0] === $gameSettings->scatter
                && !in_array($gameSettings->scatter, $gameSettings->wild)) continue;


            $winSymbols[$ln] = []; // счетчик совпавших символов
            foreach ($line as $key => $symbol) { //парсим массив по символам
                if ($key === 0) {
                    array_push($winSymbols[$ln], $symbol); //добавляем символ в массив с номером линии
                    continue;
                }
                // если символ не содержится в массиве линии и массив не состоит полностью из диких символов
                // и сам символ не дикий - то выходим и проверяем следующую линию.
                if (!in_array($symbol, $winSymbols[$ln])
                    && in_array(array_unique($winSymbols[$ln]), $gameSettings->wild)
                    && !in_array($symbol, $gameSettings->wild)
                    ) break;
                if ($gameSettings->bookReels && in_array($symbol, $gameSettings->bookReels)) break; // не считать линии с выбранными символами для фриспинов.

                if (in_array($symbol, $gameSettings->wild) || // если символ дикий
                    // если предыдущий символ дикий И символ уже имеется в массиве
                    in_array($winSymbols[$ln][$key - 1], $gameSettings->wild) && in_array($symbol, $winSymbols[$ln]) ||
                    $symbol === $winSymbols[$ln][$key - 1] || // если символ равен предыдущему символу
                    // в массиве только дикие символы
                    count(array_unique($winSymbols[$ln])) === 1 && in_array($winSymbols[$ln][array_key_last($winSymbols[$ln])], $gameSettings->wild) )
                {
                    array_push($winSymbols[$ln], $symbol); //добавляем символ в массив
                } else break;
            }

            // проверяем линию по таблице выплат, если в таблице по ключу [symbol][symbolCount] есть значение - то выплачиваем
            $winSymbol = self::getWinSymbol($winSymbols[$ln], $gameSettings, $lines);
            if ($winSymbol !== false && array_key_exists(count($winSymbols[$ln]), $gameSettings->paymentTable[$winSymbol])
                // если символ не находится в массиве исключенных символов которые не считать
            && !in_array($winSymbol, $excludeSymbol) && $winSymbol !== $gameSettings->scatter) {
                $winLines[$ln] = [
                    'Line' => $ln,
                    'Symbols' => $line,
                    'WinSymbol' => $winSymbol,
                    'CountSymbols' => count($winSymbols[$ln]),
                ];
            }
        }
        return $winLines;
    }

    private static function getWinSymbol(&$winSymbols, $gameSettings, $lines)
    {
        if (count($winSymbols) < 2) return $winSymbols[0]; // чтобы не проверять линии которые по 1 символу
        // если первый символ не дикий возвращаем его
        if (!in_array($winSymbols[0], $gameSettings->wild)) return $winSymbols[0];
        // возвращаем второй символ если он не дикий
        if (!in_array($winSymbols[1], $gameSettings->wild)) return $winSymbols[1];
        // проверить сколько диких символов подряд, и есть ли такая цифра в оплате диких
        $countWild = self::countWild($winSymbols, $gameSettings->wild);
        // если нет оплаты диких - то возвращаем следующий за диким символ, или если их 5 то идем дальше
        if (!isset($gameSettings->paymentTable[$winSymbols[0]][$countWild])
            && isset($winSymbols[$countWild])) return $winSymbols[$countWild];
        // если есть и она равна количеству символов в линии - то возвращаем дикий
        if ($countWild == count($winSymbols)) return $winSymbols[0];
        // проверяем оплату за дикий и обычный символ что больше
        else{
            $countSymbol = self::countSymbol($winSymbols, $gameSettings->wild);
            if (isset($gameSettings->paymentTable[$winSymbols[0]][$countWild])
                && isset($gameSettings->paymentTable[$winSymbols[$countWild]][$countSymbol])){
                $wildPay = $gameSettings->paymentTable[$winSymbols[0]][$countWild];
                if ($wildPay < 0){
                    $wildPay = $gameSettings->paymentTable[$winSymbols[0]][$countWild] * -1 * count($lines);
                }
                $symbolPay = $gameSettings->paymentTable[$winSymbols[$countWild]][$countSymbol];
                // сравниваем оплату за дикие символы и за обычные символы
                if ($wildPay > $symbolPay) {
                    // удалить все символы кроме диких из линии
                    $winSymbols = array_slice($winSymbols,0 ,$countWild);
                    return $winSymbols[0];
                }
                // если за дикие символы оплата больше - возвращаем дикий символ иначе символ после дикого
                else return $winSymbols[$countWild];
            }else return false;
            }
    }

    private static function countWild($winSymbols, $wild){
        $countWild = 0;
        foreach ($winSymbols as $winSymbol) {
            if (in_array($winSymbol, $wild)) $countWild++;
            else break;
        }
        return $countWild;
    }

    private static function countSymbol($winSymbols, $wild){
        $countSymbol = 0;
        foreach ($winSymbols as $key => $winSymbol) {
            if (in_array($winSymbol, $wild) || in_array($winSymbols[$key - 1], $wild)
            || $winSymbols[$key - 1] === $winSymbol) $countSymbol++;
            else break;
        }
        return $countSymbol;
    }
}
