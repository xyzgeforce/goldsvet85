<?php


namespace VanguardLTE\Games\GreentubeLib;


class GameSettings
{
    public $linesSet, $paymentTable, $reelsSet, $symbolsToReel, $wild = [], $scatter, $linesBetSet, $multipliers,
        $formatWin = 'l',$formatSymbols = 'str', $reelCount = 5, $reelSetNumber = 0, $minNeedScatter = 3,
        $freeSpinsCountScatter, $needFreeSpinCount = true, $typeGame = 'Standart', $freeSpinWinMultiplayer = 1,
        $freeSpinsReel = 0, $wildMultiplier = false, $fsSticky = false, $formatSticky = 'str', $addFreeSpins = true,
        $countAddFreeSpin = 0, $firstSticky = false, $fsWildMutiplier = false, $bookReels,
        $notBonus = false, $expandWild = false, $respinExpandWild = false, $fsExpandWild = false, $expandReplaceSymbol,
        $lrBonus = false, $replaceWild = false, $replaceWildSymbols, $FSscatter = false, $mysticSecret = false,
        $bookGame = false, $extraBet = false, $extraWild = false, $flamedWildGame = false, $notFSBonus = false,
        $upgradeReel = false, $maxUpgradeReel = false, $RTP = 92, $incrRTPReelNumber = 0, $needIncr = false;


    public function __construct($init, $typeGame = false){
        foreach ($init as $value) {
            $arrValue = explode(',',$value);
            switch ($arrValue[0]){
                case ':l':
                    $this->linesSet[] = $this->decodeLines($arrValue[1]);
                    break;
                case ':r':
                    $this->reelsSet[$arrValue[1]][] = $arrValue[2];
                    break;
                case ':w':
                    $this->paymentTable[$arrValue[1]][$arrValue[2]] = $arrValue[3];
                    break;
                case ':v':
                    $this->symbolsToReel = $arrValue[1];
                    break;
                case ':j':
                    $this->wild[] = $arrValue[1];
                    break;
                case ':scatter':
                    $this->scatter = $arrValue[1];
                    break;
                case ':scatteredSymbols':
                    $this->scatteredSymbols = array_slice($arrValue, 1);
                    break;
                case ':FSscatter':
                    $this->FSscatter = $arrValue[1];
                    break;
                case 'e':
                    $this->linesBetSet = array_slice($arrValue, 1);
                    break;
                case ':m':
                    $this->multipliers = array_slice($arrValue, 1);
                    break;
                case ':FW':
                    $this->formatWin = $arrValue[1];
                    $this->formatSymbols = $arrValue[2];
                    break;
                case ':reelCount':
                    $this->reelCount = $arrValue[1];
                    break;
                case  ':reelSetNumber':
                    $this->reelSetNumber = $arrValue[1];
                    break;
                case ':FSCount':
                    $this->needFreeSpinCount = true;
                    break;
                case ':type':
                    $this->typeGame = $arrValue[1];
                    break;
                case ':FSMult':
                    $this->freeSpinWinMultiplayer = $arrValue[1];
                    break;
                case ':FSReel':
                    if (count($arrValue) > 2) $this->freeSpinsReel = $arrValue[rand(1, count($arrValue)-1)];
                    else $this->freeSpinsReel = $arrValue[1];
                    break;
                case ':minNeedScatter':
                    $this->minNeedScatter = $arrValue[1];
                    break;
                case ':FS':
                    if (count($arrValue) > 3){
                        //для рандомной выдачи фриспинов
                        $this->freeSpinsCountScatter[$arrValue[1]] = $arrValue[rand(2, array_key_last($arrValue))];
                        break;
                    }
                    $this->freeSpinsCountScatter[$arrValue[1]] = $arrValue[2];
                    break;
                case ':WildMult': // умножение комбинации с вайлдом
                    $this->wildMultiplier = [
                        'Symbol' => $arrValue[1], // символ который умножает
                        'Multiplier' => $arrValue[2], // множитель
                        'MultiMultiplier' => (boolean)$arrValue[3] //удваивает дважды если 2 символа в комбинации.
                    ];
                    break;
                case ':FSWildMult': // умножение комбинации с вайлдом
                    $this->fsWildMutiplier = [
                        'Symbol' => $arrValue[1], // символ который умножает
                        'Multiplier' => $arrValue[2], // множитель
                        'MultiMultiplier' => (boolean)$arrValue[3] //удваивает дважды если 2 символа в комбинации.
                    ];
                    break;
                case ':FSSticky': // липкий вайлд и его формат
                    $this->fsSticky = true;
                    $this->formatSticky = $arrValue[1];
                    break;
                case ':FSAdd': // добавление фриспинов во фриспинах и их число.
                    $this->addFreeSpins = true;
                    $this->countAddFreeSpin = $arrValue[1];
                    break;
                case ':FirstSticky': // нужно ли сохранять вайлды при выпадении фриспина
                    $this->firstSticky = true;  // или лепить вайлды только при старте фриспинов
                    break;
                case ':incrRTP':
                    $this->incrRTPReelNumber = $arrValue[1];
                case ':Book':
                    $this->bookGame = true;
                    $this->bookReels = $this->decodeBook($arrValue);
                    break;
                case ':NotBonus':
                    $this->notBonus = true;
                    break;
                case ':NotFSBonus':
                    $this->notFSBonus = true;
                    break;
                case ':ExpandWild': // растущий вайлд
                    $this->expandWild = (boolean)$arrValue[1]; // расширяется ли в обычных спинах
                    $this->respinExpandWild = (boolean)$arrValue[2]; // делается ли респин
                    $this->fsExpandWild = (boolean)$arrValue[3]; // растет ли вайлд во фриспинах
                    $this->expandReplaceSymbol = $arrValue[4]; // каким символом заполняются катушки
                    break;
                case ':LRBonus': // скаттеры должны быть слева направо не важно на каких позициях
                    $this->lrBonus = true;
                    break;
                case ':ReplaceWild':
                    $this->replaceWild = true;
                    $this->replaceWildSymbols = $this->decodeWildReplacer(array_slice($arrValue, 1));
                    break;
                case ':mysticSecret': // для ублюдочной игры mysticSecret. Потому что ублюдки из Greentube так сделали.
                    $this->mysticSecret = true; // чтобы игра не зависала
                    break;
                case ':UpgradeReel':
                    $this->upgradeReel = true;
                    $this->maxUpgradeReel = $arrValue[1];
                    break;
                case ':incrRTP':
                    $this->needIncr = true;
                    break;
            }
        }
        if($typeGame) {
            $this->formatWin = $typeGame['FormatWin'];
            $this->formatSymbols = $typeGame['FormatSymbols'];
            $this->typeGame = $typeGame['Type'];
        }
    }

    public function setIncrRTPReelNumber(){
        if($this->needIncr){
           $this->reelSetNumber = $this->incrRTPReelNumber; 
        }
    }

    private function decodeWildReplacer($data){
        $result = [];
        foreach ($data as $item) {
            $tmpVal = explode(':',$item);
            $result[$tmpVal[0]] = $tmpVal[1];
        }
        return $result;
    }

    private function decodeBook($book){
        $book = array_slice($book, 2);

        $readyBook = [];

        foreach ($book as $value) {
            $tmpBook = explode(':',$value);
            $readyBook[$tmpBook[0]] = $tmpBook[1];
        }
        return $readyBook;
    }

    private function decodeLines($line){
        $trans = [
            "^" => 0,
            "-" => 1,
            "_" => 2,
            "V" => 3
        ];
        $result = str_split(strtr($line, $trans));
        return $result;
    }

}
