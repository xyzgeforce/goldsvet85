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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/jur/style.css">
    
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
			
			
		var SID = 'X2GWMLNl2DyWrIR5SN9oYDsYr488Gqhi7xSDWuurafZuzFH13mryt224WlzaZKIeCEzWUvSKlkikEztyuE/Drkl0eEIW/D6ykk2fOkqPoDGSUnndVO4sm41gBjsISszKpqPpPX5I9pyLud4mPGBxOiWEmz1pGJ3nNvhv9g6+Wj4u86l+owrix6EyMAmSWxsAXC5sQFREAggI0ZCRMl3O2Cbiw+UMOWO9MyYeaeN5AV4mMDCywdjnNCRbIiLr7CraeQv/zf75PtArICwSGjVGStyJlRNoQ3k6ILb0xix93l3hgWXL1buEzh5wMiulRhQeptsQaTbV+8fa1XAwXH06f3UXV/W45ZfDdwNdW1PbeXlyzhzsNVlr1drVkX94zsANtFE3/15b1c1qmIao5TKuLiwG1fqiHqEgpClc6v9MvwRK4dIw6Y4cNx/3pHdO9u6GAulXoBgcpVEVxxV9oq4e01OWunKzjMIOObLfN7uuEBxkwYGz1ye2SYL1JuU2cwP0Riwxza1mfHrl0chz3Jwg3Lc4EVmfcxobgvQRAfVDXm1bmwMK+/BMi3wjOHfH5RVvztICssmzM/a+oSXrMEPIetWURCZMEf2ZSrYHzfCmRADjBRXKA67Id6fXXkdvuCPJN6k1z73yoFTAPyF9S0dG8zd+9M6EDUHWQUuEy1CRlkX9v1MTyqhmV0OSLavPfcFUHCCQk84fXsaBrOK59fphxaebPanY7IIHu4kXI9TggJYPsFg+UOBNHgQ5j+FB1AbPc6hJFjQMzHI5HDouGv5u5SHYXYmpApnmcs7fzSDV/2bSgYJrR451vQsp2gY5TUBJJZnxA4c3jsu9IwEdxCfThaUWUdw+J5Nqtu1f9otvShLL+oTNaTreGe7t+RPKqZlv3tVeeN77zEDtpV4Bqe7bdimdnJhEKxwytRct/2iUcC6TmaAtEp7bHOJi2PeFQTJTNGRHNLf4AheNbtePRzLvoxK4pDNEF9d/FCf+MGTJ++GoOX6NWBPrZmxLcFErMfaT6Klp6pbsxifqvv+WvvdJyzUgDLEMiO7K/YQr+MF7rcUuFUgGCCb/vkAu7RezwcPRiJAdIyGpF8k4ughw0LrtORv7DrpqbEd39VNX6G+nwW25w4oChkouqeQQyMr9Ls0La0xDtdxgQfWnStD3dZe36S0E3n9v2sjV/O8NtpIbSb+kod6k3I0tMCQIsY+7pfiYwttsiNwYoL/jOEyGKyb7nKZWdcGoQSTmsb6UvQlCLwhaQBHAW8XH9/+r6wnnR/D2aHtYEVOgSHkmcvRy5DMoHXGuquCRhBMmHR4ZU5m+FziYIzyzjZPJLnzoNqf4AByEYF7F++QSXxOp1VEOuzt17lV2A6O7ZFPdzpgy3cxcqUtkXznCCeWiOCk68PiuJBZt';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/jur/jur.nocache.js?t=1669637194"></script>
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
