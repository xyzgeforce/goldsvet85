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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/cbp/style.css">
    
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
			
			
		var SID = 'XIf5XhY9BN94sAGJSsL6t97xM/I04bGyL3Znq3a0pZdcrQ28iLiZwc/ugGIf6+neFSYTBOsdWsG5BIj6jwO871G1CXuNzPIVeTp9IPcT5RZo4aZQ75vzR6NYHHE9CRfCU6mOOEBmLh6LBFeJ9BjHFnlNqAZNrQ0kPp5JKF2+YTt94eex63e7hnaQ7EPXyAxFgiHLCW7GUZlCiV9k3cSNVIK+JLHFm4YcI2ilCgR0wVwvibGbVAKm5bzkFMCIKJssm4DJxOwfcWMy+FLcniR28bpAgGBzsjJpSZYX5V4J7GSB4xyDsDXQRHqFaSpIGIpJ67bEOSq5UfjjMRPSmvOcRsc4fn7LbLQSFaCwob+3NuFLYUSL/zRrhNnrifrjMMoPpjUS+jKQYcInCFKLR8DBQG+HmMSehRz+XpQoCkFoE00J4/2cjXJ+KkErJ26CjnlbjdDD5FI6GHBXvojx+mH3WZN+JO3k9WUrgwtgk7WZ2WA/kQ2Ng7xHQSQZe5pXSTJ5x7aOqgPCxsuHI+DpGGR89Y3W5iuRnvQBqPRhy3BLdHNShu/ahQ44h0MGxFfIJ/84xvPx0fitZ+weqibQP3RiXv/STu4J0kR4x7Gf5oOpgPtI9DcUKZfDdFqeApgforX+/T8pLHUEne8UzliHpmxUZQeak1MvqHWM3Sp5qrxvIW6XXtJM6YYSGStiL1F+GSectToJreePen2JQEqy+5S1fD2hBCyTP/elQKC4ofVV+9Fgdshh/oAJ6XFto3gF9LVN0T+deSjXXOzZY2+LjJ5+zPZM7Wu1bu5bosO94PFgU39PswiU1lgG6Tv5g5nuLBwXusBFxo760gqMgGTzH0RFpmga+t1p0ZVlpk6zD1w1wwIQbIbxLG1ex8UwXXaIp7LOpnpYAXjV3DyhkVgVSlxP/XXKqs8cgFKLFqs2IcjxkZaHBlV+SiRIq2nVffxlKdzi9hUqtU4rPQOJU8VKYB95e/dVB9LB7mFeOdMYyxdAkfrYD4XxFCnvtjqWge+KtW+f6tuw0YIK0daPU5IgmWWY9DT5pNMTkihJqYD0WkW3sdfU5pdwDhTcMlPC43heJWt0XGoUPdV0sGk4+10fD1w2pzQCoyBWH4JfmzbuEZ+JOnmjNlwAYZ9/LGqLPtaGuS5m3r/HOUhgfS7pe0IQYcZ6ZftMo9InE0b8bc+sJo5J+RQerRAgfLEe7YUmdGYuu+B84RR+tRUm9cLt+FgSqC4NXwhnaGnyVruF8qm4xo5m1FDe+7FXJ7RwmGWn8vvRczBdj7zX5S+qZRmczmweY83UihzLaMqtl/vZtdlL6bNEJDhyLMXimJoGTtMuW7XHSCEerG91v8Pd5BsXw1SnsbCsk7ys0hFmNWNlnutWCuX8QDb6JX9g2E8t6JWOfRzcyegs';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/cbp/cbp.nocache.js?t=1669637194"></script>
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
