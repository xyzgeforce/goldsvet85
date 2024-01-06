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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/tp/style.css">
    
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
			
			
		var SID = 'yCds1OTpll+thkC8TQ54jTXGQyyhZXxa2W33Gv5WYnRBFmJay+DABN2a6NIyU/4y4EStAlvEGxkQ9h9nR9ko/IWVlnPlqYVCPWQa2PQ31nAx+e7cjTcRchPtA+hH9909IghAPf3liEpRr63+7Qq62qtRqljXf4V3UZj48oGVaUmK4HYE+OF3bovaT+XbWH3Xn1HYkyG1AckHgXgxJMxvGAtmArQ7GOkwuWBK9uoySqCBt1GUuCRfZJRlmgSKS06XIPHa7YrbQaPaa4nd6jk4TwdLh3Fi3TCte6P1DOs5X8A0Ux/vfMJIN2wFBC73XcXbnuYkwiopNCkvsyOojoAAQElKGuZNqChNNVktd7iwzhfra58lcP6DFLzxb0rMB8uZQiiIriTUVNW9NumLrPrFfPoWmllV34b2hZlzft4RIkMk3r3YhFzp5LkyxLIJ1+ykd6OCcPYUVJzoZ+QhlyOKsLH4MakF/B6O4j78q8jU6FFoLB5wpgwZ8sEtMKd2DFeHGgvEhhuf4W4Kj7mNWI6Suv3sLBphcU5agXFdHC38hBZBwwaBr4wQuOK/Alw8WUgJM4689UvpDQBAmWcVl/PsU1RxwDt9RxFmDYjNKhxoeS20noga8oOWAEzRm+xrYzhXxFSVNY3PU8kbSpAWvcOgD9rD0AN0hFyyD12RGbXtHIuOID9LHFugLenZpfSxX4e7GkjTB/f1dsbjdEP1GJ5u34AOoAvs5TtGU2wvWaM709fZyBHO1KDtkx3uT+0RgmsROnSuZlUpys4ZiFBAjXvg2Q14BYOjzSY0Lj7ABlWMfad20dQsf6DfOMebbeOMTsaax8Rw5cqzHKg+RjrdweFKXPF6nvtJJbCRY/r/NsGyXerCy0cCw6+sYQyJVX59XD33N1N7jR+zWFUplIBlkJ8KTXs55+yjJq2027gNFuIoPL9ljCUESYZMUTnyY39TkcPtmXIx0i8w0J3trqpgTrkIa/NCuVMRmigtBXfZzzADvDXye0XEtjAmgOLmZeHycgV/Lg0cB771iZPWdohl8g21JvyDyb+2GoHuFhqnOhwJo94ZwkToAXozSnHMXdv207ofyiVO1iua4vAvOrTVqrJGcJr/mmS5aD776ONWZJ+Pa8/1DrrWo+hRq7YdGDrGBEi9WKilLN8XskSX1UHuZbJ3t0z+VVpzIZclpzXnGjDwFNDU9Lpdp2PxD5z5Xq3x9ucnqb0uLnePbnsvPFEy/xD0DJG5CMB3lml4gnCH37MG6SfhvqAwtpZHcyRP6YE22/+WB8SKUmb1s7Q5F4zPB/ITeimPiHSZP7GRe9AC1zcTsz2qOFoK83OgLrw3aGPh7OsKyzEPHrH/ql/S14w4FNHpD2N9dLk3v2jSpL1Q8+lHPnHxP/EExPm6VUYC/sqsOVnQ';
	
		
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/tp/tp.nocache.js?t=1669637194"></script>
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
