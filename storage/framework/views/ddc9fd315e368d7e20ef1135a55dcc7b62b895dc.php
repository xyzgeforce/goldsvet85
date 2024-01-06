<html>
   <head>
      <title><?php echo e($game->title); ?></title>
      <meta charset="utf-8">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
      <link href='/games/DiamondTrio/css/fonts.css' rel='stylesheet' type='text/css'>
      <script src="/games/DiamondTrio/js/lib/createjs-2015.11.26.min.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameButton.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameBack.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameUI.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameView.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameReels.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameLines.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameCounters.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/GameRules.js" type="text/javascript"></script>
	
	<?php if($slot->slotGamble): ?>
      <script src="/games/DiamondTrio/js/classes/GameGamble.js" type="text/javascript"></script>
	<?php endif; ?>
	
	<?php if($slot->slotBonus): ?>
      <script src="/games/DiamondTrio/js/classes/GameBonus.js" type="text/javascript"></script>
	<?php endif; ?>
      <script src="/games/DiamondTrio/js/classes/GameMessages.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/utils.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/loader.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/core.js" type="text/javascript"></script>
      <script src="/games/DiamondTrio/js/classes/Sounds.js" type="text/javascript"></script>
	<script>

    if( !sessionStorage.getItem('sessionId') ){
        sessionStorage.setItem('sessionId', parseInt(Math.random() * 1000000));
    }
	
	</script>
         <style>
         body,
         html {
         position: fixed;
         } 
      </style>
   </head>
   <body onload="InitializeGame()" style="margin:0px;background-color:black">
      <canvas id="game" width="750" height="630" cstyle="position: absolute;"></canvas>
   </body>
</html><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/frontend/games/list/DiamondTrio.blade.php ENDPATH**/ ?>