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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fpd/style.css">
    
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
			
			
		var SID = 'BWl9NAtRtgctnUTeBZabq7LzxTO+l6xJuRCb7EIbEoOwx5VV2gc1HpyKHOlPZUzLR67JTLr2NV1Y+yqU/vPexlJR7fvZ8TOdhTL91D8T8SZb9Lwm9J6OMc7G95CAuUSR7aqQgm9Fk9Nvy5DdN6CubqEa7jYyj7DmoS2oK2fHHRUmKBdaFXcl5g/YM4AyzZaF7a8nyjdDcQxE2bFwpl6RmmsOCiOs9arlWtceEWothwWH7n/UoYZ/IJoad9ZcpJfXSpKes4yVg7JkYhiaVpmWXjhNP4sYC0U37Nw3Zrfzp1tEJ8L9nlf1gaV1rzQFJfEe3dkyjGAU7RZjeYpu+EQupMRrID+rH/s5TgaW+liCh9zTYY3IZ/mY1KAgYAl/DjA3ilrcgabEozyF2S1MlVlOuHKXsxplb724F332eBt32fXcsx+8xeXSjqYU8JdcgMGtrsyFYgGYO+Lb+1bj5eGwo1kkd7YbEQ6TexthxInaqlX2ukdJbb6X9hZQS76mBgUlTZ7Mz96rtJJJy1Whq25Q0r7/iAxzgQU7i0SS8ma92ryfBQpN8Qdqt1Abj8fh4dNJrp0inCFYLpKZl5pAx7UlcxD/gNlyur+2ZG8tlbrFkfPd9NSOBiYqJrEjO8Jhz9R9OADk/AI21A6iqlpySSCRj4lncTLDMHHi4xgn+nT7xyyJzV+EViiYVgl4YyLYz6j6b5ONaX09QZcfRYiwYaM6sutg92yGPTWkax3RuzEq8xXC/QYo10b4wXQh/FLwgUgZl4FuZ0TCeeerSly1pR32ofW7AM6vDlQg8CWvicy5Qsv2NILixk3H41qoOd9KDMa6GCjH55Rotpqu2bAHNI5q9403Stq7mpKb0RFPeo4P3upHhxtDnUKoObLn09GV9YVjx/ZiYUcFziejdo4V/A5zJ0z4MDxKiJw89cjV0icVhwizyZJu6Pbi27FSvC+3QC4WJ8qkcVm81jVxH31LwQd22TaEEntuDsELInw5eHudpF3RroKstfr6G1Yy5sqRraJocnsBZBw6eaQNkUI3dm0Du/TOAwHRmrx/vWPpOwTZmqYw63+6M9co/auE1OiwYgKWAB97HRlzC+T6Ce47Sg24YQwjri3vGxrO65R8mxbV9h4XyxTT2jPiI6uj7Au1vfKtPZlBJg1t+fV4936PPnwJwucCqnGEbgCllh0p4d6QlzYH+w9urWjrEXsyRXvnCuBbjKMgYGaqe93N7Tk+hvz//+t1eOv+fP09hCp8nJfxJLdRw4coKzblY1AH0dQZjV7JaOhTXYT9r39vN66/LGbhcisN3kaKniV8dK6b8zXqG7sr2HGGykDIwZuSOvxRyY3kw/mfJT86/LngYPEHgPPIdp4Fue37BE9Q/Nnq9eU/XdGepTynW+fNrjBm8yxPbeQZ';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fpd/fpd.nocache.js?t=1669637194"></script>
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
