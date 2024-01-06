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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/sr/style.css">
    
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
			
			
		var SID = 'KPdIE89onC8iypuf9Vo+Zg+wyHAHkhb3tbRg03vfCE1WxtoFOWGpmcVet4MbRcmFDwCoPVzicQ0g1rKoAxN6ZW+AOwg7I5kRrY867fIfj5FgS7TPSuc7gg/NKBhpEVvKAmPsTa9y7s3PY2eMCPdmlABTaJ6bOnDKiqgMoLBuHTHIfQtUo4LDlICutWbfloQRLDwXpbhKnClrXpHoPsbD0em3/ZzES1RNMk7EET/t+1/z4m0Sz9RyaRJOPesJzR/EHimecdV/ybVAlq/MBzxvdkn17O3NRoEFRRvQ/XkwyVpTYIs1rLJXxs0PPqTBhZqrW7U4z3tZIr5cYvdyAvMTbyy+z6vB438yDgbdQYIyTRRUB1Cmf05oEnmngmvJ7zo2scUKOnDKN+8lt0ZzTkCcB2NSKEQS+7Waj9o4qncMW+3NeWqoYE7a9eBHNqbLi8wgCnLfplfwDVutE58WoQfj/39FDpWUMFwKbDb4ZQWgYBkJZ/fXdJMzCFHA164DSXT6v4ttgD0vbprqm7q1uJJVvYLkiQaSMivcn1m3wycNMf/eBTY3SbaTNBxim9Bpb2CyQUADzh/tW9oZ53dnh3tgs3KujGYTgXQsnVcTNo9Z58cpGaZtUlcVKbOToX+quyDLhc7XqohRlEikb0PxfJi9p58C37EJbtYYQtT05FILBPUQ7XC0ZuRwjH+hKbZk+cFBYEGCkcYfknb/M7zUDMvvu7HBJMDHbm+8z8Q1lt7Zzv1H+Mid+F0OOKgiwAABi5xWksevz6xJ2QGDwuDRwwosxQ0VG2jrgNxzPwUWk7xdXS+3jXX9ZV61g8NkbdbjXiF0V2yriGjJsNrR7e+itqOID8zPJWMuhraCDCXXLQ5WCQolKBnEh+46dzzUHp7ubaqoD1OH5cHcYMPoZOTpcUADLR2giO+EtASSS+rJTUnfRkKK08WJABwT8LiN/GqNMpPUPDINgnLcqenQWVfMGDdoL2+I1X8i9pioqWnspgYydVFw/8IO2e5no4JRXU+RPuEwySoxeAPNkqOXLOr93ollYaUWLE8IC+P+kOZqwuUjzyEYBIs40QqABVqasIW+VKOVSXg5QLcAxp+JOlrwY/r/mWC/7stqvH6GktmHVwpVQN45EnsWTYOrRKZFDYWAhS2w0yDVR77gud2fb5RnEeLMwdiN7OKr4OpQOb+8adc4l0LXTw6TOm5F4tMAaQou4bpNc3CdaJa4OYJIgvWutSORyF+kgQmQM3Zq31y+AElt+luQVBIaNfD8ZZKejGiQ97qIJOT7+fam9qr5YPnn5jzP0KaouUYVktyz4CDsBn+84TFT3HQ1ggXK+jwyJUpFtKBKoCDz8PbezJyPCnGkBAZemcOUFHglO1ovq6ZJ7+BC/ZxuMwgekxdfd4aKbngtWn1Y';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/sr/sr.nocache.js?t=1669637194"></script>
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
