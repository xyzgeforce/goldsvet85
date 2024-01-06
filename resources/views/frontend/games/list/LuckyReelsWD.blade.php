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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/lr/style.css">
    
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
			
			
		var SID = 'eBy8ooi3KtV61BsXI1x/5KJkuJAnsMOnaie/pGyCkiQyIHrNLdN8LCK+EEZoCfVonhM23X9BO+hgSuXvEl4RNCuq5bVwS/n0DpOeqXyQ1s8ZsPxpXS2BHIn5wtC0pOkkN1bvAMcaop4Abu5F1oV3eG+2y08rJ7UmIBy1miB7xmUnux0JuyhcijS66TmaZeZj5jIaN3vSu2PSKJ77iT/bOCHiAH4UpX8sFszgn/Dt+JCZ6Ax7ImKHoCjiHjwTNfSZ4Ec2N2OwIq2HppVHa2WnmU24bz74dwA2F1/ncqmcC7P0pNBf1mcHKhHQZ3ojvXZpEcBzTdfKecNnn7+WND4dwiSDzVeT6tSntZjGlmpWPtw3ujYq7JGkaYtgAlbIqvTkAJc2/Cu+2Q3X9KfNtynlZIetP9SHS9ZDN1L5DKn3iM2T8fkiuerEhMBif/8k0qdZUa/uvZ7lsrZy/rVeBTJozNvLafElVfV0AGMRsQ3J14hxbBN5wkiWo92gJHeX3UMEoa2dZtyexuO9iz8/07jOcXX0vocEmtzo/fEZ/+feiq51urVQd08cZVh4/akb10QUF57xZvfwc+2SJzS2qO0B0BDmEur8/Jy0kDGeSYmst4FsL/2fhJadSaBzGzM9czrsp34NOUGgyBx1dLlcP+C97qN+VzIQ8dK7XiTwl95e88+e+3PsjTD9pZNfNpdh/1LG19dvAGrTJiRRbEnqw80ee5hZvjgK4AB4z2UOlNuEpZCBH0/yT/wElLambiwvVjSTqkcUy0IGy91lsQEazjxbJWH7TZbK9gjtvfe1E+yahLjSwYutbdVQCIL0mvEsODmDZY3a/IYXMADiYYc3FkYx9Ovdy3fWjpjdAU+HzMRh77meXFiH3zCo3bZ/+tzavh9nwC1KrKZEBTxO1YUWT4zzsAcw51hfM8VRDacBmAAql2/jB4C8k8y6EM4D5KVox6EjyNPJNTH7VYaQDK6S5EZV2q03nTQfobqzeDMG4x/6K9uWkqVBIrk+tg8Qaso/jvkyd1b+/BpmfVUPaNqZRipAxE//bMIehIUk06BXHMd8zhLSTMza7vnaMP/GT1I5ngM+OoKLng4hslubgUR9Y7ybeUvqYxn+00sY8FPb4fEY+5n9+KTUlwpdqVd7aHH4LqRkwTwxGO8k6co3CR6ThUaZlq8lsQ37STZOF0V9ZR4WudI1CP7abIkg2lzr99w73H1Ca2jAVTr/TTCs3jvrP0iRrtd0mw5yq/87AtL/P0G/88EZzQfhCUCmqsv5rSN4dh5Qt7XI4vf9JJqtSMxNKCBFVzZ2XsBrpAbvXi8gTmdUbgNpANXsntGAE0rq9LDIfsCIq6AUQgmuEe3sOTcwrRA5Jd7vA/qtlktYkKisBiafqoKZHuRr/0lJiRf7RPBU7Qt1';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/lr/lr.nocache.js?t=1669637194"></script>
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
