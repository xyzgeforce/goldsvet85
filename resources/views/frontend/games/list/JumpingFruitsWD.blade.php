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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/jf/style.css">
    
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
			
			
		var SID = 'fWOJ7uPearoZ37ezaxp98Zzmx4B7W2OHWoyf8B5Ay1AwC1BSo89gxB7JP3solD8b1+6L6zDTNeh2Uo7gWz7r3+CddwEXwENU6YkxW6gKy27/apapcUrs/gZBGZzTrUNJK8joAWSd/jb9W09MWkJbLfFHgbsUm1o8wbPYvR8soXQiiPSykb1GeyjBuVFwLnnw75CyOpe1djoubN6doVthiw0k0AuRvludz0uCItgx14Jak34i59NckAQWiLdesVjLGQ2RCDC92GNLPeBIZ0pRa23QlqML8oT2xpAKrManw5FYaHVWIn9Dw5PRzqqH1XmIQqyxodzt1KC/WS1ssA7+PYWBgEfd5x5HFDTfF8sgAriCwHVPDl+2iGtYCgBWn+hXYUh15mh6vnCmls2zNgvO4t/xyvx2KfmiBwbipS9eN5nVwVp8Cst7ILerA7Img47aCVcnV7jET0c94y9FuH1qnVnNfFwxNrrt3vr2fmKDeRPBjtSx+NcPjgIMWJxQUER5RxADXJT1XjsIInYeEPKpme65VLa7Tbs4iW0cehFmIjdc/aw+YDdK91auGsl05l3s6yKKgYfsv2k5+eQfEaEMFOnrsxXUWWX2YSpb2HOMYsjbwiKbp7og+iGUnbUchEnpuuve0AYjLlB97IoaIhta4hh3PHe4+r0yObjIykd6EUPv0dotPjpuUoGU7BSuYgpZyV+ot5nysv8CQfNbeUGiQazJu2FCAOEykDVgLKeOTMJYjOOTqD2UhYW5oy8ysIPK9mPNCIBjh27G0iQdCZ+2kRI1iXrFeumWJanOCG4bEhh9rahj4AMpoYRJi9o919RhyHjA+M8peiBUTYswlT9NiWGFEzshRX35OReXprwYbrADnILJ88BN/8eOhUScw3FW5U1zBonhH57cafrNQ8/SzI44gC0B1gUHcsy41GDpkjw1U+Et1VqaA9v3I0oEFJMV1rpYhL5Y4b6jz7zqcgIftznz3kWVp9fJDlFNEWdvP8qwfpC0xHe6U/xL95cwuI2U3dJtFw744pq1jppiY9hnfetq2nIDVyp/hsk/FdphCOB9QzigpaMaeDlCdgzRmx2Cdo6UeFYF1b5MV7uznKw0c476AZwbOfMZzqjxQqIhDJ3uIJunTrvf7lAk/m04KRyGs0+lwUiKVeygpVy6rXhL4FFEo4gO+OydUK4lR7+gnKgFNOrDGRmxvflHqe5sY9I9vj6ir+gs7wYh6fGpTfYVlYeQiIdfvFtK7UZfOlNeCmJvkGrTi0h97VAswZoBzN8e+aEg9xVluMheqI6OX3De1zt2SIcC1nGeCamO4p56HUm3Dr/KnCorDI6sFrG/xH8GBLhPIaXyjwycsI+YVJyyw+3rTGCXaeCaDcnph4qa1e/pPCRm7BCO2D0Q/qtogaxz';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/jf/jf.nocache.js?t=1669637194"></script>
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
