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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/wg/style.css">
    
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
			
			
		var SID = 'KgeXBffQPWHcZnwnUo+MyDNoNc/GDNUq3igtLhIUuOOLpVP6JvedLCaZ7Ai7JfIgMXnlGpv9ICvIx0WHuXcpQG/DpEFApK1n/81LCTJ2uu1iHu5pAxzpH9kFRqYDq0ZAHCGEUPQkM8MhHp7oDaEUbZzYAiGUbrBBq7HUj1EJHQHYUBlhwhD1aGUxdnkJz4V3eyA5WvrmBnVDKX4OhTPo8WpPtOjLCEgaYt83tyWG5YvMODmdI0F/nqV9XyfQP6ZjvPDO4z0N/LTKdrYNt7bO655RZhoXcSs5o9n+AHsc0adwJ7W59VUxcuUKNj7RClyM4VhXOdu258SCJsnfxjqRwf8ZcjK1ItTkV5AuH48G1PWUhmo2yMWGifNbkI5JXcJ9YrxHQH/LE7qlUSwPZTauJzbEfInFIpuSsxb0oDcRf5mYwbDsItJsQpvXy6tgjWIEKxEMjK5koD7g6A02oRCa0cSm7N7nNQyZb8Ntaz4s5eBAFuvk9M1fCwBbjF9ddsCZr9w0fVyHPxXdETmPbcqp+3jEtnsEjgXqltsMrHf5aXD5MDZhspp8hbn4lFWl2iKbRkDnZvaYes83kxrLa/5I0BK/N6biqESbP9YRWrPhKpa1uI6T78dRK3p1cdq+f1+rhx7+2OWcVPX3B6Xo1c8X56Ty2EjRW8dtO67HuyeGTiYKaJEIJCbxY9ZSV5E1STug0gvNIJ3FbFuFv7BribmivRnmAXrw6MATIi9bt2vAIUq4KgIaQjK6m/0Sf4s/GHQvNl3oL4N0YAO1Yd7QPwXcalUZv0Qy7+nTU5NOcknYLuII9+21+NwiV7zX0sK9P77Zdz8F0BKJOISjj1BKCVIr0fECtAF8VVqytl5bK+b+ercMmEAozUXVA4YQE+UxorFozht/6dUxy9Iz7iV48Adx5w8FqmTCi8mygoqXlJL0zVuplyM993r4UvsSryGwhJPALGRQVAtypkhnY+4IPzhMhjMggNDkSu0+Fzyq8LCBZqqMpnrWaKzngNZig+3WXSRPuBlDeDR28koPOkE2wb/q45Kz/uwH47CanvT7xSROe4swq0BE/nYbe9z12BWOrM72E8tsYDc/WrIP9VkkJIE+NS2vt0QHq3HsqgZi1hQlm7gcsW/WPYN+4u+vCI4l21Gh+3Y4j2lqEwC92gyJF4fXgiPnJXraOgeY19RsE0JnDRN+CewaOJITsZer4+q4gluLiOH0yhjCcSNYFDLGbfddGLAdbWy+wv7Zq0md0xsUzmQsIbpEEMDP7LnLH5wJT/6K/8NTZAXzKQzbsBtcVT5FXqoUCr9TMKm8KVwwtw8pA1sUJtsboXeeJQpo+XYwv5RMBE07M3T2IjYBy3O4ixYU110nf0AwDwwkqJiYOAFbzCgsc7y79Uw+hGXV7HCmWN2y';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/wg/wg.nocache.js?t=1669637194"></script>
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
