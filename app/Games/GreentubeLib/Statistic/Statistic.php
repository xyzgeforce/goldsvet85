<?php


namespace VanguardLTE\Games\GreentubeLib\Statistic;


class Statistic
{
        public static function setStatistic($user, $totalWin, $game, $bank, $bet, $toSlotBank, $toJackpot, $toProfit, $fs, $slotArea){
        if ($fs) $addName = ' FS';
        else $addName = '';
        \VanguardLTE\StatGame::create([
            'user_id' => $user->id,
            'balance' => (double)$user->balance,
            'bet' => (double)$bet,
            'win' => (double)$totalWin,
            'game' => $game->name.$addName,
            'in_game' => (double)$toSlotBank,
            'in_jpg' => (double)$toJackpot,
            'in_profit' => (double)$toProfit,
            'denomination' => $game->denomination,
            'shop_id' => $user->shop_id,
            'slots_bank' => (double)$bank->slots,
            'bonus_bank' => (double)$bank->bonus,
            'fish_bank' => (double)$bank->fish_bank,
            'table_bank' => (double)$bank->table_bank,
            'little_bank' => (double)$bank->little,
            'total_bank' => (double)$bank->slots + $bank->bonus + $bank->fish_bank + $bank->table_bank + $bank->little,
            'symbols' => self::getSymbols($slotArea)
        ]);
    }

    public static function setGamble($user, $game, $bet, $totalWin, $bank){
        \VanguardLTE\StatGame::create([
            'user_id' => $user->id,
            'balance' => (double)$user->balance,
            'bet' => (double)$bet,
            'win' => (double)$totalWin,
            'game' => $game->name.' Gamble',
            'in_game' => 0,
            'in_jpg' => 0,
            'in_profit' => 0,
            'denomination' => $game->denomination,
            'shop_id' => $user->shop_id,
            'slots_bank' => (double)$bank->slots,
            'bonus_bank' => (double)$bank->bonus,
            'fish_bank' => (double)$bank->fish_bank,
            'table_bank' => (double)$bank->table_bank,
            'little_bank' => (double)$bank->little,
            'total_bank' => (double)$bank->slots + $bank->bonus + $bank->fish_bank + $bank->table_bank + $bank->little
        ]);
    }

    private static function getSymbols($slotArea){
        $symbols = [];
        foreach ($slotArea as $reel) {
            foreach ($reel as $key => $symbol) {
                $symbols[$key] = array_key_exists($key, $symbols) ? $symbols[$key].$symbol.'_' : $symbol.'_';
            }
        }
        $symbols = implode(",", $symbols);
        return $symbols;
    }
}
