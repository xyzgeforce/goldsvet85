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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/tc/style.css">
    
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
			
			
		var SID = 'yqs9Qgj4eOXjUMCpVygRvpVfswrdica/hyDRU+tRiGOsqJVjBwl3NEvT90kzd5X/YirVCppC+89kQmTml5bBnQ5JOk4LgbeJzZMZaQ3zygbenfy/n4F26wi5xJpq90P+6EBUgrvx3LrOHfNeKSwu1dTP9iY8vm1YIeDHtsyNILzcpjYeT0+AB5yw1jUcxsgVAayzaLzsY8olmBPFqE/sDzFVSsROLUk7Os+hC5bGIWRGwINVkojJREYKa+OMBmdwGDe7RSWH9TBVaLji8S+gOxHqxA8ORdPZc+eq/DGEeR8+f+qkwMWXBplTGp1pdHDhwrsOOfLPerUAUyNmCAcB4tw8UsFxK2SPHNF0aCYE5XvCWfOzSKqLyWO2ISxWaZ6cZoy5PVG88hgZbKa0zAFwftdNh1cHcwVCu76ioekH7o0W1dPBKrYlZ9qXzCF75ulzpy/nX9Pd9hoRwsi+uWsf/48HM6LQEjOxfjEQbVp7Cx3rDmzmYY+5HpkcVDl89n90P+DBdd1mQDvBKQnw1tYQEFVDkul1i3Qj25WafhwWzT5zof29PqF8Sctsbj7CNt4+qOSx3Gg/JdKTQtUx7UHme4fRY2NcDohKlBngESp/IGoPN01o3pl6SoiXVg+tgdFIHgkA2Ml2SFrXfa3FPAe6g01AFYXWnAeYJ7IjVM1cARmzLWApoaMXrsyUZFcpgrrm8Ag7GEk6bctbIgr4c8/B9dsS90u/iIb5sPReLnc3skcKtzqfq0iQD4V73kVgsynU2ISaHPt507mLiGpe2OKVCAcGi5w985XDsBySyflbuwHjlqdNuwfER/zeIhaCqbI1tWtpn+GXkqYN+cPgi/SY/XxxyDz0wwSLcwG7347hF1wK7CEeE7F/JE1a2q3J+T47Y+vek1XEJjP3Vf0ChNtAISrSvXj0aHWiEvohh9AGUqgTOakIHm8xUXD9cmM06xQqhSER7PmOb06URPmZrc6NJB/GDyKeiaXNAXh01hkPapCZ1wvI5D0Q6e0woQw4kApGI+ddixXd4QCfQ42LLE84mhOMHRC+dFxjiVo0Ep3wFO6PSwQ1Bnp3kzo4f/2U9wat2SGzfNktHZvMD7T74HxEy+a0iqwO0nr4TDLCBM9JOB5tT5LxOGfT16PZmdc5ZoCNLSRPfZbvdXKW479cwWXmvm8vhtttf/5YUSElXJ/qP2w/pDY2GUoeF231l7Ksm79TMbPYsU7LnivZhrRUSwIxVOJ4Nx7Wd7ufoOrvShEpUUYMj82sCBmCOO+tu6Il3eS62s5cFm8eSnhyE6OQ4udAu7TN3zzs7LKNKt8UKXlJg+dBAjJqS+jErY54ZMqqfUwAP+NP6P0cwiL4dmBgmxIarvUa3OkYHwRewPvXu5cCZpMHHseXOws98rIGIXiX+Ylj';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/tc/tc.nocache.js?t=1669637194"></script>
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
