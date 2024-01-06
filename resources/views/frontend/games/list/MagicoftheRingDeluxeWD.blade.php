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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/motrd/style.css">
    
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
			
			
		var SID = 'nBMq6k8IffUhWobIBVvtBIaxzPFP9rlkpQc5MwGOEO6q6qHBRmKhpbGt9/x3qNbZjNFGBjYYrvTvoW0Ij/oudTT0zDIfAaa289YR753bAa5qWKZOQv5fI+tty4Nb2yhiTsgcPZPH5ZmaOLhEkGdUduWY9oL8YFobuwdPSCWHw6gR5OVL/QfkLIvjnh7yCo0sUc2Jf2TONBMbKyyHzFv49oCABohr4PKhaanoVsUq+pWouoaSd86TIDZf78YpH+PbCYSqNbaP8Dmldv+EFs9JQOs9YvZ1JgCwO4yr8fgneDwoKC1iLqOosiJV/+X9fwc1ptWJZPfMMZO/kwSEYXVIoxUljbQ9kNr8G4b3VkfQO8AyqOv4XuG++1uNMZ9i6mt6ZL/THJgM288rddqHK+tDIIoqUiMxapdS3uMjNzFy2AAS/SpGT9PLADJ87GyLqM7TNB5xMT3mn7YitSBKs9BlbiWsAljXHwfOd3Hcr4qKn+c0JkFMt54thqTVGQS06Kz4axo0vQSQmv6VD2dDbT2LNv1ndmo1IgSLK1tDq0U9q187OXcONdBiNmv22wNrOtGDBKbKjCupVYx8XY9r7AgDblkpz3L4FdZ4fTiyc7P1p7366b7yBc8Tj6JG+tuBuZRApAgO8bx/aZtfGuuxAG3lNty/vZgSfeGmMqp/oEUEhPDKMW/I9jW6ureCz9BaU/BlnOSkkpsSi8P955hxKxliONU667c9TCWs6gKni3IQtgapBgnWBqaG7F2H8Qp78vQO5+HxivBfWQtia6P6by/rT1rDMl/z9VnWjoehsiCI5QaF4+yHYIl8sKrpxV/kFTnWnv0PPnzI3YgTNc6bQ9D/0NNsOwXM2Saja++qAg/l3LE/ahPgE0V285ttiN484iNlcH2KWsE/6+owAM1yq12ImqzguIxMg6z1ewjce3c3dpEC0OvAKGGga3sjTk1zJT9laJQZU6DM2aFTaKLSNn1c3cXXm11x3J6uisE0HiRPyvyWo48i45UrMJblFxTaFWgXbUAd3FX87dA9P21Hb3aDXCXNj7HMeAN1RDNkZeSunEH2Muuwsvj7+oA1Y614kh5NZA6wB6gFNJ1WoRPCuLub5JsUhiEYOylK3pIVfaPh5lWanQQlA25GbZG8jEfmOzJmp/wjnz2Ck0s8jGNNz5oB/8iNwyV/8K79/mhtM/ZxCWA6b4rLqxIMeiIXpw5N0t7ilQtLJ4ff62LlHZUFMoPVmQZs43R0tmlJWm1+7GrKZwbosXBH82OVk2cy9vg0oFtsr00UkwkopP6HhFXfTjdre86xz9pO5H7In16tT8otpD027lggwZaaOi9CMY4BAb29T+Y/B80nJ8ZycVnBAJD/gZyPCp6QSRWBcALOJ2ZBC8jmc8FTHZA1L58uyTasR/fr';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/motrd/motrd.nocache.js?t=1669637194"></script>
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
