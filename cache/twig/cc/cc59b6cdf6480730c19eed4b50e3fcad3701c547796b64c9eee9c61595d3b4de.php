<?php

/* View/FlashMath.twig */
class __TwigTemplate_7a9e2228c69b37fbd55f39437cb20f4fa8220ebcebf3b64e9be8465e8a221d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

    <center>
        <div>
            <canvas id=\"canvas\" oncontextmenu=\"event.preventDefault()\"></canvas>
            <canvas id=\"loadingCanvas\" oncontextmenu=\"event.preventDefault()\" width=\"800\" height=\"600\"></canvas>
        </div>

    </center>

    <script type='text/javascript'>
        var loadingContext = document.getElementById('loadingCanvas').getContext('2d');
        function drawLoadingText(text) {
            var canvas = loadingContext.canvas;

            loadingContext.fillStyle = \"rgb(142, 195, 227)\";
            loadingContext.fillRect(0, 0, canvas.scrollWidth, canvas.scrollHeight);

            loadingContext.font = '2em arial';
            loadingContext.textAlign = 'center';
            loadingContext.fillStyle = \"rgb( 11, 86, 117 )\";
            loadingContext.fillText(text, canvas.scrollWidth / 2, canvas.scrollHeight / 2);

            loadingContext.fillText(\"Powered By Emscripten.\", canvas.scrollWidth / 2, canvas.scrollHeight / 4);
            loadingContext.fillText(\"Powered By LÖVE.\", canvas.scrollWidth / 2, canvas.scrollHeight / 4 * 3);
        }

        window.addEventListener(\"keydown\", function(e) {
            // space and arrow keys
            if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
                e.preventDefault();
            }
        }, false);

        var Module = {
            arguments: ['./'],
            printErr: console.error.bind(console),
            canvas: (function() {
                var canvas = document.getElementById('canvas');

                // As a default initial behavior, pop up an alert when webgl context is lost. To make your
                // application robust, you may want to override this behavior before shipping!
                // See http://www.khronos.org/registry/webgl/specs/latest/1.0/#5.15.2
                canvas.addEventListener(\"webglcontextlost\", function(e) { alert('WebGL context lost. You will need to reload the page.'); e.preventDefault(); }, false);

                return canvas;
            })(),
            setStatus: function(text) {
                if (text) {
                    drawLoadingText(text);
                } else if (Module.didSyncFS && Module.remainingDependencies === 0) {
                    Module.callMain(Module.arguments);
                    document.getElementById('loadingCanvas').style.display = 'none';
                    document.getElementById('canvas').style.display = 'block';
                }
            },
            didSyncFS: false,
            totalDependencies: 0,
            remainingDependencies: 0,
            monitorRunDependencies: function(left) {
                this.remainingDependencies = left;
                this.totalDependencies = Math.max(this.totalDependencies, left);
                Module.setStatus(left ? 'Preparing... (' + (this.totalDependencies-left) + '/' + this.totalDependencies + ')' : 'All downloads complete.');
            }
        };
        Module.setStatus('Downloading...');
        window.onerror = function(event) {
            // TODO: do not warn on ok events like simulating an infinite loop or exitStatus
            Module.setStatus('Exception thrown, see JavaScript console');
            Module.setStatus = function(text) {
                if (text) Module.printErr('[post-exception status] ' + text);
            };
        };
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/FlashMath/game.js\"></script>
    <script async type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/FlashMath/love.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "View/FlashMath.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 76,  95 => 75,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    <center>
        <div>
            <canvas id=\"canvas\" oncontextmenu=\"event.preventDefault()\"></canvas>
            <canvas id=\"loadingCanvas\" oncontextmenu=\"event.preventDefault()\" width=\"800\" height=\"600\"></canvas>
        </div>

    </center>

    <script type='text/javascript'>
        var loadingContext = document.getElementById('loadingCanvas').getContext('2d');
        function drawLoadingText(text) {
            var canvas = loadingContext.canvas;

            loadingContext.fillStyle = \"rgb(142, 195, 227)\";
            loadingContext.fillRect(0, 0, canvas.scrollWidth, canvas.scrollHeight);

            loadingContext.font = '2em arial';
            loadingContext.textAlign = 'center';
            loadingContext.fillStyle = \"rgb( 11, 86, 117 )\";
            loadingContext.fillText(text, canvas.scrollWidth / 2, canvas.scrollHeight / 2);

            loadingContext.fillText(\"Powered By Emscripten.\", canvas.scrollWidth / 2, canvas.scrollHeight / 4);
            loadingContext.fillText(\"Powered By LÖVE.\", canvas.scrollWidth / 2, canvas.scrollHeight / 4 * 3);
        }

        window.addEventListener(\"keydown\", function(e) {
            // space and arrow keys
            if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
                e.preventDefault();
            }
        }, false);

        var Module = {
            arguments: ['./'],
            printErr: console.error.bind(console),
            canvas: (function() {
                var canvas = document.getElementById('canvas');

                // As a default initial behavior, pop up an alert when webgl context is lost. To make your
                // application robust, you may want to override this behavior before shipping!
                // See http://www.khronos.org/registry/webgl/specs/latest/1.0/#5.15.2
                canvas.addEventListener(\"webglcontextlost\", function(e) { alert('WebGL context lost. You will need to reload the page.'); e.preventDefault(); }, false);

                return canvas;
            })(),
            setStatus: function(text) {
                if (text) {
                    drawLoadingText(text);
                } else if (Module.didSyncFS && Module.remainingDependencies === 0) {
                    Module.callMain(Module.arguments);
                    document.getElementById('loadingCanvas').style.display = 'none';
                    document.getElementById('canvas').style.display = 'block';
                }
            },
            didSyncFS: false,
            totalDependencies: 0,
            remainingDependencies: 0,
            monitorRunDependencies: function(left) {
                this.remainingDependencies = left;
                this.totalDependencies = Math.max(this.totalDependencies, left);
                Module.setStatus(left ? 'Preparing... (' + (this.totalDependencies-left) + '/' + this.totalDependencies + ')' : 'All downloads complete.');
            }
        };
        Module.setStatus('Downloading...');
        window.onerror = function(event) {
            // TODO: do not warn on ok events like simulating an infinite loop or exitStatus
            Module.setStatus('Exception thrown, see JavaScript console');
            Module.setStatus = function(text) {
                if (text) Module.printErr('[post-exception status] ' + text);
            };
        };
    </script>
    <script type=\"text/javascript\" src=\"{{ base_url() }}/Games/FlashMath/game.js\"></script>
    <script async type=\"text/javascript\" src=\"{{ base_url() }}/Games/FlashMath/love.js\"></script>

", "View/FlashMath.twig", "/var/www/html/CatalogoDeJogos/app/src/View/FlashMath.twig");
    }
}
