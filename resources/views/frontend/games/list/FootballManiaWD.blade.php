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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fbm_2/style.css">
    
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
			
			
		var SID = 'cz57gjr6lCBkm0yoxh1ENFEZMT2DK/XyIiyEPvJAhUcJ40buw1NuINOk6v6oXjuQBTssCT731WYltZUnT/VJBIZXI3CLbCCidH5ZihAIgVxh4rmeDXq4NGRTw3WgPYcNfIN+Usp4c5h4a7m8yOf3dyWm5/UFOAzMPtmPmIbimaBq7gaGqtXcIBCRTxH4IYvU6C0x1Gqs5PufTPYjbjKBVadG/vXa8kpx/A7kHzftjk2PgObJ2SW8gGkPHPJ+CAzDP1JKTzsXbcU2k+zI1m1Bp8ug+nPKbXa11jlN4UISjo62l6ium/zaC4wNbdgbS0t2RHSjM0D5BCUquEiI1GHYL3j2xLqC3As2fpGxJSSB2edQ1ZY+NwAzje9AcIgACQTMh2i0RgxvAhoK+GOxyxopIAGEbMM1RrpIrBVLDoZXO0zwP1FUOPsp1oArVYMjG10ifBWCEQe/MDff+lYL8THHzzAXthR3+o0lQfjXylcPDGYCOZsSQDSCDIpbkm4wT+vUMM8ZET0fuJ3vODbdrZbCwFgOhUeyEZZihxrctI9mpfd86rG9Qqre8GybBxsTIuq/z+YlYQbVqvDZ03xtKWe77RGjZqIIMCD/ljNqIxy7NPjqBKkNFMfF4tY9UtlVsXDMuLkvfRXI3h7JyU9GxESp5vgLajXtdWirYTce8fLuQlHKYZdsYKL0LgHpNyZxYORAiOeQUx09yYGstTexDVMFWe+l2cgqI+dfZwT4nSGLQCiYVWsVihlif3dC/1Ph+n5R+zzETS5nhS3qEdTcQZK7bDGBxsXmyGTlF15ljEJt9odnIGhz0vyQcpsWLaslyCROV3ZGyDvTElyJAeWyYtK6QsmN05+VBeXQpZyCQ7ZmS3jpU0mbjcOBptxourOVejnWDdBLtBuhev6KaG3n3/ASNXdG17wqcqWhPoyA0dqdoDvTYHq/0ojrhIxgg/MvfVtcaIYekQ1qN0ZdmRKuvKp2IVhEEtutSgrYTrjEu/+UEJiHsqp8lVx0g+jkGxnI+wkP8TMMxz89CcLXuclDVPzwMmvNxVcPfPNRQqRk4kQu6JTalkZY1jE2VnofOUNYH5N0w2Q9WPtM43MzcDfp22zV40yUNl8Diky4pyWWxqRLWvrmTSRcAyk0IjibQ4TFL7XVIfjszKQx3lFQ6UVedolZsCrpmUcb7L7xZNj+KnMgcfrgdWIFfHl1qwhhqv/SqcJhBvxWK4hqFG4jD6wgqqeAwhBiChkCwzjWdcOlBv+9vuwIMZ1/nqSo6/7kVO10HCosxeHbdj+ROz1PbA0fmKQ5e1b6ljb9KIdqZGlLvsuH60XC/OJaDAKcSFaxzgfbBwa77sETXpv29MSmcxV+GhFLHBsei/WqpkStyUCKX6rqgbXsZQMn5xJ2zcTVRznWYPiG';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fbm_2/fbm_2.nocache.js?t=1669637194"></script>
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
