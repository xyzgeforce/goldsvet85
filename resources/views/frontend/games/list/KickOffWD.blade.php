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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ko/style.css">
    
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
			
			
		var SID = 'qJh5lZhOPIIkR/oWbrKRXRpvC84zHqQ3feXF6P7fdtWVLETjIdsPzDvhRkhQZoHIp8Oc+Wr+QfL+sWq36frZ32TtEMid2foxm4d1ctTB/HwP+q5qimSfp9kVxhg2X7lmVgqB3XkHhD1I2UchwxPqiLZCOuFv1rAm9GVnV4uqympSr+9aPXyXaFtyG8svDcJV/7qIHLktC7bDQgnlIuM81VqwMTTvjCT6cypwWRommHzKRVg0BJ8ZenRkweXSGsfibaRmq88LJ14BJXA8sI4raSvQLLWF40syVSr+OHKubrO2OPLetUM5X5/9is44DL9LpUTo1M4jnWRCglSbBgSFR11Xjo4w53z1v362iXtusHeA1EwYOEH1bV7d1tDxMyvVL6elWGZpxXym4Dzso2V7AW4q22JXUDClOe7+XKZWuV9cMcSvVuYjkBsakHvwjgCbhA2Kaad5OgD38VKA20oML1peWKbAYM6Ob6wQ3gQ9wXlRrKWhTz1O40hq8HDAn3k17GcaDD8pFIp4zpXw82ccB9Mt5w5Z7L29VivnuHmiTMqQTDVv6ug5Ok5vLZ0Pg6oBFfNUKwDTjWmaSJXGN1epNAC2Smu5vVw0IRkNAVEE0OA5Kv0nhGunVU8qSR8QgBDtU2Hkr4cS2tCFBzD6Zmw9pBcNAGUtQxp2M7M4MbN8CoK70+p7YldGFyRbm8NEjTKUB1IOBnuDtg24NIElP/xauXB/QoisgrWlhVFdrDE4G9hH5bmwTWcIF6JF2NyxYFfQ9qY8pSLE4zHTMdaVT38RBFmw+oKc+zkD6LxODCgzsRSlJqPvv6RgKI/vuy75MTZxARlxaGVb2CTsfYeC32ZwetcLZDEMNCInlTwzmf6dgdNob8x1tjTbpL/+g5KHIGmRwyUfqePhgRxBMFUujESGXnqqB2HK7HcEdrvmp5+JeygvbodEsQ2zre/7/aifhxK8uCEuGh0jRebXTivj79yVZ/RZz73yOqlygxWv7ImApm/Q9f+OOOxio1Mu4Pg+eGPENCXma+AjusKkNCe0TMvNc8XEC544tYVZRxqUUu9i7X3KTDYTWDyLVg4GeRuGh/3lwf/KU2QLkZ4wewpZlOT0w7QoVU0Dlnu6N9ebiA9vhjmNSmxXvV9lInUkSVMmd4VADqWRPpqmXnpepSxS3yWP6XFxlUBsPhX+R4HL8EKYq0SKUFkeWeZ3b/bvRpgmXuGrka5PY95hITFPGuYTfgkm9treqQTjb8FCqXZVlxz3nPBqF4vksOlv2QXychVNF+4kAHFZ7ilhbiw+c7rUtP3EbWMhyk14NKO0hdxSXHFbeg869kogUuyZkJy7WcXH8s7xuwRVCIjmWdGBsE1Pi/Wwqa9jciE/nu8noaAJ3cD35cqvLQPJo6xmlxy9oH05AQLp';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ko/ko.nocache.js?t=1669637194"></script>
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
