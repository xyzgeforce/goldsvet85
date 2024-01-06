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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fm_2/style.css">
    
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
			
			
		var SID =  'a0+LXyX0N5juWf1BrXrEf7WDTReVg+dcROFdtqEVfCY6RvJJVGo8xqPS9uF1OsKo5H22x+V+t6ndBKUBFwk1z2YH58oGXk94rUOpiNJQGh4maxueNcmR+YKLMI+tMCXFlI+UL0ouCN0DFih5wElebq1/3mA56OgXkAWNJRb822iLvsud8WFPandNpA4Khj2oUfFJUbo/qli9xfa4c29COWxb02tmouReGdQYoe9RyFfEuvjXerZ3qPoQlsXQ6v7vlop3OWBY/i5lSaoTZTZT86y8BF5nS5S16UmGiYPnIBJCvisUHpsCFyerywxGXoKGJZRwkvZKpA+OL+NCugm6mf7zYhbrpgnl7Fy/DWmzmllLktFtscPm36XtJFkrzl4dz9bJjyoVLkdKMT0PbRWd3/iMBdCfgLiNPpOc3BWQgOZOF8T1+6DsyTnBXxmZy0GgVnEM2ttAoKUkIeTxIWq79io8m2VFB9+3Cb/p0aFhl2FF3rrR9B3Ji7xviz4PohcvvlrRWdciqCY46cKM34vBBumfASFvuzV6Y5jJbA2EBWVz40VY0/VrDO/gHmj4lxckSbYjGit1uQOV4kJfgMfUwBLOfnbguBt1vYr2m867kKq9cVoOQFLT4e68QBng8C+miGpxipUr4C2e9QYFSmd01Pu97HccYae//sJ1e5kj2pZJGMJO/r2FQmbjmL7GpNuw/vWhPtRb81pptXdXZVQpEeCSyWTSv3ST+fFQQQVtdLUg9Scws1X7z084MchEuDpJDC3+Xgdk+aHJuINJ9BXRDxMxEVR3UKYyC+FID7mIRmpkosSKo0kDNhIcfhS1323yc8a3qvWmoFEZfr5Kxm2EFc5lqMEDo/atmi6PLEXcd2UctGgCX+YFWgMT+IsODl9S7E9ueIGIPk2yWNXvW1s2DGhQlN5vzLLCJelqUDoJ1YxIsB9KdeyLO6a3WlV9k/AnFQcewpm4fR63tfr+rNzxgMQPHGI9qAh3kFo6ezXJqpqF66kGw9N/ee8MK3G0qkeIXdi9TLV/tU9NODu9FuYpTmhsYIZYqQ3d8BRt109b51b76vhO7qi13JAL05i8DOlQ7btH0qwwOi54K1fGIZFhlNLiAZaBXfyyXp6Os6eTNLUIoizNVrAfkMAtSpaHv0KjBlmtoLWFyJgX6oe5tMqploWJmk89N5iHjyrTSIXepQx1ILhlhXUQPY/p7DJ6foMIS6Yfm4ipNVkufb13/Efjp4i0n+P9SenURDAfKhruTsgDI8qtPxBu/qMWLXYeEVIDwptL9qOMSOtR1V2OKK5We7i9irCLbPqstqJDA/fEpJu6nvtsFlDkKgVTkKrDfT7AnFklb6vPA6iJdESXTPgpTFMxaIZ3k9u+FxxyuqXAHZDdQmaYOk5DL9KVOraJYVYy';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fm_2/fm_2.nocache.js?t=1669637194"></script>
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
