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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/agp/style.css">
    
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
			
			
		var SID = 'pPojZfa0tXN1tAvl3kxt4fi2UWSYEbNTTQ84BoGlbMHslg8ueHaoBE9glorF7Vs8vTGijLLL+NEvNXerfcRL7qM+bsrKaFG8iyXqviepzAHp89BZgm7zM8jBwLqSqjKTFK/rfxTeg4OlHWhWFgCU+bCx1TjVECXy1C1QfrxoupC8h+vyoxIOfOn/YEqeSy9yaVZlz34HV8UmV7ex87cHk3IOAyQxSMRjBNSR0WcL6JnZSyWPvTBpbUdGINHOo3yKhhBAg5JoI/4fkqTxdgFn+EWfwp2Et4O06PThzv/spULamBdsrhLsKk4egNHG93+HHi/USlnMq37RcI0UQVtmHbuuyUdsNY0BSeST8fDCspBRn6m9sAyQ2HD+0x3gD5QAo0oDamQ/IMbJFVASaCIAuyejkLPp/7x1rVa7Fm+dISXbpkyho0aK5vFyRaLvUen0Q5RLU2nawfex0zli/rQk6BZqdqGkP9ULqGRa6DZ73LTmB+cAoH9flHb/7uPPLOZXvGe3yxzJ5MdvBlb8D+6NfwPhI47jfOUNoB+7k2jKrgI2PAzGNCYPbwELnF74yU52ToEzD6tFrIEGEtce5pFwJAlhzjJ42xJJHiLY7VFV5Iw0PPbc7iMKtzL72HTA9J7Wto8FvLNbDHv0fSBTkQ0uL+slMt3G+Scm5VOKUWfceZXqMfS2OEdmUge72MMHe1uS1pOdU5Wjq9n2MZZRMEUETXHAhHy+MjuLhr2KekzyISBkNg9FC020eC+8jm3nHsQKW/be7HksNDN0fd2WoF0uJGWRZzp4/YfK+drL1ebZ3Af48R75xv1WAjAa0VWiAV4fURncbHCHTxsd7LPdFbC+YaxGmwayCmEDXZW0Vz9VcyGh9+U4TIwBNe+TI5zJ/oWZ/f6kvRC2OwM7kbkIaFihj5RcALXZaVsbbK0Ty029/yj6jBLGDvuMwhxeUdg51HZIj9CJg9wH/SmjDqvOSMj8PebDYpzEKOy2M5drJI8RGFCSVqIDG2qV12BhrpYBJaKmpFRo7bgUgdpNP+5xFTvVdxFOzHFjod8fG9x1h+ulC+YR9V5auM+q3/Ic7JvIBhwFCcGnXBxfOP5GZaR1O9LaxxGSwdG4rhk4mr9X8UWQTmVuI/GPbKgrQDuPY2Ztq2daUeDNVVl94TqP4lb7ib5wcIwgEQykdecQxCm4XUgFYuFUy9n1Pu4lCTUOLJQduUmvFaE/Wqg/yusXszMkb7rn17WDJZUErd77VbJmsvnIl+TRijYoNbK+gnpNtg/m9IdxC/xlykoVPsurxHFm6PCCWU3zRqwmftYGMPzLee7fpSB5MQx2vmNpAFDGV41BxrKZqiUjz1UVEaKjNHRoiil40E5byDw10xxCFWBa63hKqdroqoAxGXMOsxxPrjfTN6II';
	
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/agp/agp.nocache.js?t=1669637194"></script>
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
