<html>
   <head>
      <title>{{ $game->title }}</title>
      <meta charset="utf-8">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
      <link href='/games/AmericanFootball/css/fonts.css' rel='stylesheet' type='text/css'>
      <script src="/games/AmericanFootball/js/lib/createjs-2015.11.26.min.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameButton.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameBack.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameUI.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameView.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameReels.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameLines.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameCounters.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/GameRules.js" type="text/javascript"></script>
	
	@if ($slot->slotGamble)
      <script src="/games/AmericanFootball/js/classes/GameGamble.js" type="text/javascript"></script>
	@endif
	
	@if ($slot->slotBonus)
      <script src="/games/AmericanFootball/js/classes/GameBonus.js" type="text/javascript"></script>
	@endif
      <script src="/games/AmericanFootball/js/classes/GameMessages.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/utils.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/loader.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/core.js" type="text/javascript"></script>
      <script src="/games/AmericanFootball/js/classes/Sounds.js" type="text/javascript"></script>
	<script>

    if( !sessionStorage.getItem('sessionId') ){
        sessionStorage.setItem('sessionId', parseInt(Math.random() * 1000000));
    }
	 function preventBack() {
        window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function () {
        null
    };


    function moveRect() {
        if (window.history && window.history.pushState) {
            window.history.pushState('forward', null, './guvenlik');
            window.location.href = "http://google.de";
        }
    }

    let socket = new WebSocket("ws://{{ config('app.hostname') }}:2083/shop={{ auth()->user()->shop_id }}");

    socket.onopen = function(e) {
        console.log("[open] Соединение установлено");
        console.log("Отправляем данные на сервер");
        socket.send("panic WS active {{ auth()->user()->shop_id }}");
    };

    socket.onmessage = function(event) {
        console.log(`[message] Данные получены с сервера: ${event.data}`);
        if (event.data === 'Panic!') {
            moveRect();
        }
    };

    socket.onclose = function(event) {
        if (event.wasClean) {
            console.log(`[close] Соединение закрыто чисто, код=${event.code} причина=${event.reason}`);
        } else {
            // например, сервер убил процесс или сеть недоступна
            // обычно в этом случае event.code 1006
            console.log('[close] Соединение прервано');
        }
    };

    socket.onerror = function(error) {
        console.log(`[error] ${error.message}`);
    };

    function panic(){
        socket.send("15987615|{{ auth()->user()->shop_id }}");
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
</html>