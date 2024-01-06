<?php


namespace VanguardLTE\Games\GreentubeFunctions;


use VanguardLTE\Games\GreentubeLib\ClearState;
use VanguardLTE\Games\GreentubeLib\Formatter;
use VanguardLTE\Games\GreentubeLib\Log;
use VanguardLTE\Games\GreentubeLib\MoneyTransfer\SwitchBoard;

class Collect
{

    public static function collect($game, $user, $log, $formatWin, $formatSticky){
        //изменить баланс пользователя TODO сделать изменение баланса
        //изменить total_out слота
        $log = SwitchBoard::collectMoney($log,$user,$game);
        //удалить все принадлежности выигрыша и изменить состояние слота
        $log = ClearState::clear($log);
        //записать новый лог
        Log::setLog($log, $game->id, $user->id, $user->shop_id);
        //прогнать новый лог через форматтер и отдать
        $formatter = new Formatter();
        return json_encode($formatter->spinToServer($log, $formatWin, $formatSticky));
    }

}
