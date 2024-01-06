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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/fore/style.css">
    
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
			
			
		var SID = 'MC3H3Zsch5Wz9B41QMoiODUQ8y9ZN+TeGONWnaiEBF+lCDfaLTymFdKWZcuGpR8WX55DIMija2H+2FPBwCniQvAUAxEcDUQGqKOLN2nAG0lN3NAEjig2MAtp/MNf8wimsfNH5mhos4S2noDQX+jx4g86arO6pG0FiAf/JK7q6ccwM6xpgELsbGA5y25JUEXt+7w4mBmI0NLRq76YoCPV2XiigD3IWmQE1MwV+W9yObh4JvHju0q2z/1h8ef3/Sh+61U4c2X5AwE0kKsROw0SZEWiIUtsMrbee0f5kOMwBXw9oSMxBVRTC7ZnjNr6+2/FZaNDqBUJQW7NC8E7/OSXcoPCmOQ6uAHG0bscX4crxFv2XajQz2jqK/bG0X6PwM8NqLAszvNylbD4vVmA3wAUCbaf/nbus1Z2CLqpcPd7yFEVfnwJbWS0uYG0uecXKtN0/Gte7bNYw0Koyy/MxoGqLU0ddHONfZPkPvzFSXSvFadTNeXszffQvuLntQwjExmbsIZV9rxICyiBfnHGjO+mnOQFw+cZ42wOUr8OwKEIiI6mx3iC4WjFDwiIMm3vvV95SIJfsZ2N9jXcw8HKnXKPFXzuG6Gs3Czc1RizcrqGrWUxT9s6zy2sdJyTyxh/FqaVOlQpf4WsEmQS0iUOCJXQjVW4GlY3r03Z+PtQgW0B5tj96+9t189+65fYCa/SsNEMih1W/DG9p+GkGYEpXO+hsVcZGj5uyMuoKA6v8TBFzWSPOCtxW68OaqV8GxpDrZhlrnihrl2foPgecmzpAxyS9ee6dC8aFD7EvxTiq8sz+iO6TuVb+JkitfAqY85LJgi1XgJibKYiyAlOAxIMJSvxtDPEeTao40ja8K8C2E9gkJ2bqXG3YElubX2DGxQmOI1dgyICtJ1j83b8UDyDQ3AzYSwDq/g59iXuR+Xljy9128IzPOCujZzpMZefhMCeHA24AAUirWIZ5v/WAPfoTSANfabz75hUnOCFQYDJySDgrPkNywvIpx/Az41HKZwvrGI9bmrettQdsW25F5jlJ6do6NKTNGZppvtskxXX0PFB41crmdeGwlAe0L8Cu5CLgxfrUwCx7cw9uZ0T5/fQyaZ8OgPTmRmOpVz2o5l3miaLBU2SOXfbtYC7zvDVXUqsEPyqh4o0xEOmZKG2La87PyB9kA3/8TrwGcHm9OFGZSgiYS4BHcOjgy0TnkxT7hYbMNtn1Sx9fDsJR+TCotCFDy+XHYc1Qo0uLfdaU52nvx0BPzwiB1qEMsLwu9/1ByN0dBPgGTryFAGDqQ98dlQqFTs8laKnpEEQVpW/k/Yb8lCp1AZXcLnI2xH3qYjseLG9FY9oXpqPrKB3l60eme7MrOIiwAFQvvwbu1gbNuNA0S+W/S0oEWcvQsjHLjpXu7sQ99gF';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/fore/fore.nocache.js?t=1669637194"></script>
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
