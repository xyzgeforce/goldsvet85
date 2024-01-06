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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/crd/style.css">
    
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
			
			
		var SID = 'POrzautlAoO5RNnbynAxws54+yXCUXzhzD+PCcqdLMmxv3p19SygpC9ciQ6pkCzNMBM6+xFLeZVRrHZAqULPrKjGdVvs0JixMwMhLKFfQfAsQpY3T7BgvJVuq9eimiSkWTLD7td0R/g2DOisxOB2WCds6pnrZ4pHIE/Mjx/YfLGC5E7eiGyy0BXp24oWiv1YzCYxeVzHfjaX9H0iRGcTfns6XQA8Ot3uoWqFIUNoq4ad2H90OJXR5VhCIVHrGsd5X/LV57pdYQGGKgozwU7siLXkVeQ9NJUUChf2y4wWNE7reZ0o86ELbfMtu5RXAMcwjuq/TmA+Nwi3kEArQzT9DfjDoTe3albbjTSGUvvwG8gMqnIibpoFVZg5whtFXbnwve+389gYJL7ir1tFunrQYS9YnxXSdnBkbmEd9lz1wStt2KbZJQ90lOsX1SEEBXU8GZ6BidoJTuLZTwtFd20PPxdwyjOLuqugfxMbHxHVTUPnv12jlqiHlekrkEsKcVgRrd5FhQJaoF883mo9L/thazQHGfUtEqRqhNGoqe3f0Py1cx2NV3+4HZGVgPy3sQpnSn8qm0K0zv6ujTiGYv5GVH2uX0/l9Bn186oXGjBK8844tp97gR43XmrwnPX6y5Kkc+wn12RplCPR19EoxX/W8STejOXrWAliMbyxbwaVArsjmBFC7QRDI/FCgLOGYS76DNTHqMey1hsinRid8lofUBAU2GPsc/v7QVRT/DsiGY2eS6bbos2Ow9b7NTIXKNU5rib3xgwSHSzi72XTrsgm4x5xUB/yYZJ/ObJ0JBUPHW5sxquubNV3H5UgvhajN0D5cqbFQ8d23DhkzkDg4ClgVYeV6nDKxO/RitiyZXU8m7TaoFWdI8pTYvbR3ZiEKj8mn/1bXXUgg8KwLJm31d2riAuxcT0TsRwn0C12pGvdmgTmxsaogtIuRsNJw/+rBy0T31PP0c7LcQnyUi9gsRUBh7R5eg6YE7aiUmDac6DweQABx7Zg7770ins0Ar8ZjanSeHKmSQGMRK6232ZB6AJVTy7gGLWbh7SPVoN7L0m47SFyyreOyTbJOAQDid3RfdsNR5DrbiJ3FBJayway5VGj2uDoKXSMLjHz1ZnC+Bn/qiAs6iTxYHrFIxgDH7RWi0g+0XZyzRzXhorYL5KV3Cf4ogDf6sHEjDJ6vaALfGcyNYh6knmrFDQS0Aw7XI9kVh3A0rw96slNniz/Ekg4klMoVXv3cYCPsrRkAqXsvcqtJFtR7go7JbjJcQLjEXC47CDYIqmUfzBsJAKNvDzdIRbdBq1N3ylLLiJy/fPYtY6pm0a3oY56Kajxf6Q8c44P1NBpyoEsMyw+Ns5bFlFROQnabtz8aTZaLC+odJ+dJapk3lE4MnEteGDaXpaGQWQoKB3K';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/crd/crd.nocache.js?t=1669637194"></script>
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
