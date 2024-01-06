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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/hh_2/style.css">
    
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
			
			
		var SID = 'ZPC1+AEJI9SQ6jFxsXpLv9ZiV4NXoPrjwaCtS/qqnz8E3khaXqCogTj/BZswmf27ujuuH5Ld4XK9ChYlVqcQrvQv4rVQ1ABUpIHzpsv9nE2PD6XTthQB4tdmmTPDGmUlAUjmzUrA1FhmnCbNc4fvO+9zGKFB6NNz9TC5q9qJDy0I0eUX+5Qq75jwvSJr9OQD0WYYCWyZvBx9f/Fi5bHV2Vp0D5LxlnerVyvbZesbE5U7sn0HRykJkGZKmwaXUuD3VcTEqR8E1xurIVAZ5BIAtAVt6p+9kD0CuJBwsV4LhChjRXqMUv/8+rjWcZ4t/ARe/M8Xv0QDHKh5PWfPBMiHSSycCvoCGJTOIh8RIREVS8uYJv29ar9rULO72Dk3LwklxX7ZsseOqFCDk5I08sobluE0YccGqZNYG1Dc0z+3kP+8ZytXBT2k5HpQpbHa1Kwy3tXPJY3UlX5FreEsAalCCbNULcLCkcKvEUv/pzCYmlSEqxFOOCJRXFpnlqkMJ4HWxEV1XJH/FViKtnv5jQZcOBfM4Qg7ERYHiVMqAnkMYYN74O/C8OkxrfZjhcya5EGpVWde9mrGkC0hy13ZG67LPXw3MuqIuQsZyilEg2ARvOgTbysq7MzzHmMmPMg4bBZRELe2tgseIk9fJ9vc2rSx2Y5aM+p0z+VvjgElOtNLMlprH2I/jhGN5Ux3bDm0etTNEILBWkLuIuvb8T4DEiTxH2GrDhv3RQs/R7/Qt+DFY3jMrS03iZVSsJ8Khon6ZurLCabramdtrHxAIJTU5fuky9Z1c1WiqcvUQttNohd2kV6RHdGoj2dU1omBWPQuKt69hSq+Tx9B6VggqU5QX2xRNEF6b/4XJlZv9OVcGzNGQtZI6cw+B9H574jzlcbl2D1spYSl8dL2JxiSMwKMqutYF7VRT4Qu0ggKE9VEc6ONShuC60znC/66h8mLiObmT31QPao0ieRaiSDS4gL56UbVEsLaP66d9z9H3mpfmGQS7d9y+fQLlFdV9m/XVw3sQO25UdIkpEfCxrvILfYmSaB90OlpnTIoW8X1t7nBL9u5QVOQxWd0NQ3ptgaN4kaqQjyCENOMzbngIoEk2zsQk4rytjZwK4uiuO9WGe911dQCx1HfMIclUL1qNl1yyL9uvTFHIukN+OK5SvQyEZqBqdOjT9MPUbEG0Q6P5KdL8teutCdXaiLFKCZGVTyxOiKuWJpFnyU9gZp/8bmrEJvZ3xO0tt5BDs0Zfh1P5ADVi/dKZxmFqwOvIRMdDGaDVT6gMWQ2DuP5TWvB3EbCC+pHOL4hdYDy5hzKas0dBwcfaxgeKsYJD58mUlYlvvd/9eCfcvfWNICvZj3AEA46ybJc7KP2uq9sXK4jnaY2FXXwD+n27rBYGp/Z9jol9cf3fCLI4zFA';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/hh_2/hh_2.nocache.js?t=1669637194"></script>
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
