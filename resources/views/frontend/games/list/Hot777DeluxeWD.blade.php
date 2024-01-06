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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/h777d/style.css">
    
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
			
			
		var SID = '1X5rPkBawrN07YUoQzdcbpyC7ipYLKXufv91Vg8S9JG3Ib6+F5QBwfpZbZPSxdLdlxnj8BZmE1Wqhp36EbLFtxMgE3qCfhP/idaErY6OSMksCzDDWeiSwOHSk+dGvu/Nky6inPMlnfo0y4chLvxQ8+YPqKzLfbz91WqQQXmTwihAHiKKWy26BDtUhGHBvqvrVZ8srO8DcVvpc3mheUhqQq+NaA4CtEco2BpWJhanMV23Keew6H6E751dYKx71dXPMQwh+GT5kWihCAtCiIvcUv4Lv2eYk+1crQIopdcIpJQ4olLy3Hku/v8koNqFX7UmIWKrMU7DRJ+jV+JYd+i72T+cXAEoUs9UWDA8dxPx1HQvyZpW1uPKs7Vq9dFtcDJ0NdC/QDTsqzNh9BTJxM3+OEAdnVOjWb638+NPTSMuFYY+iyK8HUgjq4iR99aKRZmrZDPlllzkPeVXPe4IEaI7IY6BMzp1EQkWD0UrlOAlhNk+H79Lc/22RIueYZmeZBWzdD/n5Ei2afDSZazQ/N6LYAzFuEwBj1a9gZWCiX3oIpvmHjpu82A3uidGTiq7F9RTXs9wXgdL7lNt9dINzzO68auhbIG6Avg48tvUFWahlyDNQMt+t4TBbizn3zUVanYodTfyBV0l3ff6oM74YOLPEqrvKq8N+g9EBF6e2GJ4v0pUpdsf25nbW086H787b1wmfwpYwO+OdYYVhag+IrJSx2xlZZTAwyPll6MozIZFoAuYSPiyP4b8kYP5zWjmMaN92wLTeDgUgQn09Wy4jrlgoPbFBkfPX82jOKESlImRA5nZ43zNR5H1TRvHrgsMHQLovwHQa5r/aBdZjsWMSeOanfhUl6dCTQgffXGWhpaWnPFyBfBNq9qsoAjsNKdLttsztjrN6ZszsLDlc1QMhi3WJEjhZrPnzW6RfWRBe77pYM749NYOqAWO5LRuONDxqPrSm11sNFepdTnQFz9w2eyzWf5H7ENdlDjFUu/HHvHUxiQeqpUPRD9u3AdXc5CBPSIhPczWt3vYW9WeG6Q/jG4eye/BuPvmjHX0ta41/5J75X5/ZWEElqahJszk31oiJMrub89U8DgPeqeGS3h8hKUNyxIOwb3TqOq5wYGPKuZNiZP9zI5By2q306cNmNl9fnRoDZiOpzA+7wdmIqGhzhrXpH9qnZ7E5gitWFg/2VivGwz4YvN7Etb+/4RT5TaP3TaU8Om0N0XlHeJuFeZdlFQCgGYfIG0JJXK5MDHaSYjlLp2uH21s6zn4iN6dNreSACyaID7+vJV6qCC/YYfOwyEh1NgmLr0T1qi/6BBqO8WU/d55Om2aszq8CoZ7SJaCvLZafQTtGb6cgIKFLWvoLlChmO3hP6rB2f7Fj9oskjOue0rSs6XTsYl63ErCB0lrus8y';
	
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/h777d/h777d.nocache.js?t=1669637194"></script>
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
