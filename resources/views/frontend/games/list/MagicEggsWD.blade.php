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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/me/style.css">
    
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
			
			
		var SID = '5UoqkBnfO6XZw6m9xfGhOjnXoAKXGvRMGgnyK2tcuHAqIzKGxaYs1PmIy5BsZZE44cGxFIDvFVOHWYzOnBQ5EKnxMSizn2FJ3LEIvyjl8wf9yYWu+V5TZIPog/jHFycUL9t7/2Y8m+TN6HzLWaKw/O5275AJNaGbpE2bRnazD4juNb90KU9FYIc5k5LwMakA2fI2Cok6AxK/9KcXrFJQ/15UL3TtXIBKouxDNveWqb/XNMlvI7C1PubwNJ4gFHCDYgUk5/QcjXckwPRJJ4pk/txeGbRN0UKe5BlgqvUoOps+IZ7L6mYTpsEzngP6NAoP41qoYPJfkhvKlkdYp3ecSXFuv0riFzwBAeNF605/Whi5kKGs5s9Ch0ifYxN73FgdBWZedOYIls9Jry95foQH46cBeAiYcW2m8HwO4RzQJNLrGyR0SQXlzlQ6qW7/hyo7/ZdkxfNXdMWqjHyp3IvOdg831W8Gy5FwcYAE32Tx4sdGOzQE90z3EB1+IpP3j+RHlUTGIvMqsyfaaphZyFxcOvgnvEayVlZGIc+DK9tUbSoMu8+yRc2WoF4dsnA7cMeDbu81lQOLI32lUQdqkoTJ61yxnmuJ0/GUAiFCCCLDAgrPe1hAFeHQrQ1PrMvtwtTcF2yNo+RpWTnMdrxDq5tWPK/oHOjrJJ9StO9hYaeB+9/S2pJrpRJ/5Z9bnWAmsX0eQF5h+989zbO8LN+fR20wypJWTjOFFO6q9kT6WB+h9aDSAaSKiSEIJ0F8V7RhIZ2FysvYRJxwy5PW6LoWdcWcibU6/LYzEjdJcm8V7SqXTNMYmPDS/OdmCPIh9P8usVUPwH3XF4W+ywAADFggSGfQZHq2W8B2OqbWDMplMGnxzWGbe9A6Ki8fCnB9OKqR91xrkNN4mayZkpsyMyn/up2VcyNrdffLoYfw5GTiesBJPZ3T7Jd3WL0tv87UHKXTBVNAhBjF3cZmQyQYzkjamkEnFRpyd7MpMRKL6qHgnuzA9AUOH61hp1NrThg13nsF6alGeP2olPf4fmudHgcLQLfvzrkklUbm4835w4T2bWVwyRSZtE/kgH0J8Y600LO7AU0uM8LTNmaUNTmaNvdvJ7gFhPglT73JKenRdGtoeAXZE/n1ynLQ4VTc1m/RpYjbfJSr0eorJg9+LnHEa70cZ5902deKIXEgMxsFbyXU+4uI+KUusrAPM1D/VPjmO/nxrdvt8mMrK0pJIP1KiO26QieAbHDhkX6+IwLhpQMEyf2KMv73Ba2isOPZwW9CDAn7TPXUQVzcR6De0BTnmpCMkNPDDMZPVHw9oAInn27yJ5/bo35nWSeScYDLbK/Fld39KgDqulbZgdriIiJAJGNoYz40DnRzFTxdPVcJ6AFhnERRnj4noq7lS0qCnq6RAQ44zfsR';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/me/me.nocache.js?t=1669637194"></script>
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
