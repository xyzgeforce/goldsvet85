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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/bs/style.css">
    
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
			
			
		var SID = 'jivPMbWYwRG5mWS5a2Noku7uCur2jSDdq7UH2y0SLla4rDzemjm+2vRCSWudkOs6ZpkdmtJQwhMyzAxRhsqj99euyxmCNzFoApbpwm1Lc+piFGe+ZH4pCjOKP9PhHPho4MFkl30xDV+c6+86MzpnZJMbOJTSpe5XSYza4BDPP/023iO8g3KI6VwOZvhINPT1nfM2ZvDgtfVoABODfxjGlMVfJ4/0dgVjVXa/YCupcIyj8+X5ymM3R6B+KJ5SyqXDpMOUJti4AsqNF++JpbZ7Vdny3e9RHuGEzJY1wjQ8D+NIM96zGOb8+atmdD7ogXAdiQrlaXr2CSAulHPy8ujIbUekEppXtmgB+/sVV0KokKRzoUfB3Dtxaqo3QDI52PjCnsNDAWv3ARqsUbLnc+k6XtDI00PBn06FQDw7KbBSDd9NkFtzE7p907E9xznA85RoVuzDuse8ph86SaU5uk7lCnLpf//IHxtKoVUfPt3F63+rvLWLJIR6CgJiUgJUv7hMpick0drebBx2Uk9r8OSn0uJ0mY5ZRi9Fwsy1TH06I1ebeG7ytdEjIOe7bpQP5hbaQ8My/OzbKZAOosrJvARYFMCYSdAwbBWHgCJWnzZjiF3WZuFiJ3ioGgvpSytgWmIOHJ6iGbRcQp19knZGDO31NQArXNh5OBIL/Kvb0j/gtawjcc/DXQRdw/yHINT4s2LEdhnI/hYi1+DvqUdr89tICQ/nCWNOJXeUSTrpAqXSsEGXprziWaVRxbjTYmkZ9yRKGYyQwmKJmVkaYJ3GFgVyURgMCy/ByahaXA7ADylW1kz0rA2oFGiKVteShkh6WYMngAZbMEuoDbkO+yJoKNVXtagXW2MOvMKPS8CXW3eOtl5UMxvqA1+un5EZWGe46fmfvF2Ll2sviqqDi8oB76vvu+e/rz12shMkdusy7C2wpE1JAqQFjNQYE3OjJ8JENZvGIJFL+NYGQrRxn22fUz//M4HPoJ/aekGp8+d2uEzuKjAssN3iTZQxLIzu8oT6nvXaPyWx3UaPTJ+OSgulxzIKYzbdNI66R0WDH/iI88a1Cp2+cKe4Fbe9VhFoI7ZV7C43KgXl25/kJnYKTYB2TYHFSkBWkgzXzUPE71Oad5rF9hS8g8+87hjUvYG9NCzZSMeBrqcVDCCd+JDwHTvvvEUenYrEG+5ir5MWST8PnnfoZFiwd7VsbAPra5J5V14pBgkkX1kfEfMQ8BuTU2t4XbgfnFae200/gf1hQUTWXIkfqq1OJsk3woysjFWsSALIuKpqV2MJH/cjT/5gOAaryWg4WuoYZIhOtTaFAgT5q7zTmlfDDQM0yOmHl1KO2aqRPki072YdA+i+x0QbDxuDS3d33FCiEf12+pneWTPceIQfe5mzPp4sE8h+BRp5shRZKG8u';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/bs/bs.nocache.js?t=1669637194"></script>
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
