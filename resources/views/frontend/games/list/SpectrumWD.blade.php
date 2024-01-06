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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/sp/style.css">
    
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
			
			
		var SID = 'RzdDYCqQjPZLDC6Ayu8hBqQdPUxq66G5OIlJIqkF1YRQ7fdChlVa+2H/E/JqhhKXSdjpMV09NdDl38FBrYFtAZqnLKOPh5NbBSWk+KbNhj7z7SFBdtFkfZMrHoShXI1DBJstVaY06hcwhYSXYP5uYudL/j91Qn+98zGfQh0b+QrzRLQHJbH76eOh/pfopEmU0zkmboaHhm1df144aJgWxjcZ3ep5ETlKrsVQuPUNa1zeZyIhDIA+6znsbgkRBm2n3PWC814gccZV8NuhNiar5OQa8RpPmBqQryBA74ncmex11NATaCxyzcr6XQFFjxQ3YtPiYZEUxf/sLpwhVkQFATSyzRzs3COG7J4x4z/l5a+BR90h3V+GN37oHJtumPJ5XRSxYP3XyBk4hr7TMibSuCyHnKmMJ/enQSX/xxMfEQRC01PVGBnurq30XOd//9wdxTN2X03yV7D2P6R3BAwdJ6/drPz6aBraQrwICoAxn2mFoKi4eA9b08eV/ujFAz7uUrB9RYfEhNoqdVp7q2+g/imXHv/bvBdgu62DrIKbnU/0SBv4labKJbu7rRBF9m0c0cSxZchB1ML++DtVHWZc5i0Llr+WPWpkwLVNWwHm0zTeY7RGzZWFHPmb79hNCd7z06A/O40AACzgRVQCera1LE0elDdWdDvR3NDVUV8H0/+1koyDVHbeCX4IxdzCYM6kDHWLH9vpXyxQYCbCNdIQ1Z2KhoT+//RBGT0CadlEgy/FaC7tt79ev+juM4oVpEtYJ1PKY/5sVKxRYUb6MOaKCaDBsj/Qb0eblRicc64fy1BUMNyi0m62lerUSSlJFrTJWDBZdBSop1Vvx147fyNMW9SYcmtoN04/HwTzB/iPU9WOy2SggOavR/7/lcj9SXk8eJTJu0Scu90YYfYOAGMCO7ayx4afzEbpCC5U9t2MKXIsOlcImZYphrqrIehWf1o/WqE9D4q+RXyjIn69tn5JbNbiI8VwsWbWgOB+miObqXaUSfk4jcXV+id97xXbQl7BpMdyqUm3inFSNBF4YXQ063d1CKiB7tT2cEssL0UiyTsnLGY5nmjm12ao2tWRfZwzxgdjDS5oyA8G1dAvPxkxnLCp0fUqkrbmQTyN0g2HWJE1C/3u6yboxT3HACLo82HAVn1CSwZW8F9iLVWzQ0kbWscCw+CJaHb30c39QTGUbFkdvMB5548JEoAUqLxHoI+DBjfAvUW9H8SoghVQp8Vn9pbtR7DpJI2xYIiSTkumdE6kBb+koi5b1TCSBsevjSZJnKNPaglC+BkVacmlY2iNnBhfwBK8eKyh9DKdaRqKDkwPBeb6Kw5W5lRs6CKT1sgP4jUEB703Ez2D+TgD2nstfz2jTZRG5Nzr733nqA9e6EvAEFE/U1dmf9WUZj2iW+A2';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/sp/sp.nocache.js?t=1669637194"></script>
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
