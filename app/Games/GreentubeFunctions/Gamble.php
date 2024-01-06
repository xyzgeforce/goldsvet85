<?php


namespace VanguardLTE\Games\GreentubeFunctions;


use VanguardLTE\Games\GreentubeLib\Formatter;
use VanguardLTE\Games\GreentubeLib\Gamble\GambleState;
use VanguardLTE\Games\GreentubeLib\Gamble\PlayGamble;
use VanguardLTE\Games\GreentubeLib\Log;
use VanguardLTE\Games\GreentubeLib\MoneyTransfer\SwitchBoard;

class Gamble
{

    public static function state($game, $user, $log){
        //считаем q и делаем состояние
        $log = GambleState::setState($log);
        //пишем новый лог
        Log::setLog($log, $game->id,$user->id,$user->shop_id);
        //возвращаем лог через форматтер
        $formatter = new Formatter();
        return json_encode($formatter->spinToServer($log));
    }

    public static function playGamble($bank, $card, $game, $user, $log){
        $bet = $log['TotalWin'];
        //вернуть результат игры
        $result = PlayGamble::play($card, $log, $game->denomination, $bank->slots);
        //отдать отфрорматированый результат игры
        Log::setLog($result, $game->id,$user->id,$user->shop_id);
        $totalWin = $result['TotalWin'] ?? 0;
        // вернуть в банк или забрать из банка еще, если выигрыш
        SwitchBoard::gambleCalculateMoney($user,$game,$bank,$bet,$totalWin);
        $formatter = new Formatter();
        return json_encode($formatter->spinToServer($result));
    }

}
