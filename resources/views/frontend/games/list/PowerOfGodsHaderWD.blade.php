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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/pogh/style.css">
    
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
			
			
		var SID = '/OiGbiUoS5kvCqm1RzyLl+4r3VBykeKO7bMfD4UAuioJ7LXFvGNiSNbZTyJa+tv/EsNr4z8zdCsXHDPEbg0MSyMmWhHWp4kYpM1FtHfTJpUVviARYwH0pzOLkYwfApFm2BYtOvfzE6l6priHZAUoRf8nXSi2W9ym1bH1KLvutfsdIeUQxCmwew/UFLzbm2j0HJ+b61gQP4/zTqdwCkZxts2VgKT0ED/hDwjX8RWCBc3KH6Sv9D2AppHFDnCjdSQBqWHmTaOT2VYBR1lCDgOy4iQ6qE9HJWL9D+YUFH3fb0MDUudFihRYYmeazh7EQhMbD7YcGN0gcEPE47fbcRB9i6RoVDjH730bvFiaWs/xfkTylG8nBKVtnw3+JryBmf2qFIZ2NjTjl4kJb7Cs82JtYDCSQHhCnd1Y0qJX2G6G6XKcixeDm7WEk7fc9h6aUYfPpx8vS0dvP9KuX8kpYKoVu5eD0YY0mqOffTy/jJUWRstM1rNo/ZlYtrQnNRmqUmDtvOnMgX6fad21nDUZdH0X9QRs9gScNxEVi6eql5f/qh/isTRXW2/mrhCT4R+UI6IOb604RlBxBn1x4216SIARpVUoQzxrbdsXATBdfA0gW7cOmwdczSMi4D89zx0iuaBneBTakBTynFaXK90xn3OmkZlnfdcGFnDd97A64y3G7c8eruSDNCBptQe3OV+cYqDMGdbdXemD5joIqEKH5XF3eU0L+OBQnjkVL3IsRv82cdEbTsu1KFz0tDfE5OQr0uDPm0YochZXC6qRrU3dV9/mUZaZ+dHAIHzDp8RyVpbbVnKe4/uk6vq7Sh9A5zTCyf6axOrm8aLu83VLoiYBZFb7JX5DuJO21Teup8EXF2q8hJ33h6iWL2pnR/q0fuUhc0VI9rWPC3LYVMBOCM5KEBLS/JJexO7mQYvYzMaFg20AWr2Xc8oicFMN0itBPDsgnbor9p1bQ8S976lXMRTMo+ExWR/ANEY3grFX7ScX0ai29IPvs85w5dVh4wWQHlJaNuJL+bqoJy74z4PNtPNsVU68AY2X5VhUHMQd9c/vQn+A6cM1AHsDEc17kopuriKzf1aKMLF4jwRwW8/vLFBnerGMEQkZYUnZSNZwT6mkO0GJs1fS0zq8rO42UkrPem1AhIr6SewyCN4xa/q3qA61twxI3yhD2Hj84DGfY95nBVrOavO4EHsqcy++mtrEEE2lOjt/kBag1tQmZOXW3rVGFLfnbr2mmfTWIRABd+2D+U50Oy5yJQopNCr7VgCWE8yq7/3iS+1wxCefBzcFxijLNdstxYGPtGCPqCeMFRfsMoi6tJRAOAL0yl0DTasavXh/5KmdIO7Nv5Fp/xadchlY7+t7IXq8hPlpGmHYt3RpSTcrHsizPH078WPxRfdP1yNONZJS';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/pogh/pogh.nocache.js?t=1669637194"></script>
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
