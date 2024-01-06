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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/mt2_2/style.css">
    
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
			
			
		var SID = 'azSLbFhTe2ZqwUE9CSd+cASiJtjGxGLDzWwj2W54huDFuAnDYSdLEd82rXeI8dRCQTnzq/QLQ2VdZ+fDqN5Jf0Dhi0W/Ylv4jCE8vfSK68la76mcbpHnRgzxPc7HlXjWHqtvhFk/dll+xqL8vGp+P7XqyRsn/OytLbLJg1S3GcbLy9KBZKr89OFooFVAxfLkapAF7VoL++Do8oeEWvkW3sCzUFzM9vsSFeLxyRztyxpQFObLtFVSy+pioWPr+8Gykmnf9VBSsqZpHbQsvmt1KoNp0D05TcIiVHuYTdigGTRsFUXnr4kUhOYzH5CPrptHtTrfP+ZX3VjwvWEYqV+ULaPFqu4BG87eZTMVljgD9RFPi4oSEYHd7f+xb8ZhjAK82Pkmvapw0ww15R+P/q1ScvBdZBrJ+0n7+hkoY1dF/ZK07EJ687j+UHsZEo8THWzxBxbAwA+WRwqYDcsUpuyOQlG4mzQ13H65nvGaVJrCn2X7Lf178f7bygdnPRDZKMJwfsEDdAFEZNu4pTs/Fc3wN8XMbySEd07JqtK81JnCv43K/Erb5y/gR2v+roNGcaDu/6hJiAPWD5jtWI2YnG1RGcX4nERA408XAMfr3Z/skyH+KNmLO0L2UXujYGHx34RicRjvyQ+HZBEVjNeo9GHVc/MECHvZ5rgX4jSC3EiB2QZc+iwebzjXegijQjeGHvS8bZT+OrY1nWfIBWB9BRu8qa95j44EIZm3wx+GZUOFsiEBu4KEHyOeXQsqdPswwlhSRsTcLbE0JfGRCrs1YkQW5K7o8QSPekOiHW1Q50LL9EC17EuoxykSbW4kVC1ZluslpsM4fVkz+W6+I0rzuU9LUPd/AidYw/RWw9rzV0PfH2TiFFjtwANfKoyH0WCnJm8AenuD/vSZExga/Jh+F3odoVMr0ZfVyY+z+IMhOYTdAp0WcYEWDXLcIK0/1hXp/p3gsM8ZYpUF3Q916plnuEEnA/NXwkmqe4XoCuYTiL17Rw9y/18eO8pwN/X2DXpB9YB6Tal3gzdN91MiTvRAJrx0n/FgEGtGH4vV+n5/2GVL+jVmziqSZ5c1CIiBeU7hyJhE4DxVr8zIKp7z/HNemIpq+1bh1I9Zh8NCW/e/ir85UKFJroldjAJjIcAjMX8IgC+SOpv0j5k2f6humCRRBTCoU1+CTgL1fdt9aLj1WCFtP+y1XksjkdEeP5pVrNBojlBdaollGznPNFIqSoxyCfpOLzY+z9gs32SxSNb+6Ay+8pnhWJOZ7t7ozN3vB4XYGQKhQc7IsCyxC5bE8uFx0+ko5XFs1kkQh82fhGkiyGJaM7Lj5GR3Ekz3yLo6oh7wnZhFwNobip/ymq3QHUQnRH37dOyXm2nyWprbCVQim4uY8NlMcr9btktxgHKFOKXni/Yu';
	
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/mt2_2/mt2_2.nocache.js?t=1669637194"></script>
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
