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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/bj21/style.css">
    
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
			
			
		var SID = 'oSfuWo5zlRTQ76G2MVO3htHJdV9UpjgPHmmREPmMW6Uk2zcPXzTi1wVSZjTM/dMNn7PjE93t/e7/HDz0h2Yh4v8KyFdpqSs6SphFy9Xhkwz6+cAZveQxdLsVNDro4bRr8NnEc0HkiTc0w6xpiGh3DSh5Ko+I8SzN85VHSVt9/obdAcIpRs56C0y2AxYfcabC2QUV1RMIJjJMubqi+kUY32VDIwh5lNfcBtbYKWFzAJNGDNcfq8kmnuGX8dhVoAqTGOV1ND6X3zij/NROoNl1pD2qQbhVYr/UrNa4ZCFgz1mvLZdudt1t+gU9k3mEMjYvNDBSdvmctwOsQ8GfIkglqP0NHs7QYx4B3zLcXJJCZLel1tCxYS/oHoxoyxmHu9bDWaVBuzxLyw5CE/UrrkIsJTXKEJA0v+1Y7qTuy5RTjqT0meqOUi97yWzTNSwg2zpHmZOe9Dp+uyz+3ictHTJLU5geKot+Wot5HktmCD66SgyotOdtAsZyr7lG3TMOVgnb28hVe+0R70PKI2MI7Y1n2fyK9GXPHSs3A3qud26KVU6rWnahNx2N1SsV5YOWo1324qVFQwZk3ZPmq6IJYGSBgxaVOFCvdWfDq2JavCyI/taZ4lIwNwF04vA36hWcJXEA1ny8m7X0M+gMpj/je1y40BsglcAm9arkbk78qRP+YYOXpfPv3Pteifn/CrwVE2N2tTOKxfjtRRwjaQ0JnYCrWFBCMfrH9rRXk5gdVzT13WPh3Tbndl9942s9biOE3+lKkaYY5vt3WABnl5Gub6WUcHa2xQxgC9coJZ5aHrCL507JEvbHDsGHO+oBjGTxii5iOsC28NpSH22pz9cmR0WgJph41H0QbDY/wOMcmTWWpBwQw43RUDvdX0yFi48kzGsAJbzCAv5Ua2NdtgRpWyS8N9LAK58uu7YRjHRd1C2BJME0JLW2pQjxnCr2gmUohb6l0RsD93Ot3djlRHjYaM+00hRdwhMHICT7zhGBUDlKNqNgHLyPkOA34cZ02A9DfUUFkGjXWdbBGCgG3uCf44m/GTnTSDtjR3u91UmBdGWhN4bU/1XBUgy98ZCgcOzerrJ1jM82khlny3WsCOmRWSv4cc87IC00XoGasgzthwOsPbP/7F0r2Gvosglw2Qu2kflflT5Ilz2EP8TXJAX7RrfsBQvgBYYSNiFqiy0IHkowiKK7FtsRdzMqc2NazOwZQBDGgL0W4axr3jSR+6gS1/Rg07UK43QgBmbhamt2fewRXV/FfD03cZ76iuU0VZde7SCAVevde2TK0Rm4vXkUn7BcVdIsjvtCtymrMa8P5QwqHMDv1HsJS5Mvy9xX/mIjvbVoD1ome7mMYRpQNEyAtXFXkhitC/fHzOhDfO5RUb4ExzBVh3ChE6N02foFIqtBkdRR';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/bj21/bj21.nocache.js?t=1669637194"></script>
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
