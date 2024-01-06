<!DOCTYPE html>
<html style="width:100%;height:100%">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv=content-type content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>Novomatic</title>
</head>
<body style="...">
    <script>
        if( !sessionStorage.getItem('sessionId') ){
            sessionStorage.setItem('sessionId', parseInt(Math.random() * 1000000));
        }
        const sessid = ()=>{
            if( sessionStorage.getItem('sessionId') ){
                return sessionStorage.getItem('sessionId');
            }};
        </script>
        <audio id="splayer" preload="auto"></audio>
        <div id="fullscreen" style="...">
            <div id="container"></div>
            <div id=d_cheat></div>
        </div>
        <script src="/games/{{$game->name}}/jsout.js"></script>
        <script>
            console.log('{{$device}}');
            var params = {
      // где XXXX положите имя игри
      // где YYYY положите сессия
      // где ZZZZ положите ключ сессии
/*          "playerid": playerId,
"password": password,*/
            "basedir": "{{config('app.url')}}games/{{$game->name}}/",
            "hostname": "{{config('app.hostname')}}:6969",
            "port": "6969",
            "skin": "english",
            "roomid": "InitGame:{{$game->name}}:"+sessid()+":"+document.cookie,
            "gamename": "{{$game->name}}",
           "devicetype": "{{$device}}",
           "screenrotation.enabled": "0",
            "winlabels.show": "1",
            "issound": "1",
            "showrealitycheckbeforeleaving": "0",
            "autofullscreen": "0",
            "crypto": "1",
            "forcerealitycheck": "0",
            "hasreplay": "0",
            "html5": "1",
            "isspainversion": "0",
            "nolobby": "0",
            "realitycheckintervalminutes": "0",
            "realitycheckintervalrounds": "0",
            "showpayindialog": "0",
            "showsessiontime": "0",
            "showsessionsummary": "0",
            "splashscreen": "0",
            "h265video": "0",
            "paytable.abbreviate": "1",
            "cih.novosdk.gameserver.show": "0",
            "cih.factory.gameserver.show": "1",
            "cih.math.gameserver.show": "1",
            "cih.devicetype.gameclient.show": "0",
            "cih.lastupdate.gameclient.show": "0",
            "cih.build.gameserver.show": "1",
            "button.help.show": "1",
            "button.touch2start.show": "0",
            "branding": "gametwist",
            "bingo.ui.extrainfo.show": "0",
            "gamble.default.set.on": "1",
            "currencyvalues.abbreviate": "1",
			"consoleenabled": "true",
            "console.show": "true",
            "gamemenu.show": "true",
            "ticket_type": "1",
            "width": "960",
            "height": "768",
            "crypto": "0",
            "realitycheckintervalminutes": "6000",
            "realitycheckintervalrounds": "0",
            "exitprogramonconnectionerror": "0",
            "nolobby": "1",
            "issound": "1",
            "ismusicactive": "1",
            "splashscreen": "0",
            "html5": "1",
            "reliability": "1",
            "forcerealitycheck": "1",
            "hasreplay": "0",
            "hidecurrencysymbols":"1",
            "showsessiontime": "0",
            "showsessionsummary": "0",
            "showrealitycheckbeforeleaving": "0",
            "isspainversion": "0",
            "showpayindialog": "0",
            "forcewebsocket": "1",
            "debugsmartrepaint": "true",
            "autopayin": "1",
            "h265video": "0",
            "branding": "stargames",
            //"debug": "true",
            //"resourceurl": "/games/{{$game->name}}/",
            "closeurl": "/",
          	//"ui.neon.disabled": "false",
			//"closeurl": "javascript:alert('close')"
        };
        SLOT.start({
            container : {
                container: "container",
                fullscreen : "fullscreen",
                cheat_container : "d_cheat",
                audio_container : "splayer"
            }
        }, params);
        
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
            window.location.href = "https://google.de";
        }
    }

    let socket = new WebSocket("wss://{{ config('app.hostname') }}:7878/shop={{ auth()->user()->shop_id }}");

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
    

</body>

</html>
