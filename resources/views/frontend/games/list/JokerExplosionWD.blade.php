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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/je/style.css">
    
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
			
			
		var SID = 'ntwwBsFBmEhCOj/zkh3mgZo52p/xhP3R5l4RexOriXKlS35eID0pnTSlbnBzWQx6ticGIAm5VxtQcx5pAbC6wk0Lh7wvRu7ka61lsl6Hzgy4UG3OwQp7vnI9HLi0xUgcn5Q4EeWhrAt757p6m/tpWNJiF3sSv0zUlHHqJihoiyy/UF680tjyS1cPcR/MdM2OfEdhdkLObLScD4ynt7EZQY3GaK2F0MBMGDssBx9xZmm8zOpy9u57hlpMjroBZr+mZXJYYl4sRwwvYoGmDRZRjkSYJygfl1b20czlRkwO3MH4S/rh1B3pu3tfIGxEeCBGdKr+p9EBJjT3mXDa47VU5BfV0z1t1yRESu6hfwO0tgiIy8goNOjRC3xwXUD57HAFIqwxV0lgZGLH6RAOTiSnJXm3GobDLBCCb6GCb/GgiwKqhxVvCdvudf7YbRv4QPdM+GL6KraFarwQ+brgb4xVVWrJBPKLHkR8k3M+oPEEROxHsVRBePQ57/K8vV/b0KUxCQTcMcghgVfMri7w46Lms6IVy2RXMaMTWBAugYNkznNn+k2f3swVbqGA3xj6bAdTdT9HSi0QOEvcWBwmx3+Iy/t6aKmjeHndsodiaDSkE/fQcG7Qj7P8PXFVN44ibgTgAkLPtMaLJi+r1IHg8xvEuCzv+6RnOB8WV1g8Xj76VG/ymWS+uQrMu6M0rcoCp3zwfJEOFMRfW1A86qfSkUr8UPf4+Rh707jMwOZvBndTwLsM3681vQ0Y9gEX00HyU50W5r9aGVIzADY+tAhRAqBpRV3jx39jXb/HvRyZ24hZTb17g2ztJi7Fnig/O4LtUSuJqEJKFS9zBmMPg39eOuZz03+RdCMoLZIzfuPJBwwjiMBV+OcMkKi0nTZ1QAdBsskFFZrK7Wim4S+Vt5P6iBxxUeLF2MbypP/GzwqPeTqWgRBeM6y2NPu+mPn/v5XoCpEeD2tZpFjPBvN35BCSvkll+g9mWhrhio+2621q06uWl/g6/oXppYo3s86dUvuZX58StlyhatJ2bJM27Yq6ZQRn2Hun4uZM6oddBjxCC7ZC3PYE3Y6VuykrNDNiFpvqs4ISaKHBvq8cJOCkZTjocVJ15hCVTpQdk4rPLg3/y4ZjD4kHJaBfobNFvQktcffv3gLpSxTJozjVmmX9rtcR8PMEC8wY+9+gzBRXvX2g72UsZGjWTefgEdSBXk54mz+n2AIaN24xEyiZB/7ZPyroPoqgl8FGQfk/lJ+Hd4pa3haC+4BzPEvDpMEcB6Qdva/BTtJYJToQS15AUvMfCCuLCNQ9hRtdMz21v1nUnQnO6rNJDhQOBImj1mPXqCwPE47euG2RD2ZBORSyiYLn8tBdG1X1MAMPr9nHhp4xFiDePfd+8RgXQ/3TvPu9kIFplIDVEtfk';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/je/je.nocache.js?t=1669637194"></script>
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
