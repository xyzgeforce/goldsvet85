<?php


namespace VanguardLTE\Games\GreentubeLib;


class Log
{
    private $gameId,$userId, $log;
    public function __construct($gameId, $userId){
        $this->gameId = $gameId;
        $this->userId = $userId;
        $history = \VanguardLTE\GameLog::where(['game_id' => $this->gameId, 'user_id' => $this->userId])->orderBy('id', 'desc')->first('str');
        if( isset($history['str']) )
        {
            $this->log = json_decode($history['str'], true);
        }
        else
        {
            $this->log = false;
        }
    }
    public function getLog(){
        return $this->log;
    }

    public function cardHistory(){
        return $this->log ? $this->log['CardHistory'] : 'H';
    }

    public function lastWin(){
        return $this->log ? $this->log['LastWin'] : 0;
    }

    public function getReserve(){
        return $this->log ? $this->log['Reserve'] : 0;
    }

    public static function setLog($log, $gameId, $userId, $shopId){
        \VanguardLTE\GameLog::create([
            'game_id' => $gameId,
            'user_id' => $userId,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'str' => json_encode($log),
            'shop_id' => $shopId
        ]);
    }


}
