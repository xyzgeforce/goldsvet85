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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/bhsd/style.css">
    
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
			
			
		var SID = 'afaekZi8VaTgz2xhdgf3qkZDIWFv7vhTgPpzwx0Fu4T8IPJnMVusxRYELUP8IweDWyLyyf4vivdb0R91eNNyK7NRw/yaVJhQDtEpz0SUH/iDls6RyGLrcK8msndwkp7+m8AeoH5GJnlfZoj6mMFqNA4RBw6QxfcDzVilazQXMNiNlYc+TRYP/1MAqrCPAm5Jc9d7mbHwi4buUQXOMQDXcyST5OL+M3Uyph1M7J6xS95vvo4+kRWUCzHhxygnPhD3ntNkY6pBxZfdC6QIaoSd8B5AYPwTnsYOPbBVAtpE6gcnbGwwR8C3KbGeePMsrziyBz36F5tIrQ8zUvq+CWLfJlysNNmeERKovguC4sP4o5HEhWn0EzjOS0Km5R50hqhxS99NP/Uyfe3BEr//9KUSdR8cvb0u49tokGl1bZLtuZ/z4sLNa1lfU2j+FjIfJF7VfU+IQPHDAtdw/t9KpE7NpZEn0BcUy/xRUwtTzv7Um+4+RvgfkBIpOz4ym6PuW5Qbejngo0g2SE41aNmAifC/GSinCZCgwVY2flYGL6hVr2LFXX+KutwyWYBw1igVWXaAae2FopfWQLJNofNlomc2Xu+NSfoTE3Y/CMWaLGo1Kk3IhPJ5V9Ptw+rAWB8C3ZVztYewgOdPjbnB2wOUvK1O4OpWWx4pl0JdgPplHZas2a82iBZUPTXmasA/SZFfhaFT7UcOKVwMYq37EloZAUg/jBooJtQaRUjfpfkrZmjcoMAu67F9VgX7QUUarmHVjVuRpOzLQRrJpwz+EPLZUfYhirf2XxFRNdlm1W15g28pAk8xLw7l4kouV+gCjjpgKL1G/jYYkrCkuKRXbKS2k0YAlMZ1aBbLyXIaQ9GgeqEXXQ6+LlQhm1rr8I9bZLEdWkdnzWwAY2O+UPeZSllaMMoOyhyK/v9JdtM/P5ta0k85gBNcFA2j1QhjunQhR3FgDr09G88R8y2qSjy1lGdA1U4hCe38E57Yklfg/kZk0Xfz4d4RK8S2ZAOlI5L7TLbyUXY+IR1C7v1fi5mSk3gRRMnfZDeIViEx88uFGYyY6C4nrLNjIAfTeD7XAd4h0VXW5Kz6NIr5W932vLSk+icGrwnNAouygkfRdoVeVy1UbO1ytZ/+Y/bkQXugtswYMf9fYg6mJtjIe4PGDi1I1bAwfzzMAJOVsMUj1zsDO+clouxi/XEPITi5ZM/KA8aJG03LLzAulo4CmUHhP9FxxGmEsPhn9yicvdN+qZscTs2hqg0vIpKpIQMP/UpUjx4f96e81cY0VaPAiIH3dJ/D0J6TdVKUJLhfqJ5y3IXY7H9JDMqJEmosdkIO6Z0PnT4BVdp+DFMp9MPXcpI24u652C+ZGmKhi0KH7g5yZpQTP3J0LwbIxU+1aves/iemz6r6l/A1/lbb';
			
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/bhsd/bhsd.nocache.js?t=1669637194"></script>
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
