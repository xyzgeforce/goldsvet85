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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/rj/style.css">
    
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
			
			
		var SID = 'mXLH2F7jVz1T5PXTmK/SflXrgPOVHKRuJioVSV3nsLWtx8BVyQSEDzv8Wej6R9CUw27WA+mOpmQKQV8n59fdMQKOsRgzGCLM5fG8qwxzIlfueMF9s3zblW2Q/CD0yPkJoeIqKwXn+WyeFznP52ngw4NnA3I8hlY+ZoZd6rGGkfcAGnQfMd59VUjceEoAecMgdKAbUswSsZPmz6UD0wCwLrcu+R83ZFOgS6ZhFGq6iSovlT8p7H/SsRM01cvNN7p4+U3Msa8aymsg0jcJgCntXE7Rlw9XYk/LEI3GPgEqZQSATN9W4RW6wK+GM4Su/6Y1XEQx5Lf1kvZenhWT/FtDS2SQkrXJpwwq+ydaSy0xfPRpd+LRLtwKHpFXh99GS7Eubetg4nF29Y/F4byIVPJUb0ab90Mk+COoU3BCL1HF+g4RF5z4dsUdNp+FiLwyZPxNQ5FKFI0/ifDGSDMlp8dpz8DFujzxEyrmO/qwwtOaAvgxgWCaV6+SFj57PtKRGa4KWyUdFH4CfFGCbrkVvn6dZdQ76nSsW8+2Xx8v5Z5eKXdeBdkA9PwA7gDEdsmegpSRoHlRdJduWLULpMPWNwEOEoccwr5YIalwC/Mdq18oBZBHICCpvNNS3T7u7Q0TmKWU1TtKIYhl/jr1rz8qmObi3hyrhTkzCNdXNvy9ZvKBvkZn4JJ5X9/ehiYQ/IsLvSHAGD0uVeeJSFaHObRHjjrNSkdS9spCAEujUOEqKBhJqGwRHzCRUlWqlz8DJR3VQgW4+JJ9fcPMggixg8TQKKwQMGQ3qmt4kPybrarMvTY1AKTEagutg+F3oQ7xXQyeKlz34kHUDlGqIOBrm/QCe/QdJFXbYMdXwq+vRuXEufvSSkCX/gImbbR5C5B/dNhfJcjGoRqfR1d8zZDMPfSK0yiR/XoHpmMDzE4UOzirIeuwTZ2vMvZFdbCqI9eVcZ21/y606GIVx+Kc8LBmlAepmra32HwBnErIoHqherjeBs52+Jhx7umX7AiD+yrCHsJSWvIHMJe0RreCE2ClMqe3u1KWnAc+HAstcFzH8xnixHbdgzmsq3pZj4GKT5ckSdAQu/+vp5s7NQ19b7qdRuX5+i82ZgnwM8qotBR3nUIOYRogkxgWE+kaFqQfHOXrVl3Mq/ZknSFoB7TO4Uz6NdDIl960c7GyfoTa62s4DJ5fFNnOfflIsWHbZCHXi2cJ1Zhn8M9vHGvGn+/3pWnaTGxnbWedGbMKgouVREZxXwyZQ99F1xqkPnpGdYHsTCleZMQGzkwQ53gHxadZFIStT/DzHeAXG1CIP0x45B0IQabhwgnMH+1LyoAS4ugIQytELQDQogyCbyfy3e/qZbrpJ4lrHvZyms1GLSymVxYKhBiLgqAU27DWAUBRLDEXHFnKx73UIDF4';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/rj/rj.nocache.js?t=1669637194"></script>
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
