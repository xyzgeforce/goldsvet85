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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/hm_2/style.css">
    
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
			
			
		var SID = 'wkWheKeNfF/DiNYke60cjrOtcImE40Spqh1E6xlQAMcpg5pJYcwUFsgZ0v6bsBSe7KJkqxB7TSHx4m/cjc4/KNx541eSSaTYSCjEcoU3e9lVkl8hAUC6WJeUqWT47kvytsT1PzQh3i3Mo8ZIBUJc45XHfiKWc4AzbZM4mAVnu/Ldx/3bxZ18QnepDmmkRuD140zURRoa7kMXAn1tJcVEZlwk2l0lBeQa5cc7Pzskem4y93xVVDQ+qmhvGUmPpwlMeka0a+/ONAvAC40CKyGtBjlkIRSvlDUtHk+7oIFiOAMe0jEgA+DqICVEnNRmvt+0NMuaIXtShfcsUcKtvZF9WI1M5qB6cx2cB16wnIj0c2H88EFpPuZUtM68myE28qW6W223q5eGGMxAJwLHSYnrSNcUg4CPfuugSPFuLsY+XDD9DeAYd6vNOH2JBtj6dNEEKtSxnmCGDkYUy2CwJAxSwHVGBoeBKEkSF2SLLRUlcG3A11bW7XZsO76KObhSssP1h98tzL69I38Af186x49Em08GeRFHIFbSZe0JmkmtJJSUoDOSM8xOa88HYrnKsW/NT/0mIOldc5H0GOBhEkhop+zYeYrjVzplHuwuinn83W/LNoAjigivxO03t0nc1fXoVCwVTcvuwxNNWtq+LXCSeorsmo5XC0VStVfQKTZLBuyZDFE9uumx9EPfBq/SLj3dZYmv5F8rMdk9gROMDALssnCM5MBqT95ZRzYKi5GxCbvT3b57pFCLQcbUkk/SsCUkgXKrLVdCveflq7VYCI5T54NHApJQ9Ik0vOndAaKUvStXeaJd8CHGRxNsKNZyK/quzOrG6hpgFePetyQjfv96VaY48rMNk0amIdnx9251BkRO/DjTA+338pyEYuAbHuIg2msFlbRF1YmjCaCZWwqBWzbHUBjdMkG0Z2oi/YG+ZCFgRDJ7v1PDyoRxjmB+pqxBcAc1Zwg9Ggo88NITxyL/rgvVXxUeIR0ZmbYWRaGHwgzyVIZw/KnOM7uG7/QptfdXzPWwL1BgwS3nhiTugwHLXdB+p/HAyyGqbch4cFH84QUJ12Ah5FMsto1i438f5EYi4FrqgvUFQ/qRL/z6AEHFO++gdSpACtfqvoxAWBSC4i/ckpKPNAHnCZ0A8UUA6DHVhxtpCcPbamGq2aYwJ4/bTMjNDbrpSbDpRynNbLxOae6mqQP0c4vDf2RXRDrKp5yzi6qtCOvFRuBAyvgRGVU4487mnBiBdECcrCibsBaao8pJPtSCoKJYFn6Jh7t4Vd5BPfmxvNZzPWL6SCziIu0ym9ar8qFZzoDYrjiLc4ARWAoz602MzDjNIvA3939RlGIe4BtODMWE1pYB70LUbbda5poPCVeAD9AWrXiXR3oWlSBLbiAXDqqCor4xSALHhuAw';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/hm_2/hm_2.nocache.js?t=1669637194"></script>
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
