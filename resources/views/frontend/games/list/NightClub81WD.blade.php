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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/nc81/style.css">
    
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
			
			
		var SID = 'OZNZUGE/95vAbkrb4k5IItdd7SJ5Eeui9kGAGADoN0ukfhjGBIRQYjsN073UKvNeUDqIMdJX3dYOOrZ2iZLsyu/9hwJQM7wb/ybQqBmxdlZBN2aApa9IaYvbP4tA8UZIji5g1ss/gz0ZQq7Bqqr/zg+o5iCNxIIv3OsMAKnXz+x2Ixjoj87I9CbEi9sMc9cqmsZuEHJ8eF0yDikhFrpmnqLHrUq4uHF5xQe8xjA6lEiwLuAQSm+0ZfVU6S0Xm939l2ZPSzzOlJ9pP2/+VLWnhiURcT7gPtHNUEc/xatJf1a74EdpZ9oqT4higk79Zy/G7bIkmVnHnPg4F6zou6Nw/p+PhYvUCV/BLpgWvVY+nA4Xv5Hb1Pmk1IMxUDCgehxZzDj1fwV0CgpNMwpi6RNLYzQ8sZNm224lUCHZ1HZVKieSn9jbAE6KfyrHNeMAZNqCZuUFB38gR4rgPhVh2UnVJd2d3OTcVaL4yY2I7BDPjHADk0ZA+1AN6ySZbeJjluDVBj5wcG939eqbeUHUwG0gNxCT3olyOXqj/6JBPaNcAy/iiqQIo7QKhdxm40VzEzEaHj88xXL/QTL3g3Ph7BUV2afO/mpiXpJs5N3G0poUk7uJRMKiIRxsPoBzHZJ7WSjiAnsli0GJGd2EU3HX9z7kKVciezDwYFGBowa4BETC4+ILkzzdsaEY7lZ9Qy2IrPFg/T9JCs2JgnYzDYZyvlsnSiJNduUFdpZA2jtwT1TugoL+bu6OLXBE7TumS+9gY+8CNjztTvGT/s+7c6UO0YN2HZQvVBHpMUtA1pKARf1ZCdq1AqHThJh+vycYioWmzFi4gn26NrD4LU/zCe+3iFqqizC7ZDTvw0vS2YtXBIkTVidu571YS1Wvigosp+FPQ/9teG8ze9CJlO7iuZq6+dgE/0uWw/DKI2COvY2TdO+Fi+33AJlkAnV6sCPg0Ym83o2SZY4cHn7Nqf6pK6YgNPPHVJXEjcnPhXZe3ijFhFb4tkPGbPpsZt/6ZU1tuki9dOOgjdJLK+zjoCJO/emImslUoiVLxp5VgcaiRqWxkCjHfq0xGQpeK7wjv4WzjvqVFXxcs28+NxGTDNNubm8xWSQI7Wv0GU9vhzfzVDpu2jsstx4dj2XEndk60SNAvzpYXem4kidsixZbUKmInljYxgjILysN0LIVvEMHQpwYHogGpjdzpiHVX8hm4moBW1xhjytqKnqeZV5ehedYJyqy29zw7nTkoUvmR9jVpzupSKYz8Cp1SS8j5WYzgDeSAbiLn3+n7oRFt2TBituqLWjHsY1ArU1UmEoJAYq9pbfYJKQ+ACfWPpZzf8EhVqlWrKfvZSupkpixxmcnRRJK0TZmk7Mw/BHiwB4cGFyo/+9+S+9OUTJ0hDCJ/DG0oMpc8AWSlPuU';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/nc81/nc81.nocache.js?t=1669637194"></script>
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
