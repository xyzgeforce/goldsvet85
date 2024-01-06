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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/sj/style.css">
    
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
			
			
		var SID = 'imeYyAjyD66KO8HFOY8BWIFJFUsOcVXpcg6PxsCZoDYc3fOlkZfFJBtOe9tZirz8CjOWfY/YZTf337kqfx6ZleYlFw2ahg/TjzxoM7jxGuUChstl5dSesgjVavJBHlGQ2vD/cL8/14sUGnh6+24yMLZlBi+slarTGMT4U0ibrIeyV7IPo8CgYdV7BJGfpuMf8bOEl6BELQpWEzMA7Sei87bHFtuEdF3ecYFx+i6uB3eyhP1CXy/c66liC9/qEqIaJ8fzcch2fyXrB7COu7E3cdpo2KLCMEUhmMUcmwuWhoc3MwYRaS6Cu88YpXGnRIXm9OqUgwqllUldoTNiNO8izBIHSgO8y3czwSWfjPTOZ59ekiLFuyNuUYKXYvwmW7Mq/xlAmJIDOn+M+UPtOemG8eKkCcTVcieL3mYaJ5JMNU1gjY0tBdNLpbNygItsD+ja5RhRgY51e4Tsm4deAzS71+Bf64lKJSSXQB4AvxZ+3CFADm08yeDqcau6tk8ZTfhd/lPwMub7miXZAVNjQRwFibXqGw/01II4qA9FLynYorBFLWC2Mou+kPIlgC2h+kf4N1jGdOnlmvOzz+1PV1D27WRWM149lVTBdtxbeeOpISnp/gF83W9xRMbCcE2W0lhcICYU36V9wZ8NMGM0rqiV7eLpuaqFFrZko46jR9Spk2BwsLBuG45O1ekoIrAXpUnM3C8pNqUYh2Qux1/+8Lu3EAmGCJ7+pho5LSIm6rEDX38Squllowx5se3Mlu+aNgk6PS29c+gbY+ISpEsokRLyYFo1fVfk3X+Dblx/GdAWHtST8QCfyEtI+mhoavdHP+8/XDwZXubXB++sCzCTHyxbq36uWvXQuupxsldUZxZQAPgF7rUNvJIBXvdj17Ta8bEmwF6EVV3GGLCMr5Qv+mOEUhZnK6W5PWr0fyZuc86Uxj94oJs1nj+h6XOYrRPfhtWZ/OoNCJXbg/qyA/jwrIpQCxqvE38XtwFydlLYaMKjwmjL5EhxERf0Hcig1Sv1q1NRJOBVIfLVl7jY/PQ4ANRjyI4s5rkC3wH3e6dcAfnwZDUdgE+0TbKUwg5Dpqg7GGh3FnVckWlA+R8U9KCCRodhLxLIT9abUhmKTSjFZpFbdjsWGrdmlCqjTLWDLx4j/Em2Ota1h6maS4vZPl2ZjEJatJFXZ+MLVDxZcYLgbbpwtZiphxCm6hWZtZnrOGPk7kHW1f+QV1Mq/uVsGF8FXAYhfpM/YtrNficFGDGDJhFFTzB4NsxFo3jh5oJj+5SjotGx5Je633xyoxfiDOMqQdpRiT1/fqDZx4vhN6EARHUt8gnHTBKruJH4th2W+NF8qZb7PGMIK/pNS2MKG2WI8O0Gtj4Q7xpKZ797cQGPM1X8Ji55QrcWMx+FTF90jBxKTOjm';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/sj/sj.nocache.js?t=1669637194"></script>
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
