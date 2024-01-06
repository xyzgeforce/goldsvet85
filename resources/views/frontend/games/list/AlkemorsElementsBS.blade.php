
<!--swfBase=cdn/flash/alkemorselements/en/& -->
<!--swfPath=cdn/flash/alkemorselements& -->
<!--fBase=& -->
<!--serverUrl=https://cdn-cloudflare.betsoftgaming.com& -->
<!--cdn_support=TRUE& -->
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">

    <title>Alkemor's Elements</title>

    <script type="text/javascript" src="/games/AlkemorsElementsBS/js/util.js"></script>
    <script type="text/javascript" src="/games/AlkemorsElementsBS/js/swfobject.js"></script>
    <script>
        

        function openHelp(page) {
        }

        function openURL(url) {
        }

        function openNewWindow(url) {
        }

        function reload() {
        }

        function redirectParent(url) {
        }

        function CloseGame() {
        }

        function enterOk() {
        }

        function isEnterPerformed() {
        }

        function setNewBalance(balance, bonusBalance, compPoints) {
        }

        function viewHistory(url) {
        }

        function callIM() {
        }

        function showUnloading(evt) {
            evt.preventDefault;
            evt.stopPropagation;
        }

        function initRequest() {
            var xmlHttp;
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    try {
                        xmlHttp = new XMLHttpRequest();
                    } catch (e) {
                        alert("Your browser does not support AJAX!");
                        return false;
                    }
                }
            }
            return xmlHttp;
        }

        function isFlashEnabled() {
            return swfobject.hasFlashPlayerVersion('1');
        }

        var isClosed = false;
        var isFlashGame = false;
        function makeExitRequest() {
            if (!isClosed && (!isFlashGame || isFlashEnabled())) {
                
                    var url = '/games/AlkemorsElementsBS/';
                    var in_method = "POST";
                    var agent = navigator.userAgent;
                    if (agent.indexOf("Firefox") != -1) in_method = "GET";

                    var xmlHttp = initRequest();
                    xmlHttp.open(in_method, url, false);
                    xmlHttp.send(null);
                    var status;
                    if (xmlHttp.status == 200) {
                        status = "success";
                    } else status = "error";

                    isClosed = true;
                    return status;
                
            }
        }

        window.onunload = function() {
            makeExitRequest();
        };

        function flashbuyin() {
            isClosed = true;
            //makeExitRequest();
            var url = "/google.com";
            window.location = url;
        }

        function hidescrollbar() {
            var agent = navigator.userAgent;
            if (agent.indexOf("MSIE") != -1) {
                document.body.scroll = "no";
            } else {
                document.documentElement.style.overflow = 'hidden';
            }
        }

        function closeWindow() {
            window.close();
        }

        function GetInnerSize () {
            var x,y;
            if (self.innerHeight) // all except Explorer
            {
                x = self.innerWidth;
                y = self.innerHeight;
            }
            else if (document.documentElement && document.documentElement.clientHeight)
                // Explorer 6 Strict Mode
            {
                x = document.documentElement.clientWidth;
                y = document.documentElement.clientHeight;
            }
            else if (document.body) // other Explorers
            {
                x = document.body.clientWidth;
                y = document.body.clientHeight;
            }
            return [x,y];
        }


        function fixFlashsize() {
            //return;
            var headerH = 115;
            var h = 600;
            var w = 800;
            var hp;
            var inner = GetInnerSize();
            h = inner[1]-headerH;
            w = inner[0];
            hp = h * 100 / inner[1];

            hp = hp + "%";
            //alert(h + ", " + w + ", " + hp);
            document.getElementById("Flash").height = hp;
            document.getElementById("Flash").width = "100%";
            if (document.getElementById("FlashEmbed")) {
                document.getElementById("FlashEmbed").height = h;
                document.getElementById("FlashEmbed").width = w;
            }
        }

        var chromeFullScreenHeightFixCounter = 1;
        function fixFlashsizeV2() {
            if (window.chrome && document.getElementById("Flash")) {
                document.getElementById("Flash").height = 100 + chromeFullScreenHeightFixCounter % 2 + "%";
                chromeFullScreenHeightFixCounter++;
            }
        }



    function openHelpHTML2() {
        window.open ("/games/AlkemorsElementsBS//help2.jsp?PARAMS=833;675;USD;en", "mywindow","menubar=0,toolbar=0,location=0,resizable=1,status=1,scrollbars=1,width=1024px,height=768px");
    }




        function isFlashPluginInstalled() {
            var flashInstalled = false;
            if (navigator.plugins && navigator.plugins.length) {
                for (n = 0; n < navigator.plugins.length; n++) {
                    if (navigator.plugins[n].name.indexOf('Shockwave Flash') != -1) {
                        flashInstalled = true;
                        break;
                    }
                }
            }
            return flashInstalled;
        }

    </script>

    <!---
        isHtml5Pc=false
        isForceHtml5=false
        isForceFlash=false
        isUnified=true
        isMobileBrowser=false
        android=false
        mobileGame=true
        isSingleGameId=true
    -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="default"/>
<link rel="apple-touch-icon" sizes="72x72" href="/games/AlkemorsElementsBS/html5/u_rd_2_alkemorselements/_current_version/resources/imgs/icon72.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="/games/AlkemorsElementsBS/html5/u_rd_2_alkemorselements/_current_version/resources/imgs/icon114.png"/>

<script src="/games/AlkemorsElementsBS/html5/u_rd_2_alkemorselements/_current_version/src/js/src.js" type="text/javascript"></script>

</head>

<script>
    

    function getGamePathURL() {
        return "/games/AlkemorsElementsBS/html5/u_rd_2_alkemorselements/_current_version" + "/";
    }

    function getCrossgameSharedStoragePathURL()
    {
        return "/games/AlkemorsElementsBS/common/html5/crossgame_shared_storage/";
    }

    function getCrossgameSharedLicenseeUniqueStoragePathURL()
    {
        return "/games/AlkemorsElementsBS//common/html5/crossgame_shared_lu_storage/";
    }

    var requestId = 0;
    function overrideDynamicContentRequestData(requestData) {
        requestId++;
        requestData.exi_addVariable("CREQUESTID", requestId.toString());
        return requestData;
    }

    function openHelpHTML2() {
        window.open ("/games/AlkemorsElementsBS//help2.jsp?PARAMS=858;675;USD;en", "mywindow","menubar=0,toolbar=0,location=0,resizable=1,status=1,scrollbars=1,width=1024px,height=768px");
    }

    function openHelpLGA() {

    }

    function getURLEncodedGameParams() {
        
        return "SERVLET_URL=/game/AlkemorsElementsBS/server?sessionId="+sessionStorage.getItem('sessionId')+"&URL_MAIN_SERVER=/game/AlkemorsElementsBS/server?sessionId="+sessionStorage.getItem('sessionId')+"&URL_HELPER_SERVLET=&RESOURCES=/games/AlkemorsElementsBS/&URL_DISABLED=/games/AlkemorsElementsBS//error_pages/gamedisablederror.jsp?sessionid=&DEMO=0&URL_DISCONNECTERRORPAGE=/games/AlkemorsElementsBS//error_pages/disconnecterror.jsp?sessionid=&URL_LOADINGERRORPAGE=/games/AlkemorsElementsBS//error_pages/loadingerror.jsp?sessionid=&URL_LOGINERROR=/games/AlkemorsElementsBS//error_pages/loginerror_s.jsp?sessionid=&SESSIONID=435a6ae104d098855caf000001768e2e&DBLINK=dbLink&GAMEID=833&URL_REGISTER=/games/AlkemorsElementsBS/&URL_HELP=/games/AlkemorsElementsBS/&URL_STATS=/games/AlkemorsElementsBS/&LANG_XML=/flash/primalhunt/translate/xml/language_en.xml&LANG_ID=en&URL_GS=/game/AlkemorsElementsBS/server&URL_HISTORY=/games/AlkemorsElementsBS/&URL_GAME_STARTED=/games/AlkemorsElementsBS//error_pages/gamestartederror.jsp?sessionid=&HOME_URL=&DISPLAY_TIME=true&BANKID=675&JACKPOT_MODE=0&CUSTOMER_SETTINGS_URL=/common/standard/settings/customerspec_descriptor.xml&SHOW_MESSAGE_IN_TEST_MODE=0&AUTOPLAY_ALLOWED=true"
                
                ;
    }
</script>

<body bgcolor="#000000" oncontextmenu="return false">
<div id="game-bg"><div id="game-logo"></div></div>

    </body>
<script rel="javascript" type="text/javascript" src="/games/{{ $game->name }}/device.js"></script>
<script rel="javascript" type="text/javascript" src="/games/{{ $game->name }}/addon.js"></script>
</html>

