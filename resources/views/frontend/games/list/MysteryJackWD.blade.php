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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/myj/style.css">
    
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
			
			
		var SID = 'Fu7bYJW5JsIGt5Wwesp/4iuw73h1GwmWLb/K10ulRv7xe5+3vfiihhZsMeL5z3wfu77ZTNrt8c0GWZBcePmFkttD9TJPweMuRVkSgRNx6L4Z9BNd9egdv3qvTW5Hi76yx6iy9gtEPjYESIEEtAb/xK2INPehmtEICTPabUnIGnGMD7ypEp8vzXUTN4d8pdLscBm+TInC1BI08WvJu14mpVvl2RUXjtwBBBa1gW3URHPSiS+UI7f/51cl7EfC+9uzvv5irbDOvCJVFOCfzLrsRyK7fojuodUyp1K41fQcaOEJ+paO1sOMmxe4kSqJJouNv/ul+tRufikcd7QN2IKmUaWlfW0UWlkdSH0IUGZrHoJnWm6kaWSlc0Xgj5FbdJqAGeU0g4u/YHJoxD0fRWIaxR2ixdfS0djemXdIVv0P+jLCFgh1A5rjRcHSAT2HBTIXDm4w0GzyxsRKOZfWPX+oOm9/0pjHMNehf51OqmdJIuPQ/yJ8axACpkQu4nUvp4KnLMPbIvX5N/QMHv/kcxaaCYIcTOVFsXtIWwg6AB3tPvavYIn6iTrDH/LlPbbmyLlfK57y1oOWJwp7I/ZEfe/dyNm7jKhM4yuN0dl9KRhLIa98r/DVlJthCmI4d3hOVWZAOyZP+Xcvmd67FJhSoxluQUb0hD4dL0PwdgysyeMZbUt4NNKy/n9IJEl9Sd5gKs7B6YnBa6QDhGxv36qSCPEIbmhwP3r8CXosB2lt0U98HctkuTb58DZDysHmBRG22Q2CG883QeKuHqh7ofKHOJv6m18PPJ609ae0yBrEvCzWBljoOaxczxPCtl+pbiseKMBxSz2ofQFZ1AtQB6aKwmZA3y+4idWwgJJtd3gMHwXvFm2bocf9WdKS9GeuIW5Q2yQQwK3CaOwezdLuYRBLdt6PSfTgk0V/YiJbm7W7FNcn8PWyjSVVKu72Ae9F9BR7BnvLpeKQIVrhVdxs8Bj8+AH/BUxhJtR0X7xgU7UO04/0ySmuUARJCPunBj8J7uRXVhBdoo23rQL2pBncJi6C2zY9Hxt/WeTOArolAGj0U6kxtHMMOeJV914zycwhLbUsyNbDOeYkRaK5/Lq+TckgBPldDKl584dE+Bg+osuWBusgbuAozQXhVvzDa9hj7hOE+JUOV2td/UMiU1BmgPSg3j1ZuuUnPx57bJuTh8W9z7Z+CIiAvBqTFgOLzIAcTxLKmFSwm8CuU96LKZ0akd5LLfgjiDnzd+KJulwr8Lc+xUHYgE40K3BS4XLPsWQYATFNO9U9qEwbzEo1qJZU5g9hCPqv3hYi6zxp8jqEKQa9yzYGRdiIi4v0pisVEObfSYIhq12f8h1VDnl/KxlvZ/YBFqLPzCDxTAO88ylnoJLUK77HTFiV1xee1A8pfu5K3upF8US+';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/myj/myj.nocache.js?t=1669637194"></script>
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
