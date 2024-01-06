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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/dl8/style.css">
    
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
			
			
		var SID = '83EIyNNt1rvdlpIbJyRhhjqCr22EWJC4rghXsTCAT4w8wwo+uuX+v080XzZUENBk5VCnuzeS1ULZOTOLM9thkO4HhZUKbajm4A5A0AWGTqBdaIGHmf1IYXwsgQnZJoszOFEgx1seP3JV+wInjgK/RlfLzo/0ZkUY4WVy8VzSgL9oaBpcgQu9al0cgmngw8GnLHfYfly4esqg9APnSfgsw1b5sBGOqPIFqTSHlcP9IhZNW7pKSBF5lMSfDslhICjQfR63K4AizgntPSru2JmnERFRF8ZvJqwT3zRiYjbIrWYqHs5slv7oTfg+11GXgzf7BAiAYINJmmBNpLu5fXnFKpuiLgnfrTWMtWd/VK367XQPcZjjwASzuowNbzE4Brc8HXa1eR2sB9Tu4buz0v911AyZk75jilIOvK3K/vrMjg7X9541I3cdRpCJ5O2VwUpo4ynwtTnmHdanQh2mLoQuTJGPrbFDNTxe3XSbIGyt/vVLxkD5EK0LEus4twC3Um1ei03M88k/uAs16PhtiZ/jFu7ZHECNCTrqNbmfJLDdRl+oElQfUA/24CMt99fr6vYa6ePaDl6thTVwUx0WuoXJ5/Tmnd/9w2a16g1sofqtvPuQY6LyvmW+jfRRA5DIjNC+tNDRWmNeYfPW32K0wjfsK87EZJq3XE5bHM5o29Ha4xliSEXTx3J5ZPkmCUG0DvjEc9/0yA+7k7eelEmYhVZFofN78GkHWvj09yGzFPXzcxamDdteQ1o3A5y65O2MZAXNW2t9eP63egLRfPX1K1UOAW6YNi30Ejg7A+zjBwCpbZzHiU6YrI+rY7xYmmV7omuZU+oaouIB376dzpF9ompmPw6gJcyypV1nCt5W1wVf0NnA/Op9E8o9ITK1ttw0ZUgr7+S4ijYcfp46G48jCMD5cqG6glr7H+Q14+uVyxBBAGss/W3h5kqMukq6eq48/NCu7HVMbTpc9YgnXmEiC70/MIgS6XRNtuXQhNB4dG9lRopeDUosYRGe/sXD4gnhAEHjB50OWMh9+bYXM1NnG02G1nnlYniOFwvZoviZNmlV7IK+AH+JCc6S+bGVbCIvdboYPR+eBM9/hWzL5pJQau99IqyERXJr8Gk1+P7pCplywDbVVW7eMxXNwxYqXYycphHXvi5OSiyCpdT5KDyVm7W4M3urAUN/j5VFGN+TewRZkd9BAvRMPdjMkr/IH6+MT+bxOMYzFSW+UT4TU0UcwcRK1GpzYogqkpXk9rDYKumA78dklaC12Z0nINjeMbLFOsHZ+d5ti/A+PQShWZIbSsz3Dtz4dE+mErwiIFvBME0Et7pcAVmqX7e8Hs0Ottg7zLPQ2ig1eIgl0Qx+FiSYHd89hjaA3xrZxTXRZMDvR9jEVkTjh+mks2fSA2a/W1QHDb/S';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/dl8/dl8.nocache.js?t=1669637194"></script>
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
