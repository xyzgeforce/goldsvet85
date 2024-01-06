<?php

// User rtp controller author:: https://t.me/ClassicBanana

namespace VanguardLTE\Games\PragmaticLib;

class CheckUserRtp
{

  public static function user_permission($user, $gameSettings, $bet, $win, $fswin = 0, $isFreeSpin = false){
	$get_user_rtp = \VanguardLTE\StatGame::get_user_rtp($user->id, $gameSettings['u_max_row']);
	$total_win =  $win + $fswin;
	$user_rtp = $gameSettings['u_rtp'] - 1;
	$user_force_max_win = $bet * rand(1,$gameSettings['u_max_winx']);

	// var_dump('user_force_max_win');

	if($get_user_rtp) $user_rtp = $get_user_rtp;

	// var_dump('user_rtp='.$user_rtp.' bet='.$bet.' win='.$win. ' fswin='.$fswin. ' total_win='.$total_win.' max_can_win=' . $user_force_max_win);

	// Freespin protection
	if ($user_rtp>$gameSettings['u_rtp'] && ($win > $user_force_max_win || ($fswin > $user_force_max_win * $gameSettings['u_max_fsx']) || $isFreeSpin === TRUE)){
	// if ($user_rtp>$gameSettings['u_rtp'] && ($win > $user_force_max_win || ($fswin > $user_force_max_win * $gameSettings['u_max_fsx']))){
		// var_dump('USER_RTP_HIGH_NOWIN');
		// if($isFreeSpin){
			// \Illuminate\Support\Facades\Log::info("FREE_SPIN_TRUE_NOWIN_SPIN_NO_INUSERPERMISSION");
		// }
		// \Illuminate\Support\Facades\Log::info("Userid: ".$user->id." - CheckUserRtp NO_WIN. user_rtp: $user_rtp > ".$gameSettings['u_rtp']." win:".$win." fswin:".$fswin." - TotalWin: " . $total_win . " user_force_max_win: $user_force_max_win" . " - " . ($user_force_max_win*5));
		return false;
	}
	// var_dump('USER_RTP_LOW_CANWIN');
	// \Illuminate\Support\Facades\Log::info("Userid: ".$user->id." - CheckUserRtp canwin. user_rtp: $user_rtp > ".$gameSettings['u_rtp']." win:".$win." fswin:".$fswin." - TotalWin: " . $total_win . " user_force_max_win: $user_force_max_win" . " - " . ($user_force_max_win*5));
    return true;
  }

}

?>
