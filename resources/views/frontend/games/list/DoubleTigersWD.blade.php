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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/dt/style.css">
    
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
			
			
		var SID = 'AAc1Gp4vrj6dC9vC2hMmZbz2gLswdGHn/S5NZekfiP3U4HcSTW3LYUSMlT0e3MKV9yrA7qnVji/SE5O5PZykg6jG9YLS84qOGZsyh+mz1jukJpBYzWzw/vFPJWuUWqBcFk/rUqXja3BMYswh8aibLCv62Ijih1SB5+A+VamJc37WopPcRnH6WmkQYV9jaCDFjchvtnnE70o/tObTupL8sKl6QVoQ9ZYExhV1U9swDUudOr5E8W5mHuyHKWdahLggNjjQMV7M36VDhnhvTodQrZU3IyQu3a05GeBzh7vK8bArS8Ubczcj+AcEgT5ciajU2M4B9H3tVx+6DbMI/mr14a9jZfd+4QdvbQAuc/NnmSIullVZTwBJVVtyRWgan22Rb2pQDpy6NB8hkUbLHLZ1A+vpU0ICfslRkzXHl6JE2jKBzGRZK9q2b3TqrUfdNj1Vy92uHQG5B8d0Fg1Ec9bgPoK/3AGgZhkhwy2mB04qytIo7HO9INyXTEr9XDtvp18aBuACTJfW4XlcSCdsNKtSU9qkd6QoWj1eEYVnqQ5XwmiOzqqB1o7xpSASzkRH3Br45iUhbV8uRs94WyjonPCvB+H/EJaF5Id07J1WDdwgZEV7EXs0leBHMfuY8BWfB18IOdbbJY4tFGcvYjaAi/5Sfq3gildaMC8OwnY9fVpt19T7jk1ifVFCYnPPS4lP6oenFXk0GsB+t4LIlQxEfFtktjlzKr+uKDhyl+zZW6BT4dzXxYUOnOW0hdvsYzApL8v/TpHr4uvZ09C8aKa9a+AfXnkS53chc7gliAC1aXpmMMjxAeb2dPlRKQFZ6pZloviufhdUN7rYvD2T+uCTrYUSL1502aBh0y+Z06Cr0n4J7i/bS8u6QJDJ6TwoqcDUl98ACuuqFC8SupcBQ3IZ6nMw94r3JWB8pjWrSFgVS09+Snf81iIo2Qu5fOoMIGBBCcyVfX5gXaLSCf6YMsM+4PRjTYrHZUc5czfxv+WMwdSkI/oZLg6uFIsPoUzgFjGjA180Cy7If6nnR3g8EyDXfaSwkIWltj23uTEZdDd/FcK1+OrOh1yOHoq2TL0tL7T1DenFbsuAVup0JjtYlnuHeHopAd9iHWBLdiE2AYGc/vmdYksF18u8JP7lSIN7k4zajAxLfpr24aAW51kIlNvNS/tvZInZ997Ymo/V5/hWljwZWNUI6zY5uMRiZeSpwG3zpW5BdMKPSzY28eY/9A0tokvOiRA6ZhOF79EqW1zizUavPwuvlLbfPgupIezg2sjguJ2AXawSuRLAaNDwbId8KVx1fUeAo28pugXhdgQftkPZ7zQ1ozzdS8kcqMXK6qDVe0BqzNx+LKzp/8zjTww0O5vdRvOkRa0Ih1zzGGFQRAYQ823dnDHCnHzfHjGBvsK6ZQbx';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/dt/dt.nocache.js?t=1669637194"></script>
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
