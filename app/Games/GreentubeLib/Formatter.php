<?php


namespace VanguardLTE\Games\GreentubeLib;


class Formatter
{
    private $toServer;
    public function __construct(){
        $this->toServer = [
            "A1",
            "R",
            "I11",
            "H,0,0,0,0,0,0",
            "X",
            "b,1000,1000,0",
        ];
    }

    public function spinToServer($data, $formatWin = 'l', $formatSticky = 'str', $jackpot = ''){
        $result = $this->toServer;
        foreach ($data as $key => $value){
            switch ($key) {
                case 'Balance':
                    array_push($result, 'S'.$value);
                    break;
                case 'Denomination':
                    array_push($result, 'C,'. $value .',€,-1');
                    break;
                case 'TotalWin':
                    array_push($result, 'W,'.$value);
                    break;
                case 'FreeSpins':
                    if ($value){
                        array_push($result, $this->formatFreespins($value));
                    }
                    break;
                case 'LinesBet':
                    array_push($result, 'e,'.implode(',', $value));
                    break;
                case 'LastWin':
                    array_push($result, ':x,'.$value);
                    break;
                case 'State':
                case 'q':
                    if (is_array($value)){
                        foreach ($value as $item) {
                            array_push($result, $item);
                        }
                    }else array_push($result, $value);
                    break;
                case 'CardHistory':
                    array_push($result, 'h,'.$value);
                    break;
                case 'ReelSet':
                    array_push($result, 'r,'.$value);
                    break;
                case 'WinLines':
                    if($value > 0){
                        foreach ($value as $winLine) {
                            array_push($result, $this->formatWinLines($winLine, $formatWin));
                        }
                    }
                    break;
                case 'GambleRound':
                        foreach ($value as $item) {
                            array_push($result, $item);
                        }
                    break;
                case 'BookBonus':
                case 'Bonus':
                case 'BeetleBonus':
                    if ($value){
                        array_push($result, $this->formatBonus($value));
                    }
                    break;
                case 'ScatteredWin':
                case 'ManyBookBonus':
                    if ($value){
                        foreach ($value as $item) {
                            array_push($result, $this->formatBonus($item));
                        }
                    }
                    break;
                case 'UpgradeSymbolsBonus':
                    if ($value){
                        array_push($result, $this->formatUpgradeSymbolsBonus($value));
                    }
                    break;
                case 'Sticky':
                    if ($value){
                        array_push($result, $this->formatSticky($value, $formatSticky));
                    }
                    break;
                case 'NeedX':
                    if ($value) {
                        array_push($result, $value);
                    }
                    break;
                case 'BookOfMayaBonus':
                    if ($value) {
                        array_push($result, $value);
                        array_push($result, ':d,');
                    }
                    break;
            }
        }
        return $jackpot === '' ? $result: [$result, $jackpot];
    }

    private function formatSticky($sticky, $formatSticky){
        $readySticky = [];
        foreach ($sticky as $stick) {
            if ($stick !== '-') $readySticky[] = $formatSticky === 'str' ? $stick : 1;
            else $readySticky[] = $formatSticky === 'str' ? '-' : 0;
        }
        $readySticky = $formatSticky === 'str' ? implode('',$readySticky) : implode(':', $readySticky);
        return 'x,1,'.$readySticky;
    }

    private function formatFreespins($freeSpins){
        $result = [
            $freeSpins['CountFreeSpins'],
            $freeSpins['CurrentFreeSpin'], 1, 1,
            $freeSpins['Reel'],
            $freeSpins['TotalWin'],
            $freeSpins['Pay'], 0
        ];
        return 'f,'.implode(',', $result);
    }

    private function formatUpgradeSymbolsBonus($bonus){
        $result = [
            $bonus['Symbol'],
            $bonus['Count'],
            $bonus['AddFS'], 0,0,0,'',
            $bonus['SymbolsPositions']
        ];
        return 'c,'.implode(',', $result);
    }

    private function formatBonus($bonus){
        $result =  [
            $bonus['Symbol'],
            $bonus['Count'],
            $bonus['FreeSpinCount'],
            0,
            $bonus['Pay'], 0, '',
            $bonus['SymbolsPositions']
        ];
        return 'c,'.implode(',', $result);
    }

    private function formatWinLines($winLine, $formatWin = 'l'){
        if ($formatWin == 'l'){
            $formattedWinLine = $this->standartFormat($winLine);
        }elseif ($formatWin == 'o'){
            $formattedWinLine = $this->winWaysFormat($winLine);
        }
        return $formatWin.','.implode(',', $formattedWinLine);
    }

    private function standartFormat($winLine){
        return [
            $winLine['WinSymbol'],
            $winLine['CountSymbols'],
            $winLine['Line'], 0, 0,
            $winLine['Pay'], 0, 0,
            $winLine['Positions']
        ];
    }
    private function winWaysFormat($winLine){
        return [
            $winLine['WinSymbol'],
            $winLine['CountSymbols'],
            $winLine['Line'], 0,
            $winLine['Pay'], 0, 0, '',
            $winLine['Positions']
        ];
    }

}
