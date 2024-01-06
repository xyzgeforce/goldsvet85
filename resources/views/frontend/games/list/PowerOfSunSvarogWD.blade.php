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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/poss/style.css">
    
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
			
			
		var SID = 'YlSRc60OrOIeYFL0UwhXJAU+FQMoq0hnKTCHsh0U+KLjB09li6Brz0vW2WGAyShQw/bn6IiUgBvoO9f1ySiIiKn5uVzeZ9XJCaoWArtdSTZgucCs0IztYEKX6cEaL85Q5ZGFaRvntZMLPHTAEEBY2YkcQVJqR4iU/s2v12KD15SrLGikZYF/rSyJ8LemSaKPxiv2rbbgJw4GfBWg68tUU33xMeXarBy9eejA9lnk36lqNHUr6bwENRicN9knq+iZDDv0+vmauq+jHFkgruFbWASrWsTSum54Qj+zKRe5tjGPsrqAxptKOKrQsyZpjmFRO69nlgwTLh/8gtVELgXYnPtj3GqtrMlXXm7dYT7LUuGTc8j37xY8Q+LRP4JNKbfwrDa/uY+C9lOJmS3e29HwXDxrSBCFDNX62s/T2EzzfZGJJhi7dohAnZTYa5N4B99WdKQWdyX0Ie0khnKvXno0x+Dim2oPoPAPGVVA8zocY0GCecQ97TSdv21xF0N9Gs26QdG9EIsnZCSKjp1PdzjT3Gwyy7RFTfF2Inb+ak3e/0Ly71HoIJPk5Sp8vFEmFXNta1p4Y7EVkO9mso1ky8IeK95nSwyS3sgiJp+j5SLmXGhO0nLIUZAEgb/f8foFy1jcLDzSTND7PiLKQuzh+OS6ALy1EC/dFY6quoJv+0ccfTQHdxQW5CTQm8MIIH/RHeKUBZELcbeCRkVryTCwbedbMK3aaPYxt0BlfYSp1j6zEINJwj4ihh+lHOVpBSpANJSAW3DJQ6dLxTKt8HPOWJeOc+9b99q3iZaiK7BZoIi5ON7zHGKoRYL4mToSib+4ZDfxCeCSTbBtHZlFchDdFe5Iv3bWE+TEaHJ74if95JCOEQMh1plqZY90PmjbgjbHPLy4eQy2g/VzMFTnQKle1Tmyp11CKtHOeyrIVTQj3JbLebSeflsrRrO3yYS+5SEjvCobnaF2EWktIG624tvIpuiq9pPsSHbcZpD+5BCsmnRcdrNMIBrT21YbkD1pzWEA+wv4zkfuougesoaVx4lHPX720DG6RivlHV3qnKDh3dLd8/VJQB79lVyaklV2dUb9IDwjtU/zX6lHoEfGt0Owo4aMKJPgZT2Lgo3QyshNpnx8I+j6ku/8uQ5UJsEAQR3b3vNa7khpECj4Mk2cc2WareH+/JFh+zldNHW1Tt2rdtMKDeeuh2jOYEWnKjBFjYKJjfvsiuKeGZTWVmLgByQG+JJVB1Qa6lLnbmlV9QJUqHHlnK00YEkQHWh2o7XCGJOAshoh/vDxDYQ+uqM1Y7RWzd0ziVDetXJo+jennFvhsAzmUjKQHHBBLFXA3EGmI/72BHSVcuGJ73Qk+RTNxAQfkbo8/k1g368q3Ex2UbboXgfwXuI+p0wTnSOJ4lHWEpnuesj9';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/poss/poss.nocache.js?t=1669637194"></script>
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
