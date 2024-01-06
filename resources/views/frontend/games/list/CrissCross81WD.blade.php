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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/cc81/style.css">
    
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
			
			
		var SID = 'WNHlk1gf9HGyEIYd0O8ca9dAJeDCqnGjZ8RJTm9fudkuhFwg/Q0IynTUlLpCQV+5x+3cvKauxcn76sek315HqBvwdDrX9wvb5By3HVTKub1i46F0xBr7gOtwAgEFXuoqBnhV+7s7c5Wj0KJfD3aVRqq1Sm4sFm2UFe6DvDgfdN79oBdp5wpL6gnAFU1Zu7MKrj/oVEsavP15mBEseSsxBK+3Wfvel4nmBAoB+P8LQ59cePvT47P96pYIztH0RVm1JRUhFlNT+qpVngV+23rhfHqyPvP1bZlQgrkRBq+p+lROep4dhKfR16syQctsBB2fDVHrijYIatzH/Sa6ynq0DraFOIxs/HuCcjIAG9Vkdx9IJx8qPlpsz4gS1LNvLfW7af6k4G3N6QMjcf0Pw0M0GKQeqs4gtKCF3GDqcTbsbfaCQzMi827+nIOpWoFkUgkYu/4mC+aB0BLYkdtG7GWlwhJImbWwQRimhvIFTY+EA1J/C3BrU9T0nFBL+vJtNjSBh7H+og+G4MkU4KBHyzMYFD8PLLjvh9T3TD61Wra7krcE4jAKsA8drUHNRXfubueWLBJ3OzcO0iykubGbrXzc/mqyNzn/faZ7oLqUYRpz9n5OGFNpi8RwbrlPnPjjp/L1U1IvYOcMmdiEF1QlIYV2kCQ3b7EH4MwtDdUC7X8P+CVh/BqsJoDDm2ylFOvOsn707LHZG1pu8Kv+xfTR7y2oSJonAzYoqnb236TyqQZuc3yJieegPr9JQYNg2kpjhmparBKUBR0mFEfXdbakjbHjrfos97aWitGyj6FqXl6mrXKtrL8eqM/ckK/iCMDN9yhCu/WgdGhLBF4/cMvwQ7wqObfP7HneFP0jWl6bdj8LzqwtZoVc4mVrBMHlh1F4tMIe44uzr0PdhsgS22Xqh2cOPu1jYKvvSNDOigsOhMgh+CLRG6doCvAb7dSyv829JDlPYFA3QX/mJUf4wmr3tlaYnVIRJ+YxrL1Zw8HRnJ9QFxl6Uru5sjFsGZObXuS38O+8Z02b0Ijas5GFYWfVaFOoO9qPOnQ/KkKk5k5aYSIwAaX3dwE3Tv1cjJLR1tC9SyGBodOrjLKTuwdGjUSx2vicqjWU6BNqJ13LidErQI5y1fxihgn0JYOuFBz1Gk2OxDISq8m/8pWBpMb/hn0nBF67BzAi3c5FMiqE5DSULLgxwnvzhKkttzTicK79MHtJcygslaV60DIBIZcyDIj1BZEaz5dICTOdY/VQRAQYgeGXjXzQasVdjhqx6nAuBtOIGU+8zI/0Y55f6N5DsWuwi7yafA/v4lEaMrkaxc30JQW/9lXF/myowNvdhO96ZnEFSripycyYwMT3zPwRt/W2rMqplSbDPglW1gALxBFGP8pyQYSvly81wzPI/WxJXZUN4UtF';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/cc81/cc81.nocache.js?t=1669637194"></script>
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
