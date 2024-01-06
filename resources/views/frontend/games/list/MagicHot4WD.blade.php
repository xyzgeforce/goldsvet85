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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mh4_2/style.css">
    
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
			
			
		var SID = 'QIxJMDD7L/HiDxhwBVg/muBxpwPDaOSaVeynYPcDs7lkZIHCA3JkGZDVADzNu5cYojFwiQME4+2htNvUhxMHfg0R1J7/8cDGJnca/mnCnTSJDkA2lAXa5SyBnk5501v8YLmfvNqNo0EJF7VA08q3QpJkFdOux6mXpqCi0D/13PTHYr/c3FcLMEssHLMpzZtNmSHwGUIiG0o0JltvZDLf7uI+fjNzpIO7LxhFL/S0cQr/Ltwd8O42AFOBQwIuWh7B+vBWLmupmqF5l1Mk8K08Q+shjcwp+glABIFI4Rri2VC37HRzOw1/NEbgejhZUEA16TomgLRCaA+5/MGcASxx1xCDzqzGgIMOQOxBO6chMpH0pAL6Kw79KEY2n7vXItAMPaZqac0z1yOKmBD9Z8Et2hBaT8+NSGuQglQK1cyOqcCpv2WOG17apRNrSo9rpvc0y8E9CyTzYT9DtMThdd4jHH7q4l2DKZAv46Gkn3N8G37nTxNTMRZyk7C3XkxEJzXgy22NIORU30Nktvm5mL/BKzWhDa6mQFaWOYiAwAYDVl7SfdkoO9nkQPwL/EkFfPjskTWD5bASYBcJPj5h8tAb+U8xZvXVp3CWeXnQoeLixoB6DNZNmAOG/lKPao0PqWwozx6ddZE7vQFjE3dxfupgvofbl5UuSuaUuYGtIXtdjNwxZi2aD5CRI3FlTi3teSbaob6V+MV0Oc26RB6Z/9rqjfdLZwlyW3iZgdGngqiivcvoCCvTc3M1VZEVhCooHYgE/0SHiianA6wLa3gH8/5NJIYEAd9bqIVX3LD0HJdW890oCQEIqujIUq4gv4NycHrT3HSH9/HcA0D1qpmQk9x1X255HsM4Cd7qW8VTKwEQHF2e/F2QIDyr6FgorFpaJzrX7rl0/J9mz9/xFaPmHi5yhP9QX3vI+H1imBzKrki/SfmjglWDcXnvC/K/7Pq1DP5rRC0YbsX/7wzsUv/Z/b5Y/OhBkEr/JhDk5EG9rMW1hOXTbnyfiNOaTCPPbzQPaAHuH+Lkl5mJ+l7Wr/bO5foh5yWLhKEFYjUfZuQu05j+647KzlWUtWRt3MAqxX5pObb5mXXcpj3waJlyO0To+8F77YC+rReEasn9wVOpVgbnsM+VlF50iYZRs+KJveBPqr9YG1MY0ePEH4AQs5vejZF0rjcAu3aMFLeRKC17wvgftPOGOM4Ozqr8zJjw4atUQNdRJ7NpCT6rGsrdEJxS5JUFTGvqYkS+IjTkV1N/hTTK5zAwjQHc/+owPSNVVIQemjCioI1RSu2iRb+446uCW6rdgYoq/k0ZFPJfqhDxk3QJBD0mhoayQmEhS0ca/0GYjxp0vBgGHXyGg8vABO7YP2KUFSxml6sMWZI/wgDIUMV/eY+Dt0pWy7nNrkeFL05FTsSS';
		
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mh4_2/mh4_2.nocache.js?t=1669637194"></script>
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
