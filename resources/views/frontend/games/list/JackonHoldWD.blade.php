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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/joh/style.css">
    
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
			
			
		var SID = 'mnyd0jcZfqrcxVxue0u4OJg5aQcU2hPqPGsGuVMWEm3LtCHG+2TU1d0jDioLKwJnObrGo4TWlT1cOMJ8rf/o1GKCEjuHy2hiRrRvDonhDu58QWMaQhKxchC1fuLLAyvYtQrrQbs7Twl/HsWrlbezNvtLTCBE3NDU5UL+fTQR+XzchURbIVOm+31QGgtlCDgZFAlpYL52fQrgY+lUjoTPOU8toIIcHhDOmau1t4E80TK3Bi5uGOEApt6wCv4YyM3ArdKo8vIyJv875AYMjhHc1nD74IShDmFS5fYy5Dr26AHhfJWiiDnZH4DMBHZmzYWbH4e5a9cwYRKahdLD0A9WfIACH7Sf8d2Fl0eyzPH+7DNNaYvbFhhqPIn6JP3m0BKtA8pmjBHTw+3oR6qQjTFdQWUxh22qju+xtsBY3jvIF7gcMWsLGIU2c172SUzO3hTtjnrv1kGoNz7s7HKL1l3wkOiAE3YpruYnLFDwDfKyHlSo311wm+RDxXxc6tuIekO8jQvpEzcBfnzJgSuRJDVtgEKkbFJJRGwnqSBgDg1hMerCE78TS+efyZYd1p405F2WViOxj0rTpKXolNAtwSk7tPdqmJtbSbHzlUGSmYHCb+3koIFKtyDFOLxQxl4evYsbWKErMQDpcnP755pTEvouzIEIbh42Nwq/3u5W7Uxxeo07OkhtPTlL+9ifYXnVG+LyrIpV6T+0HG9CgRhETiomUr/oCwtLj2j/fQk955fn6e3pK3XpadssYXzEct5gYpnHD84Azx5uumbLdoGZ36K6W7EFIoJnzO7BDMCXVk6rvce8nJ6w7JY2zfvNaOm1SMoIIep6VcxpKEMfXUUJteRlYG5BiDoQHcz3dxlDFrKBHUmS5enPzFIU5knmeK4uaBlh/MT2WUvTvHxSV4OgcYMcN7f+BYfU2wt/I4WKPdFGclQ7ERuEPC1R4Jf/wDtbj82Xe+d2pMhSTBmpPNRKo8Bz/ByhQfZT9r4Zk2pqm3qEFcMSHzFNEPJG2IpWszZ+S1Qh6TI/zktCDbkvELm7nxxYNG+2vcRwSNsN/pWLW9rtjsQfbeM0eTd80UGN6ycWnoJhRlB4Y5GSoBciCc7VpfZMFK+KGIUMEn/P0/Gwt3h1FlI56dtV0Ue1+8/NVQ0ftuYQu9TuUdSVKXfWBGIn0DVfSoBks39XiuifpB/X74s2sB059jWp8VIluWoPLIyg78U0Vtd+4AHT1kbWxE5zfipD8aX45+t50dYiuq3p9cH14heINw9feq5MGQpUUG/FeeNszKCv7hCXCA5G054CUIHdKeuEbYcnQoC4cWycO181+FWpLYmbbWCc89z3aTcdZS62qS5j2UU0y/joMr6fO9fuOJUCNol5Psaj4B/iuCst29rxZv8VHe2yZlMCHY9D1VPC';
			
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/joh/joh.nocache.js?t=1669637194"></script>
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
