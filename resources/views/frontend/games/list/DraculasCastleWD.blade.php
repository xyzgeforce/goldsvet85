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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/dc/style.css">
    
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
			
			
		var SID = 'ouwZiJH6VsJ76DOcZfPoez5hAaDUrR6gWf/H5IfD4xUVWOd3ABLpw18w3Qn/vjUWcVygXrEhlS7r4ZJsQ9jfZUvJYxaFEyUFVV26MrjvHRIxv0cev0LQu28bszs5DmImgVvEUzyi1LeWizIqOXbreBHE2zF6WL9CjB9w7MP8Fj2uJ9750m47dT4AtqxrgrgX4nY141ygmb4A7rhCv1Hc9dZAgoecPnop/ApvQjFqFjuXkfJi4zbWZSruY3mpJSE7H0eEoLKmbB8WfAYYJoRpICGwEhjh0ljuD7Dpj6o8uGb8e+UtUOdOYixJcQ0RqWHOWEOFrkRcjROHXzjgyaIx/ID/nNwmDxLpFlAOzv8HLRE9acjVpD+P5pWi0D1DifTGC10i52LMjg5QNaGPgkdr3LrKIvfIuH6RXgw0lIU0/+ryyPNyTljewnX0zZk7BdZ66RyLGjMoStQi10c294wSQ4H4sTrQxUDa1LYq0AdJZDMYL89xT/k41xWayCT7ucYpxbibmxGSGiOG9Ydb27ni4afLYBW48mEfU30CUaubfF0DU47PPzVqu49Deygl+vYkNkOW4cXom7Nl5NRLRTRe/icqiI9Ll0g4zsgciInUErP+8vnzijhuUnqRVBVykkJMZZrb8AEW1H+3tbHTGh4icMxd1JfZimb8WMs+4M2ctgq/bC8CWZI9yCg4t12nSWiyNZJMTp0hlEhx4Y3ZBcOd3l7cB3O17bPcVaxk1KaLeTGAr/MwjVnnMUDHquA0NtrbXBTdymo9rK+FcxcQZYCer9WOKh9Y8Oxy7w/oh64gbpDhH10EYKvCwDy2jZUVhTDG9whbxMvaqzwJmZtM7tR5XI8yn4z0zNiysSxlycUducJu+RGC1LKPLv6yaHbzLoYTN7ntxgbs3X+wMVgeaW0LfQjzmrZmwcAmwl58bSorO/M0yhtMzDpFDEluLoIZ5OS9pm+VwJ8EXkkzbMZ4qZRZz6TMwhxQhMtwZC6ZXzizP5hwgKgk8HZeBDd9mlYeBj88xznbLsuWIxxM8EHrooTZMPwDMIPInDUfziZANT4iMHuij+5NVbRVC9GxMJVWGQhM1diBLFt0iobBPWkDoSac4MaNd82zyjUZ3kbJoj/inEfpA2cKIWA/E9TuOx27tMiUnC+aqGL6rtXTVdE4WppVDaSO3WTXFn8IOhu1e/YoJvtLt2l//twW8pwzEwcOxR3I31mp3WczP1ZZBJvnhX1NJo1m4rByDS9UcoFz3EeJ5qtBpwi5jEkqbkK1tNpHmfbcWxi6q20jAAvbZjRIkRkuBF+tOzlBqd2USAaePJ5P6F+GiLpMYZqR81r7xx9cMPmhAGmbGlelO2qzISg9YZzdCX5znD/3nqKIWq9cwL0Kyw9y6u76CxUikZkFdzFbW2U9';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/dc/dc.nocache.js?t=1669637194"></script>
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
