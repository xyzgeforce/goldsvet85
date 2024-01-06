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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/cl/style.css">
    
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
			
			
		var SID = 'nlDXmmweNauA2qMWWOBqEOJASuuVL59TR7zzaW/H/gHldXN2wTdC4FCc1JWN3NjnQjHGc8LjM8LT2BaNO5/t8b1fh7RyNmO/igRYqaopUKWAqTRrZwDC8vSz+0Ky+HQHjyTCF8fIPNrafOU+j1pqehlB/vl9wDQDUlGaoueg05jFKOD6XFDLhxoG+cLS22uF+KiYRblBnL36fQ8iVp63NdBi5upUaDmSVUqL5SlmgIL6Tu9Uh7HrTArTTojDrdwsPA6LL+3Pl9tvgZXmEhsrR0MB8eYMqpSpb3aTUsbtu157Gk2wKzTPgeqA+gt2nvQ6Zp4Uaf9iBLPT0+VkJAx7mixLURuUMw618hrZ36JDw0GXLiNwVBFap5MbFGttQwUL9SiSt63mR3aCP29/Zbee81WlpKvr2WsxXwIgMJ03C5lta3b5qM1AzwiTqJa20tHuFBLHRtuSAySgidFZpeF6eMIi3CJiqMltjVpS2iC1+BFYCejem3f8YpidZUyESjTM+8K0o8jtdsDKDtUtojCtNOtzE4rLcZNjpkUXNgDi1MVUkhPqF/38VZmkotE57PhYiZXHADqxiqgRG+lih+wISsnwt2SgvyBmjJPKzBwbAoSG4Y58MaxvsfVWreQLmQ1jWUsG4jCWdkehkT04H0UuKxaRV2UYSm/Gj/BGCkYl44aVcRIj3QMnixPSGKaT/y12VB3nXLVZAdceWijlAV0Y3Yu6zPLSPAP5HCNftKy75uNo7RufF/i+GNshOZhbmiuzfDeKnV6GiHSm3+K/ljH4uYfgWKNa6IxcHzCMR2bRmnAxEQlYILb67C538agwpNV9PXr0X/IsRbIy19SQMzc8KXATEug1E03yWTrvzq1ZQWgfqScIPMoi0j6VG9cykHMYLCKI3kfCfopKGLHw//EiEiEuGL2G+ex2HXPB8l3c48PpSuIVccnHssmL6p/oU2klsgzrF//MulKJnlI7R+Z//60l0A/9ODT6t5WWB2wV37kDyro+l8dGDUcXrfZh48bEEOK1yq+K4jNP9QCGhh5aVaXNR/pm7dDf6NHY3/jqLozXi52Oav8/DeiJIEB19vHywlLpUMKhCATmU81y+4a66icGOvvmCwP0WVdB4WF+XLf31G178VJi2x4h/2kXTaDD3h2KBYeHTPku9Cc5Hzyv76UQx66gwEHQTNylAFecHOtZrFIhUJVw3Spi/6JFrwIDQ+Ur97Gq+r+GLHpaUT7BeCIGRMkooVTh4+ALsPjhpMBObwmLNlckJ1NhaRVq3upci71ifZ5nnvmw1AbUbbMvw5TvxKG9mlT/FYQ0r65F0617c91ZelKKYTv56YSUSsyigLMjg2+D7ivxOKWumz5nZp3yDQATBael0toVf5SfWBRenTlTo6PF3vjiVG6M8WGQ';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/cl/cl.nocache.js?t=1669637194"></script>
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
