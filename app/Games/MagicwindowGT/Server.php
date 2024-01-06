<?php


namespace VanguardLTE\Games\MagicwindowGT;

use VanguardLTE\Games\GreentubeFunctions\CommandsHandler;
use VanguardLTE\Game;
use VanguardLTE\Games\GreentubeLib\GameSettings;
use VanguardLTE\Shop;
use VanguardLTE\User;

set_time_limit(10);
class Server
{
    public function get($request, $gameName)
    {
        //проверка авторизации
        $userId = \Auth::id();
        if( $userId == null )
        {
            $response = '{"responseEvent":"error","responseType":"","serverResponse":"invalid login"}';
            exit( $response );
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $user = User::lockForUpdate()->find($userId);
        $shop = Shop::find($user->shop_id);
        $game = Game::where([
            'name' => $gameName,
            'shop_id' => $user->shop_id
        ])->lockForUpdate()->first();
        $init = require 'init.php';
        $settings = require 'settings.php';
        $gameSettings = new GameSettings($init);
        $gameSettings->manyBookSymbols = ['L','W','D','R','A','K','Q','J','T'];
        $gameSettings->strX = 'x,2,';
        $gameSettings->endStrX = '';
        $gameSettings->clearManySymbolsRight = true;
        $gameSettings->ReplaceManyBookSymbols = ['L' => 'Z','W' => 'U','D' => 'F','R' => 'G','A' => 'H','K' => 'C','Q' => 'V','J' => 'B','T' => 'N'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $response = 'Error. Not found response';
        //получаем в переменную что пришло из POST
        $postData = json_decode(trim(file_get_contents('php://input')), true);
       
        $response = CommandsHandler::result($postData,$init,$settings,$user,$game,$gameSettings);
        echo $response;
    }
}
