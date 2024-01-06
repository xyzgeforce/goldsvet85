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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/br_2/style.css">
    
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
			
			
		var SID = 'IJE7nhFznUS/jQdhoNM87bfKfRoqoBevGNVrEiBR5iowbHaHsFg9NXSV0WktWj0DILi0+3/UYYC4Apf8DyrVzPnPfks9XIgnjhI+SM3LLaUni/UVbnlxvBstLSneECJsAazPKdFMPaBwP7acM2KrGjLFdF/ZCYlXDdOlX7BBLh1K6sy2zVjAts4km/9Rtc6B8hpckt+L1gBTJzj4elOK/EPh5e+wO+6dlpe+PrKGyD33WVBKEKYYDxklMVWZMUxHW8iDqkuW4kwZwH9MoSRXU/YTayzg5fDVoQ8B8pr+qzPBwLQQMeqKOXMjm+8XIrPXM86LrfJfNvPgu6uLXkMJcBzuz8FQbfaa6r+zTBMmv0knNkQK7yCNN9eT+GNtCuXLo1/trHTlsKbhDnTXIEneYhq52VBrk6TXPMWsyLtYkBMiYg9zcw7Txz3FDKKPSUVhvpiVprLE6LuNkR37OwglvxnIG5WQYd4clTSHrIHdKy+vIQbLEqPku1c4ZvmDAB/R6QDJJLIb+eel62r3ynTzNCbVB/Au27Q7PlsUZcJ7CCXbyOkXL3CnGiqPZdkJI3fFYH8doUX04bTX9Lci5DNiD31N299NOEdDAr0p37NHsWMthY0J8eyVhZaGX5ZW0HTRbHWBFrmQI4mth96rYId3bogREKGRASAVVHyELjmrSL3+3oJsp1UB6DbkS4aa80xuVRxkMHaDcpnBQXEIGoWbp7/hSLBLGCUQdjElCWknCgyQuEoX3A+Igq8p+tHHr3Fd0hWpd+kWTNCpvmqx4BFcEkZDpfDrEwuAUMsTpRBB1KrkCaGJSzgMG30/fFnMrNH0Rc9IY/ddkHchTfpr2i9wPv7j3mnroZUKsZ6qAza1K6GyoV8+Lb2qtaYy66K4Gl5PwDxHMVaEZHsBp5w+1QiJfgC6g95FkOpgOxD0M1PnqitUEsXhUOEkZFNazae9eVU/MBd92T9WY1rwbxHbsHX+myigk2gWNqSxiEDqoTNFNOLw/cg1vCStwgU7qEqCN0H/+PqX38KWIqsRSz8tekY1FpQvmZfqfaVMZ0pu5q+FIitndjAVPd+e09nWbSXl7fEPfyleUX+HcU8Sh/yMTaCIofM3JmSi5lMQremL2FYbc7gPX+Ytro0h5HF2P7MbIBE8jW2pv0Q7y2cxcG5u1WZc33rgMPYGAD1TEULjD0EMvTZqpwrEc0qMJ0yJr93fRFE6zmUQF1WwZn5x7Gu5CHbxZbC6hAymRCzX6vCp10U9Q+LAHWK4MaGZDSgA+8ZiuZMyOWH9tOTXWjKyMHD1XQpKaoLUzLG+uMaSCPVZU1+U504Y+SECKI9ueDE/maTvqsZXi0N/livzldnYr7izc1nKgJULlN4Vvvmw6hbvJsNl3sbHjUNmCZXLpb/bTwgwJL5Z';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/br_2/br_2.nocache.js?t=1669637194"></script>
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
