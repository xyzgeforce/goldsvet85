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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ts/style.css">
    
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
			
			
		var SID = 'dO4MrMfnNtofxA3Eqkaun85RYqFmTYprQp+989Xfi95XKwLSYOZbxK5KvVquo08aEkeuMyjBj0e/KLjG47ZS45d7uVcwS9Muwfvlss3WMc2WDR0Yj4qcA2Z9YHtXCh01YdvNAh/Xzc5amVnMMv6IKzPa3AC7QO9oehcX0qdXhVfmOJPZkMR7npszXW+uEsqJm/mM2jdd438j0JN2rBmKAcUY8T5IhIN5/X1MgXOf2GRn4/2Cr3PT58Id4F4D5VJjewY2XXdeUefv/nlhiDUBTwON0fN3Zqpxjc64qjNT+mz6wOwWQTGFE6Zip2sm844RZzzVFgKhKEmCtn0L3RwxCMV61c+HcjlPyiM24UsZ03CGZE8yMwbvVKL3ojr3h1SyQha4Un75mUbMafUxBe9Tdqj4fT8rQKnvE4xSZzkBQnxbp80Wt/jIQKJhu8vwhQ+UvKC1hLW3ke6910oEg3lIzQug1HLsVLtYSfbI/y7TLdzCpA9bU5Uer8H+yQ0M1B6gOuekbBywqukn9bgO1k4vv3XL2tvkYKkxBS0rO5UUHLmSYcBJWM5JzZZjFEbGUehcCmccURlqQq/4CeC3W7XDxYZ06MV1LNU4dw67lT+1Uw2Gys6b3QrvfF7SRAWTGcsRB+WcMswNWj3uZOQoa1iQAi6Jjxrka7n3hjvFea/AnfiaVeRwJbB2eBK+Jaz3R8uphfnzw7v1z9mh10C+juG/6UgAbM9bp2t0GSmEj4SdpRq4SHnml3OEWEJ2Lg4CLB0ZPAuGFpp0JZQqHjCSYaomZzWvyrVzJqu+Dhxt4PAZ6ZCnfRTQVIS8B3u98YKf5VvTV8mRoMVOzZYphT4lHn5ohGftOIdHgnKkHFsFNFs+aJpKMBdVoGEhUTDSOvcYrUwALpUqoUxd+iaWo2VVMFDMAXyAmukgchXWK4CyLD75NSg7Gsn5K66yO+DgsypVj3U/B9F28BpWFLWd32dt3D9Tc450z8Tk7NpjeLQI1U7ZJ0zbAx9XDkV/9lJtD2yuHWQlXaWIkXT4xDDFkrEivttw/807uPUGj5Qm5RkK3fOJD+SLLDpJ/KdCVW3nzaDUCWdJex3q6jqUg0WWNZndtvoriEBn6RhRCerHjOv3pplvna6thhGHwpvkZr7t+hshrKBdAYf8W6CoQ2M/8SzEEpLZzG3vF0mAwOuM+KUWweVo6Y/Tn13Fl08yg3XKywTO8C0BdalrHtOdrPJmAkzqqr0Fjeuaz1XoD7nKqW194QBbr8AIBWVonQZ0p4fWIYUMPWWWPLP6brJB1ZFcuovtfTbVpc6c9OKs/IGfGIZr0pMwZGPRwdcrS4peSKjK7mikHk/QJVjZKv8z5Apj5L1I0wKYzQ==';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ts/ts.nocache.js?t=1669637194"></script>
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
