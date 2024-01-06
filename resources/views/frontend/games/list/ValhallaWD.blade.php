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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/val_2/style.css">
    
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
			
			
		var SID = '+UliutiZj/4WUVZYMuuizbL60qqwNf9lYkm0tLQ6bXnXIR52BAy1j17A0ijsCtYW+sWhxyVSKQK22zwAnnDZkM2VJ83bGS2RjNjk37Yvg+DAuSaGhh8LKmOZWi6Z8NlL/9OEwoLLS51gefvYcJgHxBGhrvZlOD3k8m09p341c29ECU1JlRsHP7AUwsVsZQJ7TeBYcgYS9KK7erLkszX3hT6X5JcP/dmt4feTSz7tI6jamCKERH5/B6wCcy9mUAoovBYrDHRkBPo4QL6TXppuJkbB/L+v2bWZoUQmY1wb4Bs3UGVL7dqoZ0oarV1F/OQwnFZA9y//xzs+UH94u1yX4vgAGq8xIebzZlTgA0FGEiWCVvhbenneiJPHWuFQnM82GwojqX4K1LZ4MHeIoy2HYd3k6PxZCAQEgdpV7xypCBaxvq5YGEbqH8TWq9hJnMzUhoXBQ7FqHOqpsIvZ6DMu4P5KIfyduce0Omly9dF8+EA3jkA/rl8p+HaNIG3VmjrjWSUjoXIs86F6D2upfPd2dRzI/d3JxGQajZtIYdZjK6ph0f+Lby6Uzf8oaZcpVfxyZ1uCnzjCqF+ErC4mIw7FC3diZBVww3g1tezvqmziVTI/CSdUHDM6f7rffNXIVeWcA9eaxlKr9kPokUQdfxWr7SQytC5j9frhYMwPtH9l1uQ6SEx5rijcPedt1+AJs82K4roQ9Vgb3LY9D/NN9eaSxkaKZJAIDHBb2ulGKoXLtaWVj2wXaH0/R59Dy9VDejAYrqZVbhBOXPVssUAaDNOfDNqRyilwjvevanUvA7RT5w5kr05KpEeByfPuioyYknCTigJ+b2L3O13mMZqumEnaLgFncZT/5D+nBd1DcL5puFTjKGV1R+VenvqNsaaAp1tbmXxdbTzZeuGUyGvYG+or2KmO5bP94XQIV6EbskWteK/ncuI6nmrfnhpWsmzQShaKC7nF7wNj1xqVbpBotb4ObIAQrbN0yO5SvR/usME9ulZ9NTKXYn2lw2uO08SAtUUsXuI0aX2ldoxa39Y09/ISMVdNp9hrDPUibVElYUtIdTt33vM9WeSIK0vkFCKSmEKj/VkN9EzI0GgPPQsheYR58c+VfhhFt+oUXPtXkPaRvl4Au7EzpDjMJPiK86wWrxjsnQSXLib01IX3ZAk8Mqo1QjcksW57gnkY6b82q/Yyf+B02+LQkfbWpkD6LogqO+akdz9VKFgjZ2AmHnFdshpb2w0FWvV36ONWUr095x5NxuqP7E+1qayO2qcwY0nq2SptNFS5EF0WdYJxLTOL4YEo49FEk06U+4spNjMTCaDSKdx3cpD8NDrrkLkDkEoTqXPB8PJvQmNLUnN72EuUigN0MZew7h1nmWBb/vAyDfKHt+w2b7Inwg9AGT19A0bqNLGp';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/val_2/val_2.nocache.js?t=1669637194"></script>
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
