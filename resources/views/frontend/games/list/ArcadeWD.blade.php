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

    <title>Arcade</title>

    <link rel="icon" type="image/png" href="/favicon.png" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/apple-touch-icon.png"
    />

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221331-204/ar/style.css">
    
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
			
			
		var SID = 'kkcaHdMBceMraSniqtxGlsAoHwkV2SUI7ICwYknPsRumt03dxtO8PCI/0rDZeg/MP2SxBCPbZn7TvvAqaQFq/6x/jPKpWWFDF8QXYMYhDbf7sE1xDV2eInMcBa5Z37lVqOPdLKMZ3tbDnOKEqyh6aRsC2b9FfPhZgbA/teCArqXyAFy4hh0CIQc7dX3GBO9BxiJZncr7GoL3JVQDMCcd3ULgkG49J3WZfrOtR4d3LO6JPFHgaM5CMXzYPa+0u08WKjv93VJq07VshN6ILGQZFGir7lWCxioLe3S29/9sei1hT1ET/EQokNy4ts5jz6XSPxO6TZqJ27FkZBiFZJcgxaT8TmukhXPJ8higr0isegIGLVS7wWKu5QYicnFZSpjD4txBptN5XZ6AtfI2hVMH2fVfoBG7A6Ljn9dS7Dt5MsF5Rx54fXUGDqTegJ7xhEwVd7N4rnWmdjlzTfBKAteVnkEm7UXOGy/Ij4NOvhMNDIf+XLuLsMDO6Zwk2CLnoP/JgoSI5HUSqGQBWVxmKEXSQUJP0Mm0GzTnwbcQwujpuEkT1J9p5XzNwnu6ZzmE6xRoI290WEzjRulqPXeDzJe9mG8n2JzENiB4z9HZI0wqMpmM5rq/WnK80//xbCYbrbT8W5QDC14wVuYmCs+2wdtjLYexvr3hqznIHJ7aR7PslusD+N5IWMOFDO7j7wzDtrS3nEg1qrcA/70W8Gu+xk8rSo2g3NebJ3Cb+2exRdU67Vj7DkGA+Xe7KuuZCgs4Bv0c9ivNy9oXNeGM3legxVjFUHMEG6iH75w1tsCHV97Kqu/WKOgCw7UiRWZW5pwF+enm6T+8zFA7pWHTMCSB+FYikYpDeHJE+r57TGzvlAjGMyf0nKt9ldUZgQ3rRvpnxrMpyDmu1ImciVjvqpueRTWpLX9xUSWT+KrRwxab1BiSdAHBcbHiok8XnBO7QFvc4okC076800cX4pVaDzS5UdAk6XCr7z8Ua8zBkb732obGPxTG1YwKU1pFB+wTi0nYU4jF8hDINiHs4QX9guqxLWf/VSNW0ze/gzY4J9RIY7+TAYhHpIYXtVLxyfCyH8fKNOX0mMOXrdNxLJkWZ/TLPv6NjyFsB0JpQSxiOcti8sKO11VLNfwzaberN8O/zWzozRwrZ/gmpVF/1csJPlWXwhY68+GsICLWbXUxhqh6XZIZHRPSWJuFfFbGFwEhiXneYW37UgCzYxMCsavlefRvnq7isuCSpxibeWk7FYwS52Ig2LT3bL12JYOdMOBgnzIAlr+n+X/BZux4DvAZBuZDOZ82sSGS18EmR4W5s/2ZbUR7yXA=';
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221331-204/ar/ar.nocache.js?t=1669637194"></script>
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
