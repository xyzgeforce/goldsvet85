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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/se/style.css">
    
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
			
			
		var SID = 'zPBqZ8O35nx7yYTYTWM11hHAO8EqptOC+phpTR3FnP0saqHTXGc1jxbSm/aDddi7Ldil92oc2xxxNcaT3CUSTfpXD7e8rmSsrgj/JyAjikDy/DgCHb2F2VYkjydZY7zXuDTyVt/PaP5hjrEh1NZ5iHCNOJzX1Sf164J2xQHvKTZHZ6s+2W8W81C4qiB0/XVeIxcz38RnZD4CfP/XfIdfMuFt8SJiWRansSqdWNjjgsucX3FoelA+68Dy+iTpX7UBOLN88kv0zPorNInSQuNcbmO200LXU3QBHPAoiG2VKXilzlx6C4tgMD3fdmvqahddsI5NY17esU8V/9hUYvLIz3K0MLbWuVyuf5q5Xolj53n5k5tf2egT1qmGlQw9lTWhfiWWaKZWUDVXVurV8fOBVnuvO+AAFmbNleFP5Oppnz+huyV9tC/RCCsU220dUngPX9Ifv986GMLaez69Q6gxdAWr4/TQbsIrpW8TUwfybuYAQBeEIyKi6XeYqOgNEUy5ciHEFMwqagwgO6Mg9nMLMY6+xx4mBIwYR7w9P87fSVbRZroHaHZIB2lud/CD4x5YSh+td4y6cWj2Ym/HUbjaoks7xf7vkIUHQ4DKpscy9NyNMyiCY+duwrd+aMSYcaxK59CL3zotGmagfZDxXNZsc5LKVi54mTi99UkFRdo1UBD3SKTGN1KPfkvFTQElggfukoIgMj1VuWC88hEUjof1TaDLh7yEKAyIqI2Rmq3QPJFAq2uO29c4mjxaBDUpoC++b1z5QgPFPaYqbeDbcVTIuMBtlXOIgk2Hiks8SUMSQeyYVnC96M6lYQGI4PsIwtH+WRTkiDf9YhnOgTCYs/irs5hotti07yy0EIqLQNGU28IAdmsuf4o6A/SZcSpAk/cZYf2/fEjedHzj8UsDBDeBfxV20/O2beQeV0F5lEHugNkEShTWLVMUyGRbuUAws1cmdAjWFv6k8j1grE6ttQawKmv3FTXr1A+ahT/c83py5stb74nhZq6QfRT0NU7gKmKZukYoqqw3CxTZrd6A7MWPSiYvmChJPL3iVkbzl35GOf6tnWsrdguPt+W1KKuaK7llg9xLvcc5HFHsb2KAxetBC9TJgI+3lf+9lzKmFA5fxe6HKiRXd8Q1FYUVuNUuI3guZ8N+44HzlQtMhAKhUNcJgAH0tg6Z+JWHQQgM06WHGRC1Zn5xC97FahDUcRGPcCwnm1j/qFR0YrapVOZN9acoYI2RtqPDiHbsyivmPEtb6oVzYapcdFgkRtolVtGU7xmSy88q9TnkJdp3VWSDVmpREJ7eEfvZFENLV149aJJbP/tUrzrBLj0C9n1MmBlqSBBcdE/EyuFZXDgtDpDemEg39mtfhtkDXyGQx096Xi4qoY9vGQud/o8uNHhAf84BvqOE';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/se/se.nocache.js?t=1669637194"></script>
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
