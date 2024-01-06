<?php


namespace VanguardLTE\Games\GreentubeFunctions;


use VanguardLTE\Games\GreentubeLib\Bonus\ManyBook;
use VanguardLTE\Games\GreentubeLib\Bonus\BonusIdentifier;
use VanguardLTE\Games\GreentubeLib\Bonus\ExpandWild;
use VanguardLTE\Games\GreentubeLib\Bonus\FreeSpinAssign;
use VanguardLTE\Games\GreentubeLib\Bonus\ScatteredPay;
use VanguardLTE\Games\GreentubeLib\Bonus\StickyWild;
use VanguardLTE\Games\GreentubeLib\Formatter;
use VanguardLTE\Games\GreentubeLib\Log;
use VanguardLTE\Games\GreentubeLib\LogBuilder;
use VanguardLTE\Games\GreentubeLib\MoneyTransfer\SwitchBoard;
use VanguardLTE\Games\GreentubeLib\OffFeature;
use VanguardLTE\Games\GreentubeLib\Spin\TotalWin;
use VanguardLTE\Games\GreentubeLib\Spin\StopPositions;
use VanguardLTE\Games\GreentubeLib\Spin\SlotArea;
use VanguardLTE\Games\GreentubeLib\WinLimiter\FSWinPermission;
use VanguardLTE\Games\GreentubeLib\WinLimiter\SpinWinPermission;
use VanguardLTE\Games\GreentubeLib\WinLineAllocator;

class Spin
{
    public static function getSpin($shop, $bank, $jpgs, $gameSettings, $gameData, $user, $game, $log){
        if ($user->balance < ($gameData['BetToLine'] * $gameData['Lines']) / 100) return false;
        newSpin:
        // получим RTP и если он низкий - переключаем набор катушек
        $currentRTP = $game->stat_out > 0 && $game->stat_in > 0 ? $game->stat_out / $game->stat_in * 100 : 0;
        if ($currentRTP < $gameSettings->RTP) $gameSettings->setIncrRTPReelNumber();
        //генерируем позиции
        $positions = StopPositions::getPositions($gameSettings->reelsSet, $gameSettings->reelSetNumber, $gameSettings->reelCount);
        //строим игровое поле
        $slotArea = SlotArea::getSlotArea(
            $positions, $gameSettings->reelsSet, $gameSettings->reelSetNumber,
            $gameSettings->reelCount, $gameSettings->symbolsToReel, $gameSettings->extraBet);
        // проверяем есть ли бонус и формируем бонусную строку
        $bonus = $gameSettings->notBonus ? false : BonusIdentifier::checkBonus($slotArea, $gameSettings, $gameData);
        // Если есть расширяющийся вайлд в обычных спинах
        if ($gameSettings->expandWild) $slotArea = ExpandWild::replaceSlotArea($slotArea, $gameSettings);
        // если игра с липким вайлдом во фриспинах то нужно заранее приготовить строку для этого
        if ($gameSettings->fsSticky){
            $sticky = StickyWild::getSticky($slotArea, $gameSettings->wild, $gameSettings->firstSticky);
        }else $sticky = false;
        if ($gameSettings->expandWild) $slotArea = ExpandWild::replaceSlotArea($slotArea, $gameSettings);
        // отключение возможности поймать 3 и больше одинаковых катушки
        if (OffFeature::similarReels($slotArea)) goto newSpin;
        // отключение бонусов у игр без бонусов
        if ($gameSettings->notBonus && BonusIdentifier::checkBonus($slotArea, $gameSettings, $gameData))goto newSpin;

        // ограничение выигрыша бесплатных вращений если в банке недостаточно резерва для выплат
        if ($bonus && !FSWinPermission::canWin($bank,$gameData['BetToLine'] * $gameData['Lines'], $game->denomination)) goto newSpin;

        // TODO Always FreeSpins
        //if (!$bonus && !$gameSettings->notBonus)goto newSpin;

        //формируем полную бонусную строку
        $freeSpins = FreeSpinAssign::assign($bonus, $gameSettings);
        //распределяем все по линиям
        $winLines = WinLineAllocator::allocateLines($slotArea, $gameData, $gameSettings, false, false);
        // отключение джекпота.
        if (isset($gameSettings->JPSymbol) && OffFeature::offJackpot($winLines, $gameSettings->JPSymbol)) goto newSpin;
        // Если есть несколько скаттеров
        $scatteredWin = isset($gameSettings->scatteredSymbols) ? ScatteredPay::getPay($slotArea, $gameSettings, $gameData) : false;
        // Считаем общий выигрыш
        $totalWin = TotalWin::getTotal($winLines, $bonus, $scatteredWin);
        // для игр которым нужен x,1,1
        $needX = isset($gameSettings->needXupgrade) ? $gameSettings->strX.$freeSpins['Reel'] : false;
        // для игр ManyBooks как книга ра магическая
        if (isset($gameSettings->manyBookSymbols) && $bonus) $needX = $gameSettings->strX.ManyBook::getFirst($gameSettings).$gameSettings->endStrX;
        elseif (isset($gameSettings->manyBookSymbols)) $needX = $gameSettings->strX.','.$gameSettings->endStrX;

        // ограничение выигрыша если нет денег в слоте. Поддержание RTP на минимальном уровне если есть деньги в слоте
        if (!SpinWinPermission::canWin($bank->slots, $totalWin, $game, $gameSettings->RTP, $gameData['BetToLine'] * $gameData['Lines'])) goto newSpin;

        // TODO Always Win
        //if ($totalWin < 1)goto newSpin;


        // распределить деньги и записать в статистику
        SwitchBoard::SwitchMoney($slotArea,$shop, $bank, $jpgs, $gameSettings, $totalWin,$user,$game,$gameData, $freeSpins['CountFreeSpins']);

        //обьединяем в массив готовую информацию
        $readyData = LogBuilder::build($user->balance, $game->denomination, $totalWin, $freeSpins, $gameData['Lines'],
            $gameData['BetToLine'], $gameData['Multiplier'], $gameSettings->reelCount, $gameSettings->reelSetNumber,
            $positions, $winLines, $log->lastWin(), $log->cardHistory(), $bonus, $sticky, $needX, $scatteredWin);
        //записываем в лог
        Log::setLog($readyData, $game->id,$user->id,$user->shop_id);

        $jackpot = isset($gameSettings->Jackpot) ? ['
            '.$jpgs[0]->balance,'100','500000','2000'] : '';
        //форматируем массив для ответа
        $formatter = new Formatter();
		file_put_contents(storage_path('logs/').'gtubetest.txt','readydata: ' . json_encode($readyData) . PHP_EOL,FILE_APPEND);
        return json_encode($formatter->spinToServer($readyData, $gameSettings->formatWin, $gameSettings->formatSticky, $jackpot));
    }

}
