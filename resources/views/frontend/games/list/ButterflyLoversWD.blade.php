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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/bl/style.css">
    
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
			
			
		var SID = '2qJmRxDTuCG5Mlsuedc02Z6OvzPJK+u0X300IHDw+5G/s5QweLE8nDzmuIBbdJUZfRGIlW7+3c2pehyr8GpEuoeEV4kx7pL3VQuExaj4WnTMwOCrhj9/ZSBoAOauDaRgQeJeY9t8xMyd3ZnGPmcJqXD4ZDXEaXo4U70BqUH7V8XlrzZvwxaF4zDQQVvuGQXpGAKBXxu/+UfIq+LNmANspEVf9renQBR31YP2YaRe+gSpnHXTjdeAIBp6hmjL6IMkwFXvUoy/AcxA9X/YVTPjIZpKzgeNkTpEtHrZT1PpDHMBd4XdOzTHrMdD+Ba2zpIyP3fWRh/xysoV5x0Z9XRFzuBM9O7a8od3tf6NlKWw9StV+W0pXlkgx89WaeYaDnVxHWEQrVluhkx5dl8zZTl/I6W4HJPOZxzpdBS65pzigLH4sJ7O/5hK1DchRj20IRLCB7m6Do885m82WuQQqpXJr7XyISq4Vv8kyvW1SeYe1HQD62YhXytoOIurv8bSY708sCMTNpoyvVd/rIweCPQR8dNzym/ppLTKBAhSPD6Z4FAuU9l+wjNBR+lgD4YiyBbEaZHaDuexXkiYZrDxobkVGrEM74nvq8b31KFF3ftfgtBqq5nKx1/SGneIUP+rxT6N2Sd5/PAX0CJsYPXE0neIsalvQKWip2Q6DPNmiqXirmevRVcy+RA/UJK/AGdlfLNrf/aY57X9DVVpkJ/fmy5GUdmw4EI38VW3r5WTF2ZPrSDy83hUWQj8oLOyakR25rHxSaWEQjVaYqMCBmG+J8MQ8i/L/mc+QbJtCHtywdIu9KGMGaVLvJT50yEsBPtg3Srr2nzDnX+WUiUREQim5ZFDamTnUpXalPhs9zw2BBHr84DOGoDRTvJOLWyiv9BUPim/pG3OctIqAq0KnSMWkcBUlGng1rU1YasKG7hjpsXbpMGr4kjqkmAl3rZ4pZAE1Ik5eUFF7KP99sm/58Xn3/VercoC9qMcS9f9uTuBy/xrRRYq9V3xlzUFSk8QPpWFuzQbjPuMxSY3mIBsSKTuhCYL1uASiOwsxbGyj0H1N71E8dTUZDt2TQQHeG14J49sbi72iWc1KK9jNGRGd1pH1wqaO9ikmfBzNj6xhFtaZLv5wzAKLr9+/dy8L271T7k1FyxCr3G/jsOK+jLeJWlQVX4aaGV6vQ+zV/ocm8kBPMH/jOhq5Id5FZemQqJDPLrSLzOMzMOml27GltGPpA2FgU+WFYBln5e7bkYj5Q43ScJBRG9nDBHTPfk/PHfDjEPF/tzuS2eWchIVFUKQzhrQ7oD/vjmni8auiUv3OvhVcv4v87zCV1k5NRNcd3043Wl8+x54bRI4MQCngMS848vIjI3ZixIa3JoWHN1QNchPopxsvwyuyJ+eas0jIEUX3b5A/oST';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/bl/bl.nocache.js?t=1669637194"></script>
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
