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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/df/style.css">
    
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
			
			
		var SID = 'KKyAr9UXKmUSEnAKh66PxfbSDtXyTOVfXTm8XUMAdIyEnK+R5i528dE8xKkbO3STONfs6QDaKuT6QemEzmycR9K3Mljt5TzJXsiOZqWph5E0/PTRUFtxor//sJ7FNQXIly8808j7aiN+NfNyDA+5Gc80Zq98jwWLanuTO+KEuH2q7w1WQc0cBnl8RcNZ6hxSt6wZ06VucCYELcNPkBnhfyVpIzyLlBrkMlJORl3xVvgABMwHzwwZlY0B4Zg7/wuNwF365e/u8pWCGlMQEu6siPiJlISmXn5NznWGnlOrZsqSXW/3j24gEBm0+fCMJlqS9f62rUH6QsIbP+yYzX3imm/+Fi3D003ls2kvHfcoN9xjNThSAEN4caNJvxuMPsA2aZ8PbN+pWajZ3p0AJE1LXWymwUNAlA29ugiBfUw/V01Dy9hNLrUGFlzjMB8riuFbNXLIFBytAwmYIpsB3ADZ//CMT4OGWZasYod7pEHT4pgnctX5H32ZmovpRnJWLn2iGqGX7wAvVmbmjZ/Edoi5jMxphIWYzOfIHB2hyqxr7WeYvSyAKi6R1jDXfW0QyaIdxmyJASfiAqP6m95wPxw6TLL9SaA7O05wzihyeUdQQ4E87Be7aOPQUo6IfZjcNkx707ROZY0X+U/K8fgqdGWtfO57yFThtTLdi4MgZtLeZdFAtONlBcMyXQI+rukNqOet7gR/Jp7s5oKl2XvZK4Mv5jgJxjPqi6ADg1bu9QnwYVqZmQDg2iygk11NnTShi4hRoHts8+urYzeWBI0W2OhZGtQg5N0XcRJILo5l/U0dOqXelNZAlFGcno3F2Q6MmPKaiCKFJkW7RSpiJ1n6U5bI0SUxUX9bl3JhAWp8J8CRS8sje5GJKVXouADFlhGjT9lYsw/K1OvPHXd0qkL6XAdKkCATH+Xp5WxagsfLOg7mzP/yoYL050KNECXw6sXV1xkSiX2/mdSalDjY46rSZ4xi9zmWpraVjqJLlZVt60n/Lm7MaQqQtwAZAvC4AAA0pZQ3Hgol3j0f+nAnMsmzXpBjNxOYpmWAm6tXIRMN0X1f7/x9ok9ahEoMdi0o9T1mlN5w1eTR8a495dh/8A8KXtHNobbo73TuJ6mayxQQkrtUOZQNvy+B9+STJg2ygdV9PfU2tGSkGGr6xI73YNM9W9dVT58eq3jXia+XrJLJDUP3vRH2pNKSl/lCV8xgzy2d/LOVLWBwSVTLPjgqNHrd4pzP5xbIPFYbBrYWALiT8tgF7DCJy5ohK3feX8cZqOwBZDtEOmmtf675MhjqqFf52lyqQcd5ELT+Ssu88XxmrmVKBvjrePZZNTvLU7SvG9jINPnBy+WA5S31WHagXj+a1kaON1LW7GCEY4O4DMdzfH/rbWbwxmAngo4yJVZwpotu+q+z';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/df/df.nocache.js?t=1669637194"></script>
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
