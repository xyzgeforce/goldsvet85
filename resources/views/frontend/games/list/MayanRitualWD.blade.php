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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mr/style.css">
    
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
			
			
		var SID = 'HtCzWlru8TWwK5o5lRQDAL+22rzY1Pq+GsBtRC0kS66k7XcUzKI+m6KK7qCnEwqCz+V+ewzJtkKDWRfxgOkT7KFG87q9gNBUlqIgfFht+1sPcONYF5bjT41vGHhzyJV2GzlchpgG0xCKyighoQhgAremiWBxnLMfGLjGEzaKJayVth5HBGXqm2jar8eiUoVi3GKqvXJKopTebiFN4SbJG5SlKbdvadC2Ub5qSIkV/UHZ1kYBVdnpOCZtTzg6c2/tt4ZGfZiE9c8A7E35YZUvlrKpY0gmJk4+a+Fs81KUW/yo+/x0Q0V6Zu1gfdYfw4ODWMjUrSSigcPz5QsewbfN1+HQjiV0BMwcRfS8oW1oQcbj8RIzMxEkR31QFJoMg0nHHK1QArtvxbMmaydANmA+7uYH8z8VTI7f570pGZQ/NYuXDCG2to8u3rEACAG1K+BEZziffqw1QmedDp2IDQO7z281vu2G091EkcIoWl4TNmrnEtWOTSXqx1XMpl8eNqYPg3Qrax/xJprPhDC6hNGvF7p2Obw69XrgkpyCu20GG0AFhIwJKbXNgFNGmj70a9hHPZZ9cr+lGn/15RM/brGd3DtDMKLi9eor/etvKc1sf1hmWTAKsS14NhEKTqXHcKaSAR3snbY1+AhADiGukbbP6h0Cg7jnNDBggzC/2rXaMxeVD0NqtmT9aq0V+xlc6MLE1fCErBIpVLI7CjJ5+DUPNN90drsNAW+oWf7QLzBy8fAE9/EKz6Ohj5CKwcZZnuVN2lP8338/9H1KvTJs29Vs7ot+qRXRWXF2OCQ2qbu6ak8IXLi7kHOXO4Y6Z+I781rraKCCK+69qKeWz9RI2IVlpaaEINIoCIX5zyHgUllJQGf+UhodbCPb+Kwv6unlwmqLXaR0Dzb7dQIye6V6x7Ih/e2BlcYdBNlP3QsvpSvsLSYWR+R+gOIFaWqFnOqHfH5MMKRxvHNqqSCxZQnIAtCVAjtG2Wdo++ynGmd0lAaKzIbjRme1l9l6qeN2F7IVnU7f3kAdVuwBQihOJN/mTg6Gqn92Xq4kUQtbl2q7xPA6/GJP/HYfSoEJl1K/HMksyuTsWV0SVLITq7rcI8B5PfRxXS8BXVHPgLJT5V9gKCeyQxBdBpvHQGoozYU3nJU0mRujv29INhiJWd2U2SjkxOmfMk9jy0Df+46E9anZLZhAdlgL9Q88Xftrcm9n53v4L5PLu5TrAGO1uN4X3Kn6NKNgwusv8hlTHeYpoWYi4MAEMlxIu2ALhPr+lpjEt5NooGbO0AOlTb5zXgEuvG16ui7BRYF0Kj9qyMdAS4fFIPympVyVlHNe4MKFx5a6ZYH9ealaY5Qu1ScYQDq24VO4AjDEy9H7lWi3tXVz7YdLqahnlU2cWfcsrSJAQlbfdAzGKQ25';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mr/mr.nocache.js?t=1669637194"></script>
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
