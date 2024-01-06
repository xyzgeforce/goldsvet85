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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/pp/style.css">
    
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
			
			
		var SID = 'OHJffXS1+iBbc4QO8+GcWg3INnS6+1uLBRyFdDpMIItuY6ZOJCTFFegr3AQJMNNcC1ZY+cD4XD2e2Rks5PXiPutchrV02+hALy33y2aoRW+9HO3xn9Esq60RxWIHaiqHNYfd8aPuvaYAsjUttW4Aia+rKrBIJmv45MzfnvTYZVz/u2d0r2/jQUbQA8O1VT+zIeObFtQAN6gYBepORsXHwlp+tcef5ASivKymW9L4w1bs0GviJV6kKklKpWP+khDSP6/v26upm5v5Bmf3Vc/AmuDLSBz2HtOuQtxCNTZni6RxubDp6v+ItycSTlLHb3QPdnKPSgT7LgXpo6Mf5T0haHjvAHmM3rtNputg2QHvLP93PX0fuRkxEpEaUA8RIUOXhRm8uRvSt9viU9SQD/zP2dchl4c1izOCqAKyU2BGErkjLwoTHi5vyx8qaolhLs6ZE4SIP/etZl53TYXBfgF+uU4fqpGfzkruXpAywQ0e0+YNcg17NDMYt6f8vNPsA7mSKO086Kz9azUatYEYfjV+8s0SCeThHeSdzvqfs24yrnJNU+pp5GJr1YrEpqYf+6vXAf4Dl5KxyOLzyqKxziM6VMbf8AXTMkYjJ2vxUGHgfnFkWwMvZFbwfXcThfBsSVdZhcGCJFFCKOrVnMrsp8Tp4F0GpmifTKFVqHb3ujB54wp7+pbl3CtGcJ8y4me2QWWOorRI1dxxFdfNT9+GqZ1MYrD/+y+j1mAcK5izcYBszQnCCY+UQwaVZnneH2Tq641TLShkBA5X4kXW2QX1oKn/iS5qhZQyA1eRb+8LaQ2qesEP2b0ZpaS7R9xskFKDzUhoL9kTw3Yd9ht32wkTOGQ+81WsZKCsyUzbPm1WycMXKfAIAMYxrVDGmVYLwZxhoMf9jRfPlKT5VqJePoL7+NEK6FZ+Dd2kT3Lt94ZVkUdnIIzCr4QUhrqWShO2tLLpsnJotiJDj4MMGf2qtfKsEAZ7NJZE5NjHWkFmIkYF1xPUC1KSy/b67QKUoZj15+daE2TnORDw5e1vRhugA3AyUa0QCFwy+IhP5sAs/w/flvfrKU33oyoUuIkQAB1o3gPDKo8NIuyJC2gE8sLg5XzrPLTXFMA/WPpQXWsRbatPe9ZvOFQsYkDzb9yh7kD3Ng896PwCc3+kcGvPiVn2I1mkHdQirlvcheWWR/LUzNZKc1HArm72gWQGt/D/MvgAvPzyUCBgZrfbAgi5d1pS8eyiGpLpM4UTLWvyBAWNo5jWjEpeZ0p8Z1eiK8ojKLFZ0SVc9SuFXqJnN6ZkEuqVZMc47ootVdcU476HIJlxwxi9SE2MfHCOiMOljjsJVQVYwl5Wdnu8FUr1Tggqw+lPTrVA0v+/3t87Gu6SIZp6s4LwneOwlKRE60ACHInKGZV6JYzAtPrf';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/pp/pp.nocache.js?t=1669637194"></script>
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
