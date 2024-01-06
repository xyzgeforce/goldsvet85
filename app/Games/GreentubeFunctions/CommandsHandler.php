<?php


namespace VanguardLTE\Games\GreentubeFunctions;

use VanguardLTE\Games\GreentubeLib\Log;

class CommandsHandler
{
    public static function result($postData, $init, $settings, $user, $game, $gameSettings)
    {

        \DB::beginTransaction();
        try {

            $log = new Log($game->id, $user->id);
            $shop = \VanguardLTE\Shop::find($user->shop_id);
            $bank = \VanguardLTE\GameBank::where(['shop_id' => $user->shop_id])->first();
            $jpgs = \VanguardLTE\JPG::where(['shop_id' => $user->shop_id])->lockForUpdate()->get();

            if ($postData['Command'] === 'load') {
                $response = Loader::loadGame($init, $settings, $user->balance * $game->denomination,
                    $log->getLog(), $gameSettings, $game->denomination, $jpgs, $shop->currency, $user, $game, $bank);
                exit($response);
            }

            if ($postData['Command'] === 'bet') {
                $response = Spin::getSpin($shop, $bank, $jpgs, $gameSettings, $postData, $user, $game, $log);
            }

            if ($postData['Command'] === 'collect') {
                $response = Collect::collect($game, $user, $log->getLog(), $gameSettings->formatWin, $gameSettings->formatSticky);
            }

            if ($postData['Command'] === 'freespin') {
                $response = FreeSpin::freeSpin($shop, $bank, $jpgs, $gameSettings, $postData, $user, $game, $log);
            }

            if ($postData['Command'] === 'gamble') {
                $response = Gamble::state($game, $user, $log->getLog());
            }

            if ($postData['Command'] === 'red' || $postData['Command'] === 'black') {
                $response = Gamble::playGamble($bank, $postData['Command'], $game, $user, $log->getLog());
            }
            \DB::commit();
            exit($response);
        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error($e);
        }
    }

}
