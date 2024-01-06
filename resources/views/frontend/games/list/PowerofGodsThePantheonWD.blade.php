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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/pogp/style.css">
    
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
			
			
		var SID = 'l9+d1t6L7LnB91iq9nuP9e67F8pdA53yHGeqscbRNuOvMJBJJRSgbTGXDVSZLIzuD270WcmRzoRzvVxWM/lsHRhPgim3VOZBTpDxT+20mZ79gwJKDn0La8uvHozBKgQWqneEHKGh9Kfcsj613c0rZ7nG35tLMqQZXtUr/xiDImZc+RML2GOZEeT/N+ZACnYBTk8foA45d8zJnbTBU9UZjqxm1YW8H6AVn5HKfPEZfUY3snAozb2fStCApuG/IhSSj9mJmGkbVgrrAbVjcn2SQ13Tr3KWtmy3q5QWvq3ZoV73Ne12+HcStUxubpZ7aJ60fuE5NlwQRSL2qyJmsOpTHuVnkJpXr6vfJLLuIqtdawxk7MESuXaMU6urwawNXfyXE0lFSwnTABN3cn1MBnulTSwuIB7nGY9R06xjykj/BcRFwR3x2vD1PTSjzbLV2OlV29wQ4hBQeKeknnX+/yv1Nw/DL34CE2AyYmjqcTs18VydSzUOTu8LRqYyjO/CSCScaNsfwEjBJlW4XOWqYGBlPuDQNqyk8REsznXqFjwDoYoWKmN8GcYP6ryLBQU6lkp7J3jhsMtUDoTjRmBu51O7x1hgMEk0//YspfGYEwX4NqUd5+Mn3NLG2uw7jGM05k9cx1kWmMLSDcNsPyguG3JG90Kq+fn47kP/COpudRy4O5wElLrWRoNVSGdEDTNEweLUxpQ4MOKMK6W1Jh/f1CMfAyrT629kRHgk2pGx3tlPxWIFqJjEP2JqKiKFWJbRo4kj2/6e0lSg27gYZ2Zq61MD+CJY3i7yNLL0KhUirr6MtenYjSN/rqweOeRQjrrPjPyuNfeHaUTXECnk8Kr9yTrjqIwpF/GQajiYn8Dwq1verGBD0jv8/i47gM1Fh8xS4/p7zWpb8N2KD55gMj0Tk6snrfS0FAbgrTN+zNgWw0O8r3jCd14cf7Z7Sx9fnc4zZSp7/T1X0TJ1HID2I2lgYLOnPxXfeYx8zhpJy5AelUZ9oQxy0ERQfmSQX/g5QgDgCAluAALAqvwqXpGSYFhW2BnhXAlfS/WjlB2+DPmo1Kzy6OkHOpTZaRUMZBFE/rkfeE5mfzqVQrjWRNGK0mNvWYq1b9srENS7THrvSxIkcUM8gN2hz6OMUjyjiDexIa5pr9EDnba98FawP/1DJznxG0oBvjByFPu99B7SFvmZtS01orMbkSwogQy8Ipt67c+INLt8xtZYytMsKCTY72uPjfahG+uIz+MvC7H9LLW1ycvA8txn5al2UCfBd0ENMr4pcBDoMhYL/nxUspcJF/Xt7OXvSKYyhJDcd1IlVVGjbco20+4gTCmEE7AJeA874O6X6+tblb365NfuqOoV38xEAEF90X5KmNyxaH7qRq6oEzUVh4vg5VdYHVnm+cH4z1EnYD1r';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/pogp/pogp.nocache.js?t=1669637194"></script>
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
