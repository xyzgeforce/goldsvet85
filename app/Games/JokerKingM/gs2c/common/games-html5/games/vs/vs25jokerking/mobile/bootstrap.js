var UHT_LOCAL = false;
var UHT_ONLINE = false;
var UHT_DEBUG = false;
var UHT_SCRIPTS = [];
var UHT_STYLES = [];
var UHT_GAME_SIZE = 0;
var UHT_OTHER_SIZE = 0;
var UHT_GAME_FILES = [];
var UHT_GUI_SIZE = 0;
var UHT_RESOURCES_SIZE = 0;
var UHT_GUI_RESOURCES_SIZE = 0;
var UHT_MODULES_SIZES = 0;
var UHT_RESOURCES_FILES = [];
var UHT_GAME_FILES_SIZES = [];
var UHT_REVISION = {
    common: "",
    desktop: "",
    mobile: "",
    uncommon: ""
};
var UHT_BUILD_PATH = "";
var UHT_GAME_CONFIG = null;
var UHT_GAME_CONFIG_SRC = {};
var UHT_SYSTEM_MESSAGES = null;
var UHT_PACKAGES_INFO = null;
var UHT_CURRENCY_PATCH = null;
var UHT_RESOURCES = null;
var UHT_PACKAGES_INFO_OBJ = null;
var UHTEventBroker = function() {
    var defaultConfig = {
        "WEB_LOBBY": "/gs2c/mobile/lobby.do",
        "SETTINGS": "/gs2c/saveSettings.do",
        "GAMESERVICE": "/gs2c/gameService",
        "FACEBOOK": "/gs2c/facebook.do",
        "LOGOUT": "/gs2c/logout.do",
        "CLIENTLOG": "/gs2c/clientLog.do",
        "WAKEUP": "/gs2c/lobby.do",
        "MENU": "/gs2c/menu.do",
        "LOGIN": "/gs2c/login.do",
        "RELOAD_BALANCE": "/gs2c/reloadBalance.do",
        "VERSION_INFO": "/gs2c/res/versions.info",
        "RESOURCES": "/gs2c/res",
        "MOBILE_AUTHORIZE": "/gs2c/mobile/startPlay.do",
        "EXTERNAL_AUTHORIZE": "/gs2c/mobile/openGame.do",
        "BUNDLE_DOMAIN": "studio.game-service.biz",
        "SECURE": "true",
        "CHAT_PORT": "2240",
        "VERSION": "101",
        "CHAT_DOMAIN": "studio.game-service.biz",
        "VN": "T",
        "CASINONAME": "Rich Casino",
        "STYLENAME": "",
        "EXTERNALCHAT": "false",
        "CLIENTLOGLEVEL": "DEBUG",
        "EXTERNAL": "true",
        "LANGUAGE": "fr",
        "CURRENCY": "EUR",
        "GAME_SYMBOL": "vs7monkeys",
        "SHORTCUT_NAME": "Rich Casino",
        "SHORTCUT_LINK": "https://studio.game-service.biz/gs2c/mobile/richcasino/",
        "SHORTCUT_ICON_NAME": "ic_launcher.png",
        "SHORTCUT_URL_TO_RES": "/gs2c/res/brands/richcasino/shortcut/",
        "UPDATE_ANDROID_APP": "/gs2c/common/mobile_client/premiumgames/TheGameLibrary.apk",
        "UPDATE_ANDROID_PROP": "/gs2c/common/mobile_client/premiumgames/prop.info",
        "DEFAULTC": "0",
        "DISPLAY_CLOCK_FULL_MODE": "false",
        "HIDE_CHAT_AREA": "false",
        "HIDE_CHAT_BUTTON": "false",
        "GAME_URL": "",
        "RELOAD_JACKPOT": "/gs2c/jackpot/reload.do",
        "MAGIC_KEY": "",
        "NO_RATING": "false",
        "REGULATION": "/gs2c/regulation/process.do",
        "sessionTimeout": "-1",
        "rcSettings": null,
        "extend_events": "1",
        "openHistoryInTab": true
    };
    var sendToAdapterOriginal =
        null;
    var isOnline = false;
    var gameConfig = JSON.parse(JSON.stringify(defaultConfig));
    var gameLoaded = false;
    var messagesToGame = [];
    var eventHandlers = {};

    function parseOnlineConfig(config) {
        var tmp = config["datapath"].split("/");
        var pathParts = [];
        for (var i = 0; i < tmp.length; ++i)
            if (tmp[i].length > 0) pathParts.push(tmp[i]);
        var schema = pathParts.shift();
        var domain = pathParts.shift();
        var symbol = pathParts[pathParts.length - 1];
        if (config["replayMode"] == true) {
            config["gameService"] = "https://replay/gs2c/v3/gameService";
            document.title =
                "Pragmatic Replay"
        }
        tmp = config["gameService"].split("//")[1];
        var gsPath = tmp.substring(tmp.indexOf("/"), tmp.lastIndexOf("/") + 1);
        var contextPath = null;
        var newGS = config["RELOAD_BALANCE"] != undefined;
        if (newGS) {
            tmp = config["RELOAD_BALANCE"];
            contextPath = tmp.substring(tmp.indexOf("/"), tmp.lastIndexOf("/") + 1)
        }
        contextPath = contextPath || gsPath;
        for (var key in gameConfig)
            if (typeof gameConfig[key] == "string") gameConfig[key] = gameConfig[key].replace("/gs2c/", contextPath);
        var magicKeyParam = ["mgckey", config["mgckey"]].join("=");
        gameConfig["GAMESERVICE"] = gameConfig["GAMESERVICE"].replace(contextPath, gsPath);
        gameConfig["LANGUAGE"] = config["lang"];
        gameConfig["CURRENCY"] = config["currency"];
        gameConfig["GAME_SYMBOL"] = symbol;
        gameConfig["BUNDLE_DOMAIN"] = domain;
        gameConfig["CHAT_DOMAIN"] = domain;
        gameConfig["VN"] = config["vendor"];
        gameConfig["DISPLAY_CLOCK_FULL_MODE"] = String(config["clock"] == "1");
        gameConfig["SECURE"] = String(schema == "https:");
        gameConfig["GAME_URL"] = UHT_CONFIG.GAME_URL;
        gameConfig["MAGIC_KEY"] = config["mgckey"];
        gameConfig["NO_RATING"] =
            config["noRating"];
        gameConfig["HISTORY"] = config["HISTORY"] != null ? [config["HISTORY"], magicKeyParam].join(/\?/.test(config["HISTORY"]) ? "&" : "?") : null;
        gameConfig["REGULATION"] = [config["REGULATION"], magicKeyParam].join(/\?/.test(config["REGULATION"]) ? "&" : "?");
        gameConfig["jurisdiction"] = config["jurisdiction"];
        gameConfig["jurisdictionRequirements"] = config["jurisdictionRequirements"];
        gameConfig["LOGOUT"] = [config["LOGOUT"], magicKeyParam].join(/\?/.test(config["LOGOUT"]) ? "&" : "?");
        gameConfig["sessionTimeout"] =
            config["sessionTimeout"] || "-1";
        gameConfig["rcSettings"] = config["rcSettings"] || null;
        if (gameConfig["rcSettings"] != null) gameConfig["rcSettings"]["rctype"] = config["rcSettings"]["rctype"] || "RC0";
        if (config["historyType"] == "external") gameConfig["HISTORY"] = config["HISTORY"];
        gameConfig["extend_events"] = Number(config["extend_events"]) == 0 ? 0 : 1;
        gameConfig["amountType"] = config["amountType"];
        gameConfig["STYLENAME"] = config["styleName"];
        gameConfig["demoMode"] = config["demoMode"] == "1";
        gameConfig["jurisdictionMsg"] =
            config["jurisdictionMsg"];
        if (config["openHistoryInTab"] != undefined) gameConfig["openHistoryInTab"] = config["openHistoryInTab"];
        gameConfig["promotionurl"] = config["promotionurl"];
        gameConfig["REGULATION_NOTIFICATION_INTERVAL"] = config["REGULATION_NOTIFICATION_INTERVAL"];
        gameConfig["REGULATION_NOTIFICATION_URL"] = config["REGULATION_NOTIFICATION_URL"];
        gameConfig["elapsedTime"] = config["elapsedTime"] || config["loggedInTime"];
        gameConfig["selftestUrl"] = config["selftestUrl"] || config["RegulationSelfTest"];
        gameConfig["pauseplayUrl"] =
            config["pauseplayUrl"] || config["RegulationSelfExclusion"];
        gameConfig["playlimitUrl"] = config["playlimitUrl"] || config["RegulationLimits"];
        UHT_GAME_CONFIG = gameConfig;
        UHT_GAME_CONFIG_SRC = config
    }

    function parseOfflineConfig() {
        gameConfig["GAME_URL"] = UHT_CONFIG.GAME_URL;
        gameConfig["ingameLobbyApiURL"] = "https://test1.pilot6.pragmaticplay.net/gs2c/minilobby/games";
        UHT_GAME_CONFIG = UHT_GAME_CONFIG_SRC = gameConfig
    }

    function loadScript(url) {
        var head = document.getElementsByTagName("HEAD")[0];
        var script = document.createElement("script");
        script.src = UHT_CONFIG.GAME_URL + url + "?key=" + UHT_REVISION.uncommon;
        script.onload = function() {
            loadScriptsOneByOne()
        };
        script.onerror = function() {
            head.removeChild(script);
            setTimeout(function() {
                UHT_SCRIPTS.unshift(url);
                loadScriptsOneByOne()
            }, 250)
        };
        head.appendChild(script)
    }

    function loadScriptsOneByOne() {
        var script = UHT_SCRIPTS.shift();
        if (script != undefined) loadScript(script);
        else onScriptsLoaded()
    }

    function loadStyle(url) {
        var head = document.getElementsByTagName("HEAD")[0];
        var link = document.createElement("link");
        link.href = UHT_CONFIG.GAME_URL + url + "?key=" + UHT_REVISION.uncommon;
        link.type = "text/css";
        link.rel = "stylesheet";
        link.onload = function() {
            loadStyles()
        };
        link.onerror = function() {
            head.removeChild(link);
            setTimeout(function() {
                UHT_STYLES.unshift(url);
                loadStyles()
            }, 250)
        };
        head.appendChild(link)
    }

    function loadStyles() {
        var style = UHT_STYLES.shift();
        if (style != undefined) loadStyle(style)
    }

    function loadGame() {
        loadScriptsOneByOne();
        loadStyles()
    }

    function onScriptsLoaded() {
        var main = window["main"] || null;
        if (main != null && window["globalGamePath"] !=
            undefined) main()
    }

    function parseJson(json) {
        try {
            return JSON.parse(json)
        } catch (e) {
            console.error(e)
        }
        return null
    }

    function sendToAdapter(json) {
        console.info("sendToAdapter [internal] - " + json);
        if (!gameLoaded) gameLoaded = true;
        var params = parseJson(json);
        if (params == null) return;
        var msg = params["common"];
        var args = params["args"];
        switch (msg) {
            case "EVT_GET_CONFIGURATION":
                sendToGameInternal("EVT_GET_CONFIGURATION", {
                    "config": gameConfig
                });
                return;
            case "EVT_RELOAD":
                location.reload();
                return;
            default:
                if (isOnline) sendToAdapterOriginal(json)
        }
    }

    function sendToGame(json) {
        console.info("sendToGame [internal] - " + json);
        var params = parseJson(json);
        if (params == null) return;
        var msg = params["common"];
        var args = params["args"];
        switch (msg) {
            case "EVT_GET_CONFIGURATION":
                if (typeof args["config"] == "string") args["config"] = parseJson(args["config"]);
                parseOnlineConfig(args["config"]);
                var config = UHT_GAME_CONFIG_SRC;
                var contextPath = "/ReplayService";
                if (config["replaySystemContextPath"] != undefined) contextPath = config["replaySystemContextPath"];
                if (config["replayMode"] ==
                    true) {
                    var url = config["replaySystemUrl"] + contextPath + "/api/replay/data?token=" + config["mgckey"] + "&roundID=" + config["replayRoundId"] + "&envID=" + config["environmentId"];
                    var xhr = new XMLHttpRequest;
                    var _loadgame = loadGame;
                    xhr.onreadystatechange = function(event) {
                        var xhr = event.target;
                        if (xhr.readyState == 4)
                            if (xhr.status == 200) {
                                window["UHT_REPLAY_DATA"] = xhr.responseText;
                                _loadgame()
                            }
                    };
                    xhr.open("GET", url, true);
                    xhr.send(null)
                } else loadGame();
                return
        }
        messagesToGame.push(json);
        sendMessagesToGame()
    }

    function sendToGameInternal(notification,
        args) {
        console.info("sendToGameInternal", notification, args);
        var params = {
            common: notification,
            args: args
        };
        messagesToGame.push(JSON.stringify(params));
        sendMessagesToGame()
    }

    function sendMessagesToGame() {
        if (gameLoaded) {
            for (var i = 0; i < messagesToGame.length; ++i) triggerEvent(EM.Type.Game, messagesToGame[i]);
            messagesToGame = []
        } else setTimeout(sendMessagesToGame, 200)
    }

    function triggerEvent(target, param) {
        console.log("triggerEvent", target, param);
        if (eventHandlers[target] != undefined)
            for (var i = 0; i < eventHandlers[target].length; ++i) eventHandlers[target][i].call(param)
    }

    function onLoad() {
        UHTConsole.AllowToWrite(UHT_LOCAL);
        try {
            sendToAdapterOriginal = window.parent["sendToAdapter"] || null
        } catch (e) {}
        if (sendToAdapterOriginal == null) sendToAdapterOriginal = window["sendToAdapter"] || null;
        isOnline = sendToAdapterOriginal != null;
        console.info("Loaded, isOnline = " + String(isOnline));
        window.sendToGame = sendToGame;
        window.sendToAdapter = sendToAdapter;
        window.unityToWrapperMsg = sendToAdapter;
        if (isOnline) sendToAdapterOriginal(JSON.stringify({
            common: "EVT_GET_CONFIGURATION",
            type: "html5"
        }));
        else {
            parseOfflineConfig();
            loadGame()
        }
    }
    var EM = {};
    EM.Handler = function(object, callback) {
        this.object = object;
        this.callback = callback
    };
    EM.Handler.prototype.equals = function(object, callback) {
        return object == this.object && callback == this.callback
    };
    EM.Handler.prototype.call = function() {
        this.callback.apply(this.object, arguments)
    };
    EM.Type = {
        Game: "sendToGame",
        Adapter: "sendToAdapter",
        Wrapper: "unityToWrapperMsg"
    };
    EM.AddHandler = function(target, handler) {
        if (eventHandlers[target] == undefined) eventHandlers[target] = [];
        eventHandlers[target].push(handler)
    };
    EM.Trigger = function(target, param) {
        switch (target) {
            case EM.Type.Game:
                sendToGame(param);
                break;
            case EM.Type.Adapter:
                sendToAdapter(param);
                triggerEvent(target, param);
                break;
            case EM.Type.Wrapper:
                triggerEvent(target, param);
                break
        }
    };
    window.onload = onLoad;
    return EM
}();

function UHTReplace(str) {
    return String(str).replace(new RegExp("###APOS###", "g"), "'")
}

function UHTVarsInjected() {
    var ProcessGameInfo = function() {
        var items = [];
        items = items.concat(String(UHT_GUI_SIZE).split(","));
        items = items.concat(String(UHT_GUI_RESOURCES_SIZE).split(","));
        items = items.concat(String(UHT_GAME_SIZE).split(","));
        items = items.concat(String(UHT_RESOURCES_SIZE).split(","));
        items = items.concat(String(UHT_OTHER_SIZE).split(","));
        items = items.concat(String(UHT_MODULES_SIZES).split(","));
        items = items.filter(function(x) {
            return x !== ""
        });
        var files = [];
        var sizes = [];
        var sizeTotal = 0;
        for (var i =
                0; i < items.length; ++i) {
            var item = items[i].split(":");
            if (item.length > 1) {
                var idx = i;
                files[idx] = item[0].replace("?key=", ".json?key=");
                sizes[idx] = Number(item[1]);
                sizeTotal += sizes[idx]
            }
        }
        UHT_GAME_FILES = files;
        UHT_GAME_FILES_SIZES = sizes;
        UHT_GAME_SIZE = sizeTotal
    };
    ProcessGameInfo();
    var PackageLoader = function(url, callback, useNotFoundCounter) {
        this.url = url + "?key=" + UHT_REVISION.uncommon;
        this.callback = callback;
        this.notFoundCounter = 0;
        this.useNotFoundCounter = useNotFoundCounter;
        this.SendRequest()
    };
    PackageLoader.prototype.SendRequest =
        function() {
            var self = this;
            var xhr = new XMLHttpRequest;
            xhr.onreadystatechange = function() {
                PackageLoader.prototype.OnReadyStateChanged.apply(self, arguments)
            };
            xhr.open("GET", this.url, true);
            xhr.send(null)
        };
    PackageLoader.prototype.OnReadyStateChanged = function(event) {
        var xhr = event.target;
        if (xhr.readyState == 4)
            if (xhr.status == 200) this.callback(xhr.responseText);
            else {
                if (this.useNotFoundCounter) {
                    this.notFoundCounter++;
                    if (this.notFoundCounter >= 5) {
                        this.callback(null);
                        return
                    }
                }
                var self = this;
                setTimeout(function() {
                        PackageLoader.prototype.SendRequest.call(self)
                    },
                    250)
            }
    };
    var packagesInfo = JSON.parse(String(UHT_PACKAGES_INFO));
    var numL10nFilesToLoad = 0;
    var numL10nLoadedFiles = 0;
    var customizationLoaded = false;
    var loadedFiles = [];
    var loadedCustomizationFiles = [];
    var SetUHTResources = function() {
        if (!(customizationLoaded && numL10nLoadedFiles == numL10nFilesToLoad)) return;
        UHT_PACKAGES_INFO_OBJ = packagesInfo;
        UHT_RESOURCES = {
            CURRENCY_PATCH: UHT_CURRENCY_PATCH,
            LOCALIZATIONS: loadedFiles.length == numL10nFilesToLoad ? loadedFiles.concat(loadedCustomizationFiles) : loadedCustomizationFiles
        }
    };
    var LoadL10nCallback = function(responseText) {
        if (responseText != null) loadedFiles.push(responseText);
        ++numL10nLoadedFiles;
        if (numL10nLoadedFiles == numL10nFilesToLoad) SetUHTResources()
    };
    var GetL10nFiles = function() {
        var languages = packagesInfo["languages"];
        var path = UHT_CONFIG.GAME_URL + "packages/";
        var suffix = (UHT_CONFIG.MINI_MODE ? "_mini" : UHT_DEVICE_TYPE.MOBILE ? "_mobile" : "_desktop") + ".json";
        var filesToLoad = [];
        var found = false;
        for (var i = 0; i < languages.length; ++i)
            if (languages[i]["language"] == UHT_CONFIG.LANGUAGE) {
                console.info("found bundles for language " +
                    languages[i]["language"]);
                var bundles = languages[i]["bundles"];
                for (var j = 0; j < bundles.length; ++j) filesToLoad.push(path + bundles[j]["name"] + suffix);
                found = true
            }
        if (!found && UHT_CONFIG.LANGUAGE != "en") {
            filesToLoad.push(path + UHT_CONFIG.LANGUAGE + suffix);
            filesToLoad.push(path + UHT_CONFIG.LANGUAGE + "_GUI" + suffix)
        }
        return filesToLoad
    };
    var LoadL10ns = function() {
        var filesToLoad = GetL10nFiles();
        numL10nFilesToLoad = filesToLoad.length;
        if (numL10nFilesToLoad == 0) SetUHTResources();
        else
            while (filesToLoad.length > 0) new PackageLoader(filesToLoad.shift(),
                LoadL10nCallback, true)
    };
    var LoadCustomizationsInfo = function() {
        new PackageLoader(UHT_CONFIG.GAME_URL + "customizations.info", OnCustomizationsInfoLoaded, false)
    };
    var OnCustomizationsInfoLoaded = function(responseText) {
        if (responseText != null) {
            responseText = String(responseText).replace(/^\s+|\s+$/g, "");
            if (responseText != "") {
                var customizations = Object(JSON.parse(responseText))["customizations"];
                if (customizations != undefined) {
                    LoadCustomization(customizations);
                    return
                }
            }
        }
        console.log("Customization info not found");
        customizationLoaded = true;
        SetUHTResources()
    };
    var LoadCustomization = function(customizations) {
        if (UHT_GAME_CONFIG == null) {
            setTimeout(function() {
                LoadCustomization(customizations)
            }, 250);
            return
        }
        for (var i = 0; i < customizations.length; ++i) {
            var stylename = UHT_GAME_CONFIG["STYLENAME"];
            if (customizations[i]["stylenames"].indexOf(stylename) > -1) {
                console.info("Found customization for stylename " + stylename);
                new PackageLoader(UHT_CONFIG.GAME_URL + "customizations/" + customizations[i]["name"] + ".json", OnCustomizationLoaded,
                    false);
                return
            }
        }
        customizationLoaded = true;
        SetUHTResources()
    };
    var OnCustomizationLoaded = function(responseText) {
        if (responseText != null) loadedCustomizationFiles.push(responseText);
        customizationLoaded = true;
        SetUHTResources()
    };
    LoadL10ns();
    LoadCustomizationsInfo()
};
UHT_LOCAL = false;
UHT_ONLINE = true;
UHT_DEBUG = false;
UHT_SCRIPTS = ['build.js'];
UHT_STYLES = ['style.css'];
UHT_REVISION = {
    common: '111892',
    desktop: '111892',
    mobile: '-'
};
UHT_BUILD_PATH = 'desktop';
UHT_GAME_SIZE = 'game000?key=94a164e7127437a34706742d96c9676c:1327922,game001?key=725863bf6c40093d40e2d066c3a0653e:1078556,game002?key=808f485bb7a02c988e1d689f21aff73e:503825,';
UHT_RESOURCES_SIZE = 'main_resources000?key=e36dbbd4c1470103b09053a641e2685d:542236,main_resources001?key=d3e220724e85af36c902b557335c2f56:582059,main_resources002?key=25f988bd610147339d630125f1b1614e:2021429,main_resources003?key=eed6c31833e200acceeab14eb75da74d:614448,main_resources004?key=be973a527d6572d2b690500e6c452584:1187392,main_resources005?key=5a1898979cc057728c8630f270ca18cc:591966,main_resources006?key=15e4ae19219aa71cb9c3d26fcaf8d946:694310,main_resources007?key=86e1a460717d8ef73e39cc77214ad607:957775,main_resources008?key=f5bd1e71df355ec52be0606cdb58e230:732660,main_resources009?key=a235f1580f5132f6353b1e077c4cbf77:1056331,main_resources010?key=e546f0b91ae1b8e2e796b0105c82c9d4:624197,main_resources011?key=15219e14e04aef46cb41372c4ccd5112:545280,main_resources012?key=45bdd7253af1f2fe037e00079c797bf1:589551,main_resources013?key=42acacfc7d3ede31a1a7f99b9b6d003b:557639,main_resources014?key=1d7b9c753a11e7039941df5d6c5cd945:550422,main_resources015?key=ec20eebdc278a8c4a93da9e68a0e89ed:612670,main_resources016?key=63a5e37adfdae82580823b419c9817f7:62162,';
UHT_OTHER_SIZE = 'other_resources000?key=0bd00700988819c08f03b13fbc758eee:609613,other_resources001?key=e1045570b6f66b37732bdf34c430f346:95004,';
UHT_GUI_SIZE = 'GUI000?key=aa875df7efc329e04cd9ed6cf4b85066:885931,GUI001?key=1254bdd36a48bdd6fd2d626146ceec9b:1169765,GUI002?key=74f2780cf969e802b51dc1e0958fea0e:1526256,GUI003?key=4fce4cc11d3a8ef576694d68b8f4c892:616883,GUI004?key=2f354621e981c7f945dce143028b3c45:621559,GUI005?key=b4635600f258fd95d82db29b3b608a14:595492,GUI006?key=f35826d39ccac76d5a356903449b98d8:584090,GUI007?key=a98418766bc985013affe450584e925d:626194,GUI008?key=03b310aa7723fa0d392481784e4d39e2:795959,GUI009?key=79b3977f29cb3f1df2c1bca98cf472e4:917192,GUI010?key=dea1f544165c4371c24db50010612f3f:918000,GUI011?key=7a0b1f7410da0d713dbe5986c73e5ff0:753537,';
UHT_GUI_RESOURCES_SIZE = 'GUI_resources000?key=66ff817e798ad905b5843c0a04cdafd1:737060,GUI_resources001?key=39c17e5f57b19516d063d78dcc47fcd8:1114104,GUI_resources002?key=954d31d595688961d9e0e80218482023:574351,GUI_resources003?key=73a43e1980bb6216eb0be7209ccaeb0a:882342,GUI_resources004?key=9808590b69e06625980b10a3761fecc0:737062,GUI_resources005?key=a83ea74c0219fc403877561f5dec1c72:813563,GUI_resources006?key=3dfecd7fcf0f7c734c6f0136c7e74c27:537545,';
UHT_SOUNDS_SIZES = 'GUI_sounds.mp3?key=928d73f597a8053f91872b092c473133:304265,GUI_sounds.ogg?key=0da5f9dd940e2abee29293b5c29b6226:349341,MDL_MultiLobby_sounds.mp3?key=da53bb2c1567f654863c30c0d4c14d0e:7333,MDL_MultiLobby_sounds.ogg?key=77043faaa1e1f254015b3b7458b095d4:12569,sounds.mp3?key=7c07e7b72fbcb92a0375432c06629bcc:4627145,sounds.ogg?key=c4f532ded630a0478b0788bf4eb54c51:4673253,';
UHT_MODULES_SIZES = 'MDL_MultiLobby?key=1efba2dfc4f88afb2245af1811e81365:2909646,';
UHT_SYSTEM_MESSAGES = UHTReplace('{"en":{"Frozen":"val","ServerError":"val","NoMoney":"TO PLACE THIS BET, YOU WILL NEED TO VISIT THE CASHIER AND ADD FUNDS TO YOUR ACCOUNT","Techbreak":"SORRY! FOR THE MOMENT WE ARE UNABLE TO TAKE REAL MONEY BETS DUE TO CASINO UPGRADES. REAL MONEY BETS WILL BE AVAILABLE AGAIN IN MOMENTS","GameAvailableOnlyAtRealMode":"SORRY! THIS GAME IS ONLY AVAILABLE TO PLAYERS WITH REAL MONEY ACCOUNTS. YOU CAN PLAY HERE ONCE YOU SWITCH TO REAL MONEY PLAY.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"CAN BE PLAYED WITH REAL MONEY ONLY","ProgressiveJackpotGames":"PROGRESSIVE JACKPOT GAMES","SaveSettingError":"SETTINGS CANNOT BE SAVED NOW ON THE SERVER AND WILL BE ACTUAL ONLY DURING THIS SESSION","LostConnect":"YOUR CONNECTION TO OUR GAME SERVER HAS BEEN LOST. WE APOLOGIZE FOR THIS INCONVENIENCE. PLEASE TRY AGAIN SHORTLY.","PleaseLogin":"Please log in","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Your session has expired. Please restart the game.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"CONTINUE PLAYING","BtStopPlaying":"STOP PLAYING","WindowTitle":"MESSAGE","BtRCHistory":"GAME HISTORY","BtCLOSE":"CLOSE","DeferredLoading":"Loading Features","ResumingGame":"A game is already in progress, resuming...","ClientRegulation":"You have been playing for {1} minutes. Press CONTINUE to keep playing","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Continue","BtQuit":"Quit","BtAccountHistory":"Account History","BtExit":"Exit"},"fr":{"NoMoney":"POUR PLACER CETTE MISE, VOUS DEVEZ VOUS RENDRE AU CAISSIER ET AJOUTER DES FONDS SUR VOTRE COMPTE","Techbreak":"EN RAISON DE MISES À JOUR DU CASINO, NOUS NE POUVONS ACCEPTER DE MISES EN ARGENT RÉEL. NOUS NOUS EXCUSONS POUR CE DÉSAGREMENT TEMPORAIRE","GameAvailableOnlyAtRealMode":"DÉSOLÉ ! CE JEU EST ACCESSIBLE UNIQUEMENT AUX JOUEURS AYANT UN COMPTE EN ARGENT RÉEL.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"SONT ACCESSIBLES UNIQUEMENT EN ARGENT RÉEL","ProgressiveJackpotGames":"LES JEUX AUX JACKPOTS PROGRESSIFS","SaveSettingError":"IMPOSSIBLE D###APOS###ENREGISTRER VOS PARAMÈTRES ACTUELS À CE STADE. ILS SERONT RÉINITIALISÉS APRÈS CETTE SESSION","LostConnect":"VOUS N###APOS###ÊTES PLUS CONNECTÉ À NOTRE SERVEUR DE JEU.  VEUILLEZ NOUS EXCUSER POUR CE DÉSAGRÉMENT.  VEUILLEZ RÉESSAYER UN PEU PLUS TARD.","PleaseLogin":"Veuillez vous connecter !","UnsupportedBrowserTitle":"VOUS UTILISEZ UN NAVIGATEUR NON PRIS EN CHARGE.","UseGoogleChrome":"Veuillez utiliser Google Chrome.","UseSafari":"Veuillez utiliser Safari.","Timeout":"Votre session a expiré. Veuillez redémarrer le jeu.","BtContinuePlaying":"CONTINUER À JOUER","BtStopPlaying":"ARRÊTER DE JOUER","WindowTitle":"MESSAGE","BtRCHistory":"HISTORIQUE DU JEU","BtCLOSE":"FERMER","DeferredLoading":"Chargement des fonctions","ResumingGame":"Une partie est déjà en cours, reprise…","ClientRegulation":"Vous jouez depuis {1} minutes. Appuyez sur CONTINUER pour continuer à jouer","ClientRegulationTitleUKGC":"Retour à la réalité UKGC","ClientRegulationTitleMalta":"Retour à la réalité de Malte","BtContinue":"Continuer","BtQuit":"Arrêter","BtAccountHistory":"Historique du compte","BtExit":"Quitter"},"de":{"NoMoney":"BITTE GEHEN SIE ZUM KASSIERER UND ZAHLEN SIE AUF IHR KONTO EIN, UM DIESEN EINSATZ ZU SETZEN","Techbreak":"ES TUT UNS LEID! AUFGRUND VON KASINO-UPGRADES KÖNNEN WIR MOMENTAN KEINE ECHTGELD-EINSÄTZE AKZEPTIEREN. ECHTGELDEINSÄTZE SIND IN EINIGEN AUGENBLICKEN WIEDER VERFÜGBAR.","GameAvailableOnlyAtRealMode":"ES TUT UNS LEID, DIESES SPIEL STEHT NUR SPIELERN MIT ECHTGELDKONTEN ZUR VERFÜGUNG. SIE KÖNNEN HIER SPIELEN, WENN SIE AUF ECHTGELDSPIEL GEWECHSELT HABEN.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"KÖNNEN NUR MIT ECHTGELD GESPIELT WERDEN","ProgressiveJackpotGames":"PROGRESSIVE JACKPOT-SPIELE","SaveSettingError":"EINSTELLUNGEN KÖNNEN JETZT NICHT AUF DEM SERVER GESPEICHERT WERDEN UND SIND NUR WÄHREND DIESER SITZUNG AKTIV","LostConnect":"IHRE VERBINDUNG ZU UNSEREM SPIELSERVER WURDE UNTERBROCHEN. WIR BEDAUERN DIESE UNANNEHMLICHKEIT. BITTE VERSUCHEN SIE ES IN KÜRZE WIEDER.","PleaseLogin":"Bitte melden Sie sich an!","UnsupportedBrowserTitle":"DER VON IHNEN VERWENDETE BROWSER WIRD NICHT UNTERSTÜTZT.","UseGoogleChrome":"Bitte verwenden Sie Google Chrome.","UseSafari":"Bitte verwenden Sie Safari.","Timeout":"Deine Sitzung is abgelaufen. Bitte starte das Spiel neu.","BtContinuePlaying":"WEITERSPIELEN","BtStopPlaying":"SPIELEN BEENDEN","WindowTitle":"NACHRICHT","BtRCHistory":"SPIELVERLAUF","BtCLOSE":"SCHLIEßEN","DeferredLoading":"Funktionen werden geladen","ResumingGame":"Es läuft bereits ein Spiel; wird fortgesetzt …","ClientRegulation":"Sie spielen nun schon seit {1} Minuten. Drücken Sie WEITER, um weiterzuspielen","ClientRegulationTitleUKGC":"UKGC-Realitätscheck","ClientRegulationTitleMalta":"Malta-Realitätscheck","BtContinue":"Weiter","BtQuit":"Verlassen","BtAccountHistory":"Kontoverlauf","BtExit":"Beenden"},"it":{"NoMoney":"PER PIAZZARE QUESTA SCOMMESSA, DOVETE RECARVI IN CASSA E AGGIUNGERE DEL DENARO SUL VOSTRO CONTO","Techbreak":"A CAUSA DI UN AGGIORNAMENTO DEL CASINÒ NON POSSIAMO ACCETTARE DELLE SCOMMESSE IN DENARO REALE. CI SCUSIAMO PER QUESTO DISGUIDO TEMPORANEO","GameAvailableOnlyAtRealMode":"SCUSATE! QUESTO GIOCO È ACCESSIBILE SOLAMENTE DAI GIOCATORI A DENARO REALE","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"SONO ACCESSIBILI SOLAMENTE IN DENARO REALE","ProgressiveJackpotGames":"I GIOCHI DI JACKPOT PROGRESSIVI","SaveSettingError":"LE IMPOSTAZIONI NON POSSONO ESSERE SALVATE ADESSO SUL SERVER E SARANNO EFFETTIVE SOLO DURANTE QUESTA SESSIONE","LostConnect":"NON SIETE PIÙ COLLEGATI AL NOSTRO SERVER DI GIOCO. VOGLIATE SCUSARCI PER QUESTO DISGUIDO. SIETE PREGATI DI PROVARE PIÙ TARDI","PleaseLogin":"Per favore esegui il login!","UnsupportedBrowserTitle":"STAI USANDO UN BROWSER NON SUPPORTATO.","UseGoogleChrome":"Usa Google Chrome.","UseSafari":"Usa Safari.","Timeout":"La tua sessione è scaduta. Per favore riavvia il gioco.","BtContinuePlaying":"CONTINUA A GIOCARE","BtStopPlaying":"SMETTI DI GIOCARE","WindowTitle":"MESSAGGIO","BtRCHistory":"CRONOLOGIA DEL GIOCO","BtCLOSE":"CHIUDI","DeferredLoading":"Caricamento Feature","ResumingGame":"È già in corso una partita, ripresa...","ClientRegulation":"Stai giocando da {1} minuti. Premi CONTINUA per continuare a giocare","ClientRegulationTitleUKGC":"Reality Check UKGC","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Continua","BtQuit":"Abbandona","BtAccountHistory":"Cronologia Account","BtExit":"Esci"},"es":{"NoMoney":"Para realizar esta apuesta, le rogamos que se dirija al cajero e ingrese fondos en su cuenta","Techbreak":"¡lo sentimos! Debido a las mejoras que estamos realizando en este momento, no podemos aceptar apuestas con dinero real. Le rogamos que vuelva a intentarlo pasados unos minutos.","GameAvailableOnlyAtRealMode":"Lamentablemente, sólo pueden acceder a este juego usuarios con cuentas con dinero real. Estaremos encantados de darle la bienvenida cuando disponga de una.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"sólo se encuentran disponibles en modo con dinero real","ProgressiveJackpotGames":"Los juegos con premios progresivos","SaveSettingError":"En estos momentos, no podemos guardar sus ajustes para futuras sesiones.","LostConnect":"Error de conexión con el servidor. Lamentamos las molestias. Le rogamos que vuelva a intentarlo pasados unos minutos.","PleaseLogin":"¡Acceda a su cuenta!","UnsupportedBrowserTitle":"ESTÁ UTILIZANDO UN NAVEGADOR INCOMPATIBLE.","UseGoogleChrome":"Utilice Google Chrome.","UseSafari":"Utilice Safari.","BtOK":"Aceptar","Timeout":"Su sesión ha expirado. Por favor, reinicie el juego.","BtContinuePlaying":"REANUDAR JUEGO","BtStopPlaying":"DETENER JUEGO","WindowTitle":"Mensaje","BtRCHistory":"HISTORIAL DEL JUEGO","BtCLOSE":"Cerrar","DeferredLoading":"Cargando Funciones","ResumingGame":"Ya hay una partida en curso. Reanudando…","ClientRegulation":"Has estado jugando durante {1} minutos. Pulsa CONTINUAR para seguir jugando","ClientRegulationTitleUKGC":"Comprobación de Realidad UKGC","ClientRegulationTitleMalta":"Comprobación de Realidad Malta","BtContinue":"Continuar","BtQuit":"Abandonar","BtAccountHistory":"Historial de la cuenta","BtExit":"Salir"},"zh":{"NoMoney":"\n如需下赌注，您将需要访问出纳并添加资金到您的账户\n","Techbreak":"对不起！现在由于赌场升级， 我们无法接受真钱赌注。稍候将重新可接受真钱赌注\n","GameAvailableOnlyAtRealMode":"对不起！本游戏仅仅提供给具有真钱账户的玩家。当您转换到真钱游戏的时候，您可以玩这个游戏\n","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"只能用真钱玩游戏","ProgressiveJackpotGames":"累计奖金池游戏","SaveSettingError":"设置现在无法保存到服务器上，仅仅在这个游戏期间保持有效\n","LostConnect":"到我们游戏服务器上的连接已丢失。我们对此不便之处，\n深表歉意。请稍候再试.\n","PleaseLogin":"请登入！","UnsupportedBrowserTitle":"您正在使用一个不受支持的浏览器。","UseGoogleChrome":"请使用Google Chrome。","UseSafari":"请使用Safari。","BtOK":"好的","Timeout":"您的会话已过期。请重新启动游戏。","BtContinuePlaying":"继续游戏","BtStopPlaying":"停止游戏","WindowTitle":"信息","BtRCHistory":"游戏历史记录","BtCLOSE":" 关闭 ","DeferredLoading":"正在载入功能","ResumingGame":"游戏进行中，继续…","ClientRegulation":"你已经玩了{1}分钟。按下“继续”继续游戏","ClientRegulationTitleUKGC":"UKGC现状核实","ClientRegulationTitleMalta":"马耳他现状核实","BtContinue":"继续","BtQuit":"放弃","BtAccountHistory":"账户历史","BtExit":"退出"},"ja":{"NoMoney":"この賭けをするには、キャッシャーの所へ行って、アカウントに資金を追加する必要があります","Techbreak":"申し訳ありません！カジノのアップグレードのため、ただ今現金の賭けを受け入れることができません。しばらくして現金の賭けは再び利用可能になります","GameAvailableOnlyAtRealMode":"申し訳ありませんが、このゲームはリアルマネーのアカウントをお持ちしているプレイヤーしかプレーすることができません。リアルマネープレーに切り替えすると、プレーすることができます。","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"リアルマネーでしかプレーすることができません。","ProgressiveJackpotGames":"進行性のジャックポットゲーム","SaveSettingError":"設定がただ今サーバーに保存することができないので、本セッションのみで有効にします","LostConnect":"ゲームサーバへの接続が中断しました。ご迷惑をおかけしまして申し訳ございません。しばらくしてもう一度やり直してください。","PleaseLogin":"ログインしてください！","UnsupportedBrowserTitle":"あなたのブラウザーはサポートしていません。","UseGoogleChrome":"Google Chromeを利用してください。","Timeout":"あなたのセッションの有効期限が切れました。ゲームを再起動してください。","BtContinuePlaying":"プレイを続行","BtStopPlaying":"プレイを停止","WindowTitle":"メッセージ","BtRCHistory":"ゲーム履歴","BtCLOSE":"閉じる","DeferredLoading":"機能の読み込み","ResumingGame":"ゲームはすでに進行中で、再開しています…","ClientRegulation":"あなたは{1}分間プレイしています。プレイし続けるには続行を押します","ClientRegulationTitleUKGC":"UKGCリアリティチェック","ClientRegulationTitleMalta":"マルタリアリティチェック","BtContinue":"続行","BtQuit":"止める","BtAccountHistory":"アカウント履歴","BtExit":"終了"},"ko":{"NoMoney":"베팅을 하려면 캐셔에서 고객님의 계좌로 송금을 추가하십시오.","Techbreak":"죄송합니다! 카지노 업그레이드로 인해 현금 베팅이 불가능합니다. 잠시 후에 다시 이용하여 주십시오.","GameAvailableOnlyAtRealMode":"죄송합니다! 카지노 업그레이드로 인해 현금 베팅이 불가능합니다. 잠시 후에 다시 이용하여 주십시오.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"실제 돈만으로 플레이 불가","ProgressiveJackpotGames":"프로그레시브 잭팟 게임","SaveSettingError":"설정은 서버에 저장되지 않으며 게임이 진행되는 동안에만 실행됩니다.","LostConnect":"게임 서버에서 연결이 끊어졌습니다. 불편을 끼쳐 드려 죄송합니다. 다시 시도하시기 바랍니다.","PleaseLogin":"로그인하십시오!","UnsupportedBrowserTitle":"지원되지 않는 브라우저를 사용하고 있습니다.","UseGoogleChrome":"구글 크롬을 사용하십시오.","Timeout":"세션이 만료되었습니다. 게임을 다시 시작하십시오.","BtContinuePlaying":"플레이 계속하기","BtStopPlaying":"플레이 중지하기","WindowTitle":"메시지","BtRCHistory":"게임 이력","BtCLOSE":"닫기","DeferredLoading":"보너스 불러오는 중","ResumingGame":"게임이 이미 진행 중입니다, 다시 시작 중...","ClientRegulation":"{1}분 동안 플레이하셨습니다. 계속 플레이하시려면 계속 버튼을 누르세요","ClientRegulationTitleUKGC":"UKGC 리얼리티 체크","ClientRegulationTitleMalta":"몰타 리얼리티 체크","BtContinue":"계속","BtQuit":"끝내기","BtAccountHistory":"계정 이력","BtExit":"종료"},"ru":{"NoMoney":"ЧТОБЫ СДЕЛАТЬ ДАННУЮ СТАВКУ, ВАМ НЕОБХОДИМО ПОСЕТИТЬ КАССУ И ВНЕСТИ ДЕНЬГИ НА СВОЙ СЧЕТ","Techbreak":"В СВЯЗИ С ОБНОВЛЕНИЕМ КАЗИНО, В ДАННЫЙ МОМЕНТ, РЕАЛЬНЫЕ СТАВКИ НЕДОСТУПНЫ. ОНИ СНОВА СТАНУТ ДОСТУПНЫ В БЛИЖАЙШЕЕ ВРЕМЯ.","GameAvailableOnlyAtRealMode":"ЭТА ИГРА ДОСТУПНА ТОЛЬКО В РЕЖИМЕ РЕАЛЬНОЙ ИГРЫ. ВЫ СМОЖЕТЕ СЫГРАТЬ КАК ТОЛЬКО ПЕРЕКЛЮЧИТЕСЬ В ДАННЫЙ РЕЖИМ.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"ДОСТУПНЫ ТОЛЬКО В РЕЖИМЕ РЕАЛЬНОЙ ИГРЫ","ProgressiveJackpotGames":"ИГРЫ С ПРОГРЕССИВНЫМ ДЖЕКПОТОМ","SaveSettingError":"НАСТРОЙКИ НЕ МОГУТ БЫТЬ СОХРАНЕНЫ И БУДУТ АКТУАЛЬНЫ ТОЛЬКО НА ПРОТЯЖЕНИИ ТЕКУЩЕЙ СЕССИИ","LostConnect":"СОЕДИНЕНИЕ С СЕРВЕРОМ УТЕРЯНО. ПРИНОСИМ ИЗВИНЕНИЯ ЗА ДОСТАВЛЕННЫЕ НЕУДОБСТВА. ПОЖАЛУЙСТА, ПОВТОРИТЕ ПОПЫТКУ ПОЗЖЕ.","PleaseLogin":"Пожалуйста, авторизуйтесь!","UnsupportedBrowserTitle":"ВЫ ИСПОЛЬЗУЕТЕ НЕПОДДЕРЖИВАЕМЫЙ БРАУЗЕР.","UseGoogleChrome":"Пожалуйста, воспользуйтесь Google Chrome.","UseSafari":"Пожалуйста, воспользуйтесь Safari.","Timeout":"Время сессии истекло. Пожалуйста, перезагрузите игру.","BtContinuePlaying":"ПРОДОЛЖИТЬ ИГРАТЬ","BtStopPlaying":"ПРЕКРАТИТЬ ИГРАТЬ","WindowTitle":"СООБЩЕНИЕ","BtRCHistory":"ИСТОРИЯ ИГРЫ","BtCLOSE":"ЗАКРЫТЬ","DeferredLoading":"Игра загружается","ResumingGame":"Игра уже запущена, возобновление …","ClientRegulation":"Вы играете {1} минут. Нажмите ПРОДОЛЖИТЬ, чтобы играть дальше. ","ClientRegulationTitleUKGC":"Контроль действительности, UKGC","ClientRegulationTitleMalta":"Контроль действительности, Мальта","BtContinue":"Продолжить","BtQuit":"Выйти","BtAccountHistory":"История счета","BtExit":"Выход"},"ro":{"NoMoney":"PENTRU A MIZA, TREBUIE SA ADAUGI BANI IN CONTUL TAU.","Techbreak":"NE PARE RAU, PENTRU MOMENT NU PUTEM ACCEPTA MIZE PE BANI REALI DEOARECE CAZINOUL ESTE IN CURS DE ACTUALIZARE. SE VOR PUTEA FACE MIZE PE BANI REALI IN CATEVA MOMENTE","GameAvailableOnlyAtRealMode":"SE POATE JUCA NUMAI PE BANI REALI","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"SE POATE JUCA NUMAI PE BANI REALI","ProgressiveJackpotGames":"JOCURI CU JACKPOT PROGRESIV","SaveSettingError":"IN ACEST MOMENT NU SE POT SALVA OPTIUNILE.  DIN ACEASTA CAUZA, VOR FI VALABILE DOAR PENTRU SESIUNEA CURENTA","LostConnect":"AI PIERDUT CONEXIUNEA CU SERVERUL DE JOC. INCEARCA DIN NOU IN CATEVA MOMENTE","PleaseLogin":"VA RUGAM SA VA CONECTATI","UnsupportedBrowserTitle":"PENTRU O EXPERIENTA DE JOC MAI BUNA","UseGoogleChrome":"FOLOSITI GOOGLE CHROME","UseSafari":"FOLOSITI SAFARI","Timeout":"SESIUNEA DE JOC A EXPIRAT. TE RUGAM SA REPORNESTI JOCUL PENTRU A CONTINUA","BtContinuePlaying":"CONTINUA","BtStopPlaying":"STOP","WindowTitle":"MESAJ","BtRCHistory":"ISTORIC","BtCLOSE":"ÎNCHIDE","DeferredLoading":"Jocul se încarcă","ResumingGame":"Un joc este deja in desfasurare, reluare...","ClientRegulation":"V-ati jucat {1} minute. Apasati CONTINUA pentru a continua jocul","ClientRegulationTitleUKGC":"UKGC Verificarea de Realitate","ClientRegulationTitleMalta":"Malta Verificare de Realitate","BtContinue":"Continua","BtQuit":"OPRESTE","BtAccountHistory":"Istoricul Contului","BtExit":"INCHIDE"},"da":{"Frozen":"val","ServerError":"val","NoMoney":"FOR AT FORETAGE DENNE INDSATS SKAL DU BESØGE KASSEN OG TILFØJE MIDLER TIL DIN KONTO","Techbreak":"DESVÆRRE! I ØJEBLIKKET KAN VI IKKE MODTAGE INDSATSER MED ÆGTE PENGE PGA. KASINOOPGRADERINGER. INDSATSER MED ÆGTE PENGE VIL VÆRE TILGÆNGELIGE IGEN OM LIDT","GameAvailableOnlyAtRealMode":"DESVÆRRE! DETTE SPIL ER KUN TILGÆNGELIGT FOR SPILLERE MED KONTI MED ÆGTE PENGE. DU KAN SPILLE HER, NÅR DU SKIFTER TIL SPIL MED ÆGTE PENGE.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"KAN KUN SPILLES MED ÆGTE PENGE","ProgressiveJackpotGames":"PROGRESSIV JACKPOTSPIL","SaveSettingError":"INDSTILLINGER KAN IKKE GEMMES NU PÅ SERVEREN OG VIL KUN VÆRE GÆLDENDE UNDER DENNE SESSION","LostConnect":"DIN FORBINDELSE TIL VORES SPILSERVER ER GÅET TABT. VI BEKLAGER ULEJLIGHEDEN. PRØV IGEN OM LIDT.","PleaseLogin":"Log venligst ind!","UnsupportedBrowserTitle":"FOR EN BEDRE SPILLEOPLEVELSE","UseGoogleChrome":"BRUG VENLIGST GOOGLE CHROME","UseSafari":"BRUG VENLIGST SAFARI","Timeout":"Din session er udløbet. Genstart venligst spillet.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"FORTSÆT SPIL","BtStopPlaying":"STOP SPIL","WindowTitle":"BESKED","BtRCHistory":"SPILHISTORIK","BtCLOSE":"LUK","DeferredLoading":"Indlæser","ResumingGame":"Et spil er allerede i gang, genoptager…","ClientRegulation":"Du har spillet i {1} minutter. Tryk på FORTSÆT for at spille videre","ClientRegulationTitleUKGC":"UKGC virkelighedstjek","ClientRegulationTitleMalta":"Malta virkelighedstjek","BtContinue":"Fortsæt","BtQuit":"Afslut","BtAccountHistory":"Kontohistorik","BtExit":"Forlad"},"sv":{"Frozen":"val","ServerError":"val","NoMoney":"FÖR ATT LÄGGA DETTA SPEL MÅSTE DU BESÖKA KASSAN OCH LÄGGA TILL PENGAR PÅ DITT KONTO","Techbreak":"TYVÄRR KAN VI FÖR NÄRVARANDE INTE TA EMOT RIKTIGA PENGAR PÅ GRUND AV UPPGRADERINGAR SOM UTFÖRS PÅ CASINOT. SPEL MED RIKTIGA PENGAR KOMMER STRAX VARA TILLGÄNGLIGT IGEN","GameAvailableOnlyAtRealMode":"TYVÄRR ÄR DETTA SPEL BARA TILLGÄNGLIGT FÖR SPELARE MED KONTON MED RIKTIGA PENGAR. DU KAN SPELA HÄR NÄR DU BYTER TILL RIKTIGA PENGAR.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"KAN ENDAST SPELAS MED RIKTIGA PENGAR","ProgressiveJackpotGames":"PROGRESSIVA JACKPOTSPEL","SaveSettingError":"INSTÄLLNINGARNA KAN INTE SPARAS NU PÅ SERVERN OCH BLIR ENDAST TILLGÄNGLIGA UNDER DENNA SESSION","LostConnect":"DIN ANSLUTNING TILL SPELSERVERN HAR FÖRLORATS. VI BER OM URSÄKT FÖR EVENTUELLA BESVÄR. PROVA IGEN STRAX.","PleaseLogin":"Var vänlig och logga in!","UnsupportedBrowserTitle":"FÖR EN BÄTTRE SPELUPPLEVELSE","UseGoogleChrome":"ANVÄND GOOGLE CHROME","UseSafari":"ANVÄND SAFARI","Timeout":"Din session är slut. Starta om spelet.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"FORTSÄTT SPELA","BtStopPlaying":"SLUTA SPELA","WindowTitle":"MEDDELANDE","BtRCHistory":"SPELHISTORIK","BtCLOSE":"STÄNG","DeferredLoading":"Laddar funktioner","ResumingGame":"Ett spel är redan igång, återupptar..","ClientRegulation":"Du har spelat i (1) minuter. Tryck på FORTSÄTT för att fortsätta spela.","ClientRegulationTitleUKGC":"UKGC Verklighetskontroll","ClientRegulationTitleMalta":"Malta Verklighetskontroll","BtContinue":"Fortsätt","BtQuit":"Avsluta","BtAccountHistory":"Kontohistorik","BtExit":"Lämna"},"pl":{"Frozen":"val","ServerError":"val","NoMoney":"ABY POSTAWIĆ ZAKŁAD MUSISZ DODAĆ ŚRODKI DO SWOJEGO KONTA","Techbreak":"PRZEPRASZAMY! W TEJ CHWILI NIE MOŻEMY PRZYJĄĆ ZAKŁADÓW GOTÓWKOWYCH Z POWODU AKTUALIZACJI. ZAKŁADY GOTÓWKOWE BĘDĄ DOSTĘPNE WKRÓTCE","GameAvailableOnlyAtRealMode":"PRZEPRASZAMY! TA GRA JEST DOSTĘPNA DLA POSIADACZY KONT GOTÓWKOWYCH. MOŻESZ SKORZYSTAĆ Z GRY JEŚLI PRZEŁĄCZYSZ SIĘ NA GOTÓWKĘ.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"ROZGRYWKA TYLKO Z PRAWDZIWĄ GOTÓWKĄ","ProgressiveJackpotGames":"GRY Z PROGRESYWNYM JACKPOTEM","SaveSettingError":"OBECNIE NIE MOŻNA ZAPISAĆ USTAWIEŃ NA SERWERZE I BĘDĄ ONE OBOWIĄZYWAĆ TYLKO PODCZAS TEJ SESJI","LostConnect":"UTRACONO POŁĄCZENIE Z SERWEREM. PRZEPRASZAMY ZA UTRUDNIENIA. PROSIMY SPRÓBOWAĆ PONOWNIE.","PleaseLogin":"Zaloguj się!","UnsupportedBrowserTitle":"DLA LEPSZEJ GRY","UseGoogleChrome":"UŻYJ GOOGLE CHROME","UseSafari":"UŻYJ SAFARI","Timeout":"Sesja wygasła. Zacznij od nowa.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"KONTYNUUJ GRĘ","BtStopPlaying":"PRZERWIJ GRĘ","WindowTitle":"WIADOMOŚĆ","BtRCHistory":"HISTORIA GRY","BtCLOSE":"ZAMKNIJ","DeferredLoading":"Ładowanie Funkcji","ResumingGame":"Gra jest w toku, wznawianie…","ClientRegulation":"Grasz od {1} minut. Naciśnij KONTYNUUJ, aby grać dalej","ClientRegulationTitleUKGC":"Powrót do rzeczywistości UKGC","ClientRegulationTitleMalta":"Powrót do rzeczywistości Malta","BtContinue":"Kontynuuj","BtQuit":"Zrezygnuj","BtAccountHistory":"Historia konta","BtExit":"Wyjdź"},"id":{"Frozen":"val","ServerError":"val","NoMoney":"UNTUK MEMASANG TARUHAN INI, ANDA HARUS MENGUNJUNGI KASIR DAN MENAMBAHKAN DANA KE AKUN ANDA","Techbreak":"MAAF! UNTUK SAAT INI KAMI TIDAK DAPAT MENERIMA TARUHAN UANG ASLI KARENA UPGRADE KASINO, TARUHAN UANG ASLI AKAN TERSEDIA KEMBALI DI WAKTU MENDATANG","GameAvailableOnlyAtRealMode":"MAAF! GAME INI HANYA TERSEDIA BAGI PEMAIN DENGAN AKUN UANG ASLI. ANDA BISA BERMAIN DI SINI SETELAH ANDA BERALIH KE PERMAINAN UANG ASLI.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"HANYA BISA DIMAINKAN DENGAN UANG ASLI","ProgressiveJackpotGames":"GAME JACKPOT PROGRESIF","SaveSettingError":"PENGATURAN TIDAK BISA DISIMPAN SEKARANG DI SERVER DAN AKAN MENJADI AKTUAL HANYA SELAMA SESI INI","LostConnect":"KONEKSI ANDA KE SERVER GAME KAMI LUMPUH. KAMI MOHON MAAF ATAS KETIDAKNYAMANAN INI. COBA LAGI BEBERAPA SAAT KEMUDIAN.","PleaseLogin":"Harap Masuk!","UnsupportedBrowserTitle":"UNTUK PENGALAMAN GAMING YANG LEBIH BAIK","UseGoogleChrome":"GUNAKAN GOOGLE CHROME","UseSafari":"GUNAKAN SAFARI","Timeout":"Sesi Anda telah berakhir. Mulai ulang game ini.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"TERUSKAN BERMAIN","BtStopPlaying":"BERHENTI BERMAIN","WindowTitle":"PESAN","BtRCHistory":"RIWAYAT GAME","BtCLOSE":"TUTUP","DeferredLoading":"Memuat Fitur","ResumingGame":"Game sedang berlangsung, melanjutkan…","ClientRegulation":"Anda telah bermain selama {1} menit. Tekan LANJUTKAN untuk terus bermain","ClientRegulationTitleUKGC":"Pemeriksaan Realitas UKGC","ClientRegulationTitleMalta":"Pemeriksaan Realitas Malta","BtContinue":"Lanjutkan","BtQuit":"Stop","BtAccountHistory":"Riwayat Akun","BtExit":"Keluar"},"pt":{"Frozen":"val","ServerError":"val","NoMoney":"PARA FAZER ESTA APOSTA, PRECISARÁ DE VISITAR O CAIXA E ADICIONAR FUNDOS À SUA CONTA","Techbreak":"LAMENTAMOS! DE MOMENTO NÃO PODEMOS ACEITAR APOSTAS A DINHEIRO REAL DEVIDO A ATUALIZAÇÕES DO CASINO. AS APOSTAS A DINHEIRO REAL ESTARÃO NOVAMENTE DISPONÍVEIS DENTRO DE MOMENTOS.","GameAvailableOnlyAtRealMode":"LAMENTAMOS! ESTE JOGO SÓ ESTÁ DISPONÍVEL PARA JOGADORES CONTAS DE DINHEIRO REAL. PODE JOGAR AQUI LOGO QUE MUDE PARA JOGO A DINHEIRO REAL.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"SÓ PODE SER JOGADO COM DINHEIRO REAL.","ProgressiveJackpotGames":"JOGOS DE JACKPOT PROGRESSIVO","SaveSettingError":"AS CONFIGURAÇÕES NÃO PODEM SER GUARDADAS NESTE MOMENTO NO SERVIDOR E SÓ ESTARÃO ATIVAS DURANTE ESTA SESSÃO","LostConnect":"A SUA LIGAÇÃO AO NOSSO SERVIDOR DE JOGO PERDEU-SE. PEDIMOS DESCULPA PELO INCONVENIENTE. TENTE NOVAMENTE EM BREVE.","PleaseLogin":"Inicie sessão!","UnsupportedBrowserTitle":"PARA UMA MELHOR EXPERIÊNCIA DE JOGO","UseGoogleChrome":"USE O GOOGLE CHROME","UseSafari":"USE O SAFARI","Timeout":"A sua sessão expirou. Reinicie o jogo.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"CONTINUAR A JOGAR","BtStopPlaying":"PARAR DE JOGAR","WindowTitle":"MENSAGEM","BtRCHistory":"HISTÓRICO DE JOGO","BtCLOSE":"FECHAR","DeferredLoading":"A Carregar Funcionalidades","ResumingGame":"Já existe um jogo em curso, a retomar…","ClientRegulation":"Está a jogar há {1} minutos. Prima CONTINUAR para continuar a jogar","ClientRegulationTitleUKGC":"Chamada à Realidade UKGC","ClientRegulationTitleMalta":"Chamada à Realidade Malta","BtContinue":"Continuar","BtQuit":"Sair","BtAccountHistory":"Histórico de conta","BtExit":"Sair"},"th":{"Frozen":"val","ServerError":"val","NoMoney":"ในการวางเดิมพันนี้ คุณจะต้องไปที่แคชเชียร์และเพิ่มเงินลงในบัญชีของคุณ","Techbreak":"ขอโทษ! ในตอนนี้เราไม่สามารถใช้เงินจริงเดิมพันได้ เนื่องจากการอัปเกรดคาสิโน เงินเดิมพันที่เป็นเงินจริงจะใช้ได้อีกครั้งในเวลาไม่นาน","GameAvailableOnlyAtRealMode":"ขอโทษ! เกมนี้มีให้เล่นเฉพาะสำหรับผู้เล่นที่มีบัญชีเงินจริงเท่านั้น คุณสามารถเล่นที่นี่ได้เมื่อคุณเปลี่ยนไปเล่นเงินจริง","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"สามารถเล่นได้โดยใช้เงินจริงเท่านั้น","ProgressiveJackpotGames":"โปรเกรสซีฟเกมแจ็คพ็อต","SaveSettingError":"การตั้งค่าไม่สามารถบันทึกได้ในเซิร์ฟเวอร์และจะทำได้เฉพาะในระหว่างเซสชันนี้เท่านั้น","LostConnect":"การเชื่อมต่อของคุณกับเซิร์ฟเวอร์เกมของเราขาดหายไป เราขออภัยสำหรับความไม่สะดวกนี้ โปรดลองอีกครั้ง","PleaseLogin":"กรุณาเข้าสู่ระบบ!","UnsupportedBrowserTitle":"เพื่อประสบการณ์การเล่นเกมที่ดียิ่งขึ้น","UseGoogleChrome":"โปรดใช้ GOOGLE CHROME","UseSafari":"โปรดใช้ SAFARI","Timeout":"เซสชันของคุณหมดอายุแล้ว โปรดเริ่มเกมใหม่","BtOK":"ตกลง","Regulation":"val","BtContinuePlaying":"เล่นต่อไป","BtStopPlaying":"หยุดเล่น","WindowTitle":"ข้อความ","BtRCHistory":"ประวัติเกม","BtCLOSE":"ปิด","DeferredLoading":"กำลังโหลดคุณลักษณะ","ResumingGame":"มีเกมกำลังดำเนินอยู่ กำลังกลับไปเล่นต่อ...","ClientRegulation":"คุณเล่นมานาน {1} นาทีแล้ว โปรดกด “เล่นต่อ” เพื่อเล่นต่อไป","ClientRegulationTitleUKGC":"การแจ้งเตือนเพื่อหยุดพักตั้งสติของ UKGC","ClientRegulationTitleMalta":"การแจ้งเตือนเพื่อหยุดพักตั้งสติของมอลต้า","BtContinue":"เล่นต่อ","BtQuit":"เลิกเล่น","BtAccountHistory":"ประวัติบัญชี","BtExit":"ออก"},"no":{"Frozen":"val","ServerError":"val","NoMoney":"FOR Å GJØRE DENNE INNSATSEN VIL DU MÅTTE BESØKE KASSEN OG SETTE INN PENGER PÅ KONTOEN DIN","Techbreak":"BEKLAGER! VI KAN FOR ØYEBLIKKET IKKE TA IMOT INNSATSER MED EKTE PENGER PÅ GRUNN AV KASINOOPPGRADERINGER. INNSATS MED EKTE PENGER VIL VÆRE TILGJENGELIG IGJEN OM NOEN ØYEBLIKK","GameAvailableOnlyAtRealMode":"BEKLAGER! DETTE SPILLET ER KUN TILGJENGELIG FOR SPILLERE MED EKTE PENGER-KONTO. DU KAN SPILLE HER NÅR DU HAR BYTTET TIL SPILL MED EKTE PENGER.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"KAN BARE SPILLES MED EKTE PENGER","ProgressiveJackpotGames":"PROGRESSIVE JACKPOTTSPILL","SaveSettingError":"INNSTILLINGER KAN IKKE LAGRES PÅ SERVEREN NÅ, OG VIL KUN GJELDE FOR DENNE ØKTEN","LostConnect":"TILKOBLINGEN DIN TIL SPILLET VÅRT GIKK TAPT. VI BEKLAGER DETTE. PRØV IGJEN OM LITT.","PleaseLogin":"Logg deg på!","UnsupportedBrowserTitle":"FOR EN BEDRE SPILLOPPLEVELSE","UseGoogleChrome":"BRUK GOOGLE CHROME","UseSafari":"BRUK SAFARI","Timeout":"Økten din har utløpt. Start spillet på nytt.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"FORTSETT Å SPILLE","BtStopPlaying":"AVSLUTT SPILLET","WindowTitle":"MELDING","BtRCHistory":"SPILLHISTORIKK","BtCLOSE":"LUKK","DeferredLoading":"Lader funksjoner","ResumingGame":"Permainan sedang berlangsung, menyambung…","ClientRegulation":"Du har spilt i {1} minutter. Trykk på FORTSETT for å fortsette å spille","ClientRegulationTitleUKGC":"UKGCs virkelighetsjekk","ClientRegulationTitleMalta":"Maltas virkelighetsjekk","BtContinue":"Fortsett","BtQuit":"Avslutt","BtAccountHistory":"Kontohistorikk","BtExit":"Gå ut"},"bg":{"Frozen":"val","ServerError":"val","NoMoney":"ЗА ДА НАПРАВИТЕ ТОЗИ ЗАЛОГ, ТРЯБВА ДА ПОСЕТИТЕ КАСАТА И ДА ЗАХРАНИТЕ СМЕТКАТА СИ.","Techbreak":"СЪЖАЛЯВАМЕ! В МОМЕНТА НЕ МОЖЕМ ДА ОБРАБОТВАМЕ ЗАЛОЗИ С РЕАЛНИ ПАРИ, ЗАЩОТО СЕ ИЗВЪРШВА АКТУАЛИЗАЦИЯ НА КАЗИНОТО. ЗАЛОЗИТЕ С РЕАЛНИ ПАРИ ЩЕ СА НАЛИЧНИ СЛЕД МАЛКО.","GameAvailableOnlyAtRealMode":"СЪЖАЛЯВАМЕ! ТАЗИ ИГРА Е ДОСТЪПНА САМО ЗА ИГРАЧИ СЪС СМЕТКИ С РЕАЛНИ ПАРИ. МОЖЕТЕ ДА ИГРАЕТЕ ТУК, СЛЕД КАТО ПРЕВКЛЮЧИТЕ НА ИГРА С РЕАЛНИ ПАРИ.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"МОЖЕ ДА СЕ ИГРАЕ САМО С РЕАЛНИ ПАРИ.","ProgressiveJackpotGames":"ИГРИ С ПРОГРЕСИВЕН ДЖАКПОТ","SaveSettingError":"НАСТРОЙКИТЕ НЕ МОГАТ ДА БЪДАТ ЗАПАЗЕНИ В СЪРВЪРА СЕГА И ЩЕ ВАЖАТ САМО ПО ВРЕМЕ НА ТАЗИ СЕСИЯ.","LostConnect":"ВРЪЗКАТА ВИ С НАШИЯ ИГРАЛЕН СЪРВЪР СЕ РАЗПАДНА. ИЗВИНЯВАМЕ СЕ ЗА НЕУДОБСТВОТО. ОПИТАЙТЕ ОТНОВО СЛЕД МАЛКО.","PleaseLogin":"Влезте в системата!","UnsupportedBrowserTitle":"ЗА ПО-ДОБРО ИЗЖИВЯВАНЕ В ИГРИТЕ","UseGoogleChrome":"ИЗПОЛЗВАЙТЕ GOOGLE CHROME","UseSafari":"ИЗПОЛЗВАЙТЕ SAFARI","Timeout":"Сесията Ви изтече. Рестартирайте играта.","BtOK":"ОК","Regulation":"val","BtContinuePlaying":"ПРОДЪЛЖИ ИГРАТА","BtStopPlaying":"СПРИ ИГРАТА","WindowTitle":"СЪОБЩЕНИЕ","BtRCHistory":"ИСТОРИЯ НА ИГРИТЕ","BtCLOSE":"ЗАТВОРИ","DeferredLoading":"Бонусите се зареждат","ResumingGame":"Вече има започната игра. Изчакайте възобновяването…","ClientRegulation":"Играете от {1} минути. Натиснете ПРОДЪЛЖИ, за да продължите да играете","ClientRegulationTitleUKGC":"Напомнително съобщение за UKGC","ClientRegulationTitleMalta":"Напомнително съобщение за Малта","BtContinue":"Продължи","BtQuit":"Отказване","BtAccountHistory":"История на акаунта","BtExit":"Изход"},"fi":{"Frozen":"val","ServerError":"val","NoMoney":"JOTTA VOIT TEHDÄ TÄMÄN VEDON, KÄY KASSALLA JA LISÄÄ VAROJA TILILLESI.","Techbreak":"VALITETTAVASTI OIKEALLA RAHALLA EI VOI TÄLLÄ HETKELLÄ TEHDÄ KASINON PÄIVITYSTEN TAKIA. OIKEALLA RAHALLA VOI TEHDÄ VETOJA TAAS PIAN.","GameAvailableOnlyAtRealMode":"VALITETTAVASTI TÄTÄ PELIÄ VOIVAT PELATA VAIN OIKEAA RAHAA KÄYTTÄVÄT PELAAJAT. VOIT PELATA TÄÄLLÄ, KUN OLET VAIHTANUT TILISI OIKEAA RAHAA KÄYTTÄVÄÄN TILIIN.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"PELAAMINEN MAHDOLLISTA VAIN OIKEALLA RAHALLA","ProgressiveJackpotGames":"PROGRESSIIVISET JACKPOT-PELIT","SaveSettingError":"ASETUKSIA EI VOIDA NYT TALLENTAA PALVELIMELLE. ASETUKSET VOIMASSA VAIN TÄMÄN ISTUNNON AJAN.","LostConnect":"VALITETTAVASTI YHTEYTESI PELIPALVELIMEEMME ON KATKENNUT. ODOTA HETKI JA YRITÄ UUDELLEEN.","PleaseLogin":"Ole hyvä ja kirjaudu sisään!","UnsupportedBrowserTitle":"SAADAKSESI PAREMMAN PELIKOKEMUKSEN","UseGoogleChrome":"KÄYTÄ GOOGLE CHROMEA","UseSafari":"KÄYTÄ SAFARIA","Timeout":"Istuntosi on vanhentunut. Käynnistä peli uudelleen.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"JATKA PELAAMISTA","BtStopPlaying":"LOPETA PELAAMINEN","WindowTitle":"VIESTI","BtRCHistory":"PELIHISTORIA","BtCLOSE":"SULJE","DeferredLoading":"Ladataan ominaisuuksia","ResumingGame":"Peli on jo käynnissä. Palataan…","ClientRegulation":"Olet pelannut {1} minuuttia. Jatka pelaamista painamalla JATKA","ClientRegulationTitleUKGC":"UKGC-tarkistus","ClientRegulationTitleMalta":"Maltan tarkistus","BtContinue":"Jatka","BtQuit":"Poistu","BtAccountHistory":"Tilihistoria","BtExit":"Poistu"},"sr":{"Frozen":"val","ServerError":"val","NoMoney":"DA BISTE POSTAVILI OVU OPKLADU, MORATE DA POSETITE BLAGAJNIKA I DODATE SRETSTVA NA VAŠ RAČUN","Techbreak":"IZVINITE! TRENUTNO NE MOŽEMO DA PREUZMEMO OPKLADE SA PRAVIM NOVCEM ZBOG NADOGRAĐIVANJA KAZINA. OPKLADE SA PRAVIM NOVCEM BIĆE MOGUĆE ZA NEKOLIKO TRENUTAKA","GameAvailableOnlyAtRealMode":"IZVINITE! OVA IGRA JE DOSTUPNA SAMO IGRAČIMA KOJI IMAJU RAČUN ZA PRAVI NOVAC. MOŽETE DA IGRATE OVDE ČIM PREBACITE NA IGRU ZA PRAVI NOVAC.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"MOŽE DA SE IGA SAMO SA PRAVIM NOVCEM","ProgressiveJackpotGames":"PROGRESIVNE DŽEKPOT IGRE","SaveSettingError":"PODEŠAVANJA SADA NE MOGU BITI SAČUVANA NA SERVERU I BIĆE EFEKTIVNA SAMO TOKOM OVE SESIJE","LostConnect":"NAŠA VEZA NA NAŠ SERVER IGRE JE IZGUBLJENA. IZVINJAVAMO SE ZBOG OVE NEZGODE. MOOLIMO USKORO POKUŠAJTE OPET. ","PleaseLogin":"Prijavite se!","UnsupportedBrowserTitle":"ZA BOLJE ISKUSTVO IGRANJA","UseGoogleChrome":"KORISTITE GOOGLE CHROME","UseSafari":"KORISTITE SAFARI","Timeout":"Vaša sesija je istekla. Restartujte igru.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"NASTAVITE DA IGRATE","BtStopPlaying":"PRESTANITE DA IGRATE","WindowTitle":"PORUKA","BtRCHistory":"ISTORIJA IGRE","BtCLOSE":"ZATVORI","DeferredLoading":"Pogodnosti učitavanja","ResumingGame":"Sesija igre je već u toku, nastavlja se...","ClientRegulation":"Igrali ste {1} minuta. Pritisnite dugme NASTAVI da nastavite da igrate","ClientRegulationTitleUKGC":"Provera stvarnosti – UKGC","ClientRegulationTitleMalta":"Provera stvarnosti – Malta","BtContinue":"Nastavi","BtQuit":"Izađi","BtAccountHistory":"Istorija naloga","BtExit":"Izlaz"},"tr":{"Frozen":"val","ServerError":"val","NoMoney":"BU BAHSİ OYNAMAK İÇİN KASİYERİ ZİYARET ETMELİ VE HESABINIZA PARA EKLEMELİSİNİZ","Techbreak":"ÜZGÜNÜZ! CASINO GÜNCELLEMELERİNDEN DOLAYI ŞU AN İÇİN GERÇEK PARA BAHİSLERİNİ ALAMIYORUZ. BİR SÜRE SONRA GERÇEK PARA BAHİSLERİ OYNANABİLECEK","GameAvailableOnlyAtRealMode":"ÜZGÜNÜZ! BU OYUN YALNIZCA GERÇEK PARA HESABINA SAHİP OYUNCULAR TARAFINDAN OYNANABİLİR. GERÇEK PARAYA GEÇERSENİZ BURADAN OYUNU OYNAYABİLİRSİNİZ.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"YALNIZCA GERÇEK PARA İLE OYNANIR","ProgressiveJackpotGames":"BÜYÜYEN JACKPOT OYUNLARI","SaveSettingError":"AYARLAR ARTIK SUNUCUDA SAKLANMAZ VE YALNIZCA BU OTURUM SÜRESİNCE ETKİN OLUR","LostConnect":"OYUN SUNUCUMUZLA OLAN BAĞLANTINIZ KAYBOLDU. BU SORUN İÇİN ÖZÜR DİLERİZ. LÜTFEN KISA BİR SÜRE SONRA TEKRAR DENEYİN.","PleaseLogin":"Lütfen Giriş Yapın!","UnsupportedBrowserTitle":"DAHA İYİ BİR OYUN DENEYİMİ İÇİN","UseGoogleChrome":"LÜTFEN GOOGLE CHROME KULLANIN","UseSafari":"LÜTFEN SAFARİ KULLANIN","Timeout":"Oturumunuzun süresi sona erdi. Lütfen oyunu tekrar başlatın.","BtOK":"TAMAM","Regulation":"val","BtContinuePlaying":"OYNAMAYA DEVAM ET","BtStopPlaying":"OYNAMAYI BIRAK","WindowTitle":"MESAJ","BtRCHistory":"OYUN GEÇMİŞİ","BtCLOSE":"KAPAT","DeferredLoading":"Etkinlikler Yükleniyor","ResumingGame":"Bir oyun zaten devam ediyor, oyun devam ettiriliyor…","ClientRegulation":"{1} dakikadır oyun oynuyorsunuz. Oynamaya devam etmek için DEVAM ET’e basın.","ClientRegulationTitleUKGC":"UKGC gerçeklik kontrolü","ClientRegulationTitleMalta":"Malta gerçeklik kontrolü","BtContinue":"Devam Et","BtQuit":"Çık","BtAccountHistory":"Hesap Geçmişi","BtExit":"Çıkış"},"vi":{"Frozen":"val","ServerError":"val","NoMoney":"ĐỂ ĐẶT CƯỢC NÀY, BẠN SẼ CẦN ĐẾN QUẦY THU NGÂN VÀ NẠP THÊM TIỀN VÀO TÀI KHOẢN CỦA MÌNH","Techbreak":"RẤT TIẾC! HIỆN TẠI, CHÚNG TÔI KHÔNG THỂ NHẬN ĐẶT CƯỢC TIỀN THẬT DO VIỆC  SÒNG BẠC NÂNG CẤP. CƯỢC BẰNG TIỀN THẬT SẼ SẴN CÓ TRỞ LẠI TRONG GIÂY LÁT","GameAvailableOnlyAtRealMode":"RẤT TIẾC! TRÒ CHƠI NÀY CHỈ SẴN CÓ CHO NGƯỜI CHƠI CÓ TÀI KHOẢN BẰNG TIỀN THẬT. BẠN CÓ THỂ CHƠI Ở ĐÂY SAU KHI CHUYỂN SANG CHƠI BẰNG TIỀN THẬT.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"CHỈ CÓ THỂ ĐƯỢC CHƠI BẰNG TIỀN THẬT","ProgressiveJackpotGames":"TRÒ CHƠI JACKPOT LŨY TIẾN","SaveSettingError":"THIẾT LẬP HIỆN KHÔNG THỂ ĐƯỢC LƯU TRÊN MÁY CHỦ VÀ SẼ CHỈ CÓ THẬT TRONG PHIÊN CHƠI NÀY","LostConnect":"KẾT NỐI CỦA BẠN VỚI MÁY CHỦ TRÒ CHƠI CỦA CHÚNG TÔI ĐÃ BỊ MẤT. CHÚNG TÔI RẤT XIN LỖI VỀ SỰ BẤT TIỆN NÀY. VUI LÒNG THỬ LẠI SỚM.","PleaseLogin":"Vui lòng Đăng nhập!","UnsupportedBrowserTitle":"ĐỂ CÓ TRẢI NGHIỆM TRÒ CHƠI TỐT HƠN","UseGoogleChrome":"VUI LÒNG SỬ DỤNG TRÌNH DUYỆT GOOGLE CHROME","UseSafari":"VUI LÒNG SỬ DỤNG TRÌNH DUYỆT SAFARI","Timeout":"Phiên chơi của bạn đã hết hạn. Vui lòng khởi động lại trò chơi.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"TIẾP TỤC CHƠI","BtStopPlaying":"DỪNG CHƠI","WindowTitle":"TIN NHẮN","BtRCHistory":"LỊCH SỬ TRÒ CHƠI","BtCLOSE":"ĐÓNG","DeferredLoading":"Đang tải các Tính năng","ResumingGame":"Một trò chơi hiện đang diễn ra, đang tiếp tục...","ClientRegulation":"Bạn đã chơi {1} phút. Hãy nhấn TIẾP TỤC để tiếp tục chơi","ClientRegulationTitleUKGC":"Kiểm tra Thực tế UKGC","ClientRegulationTitleMalta":"Kiểm tra Thực tế Malta","BtContinue":"Tiếp tục","BtQuit":"Thoát","BtAccountHistory":"Lịch sử Tài khoản","BtExit":"Thoát"},"zt":{"Frozen":"val","ServerError":"val","NoMoney":"如欲下注，請至付款處為帳戶加入資金","Techbreak":"抱歉！賭場升級期間，我們無法處理真錢下注。很快您便可重新以真錢下注","GameAvailableOnlyAtRealMode":"抱歉！只有擁有真錢帳戶的玩家才可參與此遊戲。一旦切換至真錢遊玩模式，即可在此加入。","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"只可支付真錢","ProgressiveJackpotGames":"累積獎金遊戲","SaveSettingError":"目前無法儲存設定至伺服器，有關設定只適用於是次遊戲","LostConnect":"您已和遊戲伺服器失去連接。造成不便，敬請見諒。請稍候重試。","PleaseLogin":"請先登入！","UnsupportedBrowserTitle":"為享最佳遊戲體驗","UseGoogleChrome":"請用 GOOGLE CHROME 瀏覽","UseSafari":"請用 SAFARI 瀏覽","Timeout":"您的使用期限已過，請重新啟動遊戲。","BtOK":"確定","Regulation":"val","BtContinuePlaying":"繼續遊戲","BtStopPlaying":"停止遊戲","WindowTitle":"訊息","BtRCHistory":"遊戲歷史記錄","BtCLOSE":"關閉","DeferredLoading":"正在載入功能","ResumingGame":"遊戲進行中，繼續…","ClientRegulation":"你已經玩了{1}分鐘。按下“繼續”繼續遊戲","ClientRegulationTitleUKGC":"UKGC現狀核實","ClientRegulationTitleMalta":"馬爾他現狀核實","BtContinue":"繼續","BtQuit":"放棄","BtAccountHistory":"帳戶歷史","BtExit":"退出"},"el":{"Frozen":"val","ServerError":"val","NoMoney":"ΓΙΑ ΝΑ ΠΡΑΓΜΑΤΟΠΟΙΗΣΕΤΕ ΑΥΤΟ ΤΟ ΣΤΟΙΧΗΜΑ, ΘΑ ΠΡΕΠΕΙ ΝΑ ΕΠΙΣΚΕΦΘΕΙΤΕ ΤΟ ΤΑΜΕΙΟ ΚΑΙ ΝΑ ΠΡΟΣΘΕΣΕΤΕ ΚΕΦΑΛΑΙΑ ΣΤΟΝ ΛΟΓΑΡΙΑΣΜΟ ΣΑΣ.","Techbreak":"ΛΥΠΟΥΜΑΣΤΕ! ΓΙΑ ΤΗΝ ΩΡΑ ΔΕΝ ΜΠΟΡΟΥΜΕ ΝΑ ΔΕΧΘΟΥΜΕ ΣΤΟΙΧΗΜΑΤΑ ΜΕ ΠΡΑΓΜΑΤΙΚΑ ΧΡΗΜΑΤΑ ΛΟΓΩ ΑΝΑΒΑΘΜΙΣΕΩΝ ΣΤΟ ΚΑΖΙΝΟ. ΤΑ ΣΤΟΙΧΗΜΑΤΑ ΜΕ ΠΡΑΓΜΑΤΙΚΑ ΧΡΗΜΑΤΑ ΘΑ ΕΙΝΑΙ ΔΙΑΘΕΣΙΜΑ ΞΑΝΑ ΣΕ ΛΙΓΗ ΩΡΑ.","GameAvailableOnlyAtRealMode":"ΛΥΠΟΥΜΑΣΤΕ! ΤΟ ΠΑΙΧΝΙΔΙ ΑΥΤΟ ΕΙΝΑΙ ΔΙΑΘΕΣΙΜΟ ΜΟΝΟ ΣΕ ΠΑΙΚΤΕΣ ΜΕ ΛΟΓΑΡΙΑΣΜΟΥΣ ΠΡΑΓΜΑΤΙΚΩΝ ΧΡΗΜΑΤΩΝ. ΜΠΟΡΕΙΤΕ ΝΑ ΠΑΙΞΕΤΕ ΕΔΩ ΜΟΛΙΣ ΑΛΛΑΞΕΤΕ ΣΕ ΠΑΙΧΝΙΔΙ ΠΡΑΓΜΑΤΙΚΩΝ ΧΡΗΜΑΤΩΝ.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"ΜΠΟΡΕΙ ΝΑ ΠΑΙΧΤΕΙ ΜΟΝΟ ΜΕ ΠΡΑΓΜΑΤΙΚΑ ΧΡΗΜΑΤΑ","ProgressiveJackpotGames":"ΠΑΙΧΝΙΔΙΑ ΠΡΟΟΔΕΥΤΙΚΟΥ ΤΖΑΚΠΟΤ","SaveSettingError":"ΟΙ ΡΥΘΜΙΣΕΙΣ ΔΕΝ ΜΠΟΡΟΥΝ ΝΑ ΑΠΟΘΗΚΕΥΤΟΥΝ ΑΥΤΗ ΤΗ ΣΤΙΓΜΗ ΣΤΟΝ ΔΙΑΚΟΜΙΣΤΗ ΚΑΙ ΘΑ ΕΙΝΑΙ ΥΠΑΡΚΤΕΣ ΜΟΝΟ ΚΑΤΑ ΤΗ ΔΙΑΡΚΕΙΑ ΤΗΣ ΣΥΓΚΕΚΡΙΜΕΝΗΣ ΣΥΝΔΕΣΗΣ","LostConnect":"Η ΣΥΝΔΕΣΗ ΣΑΣ ΣΤΟΝ ΔΙΑΚΟΜΙΣΤΗ ΠΑΙΧΝΙΔΩΝ ΜΑΣ ΕΧΕΙ ΧΑΘΕΙ. ΖΗΤΟΥΜΕ ΣΥΓΝΩΜΗ ΓΙΑ ΤΗΝ ΑΝΑΣΤΑΤΩΣΗ ΑΥΤΗ. ΞΑΝΑΠΡΟΣΠΑΘΗΣΤΕ ΣΥΝΤΟΜΑ.","PleaseLogin":"Συνδεθείτε","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Η σύνδεσή σας έχει λήξει. Επανεκκινήστε το παιχνίδι.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"ΣΥΝΕΧΙΣΗ ΠΑΙΧΝΙΔΙΟΥ","BtStopPlaying":"ΔΙΑΚΟΠΗ ΠΑΙΧΝΙΔΙΟΥ","WindowTitle":"ΜΗΝΥΜΑ","BtRCHistory":"ΙΣΤΟΡΙΚΟ ΠΑΙΧΝΙΔΙΟΥ","BtCLOSE":"ΚΛΕΙΣΙΜΟ","DeferredLoading":"Φόρτωση λειτουργιών","ResumingGame":"Ένα παιχνίδι βρίσκεται ήδη σε εξέλιξη, συνέχιση...","ClientRegulation":"Παίζετε {1} λεπτά. Πατήστε ΣΥΝΕΧΕΙΑ για να συνεχίσετε να παίζετε","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Συνέχεια","BtQuit":"Τερματισμός","BtAccountHistory":"Ιστορικό λογαριασμού","BtExit":"Έξοδος"},"cs":{"Frozen":"val","ServerError":"val","NoMoney":"CHCETE-LI VSADIT, BUDETE MUSET NAVŠTÍVIT POKLADNU A PŘIDAT PROSTŘEDKY NA ÚČET","Techbreak":"PROMIŇTE! MOMENTÁLNĚ NEMŮŽEME PŘIJÍMAT SÁZKY ZA SKUTEČNÉ PENÍZE Z DŮVODU VYLEPŠOVÁNÍ KASINA. SÁZKY ZA SKUTEČNÉ PENÍZE BUDOU BĚHEM CHVÍLE ZNOVU DOSTUPNÉ","GameAvailableOnlyAtRealMode":"PROMIŇTE! TATO HRA JE K DISPOZICI POUZE HRÁČŮM S ÚČTY SE SKUTEČNÝMI PENĚZI. MŮŽETE ZDE HRÁT, POKUD PŘEPNETE NA HRANÍ ZA SKUTEČNÉ PENÍZE","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"LZE HRÁT POUZE ZA SKUTEČNÉ PENÍZE","ProgressiveJackpotGames":"HRY S PROGRESIVNÍM JACKPOTEM","SaveSettingError":"NASTAVENÍ NELZE NYNÍ ULOŽIT NA SERVERU A BUDE PLATNÉ POUZE V TÉTO RELACI","LostConnect":"VAŠE PŘIPOJENÍ K NAŠEMU HERNÍMU SERVERU BYLO ZTRACENO. OMLOUVÁME SE ZA NEPŘÍJEMNOST. ZKUSTE TO PROSÍM ZA CHVÍLI.","PleaseLogin":"Přihlašte se, prosím","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Vaše relace vypršela. Prosím restartujte hru.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"POKRAČOVAT V HRANÍ","BtStopPlaying":"PŘESTAT HRÁT","WindowTitle":"ZPRÁVA","BtRCHistory":"HISTORIE HRY","BtCLOSE":"ZAVŘÍT","DeferredLoading":"Načítání funkcí","ResumingGame":"Hra již probíhá, obnovuji…","ClientRegulation":"Hrajete {1} minut. Chcete-li pokračovat v hraní, stiskněte POKRAČOVAT","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Pokračovat","BtQuit":"Odejít","BtAccountHistory":"Historie účtu","BtExit":"Odejít"},"hr":{"Frozen":"val","ServerError":"val","NoMoney":"DA BISTE STAVILI OVAJ ULOG, MORATE POSJETITI BLAGAJNIKA I DODATI SREDSTVA SVOM RAČUNU","Techbreak":"ŽAO NAM JE! TRENUTAČNO NE MOŽEMO PRIHVATITI ULOGE U PRAVOM NOVCU JER SE CASINO NADOGRAĐUJE. ULOZI U PRAVOM NOVCU USKORO ĆE BITI PONOVNO DOSTUPNI.","GameAvailableOnlyAtRealMode":"ŽAO NAM JE! OVA JE IGRA DOSTUPNA SAMO IGRAČIMA S RAČUNIMA U PRAVOM NOVCU. MOŽETE JE IGRATI KADA SE PREBACITE NA IGRU S PRAVIM NOVCEM.","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"MOŽE SE IGRATI SAMO S PRAVIM NOVCEM","ProgressiveJackpotGames":"IGRE S PROGRESIVNIM JACKPOTOM","SaveSettingError":"SADA NIJE MOGUĆE SPREMITI POSTAVKE NA POSLUŽITELJU, ALI BIT ĆE AŽURIRANE TIJEKOM SESIJE","LostConnect":"IZGUBLJENA JE VEZA S NAŠIM POSLUŽITELJEM ZA IGRU. ISPRIČAVAMO SE ZBOG SMETNJE. POKUŠAJTE PONOVNO USKORO.","PleaseLogin":"Prijavite se","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Vaša je sesija istekla. Ponovno pokrenite igru.","BtOK":"U REDU","Regulation":"val","BtContinuePlaying":"NASTAVAK IGRE","BtStopPlaying":"PRESTANAK IGRE","WindowTitle":"PORUKA","BtRCHistory":"POVIJEST IGRE","BtCLOSE":"ZATVORI","DeferredLoading":"Učitavanje značajki","ResumingGame":"Igra već traje, nastavljam...","ClientRegulation":"Igrate već {1} minuta. Pritisnite NASTAVI ako želite još igrati","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Nastavi","BtQuit":"Završi","BtAccountHistory":"Povijest računa","BtExit":"Izađi"},"hu":{"Frozen":"val","ServerError":"val","NoMoney":"ENNEK A TÉTNEK A MEGTÉTELÉHEZ EL KELL LÁTOGATNIA A KASSZA OLDALRA ÉS PÉNZT KELL BEFIZETNIE A SZÁMLÁJÁRA.","Techbreak":"SAJNÁLJUK! JELENLEG NEM FOGADHATUNK EL VALÓS PÉNZÖSSZEGŰ TÉTEKET A KASZINÓ FEJLESZTÉSE MIATT. VALÓS PÉNZÖSSZEGŰ TÉTEK PÁR PILLANAT MÚLVA ÚJBÓL ELÉRHETŐVÉ VÁLNAK.","GameAvailableOnlyAtRealMode":"SAJNÁLJUK! EZ A JÁTÉK KIZÁRÓLAG VALÓS PÉNZBEFIZETÉSSEL RENDELKEZŐ FIÓKOK JÁTÉKOSAI SZÁMÁRA ÉRHETŐ EL. ÖN IS JÁTSZHAT, AMINT ÁTVÁLT VALÓS PÉNZÖSSZEGŰ JÁTÉKMÓDRA","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"CSAK VALÓS PÉNZZEL JÁTSZHATÓ","ProgressiveJackpotGames":"PROGRESSZÍV JACKPOT JÁTÉKOK","SaveSettingError":"JELENLEG NEM LEHETSÉGES A BEÁLLÍTÁSOK SZERVEROLDALI MENTÉSE, ÉS CSAK A JELENLEGI JÁTÉKMENETRE LESZNEK ÉRVÉNYESEK","LostConnect":"A KAPCSOLAT A JÁTÉKSZERVERÜNKKEL MEGSZAKADT. ELNÉZÉST KÉRÜNK A KELLEMETLENSÉGÉRT. KÉRJÜK, NEMSOKÁRA PRÓBÁLJA MEG ÚJBÓL!","PleaseLogin":"Kérjük, jelentkezzen be","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Az ön játékmenete lejárt. Kérjük, indítsa újra a játékot!","BtOK":"U REDU","Regulation":"val","BtContinuePlaying":"JÁTÉK FOLYTATÁSA","BtStopPlaying":"JÁTÉK ABBAHAGYÁSA","WindowTitle":"ÜZENET","BtRCHistory":"JÁTÉKNAPLÓ","BtCLOSE":"BEZÁRÁS","DeferredLoading":"Játékmódok betöltése folyamatban","ResumingGame":"Egy játék már el lett indítva, visszatérés...","ClientRegulation":"Ön már {1} perce játszik. Nyomja meg a FOLYTATÁS gombot a játék folytatásához","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Folytatás","BtQuit":"Kilépés","BtAccountHistory":"Fióknapló","BtExit":"Kilépés"},"lt":{"Frozen":"val","ServerError":"val","NoMoney":"NORĖDAMI STATYTI, TURĖSITE APSILANKYTI PAS KASININKĄ IR PRIDĖTI LĖŠŲ PRIE SAVO SĄSKAITOS","Techbreak":"ATSIPRAŠOME! ŠIUO METU NEGALIMA PRIIMTI STATYMŲ IŠ TIKRŲ PINIGŲ DĖL KAZINO NAUJINIMŲ. STATYMAI IŠ TIKRŲ PINIGŲ NETRUKUS VĖL BUS GALIMI","GameAvailableOnlyAtRealMode":"ATSIPRAŠOME! ŠIS ŽAIDIMAS GALIMAS TIK ŽAIDĖJAMS SU TIKRŲ PINIGŲ SĄSKAITOMIS. GALĖSITE JĮ ŽAISTI, KAI PERJUNGSITE ŽAIDIMĄ Į TIKRŲ PINIGŲ REŽIMĄ","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"GALIMA ŽAISTI TIK IŠ TIKRŲ PINIGŲ","ProgressiveJackpotGames":"PROGRESYVAUS DIDŽIOJO PRIZO ŽAIDIMAI","SaveSettingError":"NUSTATYMAI DABAR NEGALI BŪTI IŠSAUGOTI SERVERYJE IR BUS GALIMI TIK ŠIOS SESIJOS METU","LostConnect":"RYŠYS SU MŪSŲ ŽAIDIMO SERVERIO PRARASTAS. ATSIPRAŠOME DĖL NEPATOGUMŲ. BANDYKITE DAR KARTĄ VĖLIAU.","PleaseLogin":"Prisijunkite","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Sesija baigėsi. Paleiskite žaidimą iš naujo.","BtOK":"GERAI","Regulation":"val","BtContinuePlaying":"TĘSTI ŽAIDIMĄ","BtStopPlaying":"NUTRAUKTI ŽAIDIMĄ","WindowTitle":"PRANEŠIMAS","BtRCHistory":"ŽAIDIMO ISTORIJA","BtCLOSE":"UŽDARYTI","DeferredLoading":"Įkeliamos funkcijos","ResumingGame":"Žaidimas jau vyksta, tęsiama...","ClientRegulation":"Žaidžiate {1} min. Spauskite TĘSTI, kad tęstumėte žaidimą","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Tęsti","BtQuit":"Atsijungti","BtAccountHistory":"Sąskaitos istorija","BtExit":"Išeiti"},"lv":{"Frozen":"val","ServerError":"val","NoMoney":"LAI VEIKTU ŠO LIKMI, TEV IR JĀAPMEKLĒ KASIERIS UN JĀPAPILDINA SAVS KONTS","Techbreak":"ATVAINOJAMIES! PAŠLAIK NESPĒJAM PIEŅEMT ĪSTAS NAUDAS LIKMES, JO NOTIEK KAZINO UZLABOŠANAS DARBI. ĪSTAS NAUDAS LIKMES BŪS PIEEJAMAS PĒC BRĪŽA","GameAvailableOnlyAtRealMode":"ATVAINOJAMIES! ŠĪ SPĒLE IR PIEEJAMA TIKAI SPĒLĒTĀJIEM AR ĪSTAS NAUDAS KONTIEM. TU VARĒSI SPĒLĒT ŠEIT, KAD PĀRIESI UZ ĪSTAS NAUDAS KONTU","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"VAR SPĒLĒT TIKAI UZ ĪSTU NAUDU","ProgressiveJackpotGames":"PROGRESĪVĀ DŽEKPOTA SPĒLES","SaveSettingError":"PAŠLAIK NAV IESPĒJAMS SERVERĪ SAGLABĀT IESTATĪJUMUS UN TIE DARBOSIES TIKAI ŠĪS SESIJAS LAIKĀ","LostConnect":"PĀRTRAUKTS SAVIENOJUMS AR SPĒLES SERVERI. MĒS ATVAINOJAMIES PAR SAGĀDĀTAJĀM NEĒRTĪBĀM. LŪDZU, MĒĢINI VĒLREIZ.","PleaseLogin":"Lūdzu, pieraksties","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Tava sesija ir beigusies. Lūdzu, restartē spēli.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"TURPINĀT SPĒLĒT","BtStopPlaying":"PĀRTRAUKT SPĒLĒT","WindowTitle":"ZIŅOJUMS","BtRCHistory":"SPĒLES VĒSTURE","BtCLOSE":"AIZVĒRT","DeferredLoading":"Ielādē Papildspēles","ResumingGame":"Spēle jau notiek, atsākam…","ClientRegulation":"Tu spēlē jau {1} minūtes. Spied TURPINĀT, lai turpinātu spēlēt","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Turpināt","BtQuit":"Iziet","BtAccountHistory":"Konta vēsture","BtExit":"Iziet"},"ms":{"Frozen":"val","ServerError":"val","NoMoney":"UNTUK MEMBUAT TARUHAN INI, ANDA PERLU MENGUNJUNGI JURUWANG DAN MENAMBAH DANA KE AKAUN ANDA","Techbreak":"MAAF! BUAT MASA INI KAMI TIDAK DAPAT MENERIMA TARUHAN WANG SEBENAR DIBSEBABKAN NAIK TARAF KASINO. TARUHAN WANG SEBENAR AKAN TERSEDIA SEBENTAR LAGI","GameAvailableOnlyAtRealMode":"MAAF! PERMAINAN INI HANYA TERSEDIA KEPADA PEMAIN DENGAN AKAUN WANG SEBENAR. ANDA BOLEH BERMAIN DI SINI SETELAH BERALIH KE PERMAINAN WANG SEBENAR","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"BOLEH DIMAINKAN DENGAN WANG SEBENAR SAHAJA","ProgressiveJackpotGames":"PERMAINAN JACKPOT PROGRESIF","SaveSettingError":"TETAPAN TIDAK BOLEH DISIMPAN SEKARANG PADA PELAYAN DAN AKAN DIGUNAKAN HANYA SEMASA SESI INI","LostConnect":"SAMBUNGAN KE PELAYAN PERMAINAN KAMI TELAH TERPUTUS. KAMI MOHON MAAF UNTUK SEGALA KESULITAN. SILA CUBA LAGI KEMUDIAN.","PleaseLogin":"Sila log masuk","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Sesi anda telah tamat. Sila mula semula permainan.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"TERUSKAN BERMAIN","BtStopPlaying":"HENTI BERMAIN","WindowTitle":"ZIŅOJUMS","BtRCHistory":"SEJARAH PERMAINAN","BtCLOSE":"TUTUP","DeferredLoading":"Memuat Ciri","ResumingGame":"Permainan dalam proses, meneruskan...","ClientRegulation":"Anda telah bermain selama {1} minit. Tekan TERUSKAN untuk bermain","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Teruskan","BtQuit":"Tinggalkan","BtAccountHistory":"Sejarah Akaun","BtExit":"Keluar"},"nl":{"Frozen":"val","ServerError":"val","NoMoney":"OM DEZE INZET TE PLAATSEN, GA NAAR DE KASSIER EN VOEG FONDSEN AAN UW ACCOUNT TOE","Techbreak":"SORRY! WE KUNNEN MOMENTEEL GEEN ECHTE GELDINZETTEN AANNEMEN OMWILLE VAN EEN CASINO-UPGRADE. ECHTE GELDINZETTEN ZULLEN WELDRA OPNIEUW MOGELIJK IN","GameAvailableOnlyAtRealMode":"SORRY! DEZE GAME IS ALLEEN BESCHIKBAAR VOOR SPELERS MET ECHTE GELDACCOUNTS. U KUNT HIER SPELEN WANNEER U NAAR SPELEN MET ECHT GELD SCHAKELT","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"KAN ALLEEN MET ECHT GELD WORDEN GESPEELD","ProgressiveJackpotGames":"PROGRESSIEVE JACKPOTGAMES","SaveSettingError":"DE INSTELLINGEN KUNNEN MOMENTEEL NIET OP DE SERVER WORDEN OPGESLAGEN EN ZULLEN ALLEEN TIJDENS DEZE SESSIE ACTUEEL ZIJN","LostConnect":"UW VERBINDING MET DE GAMESERVER IS VERBROKEN. EXCUSES VOOR HET ONGEMAK. PROBEER HET LATER OPNIEUW.","PleaseLogin":"Meld u aan","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Uw sessie is verstreken. Start het spel opnieuw op.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"SPEEL VERDER","BtStopPlaying":"STOP MET SPELEN","WindowTitle":"BERICHT","BtRCHistory":"GAMEGESCHIEDENIS","BtCLOSE":"SLUITEN","DeferredLoading":"Bezig met laden van features","ResumingGame":"Een game is reeds bezig, hervatten…","ClientRegulation":"U hebt {1} minuten gespeeld. Druk op DOORGAAN om te blijven spelen","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Doorgaan","BtQuit":"Verlaten","BtAccountHistory":"Accountgeschiedenis","BtExit":"Afsluiten"},"sk":{"Frozen":"val","ServerError":"val","NoMoney":"AK SI CHCETE VSADIŤ, BUDETE MUSIEŤ NAVŠTÍVIŤ POKLADŇU A PRIDAŤ PROSTRIEDKY NA ÚČET","Techbreak":"PREPÁČTE! MOMENTÁLNE NEMÔŽEME PRIJÍMAŤ STÁVKY SO SKUTOČNÝMI PENIAZMI KVÔLI AKTUALIZÁCIÁM","GameAvailableOnlyAtRealMode":"PREPÁČTE! TÁTO HRA JE DOSTUPNÁ IBA HRÁČOM S ÚČTAMI SO SKUTOČNÝMI PENIAZMI. TU MÔŽETE HRAŤ AŽ KEĎ PREJDETE NA HRU SO SKUTOČNÝMI PENIAZMI","ProgressiveJackpotGamesAvailableOnlyAtRealMode":"MÔŽE BYŤ HRANÁ LEN SO SKUTOČNÝMI PENIAZMI","ProgressiveJackpotGames":"HRY S PROGRESÍVNYM JACKPOTOM","SaveSettingError":"NASTAVENIA TERAZ NIE JE MOŽNÉ ULOŽIŤ NA SERVERI A BUDÚ PLATNÉ IBA POČAS TEJTO RELÁCIE","LostConnect":"VAŠE PRIPOJENIE K NÁŠMU HRACIEMU SERVERU SA STRATILO. OSPRAVEDLŇUJEME SA ZA TÚTO NEPRÍJEMNOSŤ. PROSÍM, SKÚSTE TO ZNOVU O CHVÍĽU.","PleaseLogin":"Prosím, prihláste sa","UnsupportedBrowserTitle":"FOR A BETTER GAMING EXPERIENCE","UseGoogleChrome":"PLEASE USE GOOGLE CHROME","UseSafari":"PLEASE USE SAFARI","Timeout":"Vaša relácia vypršala. Prosím, reštartujte hru.","BtOK":"OK","Regulation":"val","BtContinuePlaying":"POKRAČOVAŤ V HRE","BtStopPlaying":"ZASTAVIŤ HRU","WindowTitle":"SPRÁVA","BtRCHistory":"HISTÓRIA HRY","BtCLOSE":"ZAVRIEŤ","DeferredLoading":"Načítavanie funkcií","ResumingGame":"Hra už prebieha, obnovujem...","ClientRegulation":"Hrali ste {1} minút. Stlačte POKRAČOVAŤ, aby ste mohli pokračovať v hre","ClientRegulationTitleUKGC":"UKGC Reality Check","ClientRegulationTitleMalta":"Malta Reality Check","BtContinue":"Pokračovať","BtQuit":"Ukončiť","BtAccountHistory":"História účtu","BtExit":"Odísť"}}');
UHT_PACKAGES_INFO = UHTReplace('{"default_sound_suffix":"","languages":[{"language":"de","bundles":[{"name":"de"},{"name":"de_GUI"}]},{"language":"es","bundles":[{"name":"es"},{"name":"es_GUI"}]},{"language":"fr","bundles":[{"name":"fr"},{"name":"fr_GUI"}]},{"language":"it","bundles":[{"name":"it"},{"name":"it_GUI"}]},{"language":"ko","bundles":[{"name":"ko"},{"name":"ko_GUI"}]},{"language":"ru","bundles":[{"name":"ru"},{"name":"ru_GUI"}]},{"language":"zh","bundles":[{"name":"zh"},{"name":"zh_GUI"}]},{"language":"th","bundles":[{"name":"th"},{"name":"th_GUI"}]},{"language":"vi","bundles":[{"name":"vi"},{"name":"vi_GUI"}]},{"language":"ja","bundles":[{"name":"ja"},{"name":"ja_GUI"}]},{"language":"sv","bundles":[{"name":"sv"},{"name":"sv_GUI"}]},{"language":"no","bundles":[{"name":"no"},{"name":"no_GUI"}]},{"language":"fi","bundles":[{"name":"fi"},{"name":"fi_GUI"}]},{"language":"ro","bundles":[{"name":"ro"},{"name":"ro_GUI"}]},{"language":"tr","bundles":[{"name":"tr"},{"name":"tr_GUI"}]},{"language":"da","bundles":[{"name":"da"},{"name":"da_GUI"}]},{"language":"id","bundles":[{"name":"id"},{"name":"id_GUI"}]},{"language":"zt","bundles":[{"name":"zt"},{"name":"zt_GUI"}]}]}');
UHT_CURRENCY_PATCH = UHTReplace('{"resources" :[{"type":"GameObject","id":"ecd1e7e1778394748a84b1472ab50050","data" :{"root" :[{"name":"CurrencyPatch","activeSelf":true,"layer":0,"components" :[{"componentType":"Transform","enabled":true,"serializableData" :{"parent" :{"fileID":0},"children" :[],"psr":"d"},"fileID":8803},{"componentType":"CurrencyPatch","enabled":true,"serializableData" :{"currencyFile" :{"fileID":4900000,"guid":"61afabc2c5e9bdf4dbdba4e9852d9925"},"languageFormatFile" :{"fileID":4900000,"guid":"b17094392538cf94a942f32b14d7794a"},"currencyName":"USD","languageName":"en","fonts" :[],"revisionNumber":0,"useTheForce":false},"fileID":8804}],"fileID":8805}]}},{"type":"TextAsset","id":"61afabc2c5e9bdf4dbdba4e9852d9925","data" :{"text":{"USDsym":"$","ZARsym":"R","AUDsym":"$","CADsym":"C$","EEKsym":"kr","MDLsym":"MDL","EURsym":"€","GBPsym":"£","SGDsym":"$","THBsym":"฿","VNDsym":"₫","JPYsym":"¥","RUBsym":"₽","CNYsym":"¥","KRWsym":"₩","PHPsym":"₱","MYRsym":"RM","IDRsym":"Rp","IDNsym":"IDN","GNRsym":"","TRYsym":"₺","NOKsym":"kr","SEKsym":"kr","DKKsym":"kr","HKDsym":"$","SGDsym":"$","COPsym":"","UAHsym":"₴"}}},{"type":"TextAsset","id":"b17094392538cf94a942f32b14d7794a","data" :{"text":{"bg_dsep":",","bg_dnum":"2","bg_gsep":" ","bg_gnum":"3","bg_symp":"0","en_dsep":".","en_dnum":"2","en_gsep":",","en_gnum":"3","en_symp":"0","cs_dsep":",","cs_dnum":"2","cs_gsep":" ","cs_gnum":"3","cs_symp":"1","da_dsep":",","da_dnum":"2","da_gsep":".","da_gnum":"3","da_symp":"0","de_dsep":",","de_dnum":"2","de_gsep":".","de_gnum":"3","de_symp":"0","el_dsep":".","el_dnum":"2","el_gsep":",","el_gnum":"3","el_symp":"0","es_dsep":",","es_dnum":"2","es_gsep":".","es_gnum":"3","es_symp":"3","es_COP_dsep":"","es_COP_dnum":"0","es_COP_gsep":".","es_COP_gnum":"3","es_COP_symp":"0","es-419_dsep":".","es-419_dnum":"2","es-419_gsep":",","es-419_gnum":"3","es-419_symp":"0","es-419_COP_dsep":"","es-419_COP_dnum":"0","es-419_COP_gsep":".","es-419_COP_gnum":"3","es-419_COP_symp":"0","et_dsep":".","et_dnum":"2","et_gsep":",","et_gnum":"3","et_symp":"0","fi_dsep":".","fi_dnum":"2","fi_gsep":",","fi_gnum":"3","fi_symp":"3","fr_dsep":",","fr_dnum":"2","fr_gsep":" ","fr_gnum":"3","fr_symp":"3","it_dsep":",","it_dnum":"2","it_gsep":".","it_gnum":"3","it_symp":"0","ja_dsep":".","ja_dnum":"2","ja_gsep":",","ja_gnum":"3","ja_symp":"0","ko_dsep":".","ko_dnum":"2","ko_gsep":",","ko_gnum":"3","ko_symp":"0","nl_dsep":",","nl_dnum":"2","nl_gsep":".","nl_gnum":"3","nl_symp":"0","no_dsep":",","no_dnum":"2","no_gsep":" ","no_gnum":"3","no_symp":"0","pl_dsep":",","pl_dnum":"2","pl_gsep":" ","pl_gnum":"3","pl_symp":"0","pt_dsep":",","pt_dnum":"2","pt_gsep":".","pt_gnum":"3","pt_symp":"0","pt-BR_dsep":".","pt-BR_dnum":"2","pt-BR_gsep":",","pt-BR_gnum":"3","pt-BR_symp":"0","ro_dsep":",","ro_dnum":"2","ro_gsep":".","ro_gnum":"3","ro_symp":"1","ru_dsep":",","ru_dnum":"2","ru_gsep":" ","ru_gnum":"3","ru_symp":"0","sk_dsep":",","sk_dnum":"2","sk_gsep":".","sk_gnum":"3","sk_symp":"1","sv_dsep":",","sv_dnum":"2","sv_gsep":" ","sv_gnum":"3","sv_symp":"0","th_dsep":".","th_dnum":"2","th_gsep":",","th_gnum":"3","th_symp":"0","vi_dsep":",","vi_dnum":"2","vi_gsep":".","vi_gnum":"3","vi_symp":"3","zh_dsep":".","zh_dnum":"2","zh_gsep":",","zh_gnum":"3","zh_symp":"0","zh-CN_dsep":".","zh-CN_dnum":"2","zh-CN_gsep":",","zh-CN_gnum":"3","zh-CN_symp":"4","zh-TW_dsep":".","zh-TW_dnum":"2","zh-TW_gsep":",","zh-TW_gnum":"3","zh-TW_symp":"4"}}}]}');
UHT_CONFIG.SYMBOL = 'vs25jokerking';
var u = UHT_REVISION.common.split('');
UHT_REVISION.uncommon = '';
for (var i = 0; u.length > i; i++) UHT_REVISION.uncommon += 9 - u[i] | 0;
UHT_REVISION.uncommon = (0 | UHT_REVISION.uncommon).toString(16);
UHTVarsInjected();