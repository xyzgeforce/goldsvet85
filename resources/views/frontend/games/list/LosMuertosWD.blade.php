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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/lm/style.css">
    
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
			
			
		var SID = 'vMcbp1ucLitSbGMFiBfzmmV1iAWmvFWn5eFmShIebs46eL2lwSJBpZvtynr48Wji41CCsKruaCxWz7qQ4IsWxUB2KnN3UG+xHNc575+UgBtWhUugrn/PxDhdmQJmN9ZKFOK7TmObi+NiI+o+zV/c2TrYme3ujGRKlzM1lgbluKqctHTsRX8opLkeBVQyH3JmXg/yZXG9XmVkIf60LEMNsP9DFwPpe7ZfQzSxEinLZ4qiMmCHcqLp/SciwQZRgkGvTpmdbUYMazPKh4lkzlaXpI1NDb1jpQ33KCAEQswCsUbNaSitcy3BT/W8uby5kH4fqKr1AGH9VRFwJN1RJSrT6D+5EE6cZzdjjFkRUc14CQ702kcyBUd2VdBPofyzg8xulJ8FA3UEtIPn8/ANk0TDK70GbP+BT5CKvt/uQ2gwkg0bi7mt1snE6a/mAIdF2Ti+Spj2Q0ZEyp2v1USchA0oQbHzxoraXV3KP5K3uCy6y75axB4wmURO+0ClrQ/wakwiDwrZ2vN0lQ+8iNZTBNndVch6R6Dz4/tF+hA0tnfyVYwnqwQmBx7CHGeWh6waCJ8ACXft2TkuXYvLXtXOE/EEtBJU6w2s3gyG2itDA3a7emywgVpsCULSkV856NOWMLxGGnlpJVXpvUzk2TayOvCItAbEhvomovmWecwOrHYgvn9iE000a4ha4TogSXDGIDx5ZxAPaVXNpiy1S+1xi1oDiHlwegqYbHNGNEvVF61CJciEBj2ugP8g8gWJBc9vvaf2Km0XCNOR47FX4upISB6AmBhnUt6B8DrrDfQbHsb8laUKBin8s90N3yN4akq0iMhc5FaY7yVs3DvHwx99iShSGyX38P8+uJ1l598vq2L6883/6rhGIPLL1l28qLbsppHg/K7445vGNv6hwoiGW52odHvlvm/HiODDX4xcLMY3BlqOMyNw5fWH6q592xc0dPHUuBezma7dbok8Zvgo1s9LlKAz5q7j2mBlecXFI7GknGk7lz7YZL+ZoYrTOedtoSCzqMBPzFVZB/+byChcZD8x9OMtGGgRkGB4N/eUuA1RPMf7LCXfdBMInNq2z1LvPc6q7fa3LPe0hvLVdHyZPECaYqcCQ9sqaSubvYrkt6kRsD0Ikw3WQYFQP5/tWJcd2iUdkBE9P3P3IMVb1ALi6sn2IuY8mgj9eb8u6yGLcXgKFzAJ/DDf9jVRzMGJDCcd3f0ofiLpGqXsi45CW4mn5x46COkF6sTdm5QBPXtfqlMb5Gsp6HxucXHL4nDr+7tW7WH8L06IfiS/VzDN1ixjwM5nn0x1FgGvCdm1YajRCYv9Z+tsT6iSa7Tq5k1R0LIhtrpjBo3w6QgoN/Lfv9MUdDLAiLzKo/1CgdiZxePfoQVcK5RFbdke3AHaMQbNYk1bEZet';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/lm/lm.nocache.js?t=1669637194"></script>
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
