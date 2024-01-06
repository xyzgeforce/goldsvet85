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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/hsmp/style.css">
    
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
			
			
		var SID = 'kkkhuiXmJCv/KbnbGyl6EYGNKnSOjCSPs37VS1icRWACfcChF1d/ma62r/LjKY1iZ0eYeUXfGvRVr+cHSx+8o54rHioxAQ2S9PiKFQ93A/Tk5zO+ngm2aAylczRPJsL4DyhgfMo/NlV8VUMtA0DCQMsqZoVDYNk/iVLpx58V3qEuoDWpWKzYBe0aZvUcPzl88BpREFrBybj+mMrZJGIOAcANE4m81xAvuCBeAGGAibb4O6IDP2fKrl8kzIZpulc5I2yoi95qCA+bnTJn7pcOyZ4rveguB3mnoxWsTlfUJAEU+JYVjHxELIPim9Y8Wr1sYdtlp/CnL+ugKUBaaUQQ1L0UmiyTxR9qhnPwCfX5HHOur7MxRadQlbZGhj2UURPVX/Civ5Jedwo4hV7kRzQLkW6BKnIyiFgmqLUZjB7yfkN80RJKL+CKGLdSX9bKqaG654E5wNzyTDlfc6Y5w7qq4r39MGZb1GbQ8OK8rTjmlZyB6Q4FDd6z4gPwJ3oVQgKwWefvEAo1puPgi6fKfzbnkNQBTcBhGHJ2p8RWjnIEwrQB3GfC5O/F+U8wIfswI0p8UZevaNB4S+6g2B5A6PI2pM68/lp9v36WZbt8QmZqauq6TZkwOeDr+5TSAkeWLUppO5iIb1aaToWDbC+/wOCnj4LvIXAwYWuWijiq+AzljU54Z1e4QmRHx1gJsrISW+Fjb3mA3SOdwpTsq99K5Bgy14A/9A9UN/5lC7JIYx/0MxykGBv6o2eB11L9QaW3JhXGXDGh+SOKelZNhlWMT8tldBHshMwY3GJ8B9v2ynf7gEsqmyQB4fnwaAUeWMlc+9yHWWHHVS44DVIbLNnLUeIWLdJxmUOPUHU0tcOgE7U9PUO8Q/POCCCnFdqJPWylPkFK8J8hGhyVywxReJSg3asCSnY+11s+VXEsoVjRmurNqsQOxU5hu6ad8KJOgl7BcQMIaXWvRj879tAttDWsrOXGoNS+T+voioMF4JeaNtHBaI9C47ZN7OkQryrwjRG65HCYJrTl6waWsWcxFzHWAhpsjQjQq+KOz8KgX70IaVpF4Cr2ZLVw6MuTLrNcA3Q2NiqyvyXGtfEe39vm9HV6RyyGUHQOCFB22CCKz4y3BzqlHT/ku+n91Ma1W1itYfeCHSFtZeRi1WB04U5w4G0bBFcKe0QCVCVL+0HhEmoSrfcCq0ehgiDyUQxIOe2EhRru93Zw2A3cDuiSYMxAdE3Ud4r3+NaOsm66K45gjE5YtCzjIgUI7ySjaTc3sn07/Rbsydvnh74PbD5F/Kp93Txh/MrE+kKoZTB4kwfjR1PtlL7thhM/R6GZ8PteAwlDYywNJigNAJb21+9Hb1pMC2MyZV+FAQKQtITcP6cKirR3VZ4ugy2ZGy4bnQ7FTJ52KSHTAssL';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/hsmp/hsmp.nocache.js?t=1669637194"></script>
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
