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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mt_2/style.css">
    
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
			
			
		var SID = 'NfjKMWSQmqtxvBXaowxFZ1O1iOHqMA1k7e+u5FY+ya/pN0Sn8ETyh9wDSGhgFwuoKuWPLm0ghQ/KBwcpkQS9IPpp7WoNzjcvVySmShuTB6R3E6JxtkWWJTupjn5RIQvtoCnAL66+6vbIM7GRGL3GOqfrD0c/We5ZDDY7s6xevmYDWkr7m8u89rcrnJKXJZHIx7jouRWjHWBK+WGCzu98I3hW88nejL7dcfmDQ3gO2WxZ9Ki1XtL4AQT61dLni5ZIkvazRNpHgqW5JCd9jfXr78xn0tB65yDwykl9mpHlb5KnSlEBulrIqSX2vOQC6P5jDaY+4Qzg6mgvDxREyrWlx02YOZE/d5KPNxRTAgGtSQDFGuW+Xy0gUTJSOz3p4NvEcAMRPv8Sp2dMYid+uKlmjxNA0En+cJhxmU/ZKLKTLggfYtlEm4HEnF3yt/fA4E/oQLQKEAW9m9fq6lJGjYvA6KoeJD1RXIPObGPol5TIfMhdNU+hAPsZ99Jqzo+5IqlHHSb5FUmFTeuh20j6JkjiL2+ed789PNUDHKpFFHI5z2lDxjfbET1t0KIZBWF07o7cBdguznXf1JP3hDs2C65vfC/ezOWmaxQkQjP25uj1NS0b7B4qXTNJf/HvWCYzcx7o5vxNMOiDfkLiXMaep6qBuNOaQw7HCM7bDYY8ghQlPtfQ1TGHWBvjkdJkO3dAraKsMy1sOus8G9C7faZ+Fqukp87CYqXTWaO2e7Cxz3d50pY64wz3Y2FgRnVssMfnxRBvSQeIbGOFDUuWRhfRV6RNH2SGvWYbU+cIGYfIj1oPxJFtF94OMY4vkm1RaMRe+v5LkTnd1lH3NUoxAd0WcVIQqhfswL0i4pmAIHBTPqOI7WvC628KuKqo6yuGBVwEOGaHVmhsD9SHt6tJ4EohCpELO5LkHvsUNAWS6gDZIuEjlSV2T9sS9+/rR7MmN8Hvd+KK+yxCgDQuUDnUO4MlUEY6kdOjKXqS+9Ax8G6PZG2GMW2+UJADV+vXpq1oHxV7sSrb1TABi+2PJp8rcjvAZ//j07kHXsGmZmds6BbjwR7FWZJNRPS8ytsYA9i2blDEmVwIe/4HZU4BESkLIrifVq+Kvvyk/otSl0/LkBsYVNgcctIXuKygi7opWPJRBVjofooFj9Uq29rSbS8be7eNcM8mQM/i2lO9l/csHyAa1e8QmC/XUOckO9YjcBn2P1R/ZgoMvps0BL1LzbFj3SqRp2Q8Orrk4OvsV0lUadfKQlL2sC5QCnLd/Cw3D6rZBxiVivUrBPwejj1NzJFZnG+HCzM3jC0kYNjonhdsB/S4mC73g1qCMIgph8BB67TYHOi3ebeFSQXAKROmcriYLBYhdNpXhj+hOlyD19LOQQdxxwCRhuQGxVGACkb7X7SvQtuMTcbG';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mt_2/mt_2.nocache.js?t=1669637194"></script>
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
