<?php


namespace VanguardLTE\Games\BookoframagicGT;

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
        //получаем в переменную что пришло из POST
        $postData = json_decode(trim(file_get_contents('php://input')), true);
        $gameSettings = new GameSettings($init);
        $gameSettings->manyBookSymbols = ['E','M','S','C','A','K','Q','J','T'];
        $gameSettings->strX = 'x,3,';
        $gameSettings->endStrX = ','.$postData['Lines'];
        $gameSettings->ReplaceManyBookSymbols = ['E' => 'D','M' => 'F','S' => 'G','C' => 'H','A' => 'I','K' => 'L','Q' => 'O','J' => 'P','T' => 'R'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $response = 'Error. Not found response';
       
        $response = CommandsHandler::result($postData,$init,$settings,$user,$game,$gameSettings);
        echo $response;
    }
}
