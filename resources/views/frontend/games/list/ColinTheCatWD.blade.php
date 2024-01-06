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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/ctc_2/style.css">
    
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
			
			
		var SID = 'iK2h8Ji6pRoA0VW+NQSfb30ladctOB0uQleeXYLSAyM+CnQ5Xwm6xfOUu+ehUKllJrEKXhuCU2WqN85xnY3Zy8ExNd+J4kZlRcw2LPUAD8ESMC749awt9UXpEoyvmKAB7APr/7LzcDr4dInqplwXPQx095bd2CRk46iJBBNcpNwqLsp+EsiwRvChTZOXBnQ0A2PW+bv2L1fFsO75JWCCmJKKZIJtLzJPXzZXG3jYfMJGzBm4M1kX9ElleqVOkE70FnPSHabs0tDeBJDH5yHHveMSKOVwwogDp+wZGj7SVOCHiefuUWpX9TzrbPsWfZJZx2LNa2XPEpUfFTthMJkbRaDHsU2meYTBUzm1CCU5sPFsvoeecPr+ABxIRU26kg6VlCVsmLeEI+6j2m3MsvY9cr0FjNVF+2QhZZudpx164Ok+YXnggeoqQXoCWBOvFkVdeuM1UQVmxy+mDNiKUKwlBwS8zsJi8S9lUChVJ9bxKp87NCocU9LZ/V3Cl/IefrgEsWVNg+CsKCExH2kOniS1TF9xYaDCUWe5nCH4I9jzkAVnR+Cg08wjYAMis490tXqoom7Y5Sj7hGyVwGEjohcu+/B2RTCFQ+4q44T1XsIow7ctMeTrRW5s2cq7qjy0CQbmTmbmXdxFcYpDpKIjh2qKWeeVhJm1Gv3+eWjEcPwhGUfOIclanELPF7oCc4bFbzyN4j2ERTObV9q3kVwVw/2J4DRhsCiNNZWCO1+QA+UrBZMlBZepb9KfrV0hAqPPuaOevGHJpvFwh590LAf7yKPStI0PTtbcUf68xIBdHI2ZSQ6yzecfuzRWXJQAN3RPiSOygm0JaaDcFSha2qLvZ5kXK0tHcvZ7+HiKxF9YkJ60By5m6wlzpeZZ6hZODpdwhJvQlUnyLFHGI7PWoES65WFKMqFUhhm6oGqIz0F/E1WPfWSFgCalVcQXEMMVqGgAWO/6O6fQhO9rWWxL5FX22Lll5Kaq2vK3teYc8Ap+ZlntNcDb2RgpeWLUD9w8NoR+TfcyZN8b26M3yJagW6eXvWiVMHV+BC38TkJV1uyAwWqqoc8S8suQTNa73jHNhsDLzFGtUBAYpmWhqjigROeXqgpOXwHPz3a1kJP5ceHqEBUPMhMSjs72AwIPqw8sD2nt13m/GprNdal5404UgyEEa2dJ159uGahC1CQpbL58g/bomXCfJ4nm9lpP7KhdvGK9K9vjaOPSN84VrdaGTHSZ8KxOuysjTA402d5w2YEFMkjimwVGfAxcpOAQzRcL7nDnbhkpgbx7nvKnEWn/OllcgEhprJN6Kq+RjkhIx2oj+zDKtTbSCx0RSorYRQcU6REwueyQW4448vlSJ7KQ1YqlTuXnFWxzpKdWkJjEZCguFmfAqKyKIXqW4SXfxOiEy8Ux30zm';
		
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/ctc_2/ctc_2.nocache.js?t=1669637194"></script>
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
