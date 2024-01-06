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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fb/style.css">
    
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
			
			
		var SID = 'eSH0IicRxYgfyJPyDaY2YfCnhX/oOVb0uod+uKI+BVfCUsNWI/GdAh3yveyEOTo2pxopPjR8NbVIddykKLfzwkC8OyrhI0Zu6T/nRBEg/5Ieb9Rz5jLOVx4Q973Zl6gM25K5BD5M2NKNL/fCwOmIQFs2IUDyDYfi2+5T/EKlf50eCis/+1x1/2z5ATzYyHTd4RCdNsi2bf2zHX2G3MA7Gj/BHpH9T8G9Q2OnKmuYwytcuhKIHuI2UWTYWLlaKdj5PEV4+kYvV1LFX5kjuOHWM3KEkcyoWCHr93YMOD5xoXdXQtlkBXwS9ekBXplinMm7r/Mb2VVJIUuKWUUAlZGTkqhRawbClYsy2x4YqBSeIxlf16f9ZIoNdoFSSKomDFbRagHgz4Y56AkVxtV1DjXVfo8qR+TyKx9uz6wYKsiGsN5DI8uh7gnA3lz0Mvjwbpe5WvHxa3g4d8bjRx1+LzgfnBgbcB2gchGtMDRAWcD/45dSyhzFicRfIiaLyovZIpfTEOe/IE9APlzoF41C/lo3bFTCAMYWG4yff7U9YUcLIofXMgkKGqO+MByZ0+bnnz91Y83Q5ZBBsAxhHOzr3OLmIAjBBkSdi38xRpZwKHDQs//lSRYkVnTRj1y9EZ05bKuRK0j7ik6U55woyJil6hWdYqlr2Gx3DhuQmadAZJeTKzDqsgKsW1loJ8Q2B2/PiDXXLVm/Dwq2qiugiTkDVtjIxFII/RaICkrYEholZ5mRZP3vPNLAeHltzOUNk4g8bEvNru+j+H0RF0hOzL614hHCYdLqHFv5NkPSjspRRxA4OORy+BtksGwAIrqDUqzveaEsCQtadIA13wOOWpp0iqD/HznWgmu0FNQ3/BAP/KnHApKxEO+5U51f+XkDzG/iLTpsQwANvk9f5AvK8EesKY1I+P9kRNPafUoYGgG/U4cbf5U8t7h4Ru0hPDA12Y7wUa0+6yVUQfREAvNwxp7R+4s9n7KnAlDWcWIekhw7VGwQzoLHdL9hDTl2dMtbMEjAtRQBQulgLlMb4UZzdl6NDhcktq8+OIUBg1beA5iEde+8aaYVAO49g8Eyf9JCFzJ9rNmXxULEVBFS0u/s+cVn1BxnCnpb6ochUnzmkJ648jZuNC3jkr1k0uCbam23/dT+EmZd2V6RuEtqaj0u3D8duvb5b0sl0HQB7k14bUTt/mUTxjrzY30+fTfdzGfJWycXa8fNMWtlH25sqer/kw341BqeBSezQyJfo5D5uNGOGIe2vt+50DCunil5evRkaOyqWPP/S5SItWfqD/6esBq9k6Fwv9GEZsqNAUeYHJ4xMxdnbXPTSTbJ21/9JsMXTk3y44Jhrv+nd1h5h1n8usrEyMjTrEdiOOlswASQOeOhyMls+bZd43/+jTu/YSg6lSPeMN2e';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fb/fb.nocache.js?t=1669637194"></script>
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
