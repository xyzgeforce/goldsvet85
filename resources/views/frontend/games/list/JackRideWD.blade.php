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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/jr/style.css">
    
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
			
			
		var SID = 'VY1S53sjA4lsJ88kd18tCKN02e43v7pHv1z6gXw0jnTHJPFJTRqmbpt/GArmT9h1wiM0e+QPnylxRUsXSgCe9Fx4c4T7rfh3tzVBDzuHyfYMTtG+gJ84gFR7fsEExJk2Z8cZ2WrLU/oADnAAKesnU20h6pF7yKBQGlfyTo0SDPkebhSO/AiU9C2AKClUOHgOSgpdipjaPVem56me0tejAeJ3KgdPLwUDpBAkTOY4/eViniba5iJJGts5Cp6H43tkNpWewP3gmJCM6b1yo/3TN3pDI/gbyS+PHB3H5HCcnLqFeXwtQ3W/rxNuRwama5bcXueTaI04d8rAidchyTRriTef/4X+lv+AjRs/gBW1v/IIN240/cR6zmYBAbHhYK3msyESFGxQAjBNaROhK4PBVv+sIYHU7/Ujx0C57qNkKtvhrBzgXAdlb/FpofWd/M7RHJXTLl7jDH7ux/kmgi8RonuN2oX5f2/W66DlglMR0uFLB/Q5Bl3QH/I5DhGPK0VI3VOG+0YrUqIsX1JkQfUqXGSM38q43MOPkcqI0Xdw3d0EeWhCCZ5859MOajTAtgzl8+vIPiwsYTM+eOR7DBovv3GEXGRnUS5YscY0uIcqJE3NcRsMPy9HxyPRwvjZANGOhw7EDT/4qmLao2N6j4xVhSl+e14DC4ngdMyHfbua6uIlqZlnvQdYX+2cQWlPerjUX0q+/4QYp/3TfUNfT+BLoCbiWyIDEWyLyir6vnwXgKiPcKi9LRTakiIGHO14YVELrSkYVbycTTeDb7PQxPxyRfMmo/V5vaIZmBXsVuCJJQ8woKZnxwNDbvRyCKacKOH1q0SMeXNkT0PrQz+YaKAULs/SqN1v+eJDZzkNU8r8qQ7ax9xIJhvyBoWRMc1Td3LvAfvEB+5yQpdU3t3muZt6EmX5KFUz2SoEz+7JznIzmB+MU1va3+Jz9awgYT7bHp9hvDNQT8IAP7o8cbQPJwFzSGIKWaSuLTl6stHwAkaJc3n/01+xH/7ejufG5Qwk5kRhDxHhDsmxZKEbSnK6+IjTQ2OoeClMU+IWd0oR7cfv0a+29rDynGj65vVw3UcAY1DlMsFqY3szMQ7NmGSuMp0zcmPSucot7bPgpZh6farEdJI9qKoVAEKlr/LmzNmJ9ImdvTBZbQU61bwmVbUU1IWwb2ST80Lno1Rr63dMYpjPJ01+9BrezBDqjwCdMTPFaq8yj7sXCCuQcd5bms4ZGQHN1CxnsYRaXafXAN1+EUV2OqegibEG07LHh1mePO8CZiuoBUKfPoZ9AFaNZCWHG39BcjIw4ujz7n661SCGTKlkpnb29Jw/UZJo5c5ME/pQQDKlTkut1V7HVn8r31G4DHZ+s3rja9cvaE3Ufc5ifBR5QZBbBA13lKyUL71ZbKhlLvg5';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/jr/jr.nocache.js?t=1669637194"></script>
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
