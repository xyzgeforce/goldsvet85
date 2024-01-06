<?php


namespace VanguardLTE\Games\GreentubeLib\Bonus;


class BookOfMaya
{
    public static function respinFS(&$slotArea, $gameSettings, $fsReel){
        $bookSymbol = $gameSettings->bookReels[$fsReel];
        $bookCount = 0;
        foreach ($slotArea as $reel){
            // если есть в катушке символ - то пропускаем
            if (in_array($bookSymbol, $reel)) $bookCount++;
        }
        if (array_key_exists($bookCount, $gameSettings->paymentTable[$bookSymbol])) {
            // Проверить в каких катушках есть выбранный символ, остальные еще раз сгенерировать
            foreach ($slotArea as $key => &$reel) {
                // если есть в катушке символ - то пропускаем
                if (in_array($bookSymbol, $reel)) continue;
                else {
                    // сгенерировать новые символы
                    $cyclReelSet = $gameSettings->reelsSet[$fsReel][$key].substr($gameSettings->reelsSet[$fsReel][$key], 0, 10);
                    $reel = str_split(substr($cyclReelSet, -11, 3));
                }
            }
            $strArea = '';
            // вернуть игровое поле в виде строки
            foreach ($slotArea as $strReel){
                foreach ($strReel as $symbol) {
                    $strArea .= $symbol;
                }
            }
            return 'x,1,'.$strArea;
        }else return false;
    }
}
