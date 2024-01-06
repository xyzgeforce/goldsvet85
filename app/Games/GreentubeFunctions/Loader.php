<?php

namespace VanguardLTE\Games\GreentubeFunctions;



use VanguardLTE\Games\GreentubeLib\LoadState;
use VanguardLTE\Games\GreentubeLib\Spin\StopPositions;

class Loader{

public static function loadGame($init, $settings, $userBalance, $log, $gameSettings, $denomination, $jpgs, $currency, $user, $game, $bank) {
    $positions = StopPositions::getPositions($gameSettings->reelsSet, $gameSettings->reelSetNumber, $gameSettings->reelCount);
    //записываем состояние из лога если он есть или генерируем
    $init = LoadState::getState($log, $userBalance, $init, $gameSettings->formatWin, $positions, $gameSettings->reelSetNumber,
        $gameSettings->reelCount, $denomination, $user, $game, $bank);
    $jp = ['
            '.$jpgs[0]->balance,'100','500000','2000'];
    $tst = ['MULTIPLIER','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50','LINES','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50','JACKPOTWINS','[{"b":0,"t":0,"s":true,"p":0.5,"n":""},{"b":0,"t":0,"s":true,"p":1,"n":""},{"b":0,"t":0,"s":true,"p":1,"n":""}]',''];
    $readyCurrency = ['€',$currency];
    $initGame = [$readyCurrency, $tst, $jp, $init];
    return json_encode($initGame);
}
}
