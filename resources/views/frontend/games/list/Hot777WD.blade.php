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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221333-204/h777/style.css">
    
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
			
			
		var SID = 'LBY3lsxBHnMdixXzwb+Ucjpj2NEZ0wV7KVlNS+lrDBEfCi0X7iIMibJ7jNiEEu5iwUw7nfLJQezZ8hKTYgEeSt5vZ3IG6IB+mFV+xUsEd26A5uvvYiZi8YN+vbUZBswD10l4I2L7P7oP+JP7nar2lO+sLzKlyz47OyFD0L7it5t06OFwnV51IuNLFTkAcG7K8R74tu6TLs39CkJh/2kdX2Xcul0L2On7CXDO3Y6jGeRcvWEpuNPG5ufd4xDt8bYWjIeGEzLiS69AMlL1upoLIv+Hv3w26E37tr+1Y6cIG+dm3oUaBqixm5e9f3CeU/u6/s6I1OqysMQx54RuvyQTkxQ8X6qQ/3v8eBg7qmc8zM6AudixocJqpShHbycUnv7KJ+w+tY7xgtGdZzhmW27OFOPQxzdJrG8OhC34FPtRPqZX3qcnUMubsSi+PVEodhxEL4SQP6rieO4hnlAeS8JYQ072zg71DAwkvhaPev9iLrK+EFXMXjcFms57HuUYbbeY9Dw+yYfAc1YSb9xHBD1NWSd+nAymOoR4E9L0APrlTM3NXa39jmEKORNTYqWk7GfRSzDM3RnaCOVc2AGBOO7JHRb/NMf/8P6Hjl5ezlHxBPJGtt6DYw2QfjQT+bCconnRjop5khFr6Siz3Bgjw8R7Shho98Msr905Ya65x+Cc8e9miIcKHFPtYX3EOhNpBPDj+MKCvTc8gkG+qwBRkGnMFlifmWrbhVfTbcevAGx2+f3Lxih50yaVYjxEQpJTPkEw7gC0UWiMTd2u+UeNHA7pTilWvJcQGQWRJBkQN4fcO3uryeHGc6eryzN6qlVuo3EwbdqK914wL1DBzUUsXP4jOKjyb8K97kbiXMvxx5CsyBRwqhdqIOGiyz7R+ZBcfwxQIUw9jwlubETTy9bieSN07GQjgl5Axc+OyNDcY9ccr58u+0T29OfUjbkvhpNXttSRX3ekEca3/gLVobSN5x29gidjRU/X2TdM6Ybj6k1kXKKiyrrFLqLlxZoUn40kwu7vaPzIaKi7PcK9j1895Cuu6w6s/Jfzh2k7AFaxWMkbRQrcp3Z71NEvHU9exvcS+qrMhcyj9xk76t6jK8tJb9L3QdpFmZDnjW2WsWTKl36UwnqKzFUqRmef1GoJvZlxFvn5MzXAVFNXtDSwB6NUmebGztKeLttl64Hf+PzgHQ1PJzFd+4iIWbn2Qv/frBAZ5bJC7Q3SJ/fDajEAQ0zXVZCdxooT7TJmLKFdvr4PYAffZel/M3diN4dvh0Z1qf9vfnJuD9c7MhOKbixqHoHXul6vUAOT9jQiGKp416fBVM0OzzKKK9vgp1T0yTu1M+ysWgW0bDJn47czBA6WSNYBN/xg6AAk4JonsLvkRLOC1Hjb8HFSJiczwqb+4AaC98HZShkF';
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221333-204/h777/h777.nocache.js?t=1669637194"></script>
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
