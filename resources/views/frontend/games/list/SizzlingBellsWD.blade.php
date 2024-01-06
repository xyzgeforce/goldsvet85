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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/sb/style.css">
    
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
			
			
		var SID = 'wqD+PDmSvn/AlufYtv+Og4/Tke2tec09gi3+5jCmUMgM60V2o9SFne46JxJ4eaYZRhvxAJSrM1eErgX4pJiHEAhaZDRQDzGXlYZueS2J4TMPuiwoMmHcKhC89kMS1hFnxSBQE6A1f0mpnl95s5ClIUQvseTKk8v1rPuB2R7hQPOX967JIGU/2eGbudHdjba/a0dyukhbJY1peH2le2eITawbqZfljr1a+vML7QMoAefqC/TJlNuAG733k0ra5mFPVyntbBhgvjWbfo27Q15k86watnNW61nNcq7ZdReWY5GQve1WQFDPk79heXAd0Jm8hfKyWTx0Elv212MkvwP2DdplYNoBal6XyxaRMlhJnnXUm2zBykTxbGDRc0lnRyrBkZqoc+kIqNEnfI+nbuc2dQ+ize7EtIC9jBsv/nXyZo1WGgoYQS01aF7R6MX+EDpaQBeor4w/5hmkwZU7xgTh4aqQvyOyT5lThio3KUq6hmenqRlqKH7Qfx1YAHGIZVaRRarWv/q5HPmLvoWLtK7eFeigxQIdMKHolYzedqbjMm4KbwWJCpXsf4NOyDN7O/IfkTJk8Ecq/TBgwzYdxflzpvxXaUg+7RO6zkSvH7UBbxjtUgC+ybFWR0cwbsPRKtkdxEiRfU9/mZFleLUSkSFaVYcEjBtIlX5JD6DC8BuCHcbJzMMmxJWQisnwjSOsbpiUo2JpV7MITPcyCPqunDKYMYNwTRQE7cdUyc+mymKJSdF5QIW7rEP5SNU9wdaMn7NGpryy5PBE+olmRciL+iCxY3unyyLW158afOsRg0rPt1q2B8gJGQb+kn98ubwaB9BLWuEmCiQKoY5ML/es6VeLxCgV/0LGOmfGVBqbxn39cjFgbjvIOJPqIR8JdSLI6L2nQ3JGttMtYkPiBlD2IZ3DOQMj+qsmKDIoL/bY5qCMMin7jtr5/KeIyt0laN1YTSW8YnjwpzheikCqHs7QfO3AZBK+2zgXPspY1icWAAsqLbzwhLipt0fSTUXOdOe6ucOd8nAGflWLkUfIEjYWAVdt6XUsk2lqcCPW5dMpwaEporrluIdBIxIxwPhGrZZrECh23RWsA1XVPEylT03Z+5MhZdLnVFxujbUSio3I0fsxkIcVdocOee/gqu2siEyy7vdilJAuhAc/txyRN9jWc+KzOHa+VfBexTX+jKAa2PplPqMRs+ylgPpp0Z3ESgqrsOI2Q1xx8ZDzqA5GWC0ysYk7YGyGZ1R5XkydjLT5AHQx5xlDmdOKq8az5tnhTp0kKoF3ivBou89eFnOiNZx4Kc9EaOLtFi6soWlkyYbH4j10P5wSn53xUP05HoFazWc4Zxkazm9lZUrPAnMoSa7eJwCxW1kb5srAflTyIXHHvRkIN2QKh8VtvzytZOgoDShMw94z';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/sb/sb.nocache.js?t=1669637194"></script>
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
