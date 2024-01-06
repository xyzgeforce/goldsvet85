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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ih/style.css">
    
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
			
			
		var SID = 'FXISa+faCUx7Orq+kzPcyNp0SxifB6GgDJCE7a3euXdUDq4jQVK7rEt4khRMObfxkgN6yfutBXIV9YA5h8wt5PqM/VnYMW/+4pwEy+cE6ojpg0bGUXCxPOMOhv6zKgJq1av8H5+5D56DZSdIpdGrSY8OvkqvABTvRAWB4xHcm7cSVSQtdGsZEBOACMHLif5DLjyd+gCrskK2vvnnK8jY5ZHr+kHBtdS4MTLWHMNxNlLYgrGsBDgOAUne+0HyQIAdgGWRUTufmp8s+eDIJrl7M1TvUmzGA3SEonle+/LpZswBUAuS9bOwUUbMmNJ/eSoJN2Yqh+DuVAlyu3ueeRHEYeJgA87H7qtPnRWXeMkbSvR5mHlMpjZSPMWBuhVqs27w2CuGyIk0Fs5KSeJfU0OXq99iwcU1dVAKkVsvG76GRmUYZ5pTYzAeA2KQco81jkBoV+mQBdCbkz61lpfmuvDxC+azNpyfiK9o/Zx28N77XqLrv2t/iCgQuX5SexZq5kDHk4dOhrTSSQqEZPIoh10zvwT3gvNwGcNHCHGA3pA5waYMqa3j5Tpnk/3v1qrVda8gKRzwNY0rcEPAkSVIaNqJbyO0N53gAx+8giHQcwve5XDtA6X4lRp9dmjfivc3bwKWKAqq5YJbijB9Xa92crGFGtJsQwZU3t2Y0nwpDZkfU7TDx+BLSqi8hAH5C7zwHFHOC5QDeAbbgUAPLoEdAl120jeCf/QqohLFS9R1m1zd8zMKqnR//4Dpq0egCbsAs9Co6fX7dnyyvw5pvm/CMm+HvkMLuNM0cszK0AptpAAIS8hXNyaUHmGUZzbewKjQpm45h8+xlclDeV7ov3ayLS4K2EIkhMypSLEtvgRja8K2T+Jh1jk+mDa/0lEe+SdAchkOnhUxDFqcpZr5ETYyRNhtwIpAzEq6iIrA2t1pU6KfHfSdNfBaEyMculC9tp0okEXHEEqvALrEOaOdZbQhdEYAxV4/6+HmxRADa2UbSk50TUUfR6n5BFKwuky4Pnh/peth8w2nu7xKd2eJHeW1HzvAdBgDdzrvMifsQFjkbupzn1BZ5BSpiBaLIjQQHlyGTUNeaThtCSDfwiXFdHB9NKCGf+deKUA7fW64VmfUUSXmIzdkSV4hquO/uIYaKtB6zDEtnC75Qb50t0G+LBxKwvSh8Uv3Snk85J+1HpVKdmq3PjoWigonHGeQ21BfQeFn+MWeo1TsKdfxAgQ8eK90jtNgcB+JZjW8DnAe31GQwoa6ceuNPBDkf2iGtXRB4JIus5LdY7Clh0BxiaE/kBMjIJxiROph4KqJbMvZS5+IfLKKSzIUW9h5dWtcftI6dW+Qc3cmyXES2tEb1oegYFAs/xg6X6rHKpdW3B5gqjxHo2OfKpInGJin3oOZPGAL9qme2zlq';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ih/ih.nocache.js?t=1669637194"></script>
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
