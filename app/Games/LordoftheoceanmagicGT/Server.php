<?php


namespace VanguardLTE\Games\LordoftheoceanmagicGT;

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
        $gameSettings->manyBookSymbols = ['1','2','3','4','A','K','Q','J','T'];
        $gameSettings->strX = 'x,3,';
        $gameSettings->endStrX = ','.$postData['Lines'];
        $gameSettings->ReplaceManyBookSymbols = ['1' => 'O','2' => 'P','3' => 'R','4' => 'U','A' => 'V','K' => 'W','Q' => 'X','J' => 'Y','T' => 'Z'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $response = 'Error. Not found response';
       
        $response = CommandsHandler::result($postData,$init,$settings,$user,$game,$gameSettings);
        echo $response;
    }
}
