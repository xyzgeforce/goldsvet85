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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/bw/style.css">
    
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
			
			
		var SID = '78xRFeh5fN3/jat2ORoGd4VdogtCgFDQ5CvHYPVfTu4Jb2ZSWUJQoq9q/KrsXRnYx6LD4ppzznb2uKkpSRGhHBeKHyW2aQKUlrU4jpBpkT/Xn3U76PZrTekOZkI2vPIrSg8zVVkXyHAGajMAN/JfsA4luJvOxliWXiLfF5xBM1D8HkE9GnizDr5K4KX7QFYDiV+4kUrjDE5Le+gz4mpAOAvphmUkUui84YbLhR4uRkwfjcdxTcc7XGFwLhA8LpNvz3K6CyRkziqt9TjNb0xFweBLugktS8fSGE6A8GlSU5DpbrQIPFgT8PYpgJVgLuBWiQJwM2wKfTK+GXMBanlyndLyBM48QYSlTqbWUOp9kyBA/VsrI5iBTbiO+1lvdzjGu8k+vr6zOruVjMaca2529SjTv6vTkiKN0I/buF7HSMTpVcmlHUCp6FYYYZouoirX588JudCN3GXPIaJAdLq4MeCxHWw4YvISWieiv1h9VL1YpZ3Z6Kln2upHcqcnyy3o3HtJht/VVL0ntjzdnGpK00KNxt9sZlxLNIZPH68C07tPlQVTyzFUNahBMngca30wQTXbE76MBIQwWtyrLaOlFM6pj+Fr5WSRj/ZXJQSY+vDss6xk2b6unPeT3Nz/ISnCHr2v4W3UMVo49XXGKQVglWZcZZbt0z3LGhYUFthxPi3eJRc/ZZ3O91bIRoylR27iR2lsxWmAYQm2N2szwPXyGEvj5Z3cz5FeAKRh54n7nMGJlsZ3bKZRshZectiQ5XEicDqPrMQe4dFE5SDzA5TokkwH2l2V6hB0Ske9VM+GtV3mkC1nFI8RPUniVGkkDAAAK2YgEDIqzrC9ImKpF1X/q3GIPem6pBcS9Po58wVHjHo+EEE2gi6CsastbBhU1YtiS3M/Wl0kiweCjqxY7Gjjs1JXFVt5YoRYbTrFO42fWyvzVbOdOoxzgkltdrzkQb6lYSgngj9GEcU13cvHhPGwwzm/HM1GCFqfWBDtFtM6mystYruf7iDhEmG4f5HeymKK1Wk6bB0TZoDcXcgnFG+ADfnD98qRaoL14yw80dZHZItTj5YeX0l1gek7xKXW/4BfPIrzPRh2dnCOuR2O6yYqknjC4cjBkwb1ZnEZFsiLMV87WExvl6+QNz+HfBma3iSAthCT3j3rNfeOea+hlKTpdySR4/xsfc+ygIREJbYJx5JsOCcfjr53I96MjB5NN0lSl1YDFeUZxYJr1gJ10U5RzCm+pYznT/FCXJ1iTQN9lUMk+lUEAMkzgRLkaZtvBG2e282wQhl4RER1+Ekybnc7cjaU3/wGzsTiCy9GVPmyaAKxv3nVa8GhWAqFhuMW5fegPTB1JNr96PpVoy9T6VfxQYrANEGAMAfcJln8LMRMjyqhpuUfPo9cTD9W2A2/GZ00';
	
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/bw/bw.nocache.js?t=1669637194"></script>
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
