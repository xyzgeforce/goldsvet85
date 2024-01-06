<?php


namespace VanguardLTE\Games\GreentubeLib;


use VanguardLTE\Games\GreentubeLib\Bonus\BonusFeature;

class LoadState
{

    public static function getState($log, $userBalance, $init, $formatWin, $positions, $reelSetNumber, $reelCount,
                                    $denomination, $user, $game, $bank){

        // заменить ставки в файле init из таблицы games
        $init = self::setBets($init, $game->bet, $denomination);

        if($log){ // если есть лог - то грузим состояние из лога
            $formatter = new Formatter();
            $log['Balance'] = $userBalance;

            foreach ($init as $key => $value) {
                $arrValue = explode(',',$value);
                switch ($arrValue[0]){
                    case 'e':
                        unset($init[$key]);
                        break;
                }
            }

            $init = array_merge($init, $formatter->spinToServer($log, $formatWin));
        }else{
            BonusFeature::GreentubeBonusIdent($user, $game, $bank);
            $init = array_merge($init, [
                "A1",
                "C,".$denomination.",€,-1",
                "R",
                "M,1,100000000,40,-1,1054912",
                "I11",
                "H,0,0,0,0,0,0",
                "X",
                "b,1000,1000,0",]);
            array_push($init, "S" . $userBalance);
            array_push($init, 'r,'.$reelSetNumber.','.$reelCount.','.implode(',', $positions));
            array_push($init, "s,1");
        }
        return $init;
    }

    private static function setBets($init, $bets, $denomination){
        $gameBets = explode(',', $bets);
        foreach ($gameBets as &$bet) {
            $bet *= $denomination;
        }
        $keyBets = 0;
        foreach ($init as $key => $value) {
            $arrValue = explode(',', $value);
            switch ($arrValue[0]) {
                case ':b':
                    $keyBets = $key;
                    break;
            }
        }
        $init[$keyBets] = ':b,'.count($gameBets).','.implode($gameBets, ',');
        return $init;
    }

}
