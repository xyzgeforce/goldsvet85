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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/sbd/style.css">
    
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
			
			
		var SID = 'mqddih1sC1Egk/biASQrfh1IrpxA7udIYyOIoh5/dI9Tz1bskM+fZYBPAVwd8GM3LwMkuC+lTujnWH52SAZBCzD7svT++oIIOVgsQHm1Abu9sae5B3GsanvrQuOEhYKbO4J73R2SSV6y1sRy8f1/OEov8yCrVmXNLq6gct2lZpX4H+9ZBkH/9fDkO8BUB29EM+vJ2k9+QvDoPXZnaBaQz40iI0u4H9EsuYyHIltntfutHdUTgSP+bDDNFMoTXTj3qA1pWmRPlzDdfLafPH06orrLurqH1g1F5NHPwoqmMwM+pToLayAy9QQOu/mudSfvG1KayppA+EMO3wK4OUUtuz+Q1cbL1v1DR1z5E2FGcUnvXu7bRMAtOFbGeffWdxgdXgBb5HgQbg4QtkptcdjbZ1FtLXfImqYUBlEFe1y69L52+KDzV+DWhIYF62lHrkkcE0MVNWeyOo6w/Fvwoi7QGxB2eRQNIRIB/4mnVUBPN68OAEWCXwb58fwRUyh2j553X1Ra0zfuuOxG5rT9dt/EAbICFGnztnl/UX04wbC75Nes3qOv0f4GrUqdFhCfjBc48LPmOvCbs5eDS6OMeAfvzU0W2U7MQwk44wiP2DTaoQPH6Dn7AGdZmDwLfc62oDdoH9vOnQScYKz1CRP1Os8QJdVKIYhpWDgpj/w8FgwsqGc/nIq6niYGQ7BTq3nRxXwqBDsNZU1OVvqujDtxszvO4KZcX9AIRV3Z0FiKVBIIkZ0SDKSCPxbAZ9+jIZt1eI46ccT/IwC1tclBUjMGnf6NNKa0ObMBPWDdIOpaEMdp57qc30jUeV6ZB0yK8MjXb4z8sZY7eCdAjf94KQJetjnt1IEUvQs/s8at2bOn2WpJa2jMb485VMaEIs4LruNuWf2eW/bGuLaGPyTqYDlzN/49v0u8js4Q9SvbMIXtbPo9avwBrDLZP4h2YvrYxe4vAtV5TVq07DzgL3VnJxXUjbTWP8dHhXdBcj8A/fkF3IFLetZzWPQqxN88IQSMTf0+mkP+b5n8f3ieu6BtKgwV5rUrJU8gS5xwDPesnnFCXmM8jL1nKSBKigiI6UMhnMiX34yjKjuERZq9qNWIIvKr6vjSCo3LKwlKakAru4aS7iPcRdOQWOwTaRv87cQrFISuid3wrnGonaU6tBqohgqS4w3gXtEQ888IBWnjjFUl9y4Nk7uxtm5xb5bCR8RjB8EvRS305nGWYjutmz4KspcSpga4QRJGXD3YJo+VkVt8OIIfbVIiJWrmGccWymTtPMtQ4s7pDQQFceOQn2ev6LvuUe+svW0zlFpCH7daJ4gXfZJEWHMxEueEK2q5/sxsPNuMxpylL/FU7FqfHX6zkTER+OHpE5qVvCPtmA10aW1oL/2qlcZSOH/hMmSBTiy5fLV5SVzA';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/sbd/sbd.nocache.js?t=1669637194"></script>
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
