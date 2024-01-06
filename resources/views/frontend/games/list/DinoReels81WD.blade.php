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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/dr81_2/style.css">
    
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
			
			
		var SID = 'bk4vmJJkvf/Y5zpIsY8pngjKdpKFHXO/Q5NfeZoEB2PNOdVerfQ3pUbRFJuoi/lf2gOpWH0L91YgqogWRXMWo1HXFBkc6zK7NIbbaZ1pV2rZXscxmDDOR2I5U0q6CXz3DauQv+GPiROGOrXHBwMKdBU1vi0zU8Qc8JL1BUUT86+aVxOu0zg059SYp4dbIfylD3VNpv88+8iQU3N2x8Vb/8rVMRcIeuwttcBAnkWelHnFBEXaUEbgVs2pDZwtKpJpFbd/0QVX9YTZwBWT4X71BpUw83KjHLk6loDMwOK6zAvwaOkPSqRPXg0u3roNIzYsMXmk3jobGsIbsTd3lJyTvanSWckT+w5sothdhbzaqq55VeGlkTEy4qIWVM+Znb1Be2BYJkmEIKAHdU/gZInvlcfxhljAZNDu3ds57izIegfhycVp/1KOoBDxZLyzC6I6QfXnCyDbEzImQ1SRLDjpVG7kRvxLFuq+oLT2Ywlr7PWnwf/Eqw1gSbD3UkmJP7Vrv4cVkyuDJc7ve9HMuarJhhqa5AkZwIrCWM4Ph2xAFjjTEGoOr+bPX+ozZLGFXA0zWAP5ZG8+17jNkuA3hlOk+MEJ33BQAZwOCOyzojcnI46f7fWrDUfEWYWFkAh76SYTfouzD6dQ2bkkqzoUSwG8KSWw+RPrL/jZfOFQZHMnHugmNanojP2enwmOoyrUkyPkBAsn1AsV68Pb4L8KqZMGPs+URfLQgcKcr0ebQcdWxNXIEKhYXk15nCMAhNAbVRZ6gQ1OF6v6oNQx3+9BmKVI9eEuk6+vTxN6j2AsYFv6Cv+abtNyXrbREHAjek+Ra4VA8TGgxhXubeL+UyiiXA6W2zBL9MrKtMP5y6FvLKirt9sk0NdSWmttNQSYriPeXSe446vsO3PbZC8B938WbjaNsmDbyXCztDXiUKPCCYp0yTuMpfeVrcD2yCdLWnf93JwtGhQZjlt/kSTu6pEGmbjIEu+43rW1nQ9iG88y+kwfr5xSv6jEsH2Nb263e1Ed5fjRu/mXZM5EmtYAZfGkOEJkeHZ7S+WIiwNvPIak9EoZZU6qpHaUDp+PgwgMPjZMNogoJWWnrGBVmAoDvsdpaqWT4KY+H5IrMSffWwhI5X3oVF6Hb4gHJxSG5yZHe3km9/FI4eD8UmI3/NzgKIhLkcyr7EwmncpXTtWINRkR1q2yb+ANo83HlXqWq/71YNK8lfOjgMDw2S0xNkW7IunhKfkPr2Wrb73cZFA+o2yAsHkyY9jFtnBE9+B380v/ARLszkGsedlb/m7Yoc9O2ex87pESPDO3lBtqTiZ5wZqD5mI1LIwdXg8STgv1V7W8y5ISN/tUPEjtyn3u29rdPJZiyp+OAtY/yJO8E1EbXCsBhWFmqI3wjK+GmnH2p08x8TGBue26';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/dr81_2/dr81_2.nocache.js?t=1669637194"></script>
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
