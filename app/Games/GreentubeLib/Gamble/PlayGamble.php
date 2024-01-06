<?php


namespace VanguardLTE\Games\GreentubeLib\Gamble;


use VanguardLTE\Games\GreentubeLib\WinLimiter\GamblePermission;

class PlayGamble
{
    public static function play($card, $log, $denomination, $bank){
        $cards = [
            ['C','S'],
            ['H','D']
        ];
        $colors = ['black', 'red'];
        $colorCard = GamblePermission::canWin($bank,$log['TotalWin'],$denomination, $card);
        $dealerCard = $cards[$colorCard][rand(0,1)];
        $log['CardHistory'] = substr($log['CardHistory'], -6) . $dealerCard; //добавили карту в историю которая выпала

        if($colors[$colorCard] == $card){ // выигрыш
            if (!array_key_exists('GambleRound', $log)) $log['GambleRound'] = [];
            array_push($log['GambleRound'], 'g,'.$log['TotalWin'].',0'); // пишем раунд
            $log['TotalWin'] = $log['TotalWin'] * 2; //удваиваем выигрыш
        }else{ // проигрыш
            $state = $log['FreeSpins'] ? 's,5' : 's,1';
            // удаляем все признаки выигрыша
            $log['State'] = $state;
            unset($log['TotalWin']);
            unset($log['q']);
            unset($log['WinLines']);
            unset($log['GambleRound']);
        }
        return $log;
    }

}
