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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/poge/style.css">
    
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
			
			
		var SID = 'JLOmhffcwvWTuftSpD3FI/4tUg30XnIwkVftV5xHVCZDgIBdspfTRR7VppaPqahnwl7+c6XIbObYFzXfgTZaqJXLoeq8KLkMI5FxAaPTb70nXLfUO2K3SmgBsMV3sP93ePQL1IiwOntIeFAjHFVaUJSNp1hfAAc0CS1+PoLJsiwKXQ82BFm3qAa1ghxeDlJRetgCzIseLT6j8gUrCZHzjDRpY8zu2MEv4b/mb9+gnXNnPFytAJLqVsjN57wIzpaNxPqQ5PGZn9Njj8jSuynyEfXUdXyoI4HwlqLyilZYxX3Dh06DgBYlKnN18lzhQqW5eufLw6LF61o1bQuxc72yzFSUHZFmEDzx88mp7ywL2k+WDJmkqjFOUbjIRxXymNQi0MQGqkNoq/L5/kYtCLemqV5BZQnQug42Dav11GNFGvQ10O8+5u9zzrtqOGPHfdfF3TQEktLZXxEylcMQrB7gJxJh96WOBVhoVs6Y+q+eRpWDv8f9GmtkaMRu0TEOPHn8eb4udFm4sdVDoUoNJ5TuaWx7K9PB703kUJ2yiVdxuQ9EB5CEVdfyOha1HbRIUyFLOJGuTW2AJO4MDulEyg2WEhxCkxg0h6KC0oPeWd36kRA1UO09eQus/Al4mJSfFNhEZ7XOzmhnnkoHpBi3Yj8qijIODDy9BUA1QlwkyA7Fx06O59qFpIT3oKALZx+aI2VaqZ12RBd215cLJXPE2fQXBqSCFTz1gZ1OQ2bcl8eL9R2cZKRot3q8daQK5WfCRzPalPjLz+zt30ytfydVd6Sbq/L+IcBLcfDTPsdqNHkuva3LIz+GITgXCojsgxH2dXOdlL+96wlHrclKgjDRjbfTrjiGVh1hbI/NqVxyFV99zt+YW1TwAc+e8wdQADVxQL/KfE098rYsRvqO8dgJAhRJi3Ktl8fX19JYlNH73odwqB8voHJNOXb8HPK1Cry7RLg6Flz5iF8Yda6q/MwkX/x2LWETus8WPjPyDhkrWbmOONJ0eCzQOEZHcIkJQ4fVzdb8VJOifMhJTqD710H2m2F5zNTV4oo0Wffq8Jc5REreN4w6Qml7SjAMr9TN4ag3PtuJvqNd2GjLsKvwLGzv4HKYSYHG/PRWCYoHFOPp6xY6wkDbmpDlcIpmJphhlr/i20okGsqrYoeQuKwoIgpNbxY9hyvfbSEDP5vDMhLcK2hs3QrfmebwMor6tRsjc6wI19kD3b7fc94PxoN/FCnhGf5dlyq+6CN9GtWqE+CxYl5dAYmVdqEpON4H5KVsQeeMVIUVfBwh12OIKBYLcXCgRVNWcibd6myOe3BOMyAfer7by8KA3OL5DE2QjxAGHx4tQHRL/3S6Yt2z05+wQsjQQK4EpbR9NDGZoGTy83vHCrfk3xEb/nq3jnBwy/GG0QZ4ZyYF';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/poge/poge.nocache.js?t=1669637194"></script>
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
