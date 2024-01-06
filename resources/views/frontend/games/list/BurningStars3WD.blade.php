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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/bs3/style.css">
    
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
			
			
		var SID = '4EMDbaBD1Sk0en62anE1uXDKX+qy6gDus0nTv8Pgrz/5hm627DOTY2WnPMiqdL88MAzhXNHNg7GzZXDePlBeMC8qPLRwPRR7wodQR/VGd6gzGoEzVi+Fc6IIw21ebftXwPlOGenrv0TxivcRvlvl+yIePjBIaqxjAR9v73cqSS7kUmEFXh/xKN43FvcAAaIrAS7NRIagsxEBVsavKCCELwlj9auPD9OcYRtCFdtys1u/W1baf3FghtNL8nkC+1/iOHIDcrUQwUV1/3su/ApCbabj4pSOuzFzFw5/B+6jiNaQP0zGKXkHrVK1mW9OH/pK5guvNksn3cc+cqE6ljMuVCLCZPyHeWREm+4camAZGtgBoEzwPgffoN1m+VQry9JgXcGAb4YyRYb54whCIEuJB/nDZleV0wSUqlbkwgZfyyx1JpckZjA1GcX1/VwVllUl6o+/7l5DVE6JYVwDVtUUxfcTXydgAzIDFHI+R6mMBeoaWFRAf1WmaiUI+lkQ81DCnAYWxWMHMvxgZfYIXPANcHgrUs93h+ioZBnqpO3cT3ylgtJdP+NUP8HkhWpqLgWjMLcvr5HoGYB2dPVCmFElXwOnfe0Oy7B1Hpmpr+LjfOi80NwLti07jllTwRZ5A47def2osRsu2Tck2hL7e9iOkujNbQ36xdcZiSFUQeJ0bWkJOcO/BULo4GSG2ip8Cd8VJqf50vumywWuY6vXwjGVDAStt7/4TFiO0WeXnR42s88bju+bG/AYQOP//s03f6ov2HKU2dyT2rSiYNcBlmXrEN1c5Eb28uRRF9QcvdbPqKbTJ7Cn8lPGe9S1djMhn+GB3KFRr0VB5UzQTiAZ1ijGL9jvINLg8bk9y0k8C+TQ9+84VCmrQiH2oZ3I4Xr9clQWvLlC2C57Kvg8TiB3JBzXaHOLuWmmokDwOGGVfeynZswPgUGDp+w1Ez6LmvTgMehY9Xf4Py+mwh1y8yQcRliVDKRZ/ua4Hte/a44LnmHq53o77ChU2TWplPLxEX7KgLpoLVgfDzIpCjWzTGdtm6zCczs/VtaUwAVdzfbtFbDKdZTDKM+WKLI10nZPP5Xq0I3wJZIMZ6wI+Htnkph4gnM6PMTOsqAzayzRpObaFjW/6OVWeQrYJY3DKS4KktDUoww/54yDY5lXI3sgHA1Jvxn5YCL0m79VVAd5VXrmNLOeAZ7qkVDIChyf8k9HIDAa6eXh+6gR2ghNd7yHGbYL+kh6l2TUnoqs6m6XHF7Ce7in0xUEQ/1uGQIKss073jLfAVc4HgnDudhnu0AXiN2nC0F6sHYbqjbWSt2knRvZUjgzoEYXIO5yT1rFcR31K2Ky/MqA/PBYv/HsGeOFFA3cQ6TnrgUqq8fuZS8O+YCpBnVOK2rdgnay2f2PS0q2MWSbdWf4VvTpuW9C1cfgiCk2lHaH4gX25gROIXekngrxr1aJQ2I=';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/bs3/bs3.nocache.js?t=1669637194"></script>
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
