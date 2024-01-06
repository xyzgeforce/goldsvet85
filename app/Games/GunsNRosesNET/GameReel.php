<?php 
namespace VanguardLTE\Games\GunsNRosesNET
{
    class GameReel
    {
        public $reelsStrip = [
            'reelStrip1' => [], 
            'reelStrip2' => [], 
            'reelStrip3' => [], 
            'reelStrip4' => [], 
            'reelStrip5' => [], 
            'reelStrip6' => []
        ];
        public $reelsStripBonus = [
            'reelStripBonus1' => [], 
            'reelStripBonus2' => [], 
            'reelStripBonus3' => [], 
            'reelStripBonus4' => [], 
            'reelStripBonus5' => [], 
            'reelStripBonus6' => []
        ];
        public function __construct()
        {
            $temp = file(base_path() . '/app/Games/GunsNRosesNET/reels.txt');
            foreach( $temp as $str ) 
            {
                $str = explode('=', $str);
                if( isset($this->reelsStrip[$str[0]]) ) 
                {
                    $data = explode(',', $str[1]);
                    foreach( $data as $elem ) 
                    {
                        $elem = trim($elem);
                        if( $elem != '' ) 
                        {
                            $this->reelsStrip[$str[0]][] = $elem;
                        }
                    }
                }
                if( isset($this->reelsStripBonus[$str[0]]) ) 
                {
                    $data = explode(',', $str[1]);
                    foreach( $data as $elem ) 
                    {
                        $elem = trim($elem);
                        if( $elem != '' ) 
                        {
                            $this->reelsStripBonus[$str[0]][] = $elem;
                        }
                    }
                }
            }
        }

        function GenenerateReels()
        {
            $symbols = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
            $wild = '1';
            $scatter = '0';
            $reelStrips = [
                'reelStrip1=',
                'reelStrip2=',
                'reelStrip3=',
                'reelStrip4=',
                'reelStrip5=',
                'reelStrip6=',
            ];
            $bonusReelStrips = [
                'reelStripBonus1=',
                'reelStripBonus2=',
                'reelStripBonus3=',
                'reelStripBonus4=',
                'reelStripBonus5=',
                'reelStripBonus6='
            ];
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 500; $j++) {
                    $index = mt_rand(0, count($symbols) - 1);
                    $prob = mt_rand(0, 100);
                    if ($prob < 60) {
                        $index = mt_rand(8, 12);
                    }
                    else if ($prob < 95) {
                        $index = mt_rand(3, 7);
                    }
                    else {
                        if (in_array($i, [0, 2, 4]))
                            $index = mt_rand(0, 1);
                        else
                            $index = 1;
                    }
                    $reelStrips[$i] .= $symbols[$index].',';

                    $index = mt_rand(0, count($symbols) - 1);
                    $prob = mt_rand(0, 100);
                    if ($prob < 70) {
                        $index = mt_rand(8, 12);
                    }
                    else if ($prob < 99) {
                        $index = mt_rand(3, 7);
                    }
                    else {
                        $index = 1;
                    }
                    $bonusReelStrips[$i] .= $symbols[$index].',';
                }
            }
            file_put_contents(base_path() . '/app/Games/GunsNRosesNET/reels.txt', implode(PHP_EOL, $reelStrips).PHP_EOL.implode(PHP_EOL, $bonusReelStrips));
        }
    }
}
