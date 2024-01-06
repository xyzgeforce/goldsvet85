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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/skb/style.css">
    
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
			
			
		var SID = '45KzzOKn4UGSctTCt7oOfTc+6rPbyZVBlO3fQ59eEvqZMhzm14SaavP1fj7afA1L09QIiqb2Ibprb+KzwxhSm2p1pLAlZSbFGZ7ej0QZl5AYU79boO8D+xLOmR+AW/5/1Oaz/hYOBAjEHD4WbAdCnG0jH0MR3eFcDqlkidJiDs7XnlOeisUXgjcFNwencDJCzTCjbZ0rh5C1tqpf7EYQt7h79nWywf7zqL4WQmFcpjFxLoAtaATP6n+xfSuxOwRG3NwdcTu4DEZKHLs80nDlFpnNB/rWoa7o+bCp7V6dTazq+YQFqq/U08u9LQQ1fSOhfSAVMmbd1kDpdn/ljD4UWJU594DO1GC1Tqdk8SPGxWlo5Tv5KMtXQn00++gPcGwvJcnbnRaf1W6MbekRPPXlkR4aSXdccsYsas9xLsWYvauhHO1Ka9a+cZEB3HwAwxfw6a++zNvRguzfDNcduouMkTXpTrcXG0W7oRbzNZghKp6fp8l7N52uUdmK3L3PoAPVGBnni6oAMhJZYgXBJbv/8+1Cw8Dr8HeCW5PiLKXbYqZRoICr/KV7xpBcbFVht31PnFO+sF8L1YPW1CZoPu3uAaAxgFd4R+5TaHMfIKbeZpsONJOOgCwoSQYrM8STMJtKzxIeArymxpLAlGibcFWXA9XHN78+CSTwkxJPU0n/8emHHMm/Is81kDOIjl8gnBLx1amylISX9rxtWrR6IUWZfmV8zs/ExqT06/ANSBAoxEu1WAUXTmftMJk3ZEmq4dw/JNVGU538JR4RRhnmqK43wj4xR9DQRd4V/N4BxFlHy+RGQFw5KizuGDMfbcGrc1HA+a62VfNHKWTC/YSYiFZ8ffPzUFP4GSjb/e5WjJVGYQEmFotfFYBD3ky/xK101qkYzPBctkBmoDECBlpBY6APAcPUw81ec1HWgw1KRRHYsZ1MtS+90ghYbBDYY2jf0TLZHJnOqNLwPd/6q8GSqCekEAq3Lrj+vVYrCduvHGOKophcuZ4dg2jLqZOrGQaw4atg3RiUPllvt3PIMx2P/r9TBH343hIlE/BRWr3ev3/Vej/unBUyvjrmwo3JvnkjQ/63LnP2SheSrS1WNGomPMR4UWtYnvfTherifEKiGMCYdL9Ev5ns6CQq4mdiUHfUBrbvR8Z9dIKArTR01uy9R/S0ELsdHpkaZSl+S0tzDci8xpbBls3DONDBHl1VnzUM3ZjtD/um74m9r2dOy2qleevIT4ap4N2QDbOHmYAnqmX/xAw9/Px3+nD4hO2CFZcTVVZ0esymF0unuFzfJa5rTI4RX/1GuewyKeqDDjPKug716a1CeoCuEvhRHhiY8I7RuvmaKDW0dmxTR2DGCtUrkaceOQ+adeMRiiCyPYvrt4Lg8fyp8+8DImtXKF74YwI3pm7y';
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/skb/skb.nocache.js?t=1669637194"></script>
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
