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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ap5/style.css">
    
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
			
			
		var SID = '0iAm3fGhjw5TiXSSR6rX/mJTLXPAiOdwuFlHTPGHrWFDTlTDzWrOW3wNl9F2peGO+awS8/SBFkKHdfCr3OCuhaouUy544fyqltTxCx2kEGrYqW4i9rLstt5djB6GfsblSB17aYDgDkUBjJSdEsWMZ1hzNopgnAl5R58j1usbdwPLsNKYyrt8Gsa7WHJpTTdyhM0epVJA7kGgDxfaDtFW2q0LhoPMIC3sWiOxJhcya5TWHozPW0HbCJuwgvXjGJSmscZMK7LEuXdG5OSul6m9rzlVwCxGJm72nKceoUO9uXdKOxZz4NsEdY3HnrTP3fOXiev+ue1Qo/IQFWtZWs8NT5bdojpFmohGgGR4BK+8yTC6cf67gn0kjzFG68hBDqWJS5+wpOhrRyqqafmIZ/xyStu3clTZP23XK7hrbyJcrAQCows5hCA7Oqj/VfE3qoioDsmicVNREqPkL1lErMpaqWOXrFjHXBPN1WCsK3SGpTDIm0cd2V8LYBD6fLPtGNsHPF98Ba6Qb2xqiSpDatsQCcU75IWS/VzUd2FCOBJcD7XCazjDJ2sbudbHb/Uw9nW6sPUuq0C2RhYYVDZpnF+sHqsqNrT2R6Zv/m0ulzv1qg3932Ymh+Ld/iS4uEKx8w2Wy/YpPNxKm7/QMPpMNcs2wPSzHQ67YUPEmgmq6I7mRccJYzvMNqCbH6lL9lPPXEagzpKi6iYGg5eYcUFW/Ms/djRiXlb7TzKQIej7XTEQPLFVDdXwMvmZUDrXwi0V2Z4xXjiIYMeZtkv3/oeG75gsB4aQo/gKQNoYo6Kf0yg+aHpbvq9rYs8BbSIJQh1j7hWl3yI1y1HgOI0pX5YwKH0XtB8MmmB9dPhMlv0mRHrwBGLRYWLJU9Ww7GryzLlpxmMmZxkWGmnGyHcLSAmQhebtgQCQCXzC4qhEhtZPuKuwPv7TnzfDcfKfLEDoyp6YVgh6ilZtlDH5N33e6Tjd0uTt3uwOzIFGpLVoMBQ+sCGCLoMesceNjhHQyvqDJrEmU2AyFcD5eQ1Cb8iDKnQagKSDyXH0OYAOILF87zyqE/MsWtM5wdeysHnNMEARd7FqNCetnOBsroahjv3qELFsNuZt12PpTo4LIvUB/rHkEo/0gWcctoVy+Blkq9Lu3qgB8KJ6eAewC+prAUK+/w2Hy46bOurGP/H11s4yx91fRjpNyCpbUTgmn94YEWC+siXyevzo1+c9aNJLv4WIv4K1EV7pyKg6mAGLitqQRUZ6o7rK7jhE0mZAyfdQuPF5qqmikHwti+GyTxxgV1L5TZ7f487m0+4q//bUpzqaG2odTpKagekMRM0YIBK8DsqzkuL7BkGNxUNh6lPmqU/svyteYNtXHyKEc/5BGCDjByY7XN386FGc6ZlR+1s4uwQX98a4Troc';
	
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ap5/ap5.nocache.js?t=1669637194"></script>
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
