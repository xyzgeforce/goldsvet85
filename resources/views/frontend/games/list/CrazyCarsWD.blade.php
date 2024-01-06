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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/cc/style.css">
    
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
			
			
		var SID = 'WlGsb3yFXfVpIVvghvnqVk9lUyPbjM5+XD1Q/nu6ZnX8MBjlBjo4J2vt8hkYkfzzx35S4dPba2sJN3SghC1pL2NuhVObAdDiMPJStGpCrIad3CHnmgCzZVCvyWtZn0/EKCsna8ZckJkzsg//2NuAAcJmP/0dgSkx1anC9Z8XOCK3ANGHGZ/WpRlxdlL4HM7qW+/D/v6l9iVLiTbjA33vuUjOAUj4jE9UAbSVMxv5LeIZ9+DlWj6orCDUcrfhyajzJs9j2gQR+H0mEMWuWTjHTM0E3f4pDszMLszx+y4IE2+eHtbMRs7MPC/amUydsO8qt6zTaYIvail8ydXnwgVaiomadAdzH9ZJN9/oYpvxK39KII4rX0ZPhYP1OIgNpNpQyehdclw5hxI38jqmVfz3pUEzhyNqTLCyUawc6Bvodpv4lkFKWNa0AQJnbTurGHj1llVMmHEFXybQolBXMFNqPeeqZUxNKOv0fHfMCEtvbWtxgyrJ0TJZI84gm311J7GrQ1r7Oj/XMf71lGDxHy0k7BD7HgzEmFNqc/O9k1A+gIad8cS23qiqaXntz6OuotFsabxlgDjKPUQzXLdOYPVFQk6zmQ3fX/ll9yUKwLY62fRQMApBZm1XyOj+m/vhIFgwWTbf9zKapze3m9XGuf8N8Boc25LuJMu7qDn+esvGf/BvQKg3A06ODbGQ+vXNDMIocZpV3n2CX4VtGYsLFNcopsZYa4BHpSQ2paoqiS26L/pFW3Z40ISQcoFdDQVbViqAyTtcHLAwZZol/HbAwTNukIQT1Ralfx9iwkN5GAXgL9qWO7jsvRADlMXfGx+UJXRXqnJ31zpivD7tZEeCQvFIjogT+z1JNq40KxSZfM2JlTu+8ZcCKJqnb/61nbDTUzUte8plNiOVDgjlLYFVrTvjB4s8Pic6pSMJGEPnyIL5r/McqtX8sxJQiDm8cRUwNFoSpprF95t4Ag1H2ZEQJZBTjfo4HQH+j8DrNjN+CiSa2uiTOG1yMp9/udmKfj4Q4X4Un3xsFWcduR108XxNKDvxm+D97o1NwGric5GaxbkiQP+5SjpWytW3A2+dKWJHhWDYjuYghukdvPFcvrGwGkppHrIP8TFiIJCtnZvj9L4ig+aezipS7Rl5ERPR4aTgBBPOkTRoW8NoNneiq5Z959k07hWALab3qtYYL+j+fvOh+227JiBaa7AFUaRi4n8xs9HcDjsKVy9hS5S+8MwF+manjxHF1tWq5zddNN9qQckntxx0gtrVWhNcEVtoH4JK1x/HyliN5Y/RhlsesQ/VjuYjg0YQ3GJ9IWfou7B3BZzHE8xzrU4jW3IkEbpN6Xd7gb5VAGv1atgW2D3rWC8L/B5RBmkzKVVGkvEE1yfs1jJ3umKLNRcuAePw2VMobcMvZwJC';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/cc/cc.nocache.js?t=1669637194"></script>
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
