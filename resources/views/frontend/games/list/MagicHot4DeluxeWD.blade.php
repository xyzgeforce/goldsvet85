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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mh4d/style.css">
    
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
			
			
		var SID = 'wQPnmLjl5U7Q9iiehEu3vgX22GSpmxsQtJorxUGLgJ+Y8F3HCKiBvZKOE+B7yVzulQ98f6i9QKIuVPyISc7tgCg5mwXxbk+pt24ELzIgXKnbwdhidaOXpEIMLNBcP9mMaHaBTWTj3DnMNYtVyYIQmtaQ+sW8u50TpKo9QG+fNvHlOI4ZakIm80XFQX+0Hzmem36n6h0z24LHKjfFiCWaWImroZyXOe/6RaOLmxvxGTWl/AtjcCLNSHnfKZ77jjni5TGqmej15htvmqEF5jsmA3nBK4dhZaaUBhdL2Ci89rohvo+EdN7sZY48rJGdBpw8p8b1YqxU0BDLNgaWNTjdw8iQo8Ul0ZzxkS921C24pUcQurKs4G6v7LapDRLKwRYiqQVrEZ4E62tsQXoe810pbrrj4l6XIzkHS6MHmN1C06n7FGUoEmCMG566mbxGv7IjmpZMZNiX9nhI4kgnRargpvTmcd/Kb9tERHXX+zJHg7grYvJM6qsEVcrYYs3qCML19Kt6B4fBexw2jY9zIDyGP5yQLusZmSxa0SJyMM+K1TrRu9TbOsMsmIDPrN7PMaJrRLOY2MAiE/5DeeT9ar48W1kmpdHkUHd+YjaCCDRjTqDp/vwnBOM/m40T84pAMnUpaACmC2oFZ86+XEpfPxAjkRiUusIKbKu1Du6Gs4KzoeM0KGbXKMhK4MprALtq+16XfUQ3bqjAkC6rMBUiaxv+2H9lpul1gLFrhkIgTT8xc76NaNK47FWOd0WejJtUy5yC7wdC4NvyhPZv51QmxgRXw9Y8B/w88onk2lrQ9Ipqw8E/X/lz1MTHQCheSGGzffqkguhbwJaqcoxs37wJ7fwdRpLWcGhz1ZCzS9ye2NhNOYeX1mGhsxDqnKnyKxPrtrwvcE3XT9xUNM0FPpzW2H61e1Ufo5mAGLbfBL1hbxBqA22w9XTz6CKB92L+a2vteIdCjai64yGfouiUjjDnkmrfOw87D3UOk9xbQNH1tAx3mXJZLdsAuEUQ9nJ10ACqqkHFS8sbK4LQOwsrZOup5CuMNDKD08UzrCaYOWIvuPROS7WN/+3rlPIyDaHYgqPjKg+Zpi01g86T44KYkarnUOy6kbXnlGQXa0sn3p9Qdp4ca0ifZt0/388zNRt2TOF0xJdrs7NwYkfIVAYVv4uGGXc5H77qbKElNSQAoc4wDNNypqH8DVyyCfiuoNUszkO5ojXNqqhRmwi1kRQYySJMtruwI9Cpaq1V/wep3mGuqXHepUyIg/dVisS2cnsiH7jZUtuIMc0seaG/yPFMNEGZLLhMQmkoE77LC6KgY8IQa7PzdwncWYmSjWQNR7IdWC66FFZ9x8F0u/JsZKLyDXr1q6bS1QVX1N7znbSOJqRrbE8F1eRamDgB1CW96xLL6XbnBxz5';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mh4d/mh4d.nocache.js?t=1669637194"></script>
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
