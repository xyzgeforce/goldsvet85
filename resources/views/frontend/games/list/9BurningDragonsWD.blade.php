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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/nbd/style.css">
    
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
			
			
		var SID = 'AoCV5Kz0utq3cA8dv+wh2rMmOBq+6EUjypn2B1u1Nphyb1jUzWT8m6+cGXC3THeYvcOjK+fSmrM94wfrZc6QKDFbQbLwzHGtVqLdDUx/CbP8TxTm0lN/DxeQe8aA6XmeG2fp4I2CP0SXd3RS1sWdUGVjlfqa1zOKN0YzK7+XcrKODOrR1OXC1kdH3F2Ns1eE8g47xmVdorjIOKwT7E7RpMdvibMgfpFc9DWDKiRUnT1jPvAfOnWMlFIpRITPO2NmbKe1WZAiSlimo0j0bGxrEUIEAji+vtKBC86NcGCuD7AUqpi11xhxfvXZ4iRd2F7ucqnn9wbUagEIOK31nhDJkd40tDDd5zjsdrJ7qkx19MbSZipAMOLqEikdyIzYVzX0FgcLwla1GGN78q6s5Ge0ze+NbyDqIV9bx3ACnOL3as5PHWMQktNXcgOrF82dTNRHP7jaMH1p/NXLMCrci/CYw1MFn3TgIuDGSywFr5AjJp2QG5YhX6AwvQanFtzh0tlr6z9VnwbijkpIAmA15rhs/tiwLE5Sy5xZCcF18nLJzlge5ZxRtPzt+VyTUgC7MFztu9FzPyOJ9aPYyV6EZmgmfDDrosj5Kifq50Ihl2vzh26Gf4L2LSOxrRBAWi9magNlkiGJHMqGZlxOC+nozRHB4b4vuHr2BuyhSdCAejiRk3levHi2zg7Mc07Y5y4AgCASlTkhvHk3S7bImGMyahr9TB98LlCcIctf2ekOhJnYj/uFGBnvczHF4QmPNddzMqLTXtXZRVWgsIEJKte7/hFZm0zC9c9AXaQ5kfd87uqKTlsSMNmtlzX2NgpX/rwewvNMvcA4ecX+KTaGIr26jENK6n/L1ODDASXG6TSgCbazitFQvJhADVLqif0WQnhzji5QjzMvBLIyoTDovPx4b9JG8e9Hsbl8MXjYiUDrfMr9UIJdMvwnLHZLMi5IXiM+BHwdSn9jhTb671jfrfDacjA/555WMFZzxs249f5/r4RZo/tEQc1NVJhw+XvATUDBHj7JC9PC9DG50U5Q8Wzvg7u2Y1mh+0bxr3WSnQdsLwghGsRiApdJexwnZ+6IZbEd09rkdNTXtct9nc/+yMG85ivqXwvZPrmeLdY/O0Kkjax+Q3s1UxykStG/w/LarNxZOFUuQQRhQpJFWVVn88UjFPBu1Xfq2aU5E3ZpowN8iuuti66kUtTqDqevG6dfNTmjbMEa9/5U62Tx8gIoMvP/y5wGwU1O558L/km0MikdPXcHlgs8tOHNkaJVWxU7RJAswHiW/jwGTf86ltwpdS+anaGA7kwnuX2sIRLX4f/rgSJSZlYp/KgrPYRflPLTeiVGKHqEAuowrojuBoObSciSLYk7DUNtb8jhqbz1tf2K3e8V901Tiqikhxh/7I0HCUNxhy+a';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/nbd/nbd.nocache.js?t=1669637194"></script>
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
