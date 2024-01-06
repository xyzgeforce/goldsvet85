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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/tr/style.css">
    
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
			
			
		var SID = '17vOwCZzRJJsCCvgEcefuATNrxay+pK7qQuQ+CTqrEd/JfY1xO592SvDUIpg/IOJph61H4VVgc7A92Bwug/5Aaesluzos2ZvEmTeIEcqvUOt2L/ti7b33viR2gHBRYhcd6VCjNT36/ARJs4GcHQ1Jc9s5Xr33Zs8UOHZ5ZJ47NTgyGyk0yGTWrM0pym5n89DJ+9AdGYWCmYeuiy+ubcSCc/tN8EXkpQLWqGNK4SM/fqo66jMEFReJjUWsclsRTo21v9WDFQxhfOZGB+O1kgnvsxTAendqlNpknTnFCh0Ostxy/+Oddik5CJngRWgkBDQgLe9I5P/GcKGxFqJd/dF4CQ/ZsIbXrijhkKfm3j/8j+OHDOQePHi0VFbaoiO9lOj1ipstCULSCCdDAMQkmrRPpYW6K5HVYKDfL0rpvtvzp/wvSrmSKYFYAWlVaQohV64FWCEzdebwKX0Vh+hSiT01d3NJuTes8+d4G4uue0kNnVsDe/I0H8/QvFjYjpdcLoIeYlqRozwu4uOOroMmePZ7Y+/UXfBP7Y/D75Cz2Q8eWewKq5+sTEJeNx/CGv4qNmVt0TMyN3BWWB/wzgEf14q3rXGLMkGekaoooxPCAK0WASuBeflxBrLgTCf3MUlu0mzaALvMqVHmM8PvCF3i6Ts260WOUYPEaHJ43XQ2Dl0Nr9+pMUYf3lhUjPqp6xc1aR1RNQK/HQZJCOqj7zFjTnnGFmyvZfo4x9DEfRkDoArAm0D0Ye7y046LwE00UwBCwxxjXPMoJTIpmISB0XwJjLWn8gIG47cy+rKA6y+0+Eg9T9nQlziM3VUJBuYcBg0GNLszvtmH4fYWTyLGsy5O2xXX47k2dcdjTB1twXus6h2wy+HdCyKNDnKgNMiwUZI8fg0KLUA3blK2rahNu23SzYBPO5D7za2JIGATiWjakxtpxlfg7XtusljgwNLvpfw9Kr+A8mkM97gEa7ogM+YkfCi7Z3cDGeJ8yll0QKe24kbIYInRaifihtvktvC7VCiEGpLOm+8Hi7qrDHOxiv6+XqRqGxacBFm9bHuYKmRHH3rE8Xemw/p3gyz6VoHxNarhiS2qcSGp+3jxfEIs2Ps0DAHxSkaF27FQhZ7kfqsJ+mPdxer/R9Z8s1ifg/YZXvE4sJo+5s0Rzgeyo/UTNEYTLebFHIP9ZW8qOnR0H3Z9L2uZirp5muDDardGQItrckrdEOm9wSuMB7OZJqE+vQ/0ONrfeAfrJYbY5EJ/Mka01xh5W0mEV5v3DC/BEtPNPZTpH5rmJK8UIfVZvajBrCSN6e675gU7yQ5e7E456u1RSSYIsUdbLrS43JRe5Pn592uU4TmOsfxgCzdavGIQEGU6LmqjAsySugXc2ShZ48IFN9iGY0eb/crvRQy8jJGoLtR4aFu';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/tr/tr.nocache.js?t=1669637194"></script>
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
