<?php
namespace VanguardLTE\Games\GunsNRosesNET {
    set_time_limit(5);
    class Server {
        public function get($request, $game) {
            return \DB::transaction(function () use ($request, $game) {
                try {
                    $userId = \Auth::id();
                    if ($userId == null) {
                        $response = '{"responseEvent":"error","responseType":"","serverResponse":"invalid login"}';
                        return $response;
                    }
                    $slotSettings = new SlotSettings($game, $userId);
                    if (!$slotSettings->is_active()) {
                        $response = '{"responseEvent":"error","responseType":"","serverResponse":"Game is disabled"}';
                        return $response;
                    }
                    $postData = $_GET;
                    $postData['slotEvent'] = 'bet';
                    if ($postData['action'] == 'freespin') {
                        $postData['slotEvent'] = 'freespin';
                        $postData['action'] = 'spin';
                    }
                    if ($postData['action'] == 'respin') {
                        $postData['slotEvent'] = 'respin';
                        $postData['action'] = 'spin';
                    }
                    if ($postData['action'] == 'init' || $postData['action'] == 'reloadbalance') {
                        $postData['action'] = 'init';
                        $postData['slotEvent'] = 'init';
                    }
                    if ($postData['action'] == 'paytable') {
                        $postData['slotEvent'] = 'paytable';
                    }
                    if ($postData['action'] == 'initfreespin') {
                        $postData['slotEvent'] = 'initfreespin';
                    }
                    if ($postData['action'] == 'initbonus') {
                        $postData['slotEvent'] = 'initbonus';
                    }
                    if ($postData['action'] == 'bonusaction') {
                        $postData['slotEvent'] = 'bonus';
                    }
                    if ($postData['action'] == 'endbonus') {
                        $postData['slotEvent'] = 'endbonus';
                    }
                    if (isset($postData['bet_denomination']) && $postData['bet_denomination'] >= 1) {
                        $postData['bet_denomination'] = $postData['bet_denomination'] / 100;
                        $slotSettings->CurrentDenomination = $postData['bet_denomination'];
                        $slotSettings->SetGameData($slotSettings->slotId . 'Denomination', $postData['bet_denomination']);
                    }
                    else if ($slotSettings->HasGameData($slotSettings->slotId . 'Denomination')) {
                        $postData['bet_denomination'] = $slotSettings->GetGameData($slotSettings->slotId . 'Denomination');
                        $slotSettings->CurrentDenomination = $postData['bet_denomination'];
                    }
                    $balance = round($slotSettings->GetBalance() * $slotSettings->CurrentDenomination * 100);
                    $resultData = [
                        'gameServerVersion' => '2.6.0',
                        'g4mode' => 'false',
                        'playercurrency' => $slotSettings->slotCurrency,
                        'playercurrencyiso' => $slotSettings->slotCurrency,
                        'jackpotcurrency' => $slotSettings->slotCurrency,
                        'jackpotcurrencyiso' => $slotSettings->slotCurrency,
                        'isJackpotWin' => 'false',
                        'historybutton' => 'false',
                        'playforfun' => 'false',
                        'credit' => $balance,
                        'cjpUrl' => 'https://cjp-dev.casinomodule.com',
                        'gamesoundurl' => 'https://static.casinomodule.com/'
                    ];
                    $lines = 20;
                    $linesId = [];
                    $linesId[0] = [2, 2, 2, 2, 2];
                    $linesId[1] = [1, 1, 1, 1, 1];
                    $linesId[2] = [3, 3, 3, 3, 3];
                    $linesId[3] = [1, 2, 3, 2, 1];
                    $linesId[4] = [3, 2, 1, 2, 3];
                    $linesId[5] = [1, 1, 2, 1, 1];
                    $linesId[6] = [3, 3, 2, 3, 3];
                    $linesId[7] = [2, 3, 3, 3, 2];
                    $linesId[8] = [2, 1, 1, 1, 2];
                    $linesId[9] = [2, 1, 2, 1, 2];
                    $linesId[10] = [2, 3, 2, 3, 2];
                    $linesId[11] = [1, 2, 1, 2, 1];
                    $linesId[12] = [3, 2, 3, 2, 3];
                    $linesId[13] = [2, 2, 1, 2, 2];
                    $linesId[14] = [2, 2, 3, 2, 2];
                    $linesId[15] = [1, 2, 2, 2, 1];
                    $linesId[16] = [3, 2, 2, 2, 3];
                    $linesId[17] = [1, 3, 1, 3, 1];
                    $linesId[18] = [3, 1, 3, 1, 3];
                    $linesId[19] = [1, 3, 3, 3, 1];
                    if (isset($postData['bet_betlevel']) && $postData['slotEvent'] == 'bet') {
                        $betline = $postData['bet_betlevel'];
                        if ($lines <= 0 || $betline <= 0.0001) {
                            $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bet state"}';
                            return $response;
                        }
                        if ($balance < ($lines * $betline * $slotSettings->CurrentDenomination * 100)) {
                            $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid balance"}';
                            return $response;
                        }
                    }
                    if ($slotSettings->GetGameData($slotSettings->slotId . 'FreeGames') < $slotSettings->GetGameData($slotSettings->slotId . 'CurrentFreeGame') && $postData['slotEvent'] == 'freespin') {
                        $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bonus state"}';
                        return $response;
                    }
                    switch ($postData['action']) {
                        case 'init':
                            $lastEvent = $slotSettings->GetHistory();
                            $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', 0);
                            $slotSettings->SetGameData($slotSettings->slotId . 'BonusWin', 0);
                            $slotSettings->SetGameData($slotSettings->slotId . 'FreeGameType', 0);
                            $slotSettings->SetGameData($slotSettings->slotId . 'FreeGames', 0);
                            $slotSettings->SetGameData($slotSettings->slotId . 'CurrentFreeGame', 0);
                            $slotSettings->SetGameData($slotSettings->slotId . 'Bet', $slotSettings->Bet[0]);
                            $slotSettings->SetGameData($slotSettings->slotId . 'Denomination', $slotSettings->CurrentDenomination);
                            if ($lastEvent != 'NULL') {
                                $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', $lastEvent->serverResponse->totalWin);
                                $slotSettings->SetGameData($slotSettings->slotId . 'BonusWin', $lastEvent->serverResponse->bonusWin);
                                $slotSettings->SetGameData($slotSettings->slotId . 'FreeGameType', $lastEvent->serverResponse->freeGameType);
                                $slotSettings->SetGameData($slotSettings->slotId . 'FreeGames', $lastEvent->serverResponse->totalFreeGames);
                                $slotSettings->SetGameData($slotSettings->slotId . 'CurrentFreeGame', $lastEvent->serverResponse->currentFreeGame);
                                $slotSettings->SetGameData($slotSettings->slotId . 'Bet', $lastEvent->serverResponse->slotBet);
                                $slotSettings->SetGameData($slotSettings->slotId . 'Denomination', $lastEvent->serverResponse->currentDenomination);
                                $reels = json_decode(json_encode($lastEvent->serverResponse->reels), true);
                            }
                            else {
                                $reels = $slotSettings->GetReelStrips('none', 'bet');
                            }
                            $rs = [
                                'i2' => ['r' => [], 'id' => 'basic'], 
                                'i1' => ['r' => [], 'id' => 'respin'], 
                                'i0' => ['r' => [], 'id' => 'freespin']
                            ];
                            for ($i = 0; $i < 5; $i++) {
                                $rs['i2']['r']['i' . $i] = [
                                    'hold' => 'false',
                                    'pos' => $reels['rp'][$i],
                                    'syms' => implode(',', ['SYM' . $reels['reel' . ($i + 1)][0], 'SYM' . $reels['reel' . ($i + 1)][1], 'SYM' . $reels['reel' . ($i + 1)][2]])
                                ];
                                $rs['i1']['r']['i' . $i] = [
                                    'hold' => 'false',
                                    'pos' => 0,
                                    'syms' => implode(',', ['SYM' . rand(3, 12), 'SYM' . rand(3, 12), 'SYM' . rand(3, 12)])
                                ];
                                $rs['i0']['r']['i' . $i] = [
                                    'hold' => 'false',
                                    'pos' => 0,
                                    'syms' => implode(',', ['SYM' . rand(3, 12), 'SYM' . rand(3, 12), 'SYM' . rand(3, 12)])
                                ];
                            }
                            $bl = ['standard' => implode(',', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19])];
                            for ($i = 0; $i < $lines; $i++) {
                                $bl['i' . $i] = ['id' => $i, 'reelset' => 'ALL', 'line' => [], 'coins' => 1];
                                for ($j = 0; $j < 5; $j++) {
                                    $bl['i' . $i]['line'][$j] = $linesId[$i][$j] - 1;
                                }
                                $bl['i' . $i]['line'] = implode(',', $bl['i' . $i]['line']);
                            }
                            $denominations = [];
                            for ($i = 0; $i < count($slotSettings->Denominations); $i++) {
                                $denominations[$i] = $slotSettings->Denominations[$i] * 100;
                            }
                            $resultDataEx = [
                                'rs' => $rs,
                                'bl' => $bl,
                                'gameEventSetters' => ['enabled' => 'false'],
                                'game' => [
                                    'win' => ['cents' => 0, 'coins' => 0, 'amount' => 0]
                                ],
                                'staticsharedurl' => 'https://static-shared.casinomodule.com/gameclient_html/devicedetection/current',
                                'totalwin' => ['coins' => 0, 'cents' => 0],
                                'config' => [
                                    'gameParameters' => [
                                        'quickSpinActive' => 'false',
                                        'quickStopAvailable' => 'true',
                                        'quickSpinAvailable' => 'true',
                                        'showMaxWinProbability' => 'false',
                                        'clockRequired' => 'false'
                                    ]
                                ],
                                'gamestate' => ['current' => 'basic'],
                                'clientaction' => $postData['action'],
                                'casinoID' => 'netent',
                                'betlevel' => [
                                    'standard' => $slotSettings->GetGameData($slotSettings->slotId . 'Bet'),
                                    'all' => implode(',', $slotSettings->Bet)
                                ],
                                'gameover' => 'true',
                                'nextaction' => 'spin',
                                'denomination' => [
                                    'all' => implode(',', $denominations),
                                    'standard' => $slotSettings->GetGameData($slotSettings->slotId . 'Denomination') * 100
                                ],
                                'multiplier' => 1,
                                'autoplay' => implode(',', [10, 25, 50, 75, 100, 250, 500, 750, 1000]),
                                'nearwinallowed' => 'true',
                                'restore' => 'false',
                                'wavecount' => 1,
                                'threespins' => ['count' => 0]
                            ];
                            $resultData = array_merge($resultData, $resultDataEx);
                            break;
                        case 'paytable':
                            $bl = [];
                            for ($i = 0; $i < $lines; $i++) {
                                $bl['i' . $i] = ['id' => $i, 'reelset' => 'ALL', 'line' => [], 'coins' => 1];
                                for ($j = 0; $j < 5; $j++) {
                                    $bl['i' . $i]['line'][$j] = $linesId[$i][$j] - 1;
                                }
                                $bl['i' . $i]['line'] = implode(',', $bl['i' . $i]['line']);
                            }
                            $pt = ['i0' => ['comp' => [], 'id' => 'basic'], 'i1' => ['comp' => [], 'id' => 'freespin']];
                            $index = 0;
                            $symbolCnt = count($slotSettings->SymbolGame);
                            for ($i = 0; $i < $symbolCnt; $i++) {
                                for ($j = 3; $j <= 5; $j++) {
                                    $symbol = $slotSettings->SymbolGame[$i];
                                    if (isset($slotSettings->Paytable['SYM_' . $symbol]) && $slotSettings->Paytable['SYM_' . $symbol][$j] > 0) {
                                        $pt['i0']['comp']['i' . $index] = [
                                            'type' => 'betline',
                                            'symbol' => 'SYM' . $symbol,
                                            'n' => $j,
                                            'multi' => $slotSettings->Paytable['SYM_' . $symbol][$j],
                                            'freespins' => 0
                                        ];
                                        $index++;
                                    }
                                }
                            }                                
                            $resultDataEx = [
                                'bl' => $bl,
                                'clientaction' => $postData['action'],
                                'pt' => $pt
                            ];
                            $resultData = array_merge($resultData, $resultDataEx);
                            break;
                        case 'initfreespin':
                            $lastEvent = $slotSettings->GetHistory();
                            if ($lastEvent == 'NULL') {
                                $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bonus state"}';
                                return $response;
                            }
                            $lastResponseData = json_decode(json_encode($lastEvent->serverResponse->responseData), true);
                            $rs = [
                                'i2' => ['r' => $lastResponseData['rs']['i0']['r'], 'id' => 'basic'], 
                                'i1' => ['r' => [], 'id' => 'respin'], 
                                'i0' => ['r' => [], 'id' => 'freespin']
                            ];
                            for ($i = 0; $i < 5; $i++) {
                                $rs['i1']['r']['i' . $i] = [
                                    'hold' => 'false',
                                    'pos' => 0,
                                    'syms' => implode(',', ['SYM' . rand(3, 12), 'SYM' . rand(3, 12), 'SYM' . rand(3, 12)])
                                ];
                                $rs['i0']['r']['i' . $i] = [
                                    'hold' => 'false',
                                    'pos' => 0,
                                    'syms' => implode(',', ['SYM' . rand(3, 12), 'SYM' . rand(3, 12), 'SYM' . rand(3, 12)])
                                ];
                            }
                            $resultDataEx = [
                                'rs' => $rs,
                                'freespins' => $lastResponseData['freespins'],
                                'next' => ['rs' => 'freespin'],
                                'gamestate' => $lastResponseData['gamestate'],
                                'game' => $lastResponseData['game'],
                                'totalwin' => $lastResponseData['totalwin'],
                                'bet' => [
                                    'betlines' => $lastResponseData['freespins']['betlines'],
                                    'betlevel' => $lastResponseData['freespins']['betlevel'],
                                    'denomination' => $lastResponseData['freespins']['denomination']
                                ],
                                'gameover' => 'false',
                                'nextaction' => 'freespin',
                                'clientaction' => $postData['action'],
                                'multiplier' => 1,
                                'wavecount' => 1
                            ];
                            $resultData = array_merge($resultData, $resultDataEx);
                            break;
                        case 'spin':
                            if ($postData['slotEvent'] != 'freespin' && $postData['slotEvent'] != 'respin') {
                                $betline = $postData['bet_betlevel'];
                                $allbet = $betline * $lines;
                                $slotSettings->UpdateJackpots($allbet);
                                if (!isset($postData['slotEvent'])) {
                                    $postData['slotEvent'] = 'bet';
                                }
                                $slotSettings->SetBalance(-1 * $allbet, $postData['slotEvent']);
                                $bankSum = $allbet / 100 * $slotSettings->GetPercent();
                                $slotSettings->SetBank((isset($postData['slotEvent']) ? $postData['slotEvent'] : ''), $bankSum, $postData['slotEvent']);
                                $slotSettings->UpdateJackpots($allbet);
                                $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', 0);
                                $slotSettings->SetGameData($slotSettings->slotId . 'BonusWin', 0);
                                $slotSettings->SetGameData($slotSettings->slotId . 'FreeGames', 0);
                                $slotSettings->SetGameData($slotSettings->slotId . 'CurrentFreeGame', 0);
                                $slotSettings->SetGameData($slotSettings->slotId . 'Bet', $betline);
                                $bonusMpl = 1;
                            }
                            else {
                                $betline = $slotSettings->GetGameData($slotSettings->slotId . 'Bet');
                                $allbet = $betline * $lines;
                                $slotSettings->SetGameData($slotSettings->slotId . 'CurrentFreeGame', $slotSettings->GetGameData($slotSettings->slotId . 'CurrentFreeGame') + 1);
                                $bonusMpl = $slotSettings->slotFreeMpl;
                            }
                            $winTypeTmp = $slotSettings->GetSpinSettings($postData['slotEvent'], $allbet, $lines);
                            $winType = $winTypeTmp[0];
                            $winLimit = $winTypeTmp[1];
                            if ($winType == 'bonus' && ($postData['slotEvent'] == 'freespin' || $postData['slotEvent'] == 'respin')) {
                                $winType = 'win';
                            }
                            for ($i = 0; $i <= 2000; $i++) {
                                $totalWin = 0;
                                $lineWinCnt = [];
                                $lineWins = [];
                                $winData = [];
                                $wild = '1';
                                $scatter = '0';
                                $stackedWild = '';
                                $stackedReel = -1;
                                $reels = $slotSettings->GetReelStrips($winType, $postData['slotEvent']);
                                if ($postData['slotEvent'] != 'freespin' && $postData['slotEvent'] != 'respin') {
                                    // $reels = [
                                    //     'reel1' => ['0','9','12'],
                                    //     'reel2' => ['7','8','6'],
                                    //     'reel3' => ['9','3','0'],
                                    //     'reel4' => ['11','9','12'],
                                    //     'reel5' => ['11','0','7'],
                                    //     'rp' => [0, 0, 0, 0, 0]
                                    // ];
                                    if (rand(0, 10) < 10) {
                                        $reels = $slotSettings->GetReelStrips($winType, 'respin');
                                    }
                                }
                                if ($postData['slotEvent'] == 'freespin') {
                                    $stackedReel = rand(1, 3);
                                    if ($stackedReel == 1)
                                        $stackedWild = '4';
                                    else if ($stackedReel == 2)
                                        $stackedWild = '3';
                                    else
                                        $stackedWild = '5';
                                }
                                for ($j = 0; $j < $lines; $j++) {
                                    $firstSymbol = $reels['reel1'][$linesId[$j][0] - 1];
                                    if (in_array($wild, $reels['reel1']) || $firstSymbol == $stackedWild)
                                        $firstSymbol = $wild;
                                    if (!isset($slotSettings->Paytable['SYM_' . $firstSymbol]))
                                        continue;
                                    $lineWinCnt[$j] = 1;
                                    $lineWins[$j] = 0;
                                    $winPos = ['i0' => '0,' . ($linesId[$j][0] - 1)];
                                    for ($k = 1; $k < 5; $k++) {
                                        $symbol = $reels['reel' . ($k + 1)][$linesId[$j][$k] - 1];
                                        if ($symbol == $firstSymbol || in_array($wild, $reels['reel' . ($k + 1)]) || $k == $stackedReel || $symbol == $stackedWild) {
                                            $lineWinCnt[$j] = $lineWinCnt[$j] + 1;
                                            $winPos['i' . $k] = $k . ',' . ($linesId[$j][$k] - 1);
                                        }
                                        else if ($firstSymbol == $wild) {
                                            $firstSymbol = $symbol;
                                            $lineWinCnt[$j] = $lineWinCnt[$j] + 1;
                                            $winPos['i' . $k] = $k . ',' . ($linesId[$j][$k] - 1);
                                        }
                                        else if ($firstSymbol == $scatter) {
                                            $lineWinCnt[$j] = 0;
                                            break;
                                        }
                                        else {
                                            break;
                                        }
                                    }
                                    $lineWins[$j] = $slotSettings->Paytable['SYM_' . $firstSymbol][$lineWinCnt[$j]] * $betline;
                                    if ($lineWins[$j] > 0) {
                                        $totalWin += $lineWins[$j];
                                        $winData['i' . count($winData)] = [
                                            'betline' => $j,
                                            'pos' => $winPos,
                                            'reelset' => 'basic',
                                            'types' => [
                                                'i0' => [
                                                    'coins' => $lineWins[$j] / $slotSettings->CurrentDenomination,
                                                    'wintype' => 'coins',
                                                    'cents' => $lineWins[$j] * 100
                                                ]
                                            ],
                                            'sym' => 'SYM' . $firstSymbol,
                                            'direction' => 'left_to_right'
                                        ];
                                    }
                                }

                                $scatterCount = 0;
                                $scatterPos = [];
                                $nearWin = [];
                                for ($j = 1; $j <= 5; $j++) {
                                    for ($k = 0; $k < 3; $k++) {
                                        if (in_array($j, [1, 3, 5]) && $scatterCount > 1 && $k == 0) {
                                            $nearWin[] = $j - 1;
                                        }
                                        if ($reels['reel' . $j][$k] == $scatter) {
                                            $scatterPos['i' . $scatterCount] = ($j - 1) . ',' . $k;
                                            $scatterCount++;
                                        }
                                    }
                                }
                
                                if ($i > 1000) {
                                    $winType = 'none';
                                }
                                if ($i >= 2000) {
                                    $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"Bad Reel Strip"}';
                                    return $response;
                                }
                                if ($slotSettings->MaxWin < ($totalWin * $slotSettings->CurrentDenomination)) {
                                }
                                else {
                                    $minWin = $slotSettings->GetRandomPay();
                                    if ($i > 700) {
                                        $minWin = 0;
                                    }
                                    if ($slotSettings->increaseRTP && $winType == 'win' && $totalWin < ($minWin * $allbet)) {
                                        continue;
                                    }
                                    else if ($scatterCount >= 3 && $winType != 'bonus') {
                                        continue;
                                    }
                                    else if ($totalWin <= $winLimit && $winType == 'bonus') {
                                        $bankMoney = $slotSettings->GetBank((isset($postData['slotEvent']) ? $postData['slotEvent'] : ''));
                                        if ($bankMoney < $winLimit) {
                                            $winLimit = $bankMoney;
                                        }
                                        else {
                                            break;
                                        }
                                    }
                                    else if ($totalWin > 0 && $totalWin <= $winLimit && $winType == 'win') {
                                        $bankMoney = $slotSettings->GetBank((isset($postData['slotEvent']) ? $postData['slotEvent'] : ''));
                                        if ($bankMoney < $winLimit) {
                                            $winLimit = $bankMoney;
                                        }
                                        else {
                                            break;
                                        }
                                    }
                                    else if ($totalWin == 0 && $winType == 'none') {
                                        break;
                                    }
                                }
                            }
                            
                            if ($totalWin > 0) {
                                $slotSettings->SetBank((isset($postData['slotEvent']) ? $postData['slotEvent'] : ''), -1 * $totalWin);
                                $slotSettings->SetBalance($totalWin);
                            }
                            $balance = round($slotSettings->GetBalance() * $slotSettings->CurrentDenomination * 100);
                            $resultDataEx = [
                                'game' => ['win' => [
                                    'coins' => $totalWin / $slotSettings->CurrentDenomination, 
                                    'cents' => $totalWin * 100, 
                                    'amount' => $totalWin
                                    ]
                                ],
                                'crosscake' => ['positions' => 'null'],
                                'next' => ['rs' => 'basic'],
                                'gamestate' => ['history' => 'basic', 'current' => 'basic', 'stack' => 'basic'],
                                'clientaction' => $postData['action'],
                                'totalwin' => [
                                    'coins' => $totalWin / $slotSettings->CurrentDenomination,
                                    'cents' => $totalWin * 100
                                ],
                                'credit' => $balance,
                                'gameover' => 'true',
                                'multiplier' => 1,
                                'nextaction' => 'spin',
                                'wavecount' => 1,
                                'threespins' => ['count' => 0]
                            ];
                            $rs = ['i0' => ['r' => [], 'id' => 'basic']];
                            if (!empty($nearWin)) {
                                $rs['i0']['nearwin'] = implode(',', $nearWin);
                            }
                            for ($i = 0; $i < 5; $i++) {
                                $rs['i0']['r']['i' . $i] = [
                                    'hold' => 'false',
                                    'pos' => $reels['rp'][$i],
                                    'syms' => implode(',', ['SYM' . $reels['reel' . ($i + 1)][0], 'SYM' . $reels['reel' . ($i + 1)][1], 'SYM' . $reels['reel' . ($i + 1)][2]])
                                ];
                                if (in_array($wild, $reels['reel' . ($i + 1)]) || $i == $stackedReel) {
                                    $rs['i0']['r']['i' . $i]['overlay'] = [];
                                    for ($j = 0; $j < 3; $j++) {
                                        $rs['i0']['r']['i' . $i]['overlay']['i' . $j] = ['pos' => $reels['rp'][$i] + $j, 'with' => 'SYM' . $wild, 'row' => $j];
                                    }
                                }
                                else if (!empty($stackedWild)) {
                                    $rs['i0']['r']['i' . $i]['overlay'] = [];
                                    for ($j = 0; $j < 3; $j++) {
                                        if ($reels['reel' . ($i + 1)][$j] == $stackedWild) {
                                            $rs['i0']['r']['i' . $i]['overlay']['i' . count($rs['i0']['r']['i' . $i]['overlay'])] = ['pos' => $reels['rp'][$i] + $j, 'with' => 'SYM' . $wild, 'row' => $j];
                                        }
                                    }
                                }
                                if ($scatterCount >= 3) {
                                    if (in_array($scatter, $reels['reel' . ($i + 1)])) {
                                        $rs['i0']['r']['i' . $i]['attention'] = [];
                                        for ($j = 0; $j < 3; $j++) {
                                            $rs['i0']['r']['i' . $i]['attention']['i' . $j] = $j;
                                        }
                                    }
                                }
                            }

                            if ($postData['slotEvent'] == 'freespin') {
                                $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin') + $totalWin);
                                $slotSettings->SetGameData($slotSettings->slotId . 'BonusWin', $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin') + $totalWin);

                                $rs['i0']['id'] = 'freespin';
                                $resultDataEx['fsfeature'] = ['symbol' => 'SYM' . $stackedWild];

                                $leftFreeGames = $slotSettings->GetGameData($slotSettings->slotId . 'FreeGames') - $slotSettings->GetGameData($slotSettings->slotId . 'CurrentFreeGame');
                                if ($leftFreeGames > 0)  {
                                    $resultDataEx['next']['rs'] = 'freespin';
                                    $resultDataEx['last']['rs'] = 'freespin';
                                    $resultDataEx['nextaction'] = 'freespin';
                                    $resultDataEx['gamestate'] = ['history' => 'basic,freespin', 'current' => 'freespin', 'stack' => 'basic,freespin'];
                                    $resultDataEx['gameover'] = 'false';
                                }
                                else {
                                    $resultDataEx['gamestate'] = ['history' => 'basic,freespin', 'current' => 'basic', 'stack' => 'basic'];
                                }
                                $resultDataEx['game'] = [
                                    'win' => [
                                        'coins' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin') / $slotSettings->CurrentDenomination,
                                        'cents' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin') * 100,
                                        'amount' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin')
                                    ]
                                ];
                                $resultDataEx['totalwin'] = [
                                    'coins' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin') / $slotSettings->CurrentDenomination,
                                    'cents' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin') * 100
                                ];
                                
                                $resultDataEx['freespins'] = [
                                    'betlevel' => $betline,
                                    'win' => [
                                        'coins' => $totalWin / $slotSettings->CurrentDenomination,
                                        'cents' => $totalWin * 100
                                    ],
                                    'initial' => $slotSettings->GetGameData($slotSettings->slotId . 'FreeGames'),
                                    'denomination' => $slotSettings->CurrentDenomination * 100,
                                    'totalwin' => [
                                        'coins' => $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin') / $slotSettings->CurrentDenomination,
                                        'cents' => $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin') * 100
                                    ],
                                    'total' => $slotSettings->GetGameData($slotSettings->slotId . 'FreeGames'),
                                    'betlines' => implode(',', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]),
                                    'wavecount' => 1,
                                    'multiplier' => 1,
                                    'left' => $leftFreeGames
                                ];
                            }
                            else if ($postData['slotEvent'] == 'respin') {

                            }
                            else {
                                $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', $totalWin);
                                $slotSettings->SetGameData($slotSettings->slotId . 'BonusWin', 0);

                                if ($scatterCount < 3) {
                                    $freeGames = 10;
                                    $slotSettings->SetGameData($slotSettings->slotId . 'FreeGames', $freeGames);
                                    $slotSettings->SetGameData($slotSettings->slotId . 'CurrentFreeGame', 0);
                                }
                                else {
                                    $freeGameType = rand(1, 3);
                                    if ($freeGameType == 2) {
                                        $bankMoney = $slotSettings->GetBank('bonus');
                                        if ($bankMoney < 800)
                                            $freeGameType = 1;
                                    }
                                    else if ($freeGameType == 3) {
                                        $bankMoney = $slotSettings->GetBank('bonus');
                                        if ($bankMoney < 600)
                                            $freeGameType = 1;
                                    }
                                    $slotSettings->SetGameData($slotSettings->slotId . 'FreeGameType', $freeGameType);
                                    if ($freeGameType == 1) {
                                        $freeGames = 10;
                                        $slotSettings->SetGameData($slotSettings->slotId . 'FreeGames', $freeGames);
                                        $slotSettings->SetGameData($slotSettings->slotId . 'CurrentFreeGame', 0);

                                        $resultDataEx['next']['rs'] = 'freespin';
                                        $resultDataEx['gamestate'] = ['history' => 'basic', 'current' => 'freespin', 'stack' => 'basic,freespin'];
                                        $resultDataEx['nextaction'] = 'freespin';
                                        $resultDataEx['gameover'] = 'false';
                                        $resultDataEx['freespins'] = [
                                            'betlevel' => $betline,
                                            'win' => ['coins' => 0, 'cents' => 0],
                                            'initial' => $freeGames,
                                            'denomination' => $slotSettings->CurrentDenomination * 100,
                                            'totalwin' => ['coins' => 0, 'cents' => 0],
                                            'total' => $freeGames,
                                            'betlines' => implode(',', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]),
                                            'wavecount' => 1,
                                            'multiplier' => 1,
                                            'left' => $freeGames
                                        ];
                                        $winData['i' . count($winData)] = [
                                            'betline' => 'null',
                                            'pos' => $scatterPos,
                                            'reelset' => 'basic',
                                            'types' => [
                                                'i0' => [
                                                    'multipliers' => 1,
                                                    'freespins' => $freeGames,
                                                    'wintype' => 'freespins'
                                                ]
                                            ],
                                            'sym' => 'freespins',
                                            'direction' => 'left_to_right'
                                        ];
                                    }
                                    else if ($freeGameType == 2) {
                                        $slotSettings->SetGameData($slotSettings->slotId . 'CurrentPickLevel', 0);
                                        $slotSettings->SetGameData($slotSettings->slotId . 'RemainPickCnt', 3);
                                        $slotSettings->SetGameData($slotSettings->slotId . 'PickedFSSymbolCnt', 0);
                                        $slotSettings->SetGameData($slotSettings->slotId . 'PickedSymbols', 0);
                                        
                                        unset($resultDataEx['next']);
                                        $resultDataEx['gamestate'] = ['history' => 'basic', 'current' => 'bonus', 'stack' => 'basic,bonus', 'bonusid' => 'gunsnrosesbonus'];
                                        $resultDataEx['nextaction'] = 'bonusaction';
                                        $resultDataEx['nextactiontype'] = 'picksymbol';
                                        $resultDataEx['gameover'] = 'false';
                                        $winData['i' . count($winData)] = [
                                            'betline' => 'null',
                                            'pos' => $scatterPos,
                                            'reelset' => 'basic',
                                            'types' => [
                                                'i0' => [
                                                    'bonusid' => 'gunsnrosesbonus',
                                                    'wintype' => 'bonusgame'
                                                ]
                                            ],
                                            'sym' => 'pickandclick',
                                            'direction' => 'left_to_right'
                                        ];
                                    }
                                    else if ($freeGameType == 3) {
                                        $coins = [200, 300, 400, 500, 600, 200];
                                        $coinIndex = rand(0, count($coins) - 1);
                                        $coinWin = $coins[$coinIndex];
                                        $totalWin += $coinWin * $slotSettings->CurrentDenomination;
                                        $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', $totalWin);
                                        $resultDataEx['game'] = [
                                            'win' => [
                                                'coins' => $totalWin / $slotSettings->CurrentDenomination,
                                                'cents' => $totalWin * 100,
                                                'amount' => $totalWin
                                            ]
                                        ];
                                        $resultDataEx['totalwin'] = [
                                            'coins' => $totalWin / $slotSettings->CurrentDenomination,
                                            'cents' => $totalWin * 100
                                        ];
                                        $winData['i' . count($winData)] = [
                                            'betline' => 'null',
                                            'pos' => $scatterPos,
                                            'reelset' => 'basic',
                                            'types' => [
                                                'i0' => [
                                                    'coins' => $coinWin,
                                                    'wintype' => 'coins',
                                                    'cents' => $coinWin / $slotSettings->CurrentDenomination * 100
                                                ]
                                            ],
                                            'sym' => 'coinwin-' . $coinIndex,
                                            'direction' => 'left_to_right'
                                        ];
                                    }
                                }
                            }

                            $resultDataEx['rs'] = $rs;
                            if (!empty($winData)) {
                                $resultDataEx['ws'] = $winData;
                            }
                            $resultData = array_merge($resultData, $resultDataEx);

                            $response = [
                                'responseEvent' => 'spin',
                                'responseType' => $postData['slotEvent'],
                                'serverResponse' => [
                                    'slotLines' => $lines,
                                    'slotBet' => $betline,
                                    'currentDenomination' => $slotSettings->CurrentDenomination,
                                    'freeGameType' => $slotSettings->GetGameData($slotSettings->slotId . 'FreeGameType'),
                                    'totalFreeGames' => $slotSettings->GetGameData($slotSettings->slotId . 'FreeGames'),
                                    'currentFreeGame' => $slotSettings->GetGameData($slotSettings->slotId . 'CurrentFreeGame'),
                                    'balance' => $balance,
                                    'totalWin' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin'),
                                    'bonusWin' => $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin'),
                                    'lineWins' => $lineWins,
                                    'reels' => $reels,
                                    'jackpots' => $slotSettings->Jackpots,
                                    'responseData' => $resultData
                                ]
                            ];
                            $response = json_encode($response);
                            if ($postData['slotEvent'] == 'respin') {
                                $postData['slotEvent'] = 'BG2';
                            }
                            $slotSettings->SaveLogReport($response, $allbet, $lines, $totalWin, $postData['slotEvent']);
                            break;
                        case 'initbonus':
                            $lastEvent = $slotSettings->GetHistory();
                            if ($lastEvent == 'NULL') {
                                $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bonus state"}';
                                return $response;
                            }
                            $lastResponseData = json_decode(json_encode($lastEvent->serverResponse->responseData), true);
                            $currentPickLevel = $slotSettings->GetGameData($slotSettings->slotId . 'CurrentPickLevel');
                            $remainPickCnt = $slotSettings->GetGameData($slotSettings->slotId . 'RemainPickCnt');
                            $pickedFSSymbolCnt = $slotSettings->GetGameData($slotSettings->slotId . 'PickedFSSymbolCnt');
                            $pickedSymbols = $slotSettings->GetGameData($slotSettings->slotId . 'PickedSymbols');
                            $resultDataEx = [
                                'bonus' => [
                                    'fs' => ['collected' => $pickedFSSymbolCnt],
                                    'level' => [
                                        'limit' => [60, 300, 800]
                                    ],
                                    'remaining' => ['clicks' => $remainPickCnt],
                                    'next' => ['level' => $currentPickLevel],
                                    'current' => ['level' => $currentPickLevel, 'clicked' => $pickedSymbols]
                                ],
                                'gamestate' => $lastResponseData['gamestate'],
                                'game' => $lastResponseData['game'],
                                'totalwin' => $lastResponseData['totalwin'],
                                'totalbonuswin' => ['coins' => 0, 'cents' => 0],
                                'bonusgame' => ['coinvalue' => $slotSettings->GetGameData($slotSettings->slotId . 'Denomination')],
                                'gameover' => 'false',
                                'nextaction' => 'bonusaction',
                                'nextactiontype' => 'picksymbol',
                                'clientaction' => $postData['action'],
                                'multiplier' => 1,
                                'wavecount' => 1
                            ];
                            $resultData = array_merge($resultData, $resultDataEx);
                            break;
                        case 'bonusaction':
                            $position = $postData['position'];
                            if ($position < 0 || $position > 7) {
                                $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bonus position"}';
                                return $response;
                            }
                            $totalWin = $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin');
                            $totalBonusWin = $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin');
                            $currentPickLevel = $slotSettings->GetGameData($slotSettings->slotId . 'CurrentPickLevel');
                            $remainPickCnt = $slotSettings->GetGameData($slotSettings->slotId . 'RemainPickCnt');
                            $pickedFSSymbolCnt = $slotSettings->GetGameData($slotSettings->slotId . 'PickedFSSymbolCnt');
                            $pickedSymbols = $slotSettings->GetGameData($slotSettings->slotId . 'PickedSymbols');
                            
                            $pickCoins = [
                                [20, 20, 30, 30, 30, 40, 40, 40],
                                [40, 40, 40, 50, 50, 50, 80, 100],
                                [60, 60, 60, 100, 100, 150, 150, 200],
                            ];
                            $notPickedCoins = $pickCoins[$currentPickLevel];
                            shuffle($notPickedCoins);

                            $arrPickedCoins = [];
                            $arrPickedFreeSpins = [];
                            $arrPickedExtraPicks = [];
                            $arrPickedPositions = [];
                            if (!empty($pickedSymbols)) {
                                $arrPickedSymbols = explode(',', $pickedSymbols);
                                foreach ($arrPickedSymbols as $pickedSymbol) {
                                    $arrPickedSymbol = explode('_', $pickedSymbol);
                                    $arrPickedCoins[] = $arrPickedSymbol[0];
                                    $arrPickedFreeSpins[] = $arrPickedSymbol[1];
                                    $arrPickedExtraPicks[] = $arrPickedSymbol[2];
                                    $arrPickedPositions[] = $arrPickedSymbol[3];
    
                                    $index = array_search($arrPickedSymbol[0], $notPickedCoins);
                                    array_splice($notPickedCoins, $index, 1);
                                }
                            }
                            
                            if (in_array($position, $arrPickedPositions)) {
                                $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bonus position"}';
                                return $response;
                            }
                            if (empty($notPickedCoins)) {
                                $response = '{"responseEvent":"error","responseType":"' . $postData['slotEvent'] . '","serverResponse":"invalid bonus data"}';
                                return $response;
                            }
                            $pickCoin = $notPickedCoins[0];
                            $pickFreeSpin = 'false';
                            $pickExtraPick = 'false';
                            if (!in_array('true', $arrPickedFreeSpins) && $pickedFSSymbolCnt < 3 && rand(0, 100) > 90) {
                                $pickFreeSpin = 'true';
                                $pickedFSSymbolCnt = $pickedFSSymbolCnt + 1;
                            }
                            if (!in_array('true', $arrPickedExtraPicks) && rand(0, 100) > 90) {
                                $pickExtraPick = 'true';
                                $remainPickCnt += 1;
                            }
                            if ($pickedSymbols == 0)
                                $pickedSymbols = '';
                            else
                                $pickedSymbols .= ',';
                            $pickedSymbols .= $pickCoin . '_' . $pickFreeSpin . '_' . $pickExtraPick . '_' . $position;

                            $slotSettings->SetGameData($slotSettings->slotId . 'PickedFSSymbolCnt', $pickedFSSymbolCnt);
                            $slotSettings->SetGameData($slotSettings->slotId . 'PickedSymbols', $pickedSymbols);

                            $bonusWin = $pickCoin ;
                            $totalWin += $pickCoin;
                            $totalBonusWin += $pickCoin;
                            $slotSettings->SetGameData($slotSettings->slotId . 'TotalWin', $totalWin);
                            $slotSettings->SetGameData($slotSettings->slotId . 'BonusWin', $totalBonusWin);

                            $nextLevel = $currentPickLevel;
                            $remainPickCnt = $remainPickCnt - 1;
                            $resultDataEx = [
                                'game' => ['win' => [
                                    'coins' => $totalWin / $slotSettings->CurrentDenomination, 
                                    'cents' => $totalWin * 100, 
                                    'amount' => $totalWin
                                    ]
                                ],
                                'bonuswin' => ['coins' => $bonusWin / $slotSettings->CurrentDenomination, 'cents' => $bonusWin],
                                'gamestate' => ['history' => 'basic,bonus', 'current' => 'bonus', 'stack' => 'basic,bonus', 'bonusid' => 'gunsnrosesbonus'],
                                'bonus' => [
                                    'fs' => ['collected' => $pickedFSSymbolCnt],
                                    'remaining' => ['clicks' => $remainPickCnt],
                                    'next' => ['level' => $nextLevel],
                                    'current' => [
                                        'level' => $currentPickLevel,
                                        'clicked' => $pickedSymbols
                                    ]
                                ],
                                'totalwin' => [
                                    'coins' => $totalWin / $slotSettings->CurrentDenomination,
                                    'cents' => $totalWin * 100
                                ],
                                'totalbonuswin' => [
                                    'coins' => $totalBonusWin / $slotSettings->CurrentDenomination,
                                    'cents' => $totalBonusWin * 100
                                ],
                                'bonusgame' => ['coinvalue' => $slotSettings->GetGameData($slotSettings->slotId . 'Denomination')],
                                'credit' => $balance,
                                'gameover' => 'false',
                                'nextaction' => 'bonusaction',
                                'nextactiontype' => 'picksymbol',
                                'clientaction' => $postData['action'],
                                'multiplier' => 1,
                                'wavecount' => 1
                            ];

                            $arrPickedCoins[] = $pickCoin;
                            $arrPickedFreeSpins[] = $pickFreeSpin;
                            $arrPickedExtraPicks[] = $pickExtraPick;
                            $arrPickedPositions[] = $position;
                            array_splice($notPickedCoins, 0, 1);
                            $notPickedPositions = array_diff([0, 1, 2, 3, 4, 5, 6, 7], $arrPickedPositions);
                            $notPickedFreeSpins = [];
                            $notPickedExtraPicks = [];
                            $notPickedSymbols = array_map(function ($notPickedCoin, $notPickedPosition) use ($arrPickedFreeSpins, $notPickedFreeSpins, $arrPickedExtraPicks, $notPickedExtraPicks) {
                                $notPickedFreeSpin = 'false';
                                $notPickedExtraPick = 'false';
                                if (!in_array('true', $arrPickedFreeSpins) && !in_array('true', $notPickedFreeSpins) && rand(0, 100) > 90)
                                    $notPickedFreeSpin = 'true';
                                if (!in_array('true', $arrPickedExtraPicks) && !in_array('true', $notPickedExtraPicks) && rand(0, 100) > 90)
                                    $notPickedExtraPick = 'true';
                                $notPickedFreeSpins[] = $notPickedFreeSpin;
                                $notPickedExtraPicks[] = $notPickedExtraPick;
                                return $notPickedCoin . '_' . $notPickedFreeSpin . '_' . $notPickedExtraPick . '_' . $notPickedPosition;
                            }, $notPickedCoins, $notPickedPositions);
                            $notPickedSymbols = implode(',', $notPickedSymbols);
                            $finishedPickData = [
                                'levels' => [
                                    'clicked' => [
                                        'level' => []
                                    ],
                                    'notclicked' => [
                                        'level' => []
                                    ]
                                ]
                            ];
                            for ($i = 0; $i <= $currentPickLevel; $i++) {
                                if ($i < $currentPickLevel) {
                                    $finishedPickData['levels']['clicked']['level'][$i] = $slotSettings->GetGameData($slotSettings->slotId . 'PickedSymbols' . $i);
                                    $finishedPickData['levels']['notclicked']['level'][$i] = $slotSettings->GetGameData($slotSettings->slotId . 'NotPickedSymbols' . $i);
                                }
                                else if ($remainPickCnt == 0) {
                                    $finishedPickData['levels']['clicked']['level'][$i] = $pickedSymbols;
                                    $finishedPickData['levels']['notclicked']['level'][$i] = $notPickedSymbols;
                                    $slotSettings->SetGameData($slotSettings->slotId . 'PickedSymbols' . $i, $pickedSymbols);
                                    $slotSettings->SetGameData($slotSettings->slotId . 'NotPickedSymbols' . $i, $notPickedSymbols);
                                }
                            }
                            $resultDataEx['bonus']['finished'] = $finishedPickData;

                            if ($remainPickCnt == 0) {
                                $slotSettings->SetGameData($slotSettings->slotId . 'PickedSymbols', 0);
                                if ($totalBonusWin < 60)
                                    $nextLevel = 0;
                                else if ($totalBonusWin < 300)
                                    $nextLevel = 1;
                                else if ($totalBonusWin < 800)
                                    $nextLevel = 2;
                                else
                                    $nextLevel = 3;
                                $remainPickCnt = 3;
                                if ($currentPickLevel == $nextLevel) {
                                    $resultDataEx['nextaction'] = 'endbonus';
                                    $resultDataEx['bonusgameover'] = 'true';
                                    $remainPickCnt = 0;
                                }
                            }
                            $slotSettings->SetGameData($slotSettings->slotId . 'CurrentPickLevel', $nextLevel);
                            $slotSettings->SetGameData($slotSettings->slotId . 'RemainPickCnt', $remainPickCnt);
                            $resultDataEx['bonus']['next'] = ['level' => $nextLevel];
                            $resultData = array_merge($resultData, $resultDataEx);

                            if ($remainPickCnt == 0) {
                                $slotSettings->SetBank((isset($postData['slotEvent']) ? $postData['slotEvent'] : ''), -1 * $totalBonusWin);
                                $slotSettings->SetBalance($totalBonusWin);
                                $balance = round($slotSettings->GetBalance() * $slotSettings->CurrentDenomination * 100);

                                $betline = $slotSettings->GetGameData($slotSettings->slotId . 'Bet');
                                $response = [
                                    'responseEvent' => 'picksymbol',
                                    'responseType' => $postData['slotEvent'],
                                    'serverResponse' => [
                                        'slotLines' => $lines,
                                        'slotBet' => $betline,
                                        'currentDenomination' => $slotSettings->CurrentDenomination,
                                        'freeGameType' => $slotSettings->GetGameData($slotSettings->slotId . 'FreeGameType'),
                                        'currentPickLevel' => $slotSettings->GetGameData($slotSettings->slotId . 'CurrentPickLevel'),
                                        'remainPickCnt' => $slotSettings->GetGameData($slotSettings->slotId . 'RemainPickCnt'),
                                        'balance' => $balance,
                                        'totalWin' => $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin'),
                                        'bonusWin' => $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin'),
                                        'lineWins' => '',
                                        'reels' => '',
                                        'jackpots' => $slotSettings->Jackpots,
                                        'responseData' => $resultData
                                    ]
                                ];
                                $response = json_encode($response);
                                $slotSettings->SaveLogReport($response, 0, $lines, $bonusWin, $postData['slotEvent']);
                            }
                            break;
                        case 'endbonus':
                            $totalWin = $slotSettings->GetGameData($slotSettings->slotId . 'TotalWin');
                            $totalBonusWin = $slotSettings->GetGameData($slotSettings->slotId . 'BonusWin');
                            $resultDataEx = [
                                'game' => ['win' => [
                                        'coins' => $totalWin / $slotSettings->CurrentDenomination, 
                                        'cents' => $totalWin * 100, 
                                        'amount' => $totalWin
                                    ]
                                ],
                                'next' => ['rs' => 'basic'],
                                'gamestate' => ['history' => 'basic,bonus', 'current' => 'basic', 'stack' => 'basic', 'bonusid' => 'gunsnrosesbonus'],
                                'totalwin' => [
                                    'coins' => $totalWin / $slotSettings->CurrentDenomination,
                                    'cents' => $totalWin * 100
                                ],
                                'gameover' => 'true',
                                'nextaction' => 'spin',
                                'nextactiontype' => 'picksymbol',
                                'clientaction' => $postData['action'],
                                'multiplier' => 1,
                                'wavecount' => 1
                            ];
                            $resultData = array_merge($resultData, $resultDataEx);
                            break;
                    }
                    $response = http_build_query($resultData);
                    $response = str_replace('%5B', '.', $response);
                    $response = str_replace('%5D', '', $response);
                    $slotSettings->SaveGameData();
                    $slotSettings->SaveGameDataStatic();
                    return $response;
                }
                catch(\Exception $e) {
                    if (isset($slotSettings)) {
                        $slotSettings->InternalErrorSilent($e);
                    }
                    else {
                        $strLog = '';
                        $strLog.= "\n";
                        $strLog.= ('{"responseEvent":"error","responseType":"' . $e . '","serverResponse":"InternalError","request":' . json_encode($_REQUEST) . ',"requestRaw":' . file_get_contents('php://input') . '}');
                        $strLog.= "\n";
                        $strLog.= ' ############################################### ';
                        $strLog.= "\n";
                        $slg = '';
                        if (file_exists(storage_path('logs/') . 'GameInternal.log')) {
                            $slg = file_get_contents(storage_path('logs/') . 'GameInternal.log');
                        }
                        file_put_contents(storage_path('logs/') . 'GameInternal.log', $slg . $strLog);
                    }
                }
            }, 5);
        }
    }
}