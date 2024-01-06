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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/mas/style.css">
    
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
			
			
		var SID = 'll2YGx8+TD40Qa/b7sWDHRsLeGtN3DPxgZ9K3oUiyNjYvpaQcnPYNOl1qg7DntLU+1Ybu6z/NRPQ4wsbN8ntyg0dHOkEgOASVCeFTJc8mA6ueF2oHONj6/tiXpGhm8fiSV6WLQNyiZKlrfrkmgtG6G+tI45zQD44cpaQ6UTFQ5zWetxzk7nJX7/R2iGRS3UqoCnW6F9robJwNs11H4SvQVaZ1bfvLnp3o/eCgh+5PxoLZgs/FwzVB94yajTGRNXTKxzX3O0ZUwdXgR8KMrPm/7QuW6oC+vt+jq1RI3PH5l/fnLwAPPrVhYhH3IO0oNRjl7ixz5VVzPZh13Dd1jMqROm9mAL0IEltGPKtsQm9B+OeekGiZX7joDdgfBReDXn1be0E+yHroyibdbDxVy8pssPlnqzvnmr83jeCA+//dbVjRHJSuGvTCN+GFzNKzyH5Hbz8EdhOLvULPs0OAKYqNVu5BH1xUhyDZFCvEToLCjDVbHuZjQdA4GHQE3fvNOopRXw8QPXLP6dJNkPdYTh0Y8yzoWay2t7lz6y4+zutheq02aBNvxCEmvH19a/NQCjLMw4uw/lHYKyi/jXdcygT9lHhrtPX5OGnVCv3Bb/UOIgbmrxFnU/00soSWcftxdnLBAAO5sl1oAMeddbEacbFEmGkKES+sRRG59ekggk+x5imcfbSc/FqS3zg3Vs13ThuLkZm5J+yYXmadlv26z2IZnnJnu2yvjO3ESdSg9xiUSaLzcEYP7Jg+fTVd7bX6Bjdk+Htm1sUVB5hsCtBy+autzmfJu6BKn1F7wMIS4H9KWRnNyQ9L/jLUDO1ZRSXIFsAyCHz3Ix8hfIp8Tc2QwuLPN/c8fNcZ+ATQoTmS6H+VNV0sniVW4hCYySt4bCrlcl354Nggib0aJxMLyHrkdjrw6OcUXiHmyr+ItaCB84JdSuEegUvgjiPwpqyMSbbTU97LD8gWF8/YupmxTcFg91qA7ru+lb5EMPGJclDLOLVoD3YPplbquz8615Iz0KrRfhy5nv9zblNpbZuRPR8VQoNGjoWTV4dxsgt83E1fvPS0lg7iBFYSUqbMFF4tvFinfXPhiGZcJT3ReoRhrt+JlTsernlEcQ/a6bsWQ1tLY2jlOFhs3x3jZH52lwrEIOvhETHz3G7T/6wqNHZBhU8vw+ecz7pd2RY9yR/Cj3hgQSXaBJNAJ0VedVU1NlTGvj/c+9s1U9RajysUr4aX6M974Fnsdo0ItSRQRi+MSVO/FnR9d940a28JJytuNbgSpBvGGc7eJ49ayDBp5jOoHeR7q5bExnVmk9Gl/tLqeWXbkEVKiujEmEEVRG8VvvmFlw2FkdxWhws7daB31LXLil5xLvM7r0hPb/prwIFbXFtX+fRPpyngKCNzXuiA6gmds/gOKLP';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/mas/mas.nocache.js?t=1669637194"></script>
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
