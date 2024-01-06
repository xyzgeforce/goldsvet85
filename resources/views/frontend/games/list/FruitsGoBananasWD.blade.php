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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fgb/style.css">
    
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
			
			
		var SID = 'SGrd8N2n7Z05vG64lb4JMLuNeDuFSlf7NjrzUyffCQwzHwOS2jihy53y4228Dp7FJvslYIKoQG+DSTxYcTbNqb9W+fSxigbIw8ESkyGp7N+qMgqeQ17GXGrobl1JDA218o8DXNoh63lfQCpQN6SL3aEICh5PSHnZh1HP6PUIXTp+tDdAJ0TM4FZCvITU86QuIypD9mz4uuqf4dwJps2iYsRSyp+Zlv1IgPW5hH0b965OuTcLdB0cQQmkXibfOju/a0M62tyq5grGiu9GlyNyOEf0BPwRW83TZM/05N2CmEqYykd6G2zHvyx0QFeNqujaHhHIGzATkNI3UEgRfcZqCUanyRcv5PgZapllXBWx4eVvbnqks267OK2cpL5Ko/A3bMnP8QcbUIUb608GDaHd4YmHzggmolZaIYUMX0o83TLSxIhL2yEPMTdMug8nl8RiduriXg1JP11ieW6jvT0B1Kvv0VcuDNolFcVHbtDrz9C+OALjjkE7GFiqZlOpfwU4IbAKl6mS43C5FO/2d/y1AorZPm5qxgiBXMqbQN1Rwlui3dbcemj72R71FYde+VQ4XPxEtAmAm22LMUG/RhV6dNeyB2KR/uVHMIbds7HZnoZMNJzgennx2RNSHkM4KBgMBSWpTlc0+ln5fhIfwQCpB/xFPEZguVMrSl6lk0az9ZolfU2wnGysDerWFdrDng6BlwNSjxTlp+wtOv041oYHoATvNBJxXWkJnHpnmyQFX3nAdXn5NUxtznmmceTAZlCx8uDz63MICS3zYOWOsND/y4cFChm1j2iSShmoFf197S9vUTbKiqB4aQEGlGrejXWBCGNISi0VNjX4Vju9qO2O99nDw+q9f4eoSO2zlllVZVy5eBvo9Sm3wfCwopkg67Ha+nfui9BwYJ46L24mTSeqrtwcQNqoDhjOxeWlc92fiwEfBWEI16CsIEFK5HnxgdKMN42LFptUX0Oc1TEmEpVJEHD+Iddyq6rECx1kylkmYFp/XPNG7dk2R+w2BmGeHec+qrWE8hXMF5JcUYmYShkKztUuLJW5Df/4Zfc/NaeppDfBXuiYNkFJLyFXBghV5uQW7c0UX238k6MRxF0kTqPi78sBxm8lOj4ehHXp1hhicOkdjynJsao75UMN5t5DbjmLBpTJR25LAem0ODn0BCTsd5aoqrJD0qgPTzkRyDrHl/OB4g2yXTyrRYZZWfc92rXg23cv631bUjCsdxBxnaZbPeHiGoNtg63Ne72dBD8iOZsXjvLk/GobHaYR7DaXwAGz0S3h+XGEu6V8Eu6ad4pitAwA1sJqEA9wXng2MWqFMBvtr8QYZ5M3eKgmGrQ8pAK889Xrp4J4yKJgVQUdQO61gSHne4gEEq6BqLxoWtAsJ/aw8jx+gtza0hr9WLtX22wO';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fgb/fgb.nocache.js?t=1669637194"></script>
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
