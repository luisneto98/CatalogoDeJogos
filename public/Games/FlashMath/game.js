
var Module;
if (typeof Module === 'undefined') Module = eval('(function() { try { return Module || {} } catch(e) { return {} } })()');

if (!Module.expectedDataFileDownloads) {
  Module.expectedDataFileDownloads = 0;
  Module.finishedDataFileDownloads = 0;
}
Module.expectedDataFileDownloads++;
(function() {
 var loadPackage = function(metadata) {

    var PACKAGE_PATH;
    if (typeof window === 'object') {
      PACKAGE_PATH = window['encodeURIComponent'](window.location.pathname.toString().substring(0, window.location.pathname.toString().lastIndexOf('/')) + '/');
    } else if (typeof location !== 'undefined') {
      // worker
      PACKAGE_PATH = encodeURIComponent(location.pathname.toString().substring(0, location.pathname.toString().lastIndexOf('/')) + '/');
    } else {
      throw 'using preloaded data can only be done on a web page or in a web worker';
    }
console.log(gameUrl);
    Module["memoryInitializerPrefixURL"] = loveUrl;
    PACKAGE_PATH = encodeURIComponent(gameUrl);
    var PACKAGE_NAME = 'game.data';
    var REMOTE_PACKAGE_BASE = (gameUrl)+'game.data';
    if (typeof Module['locateFilePackage'] === 'function' && !Module['locateFile']) {
      Module['locateFile'] = Module['locateFilePackage'];
      Module.printErr('warning: you defined Module.locateFilePackage, that has been renamed to Module.locateFile (using your locateFilePackage for now)');
    }
    console.log(PACKAGE_PATH);
    var REMOTE_PACKAGE_NAME = typeof Module['locateFile'] === 'function' ?
                              Module['locateFile'](REMOTE_PACKAGE_BASE) :
                              ((Module['filePackagePrefixURL'] || '') + REMOTE_PACKAGE_BASE);
  
    var REMOTE_PACKAGE_SIZE = metadata.remote_package_size;
    var PACKAGE_UUID = metadata.package_uuid;
  
    function fetchRemotePackage(packageName, packageSize, callback, errback) {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', packageName, true);
      xhr.responseType = 'arraybuffer';
      xhr.onprogress = function(event) {
        var url = packageName;
        var size = packageSize;
        if (event.total) size = event.total;
        if (event.loaded) {
          if (!xhr.addedTotal) {
            xhr.addedTotal = true;
            if (!Module.dataFileDownloads) Module.dataFileDownloads = {};
            Module.dataFileDownloads[url] = {
              loaded: event.loaded,
              total: size
            };
          } else {
            Module.dataFileDownloads[url].loaded = event.loaded;
          }
          var total = 0;
          var loaded = 0;
          var num = 0;
          for (var download in Module.dataFileDownloads) {
          var data = Module.dataFileDownloads[download];
            total += data.total;
            loaded += data.loaded;
            num++;
          }
          total = Math.ceil(total * Module.expectedDataFileDownloads/num);
          if (Module['setStatus']) Module['setStatus']('Downloading data... (' + loaded + '/' + total + ')');
        } else if (!Module.dataFileDownloads) {
          if (Module['setStatus']) Module['setStatus']('Downloading data...');
        }
      };
      xhr.onload = function(event) {
        var packageData = xhr.response;
        callback(packageData);
      };
      xhr.send(null);
    };

    function handleError(error) {
      console.error('package error:', error);
    };
  
      var fetched = null, fetchedCallback = null;
      fetchRemotePackage(REMOTE_PACKAGE_NAME, REMOTE_PACKAGE_SIZE, function(data) {
        if (fetchedCallback) {
          fetchedCallback(data);
          fetchedCallback = null;
        } else {
          fetched = data;
        }
      }, handleError);

  function runWithFS() {

    function assert(check, msg) {
      if (!check) throw msg + new Error().stack;
    }

Module['FS_createPath']('/', 'menus', true, true);
Module['FS_createPath']('/', 'images', true, true);
Module['FS_createPath']('/', 'functions', true, true);
Module['FS_createPath']('/functions', 'suit', true, true);
Module['FS_createPath']('/functions/suit', 'docs', true, true);
Module['FS_createPath']('/functions/suit/docs', '_static', true, true);
Module['FS_createPath']('/', 'fonts', true, true);
Module['FS_createPath']('/', 'game_modes', true, true);

    function DataRequest(start, end, crunched, audio) {
      this.start = start;
      this.end = end;
      this.crunched = crunched;
      this.audio = audio;
    }
    DataRequest.prototype = {
      requests: {},
      open: function(mode, name) {
        this.name = name;
        this.requests[name] = this;
        Module['addRunDependency']('fp ' + this.name);
      },
      send: function() {},
      onload: function() {
        var byteArray = this.byteArray.subarray(this.start, this.end);

          this.finish(byteArray);

      },
      finish: function(byteArray) {
        var that = this;

        Module['FS_createDataFile'](this.name, null, byteArray, true, true, true); // canOwn this data in the filesystem, it is a slide into the heap that will never change
        Module['removeRunDependency']('fp ' + that.name);

        this.requests[this.name] = null;
      },
    };

        var files = metadata.files;
        for (i = 0; i < files.length; ++i) {
          new DataRequest(files[i].start, files[i].end, files[i].crunched, files[i].audio).open('GET', files[i].filename);
        }

  
    function processPackageData(arrayBuffer) {
      Module.finishedDataFileDownloads++;
      assert(arrayBuffer, 'Loading data file failed.');
      assert(arrayBuffer instanceof ArrayBuffer, 'bad input to processPackageData');
      var byteArray = new Uint8Array(arrayBuffer);
      var curr;
      
        // copy the entire loaded file into a spot in the heap. Files will refer to slices in that. They cannot be freed though
        // (we may be allocating before malloc is ready, during startup).
        if (Module['SPLIT_MEMORY']) Module.printErr('warning: you should run the file packager with --no-heap-copy when SPLIT_MEMORY is used, otherwise copying into the heap may fail due to the splitting');
        var ptr = Module['getMemory'](byteArray.length);
        Module['HEAPU8'].set(byteArray, ptr);
        DataRequest.prototype.byteArray = Module['HEAPU8'].subarray(ptr, ptr+byteArray.length);
  
          var files = metadata.files;
          for (i = 0; i < files.length; ++i) {
            DataRequest.prototype.requests[files[i].filename].onload();
          }
              Module['removeRunDependency']('datafile_game.data');

    };
    Module['addRunDependency']('datafile_game.data');
  
    if (!Module.preloadResults) Module.preloadResults = {};
  
      Module.preloadResults[PACKAGE_NAME] = {fromCache: false};
      if (fetched) {
        processPackageData(fetched);
        fetched = null;
      } else {
        fetchedCallback = processPackageData;
      }
    
  }

  if (Module['calledRun']) {
    runWithFS();
  } else {
    if (!Module['preRun']) Module['preRun'] = [];
    Module["preRun"].push(runWithFS); // FS is not initialized yet, wait for it
  }

 }
 loadPackage({"files": [{"audio": 0, "start": 0, "crunched": 0, "end": 9875, "filename": "/README.md"}, {"audio": 0, "start": 9875, "crunched": 0, "end": 10056, "filename": "/conf.lua"}, {"audio": 0, "start": 10056, "crunched": 0, "end": 12197, "filename": "/main.lua"}, {"audio": 0, "start": 12197, "crunched": 0, "end": 13331, "filename": "/menus/training_rooms.lua"}, {"audio": 0, "start": 13331, "crunched": 0, "end": 17350, "filename": "/menus/Wisdom_menu.lua"}, {"audio": 0, "start": 17350, "crunched": 0, "end": 21188, "filename": "/menus/select_mode.lua"}, {"audio": 0, "start": 21188, "crunched": 0, "end": 25189, "filename": "/menus/Precision_menu.lua"}, {"audio": 0, "start": 25189, "crunched": 0, "end": 27885, "filename": "/menus/basic_controls.lua"}, {"audio": 0, "start": 27885, "crunched": 0, "end": 29777, "filename": "/menus/about_game.lua"}, {"audio": 0, "start": 29777, "crunched": 0, "end": 32748, "filename": "/menus/instruction_menu.lua"}, {"audio": 0, "start": 32748, "crunched": 0, "end": 34793, "filename": "/menus/startscreen.lua"}, {"audio": 0, "start": 34793, "crunched": 0, "end": 36812, "filename": "/images/endurance.png"}, {"audio": 0, "start": 36812, "crunched": 0, "end": 37403, "filename": "/images/strategy40.png"}, {"audio": 0, "start": 37403, "crunched": 0, "end": 38281, "filename": "/images/heartbreak.png"}, {"audio": 0, "start": 38281, "crunched": 0, "end": 39275, "filename": "/images/bridge.png"}, {"audio": 0, "start": 39275, "crunched": 0, "end": 45446, "filename": "/images/lualogo.png"}, {"audio": 0, "start": 45446, "crunched": 0, "end": 46698, "filename": "/images/clock.png"}, {"audio": 0, "start": 46698, "crunched": 0, "end": 47908, "filename": "/images/precision.png"}, {"audio": 0, "start": 47908, "crunched": 0, "end": 72059, "filename": "/images/lualogo2.png"}, {"audio": 0, "start": 72059, "crunched": 0, "end": 73495, "filename": "/images/exit40.png"}, {"audio": 0, "start": 73495, "crunched": 0, "end": 74160, "filename": "/images/heart.png"}, {"audio": 0, "start": 74160, "crunched": 0, "end": 86392, "filename": "/images/newBlue.png"}, {"audio": 0, "start": 86392, "crunched": 0, "end": 88669, "filename": "/images/wisdom.png"}, {"audio": 0, "start": 88669, "crunched": 0, "end": 98853, "filename": "/images/back1.png"}, {"audio": 0, "start": 98853, "crunched": 0, "end": 124968, "filename": "/images/lovelogo.png"}, {"audio": 0, "start": 124968, "crunched": 0, "end": 126908, "filename": "/images/timeattack.png"}, {"audio": 0, "start": 126908, "crunched": 0, "end": 139875, "filename": "/images/newGreen.png"}, {"audio": 0, "start": 139875, "crunched": 0, "end": 142336, "filename": "/images/zen.png"}, {"audio": 0, "start": 142336, "crunched": 0, "end": 142652, "filename": "/images/light40.png"}, {"audio": 0, "start": 142652, "crunched": 0, "end": 145026, "filename": "/images/arcade.png"}, {"audio": 0, "start": 145026, "crunched": 0, "end": 167232, "filename": "/images/box.png"}, {"audio": 0, "start": 167232, "crunched": 0, "end": 169832, "filename": "/images/gamepad40.png"}, {"audio": 0, "start": 169832, "crunched": 0, "end": 182058, "filename": "/images/newRed.png"}, {"audio": 0, "start": 182058, "crunched": 0, "end": 185571, "filename": "/functions/formateando.lua"}, {"audio": 0, "start": 185571, "crunched": 0, "end": 186034, "filename": "/functions/ponteando.lua"}, {"audio": 0, "start": 186034, "crunched": 0, "end": 187444, "filename": "/functions/operacionando.lua"}, {"audio": 0, "start": 187444, "crunched": 0, "end": 188230, "filename": "/functions/logicando.lua"}, {"audio": 0, "start": 188230, "crunched": 0, "end": 188480, "filename": "/functions/retangulando.lua"}, {"audio": 0, "start": 188480, "crunched": 0, "end": 190355, "filename": "/functions/zenando.lua"}, {"audio": 0, "start": 190355, "crunched": 0, "end": 190782, "filename": "/functions/numerando.lua"}, {"audio": 0, "start": 190782, "crunched": 0, "end": 191803, "filename": "/functions/stringeando.lua"}, {"audio": 0, "start": 191803, "crunched": 0, "end": 192027, "filename": "/functions/paranteseando.lua"}, {"audio": 0, "start": 192027, "crunched": 0, "end": 193307, "filename": "/functions/level_up.lua"}, {"audio": 0, "start": 193307, "crunched": 0, "end": 194302, "filename": "/functions/errowandoWisdom.lua"}, {"audio": 0, "start": 194302, "crunched": 0, "end": 194985, "filename": "/functions/gameoverZen10.lua"}, {"audio": 0, "start": 194985, "crunched": 0, "end": 196765, "filename": "/functions/dificulteando.lua"}, {"audio": 0, "start": 196765, "crunched": 0, "end": 198808, "filename": "/functions/modelando.lua"}, {"audio": 0, "start": 198808, "crunched": 0, "end": 199461, "filename": "/functions/errowandoPrecision.lua"}, {"audio": 0, "start": 199461, "crunched": 0, "end": 200159, "filename": "/functions/suit/button.lua"}, {"audio": 0, "start": 200159, "crunched": 0, "end": 202870, "filename": "/functions/suit/init.lua"}, {"audio": 0, "start": 202870, "crunched": 0, "end": 206603, "filename": "/functions/suit/input.lua"}, {"audio": 0, "start": 206603, "crunched": 0, "end": 207426, "filename": "/functions/suit/checkbox.lua"}, {"audio": 0, "start": 207426, "crunched": 0, "end": 216137, "filename": "/functions/suit/layout.lua"}, {"audio": 0, "start": 216137, "crunched": 0, "end": 220658, "filename": "/functions/suit/theme.lua"}, {"audio": 0, "start": 220658, "crunched": 0, "end": 222266, "filename": "/functions/suit/slider.lua"}, {"audio": 0, "start": 222266, "crunched": 0, "end": 224154, "filename": "/functions/suit/README.md"}, {"audio": 0, "start": 224154, "crunched": 0, "end": 224851, "filename": "/functions/suit/label.lua"}, {"audio": 0, "start": 224851, "crunched": 0, "end": 226134, "filename": "/functions/suit/license.txt"}, {"audio": 0, "start": 226134, "crunched": 0, "end": 227472, "filename": "/functions/suit/imagebutton.lua"}, {"audio": 0, "start": 227472, "crunched": 0, "end": 231980, "filename": "/functions/suit/core.lua"}, {"audio": 0, "start": 231980, "crunched": 0, "end": 241316, "filename": "/functions/suit/docs/conf.py"}, {"audio": 0, "start": 241316, "crunched": 0, "end": 242616, "filename": "/functions/suit/docs/license.rst"}, {"audio": 0, "start": 242616, "crunched": 0, "end": 248838, "filename": "/functions/suit/docs/core.rst"}, {"audio": 0, "start": 248838, "crunched": 0, "end": 254903, "filename": "/functions/suit/docs/widgets.rst"}, {"audio": 0, "start": 254903, "crunched": 0, "end": 263447, "filename": "/functions/suit/docs/layout.rst"}, {"audio": 0, "start": 263447, "crunched": 0, "end": 263499, "filename": "/functions/suit/docs/themes.rst"}, {"audio": 0, "start": 263499, "crunched": 0, "end": 277750, "filename": "/functions/suit/docs/gettingstarted.rst"}, {"audio": 0, "start": 277750, "crunched": 0, "end": 285957, "filename": "/functions/suit/docs/index.rst"}, {"audio": 0, "start": 285957, "crunched": 0, "end": 293358, "filename": "/functions/suit/docs/Makefile"}, {"audio": 0, "start": 293358, "crunched": 0, "end": 639280, "filename": "/functions/suit/docs/_static/same-ids.gif"}, {"audio": 0, "start": 639280, "crunched": 0, "end": 939547, "filename": "/functions/suit/docs/_static/different-ids.gif"}, {"audio": 0, "start": 939547, "crunched": 0, "end": 999897, "filename": "/functions/suit/docs/_static/layout.gif"}, {"audio": 0, "start": 999897, "crunched": 0, "end": 1009190, "filename": "/functions/suit/docs/_static/keyboard.gif"}, {"audio": 0, "start": 1009190, "crunched": 0, "end": 1061184, "filename": "/functions/suit/docs/_static/options.gif"}, {"audio": 0, "start": 1061184, "crunched": 0, "end": 1109713, "filename": "/functions/suit/docs/_static/hello-world.gif"}, {"audio": 0, "start": 1109713, "crunched": 0, "end": 2434067, "filename": "/functions/suit/docs/_static/demo.gif"}, {"audio": 0, "start": 2434067, "crunched": 0, "end": 2513669, "filename": "/functions/suit/docs/_static/mutable-state.gif"}, {"audio": 0, "start": 2513669, "crunched": 0, "end": 2540417, "filename": "/fonts/pixel.ttf"}, {"audio": 0, "start": 2540417, "crunched": 0, "end": 2574777, "filename": "/fonts/digital.ttf"}, {"audio": 0, "start": 2574777, "crunched": 0, "end": 3367525, "filename": "/fonts/courierNew.ttf"}, {"audio": 0, "start": 3367525, "crunched": 0, "end": 3375288, "filename": "/game_modes/Precision_Arcade.lua"}, {"audio": 0, "start": 3375288, "crunched": 0, "end": 3389329, "filename": "/game_modes/Wisdom_TimeAttack.lua"}, {"audio": 0, "start": 3389329, "crunched": 0, "end": 3398198, "filename": "/game_modes/Precision_TimeAttack.lua"}, {"audio": 0, "start": 3398198, "crunched": 0, "end": 3407141, "filename": "/game_modes/Wisdom_TheBridge.lua"}, {"audio": 0, "start": 3407141, "crunched": 0, "end": 3415192, "filename": "/game_modes/Precision_Zen10.lua"}, {"audio": 0, "start": 3415192, "crunched": 0, "end": 3429993, "filename": "/game_modes/Wisdom_Arcade.lua"}], "remote_package_size": 3429993, "package_uuid": "316294f1-de25-4b74-b3e2-14a2ed22bddd"});

})();
