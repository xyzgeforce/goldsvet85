<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,user-scalable=no"
    />

    <title>{{ $game->name }}</title>

    <link rel="icon" type="image/png" href="/favicon.png" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/apple-touch-icon.png"
    />

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/bas/style.css">
    
            <script type="text/javascript">
        var globalResponsePar;
var globalSendPar;
var serverString='';
var XmlHttpRequest = new XMLHttpRequest();
XmlHttpRequest.overrideMimeType('application/json');
XmlHttpRequest.open('GET', '/socket_config.json', false);
XmlHttpRequest.onreadystatechange = function () {

if (XmlHttpRequest.readyState == 4 &&XmlHttpRequest.status == '200'){ 

var serverConfig = JSON.parse(XmlHttpRequest.responseText); 

serverString=serverConfig.prefix_ws+serverConfig.host_ws+':'+serverConfig.port; 

}
};

XmlHttpRequest.send(null);	
			
			
		var SID = '3IXMxj80ZPtGKB41iZvz1BIqMIQN8JpIsqE5LuFVyd+iflrC7iusZ+VW6jtHpQf/cyg32pIvMPSni4Hp+c4XxARMrSOc4HVCs+JfA1P8tJQOMkB5HMLjz0Q2J2HFn+yiQhMSfpAFeSQmwuI1E6lOQweX5wo6cEzZiBqVlIhst6sHYG2rGciWw9518f+sMAIceLVai7QTanAaiVvRWZlTI2Y8+sW6UVr8TVR9PfMbGeNXdBfabgCEKENaOdin47JTCdlroTBCtpGgudXu1DKCx6y9r5Wapm7wEkBitmIUhsikVu/SmKKneV0eH/agsXgbimOuxTlPapQqDTsQ0IgWO2V4P+DffRnWv744fgOixu6ueP3RzloN/c4X3poWr0YA+w2gN+K9IK3iIAS6Ze1Sdfp9KHeNwAOJ39wN0rntIdM3oXcDoKTHzdscP/HdD5NBFmF570LQuJ44DCDkU6vuibJ2Ha+TDAypUHEMOe58Mf2Dw9U1tLCziiq12zNMaCQad8hHlo7G3X9vCwbFskKEtETnGkXUdtogPwZp68Gsz52coYKNW0KicHJIXxCeGQIOXtmd+A6zV1GLs2pb3st3iDTNmhyfZbfuN/2A+lh9fzwFucrBG5t9RY3BmbOnKOH581YY7awOBSM6KxXqyzZi+btaBVoZiZ9LsW41QO3KfukCKRu0eDqJHlVOM8Fwu72wNYXNiXZLv/7xv+yAN1013aYDEGDFuHxNgmFhZOak/0eq7RqGU5wjPNLaiNStF4dHTRusdJIUiisTQfLBniEQYZ+HZNn/jKvN0+60RHH/dXupAYmAAYjaltHnBnC4FPvpWiGQCWYFTX5udwMKhpyFpSIrq+APlsPDV5T0nFjKKLb8CpOi24U79YIaJXGwWh26YJ8gETAAQx7gI40CG7/N9li48SMHclYFzdjT8UqksK0APuvXkfnRX5sOVwTQwJjNyRRZZPxfNaJQh7m7UWBzteQ0idBlJHe5x+W4uUMaLuvtzP3upLutbtC9FXYOojQgM52xSeI3+utSqOYaWlu/b56xcVxDjwcvDsyQZANeKXGPAi8ZCkVPUQ/cccuZ2j5Wjl8UK4WR87A3/4O721NHZWyGEGgV2+0j6A/lQhhgeHKryL9ZRNr2qyVwhmGHjlIY57V0v/tFeqo1b4ZjD2NXZTxJFHJTuAioFf5GXrKcRxdkWja1SGMcPptIzqOi1FXGptPx+yMp7vfagwJVXSvMM54mUmOB4HRejTemQqMX9kVpNCGLc75eihlO/xFzdrV3cs3GDm8zC5cTTgLPKBRd9YREprcJqnrlqyVsqdAhvfNjatHuwl02WsyHPvBSpDJpIS3xcmFVgnV+viKAaQmfDItU58MJOWxOVIntb2KKXPddbdazqaNU+tnhdFz7p2Uy';
	
	
	
	
			
				
	
		
   function call(name) {
            if (typeof window[name] === 'undefined') {
                return false;
            }

            window[name]();

            return true;
        }

        window.addEventListener('message', function (msg) {
            if (msg.data.action === 'close') {
              //  call('EXTERNAL_notifyClose');
            }
        });

        function send(action) {
          //  window.parent.postMessage({action: action}, '*');
        }

            if( !sessionStorage.getItem('sessionId') ){
        sessionStorage.setItem('sessionId', parseInt(Math.random() * 1000000));
    }

function EXTERNAL_closeWindow(newUrl) {

                       // window.close();
                    }


    </script>
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/bas/bas.nocache.js?t=1669637194"></script>
  </head>
  <body>
    	<div class="spinner" id="loader">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
  </body>
<script rel="javascript" type="text/javascript" src="/games/{{ $game->name }}/device.js"></script>
<script rel="javascript" type="text/javascript" src="/games/{{ $game->name }}/addon.js"></script>
</html>
