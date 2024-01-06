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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/nl/style.css">
    
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
			
			
		var SID = 'UsgeSj5l4oC+fwHtHuaZ2nTK2lIIdKAaBpowAC8JzcQIUJVCIxCWf8iLcc2ZUMomSebMVxc+Kv3ptrcerGpe9aLT++lilDiIVgGkHYNyK30YWhThYhPiHARVJbDfsaXG1X46+uK7iTzJ9l9bLhSWqtrfIiv/b+4gFmPoKKaFyThP9Ouw6DGp24avLkta3exUADXz11U+bQCmiBEOlY+RtwNDYm9E+Z33THy5BKE3DwfT6fifnt3Hyh0prCYMMq6IBkPv2fgyPbQPVJ/Ep4241wqLYFpUw7UK6U6MI9HYjaFIZXBhYlYL2OGZEkngWMQ7677+8xdEVUeDXUNAq/acfTuIV/8rBVM+0Ohi0cCLJdTH21QZEOMMnmPtenSQmbYZp5Xw0Xu3USXmsvqOJRUzaG7Uzm1hBKgQzfpd47uLjCByE0zDbyRFoM7bVg3FlGJtVKDvW+xy0squLZJ5KkfCKgZDzjsxwGQ1X8fe4+rVBrFySUfkGcPdeSXz6qfVQlHznqFPgvLcB/0U5hsLLhJ4HNbFPiwDmvx+GATfY/50/2RFzsv2lKPeD4nzIJ6hOPBa3pvehNVJ5WFliRilDc0XQ+fCeFO/cUxfh4IfmicBMyx2WqKQCGaBLtvlDjq3QCC61ik683sy+D13b+fVShD2hrgM2zUTw7opyFqtQB8Dep5zuRm64DCM3bSfwybIJTe8L3GX8QPQjuUCIP3qCO2Cub96HCYEvt9AJcdnbTDfZmBK11ZGuHzaBwp4h5DJZyZKG3J44dBcHsc1M/2FKOkvwBqlIMB0Vd4n101xdhMLGgtrz1CndxifG9V9ihM7xXcoLaes5GVEXGpeVLdPDu3O84VjwtfCpSaw8ejowQrh+kGkkNtWCaeVO4O/ZsfWX0thOZJyQys5zVru+kX7fum/W6LS2E/7BvWo0wnt5M0dKrZn9GGLkiRs1NxdWRIOtecKq0Wpge7F17X7RfjIJM/i1lCvC4xD2ITAEOlmzRqyWHGWD0o2T+vIoaLqu4IkFYu9Xjx86bDfmrg+m3jRTkaUZNJf98AkLEdtW3p8afXAHnpdPnKFjgkkbqVWotI210wLifWuKHQSEC6Z9umnRqUt5CRAhAchf10qwxpUFWZdel4cC7PqmOQ7vbLJGjLCElxvWe9rgEFEghnLgKunBaLsvUUa2drhch+235nY1NVWdSojSxGL1wIAxaQdyx9j4KlXTwyIGs+Vlf6GKa86PvduZrfhIQfy6L7VOOCZvwcsQcLS9Q43gUuWutJXmsY5oE0GPRhXeUC8FKf707XfczBs/VVQ6lzQMGF0+ZNjTA+DxT5QpYP820h1Rqrp/LSNLadOGvTFESY0yF9prbkYaapucoEb9qdp8w+NY1G+9YOTAjAjkWyZgB3o4XUIFJhxtyz+Rnw5XSN8LIQ93Tv7tUQ1tOhy97cYYCssKf4+9/o1OLU=';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/nl/nl.nocache.js?t=1669637194"></script>
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
