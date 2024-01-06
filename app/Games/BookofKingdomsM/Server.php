<?php 
namespace VanguardLTE\Games\BookofKingdomsM
{

     use VanguardLTE\Game;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\Collect;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\GameSettings;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\Loader;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\Log;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\Spin;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\DoMysteryScatter;
    use VanguardLTE\Games\BookofKingdoms\PragmaticLib\DoBonus;
    use VanguardLTE\Shop;
    use VanguardLTE\User;

    set_time_limit(10);
    class Server
    {
        public function FormatFloat($num)
        {
            $str0 = explode('.', $num);
            if( isset($str0[1]) ) 
            {
                if( strlen($str0[1]) > 4 ) 
                {
                    return round($num * 100) / 100;
                }
                else if( strlen($str0[1]) > 2 ) 
                {
                    return floor($num * 100) / 100;
                }
                else
                {
                    return $num;
                }
            }
            else
            {
                return $num;
            }
        }
        public function get($request, $game)
        {
            try
                {

                  $userId = \Auth::id();  
                 if( $userId == null )
                {
                    $response = '{"responseEvent":"error","responseType":"","serverResponse":"invalid login"}';
                    var_dump($request->callbackUrl);
                    var_dump($request->userId);
                    exit( $response );
                }
                $user = User::lockForUpdate()->find($userId);
                $shop = Shop::find($user->shop_id);
                $game = Game::where([
                    'name' => $game,
                    'shop_id' => $user->shop_id
                ])->lockForUpdate()->first();
                $bank = \VanguardLTE\GameBank::where(['shop_id' => $user->shop_id])->first();
                $jpgs = \VanguardLTE\JPG::where(['shop_id' => $user->shop_id, ])->lockForUpdate()->get();
                $init = require 'init.php';
                $log = new Log($game->id, $user->id);
                $callbackUrl = $request->callbackUrl;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                

                $action = $request->input('action');
                $bet = $request->input('c');
                $lines = $request->input('l');
                $index = $request->input('index');
                $counter = $request->input('counter');
                // $doubleChance = $request->input('bl');
                $pur = $request->input('pur');
                /*$panic = $request->input('panic');
                $panic1 = $request->input('panic1');
                if ($panic){
                    return $panic($panic1);
                }*/

                ///////////////////////////////////////////

                				if(isset($jpgs) && $jpgs && $request->input('action') && $request->input('action') == 'doSpin'){
					//s1
					
					$slotJackPercent = [];
					$slotJackpot = [];
					for( $jp = 0; $jp < count($jpgs); $jp++ ) 
					{
						if( $jpgs[$jp]->balance != '' ) 
						{
							$slotJackpot[$jp] = sprintf('%01.4f', $jpgs[$jp]->balance);
							$slotJackpot[$jp] = substr($slotJackpot[$jp], 0, strlen($slotJackpot[$jp]) - 2);
							$slotJackPercent[] = $jpgs[$jp]->percent;
						}
					}
					//s2
					$bet = $bet * $game->denomination;
					$count_balance = $user->count_balance;
					$slotJackSum = [];
					$isJackPay = 0;
					$isJackId = 0;
					for( $jp = 1; $jp <= count($jpgs); $jp++ ) 
					{
						if( $jpgs[$jp - 1]->balance != '' ) 
						{
							$slotJackpot[$jp - 1] = number_format($jpgs[$jp - 1]->balance, 4, '.', '');
							if( $count_balance == 0 ) 
							{
								$slotJackSum[$jp - 1] = $slotJackpot[$jp - 1];
							}
							else if( $count_balance < $bet ) 
							{
								$slotJackSum[$jp - 1] = number_format($count_balance / 100 * $slotJackPercent[$jp - 1] + $slotJackpot[$jp - 1], 4, '.', '');
							}
							else
							{
								$slotJackSum[$jp - 1] = number_format($bet / 100 * $slotJackPercent[$jp - 1] + $slotJackpot[$jp - 1], 4, '.', '');
							}
							$leftOver = $slotJackSum[$jp - 1];
							if( $jpgs[$jp - 1]->get_pay_sum() <= $slotJackpot[$jp - 1] && !$isJackPay && $jpgs[$jp - 1]->get_pay_sum() > 0 ) 
							{
								if( $jpgs[$jp - 1]->user_id && $jpgs[$jp - 1]->user_id != $user->id ) 
								{
								}
								else
								{
									$isJackPay = 1;
									$isJackId = $jp - 1;
								}
							}
							$slotJackpot[$jp - 1] = sprintf('%01.2f', $slotJackSum[$jp - 1]);
							$leftOver = $leftOver + ($bet / 500);
							$jpgs[$jp - 1]->balance = sprintf('%01.6f', $leftOver);
							// if( isset($payJack) &&  $payJack > 0 )$jpgs[$i]->user_id = NULL;
							// if( isset($isJackPay) && $isJackPay === 1 )$jpgs[$jp - 1]->user_id = NULL;
							$jpgs[$jp - 1]->save();
						}
					}
					$game->save();
					for( $jp = 0; $jp < count($jpgs); $jp++ ) 
					{
						if( $jpgs[$jp]->balance != '' && $jpgs[$jp]->balance < $jpgs[$jp]->get_min('start_balance') ) 
						{
							$summ = $jpgs[$jp]->get_start_balance() - $jpgs[$jp]->balance;
							if( $summ > 0 ) 
							{
								$jpgs[$jp]->add_jpg('add', $summ);
							}
						}
					}
					//final
					if($isJackPay){
						$jID = $isJackId;
						$user->balance = $this->FormatFloat($user->balance + $slotJackpot[$jID]); $user->save(); \VanguardLTE\StatGame::create(["user_id" => $user->id, "balance" => $user->balance, "bet" => 0, "win" => $slotJackpot[$jID], "game" => $game->name . " JPG " . ($jID+1) , "in_game" => 0, "in_jpg" => 0, "in_profit" => 0, "shop_id" => $user->shop_id, "date_time" => \Carbon\Carbon::now()]); $jpgs[$jID]->user_id = NULL;
						$jackState = 'idle';
						// $slotSettings->SetBalance($slotJackpot[$jID]);
						// $slotSettings->ClearJackpot($jID);
							$jpgs[$jID]->balance = sprintf('%01.4f', 0);
							$jpgs[$jID]->save();
						// end clear
						$response = '{"responseEvent":"jackpot","responseType":"jackpot","serverResponse":{}}';
						// $slotSettings->SaveLogReport($response, 0, 0, $slotSettings->slotJackpot[$jID], 'JPG');
						// $balanceInCents = sprintf('%01.2f', $slotSettings->GetBalance()) * 100;
						$slotJackpot[$jID] = 0;
					}
				}
				/* if(isset($jpgs) && $jpgs && $request->input('action') && $request->input('action') == 'doSpin'){
					$bet = $bet;
					$count_balance = $user->count_balance;
					$jsum = [];
					$payJack = 0;
					for( $i = 0; $i < count($jpgs); $i++ ) 
					{
						if( $count_balance == 0 ) 
						{
							$jsum[$i] = $jpgs[$i]->balance;
						}
						else if( $count_balance < $bet ) 
						{
							$jsum[$i] = $count_balance / 100 * $jpgs[$i]->percent + $jpgs[$i]->balance;
						}
						else
						{
							$jsum[$i] = $bet / 100 * $jpgs[$i]->percent + $jpgs[$i]->balance;
						}
						if( $jpgs[$i]->get_pay_sum() < $jsum[$i] && $jpgs[$i]->get_pay_sum() > 0 ) 
						{
							if( $jpgs[$i]->user_id && $jpgs[$i]->user_id != $user->id ) 
							{
							}
							else
							{
								$payJack = $jpgs[$i]->get_pay_sum();
								$jsum[$i] = $jsum[$i] - $jpgs[$i]->get_pay_sum();
								$user->balance = $this->FormatFloat($user->balance + $jpgs[$i]->get_pay_sum());
								$user->save();
								if( $jpgs[$i]->get_pay_sum() > 0 ) 
								{
									\VanguardLTE\StatGame::create([
										"user_id" => $user->id, 
										"balance" => $user->balance, 
										"bet" => 0, 
										"win" => $jpgs[$i]->get_pay_sum(), 
										"game" => $game->name . " JPG " . $jpgs[$i]->id, 
										"in_game" => 0, 
										"in_jpg" => 0, 
										"in_profit" => 0, 
										"shop_id" => $user->shop_id, 
										"date_time" => \Carbon\Carbon::now()
									]);
								}
							}
						}
						$jpgs[$i]->balance = $jsum[$i] + (($bet * $lines) / 100);
						if( isset($payJack) &&  $payJack > 0 )$jpgs[$i]->user_id = NULL;
						if( isset($isJackPay) && $isJackPay === 1 )$jpgs[$jp - 1]->user_id = NULL;
						$jpgs[$i]->save();
						if( $jpgs[$i]->balance < $jpgs[$i]->get_min("start_balance") ) 
						{
							$summ = $jpgs[$i]->get_start_balance();
							if( $summ > 0 ) 
							{
								$jpgs[$i]->add_jpg("add", $summ);
							}
						}
					}
				}

                ///////////////////////////////////////////
                */ if( $action == "doInit")
                {
                    $loader = new Loader($init, $user->balance, $log);
                    $response = $loader->initStr();
                    exit( $response );
                }
                ///////////////////////////////////////////
                if ($action == 'doSpin'){
                    $gameSettings = new GameSettings($init);
                    $response = Spin::spinResult($user, $game, $bet, $lines, $log, $gameSettings, $index, $counter, $callbackUrl, $pur, $bank, $shop, $jpgs);
                    exit( $response );
                }
                ///////////////////////////////////////////
                if ($action == 'doCollect' || $action == 'doCollectBonus' ){
                    $response = Collect::collect($user, $index, $counter, $log, $callbackUrl, $game);
                    exit( $response );
                }
                ///////////////////////////////////////////
                if ($action == 'doMysteryScatter'){
                    $response = DoMysteryScatter::doMystery($user, $game);
                    exit( $response );
                }
                ///////////////////////////////////////////
                if ($action == 'doBonus'){
                    var_dump('before doBonus');
                    $gameSettings = new GameSettings($init);
                    $response = DoBonus::doBonus($user, $game, $bet, $lines, $log->getLog(), $index, $counter, $bank, $shop, $jpgs, $gameSettings->all);
                    exit( $response );
                }
                ///////////////////////////////////////////
                if( $request['action'] == 'settings' )
                {
                    $response = 'SoundState=true_true_true_false_false;FastPlay=false;Intro=false;StopMsg=0;TurboSpinMsg=0;BetInfo=0_0;BatterySaver=false;ShowCCH=false;ShowFPH=true;CustomGameStoredData=;Coins=false;Volume=1;InitialScreen=10,7,6_11,3,9_6,4,8_5,11,4_10,11,7;SBPLock=true';
                    exit( $request['settings'] );
                }
                ///////////////////////////////////////////
                if( $request['action'] == 'update' )
                {
                    $time = (int) round(microtime(true) * 1000);
                    $response = 'balance_bonus=0.00&balance='.$user->balance.'&balance_cash='.$user->balance.'&stime='.$time;
                    exit( $response );
                }
                ///////////////////////////////////////////
                    $response = ["error" => 0,"description" => "OK"];
                    echo json_encode($response);
                }
                catch( \Exception $e ) 
                {
                }
             
        }
    }

}
