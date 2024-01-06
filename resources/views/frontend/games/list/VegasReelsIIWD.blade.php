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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/vr2/style.css">
    
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
			
			
		var SID = 'VpsvdGWqoPZZQcrtYOgnPA0bhMiE+T6V1BYyzPSLWcpRtf+iXoQi/MXOKbbH3IpPTerKeLe7PdIFwlExJ8ALT2wU1yrfxNG7t/DBkjDbz0O4ZRMClXuno5lA7RO5UNLxsFAKkFPix6K4v+XOrESxfIgFeLt5m/GVFFuIHI4/rIdObmAksOr7akHE6l2hMMhMPg8HedrftpRXldxpjneZEcbccjLG6zNbSE/6DEHi6MlIAuZ/iPudWJmDyCQV3XpW1zJbmrMn5UjGuaBnk0wn8AUqUmrMPownHolb/wgts468zAr8JvOXkcxLLOJ0nof0J0IWKn6IW/v2Tf0v16ZVYNbv/8XH0kgCmHfvbX3eKPFAUbEpo8YbPANyid9TIbRsjkfOZIeBz4hiI/s9skpAyZkLbxtc2BjIF7bth7BS/DA1LAmfTkdNlm8jzLewiCirjpMXVL9ZgA+qxCjEmGuOIgKtyfQXo+WYJ1dUxcyu7z/ysoaooytrC0doukopWqk9JOhuRYsr1PK40i5hVObXG1f6rNlOhoWSq792SUNqYMf9e1sP/04/kNGI4+iFsS2H7fGCRcKzJfaRtQJ3gIRP2Kp7zCQOtRFgXKNO3W7uswWvcQiBZr3VVwSDopAsdtcttlo6FT6Ib+3v1mC+XnNDeAVEonpjCKMliIAA+ESRBOw1bEQ237WbX0j+zK+1SAGJowPSq5CbEZQ3yXY6AVXxhf5TVVm60aSrCPaxXAerc31Tfi2OE36Ui8VOgjYb88hsTGwUZr3KwDhJEwQWERismquaRfH58UeurDzVOFBX7lUyzFUzDqnbtBk3u4z1NukHr0Zvb18Wv99Sa93phHfLHfiOgdXhylFuR9YJOC610jHExz2t5nvteh8Nn3LEZ9w9QnXJni86CTQWcLbXEQ5g/Bg3fheV00cuzj9kyyUD/GoaTsWNyaQl0C0M23rc7G1nAp4L5wQnHuoTLUyAtaWszHZAT9EEc5QvKaJ8hXeS8VdBukLVvEXnsxUElZFBseXYi7K7Sb+4AlT+c9nfvW7h5Zs4CuGCR1yqEi6SLng0O79BLdDNnU1Q+qO+EgSFKgO2gQ0aN2jrbPkkLIcBIxBFcrCzlO8ytj7avyIhuxyAIaUzoP6UT7VB8nLMggusaC1WNo8frVf0DXcEjmzH2Eq9JlZ+L7JEAeyA50CiVGGEapE5sAcLMN5vwQbChOttiVh78V0Nq34HtQd+5h2/U7DTG6zigsPXzxrtfPP46eddw+3GY5BKwOXkV7EF+GUF7TZczEXG3UN9DekXoF+jcCro2gd5VcXsldpatpe6+1iV5FfqHmoZMiWPUr0w1pMfBN86hIXVpUBeI76REX8KJlhhxlL1D1z5bnX87+wq/bqBl0+ASg/hWw/vZEbf9MiQx+kR';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/vr2/vr2.nocache.js?t=1669637194"></script>
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
