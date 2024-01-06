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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fbmd/style.css">
    
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
			
			
		var SID = 'zKaVOqS8LYYeY0f1fgPt/aZQ+AlhdkhiDW/nVVnzQ/nsj2jBe08ifnuHManepggHuGccdRl2XnhGN7OcClwkHo8k01+6+ChhtNZVWNFFpvDI1ekA8C9M0MPIGMlpcqGl/ffuuaxUzg+jWjghjeVUlvB8Jer2OiLXZVeXrLgnuOsW+WOgiIZfDcMhXwt7QZ+nDe9MKp6qjrTs/k1OiJ/Yps8kwEZJu5YbwLtsWrlG5ccBMNMbTKaIEgMm2R4ZRP+oa+baDaEA75pKzNNR+83c148D3sUxCDGNyLUH/pL5RuWJzg5zktTxfRQNKPMsC1MtFUAJwk8wVdvDX9KE2+l14+DY81nul4wtTHlBNehZYi2tQyuUstirjE6pX6FUw9LQvDfg945Lty8kbpK2JageOfwAxXT/sLWUJfYVPs75pbqlzYB+ChC9/puC87npdUrKRLWjpcCGVlAd6mnprPQRkILUerveo1aVKQaMLpiHplg8sVAomFgXC6N2zxfEkrffYJotr/TnbZXkhKkr2Frn3+hTMCxOYJWtAt4nY9qtMsVu3xJHNlZOAAGZte4OPSdddyU4eR8aYHRaMLRXRxkVZpX2+/mKVJ+dIpaAlKpxwVsof5j+jFWZGDd9HbM8MzneHe2xQGuSKH+TGFQ8I7a4YSGiRIu07WoFTjuXH6iAxtKS8cac0z/Kh8odP/LNI9WCRVu4T0nwSJkMqnGwul9WRaPB0WIeGhSdHWF8qagLaoSHUw0Hqyvtt6KXwZDU2F25Y6uvwc3P0dQqGCwTXAhGo8+DCT+QNPPaG9PWt4IUMN54DaTAteaGOpc0fDfzHHUoOAC6hS2k3i7RDjatEXuf8RTV+TiCWCHIpxUhE2lydBg8q0fLJ8g8n/uaGWNldqnqAj/nyutzkQNakSt7XiTG0eWp9fX1UNnUxeChVnBlozVs/HvPigPergAUgY3HjNOyiA2Q1m3nm8brl35ypLZa6UgpHLvxj0zVqtUWXdYnRVrHO0nVzvoDxIt+E3vPRFwss5fb76TmBS2ZVy3gZwPh5KP1Lxuw4/vuPYVYlH+6GRPlSej/5mBJi9qSPKUDWX41kWda8hXAquLNl912fX07QF9vVUTx5mpsK09TPHTbp9nUHG1XuAfgOTuCjLRBdSnSKVvk/npzGMCcam6SjmqUZ9QB8bucZnpV6WCa/j0F8VFajgSmiTMRFNLJjqwSDTalo6EK7PgxxT43Ckp5H2tPpXUOjq0tuN/8UQ8w1uwc5u9nkNDOozaSNMERtZRoct3LXzMrOWw07gHglAOcPbQdWMlUNHqXh+AFXj11scJmckfFNAwwuiydXUgc/MeCdlrMT5bwwkRdoDOqwcYZBZ9p1660gdySZSYU34009KynuHMp08SSsVitMoLoH2m4rLYr';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fbmd/fbmd.nocache.js?t=1669637194"></script>
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
