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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/cmd/style.css">
    
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
			
			
		var SID = 'lb3P67xx6K5fy0Bbxpu/OKu93Rq9qCl09D4aPgrbWhLufTt5TcVbrdNlP6eJ8EaSaWx4ghjDNDhZxiQKFMATixT6FgSsjL+UnGXYLYWM1PbQncOPPq/ulxgi2az02TjTXjJIExqfeqC+CsWZosapUezI0lXYG4PgowAXeqjet9uEA+OzsOaRUmjPbtKORNGrKoMlaCmVMpnU+LbDHNG0LEh8Iz+YjCbJYWYrMKwLHXH6gngCrEGPAdBJvqdHhO/KH76Fq7PCWc3BhK9MWkQtbfHs0Kmr4XfsuUEkJU8+d5rAHbOdVosPUIogvHRH7ESh0YKMI+anlmNcnU/IM32Er4d0ltjU15E2vaXBzaUB8twtzswkizNxwMTghrZ8XxfVMb+QXNL3+ePu+yIHx0JW55i/v10OyzGU+H1gXwVqhMtm8umBSWGsxtGyJM7rc8kWxKozb1A5T9YQtqqUWVloNPs3PRjgpVCAGPZ7EONWBsVlWeCjUhem9puXjYUNB5Zw+aLXP3ezyAQUOGmYDodfy4RPH8hRuPGj/WzcBi/g5Y4opShG/TpssPu+5dx04e6j0j9M+xW/EwARv6M0sLBJ4IW/iLqFyrsM9QSMz09pVXgiOzwO7s7gw4beEq07t4O5trjYcLQwoqGoveTpMAyu66a1bDv/pmJahGkG1XwCygN92W8GUXkH6fR2Eiqc1zxv0lP2+lQghoJphN9q3D7aq99JvdPFaCnhMhmdeG6Ds7KFw/xY0RQCkYOPw/nJQL+jTOIIiFThSaOt9ZvseYXAjI1CK/Z8nIs9jGza89KosMPcCIMiawY0PVPxoIi6ZoGIjZ6nZ53rmS3DH71BOIJjy81WReu5P3CzZA2HaehkQZbFXOFivFpdj0kx7nELsjsOQhGD+oMYXWxvldxk2ngZebkPIlvX6YkjobywqVhoqUQSpxY8tXvGIsMe8eeY0bS2KYXyoa3zMP75m2AFKhaiLC6ynQsuLKzgbTkHgujPFvylKhDz6P6E9fqelzs140JYrt02JlEK3qg7R/vAClWC9BueYQyiIex3UIM8knG/xLmpH4i+NjA1+Lc4sTJb2NFi+hxOOy5QUu7/7Z1a+/z3XXF/xCgffnSabrAwwZtVKupzIQ7HcbTTYFA/JLtJr78Qnoq1Hgft2n0SKRrcrB0z1yCAki9HI84JDORneHZewsbxjocLCfQorLD0nfh9oRl3hnLEIAn8fdt1X+C2lCYsdNglG6ZhLHkd2kBd3dxN42/R8Qfb33GZvPWWX6u4YLr5ToFvSkigumA8h5rh4HudO4aV5a/PZRInLp/Q/Qi8PSfqPOUGbGqHRXZnnD0R8BftYIpxvK9t4AGE5JMmte3tBukHelZYuOxDOoITSWK089ddYFpE+RFJY5tici6C3PjW';
				
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/cmd/cmd.nocache.js?t=1669637194"></script>
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
