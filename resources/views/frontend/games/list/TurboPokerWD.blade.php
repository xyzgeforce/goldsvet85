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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/tpo/style.css">
    
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
			
			
		var SID = 'TmUReVd9yluGkGNWro8PQqWBTReqOeW2I79BcucmQ6+BqyiOgWQ9HF99/XQrXvnsZDGDob/Ll4KctzQ0UYU066mB5Pm+OrDbUZK2kYQ24wcAb6cY5N+atUx+SqKOzhcm6CefT/R3XaDT27+PzVjmI48Ly6Df8UV2Vlqbw7zIqzXxYLAnt1zZaLORIpxE3rK6/0o1VDK9j9DuEGuRerUV+6C5gK9E/WzdYJP/M1wD0kQGTAcKoY9G9YmzyU9Rea4wuaK6Sr8KjewBPHaVeKMbpeqyX9ADsUnge9uBlu6iyqWu7Qby9ocgAEzT3QmXOM4eJSQi1eQ3SOgJanYRiZFqoJiXHnrrI8kBGxwB1uj921zSUoNj/47sQily4YI9LQjdvqs4q7j4pEOlk3pLbTyN8frnrIZrOcUvKjdntQUDBDWorhDBH51iJGshkum7kurjKVkVQxEMKz0+WdOiUgAlhO8Sns11NNYeFIzQYcDb5FoFKxKf0gUCJIv/9kPBpq5GW+IboA144Q9yu8htklumdNpzVk5tS/AoZm0n642zVofWev3hwD1wCyaIlxQ5tFBVhKcacPtQUUma68pzhg62aFdAiR3cNdOfaGZ1nIeQoKrrxTMMiEMFuL3rW0xY2/SA5G6kV5JBUE10D4+uvGGpkNe4qjWCCvwz0VM8RzR4OtoozY+LNxa5xuzC5N1gQIeyTKI8qePbPxQu0GR5HmHPLlh2A4Rk9jgfaYRHk72xsjiw7PJh6JYgTz/K5CTcQ19PUFP4Ai7aGdphNCIRiDkA0HFEEECWjQAzTPafTisFI2epH2PmvyLu7jnqb80zkPFhtxuJyNLKi07S8Cb3Jt4UMusPygJFmYSVdcFoW7gZTwg2B6sSHxv83kABCryBxZvGzykn7qMk7ijZy5+GHDtEBy0rpEs+daUKcRefbfH6Spj3bY5RbZXG6xlLqdX4IeRzqdvBCP7ts9L0LHjvbTnXT/pFTEQ+Y/lYwzT2qnf3c9E8v7jJ/q++9HMiMstnWYbeZOQqkz3dvYvbgpsF2fPtqpeRqmqB2i0RtbCzCOaP/qGe2QauVUGWmT0XCgL0KfRD3KWZrBhNOnDWvslanUgohW1n8aWFNUw0IRzxka+WdigABZ9GzS7/AHAKaiJPISSVIP4Sqwscj1kUxDZoq56NPeHNTaB5/zPWrc049W3HCGU9/jzKIHyPyZtOxIy+5sQyYmePBrChGk1Tmq67zkNMvjdFTg2Ey5S4lW8CerRAVMvrwsp+tggsjJ4ggoDDQkApiTNOunCKomD/gy/SICo+e8nSxhrsG1MD3aJPMgfCP/s5mn2idlX+GXwuaSIyBv4noHvhffHhRWQU/cIhNVXR6EqFbSdt3nj0anm3vqKSg0hZAnOlWw4Gk3tpSK+cpqQW';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/tpo/tpo.nocache.js?t=1669637194"></script>
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
