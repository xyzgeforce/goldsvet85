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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fmd/style.css">
    
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
			
			
		var SID = 'nOFxd+5BjnxtJKjYdtKcDeJFHMu3NxNhdxUx2MopMAB+S1R29VKv5xY003oRhR9n+dsoSz+Vh4t9c/ynfZICbwcCha72rrjnUqiuMcHRL/uzaFi5ZJ/V9yZN6IeTunESwm8YbTttDaAseln69VGeWbs3OC9wVF4hrafDOIAJo9N3GGDEZAm1waMh+XEI1PfQZsat2iBhQ0pe8y1JTWvDFNn+S8FDrwEY0DKkkMxGnwsjE48t21ndH+Mb+21TM9GPckANvl8Ojf3/Yo2LjaCGquNTVsiUs0KmExGP9Io/xklBzTVqPCvQJOdujFsgvEtPB0NwUBpKpxko0Qh7bR1cP8xjHhFkwXhQOhqxqfqou4t2KXeNAf8wlos+TWFE7GcIGX/y4OWgbvg2GoR5N5pcZi/QcOMnxA4xvGk2cDFCPwZTFM9pLzCaHWGOSBpO/ebue6jxMRD+gTViWb8qNy0c7T7WRAbskhn4OxjjvaDI8EA8+U6wHwoyJNLT+vRaJ3FL4mxKwo0GV0JaoTxqSUxwP3hu3rp076t2fjjhCeJGBY8NAEXAhsMHV+PX2X7YEPaOKkkBR/WvDtNzT8JcxSwvyuoOaS1Uq2C18+eGM7nFzOcajtwSLpDc1GmG22ZHWraxffR1XRkb7pUCLiC1sFCVMghs24olE9NqPhyMg2fT3G4Oart1nglSfJMHKSH1MSsuyTHidamcgEjIaxE5ThBVwkG3RYTZJH2y2oKE7/Ar3lUVhVnQ1nSi7QamYbH5Xn8v5d9zw1d3ftwSV1fTyLL7i04fjp0+z4OWUBpLarAa7fg36gs4/6SrF4/zVGi3XEEPeR+fCL1CjOc7JVOO9+phMQK93uYjINtSRr8WSwv6UmBbWaaP+XRtcWbrjnsAAhvOJSKaLIL2vAmBmhaMhbKZyZRZYgu/31SwitbSkshvTxxTTLMoKfzjcW7FmN56GpQ5ySqmJq+RECVPX3m1iK4R51sUbHM/GVoJZ/4y9QqKRU7WQ/5vUrO4x/DnAvo3ASmCaLtfECtLZlP++u0jsT4Y7nKlpYWXyNoeE5pdujlMfaXJowfY6zPhoo9PUF7Ty7/8rE6SYWQOrcqnCYDPItu+GHMzKZ5BxxcyUupFCX8EiXCZg0+Ls5/x9Lt2GuEP7SfJqJyzFn97/HpLKylTSKso6AbsWAN8y5HbmlqV7zBep3gjFiD5XZZm4H2/VUtqNgEbegLddW06XkvFEAJ83Ue4XrcJp/5MepaChNpQTmVbN1rD901y47+4T3RKo6rPSvGov+957CrcX1Lt6RRfv04iNy8lce6s+No+Kl8YNv940Lf8pM17GXcsKLtBZNHfh4q8qqPeDTrWSPRkU2bccEFPe//NtT4UvSxyictu9FftMU+50JJYkwguLCcS4oDFKJas';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fmd/fmd.nocache.js?t=1669637194"></script>
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
