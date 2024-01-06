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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/sof/style.css">
    
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
			
			
		var SID = 'VCTf7Xr3oygIpO1t/eARjeQV28H2ZV6RGYUavCHNNQ3GfVlcCj6N7ocM7VQuvvndpuw8u6Ev7/S15ijMfpSFc1XjhlBAoXsrKMQgsP8PeGYJhVegdTttGLsfiMfiv1cl48PVXoyfo2sF/H3YsJfCfLZcG+fHxgxWuhwRbie75ZXW2qgnrMr3FmtgQyB4G+H7s4qytRlwrkn2WPT1cto1qAc8ZH+V3IOhlwuyRRI29V/v3o/tUMVSNNggR6Shvt1N99ruasydRuPHCPRd+gc/pwLxitpwuJqlaNiWM+8vxHFcM9H2DQSKAYpmaF37AohRVqwCWn0rJ8hfH5szJAZ1VRyEQaWPnIflxle/p3y1A9uB3d8nfTnyI+OPOktnMMwKQwwFpL6AHWWord9Jg24iKO/ZdMkSK3r9zYbU+DhrcYttUzVSZK/vBk8A1faqG7sXR8haUUIVhYLja0gbWsqikV8NnVnpBT+wZztnXVjMMmLl2L0lnwbeResjGCn6Yc9YwtgDi/Pev8/AYCYANBsbYm7SQLqW71mVcma9COqjJG5o7HPT0tfxQGkeBGq2Zt6IH235ShFySsK1lxsFaJkTD+0ay54I4XfzesDfc2MlGAfSct841uxyVVReEpt/ZcQVcGjW8SLOun5xKNu7u9hP20xAshcDU037kZ4X2qvTv+4Y8CGxErq/Rn97xZwRATAuGSjW+ijE9Ck59rAc90vJznS1Ep70uQYnhepzzA+OT06yu1GnN1GA6BISdIXE4nscdosUAJJvbpDIUSSbGd0YIGm/C8sK+13XA5wjdVcCyrFUfp/WD1xckY1Rs4od8lSHTim3PLr6fUT9B/2VZ+0GIKaxLBREyXGPO/Cd5oTpmVVqJf/PIcHZV8/ckXuDE9lScdeERj9TnQy8Ui41Pptsl6a4FX5otwVWbETWn1muYJXLwPXZkxWxVBgwefdesHTWl86vIcU2pFMbiggFWTb0PN5vjwWDJmolc8cL6DLfpdjmc6jO/yWmmoR9KB5598EBuhzQ3+gPRpr7PMVC6Ca0ignC/5Wr7W08x1KokmLr+eWrPfuLOUX3L4i8l1S2FG7vM/+4K2u9eovqgPubiFw8BfkdtV/wjcKrJ7xr42tgKukil9HCGOLVtd10H6Pa+SJu5CAUPlmFwEVnz0zYwQHNewmBTz+ZViP0qS1hipNvXW6gH/Fy2k5oVWTFhJPPA+4/qSG5nO3ikANpsasxJhRj1UJRTKXAMzz4aXkCPyobk4tVX+LB6k7iK+vHOMszP54Xc9EcGgVKSvXndTSHuAC9Vv9sDC1P5BZn4YGfs68emjeanZBU+7u8LwmgOfpVk9zto+oR2pf4ol1JfL+8+DrbFW9to60sUZuh9hQd7YphrpeZ6A+zSfFICPq3gCWOkb2aJ7SRHH6Na9f3W3uX2li5pZlYq0AW4eqbIqc0wp8PUb8=';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/sof/sof.nocache.js?t=1669637194"></script>
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
