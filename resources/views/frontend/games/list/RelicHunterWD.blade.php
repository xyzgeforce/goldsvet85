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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/rh/style.css">
    
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
			
			
		var SID = 'kf6kiaThJsuMuzzkls3wENDX3p7r6ZMhzjFqgYGbO6smzoNZxkObCHlL0M9KXVE4d1bHAVtUhqlbyQRS84WM4k8sytAUl3ec+tcTdzLl/A/5Z7L3F2U8zXtjel0Ql6s+ru7sGR9FyximEZCZfQfUe/AsWzAs70x/pbaYCTObGZL0OClLWQ2Dsuf/pW0Bhq/eLEFrS5hpn76O9U1LVHdE7rAzRObkQL67X5oKOcI5+Swu2jayRK1AnYvezIupGAGolR8gfRovZCaoXjJumhIv37WfHozAwTBfoW1GnCqSRzvPz7YYywt1S8Pqd57frBKL08CHlOp6Y9J52d/wkKfE2yaqlzVgoBLyrLUYDEhc+Vgud9eXwk4oD+7J4TkiFxZ22Z3DdT4WkFqPOfnSAnrOdv76cjXq+c6d7tqQ8Z9AqT0i1hLhfXx3dKWu7n9eMlKN2+Zg543snsHnvUKq8m3ZZlgBKc5YRXmJE6wQuzPB5qQUZq1ZwvpYzMX14/P6T7sVBMlMhd2PVlLlZ/sx8HTLh3FVuYhv5OQInh09rhxTOHJqc0kK/S5RsiEYs0sh4pTEF9d3AKiBtVMS6fp05XrMRMgpDvjjToH+cNXOSIgEEsbuz4xWqXTp9O0LpUjPYjsIhKD/LOTkvcWKJLRi+2gNoK95vWSeqGCV52IcWBAAroxqTnTAqRKF4aKu85S9bP5xc5gokj6Sj96BjyTdt9YBaVeE3+lya3utIbiErUh2TL/Vw9mav0W0IP+Ncxcs8blj4qmXOxPOHz+mDhWE5zqUmlm1doWIW9Dg3aTpuFI4/u1CLQcHnGb0fxNDu6fR3JzE1i08ISPLNr3ElA80Nov1hJcX5u+sw2Ptvmq/UKYTyzvxd0kbNO/7iZidgENbAwpLFCKWSl+xWkpUwGKgqKoMlNqIuLvuAl7udUXd6nnysCoVEIVu5UN57ggT55jg+NMmMJGgSZdpPA8OmMleNY5WlvuVgX8ty9Zy0DhcN5O+UT/kpfRd3Z6u1aR9E8Snr9Ba0co4uFvMC20oP5gWCWc/TQ3IxOqIQGAA7VUQEUd2S4nIBzD7e5jx0Y4T+1y8+0CNBYRoWdZKNPy/bpGSH+zF8zPzGock/dJgT5sFjwTJwXUpOAApc73eiSonqnLQRsZUMm1oYxA53yfvjctBtESgCWBAroenDteHOvFUc5ElCos6nBF5macM5lCA5MQGQE6r9OUrz/c4McFdAfrpH4dQmaXlCWu35nmQToAy/JyQgmwNObY55HbOue/Ug/bf3SOQ2c3JvOZIpmUMAPwBSbiB0KLYg7V82uAlCOM/sZs4Ufd21+nJBgU2th/Uppy/MmnfWBdcquz00dXYoeobCO32CppZPRR4WHj00D3L7Wu+tqLQA5OZvkgeE3weJ6KndUv+';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/rh/rh.nocache.js?t=1669637194"></script>
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
