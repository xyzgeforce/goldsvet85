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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/sm/style.css">
    
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
			
			
		var SID = 'agD/sq5aqQHLG/353nvzw7bkgN7mhQalgZX7ZDp0dX74GgkF9BdsDdRyMAxrhnVLziL7hMe79+wFla6yUqvjlZQ8iTQMY5XrFkuquB64mJgKR1BYUC8IXGKuY/2RsUGKA5+YHr2hDD755Bf0Zg52mYwNOezFZVNUnRKkBWWDkke44OKc7Sx6MY2Q7gEPg8LzkkBpBgAWSVmgAX4u97kTTAAlLlE1YQ0O1LX58qvPsDz+Q6iirqLKyN3/Vie4ezE58nWpz7nDv7n/8I1JR67kJIPgRrgyZEwY8hwitMdGrtJuJt+lVAa1G4t6ZDFJBE4X68wOvgidjgqShNaCC8aSurxPsha4vbFm7WD3zb1gmZHUtPCv0TZOjXM4+77Sn2c2Bjb7tEHj7GIWSJSssmW468weB9gELpZi+bdnOhGrrR2IvcD00RABU7juLHMeDDCzY20NoskVa+mC2ZJU5qj0u9ehpfvGyCtWI50Lt0wG9va5IWqpmEasHNoUew3uAqAvBUuZ0C6ulFMlOO7tBCab5iqPz3gr5WBtRgHdIxiR7WvzSXLYtMQLyqoiPkPr/fPM9ykNpwkcGrpSywXril+aXQxsMjqc8RJy/+kyzJeO9Cac+0k9R7Li6wUMpaiir+CInzCi+Rvfyl9/b8Pywi+nlNO4w01wIJKtOCFP+mVx86kWP91bZ9qSI5sMmo3IM2KgrNsA07rKf3kICr/OxQs1ToQmKT2/6vZMlb7yfcYlJmIadMiayEg0y7Z9YsyRMKz5W8FEasl4fjK9Jrck+ylb4TrTJRyjbkaXuLn21+9nwEaw4GQyZYzrBPaboZCLc0qewWvw+oV3N1LF6VFEfDPMsz37EYGKKxQsVU5Gwk3Sq2QhGIXR9iTL9Gw7HGR6mpL3sH31ROkCdcFZaseXtiqgWjAAmpCaRieMzcnBuAbnWviiUWwExsjW23jBGjpIk4ZV1Cs1DNj+U72A+hDfAp2m++jRxW1aJ8Q+lBNmT/sPcS4yxX2iD11qINhSBo7NkBGyH4bY9SrO37L+BbA9NhxOrpeplOsjjVu5KocqffLXR8yrWAz8Wq0I1i827lGm9oJCVXDBpyhUQzB2LiumnM2ViiQyDjWSux0qLvBBWGXPjf1DPC5CxhvBL3MpSC8t4wC76JsycSD8qCQtDYDYNF8MhYDvKAmKazkdisV+VX6DLe+Qfzutlq/fbqIG/NE+j2CMfevBxwv5DUkiGSimeLGqadEjFugum8FnKLocRjpE4UCG7ZAPlKkC4ORXCrGA9QW+L7wA8HoP6cgxzq74tUI63vn9a1ZF9SvrvE8eZf2uG7LItAO6Lztc1rms9pqhKB9ClLLYbjZb8VaATHnLzXX6f4RjAx9ycl+M1jQWbH/0waOaaad0UPD6n5j0JSuAUn5r';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/sm/sm.nocache.js?t=1669637194"></script>
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
