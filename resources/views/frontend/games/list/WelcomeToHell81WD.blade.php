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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/wth81/style.css">
    
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
			
			
		var SID = 'kHhpgQArKJhVW5fGi/7vPPN+ytjmPSzg5FWfngxhByTf9HmTw/qhJpxdTjmri1wud9NeLo/K2NrnaMBmJeYY4Ol9uLeTh4ANmtpnWuLC3MHo+nanfzkG9y4JefUTthjJUASwLTbEbzLfeWg9q11FH1aauXeGBKVHp2BT8sj3/PP4YquTeuAghNmMCW1ZLI9iNqL4eE7sNSJYRJ74XFyhKaoz9NwRGfuYUf5TWBGlHAzLJUYhULmqGS4amxzWJypxeilob0Ts3wOiB4cMO440cZ6501zE57coA2TJl75/Hl/O5c4ST4Yj89ZbFzTlSKDzXHbkPk5iXEnJv1DCFivFA5uDjP9EaFTgXDh3+w5qFWi1NGvv/1/C1lX/MQ+Xb9/I8JqjsYlma2OGxxcr37yKd8LKycuNEQwLRCeUnkoVLr6arBaHjrni8kXjOYZMsMCiTdwkiBs5Fwl7xlfuPFPZLpcMStRdIXT+fOph1rJlMxVfypGKdgVNZhr3/FJ84Ruypw0ULeWEzelqLfqkha+mHyuTlcNJCXJlUVNU5Ya1BtpUG7cg/EQfavLxr29k7DIrij4MoMqFQsryI1lUlT5HxdVJwkt3lA5kM6LpdEYGHQWOvydJCcBkQyJZ/Qjq4Xwv659F32AlQFjy9dkR6qDMoQN6MRDEIECiZ8ZZr+1bH+c1KHMHk7h1VhPGqwpzk4bmgEwoHd2TaD+CliL0wi8iqZoTTg048Qv8YQRJLuEwitKbQFL+UC/sJAd1NSHNo1QKqxky2qqgjBDz2sch94bebk9XGf8A+yfyQM5zfgunVm8ee8qiv2GUGAaUOpj/vhiDL6l2o2vXUIc0Qvg3QyZrtk6P02nca6IlFEsur9q+In4Qc0b0gKN11jiA6pbZumMj1F0VELJOxZ3YhQL7VWhZEYSRAaRuc8tPzIBbJHcivAxSQs2lRwQm+9ilOF/hxLeJrcHpGiStrXwt69BogXQUkUe9msieICI+zZs5e80c1Wgb9f7794FfHvTqeIHL1TzeVmeRnVzMajFloNZipD5Si3x1Hhjky1oBj0wdZo0RsEPRJDkr9x5vFVJxiPC1+1OFjGoYYHx6g7aRj0YDj5iTfwQ1FaMVGffkXPV74quNRqehKASMl04Vvm/IoTOsRyEQckbjz+3p/pPo6fvNlFMKs5T6X9Adey1+yfbcN1OzYZSsn+ppKsHJY0HBQyAT7//wY7JNAIvo5xl758HuDAbtJ8jnayYEY7AjJfOvYZbekTYlxCsO+DGREMU5VRoZDiEYE1coNAcS6k38Rn6tnKc265z3G+pxjEUxUsFAYizTLc3j5Uznmhg4lHdRPCA581wzJ4sYDB4wMaq4VjueofRfFQ==';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/wth81/wth81.nocache.js?t=1669637194"></script>
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
