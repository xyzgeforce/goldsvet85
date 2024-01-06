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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mp/style.css">
    
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
			
			
		var SID = 'szIiR7RXkdJDQEqlbfoOHCItq/pTz3QEAArdMfO9UYY7hx5mAehWcuLa/bk6FcAk7UyntCKP1dat41m8CMkGhTCO8BEVfdQqfQPG9mpRzxPVd5Ys4Y974mf9r8bPvtudTp6a7n1uy4grujXBcp+TPWDXbOYgnfYSaH4Dulg/xiPp1foKacwbiggAGgC4HeIciFVvyqHP43hX4Ws/2CZnr+7Tr1LX8114lNer07N/qfFlrERaQM0LwiHnRaCEysRN2X2v29HhOXllrMdyGvrOc5K7I806geWRDI5EnWen4BiNA/LHgvAzvuA+cpM/qSxHwow6Ce3GPIxRguzDPCK3kAomINlJUrkJ66ZjzO9ggin2BZoX5cAJGyI0Qld/XoBUzpI5hhqLH1B29oCHemNblEhjYxtV/tJgzwlFw+pTVvFMxa7kHylD1IfGjfmVcMI+htScX2FZKDbXSk0+jL0YUXtNyCh8Ls/qTs4LW6OdXv+3j5FS80DcsvL+b2a4AbfOO9I+jHyAg2SbVoTTuOuknYrPTeAeG3eysJBWvw5BC3hXpZJphivJVsz6FPOR+SUsZs1112werFDSdP0C0w2CKctj5GpCMeBcX5Bf9dt3wO7QhW6srz7ufB75EjQURCuB8ECSMOnatZ5keN+mYfyDUBu954cV6ecBpHZ9itwAmusAbDfLSTvp/50IYTtiQIANeXrMldnRE79CPGb27IFXmMas4G6usQPruTVOJsnYyZOpQGY2gKSwG/iodbDB2bD5ggAMMu8NdZbWSerS9TDsqGggqGDXTPqK+Z9YO6ODHVopUaXPSbd/rfuWKzWd9qTsXJv0QyRvor2J3A7fYwU+UEX7XoF+X+s/Keu22hq80goo857dBcvfW+TNzYTABFuAS54jo94JGpxVEOgZncKkRd8hHBlwnmjvLLAYZzQOUEKcsdDqUz08s+OpWkcbThsxk0yCOy7SBRZz6EFak4BGCEAQ9KxAlYO2qU6lMK/Gbf2ZfD/ZmtxOJcP2dIPCRGB+IBYqCQdSk7wpfUFvpBKjsSIHbAEn/HggPM3Ho7XgFx19nYHei53tCiU5wrd4siwjOJiGSOFiOa6QPkGr+JheqnTGOTuH1rR2gQeuimVTosMRrI2SnmboGHoECHiGYw+PaFQjluOmASiWQacH5/I2VjQ4r+z0RvaKCceN+VFnz4l82v6f3ExsvAIZQFelLDlz5m71MGRdV4cqdSWDUj7l9N/YoVkGyLyxtTjJ6Fhwan3U+AVZoC10CpOe3l3nYB5zLrMzf/pAGCndwA85RoBk8EKRfghtHFhCo88XAdW5gGaDJl5aLCPaZ0yue/bUal/Bk8LenwEVI+PWnlhVYk7n/Azv55EWZFZ0+jb3bqNOf//teMtkMfNgElnmf+GEOuog';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mp/mp.nocache.js?t=1669637194"></script>
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
