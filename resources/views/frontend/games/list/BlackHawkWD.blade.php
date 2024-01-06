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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221321-204/bh_2/style.css">
    
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
			
			
		var SID = '9v16MGqMfP0yjLgAC+v7YAsAUwyfPx+cvdSezQB8W1/kcJEFL0btMqZ4OowsEuVc2Jnyr7qVH6vlcklCTHorG0DZ/G15puLakEvqlyLIEjyMIG54TigiSn0YPrz/QmVfuS3t3QBFJJnbbBBBRlZs3YtBPERJrPVGEqEXou6cqGvvpCyzWBgB56NbP5dTdeTs6OJLIV2JNujI/e4cESDVwwmMrgcXnh96lnCRARlmW/RwG0ZKBSz0JnQ3xkBAxvFxdyOOZDtQ9bS1LPvZgOYib+z04cpyLMaeBG40lU7xurljQE3SZSCK/U/qILZaVgrdiwTSuYKsVyF1G+DukfvN4MyrEAo6Umr7+JtvelalZEIGTcLa9w/+QxJabbTYt7wRL5xneO053GBiswUyyrSIspYWqJm5HQNMI8bkVm969cfY+ZTxFnH01+tbJqiokiN5uLkDy6yBavHhsILpRpga2PTQA1YQPGh/BSWb8Oz70vHjU22XxjjFUisfYVx9m9fu6bSorC/5caM40Hd0p1Jg8VoMYWgEgguom3Ofh+o/wgWjicDRMNVzls1FZiliIt+IzldBAp+gSTZRNcrT2p1GYMq9hzh/ElH+7QpGIr+X8QKtVQFHsiP+p4CTCuz1LQGmfJjj70Dk/ypS0Nm/vmyREnHX1ZwUZW+haatpyyar761vHk9vxekXWzA62nnpjxU8wXZbwbkOI+i1YpT7aS2ZanxrdZbAkpy98GPuYVBWZocCaVLpfG3t71tsMdB60t4YY16Ad38T3uq/LgZU8RtCc0ja+ExjwOxrcNKrxdqUtOQ69O1CcJjl0fiPevHkx2MVFPGJSq9eCNrv1bWnBQYdDUZ5vFBE7bYc45sKiltFTt1UNFcmk7ctmCsZGE4t6auSBRQNf3XXfRfSrgNrSIBswo4jZvhFv74L7Bdan13nCU0E4y86jqc8m7l9i12VJ4zKhxyKk7UdIa5oR8+HIVoDfDUGFcHRWztPyYBxCs3ntITlsBiuxTPKBlg024Wh4JM+DZK+6K2OgHBaJb0bJhF+vH3vbo9QG5Rsfvq3o87JhILZSOs0OWtlBeUNEyodEBo4fSwhHs/jPvZmOEYypRouaQtu+V+1ySvOdU7i7EKImnlKQVFxpfHB1l5TVqHFsVjklYHKBBhG4zsnVVJ2byQfdMHKqTKlnd6LY8lJWvjUCYsYEVbLwEGDhNlEBxoLG2N3s0dYgM+xJh7WMAHJyGOJKPzfBmGPqYjLfwHIls53yOhDT+nHLDY7dbCJWbvyGPNACggYCpJYiXe1ax+yNiUyeolE1siQbhAUg3ddTZ4oo/4=';
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221321-204/bh_2/bh_2.nocache.js?t=1669637194"></script>
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
