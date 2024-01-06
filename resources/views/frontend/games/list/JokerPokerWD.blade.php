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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/jp/style.css">
    
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
			
			
		var SID = '/KTJgsPbtDGBwxOet42jCtcKTEY/D6JZyk38UF6mFXMKwoZw6N4uSy0+9DwEXZfF1sDFj9fvgbiGU8ZtqaNuy+ySWYjtSbZhuNJcKmCTtBemLK0eokY/4lbqCbNwGZZCBnMx1brKJa7ZYvQY1T39NicAnemvCBO2wsHWWZH8+J4Eiqd3hsYEmDOlVWQZ12g7j/JFL5HgMfEbeU06+XgrPvzohG38KSGVVLaW/QoilElJH8vH6F9LQE/Mbr5reaARFpgB9DIY7ulTb3YCJ5ptyI6/YwZLzhEB1pIbE8KcaQhsme65YujuNrzqRcrBJVPO+IY613Or8sKLhQ/bI0wQ+2XXv1LDkCbMB6OLCKRS5ACElxemS3Jel/rPJnDzIcJz4mJG3Fzl3BJ6zG15Dopb7h4S9OaW2gLQ39wWVrXNC4vZxxGcttlQtIl6ZY7ri6DvEpDKFKbSRmX0/vjyBqHCSOCVKAwfWtk1dMav4KXv1n1q44jwm7adtn1fGxFCnPmIxfAUlngQrUmdZEnvMEt6tJMbfWfL1ivDoWo/UTJHDea4/8J8vwhfotTlVVMpKaKUkRAuzDQA3iA0EuAVmtxDPRGEW7pvvwbEFssMcU+1ffx4DfhvPPFkqk3ZG96/d88KhtV5UAP4R3BRxzq1s3dq+IA1VruSirB3B2xyW8iW3XfEC6fhaGhiBHW47AJcxPtuvyrqGCov2z6s2Rt17AgKP0Myi6cCwfdIn0EV9euqRWorY3u/AOEo3I3bnYVCAn2xN+zxfZzdkAlU6gUgn052Qha+LuDCt0lNs/OGyFCn1UVNnjFbSjz31oXIOCYplVAlPCooytD1du0Ib6bnS6BNq4c6YIJ+33vNYo0HbpQosqSZWVMYG9WNwAVsAgXc8XXztagdfajSqjiA9/bDs2KMxivyuzO/3dUwsqTdqDj8UeavmBrwTTavUZKQUMZLEqs3M/BgNFhnRsfsJSHwjonFqRG8FGfTIjttea0LAW2UkRJ0BXT0zLBbpqJMs1kDDGLjkJTg+j6+kkL0a5fUDRlr70MQ4/VXQ96VNH6hpGrKw+E9rWweG0uW7ivaFWBTJgj8fUlcqcND9ivrmbgyeW3Qo3cVDP1tGI6LkkRPie6m0vM7OCl2DCvl5m+QcsVcGpyajmfKWEMG9sV7WNqnEy3j7uif6y+9ejmWDo2iimCGiFvb4CPc/GqF64cAP0hiajrF/LRQEeNSlm59k1ZNCAqnRhj/Q5i8nzLdn5ExoeFT/zZ0Na+K8Et2AQkfw1ACRxl6u5Blo+uGih8H2PzKrGyBYybU0hHrRLVRucRaPh3CI9UzoIPa/jQk2zoG6YulF1MhKYfl7Fw+sRhEbMxMKojumnHiWQN02LkPOKKTO4q0u71rbfPmGvjKlgiBagOy8E+c';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/jp/jp.nocache.js?t=1669637194"></script>
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
