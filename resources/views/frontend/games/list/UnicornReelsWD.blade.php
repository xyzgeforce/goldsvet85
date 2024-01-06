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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/ur/style.css">
    
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
			
			
		var SID = '8Gbj+5gpVofBRfBiHyDcVo5erDhCDrtZjYft3AVv75kqxb6VQ7GVMffY5xtMrbPfnxs5SVKCdt60KgUuMDzmFjx8GqYDZxsIvDVfaXVPEvpLpNGOXsFHjuDEXjqPXISvxkHfq3jGvLbYc8TClU1EW2mWXzcYN4ei2twElmxmkKmIWFXTWFGEnFa5DFhJ1vckUgzKmYKd0FWKr4ejrrwAZzbRbVpNNSahvmkAorCyCxvReC/mvVEZTcwieqpcxyGq5Wcmfo/TU9wxWaFGa7XAfhRnVxLTqUPEPI8kirxT0XgideQIiFSjaSy6IK3cLcOxkw/EIMOBIopPBzbLSlcxGLcC3ZHxmSQzwi0pKZmAPKcBk5Uk8n38Tkd5wJ9fVOgAaV6GW729gNy3lweyG1V4o/fo63RAhBWK/BYTyIOoH9AT21OyOvz9dE7K3kTea5UWa4NW1bD53QV9NYuSfXKL4m9XSRcnVtH1/OFrDhGGzrhsRvh6/GKBFeAU3XzRVYELm5VrphwhegkCty+H1shVnoT2Ir1cKm3G7urVfh+wVy0/Z6qzAv1725AbDIqhYLp/o9dvi97/m71e4aL4c6a8A9+n4p6n1jL2ttyxXeSBUTU22Ssw5ObkxcV8F9naok3q+cQpUirhBzzxj/G2tLxKCHjaX4LhWkfESQzJZa0MilVpChZlVSW4Pc5yFW8H11Xx1zoZ2uUyt5RxDLNGEZXBrtq8SnXPioP9IIJneZn5oA7IfAGYlcmLPMUM+Ng4/57n+6dlph4G5gGUjAIBFq6ZpTI+J9LJW7Yq+MmA6kz8wSiVIoeK/EPJKIwcbKp2oOSr6nZgbHiGj87ZMm2bSGvypGaCL9hSmnoTczo7bjRBmWY4TALY7uffrYVg988ERcY1OBoep6/70kAneo0oZvF0g8ScrBQHsQMAIyqGcpP9iAK6no7vOhQSgIJ0xvX90PFKYDakm/W1YFyR4IjphXIhi9ZI8fvCfyap0hKG30wPUUbvNIgmudFW+akbXHAQnxzH+OzyoxhZWK/w4c7mHOsxNQzd2rNtfPIRe1x7WM64Qexgs4kgeDUHTbKTm9zRayM2Fp1OxhVrj6cK8PwRU0SgYM1z/6UeSG1PWCCPqVeHkWBXnfQaKVtq+7NdyY8+6OUujo0e2/58OcshAxDMQJ6hY/Ve2yqHlp7hilDhgCJXYZnnMxGR0gX4ss2N4Ww/X3QNt/tgpLIgut6LG/OEm27DmFVjFokokTe7FzO7NOHOMadmNKrsousMmdQqT4QliUk5ePjBDVqn0Nmi4WMQG6htS96dcGZqyweK5DkhtjvTUl01WGwLrTSonWQBajkEe+rMLfbvtvGWF2R9V5CH9M0hbJaJPzUaiWHdU7lw6NRUU+7Mz+eMnEhVUDzDk5TJgIRz';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/ur/ur.nocache.js?t=1669637194"></script>
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
