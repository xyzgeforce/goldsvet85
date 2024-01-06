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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/pogm/style.css">
    
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
			
			
		var SID = '9YGgnWcDXxxp28xlAAhLjfha3a+zvvcPBWuRw0PrQr+DX2rGP2VyEsOK8yH4SW515mhyBfpIZ+fXw7zlOM+WHuc5zVoiNu2iuLMJN5HNnqpiODyPgJ/7X9IMIG1R6u4jDW/EUVqMShbLkwsRSWwC362riJQGyUWY4LUm0XN+SDnUXbYm1bzfnM8H1YOmRZrEL3oHLHBk6YJsUQKyhiWZgDKPrO9nUMSjZAaUgAy3HeaLrGmXMiB4SfQdxb1tdg4QBRABOK+ra+9wbXur/17fM9yojpHUc7X6avPIYZOhPaSuA8EzwXQ1Mwdf+Ylw1sp+DRcOW5T74efZ2G1ef+9duF2zz3+qAj3Zx058AU0T5GkEBA50p6/6uiHgFFvjYmEv+HE/FpP1l4XGVvdQAWldVRHKavisqxfBNPgOKhcHFaKQ3ztTUdf1CnAkVGzyOsaLdB+FiRC4MErZ1RN+M6UmSR4Lej24Pu4N/rJcvnXem0vXBEo7QPCmfUQPCJ9FkkIZqSWdrcEB2rKlpwrF3g6AZcaKU/jR2FlTO/fUPwOzXMAqvk7EWhzHJ9PJfgPo1HA6XS3AvE+eofMlCLFXnW3Bjo7NP6NQ1RAqG9MFyebDZiwzjiFIrKv5luhQn0V8gLPNpt+q5JqoYLvaNZK5+8yQP0QPnUhCZbujqShDiq3dDWnsRlIDhQnD+241DYotUfVR58yaE4evGUG0+e4r7P9i38DWKlG1aB5LTa4D1ClovAJIGJaNGQ6XDMAUboyC/+8iSxttXRjl4o8cYHSpyEsnKFhtJaGZQfzRIPOhIics00GCMY1ZVjVwF3nUXGY0crK+XNV1rCdjNzk5NOvRYm+vS/UfkjSvuSa/sUXyiW8zXuJ+x9VC2u3VvznHHbaLcREeHmZbueSzrSfkAE+Fp59yoibYW5Yq+MnjkZH5WV+QaDzQeuA2nqEzIGN88o+KQhWqYS9+QlFZGltOx9n+czNSOyP+daza4hGohBpZxp5wBh2h5/v/orff3jDhBUE3fQ+hmrMHDzJRGh9mu5bV+j03ZB92J+AdAehi+Gf+1M3y7QzxrQo52OD1Zl9b8Kj2tW+t8wXqHA99TfGzZhR5t5VAD7JsXGhPmP+1DwAcn5ue77rQK0Sc066POI+gCs4FmSvfO6ZI3vm5MptdwalXzxLeFhPIWAiP4ahpKzRa+OgzFMbZCh++N+Lk4c0AVqd94f3dXsFY3AhCb7bYOnG45FXC86h/kJ1zTsgG1j11Z4OzAOaxHG8gSJwvfAMX9jduDZdLx4Sw6CPuHMuH/CWWt4R+4vMKhx79Y0MH0svXmdFwyX4l30h7WLvkhanBvOa08NwBemlzgizhOvGM+1M4Ejphlsp1RzEH3fGOVCKZv1rXIgT3l8hN+0JAM2m8b/Air6K3';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/pogm/pogm.nocache.js?t=1669637194"></script>
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
