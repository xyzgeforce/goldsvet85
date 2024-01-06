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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/jer/style.css">
    
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
			
			
		var SID = '6PAUaSBY11cpZ8dO+7GUig7qumWaK7iJstCns+nCwcQ1EvEisNPYnbPbcYbur5xL2OiS2BcST5efjUZKxNF3xb6knEU28OVs9Cn/8J8+qttCkLQpob+DfTj3VJYT5GOlUJgSEqpqC8TAH2ug1Gouu6gndUcUJtcxUbOIHyB4pq1b9o46Q5OOIma3hHQp3N9Tbl5RJLFm+73O4Sg6UfMntKLzW5eqyc6Rf18hLrhrbrusKS934xA8qHI8SVYocZjpsuxpuLQapL802ETz9zFn2USEQWMuz3WQC731mlTBp9JEzcgFaCDKJNALQng0psDoDXRdVTJra0NxMntowBfmHzqo6SzTU4UzLmJd2TizR4GNhwHzslpcc6+qLNnyY51ioOpDD2XxJAilItdS0mEz3DWnHDgpgKKYdx0cYsSzw1KM47kjpGe7xGGM0hw1P9UqdTb98koMhzCn9kTae6iDyG6r8R95qbY2La8GQFdhyZyov2rFL6viICrvvJOUGqbiMb/OytUY2Yc9BvFI+U5ieqy2fN9NDKoXxlmW1tl9vl88TPy9dyOxKixje5+Pzv3lWqRS27iOkxG+PqPzFfBz81M2HW83SP3tZwHTdKqxFoJUKcV2diqgMqDCRZTlEx/imJ5ey7H8h4H3UuOrt2d1jYlO9Q+PlvFbry3nHqypaMdC+C3VsUC7RyVha6X+xNYfZKaalWR8Z1yqQX5vtbbxheUxBISxf4jvsTWMNyBItcCGzPszU+rxvc640AhGseOwxZ0KYSdpscQXg4UFaH03ws1xavdBbGoApA3rCEOytZyNrU90UmVvQtc5HrOVdTsGsR7L9l6EsOoa4wfNvYjYUihcYtMB4wBU1XccFeGp9meDOlizCEtjXMFitPkXMO0CwWHVg2elqL1rAP5hSehcMwyX3LS63PEwFCSyp0Q+wiBq//yTLQeRl3BVt/+IaKoww2y2xQbZyH4lS1NcFNznrenqS0f+rSu9g723Yio81aYblq0zMr0LEzN7W2Lwzr/gxzxwbxd5QFLUfrOprfR0Jv2tTCbQ3IlXFHfDq1LVA3dHXpV8QgFyj6wxMGasiTYqhh8m+tvhV6wiJlD5SngKzFjIDAehB8vNEFXI+OrnFa4ojItSKApE6ufiVxbLTKTq5x6BnXVnx4tAyVJvg2sKvkAeWp0K9MA+Yx6UM1DRQo8Eeup11pv53V/teMHfR4Af7w0XB0yIwO2LvgOHCazl5EGgvMqgiVd4yy5EulmBKI9hVTiuSKCfRFGREKhcfqqCuiM3zBwwysjejGhw20ONRRm28sp9EfbKF0DHCS25S6AZqV5rMa1s3KaUvJlB8GmY2udxHXoqZt0UDxRigZK/q4S2iEmjiSuG+cDOj/nF8UnEY3ioDkYLTKm/y8AVneAj';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/jer/jer.nocache.js?t=1669637194"></script>
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
