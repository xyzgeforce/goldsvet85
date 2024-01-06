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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/bhs/style.css">
    
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
			
			
		var SID = 'k3ob27qFV35lrJoE+umH8pMbQoV2oqAg9nH12A8tyF859//h6yeO+NRF0xi7VzospF8HEhYWrbWaucKR84q2D3C4xG4naaFOIjOKlaYiHoHPM/EFdH47IjhmdKQRJiniOkKvzO4JrHYv9MzWUyIlgr7EtW47F57RMV1J80DDTFEA551wq60r5AugKsOE6gHoRurvX1ncDspFfbrRT6j4Zz9T/QOALaHRXwT5N48pd9WsaxL4Eyl3B9H1h5t4r2L0laDtwmHSTVE2gEzsKKkxe2YSQaru3RSvGJXvgy178MahAlXef13+VE6cgZdVcFAlzKHlq2whxTR0dbxCJjpolcV8A26EnTFmadFjrgm7fAd0anz2SunBWRDMqtc7w9mCfvXEmuJJ2DHSCg3XyNxlfcOl7A/+TAs+K8+ouVnhOedQKAe6h/xSqOo0dyiKBGtlbUhtoT1PaxDDZJZ1BXkSYJhMEy33GzgHTCUf4AyaC1Zo8ZKnG48npDOxpgHR0hc3V9kkEdDed7L7fMYOyJ7IKc9mucNks34+DhpE9ZSiWVyt1WEiC3Fn5rL993lOdLYtsKHRAWVQrpXs2Xslvkhi+QaG46ZLLk97MhdwyjyzDXd+ofDw/NWaqa7TkAfbPUK4MQF9AKVh4S6K0vIELdfOyfrq1dHPGIAGKOFGu0yIl4StnYppEB+zVkdHZ81LVuIxzTO5xs2OeJoqLLWcYBKOSO8WJ6YdOeW9MeRXi0cko0m5PFn5FDUoG6f6nz6CHQJv7XxJsOf6gfD22pSRcZnV8h1V6sy22HdmHiUL3ohFgH39/YAy7+OG55O/AIYtTaOKUB20xSJP2WDSPoRJnCNz6E2cgd/92rg9RS//LC7mO2F3KbAZq3etbwnKOf+hlqFyATK1e8AdkEasY7AaHl1O3eGvSTtNiEa3iI89pWCMKsQBNsd0RmJ1X+/TdzC/5L6bmuFDYz9FZucGoTOJuLFf35At3dxP3q8J4gGYvXMnXiiLU0U5l8CcsCFYBOibMp/PV/M2MQrc/xeKbvPBoePIDo/U66MadAouoT+GBcwsqUFCTIxruidzoSQEiUxfcBVKKCfI/ByQQzxWZnURv0k4D1yvzG3WuZ6oxuprWpIAYPLxdzR89VJw7YU+UsgN9djqMiZ8REUfU5GnKwcigtQWv5hnS5E2F61JwGpBd4R/6QuyMsm8b+nWG0h7Y+659IKR9Q1BZ4amVq8PuvftZtzYlaVbAdVgzgsTXF1u9sCNWyemi/+niUiW7lCZW4KzneXbAEZKfGotjygwD3QKMMhvyDBO7ZhPA3+PG/8oMyNYyG3mHAXMcTKqqC5N17hbICj4v1dKFsM9IaO5xvidd8dt/J+8hTgO5wWaXVFECBjl5kTzEmXxMZjRbAdFC7XUvHl5';
				
	


	
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/bhs/bhs.nocache.js?t=1669637194"></script>
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
