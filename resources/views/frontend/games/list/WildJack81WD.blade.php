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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/wj81/style.css">
    
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
			
			
		var SID = 'njX/swyHzsd5wBAa3YTD/w7N+Slwl55/LfiCPy+Jh1uJMbQx94CZYLD6juzjCip0gN/uBUpZdRzoX5pk8h0UEUW/T+6vRXcT/O56ieoU+uDRXuMmERZ0yo+f0qwhtgZWTxL85+kVvHel1alQ5s/+U+ZOD2Nf5liwyc8/ulEtK/MInIqOHv9OowCBkTeXi+t/uEVWV31sz3gbfBgQD98gRh5ZkF+pXQKOJsxGe6xd42YQ2h9GVOWaqhx8XqcEgxtwQ8GAkMnLix8eETtrDwFqgjNKzI6yBrNmjovIbBoY7nAzmAKLR4sRufiHQOQ829SeWpJVRvan6Zz8+pFpgJcZa8vUlCPsr/+JkrGhN3NGEzo/sEhi+8xfztqW2QBZ2XGJ7e991bgQegMNR1Z/XceoYntvFxNIrVW5OKhUTCm9K7nJJh9qmyh9d6LkgmrO0HXnvvQySrXieOQBRAUxTVfzTfhpZ2cgI2fC+df7A9xXfGKHcL2aJksLKcXfNSytGOE6Dm6YIG+I8SwxYf/3EqxYIp02ccY/LyJ9fUJUya/1Bk5YuTrXpIxOhjbnX8u6vTYlKQ4p9hYNSzE3P8TsQzZhP9rLAeRnDcXsZ8hnSGEVyr9nDc63UkkAlrFd1qBhK1X42IkIgSrxaCqn+vRCpff8aBfE4wg+81TYnXh8QZBrOktA9M7QBb9hVjn1Z7YoZ9Oe87mrg3HcLIT4nOKz8vzPfYkNZ07Ctff35YkAlVkQnWK/qcBHlmLuC6eqK4NhwX69G1h9Q+8aVP3bJxUKzuQNpp75HRfYpCa7LVekc3C3nGRG7b2tDu+4h9M8mDw8UpFOhRsW4xHDkNDftujl0/FGp390vffekUOThEZBLXFACGJVAr+EwwEk5DO87qPJxO65qiJy2kRJwGSkcRLkGExm4eZ1hDqhSjRARZDsj5ZcU5JlatFjS5WmddM/ibh9AZtfYJ4EoTJ1cExRuVyQWFGfM5sO1c9GAsLds5E3wfJLwTFwbnGAgLf+X3aJi7aYHvWbFeInd91s2TWRK51aWN0MYgmz+c4E2qVXwXvJyGRzHiDfeaKHBFIoveEugHIlaNZ+bJ3ROxVBvYpYsMPU3XGgzQk+EiyDouLnpVlWiM7qahpv+otFERTVg9UZ5tGUlV+84kyyucZ/tBFnzM526LTajcfcW3OP6zH05AoqqyaB+MaXdikB+3++fQfOY8r/ayJLuuOlH8cX+esUTVXc4E9dd0mRMsacJrcgB6s7e2o0Xd9QnYM+mFWsp30XwJUSegaUt/tFIz8oOwdYGgZm3vsCUaoK39Bvuahds9C24bVilFJkNhL7r1zGWbtszuqQYMxmF5aePog2KKUkEEiWzvOKCSST2CKG9ugQIJic7IcXkE93/uBiJFRV/EObIxGxrA+I';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/wj81/wj81.nocache.js?t=1669637194"></script>
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
