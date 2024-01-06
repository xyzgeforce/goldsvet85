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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/bt70_2/style.css">
    
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
			
			
		var SID = 'DTkMKrNuA3KV+ozoriH5FDdA0LzoP3QKceP3cUAZV4xFuec3PT5hkzVVeYBIh7tmwVFolEeHMc6pyPrEcO2TtSSSzNuWRt72y2xWNBEI0pZpKfgtFuwX5vxajCfeGCxaogFiMR8D9Bbphva4jr3ykvW/2lGu+IvpODCkywsxBWTAzV5gW1SvqAWNyxsR0LSyaGHCcE7Q9M1KderrtNctjze/3l3r4rKfI0WJchQMCYkUFSguFgYuYldgGDo8kSsnZWgPsJ09fkDwX7tQaer6vstE6fLYJ8iqa13HFoZfroVZRJRi8YryvrCaTz6vEN6AY3Hj/0ATX0lBAu8vI6MSOSSNST+xuJvnjdLZgi7MOsXkwfGWmQShRYNFiRij5c0Lp9o27OgR5INUFXBhZDg6qyQR1J3Ms/EXMNFAIti3/hey/DTOxniZN3zZBLFlqzY/eTHAPcbZxKVTr8OOQ+DVHtOBPH4gOo2DktNCHQpk055eTTVNFagbhwVeobMTdP4nTdv5wj0V0mtSckgWIu+5keBUTbab7Tk8h3UEmcmLrsW/8t4B57b4He8egaehcehvNCm834foL4S4kNFazwS6a4PweWDA7wjR6kj5NNZDyLRttTWuvunCZTkZfkAlqrOoYs9UnwKMtOLVaJrv0DgG2jsa6BWezBHkS4Hc7/46vOdBI+mjol7Vf1Y6wyWiXYWzRvkn0SdODF9oi1gxJg4dbbOCQzMsBN8kHSvK+6hGV+deXQiEWlo02PBjZ9ZjtzsQS5KbhNDPVCXk9yl5jbEWTGYW8XYe7Qun/rd+J8Aff2ieFQXQNbzZ+Tl6JZ7ewrC1/nKBMwiulLNFMcHKz9Tj9iVtM+kOkTJDKbM5Ay67IHteoVz9cV4W6KfpZ7h9TpqxypQcoRZ0wvrVIk6YtWasTvb3PDYv8mJw/XX9YKCIrpWJsXLFz+KLQ8xpP4MN122mO118NFpjl/g8LTJvqs+EG50unYhQthLBqrputiseoDVTnVuwQPSojQGtcQcJrd895bbgTaVARL4QPXkYZ37WP2RTCZNKgh16LeWVBlOykcVz+aSb7eMjuBUesXy7mNGPekji2k116NVEmwrzrQ+AoBtBAye9SE7M1S+z85XFDGt2iOA6pgWQORgMg3fO1PXy9bB5x3DWBCJSeNyGyVC2PGpI124Ncw+vCwhOYKUdBnTmexHDSP18LkkKw8yAsSoFldQVIVx4ufHCOpA0ELF0HikREOhqsrR+tYUDHDU3nxHGuQojSidMJrbcz9IcvYhHi9FHrMHc//tO/V3eXuZQcG2uTj+a6H/YTfRFJ4Suzsyl6+UcBOyX2oGP7r4Nz4+R3Ec0jbxjUeIzDRf2T/nSzs2hpiWQXpUP6nqcsTltLuZplESLlIFPoRRAUc3dmRIC';
		
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/bt70_2/bt70_2.nocache.js?t=1669637194"></script>
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
