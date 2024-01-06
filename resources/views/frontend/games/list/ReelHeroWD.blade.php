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

 
    	<link type="text/css" rel="stylesheet" href="/games/{{ $game->name }}/wazdan20221334-204/rhe/style.css">
    
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
			
			
		var SID = 'h/FsFL6nsZw2M3vGJJBCcuW6HwEC7NZKeMjPZ3THiYn29FOPf6WAi/kE6AQs2GJt7rcSV0J/nnzpymib7+9K0JvFrsceeXCIIf/JS+SeEtEeucMdb0HDoEbCBwYGlMxJ52MV3eCe+wKapk6k3/Cwi2GPYoAHtMYZ87ux7CjXrWlXX0+UsSSGJFC/t6Y9zmpbY0oGZwRbrUGpltmxWLfgDRQkd1fRH7hz8hSVFdIoIAi2BZdx2nvZeYgwp/D8aiz+W2v92J1bW5D+GVBNK5UdVh0MzbeshWI1rXWIhy5NwnVI33UcQ1k80U6byll3sWQKMB+COzt8RmQ9n3i1l0NkzeKKrYAxgfbAEhXXIG8RwWxK2+OEvMDDIuwIUqaejk6eoBVP0aLZUKX+RFY0uPJCUUN3NUSz5y34NUnShNXWy32F0ANSi277DeXLWpyAMb39bDTQsPWvTyh6G0lgxPq0ypguc1wPVtBB4lmGwjRLWqrWCiNch4XWZzYtdQH3tkTOIB7ouQn15CKY36PKLD+ZoOavzLe2XAMt2hKTFaQts5+FbKxRXXiq7I01ax+XmaegBaPsPlINFsgKvo5T5FXQ+2F2MuQDGXYXUjrs+wI/xU8AiG5BSl+aP64Btnwx2Lqc3BYitMLsi5WKsGRQ/wtznJnTyhp4yMBTfzmbJGWncV3mQN96Pv77N1/rx1C2h28xfPYVV+CYjLeS8pQ3OihkWRWkRDYD89S44kV3Pc7/JqBbY0AthDhsv1BLMpncTKKN/NXy16vsUUxjsC5H6+g8/KHpZpQz8S9qPoyvZEeWXx98uT83+K7B0raqEj6fyAkwLkpF8dMSiCinOwDBw1BZPSiNSitPb6chhNPu9cyAHdHmpYg2LDEwiU4KdB4ghuFK3Ce2jhi/1sz3+WAwdUzzh2JC5ZJJqIUVsXex+zu3+Fag1Wjdudwu2yCc3guIWpL22hXmYiuITNVLFgX5+YVpIug509QYDFFEao2m8gpvnzdJS7B33v1qcNp59z6oAUSSyH/DplOJrVLyWDfnAwI83FJ/MDRIPELpouGhsvG3zwVFn6kF1Yy31j7mY5aeyzedKh35iLZDD5oatKw9xdpKnJ9xbXA6uLKUx+gMed9SXTH9OG42IvOk74IKH7KSGE5y+RRkvaSz9m08GHgqgZDzlp6bhmF4F+BcvSh4PJiTiBoRpadeLv6/6kAPGT3GVt//3g3pMZyqfXm9Knx8rGRuRRnSLGw8ZLrPD9iVhVUFkzwv5JKvojHWHGL/m+DS86Hv/wjQ4AcVn0+juHb9eoFrrivEKqalqhJ/xjy1eOVT7KN5WZRXSwcaLHIyqXggG8r1i4TNcLZYtwecjFvmIKrEMAH7nYwH92PEAApne0fJkGrI1U9QYY7Vak5TPxForpxS';
	
			
				
	
		
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
	

	<script type="text/javascript" src="/games/{{ $game->name }}/wazdan20221334-204/rhe/rhe.nocache.js?t=1669637194"></script>
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
