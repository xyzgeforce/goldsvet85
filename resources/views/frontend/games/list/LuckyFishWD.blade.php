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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/luf/style.css">
    
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
			
			
		var SID = 'mDVo2pCdOYLn/xoqT2sHrUvMAMGYxG+t7B/so3DDK2tnEKn+jUG1MaYpWB3DMLff3C/iLSqE5t9zIheanoHXQmKLWO+8DGfsvGLswqm57mIIJMV6IGb7MjW2a9bHumSYZp/cmCAUhOmMMfx/Zk/pNrL4hIMIAkEr9MZaEcoLOpLf2geTfhULzkN71d75L5+FOElaTy3AZ+jpQiDaYUvGgLUTV93sGmd0BznAuGBobGhIqO5O+K5S/yZk4fHD17EacpOJxbv6HR9hrivmoYJn+9WD3r+8VVKKpUesF9aHRSYvMJPFhknoVDk87laIfl0CzeTFmnwmYeMZvAed+4pw6N3BY4NnTFK+pNBs4KziZBzoxD6RzQOGSXMy21+6XIM4swZKD9eMoMeLRNKEgDj1FMsAMkLdAP1TV36mtW0dQbxhLrh85AiqAZnr7EUknbMb0olUs/Hgyxdygeu6fEKe3ENZL+I43jVa6g6R5AMUXL134fb34Gsd1aG+4Joy2sxQ0ajVkeFigO+myfQIYvpYbN2NTKuC8cfElBeZRN43B7F5DkFlFnyDemdpyvTMvvu+E2JiSnmzsxaBp13k2qFXX4Y3CjrG1eB2jXWa196Fy0pAMlZof6XPap+NZToCQdYjU9f1cfhi8Z2lRgJi2phRQfnVvawI9rLQTt63opDw0f3L01OvQSCe7yVmgtyLeHfkhrMCDExsNyK8ltf5NwSyjnMpALnx9A7XZxYC1Csagd9hs9Brqs73U+Sj2+UfSETNSCL0GpNQsn17FyCJTn/KoKakN7s3ZyNQSJqQh/HRfcZLZFTn+h/rnrnLAK9srq9pQwGWyrx45qIxG5hZXWqs3ksJJQj7l2ze/orexVLTDlzC9YqvoDsTyxYpE0n9Wm23h3XdE+VOuppK3Aqq3mGSIS4uCKntR/SInrLMyszRfE2dGsY7Klo/kEN0QTx7lR0Lj9KCYKqbqpl8d7VhzRu1gprUZcjQn9Fct6OeJk4bFV5OEcSBu7UkrS2IHFY7p1FNeiyARNtP5Rk7W5fEZ8R/2hZXlXAEsy1cZubgr6Pq5H33uiB6L57WXAkk84t4NUQEGPf25Gi9iBFMpWrA3rYtFA4DzqdAUsmThi4m8REcLLUgarGb+gqhEoNcrwUl3tby1SGONaGA+l5Mdcr+qXU12j5iVdZ7T0XbwbG99adHyp/b93NqxCeySIPW319JnYKu7W4gtJ8apUm76jmsk2salpPJmzcOk8izERW4Uzyyct5liiTCcB3ArjA3uJEXK2eDGws26SctqI11JLjZmXs6oETs7j4emDN0Ca72ivhLsXG/gBJfb7L1D+FBqEjkSq4koZE0nhpWvOXdGNsKJLFgzzezQaE2lIVaNJAwWPrRg8Z/ZW9RupdbzfNMPcsA/QwD';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/luf/luf.nocache.js?t=1669637194"></script>
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
