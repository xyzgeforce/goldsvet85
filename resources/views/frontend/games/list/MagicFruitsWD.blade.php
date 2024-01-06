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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mfd/style.css">
    
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
			
			
		var SID = 'y65DWY8xyNLT4hY5xHNWxfYcGlTfSOj4vYuE8izLrWv+s0DDVVNSjjonGE+aZ/ekbetWpR3n73gKArds1qTm/67yG8nCO9zr9m2OT2tYCidttLTmho0IaAvwdA46DMJMSEH0/PLBVFQudT7VeL2Bez6aFhjlPPMmZI9qyQFikeUphcDCInEyqpOTnhIsyRrEUqZqSQXnoQBIi3AaYmr3XFDRlhfZdE3ht/4VMwG7LHMuLE9Q13/oALnpsmaHu/GWge+z0yoiHTfBVFE/dUkWCr7/L/nvaU4zlc+Qd1isd5pAa6IHhMwmIj1wvp8uOh43HOoS8cMjiwNkPG+MS12u22fmr8AU7Voqvi4X9irRApHyiiYiHlrhOVPz7XleSpFoT0IImF9T3H/iqnGucxScd/dRJJOf7eR+YAZD48AEpv7Ty03Cc4h926PpJp4B4SjsixwRhPJ07UlLgYpTL8dksYCNezatGWVBBCO5BqEPEVMoqKzSLKxzj39cCwJxWS4qDpVt6aMKZLNIKyGnQf8uCjyytZjqd0Xf5ZSojJr1RGHnAcn6Wt1KLKX91DX9ayGGPEEcgTwDR4Fi9GLlMnwywdM7laayv6n03Z/l0qdUql/JbHdOa48Q2hiNwjHLS25xgUxViszuHo9v97JTc8ZHB7nEEZ+qP8E5urjk+2PqWxgt2ySNxDySnT+a9ywQr5kjc9GJ9Ln9SLWalLSx2uG47zuujL4sWBzJa5F4BQQkX6fTPbPi5u4o9oEJXYmavdEdD90nIcJJC01NtzxfVkzAOVEx4KW8t7FXQhiPFD1+jlmO3tU2u1vAEJl1qDo8wcdmssgYN7dqG6mS7ffK3NRm0CJHlhpMRWgrC8KRL9ECnyOQedH7/cwUx+WZyVt8JrBgtAQ794z/W8Wb9tpfm/IQQ7QrjdtS1zEDxJJAgJSZsKjSJdVQekYCjkJ8PVEpGEYMgCI8U65qA9pmrtLtTXziZ72Y8J2XEB1691JXWHdKLc7xEZNm2qUIpt4Bshpz45F2W79FIsGbM5NMoS90gHHdH3G3SSDNL9Y+JvgAMA0mqFkH/MfvbrWL6uY68t5xTZ6XMpUK0syDiLelgZxEVWfLWq2KLEbHOX8ulExqB7vuiOCDTAK5f0jEwpKE17KcQXh3Q980HZHqXAzy3/jsMqFjen362Pl1rJOiLUW/79Edqp4J/qjxn54HtZ+VvXA4OXtbHmtALuXLjeR+BmhJ4wwM0g2F7akIk74qIfQFySgupKBVMZsJper78tUupaaQzTPmH1J6zSn/E3jjoL0mjPdMWOUxRMfh5kXE3VKdrO99TpmMI8LgpWxQVB6x1tp31JqNShGHj/2jHtNadphZimpYq9+IAAYNDSy6iUZpfz6zvlLqhfeJFc0WEJB9ipWD7gYf';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mfd/mfd.nocache.js?t=1669637194"></script>
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
