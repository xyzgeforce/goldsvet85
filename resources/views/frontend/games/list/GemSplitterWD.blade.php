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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ges/style.css">
    
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
			
			
		var SID =  'nf/Q/j7j+C9Tccr49nrSEHzZun2Bsx1xCTFuoXpVO+DBg5MCxhhQNxvfeKV6OQ70UevQ4GTYjiHl0PJSyKzTzTh2jhTy9YlLsYBsvhKDbDiPxvlB/ZX6df0jkxVasCdTfdVMJmrrY4oyxO8FeKQ1IGS5l+6k6GJkZs3CL85C+3cEl33Oav/9Z8GxKgGXPDuaRbjyxvhFq+XGLEhwEtNLr2GIA5rTnCtCIIKgJB0QZJPot9GZTsOPhyVq3vSF6okM4PY1amjp152MUzAF4CDGwiva4ATuF1tznutK0cLcw1rqJdYtD6noq0YK5N5II/Qd4c9jEQw2Uwv/7qvrqXZxsd1jflwq5zc/Cq9lLN8fPHqY2BHKRsxNik+5h/9xDyjMhCAUxIi4C/MFR+ON222oYrWRuE20EUGYKCx7E7uw/qMVer3EZ7vQ0RN4v0KN2G6mu/CmaCj2DYzUpQu8SWFQPZ+qmzH/UeZ58FM6M2w3nB+zKCfE/VjAzMj4D8qVtj61ji1DYTTd8bjVY3Oa0/o9lAMJDwROkKfk4VEAtcJX4gCOTUS9t4Ao/TgohBrlcYcozufTJ+W816b1nGwrHbAb5Mq4pjFF0BZh26cxqkowW6kdKJ37acoqjTcQTLt3Y/JpGwU/fdyA087X9v0g5GuIg0pJkTnJFrASX2IOVL8ehKFUaYx+//ubq6UyZYWeOwEz8OeS00t1ZYvgGhNhdRqIW1uZCTvQcTo6QiLRZ1Ohd0sZn9hCqiKU+sl8ZxpgbHKTopkeFchhjX9ezAwN0556SCIRTveTCckuyofRrJtSG6TmINO0va3dM7KQdbM86MlvsM8Xlx5X4Y+Pte8NkiYkItfNBIv6kDY4x8TEoyxx+kKkxsTk708oEq8GC59Wjl6/iotqebrjdIqgmdgCCEdEBY6SprzKsI81OMFcpGRKFY/w1XuwnvEgbDFCM9AyjXbnnNSmnDY8A8RApwUHmcKwpnRLrBoQMRMKhm7D01FESsPcqHjBH/5zM+3u82MDZRnpCu+TawTnn1DRU0CSGyq9RpEUJKAmjs2sYe3XIMsA8Qdes2skdVbQk+UDMt8DGfI6jWOvcXUf7skGm/kAH8Ggx93YOLXor3hYnfMFNvcj+OGFAM6kK1Dqd3UL3JaKG2+oashY1J21CU1vxA8s84dL7xkcsu4KLa8WCmY6ofXT/rQzd4nUhNLqjwZSSjLr6OA1YngNZwV/JjG+64TTihIJRN4hmmd2HDKTx1/uJwbYNqCvoTr1Vp8i8n+BBYTSMf6bOvWeL3Z9uocClxckFLApZDsBzBDOa+kPQJFUSKxRmL7t42m9Src81aHQU8/xY3pe2daI6vokETMyE1wCuSdTxnfRcBYIKgGpor0ebeNL/WBxMZsTqUagFudonXESVxI9';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ges/ges.nocache.js?t=1669637194"></script>
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
