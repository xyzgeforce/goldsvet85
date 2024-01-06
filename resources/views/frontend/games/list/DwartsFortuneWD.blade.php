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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/df/style.css">
    
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
			
			
		var SID = '2sDSWF6f++J+yDmp5SS6cQGNVndXguTOkdNTqjnF6mql4R3rNwYnR1S8shLjKtPPBK16iYLrmuUOQK/u5mDLhCj+ZPeFOrKk8RFN42m64HMgvoDzZEHaL3FvCioiOSvbeqN8k0tZOUlOxRZMHmSHG3Eji6KmgiYdUFvLHqsnAKVDALoZ3IfUBulQ68okhgvh8VVoMUWv0iN7WEkOCVcMJr5WFwZhq6bsj///QN+sr/7h2WYryUVyZFJxiLo9DkyALS0hEmrjoiN1X/aujHg6d1NWqfZ07r6V+WakXitdFL+DbUhJk1kbMCAJfu4B1zuXpxnL0gbpH9ppe45pYDss0fMDmWd6/Z9CptdW4vMiWZ28DMt2KhF0chg4pHAqqroilQlmPBaqSHIqLlosNAj8QO9XHnk8v1fb1RPNhe/ClVL8/qMbVNo2NRPu5k1jf1UUaM5gQnLrsAvDZt+B+ZbigvWZlONCI/OlX7Q75Kp5lp+mCQpONFMxXwyF2su6VGrYzq81JxnVlOrPdBsZzYwfkerSUSmJ+oqjVJdHstQ/hHuz4XE3vhxdTGbmm90TJOc5YyjdhZd4vbdVsyPRxYihhxA6/h9HJK/cQ9+fbE9FfKRkj2sACQ8FThDMucogcUkESbLbd5juSGrrbXB/wLNSJtHIXjFCQ2oApXzmFNiugfZ9iwjZAj4ILZyoNXo9m791nj4Eo29LJFN4NIg/hUYi6XsLpk4KNwaQA46MrfdUGoBnsuJtxAjKaeyG3D2YLU4zxv32CozsDbRDaa6dYxeEkN6y1NSRl43G0cglF+JaMJrfco2PM8361k5/9GMsbG3MammT63FlnX3vISKY1eyGbkCG623VPcVHSPYR4vhcxLLYM0naeROgo6cCiqFIyt2QBuWqlrTLRqPUT3ETiNiTR+Q8T2+0SXbg0VvgR68+wzbWoO0c3B0rzlantvjyQDX8DxPR0003xvFdwWG5Ct0a3lF1Vnzs6/tFOiUdfoePKubn3FA1dmg2JySa3Gvo8XL0yNUrCx7rjD/qgRZJJnPylf1u8wwjd6ojgxMWl3ELYL8kDRS6tHeqqxW9Q+k3nle5/K5ZMMB42PsNVMuVlW1Os3jdKN9VDemy0rH72sgOEciZdy6lXPSNRlFtirz1V8S0uyy3ngoXCDbBsM1ShNR7Kp1NT1LyZO4Hb+W5ePH0Sexnhnd1MAAp9/xeIQMYi6XRNbSfIFaIl2v0877/Pm5HQjFttoR2vqCV6QiO3CCAI4aEK5+YmdZRQJFJnIWAIfUadoPAxpj0Pl5Qp9FE+HFLphB5HoHVyDCiuDvtTpvKqIQp6u891CeDgnnreqE8a3HMPvqFnWepWyfmcPw8+sZTOVCZ75+YaG5aGKxEsLc3Ulga6JEOh9oI0Qx67t7ReLhU';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/df/df.nocache.js?t=1669637194"></script>
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
