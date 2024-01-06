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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/jb_2/style.css">
    
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
			
			
		var SID =  'R0dSCyKrizSB1hcyvBi2pOq9y/ZnLui/rPGpU6uKdGdd/HVYWdvgt6RZrYCAH5vG8geTe/V+3Zzb4aCKv1NvgOUhGoFbQmkS15CdMbjedGiRxJpbjBdd+veLKZnDlsvfWfkICKKeuwur7MfxGk8gsjiKcAav21c4jZWrxyp39SjDVV7GdYnb+yGzF0jEtEI7bXKvBBVXAZb4vuF26ZbCHz0hupGCv+zlCYo2r/KVQ888X9xRpy22xeJLoMuX8h9KRy25J2y3DZvtDJhBGScDM36/ZsOWVYqCeKpVlbF0/+5QdsnXs/mAehf3gSJXQLvOSb5W+YsDDQ1PEcdWQm/UCr4yFfpnero5khzfTNQ63CSEeAeqqc6KVRa/3LVCUQSRZv2tMnk7fLcBOsq+GKrfvKOTwBrtgpxiH+ewPfotyAtFcGUlLpWM8spgDXSMx++D8OtLJpFsojqpxesaYHRjdD8Qu+eikL34MqzT9NgQPhemygLzWyJWCGkFTk3WUKT9bsy8oav86pwytH0xA+DJ9LfolpwQWNz3NfEr55nR4UhdtA9wgfGnmn3NFYkJijGYTBlVKInDhsXVB6qOHYMj4y/EeTIZNovMjuYy23sfsFWCsbopnEM6SUAw5OhiWf+TZDPBAxzCk95eIf9CMT4ms0ZRkOsREwZCksinXZ+G85u2IvhZqUTp9vz9FBQblUD1VLYZeB4hHMzq5WNA8xHi4lkL1OYZX5Wg65hDSmuObm2OXxoAB5TwRByFJ3eKa0Skpo5JM3YmkNX+oQRj9p8qO8YB2P20lulGJNzun9wSZJj65YHGf0MV5ys+RAgSlsbZezq5t1/vj/OcxQA41SDhghO/j/9huM2reDrhYT2P9zvGLMmhNLn0yJdMDZvDbKIQioWs7rmfwSqKRkYSi3cgXuU2ZZvEX4zRebGA1GmVxJAlMuglmLfxJw2xtP723Spg2yH5uEpHz4R4P/pWBDlDucA9N35Movl5fa9LrABCckDN6MJLXiqffGq9Rjm0cJ4yqu6PpZsKgkkgpYHKunmJCLgT2ExD+b7lVoD5iRBwqD1a1Z8KGM9J9P+RZCdwx6j4Filt5LZCusUTVy7LvjP30iQmhQaEqmXXGHFnw6DHUCKKOI7jxx2k/3omoEcoeMSE82q2ndLOabRGsljGDtNqzZsAvcXHHaMw17uWhgLZICqV1dbcK5cpR6w1r3SGmHCj9PkagdWvrRLodgIoCV64JAmnY0Y1sJBH6P8703kSW1JJ2I9W1vhY/u7dG9EM5OsufO/vu9PnIwqPD0PToQzDTKCQcruoWxHOMHYrS8MwHdgIUgpK1QCwTSTsKgDf3GDaWSMqKfKDhi21MwMGVgKM0cjbnboGckrrG7yn0xSTJUeclzSMukdDpbaAGcRHBtzj';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/jb_2/jb_2.nocache.js?t=1669637194"></script>
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
