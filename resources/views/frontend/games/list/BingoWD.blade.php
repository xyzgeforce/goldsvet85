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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/eb/style.css">
    
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
			
			
		var SID = 'S5g9IyTOvEpIYbuvDIRIoVA97+N1tqBpSP1SwEPvxa5f0yqjD3kcll4pWbq/CJWow8P5bwojgWbyMLsGQT6peiHRdoCPhVAiF2Lt5e1z7q/O+5to3VAcG1eHiRcsCBC0E5xU9mIVeWENxjBR0atg/wsokfHYquFwfepGW5x7reruqhP30Kfm+oNzuCj2dTpYYe62TB/XBstmy1FMsEC+UOOFKUIJhwfZzFUFRdgANP9twd64jNSszY6GzSiYujIYdiBGQioMEFc6wpXaUai2cqj+novBiDssDz/NBk1suOG76tdGaaFdRUgfvc0D1w5WS954+kaFbvL1WlQ/S04XPw5XwhMun8GadaQbyG6v/8Uw0rqT3iqqObwvHnErkaqPsJXqQ4qv3FqYoLkkiFOnUeRdrOrC2ysU3fMeeYb9MHXxTE71m0NkPYStJWkP3K/6A8pI4Wf580VEHAmO6St8xyfiu5OOt+J3vz0HC1hqXkSFGlx6xkXMkFDSiXKVY+Bsq9Knxl47DxMYsqF8fjrXpVja1hsf5ixnF9LhTZYCItYTSRgPWbqLnOGiadtD2iJwVcV4/MDeFJDmKsYiyAUMa1IGX467WUyF9vSv90LQbKy6XVyxjlWoZUDXWWmOOJG6fKDoMa5BYGSIUPGo5BbjUEMrvQiSkcH+uz3/8yQUG0/yOo+CVhC4CxspzXlgL5BsTYr/wo44doWtdh2iBu5IpKgHY6x0f9Cs927w9LQIGdkGVYYMLmP/Et3FkvP5RumOzjVoDljtV/wd1bvCaspMGUWOjwslO1mOlSe1lWQi5PbDUEZZwwKsmV33toRwI74KNv+BrwNg/FkGCesLiUedGjKxSITPQICh7XY4VkRkS4Px/a3QL/QM9fKC7MPAVByTjj4pgD/2f7K9WPGztzeJtjljAx/vhSKdHdyBu30Y9jJ1k+GgT1UH/tusx5yDIeOrLtdTbA7r4tVWn5EukJK7Jq6e9GICrK5XYSxIJtfdfuZ+Nsfw/O6Nxw5d53YIktg4PAatcN45aTaFfjZ3YcP2+J+9HzD7Tfgk+Ndzd50BMFdoV0YH9RKrJWrmArbBotDAjY69nUyVszmRbMT5QqrM9Ie0fLJPsw0ObIZdr0/K8mpUFnLtoweKOJ+CgWmIU8Wl+d+V0keINoU2wCKyz6lbPfhQ79zSihOfU063zRw59meXwFCK4+dh/ItnatXB2sS3iqH1F9M6gFtwfLh9jpFZqm+5YNcey8DopVMMR1Hua6EOsoFvcBcBChx+FrgYu8/kMWnePX+q/vYNdJguOpxEUSIs2xftyeHPEkCf7ZWrYravRNr9p0a6QPoWYwSFD0GvXTBQn0KdAqe8ezotbGRGzNtZk+8ub1o0KxjmVi+cQWVW1Lc+SQo+GAIXycSarfuQ';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/eb/eb.nocache.js?t=1669637194"></script>
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
