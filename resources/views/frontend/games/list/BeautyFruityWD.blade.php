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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/bf/style.css">
    
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
			
			
		var SID = 'bDQRXkzJxiWKso5QAZlY3Q6Nn4YlYZOuA0VUl0n6/XViVMOTehvuwxX0iEpYiLOqCJ5sFrwRB/IESasm0gP220nrW9haeuAgXv8ZFQel3pj3nQbb8mcLL4PLzU/ycq53eJLo5FYVpJRcSAzQwnBT/6XcdkDl5gkpM8u9kd9Tik2W7A6asAGN1toOlPEHgqvXPkLZWWAYLHdsHvdAp0+975XsOcs/MzBsHmzRF6CtpQEOxv7jzOLPOiqp0kemkovbFoWmnq9istaRN/AvCgtZpQ8CnxYK2Mb7FTkhjJHgb75IVYRu9IPrx8lW3+GSvRAhwj/g1+L8tVThdGYCS7x0J8ux+WyLNhIFL6XuJKIIbtQeq/hwtt9VLmdR45VQhC+HBx8uM9FTL5l5td70WhUG5uKDMLVALf5HeQHdOj/EsTMsxP6VICTRtV09VdC/2a2bC5S9df54iLij/T9tJzpv7hANziGbAvv0KWhsIh4y2SRXw+lbyVPjyQntogVUPDLSq1xUbQi/NvbpCeyKW7AWxIOQlLzIw4KrKGOI0YqASgbA4cjbwcNGcnYevOT3/fv5+4t94BTRgxBzXUWI7CpZqSsgSAdrgjPA6eCE4EUf8rTbUl9nkw6ce3bdXkXidmd7sW/LAtWYCXwwkOaVgFbhayqR172IM6eqkF0OZMjcGQFnOEf7PETbnaXd2u+oOD2PF/hL1GKcTbChmUzN8EgqfdBvY0fBAWfhRYlqjHLqXhaVFA4iw+0uvPXZgTA/4mX7BCu+6dl2sMaovZFVat0i4I5SvAsKAaED/MN10TSlOkJxIlMKdqq5kIysjarAjxPLkB1g7VCzsNS2tdH0C9lLyl/6o6E8l0kLIKPLHc9iqpelU3uOq/NqPdc7w1MaXuwOGIsWPueo7UFwpPQR8t0QLOfaHo1Mn6rX+5pGukSTU+8GMdwIhR0u89bHB5C7NctetDs/oOHkcTndZEDAdluPB+Dbz34+p0d2pcptAifWt+ByW0vdnOZWBFb9vjr9njr/TugkeDTa/7yWdYPbNYW4sOqXHxDsLURu2DiIL1iCjnwbfw/ywalBzffuUuzGXkpQMo1R6cR9rNH56eBxWajYCFjA7flkEE7MVwAnWIe0lOLtqusoCZv7HqaGK9N09eXO1utyZ/MVaAXUm6p4tRbhUKqaJWx1zW2/wZVyv4ASW3PPnuyid3m8B5lKn+nX3QRVw0/VsK4AgB2Rr9pYlUlDMoJuTs/X/AQl1bdivflSg4C2up6CC11k1l1HIKzwDG871KD75oT5LiEC2uVbdp5RrtoHNqXZZ1tmcJMY5qLWhMIcTbyvCafMXd8I/YNw+U7FmaoWv7XYEuhL7FHZwa+2Jn4yJuNDpSDPgamp0hKlEtNFwUTm5OTjIspwbcBOj74X';
	
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/bf/bf.nocache.js?t=1669637194"></script>
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
