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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/war/style.css">
    
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
			
			
		var SID = '+wB7HsPTpIuhsw1Au5WG+KzJ6UI6XW59riaTjh1HN45Ku27x61evlXUFhIFSNE4fTqwXPH5EKfjmS4EnJge5Rmj6gVHAyLycVNiY9jNad/Zny/Z+CTQCDyKYPtjt8ludgMhFF/yBwr669emJq/alDSrog2h83BTgX9ESMLtrNh68KjB3ZkqboizNtTRZr91VSC+cH3Cuaa3Elb3BlB2mRqoDamVcnVcrXhs87N8wtR3kx2ota6nfKD7J2Cs8PX73XZqPwovmp1RvQ4Srh95F6b8TqyQH3lhgdI43JzUDrNd/q7BQ90MooWiK7acKZZjvZ/8T40ktTpuxVDVYUtLn6tG4K0Jk88UxLbQOy6Pylb8816qLGqUEKCh7KwOc0Qu2hMioERMl8rnKM4+LFh+pVT4zr3qbO1MB4L4WypFdZQizP1HkpTjElyJywEmxw/2Gxr2LJPHvzIvLBQItIuDCyCc5HgY75qDyFObpEYgrOQYXi8jto5X2aZuVaLqxcgmqYwviJYaxw4mqOTO9yrvdfUo6Hja/vrrTcwGTG+uBHkNBCiUjO7Hz5veIKyqFL78Oa+DdlBbl0xlk1GtzKmd8JY+LtvoThqvcV7DJko1DD5wR7M6dTNXl5iFsu5JirP2h/AFed271xRwlYSwFmXnQUYVuqU2f4yG6Ths6f/yyACjS/iIRkQzxsVNdQJic2zSph43XEyT4W5Scy7WGF+cmdT5hELAqpcksAV4Urz28ZR3OXN0BqD73i1QkukWRnWtkqSSYlqGfWbv0BVUB4cGRf2XheNRGRWIgGLP4egM6kCbQLvFST7cGUQJ3sEI3R0FlRCb1zx6mIOJpajfEhp0c8aAOhgeYPSnunagMD1LIZ2mwHDeUYT5xqLtKMydyCk37aZ4xTOoLVcRz8tmNzOR10y/as+eqwBxQXqUT/8XV3garnVUEwtvCoLv4HKqETOA+N0TTjkdXjWqt6KplxNgdPhvGR2g4K5SHNql2KEX60+eScfr5sEthgfJBjLbZqkwwxoN2BvPnKT6eVaGpwRBrIoCiQ+LyHf8WqP9TG3iU5pwsr+0pWp505kbwe1wcn8j0nQOr0wDxN4X2Mpd1ZajCEhzvB1XivgVg46FcS5OFwnoAW4JpnyYZ27pVpIiVjnIXSlIBawvGQd+rZnlxcvXnCfVyEL2l8KUd6lwzQv2OtrDD/gXSKzvmGMTkGNWRgPSGwA3tY4CPEPrZR7V6ADaci2zCjhPNhKHZ9AwJ9ATynsFwTUA9evVpZgXUYM3yMlrOjmVfweeJa9V6m+/edXJhrqO/t7CjV094xIUfDvUkotttlBtPg6Ux5TJcq4OiJCo4s/eX1XkbaSBsTS+SiTscSRUhG8POWq+RHE3ksA8DqcGTZ+j+Q64vi1u78Hc7sc07';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/war/war.nocache.js?t=1669637194"></script>
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
