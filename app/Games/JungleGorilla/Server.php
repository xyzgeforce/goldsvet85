<?php 
namespace VanguardLTE\Games\JungleGorilla
{

     use VanguardLTE\Game;
    use VanguardLTE\Games\JungleGorilla\PragmaticLib\Collect;
    use VanguardLTE\Games\JungleGorilla\PragmaticLib\GameSettings;
    use VanguardLTE\Games\JungleGorilla\PragmaticLib\Loader;
    use VanguardLTE\Games\JungleGorilla\PragmaticLib\Log;
    use VanguardLTE\Games\JungleGorilla\PragmaticLib\Spin;
    use VanguardLTE\Games\JungleGorilla\PragmaticLib\DoMysteryScatter;
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
                if( $action == "doInit")
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
                if ($action == 'doCollect'){
                    $response = Collect::collect($user, $index, $counter, $log, $callbackUrl, $game);
                    exit( $response );
                }
                ///////////////////////////////////////////
                if ($action == 'doMysteryScatter'){
                    $response = DoMysteryScatter::doMystery($user, $game);
                    exit( $response );
                }
                ///////////////////////////////////////////
                if( $request['action'] == 'settings' )
                {
                    $response = 'SoundState=true_true_true_false_false;FastPlay=false;Intro=true;StopMsg=0;TurboSpinMsg=0;BetInfo=0_0;BatterySaver=false;ShowCCH=false;ShowFPH=true;CustomGameStoredData=;Coins=false;Volume=1;InitialScreen=3,5,3_8,6,8_7,5,7_4,3,5_7,6,8;SBPLock=true';
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
