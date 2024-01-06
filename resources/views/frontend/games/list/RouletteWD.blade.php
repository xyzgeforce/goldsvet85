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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/cr/style.css">
    
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
			
			
		var SID = 'L9izr32MS8P6vKdaF3f3GraEtU/yn6ycKGhwKDKMN+kb/1j78GMDkujGxM8MBrAN8leArM3YpCCpFF3f/nrxditdUqVuaJsj0ruu+Dr3lyrpoq+3QOdQl6OTAs0qg7cfe1Buev5eLwp6CmF+pXSjzTbWLV70bke4PvO4NGFsIdhVO+cJNRNhuJgyXmIL0k/U/USbeE6LescoiEQnS0KUZ1gb9qwXJcCWAwGY1BT4ndZT+xs4okRp8zB3gIpsyokH3Q9ex9aMX00EQVLOJTjjzTD0LDVNHjuN6Milap1XL2soWdoPfTjIHUjcgetoFrQ+A/C8W+w7w8jJL2/E9Q8E/mpqjTWvxBMF1MUPe3HBvwcteVZmNzek2DcAlm9i8ChRdv2q/7rrjpEu5Cwvyi9a2CEOvV9dpV99U86frYmdwHDT7lKdwFzP86Kj39rkNAra4P8Ok9t1SgFhgf+R02o+qh53Z39BQjtm7n47Hvz5FmRNVajy9AaVbFUTncIzzeaNWCUw68kMRTnBIz4MnRVX1KuaT39qyfNlm8dKEFchrgIeaL5XiISMK8ouUx7437Z+7LTN79EsaS7afJGhDTM5OPitW0zKGt807v6ArV98jDoc8VQJCb+j0XsoisBDYf3yDDtaw8G6f5ovNf/jrGQVM5An6LiT9TaY3HbHd4fT8QBTJrC3K3gYeWjR+g4RRxKF8hSHoxccN0lUvVNGDQX1sBg0YSvck7mW618OP2xWIuMHecW+ut2hCTKiB8xnrEkEZrOiIvqAbS96cxkWf11/KMOqkSmUP8GfqIQGDKS17xPYo3XFnmPNjWkfyS69e0z9LOrtXL+BVVDzLDqCezBQqOb/ggLPnNE27JVs9H4ktKB96Cl2ygzgvPE5+GlP+6yzBGcBrprwsb/sEqIOQf/6jMRkekN9VUTWaAUL5g6VeAXG1oFUvwvhQUnjp9QntEpg68l0vwE43QFbHxl6NkW+y4jZngnYH2efwwmQrw+Dr/uCbpBzOFDE7rmSlSBj7L/0BaTO8XDCgx8YXYh4BJYLZ8BRqGrFXQdiIU9tm3tf0JLs6J0UjhMxDc6U6a3oBqdnzxSJd4HHRQKFHHqRpE1qUrDVbf/LFa7ZrW9y9yd4SCrrA41DG3HKWFYXUw1cvRH2TlSyLD2XURHEm8ogYH+0reMlheoYuSGMkkDKERGwrXf5lXUe3DIU2UEstDCRFjJqwXlqkuxw38nQpvfLCfX0TcvpDP+qwsh56zCV8Mjpw2SnjfyL2OmtY/IbmdiNk32F61CjwD7ar3ZOmFPCiy4ciLtKoYrkr29NzpFdBJ02XJYh3G11SONDsesHNDCwqSCCTvfu/Tsym0yBp1gWKBrHPAn9rmckgyo+i6fTr5WTsi3umLpNz4psCFNk4P/Y8ZNo';
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/cr/cr.nocache.js?t=1669637194"></script>
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
