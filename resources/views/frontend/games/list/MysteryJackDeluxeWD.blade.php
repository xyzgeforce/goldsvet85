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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/myjd/style.css">
    
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
			
			
		var SID = '68YQOHXbO8Ks216tB8/0DHNfJE4w92NP4Hx6IkbfRgNgrwkBP2eRwNDWL9MvsXhhZomyt6lSM8ASvmRtjQxrtVwCO5HPYQvpukiMts30PaRkhsbvY8jAHJBUE3BfuIzjZvENsrUD6e5/non0c9jXjC+VFw0TSCF+Ayh9KfinxKABQszxmb+C73DozRdVd7g8PpQcPktxBy//e7MN1tsPvJULJ4KxXeeqSj6kJpJJdYTx47686W1644hM7MR4HR8u9bVdcbvJLZlxvkLQZ1zeSiU2gtIqGl5yzouBQxfdkYk7ljLQrVlPBl4/5+INyrV0Oqm7L16hI7CCFVho7LgGx7qAfp1AjzuKNZXdg1E06pweTB2LyQg3gfJY4TW8yJvUAkQ7TyJMr0l1mqf6lvfNJRSnwYDoyNyj45rjOi7cBZ8BJ5afPST81PckSa73ieCKZYRoRrHz54FM+10bKy83DfJtA2lcBZt63z1SEZ+IxFfrOA3gAw2R0yrlrXEq2f+L1F2d4ldEMhkSd8nElVB+yUMcGscK0TtZN8Pq5o30XT+wz1P//oZRm4h9FD8lOxzzVc1+tlnkmokr/XjEwpJDgATh2hcaZZ+pJde6OQjkElxDVnfwCNfkUHPL/0rjSaCwKP7URsmPkIcop3AR2Ia9lLdHolbyJqSSVr29PLoFieEITTnnfoQllSLb4s0BhApZO/169Gv7UD7Bs0Q7xIms7NAXlwLGpnfN6W+oisTy1E5PDhnfjPywe32sgXF6gui/xmumGYpyJl1v6O5iS2n/mv4Mc4HtJjGfqdKEg5BgoAT+yZ7378fGMi5WvaByawnVdAqx7NtK0FOvjFk3jhKhsKNR4upEskR7PWInV/Jgd7vuoqfiJZQkD0J49HwFj2kk178LlHW6AU4Y/nT9funBQUhPiIJXf8vUWot4rd3QSyC7Cg3R3/olJoNmhKyaKSDtTk48JNBJZcEgclEGG7f0ljaanmPDjI9O7S+kadCt50AWwR1cJGMenp0VeLEKsba+jis2mrvhYdPxqfFydLavsReg0xFGBo3cJdqUYTQevoTbGIHrdIZnR1kt4wFhkh797IIb3HlpDX4WD3qFz/9jzAWhQBXqatVMtchJ5+gjXKYRIutByImMoJ1PXVvmDl7ls+Kvo6E6+JRj6xWVPNVv1v2CsxRJT12gRyYBLdm+RcBjn+GEIq3W1NAEsLR2fht5x/dBvwJEOWpdJKBpkDb6mEBsJO9SQAt3Apkc6BbXx78ZX4i4OmvTxcYDDFVYnMfE0VNAFWsHoLmOcJx5v5gjKdThZwfI/IC0RdA95qA6+pSB2V609GIBjDkBJx/vfp5o6BSzB3y3j4bAoFV5/5QYP8rOarFa9gr3JG5TS+QQdnpBhpEGTPpDn1wHP9hE2E4B';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/myjd/myjd.nocache.js?t=1669637194"></script>
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
