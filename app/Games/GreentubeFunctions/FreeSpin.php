<?php


namespace VanguardLTE\Games\GreentubeFunctions;


use VanguardLTE\Games\GreentubeLib\Bonus\BeetleBonus;
use VanguardLTE\Games\GreentubeLib\Bonus\BonusFeature;
use VanguardLTE\Games\GreentubeLib\Bonus\BonusIdentifier;
use VanguardLTE\Games\GreentubeLib\Bonus\BookOfMaya;
use VanguardLTE\Games\GreentubeLib\Bonus\ExpandWild;
use VanguardLTE\Games\GreentubeLib\Bonus\FreeSpinAssign;
use VanguardLTE\Games\GreentubeLib\Bonus\ManyBook;
use VanguardLTE\Games\GreentubeLib\Bonus\ScatteredPay;
use VanguardLTE\Games\GreentubeLib\Bonus\StickyWild;
use VanguardLTE\Games\GreentubeLib\Crutches\MysticSecret;
use VanguardLTE\Games\GreentubeLib\ExcludeSymbols;
use VanguardLTE\Games\GreentubeLib\Formatter;
use VanguardLTE\Games\GreentubeLib\Log;
use VanguardLTE\Games\GreentubeLib\LogBuilder;
use VanguardLTE\Games\GreentubeLib\MoneyTransfer\SwitchBoard;
use VanguardLTE\Games\GreentubeLib\OffFeature;
use VanguardLTE\Games\GreentubeLib\Spin\SlotArea;
use VanguardLTE\Games\GreentubeLib\Spin\StopPositions;
use VanguardLTE\Games\GreentubeLib\Spin\TotalWin;
use VanguardLTE\Games\GreentubeLib\WinLimiter\FSWinPermission;
use VanguardLTE\Games\GreentubeLib\WinLimiter\SpinWinPermission;
use VanguardLTE\Games\GreentubeLib\WinLineAllocator;

class FreeSpin
{
    public static function freeSpin($shop, $bank, $jpgs, $gameSettings, $gameData, $user, $game, $log){
        //выбранная во фриспинах катушка
        $currentLog = $log->getLog();
        $reelNumber = $gameSettings->bookGame || $gameSettings->upgradeReel ? $currentLog['FreeSpins']['Reel'] : $gameSettings->freeSpinsReel;
        $reelNumber = BonusFeature::upgradeReel($currentLog, $gameSettings, $reelNumber);
        if (isset($gameSettings->Chicago)) $reelNumber = rand(1,5);
        newFreeSpin:
        //генерируем позиции
        $positions = StopPositions::getPositions($gameSettings->reelsSet, $reelNumber, $gameSettings->reelCount);
        if ($gameSettings->mysticSecret) $positions = MysticSecret::bastardsFromGreentube($positions, $gameSettings->reelsSet, $reelNumber);
        //строим игровое поле
        $slotArea = SlotArea::getSlotArea(
            $positions, $gameSettings->reelsSet, $reelNumber,
            $gameSettings->reelCount, $gameSettings->symbolsToReel, $gameSettings->extraBet);
        // Если есть функция поджигания вайлдов
        if ($gameSettings->flamedWildGame) $slotArea = BonusFeature::flamedWild($slotArea, $gameSettings);
        // Если есть расширяющийся вайлд в бесплатных спинах
        if ($gameSettings->fsExpandWild) $slotArea = ExpandWild::replaceSlotArea($slotArea, $gameSettings);
        // если есть замена вайлдов
        if ($gameSettings->replaceWild) $slotArea = BonusFeature::replaceWild($slotArea, $gameSettings);
        // если игра с липким вайлдом во фриспинах - то реализуем липкий вайлд и строку для липкого вайлда
        if ($gameSettings->fsSticky){
            $slotArea = StickyWild::replaceSlotArea($slotArea, $gameSettings->wild, $currentLog);
            $sticky = StickyWild::getSticky($slotArea,$gameSettings->wild, true);
        }else $sticky = false;
        // отключение возможности поймать 3 и больше одинаковых катушки
        if (OffFeature::similarReels($slotArea)) goto newFreeSpin;
        // проверяем есть ли бонус
        $bonus = $gameSettings->notFSBonus ? false : BonusIdentifier::checkBonus($slotArea, $gameSettings, $gameData, true, $reelNumber);

        // ограничение выигрыша бесплатных вращений если в банке недостаточно резерва для выплат
        if ($bonus && !FSWinPermission::canWin($bank,$gameData['BetToLine'] * $gameData['Lines'], $game->denomination)) goto newFreeSpin;

        // TODO Always FreeSpins
        //if (!$bonus && !$gameSettings->notFSBonus)goto newFreeSpin;

        //формируем строку фриспинов
        $freeSpins = FreeSpinAssign::countFreeSpin($bonus, $gameSettings, $currentLog['FreeSpins'], $reelNumber);
        // исключаемый символ
        $excludeSymbol = ExcludeSymbols::getExclude($gameSettings, $currentLog['NeedX'], $reelNumber);
        //распределяем все по линиям
        $winLines = WinLineAllocator::allocateLines($slotArea, $gameData, $gameSettings, true, $reelNumber, $excludeSymbol);
        // отключение джекпота.
        if (isset($gameSettings->JPSymbol) && OffFeature::offJackpot($winLines, $gameSettings->JPSymbol)) goto newFreeSpin;
        // Если есть несколько скаттеров
        $scatteredWin = isset($gameSettings->scatteredSymbols) ? ScatteredPay::getPay($slotArea, $gameSettings, $gameData) : false;
        // для книги майа делаем респин игрового поля
        $bookOfMayaBonus = isset($gameSettings->respinFS) ? BookOfMaya::respinFS($slotArea,$gameSettings,$reelNumber) : false;
        // если игра книжная
        $bookBonus = $gameSettings->bookReels ? BonusFeature::bookFeature($slotArea,$gameSettings,$gameData,$reelNumber) : false;
        if (isset($gameSettings->manyBookSymbols)) $manyBookBonus = ManyBook::checkPay($slotArea,$gameSettings,$gameData,$currentLog['NeedX']);
        else $manyBookBonus = false;
        // если игра с улучшением символов
        $upgradeSymbolsBonus = $gameSettings->upgradeReel ? BonusFeature::upgradeSymbol($slotArea, $gameSettings, $freeSpins) : false;
        $beetleBonus = isset($gameSettings->beetleSymbol) ? BeetleBonus::beetlePay($slotArea, $gameSettings, $currentLog['FreeSpins']) : false;
        // Считаем общий выигрыш
        $totalWin = TotalWin::getTotal($winLines, $bonus, $scatteredWin, $bookBonus, $manyBookBonus, $beetleBonus);

        // ограничение выигрыша если нет денег в слоте
        if (!SpinWinPermission::canWin($bank->bonus, $totalWin, $game, $gameSettings->RTP, $gameData['BetToLine'] * $gameData['Lines'])) goto newFreeSpin;

        //добавить к фриспинам текущий выигрыш и предыдущий выигрыш увеличить
        $freeSpins = FreeSpinAssign::addWin($freeSpins, $totalWin);
        // для игр которым нужен x,1,1
        $needX = isset($gameSettings->needXupgrade) ? $gameSettings->strX.($reelNumber+$upgradeSymbolsBonus['ReelsAdd']) : false;
        // для игр ManyBooks как книга ра магическая
        if (isset($gameSettings->manyBookSymbols)) $needX = ManyBook::addToSpin($currentLog['NeedX'], $gameSettings);
        if ($bonus && isset($gameSettings->manyBookSymbols)) $needX = ManyBook::addSymbol($gameSettings, $currentLog['NeedX']);

        // распределить деньги и записать в статистику
        SwitchBoard::SwitchMoney($slotArea,$shop, $bank, $jpgs, $gameSettings, $totalWin,$user,$game,$gameData, $freeSpins['AddFs'], $freeSpins);

        //обьединяем в массив готовую информацию
        $readyData = LogBuilder::build($user->balance,$game->denomination, $totalWin, $freeSpins, $gameData['Lines'],
            $gameData['BetToLine'], $gameData['Multiplier'], $gameSettings->reelCount, $reelNumber, $positions,
            $winLines, $log->lastWin(), $log->cardHistory(), $bonus, $sticky, $needX, $scatteredWin, $bookBonus,
            $upgradeSymbolsBonus, $manyBookBonus, $beetleBonus, $bookOfMayaBonus);
        //записываем в лог
        Log::setLog($readyData, $game->id,$user->id,$user->shop_id);

        $jackpot = isset($gameSettings->Jackpot) ? ['
            '.$jpgs[0]->balance,'100','500000','2000'] : '';
        //форматируем массив для ответа
        $formatter = new Formatter();
        return json_encode($formatter->spinToServer($readyData, $gameSettings->formatWin, $gameSettings->formatSticky, $jackpot));
        //return json_encode($readyData);
    }

}
