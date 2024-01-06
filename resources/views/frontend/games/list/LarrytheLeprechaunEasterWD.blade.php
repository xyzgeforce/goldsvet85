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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/ltl/style.css">
    
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
			
			
		var SID = 'FiF6sCCYqR+XtYaexV4juj7CjOKURut6UQHwojPcSmwlWcl3RBROckzdcloZEavdMrw+zSAMEirrpTRl6TEupZbRxbkmstrBqtiKJV4yGRz6aXoR/e93KAO+v15EsDCBVfdJ3qNXBsSWtcKiy5aAZuoUzOGuJ40KMFTecGiiTpcHlmCuwpUFnRBryQzdRlbSxUEQEtJlwN71GpNuQW2Kq2a1dGL1OcJqKnhXVg+uR4KujaBwqd+jMQohD6qmODHlh0eTF8/2LgLNOZFUbykmhHdnUu7l8vgZbf7sO7CyB1kKFt67Kt3WeMRPrmbu1HCHXfRVwd+EIR+wznBor+BJsxL8IpN+pJ78JurSmEuo1GXSyWuUHIuSCRNFk4cqKTDN5aQoEyg541VRz9RqywXZ7ftF1YzS4KG++sXuDrCiLYto8wB4FpCJ4MP/tAc+Af1kt5LHllAOC4aPEUHbmSva9435YX4OF5VcEcBdlsHWAQrHQ4fnVFvhIrmWj95ZnYJ+ewK7ORz3jSUK7K67DwSBcrDqJ4yiZANT2WJecX/d6evZU26aLm9xTzkL3yI+Q9q1xNL7XhiydEzz54A8UGxSalsHmb7tXxqXEQPxdjAc8IjOb1BTPcbDrcCJIV/fDoM/KcWAAIvKnrvUWspzBktr6eoTEbN6/Hudozh6xg7B/GNGLU1neSV7N+TVA0U0GDKG4aRxVQzVG/vjChxjiQ7gg8xToeVVSR0Dyj4NqUL6Q+cu+UcErJKB5TgYHXNhCgEuxR0x17cSXw2gmJsBZpaPw+WipKfu9Qy+hn8qyljx0hq5PICVyyGH5vjrhQEBlBdS5AEClrUoVtO8mdnPnhAomFADYQ0pi/PRTtexW6P5hD44TgPaSsihAhk0LlUfilV4KETuKhJDWF/qhgHFTWFhigWhha+VfrweLGmJP47idjP4Hk1H70YvT9HDPWS7TFc/IOINIdVWnzGct/XxwruqGfVGTI882CVEsXqiaqHwjG5HErceLoEUhAt6/4qZRemTZSosfbAnVqgnKvY4rwAHJxKThjZDUsU3Gqzsnkh7zq9SIqV7pKFX3LLSZfzPAlIthFi5PWnTTUnDxJw4Q4wdg6yiXy/zwlOtTkbx5QA/sn0Q97Wxal2OJ7CcxyG9SNXf4/mYCNJ57hlNMq0J4HmNN1ddLdwIeUnqaAG8RPmwWwmQ8qNfjc10SLoEwzyMOcuOiNZItaV2rm4IIOzFBgjDm5oxr7CuqxBHaJ17KmLfYYmCYnjM/ShWkzoXrHn0joDSFaMedOTe5yQ41LXaj20qJS+Ihmj4p9x3n5q8pJ1JtgPrLH14LsklwimLNQX5kp0R5SX1BpTiCCQDu+Fqcid3aLDaGtg7ypvy2xXpWZWXjAZPJ1lpn1moy4IhXnk3xbLX';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/ltl/ltl.nocache.js?t=1669637194"></script>
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
