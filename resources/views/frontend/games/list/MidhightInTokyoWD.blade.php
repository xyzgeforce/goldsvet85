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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/mit/style.css">
    
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
			
			
		var SID = 'JC7zwBAm/ylvPoHyNbCoN90+rN4rfAUBqmJZzrNdiQ9CFjejecAXDvBl5xnLaVdWUkN0nqd2pKgAF1YS60NVDPErZpxrJ9bnx8w1/ckRQ/gOLqy4RJruSiQYHX2sCzCylhJEaY85uYFmcCwkSRNd4DqT1KjaOOjoiO3f3s6gZFWRFD8z5Wdwz6v4ZazmSde1dVkkJ+B+blpIGhGGcK60z7yTAal/nbLqXKbfRT372YdeLw+hOxHQMjUEO2WbhQgYptBYxzpdE8ysYBOdGI/mBqcowEi1ALrEu1I8Z6DAk4/UcekcDCDEx5F1CXn3IP/E0AHxH/ajivOhRPTshO1wT3/2axxjXIe26jbJvDxWqtrm9mwyHk9q9rLojHK3j6i1HB3nXtHp75aA2S2Kf31WfzWehLkiPPStFbDn3XY7jE7vix7jGor9ilbqT7tGdpfRaUCxnzsMzi4XaPZIklRKA/bUwNiNA2bAPlO2DBkO1U47wgvZUUFDlMCW13nAbpn5p3w082EKhtd9/dxG4jaTl3ZWNNTbGCadjCqht0jENi7PZOQfqkPAA6Q32ulnJ6z6gLXOxlAQUeFOm1+vNOH8v3giw8lmIaQmQvp28771slPDHjcKBfSRo2fQ+wxD7u4KEZT7bHX8Ffs7w0QdjbMORNZfBvCbsSJDet/MPMoBfQjKhfLT6Rx6D9roB5oSVmDoSFuYUbMmFe0fdn9ZZ8H+IOfmJ52XD2losIiddjo/0cnGnj+VLAtrRV9HfAkqqcEfZeQke5UKoFRw1MiVAnbr3hvsqIbkTltOTksMXU4zFa+bYlCevcsf/aGa7GsbKHIdrB+Go9qVaFtdyFydRUPxi9vPbubAHJlDjckg0zWSzzDRPrzSEWkSe2kbQ3lPU2L6osjf+kgvfHW+YLl1HZWEzaojuwuHKzOcAc7/cCJ/4UN6OBYudcCx9twTIupCqpBd/YtFIvdeffR7d6ccQ9hRj1gTF/Goue7PzJZXRWPT/W241XvgIe6WAzJENw19p1F/TCO2esyUSd1h3eergAhqV1hgmRj/sq2ebJUSopwnYMtGuVvcw6DkcpX5DxiIJ6Ego4pv1D4uPFIcycsba7bQ81Kchy5v4qxXGShj5UoxtWU2kz2VpXJJU+ym8rtbGRvTWvI77NrkIZoqJSCeSFUtUbfrDAd2H6Sin3acJnjuT8ttbTyD+SoNYJBiSP4oVYWwC78aqTo/0itDIxjbxf2aHtjNx7+Ae+ps11vgkBuKyK/dS8ttx4ZDNJDCHQKrRlxqhATxom6M6ouy05WNnXEU5+YRRrk2fJohD+yVGQ7gfCYEuAHTAIecDP6/cCbwyxmv7w5YOEZ8+475B0uCRPc6W1O428UspGeqo0E8YkMRNMW7ntCtDi1ydP0HqbuZ76iY';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/mit/mit.nocache.js?t=1669637194"></script>
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
