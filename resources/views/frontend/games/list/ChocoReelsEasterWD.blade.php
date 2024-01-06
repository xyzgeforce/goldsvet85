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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/chr/style.css">
    
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
			
			
		var SID = 'WIudrtA5oQf4MQ/4+POL6JczzdcdEjjsSkSjJnedZVIYyfRSUrvjk4S36QBCPlgnHQX1ZLv3fvnagsbbKaSQbP2YY/pned1ujElvHlmCRkaww3R26LMNeWmt34T+c09I/chtCJwICze8lcQ/hROqwWaftp7wTaSAHYxM2/9FzRBvebNFEhhS+d45e6Yd2yA9OF7HCuLihLL7phT1CZRyHlVcDzWROHYRFWOIhc3ddN5vkuPu7+Lsf9Vnfde/quVl90JIKnVUuRMbidrUzz88SNnbQ05RV9oOF/VcA4nB8KfYxOlY3iHuCC8rS8VK4QudxWg7M933Gitcxb1CgJ0RDbzcQSUSNS7Wuoy735GSmANG8mIQaF5v27YOGj/1JqkIH6C0TwRkaJyGxbcQcn1yN+JCa2B6U88mhOYkG5CYDlM+zh6kLlB5fcTCeVeumJB26U8TDkCSHB+kcfRdfFnPobQZBosZtRwTk8wwRNWIP/gxomJnhM3guBzFZc10iigzF4/rdAq65b73GlvEsOhnkquudSQJoc/jXpypAAdRL4dGkkyqt8/SgbzY4mT+Up9BHCLjrY40GTcdniXloVTnJ9/LVJlDf/vILtCeRENcdxwnPjgin2gXLTdCNDWaUWRfmk57MIcEjnYKlil3fHLtWXqTevxnWCMxshcCPY5i5vqdXU9xLBkJzOs5wMdL36ts9H5b1gpeRpe9WwMQCEXPAPTU8dL10IXtXUhD1U6BjvvAUB1HsNOPcglDXjCD96zWuPlEGNSCDoMvc8GT+um7VTmY/CTLzqP7YKguGcRJ5CxQs+7W90cOWLDi+OqyDUchaA//R5hrgpJRNbf4xYPesai+nf0/oJtZpSAGgO0KiH0kWxJScIWCxEa0cup4mudD6vVtViulAFRnRkBid87p7kROyIUiOXfVKfSAUyDFX3ENtUC7brwN88XWQtnS4tgFcD6te/Fd4dS6M2tZtJspTPybxMQXykzf7Pp8LMzw+XbvgX8UlWzK4+uTrpOI1w30PFdCp+5pLWSS/7PAezJMSr+IEXtXiddSRjkMdhYRxxSpPfxyxwD71qw3CMxaNSB3fhjlH1ZSa0NuhhKyngTCNUUhUV3n0JPDYbF0CPooymH45jMALAVbgHss6hC8trVi5kflF3LDdQRxrADJcfAjdPjGhb4MTEBNXcIoHTlvkPUvTdigSiCavL1dRrElPm0zsN51JNelOJXjsWC5zO9MSi6x2bbXpkKEf4QQnUcJrtOQHVCcB0OkWHj4TWh8JyrfySZKUpDWFxUjrZ6gULvrYrE3g7y1B4aP4Yy47K/QmqEOCuXd6vKRP5sdUr4fEuWpP0JEo+IsvYLmKMmzqo5wskdaX6JnWgcrIhWYdV2UHEz8KTRz5q+tCC4axzKZ9Tvd';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/chr/chr.nocache.js?t=1669637194"></script>
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
