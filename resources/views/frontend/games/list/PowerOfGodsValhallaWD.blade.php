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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/pogv/style.css">
    
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
			
			
		var SID = 'KKHaK3iuSzrbMRpZ/gPhjcfOk+eBKcLhgvrdbYPXZ4iAo87Q3izsIjWJnFgbu2zpUN25PaejXLRHvi6eTGrFJyE2yJSsAOIzTBmK/G8W0iF0wuEu+1tNsS1cQN1g/nuOdZ6kMUgVT8FvnWA488LEnDTQtTXeBlr+D4U84kNFAyqMp29eEXVJrFe61rCVPAv/11Mn3YrsD+yns8yixhv6yVazoVsj9voBmKdqk4WHc5+bwr/1jLuoPLtlYd1oTnl5lEGNaygW58by3CBt0YGGBlW1fogdnj+vy0P3bYrBXbRbrMPsPqD6qr+zaJgbZ6r9wBx7tSawaEKhqLQuzXgPF/4ElTS1HwSe3+SeVfXbDwKTumdCw/2bjDfFERBK03TauYRb0nTWtkuSWdpUn0ARV+INaXUQ0mBdDMe1dG72yRZu8X2yOl4UDKfNtRlt0Nw0sEwlI22tsYw/nraEVHoQXoGAd/Lw5bJhDo1buPJKZipygA6PnrT9exFrh7HyHO9Jw9mUR4K5FIWiPKnHtYBspRBqqM52Xx/JGV9aAW9AwvHpm4U88fE3zqielXsKkwdGnGwyrRP9aAGI6p9hZLOCVctwEFWl+/K/ENKiiZyh0rpNb4kglvCF7VKWs2AJzTgnr5ulmUHb5lBvfMDBU2s/pDnhZIk+f3nMnANhjt+F1U3R69FfRhr0gnRVKNiUw+JUq4TjVk8BnYO08ywYvonbRdG4KOZY6NVhOUaP5ddKia/eO/B40M63aqdtvhPienpwPG+b7ifgq1akCsCDKRQ0iAvKOfNlAkJprcbZG0eTIMHOIUveInnu2FnRwhmBcmDLZJFeKDQH9HVEZF9nmYgTuGuYLA5ihmA8neHvfE3r1ztsUJOm9ZtuvFOK1As3vkjIJJHJG8Qkct1UZH5pQuyKljBIW18qJJLEP5mPUHhfUukFV52bdvJ8Za+RcEZucBGdgMeRbxJ8n9onG7huJmwvLfnfaZ1+bOC4t7ycLDD0RMEQorV4dEOrUrMCqzLLTTxR9o0cPpVrrvS7cBJ5EZkkiWp6653F3ZLjsAri1t5AZ7UUZ0fJG/1cA905GgZPOU4o4LDQEHP9BeNR4C5bN4xzMaoF9NC9ZEwplpie1SeiZ0FUIgJMyo7jG/VCSax1d7EKsBJTqBgivy+nqJt8M9q9NdMW+pUpbn50KFCc1dTvQfoESuk0oIaxMmjGv5za84YRtOOas3vSYyGfVlU0ivKDX3493Ls/4ANA6eWlhi4iXI/s6wOWeurq6ad6kNpAi+LPf9qamWm3NP7PHmC1gpVVEISmtFI9fL64l/cqrCG8M5VxUzWrbNPM0xovAAk7WEGnvZsvjBoFgVNUCfgK2vlKy8nNX5m8Vjdq3hcDfD73tvTH7Jg6DfGB4TmGnLBi02Lt';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/pogv/pogv.nocache.js?t=1669637194"></script>
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
