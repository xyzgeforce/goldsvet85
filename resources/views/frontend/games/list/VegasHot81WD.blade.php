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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/vh81/style.css">
    
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
			
			
		var SID = 'KflqYYdN20Pra6kBB0Z6QsaZ0kpssLLYvaKQDLDpiIl6U3/VebThC8Mo3KruJ27BWWt43CuVMsxjRNLoqgtUrVtS75X/GDa1nspMNmNVgvnBW7dg/9169UOfUm9fwUjHxxyY9SvfCgbQEo8LxsudpBWok3PoFYGtfTz6iF8HVcp0a9kfZaVdd6woj1HdNucFG4bQ5fJx0EHQ67F1oMiDpPOKDibXIY9GLuqt516T/GPmhJacYGR9Yiyt2uvNXU7OZH9ZusLJORYJs1/PDyfIqKKkkpP2FRU3ZNUe1BDxgilie54Fp2im+/+/e4d57Q1B4Na2zO4fNAQxp/x8rqVR9bEcdDFPdXigNvoldqyE+BZIBq9yyqykhXP46o1oyIf93bEeWWzbAayVDbudoN+6OEYnKbnsE/f5JMkETJ1sMJwf62JQnmzI8bzHt766TcmuzSTe+p9azN9UBeHF3BbfjZoQIWrifBtzxzNIzLDkZ40ZZ26uepGVIaiMniH1IckC3JMLJsXOWjSnFCxxxHCuNZhWECs9EWOqG6No3hAsjuW6kOa3bTaIQ+0FX+792WP/5XYDI9PTrdMjzEg3i4v5bpdLJJIvitget5VWsmvsiT1U6A29B3ZrVWDemkVnugYl7dJuLgZ2p9XM3vjQOQq4/IZu0pnksiieSHxLCWQG/01o9xfwSqKEh3hyLnCa8HEjUMde2zJK9tUQ8qu5XPgd6J362bVVn1UvYUjmYjiZu7v3WP7MU94Z0BXl/aMpbgaQfmIdVwSn3i72tL8EOiazVyJFatBMY9u2E1jLtu5pTVGjstrruYGjCG/+vHsf4FhyHcdC+l6QuslRZZ3SIq0pXceWM0nTVuZH06x5V8EcE/5wkGtUJ4T4d+yLCLsg8FCh7H/Zygs6hcYOZY8kXtNbEmwFaMy+t0x5CJK7xsJ50TRSeeQ3/3Sdj5N5jiZHmeHUy4T7245DThMhOE2RLcm2DsGMnNN/1jundYAF80/IYbBY68xu1jh+5eskUZkfjtxuz0PTBEgRfQ3lV6Uz4YbWLF3HOLM7tLIYjFi6B6qwrWLep31B/MP4afomYetD8DqqtYHdi9vfowPVbM0Ar+SQpuDFsVy+NCOrQsxkQn8YtxgoFbnjREPDyjE07C2xzrE2CsOCu6y6EoAhmQKJ64DHutQNB2vyEJI8O37qYHtuwx+YFNHVNqaDGVxXp1IJ4mosxF0aFrijKbwPhhLmOpESgaUGPmbn1y9AdIrVVd9dzBzyFOPweyy9n1VH2/S3YlpbzGUNuHc3nKeLqcbRyAbDG9hp5Gsnyss4emULQKHSn9chTurtpdw22Ii+03AFIkJHwm4TJDxXvz2YdVx2ji3+J3E4JaUJrGAW/cu7cU98uUWdeydfEi6bAYFjHN7g+jDN';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/vh81/vh81.nocache.js?t=1669637194"></script>
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
