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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ms/style.css">
    
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
			
			
		var SID = 'lc+uPE0W5ArTQ3/2mobJbHK/0WynX/3Rf0NCWLTl+JkCbEtstslnO2QPKE+kPqVc7A+XhoViZeX6uRmihWok3QZKhDZJpj1GiVoM6YubnpJTPMq42uVuphtBHe+ad1gUpg2jkNKGVZRwYbsBWs7f296XU/yAp0R2hM8uN79/F5pnowyzxbKBE9/le+oNjQaMKWHfbS2w9AGw9tcpW8uit1EQ+1J2zPf7kB5uTW3xLQgl+Z84wmkssKbshaHmgVLnILXLYX6OQhyMNeNt7BRkAZPKxgEW06cs63VuhmgQLipYAzYYxEgGTzBKJ1GcX1nKzLmwZLNcpZXjcVufI6OPiEr7kG8/wn7V55bju6lYqhbWCfR5oiX6vJ0RqvG9ZGFCt8Z8Bbh7BzRbHWu0sM9rlbdaOU5KjniYIVelrHGYhH8Hjrp9GzehVyiVqR3XCtKlRmubdfVHkr1VuL2FBMz70+ViwkjLotb38AOopP/xeL+2xTP0rUXhB7iYvkmHmYCDWc+yakh2qrwdmOg/4MBqLWTrf7w2+PCEIPCzyF/aF2YcHrlLLFDoMSL3qRJZsSnzaukuT2wrBmU1sdh2ppkSpDLnj7uT+xGJ3oX3r3htg/q9u5+1XKQ/LwXlCOWqUckArDZ7lJgxkknUpF+0bmQMjvor0sKPMQ9L8GmW/47ifKoAWqImYSTbzpY2o1KL2OTu7q15FJSSda6YiT2QJWjBvJy2bTX7hA6u0SeMQdLwV7Jz+7AYSthnoplQaYaZHVNbBhmWdZVcLXaGwJZALDBWKmOcy7R4wrcUPoQ5bd5pCm7+dKYvmgJqvTAWJBmgzPaGRe5ihgb5+N24IdJ4BPDvGTBLJCvcXCfBCutD5QBrAVuTnINpfhmJ93TX4MTpBDuLZT61qvWLUJDmQTYuozZYVu+IsKyU0ECxTY0opnJqPpRPrWzTcl+CXwgkpNFg0V6ul+VrHyOvS4cSMNIiswILlbqi3TYMdU7hPxS9WEDgwMuLYOnFbmRDmeP29uXRFpWmWcnE1NWPCbTzzkXiTsR3fdMkrrqZRgDfI59sKffRTHUz+dl4tWc92ONiNLYFUrzoGMjeUE7Ri2DtYdwFuSIWpI2VL8VcqZg3Zm6ZiuKwy/HdIOzzLAjRTC7k69EDRwpOG2y+04QAmmBmsIuR87vR1BtIrmcYPT5Avhf/pQbR5q7W6vQZc4pS252eEpZ6d2YNPteTxAC1pcBVxNPhVOPpyEcik1bgmppH9xDqpK1GtBg6gucf54soJ2HWmGTq9ns2Xq2z3w6r5JG+JSlExDuYJFMjDsbmbnWY10QelwbnDnSr6dt8/h1j+OtNPI4Ch427FlDyHqR28y7ZTIWAgXZZ4ZP2aogkngbzHJ4Lw0RdNT2sOFK7zTuLv8q5MV4zWDJS';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ms/ms.nocache.js?t=1669637194"></script>
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
