<?php

/* View/FlashMath/FlashMath.twig */
class __TwigTemplate_cd1df99960140f3cf022c8de0fbf9488e8f598cfe71d65b2dfbffef6290cdaf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/FlashMath/FlashMath.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripthead' => array($this, 'block_scripthead'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "View/Layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Flash Math ";
    }

    // line 4
    public function block_scripthead($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/FlashMath/theme/love.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <center>
        <div>
            <h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["game"] ?? null), "html", null, true);
        echo "</h1>
            <canvas id=\"canvas\" oncontextmenu=\"event.preventDefault()\"></canvas>
            <canvas id=\"loadingCanvas\" oncontextmenu=\"event.preventDefault()\" width=\"800\" height=\"600\"></canvas>
        </div>
    </center>

    <script type='text/javascript'>
        alert(\"caso o jogo fique travado atualize a página para normalizar\");
        var loveUrl = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/Love/\";
        var gameUrl = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/";
        echo twig_escape_filter($this->env, ($context["game"] ?? null), "html", null, true);
        echo "/\";
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/FlashMath/game.js\"></script>
    <script async type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/Love/love.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "View/FlashMath/FlashMath.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 84,  137 => 83,  68 => 19,  64 => 18,  53 => 10,  49 => 8,  46 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"View/Layout.twig\" %}
{% block title %} Flash Math {% endblock %}
{% block scripthead %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/Games/FlashMath/theme/love.css\">
{% endblock %}
{% block content %}
    <center>
        <div>
            <h1>{{ game }}</h1>
            <canvas id=\"canvas\" oncontextmenu=\"event.preventDefault()\"></canvas>
            <canvas id=\"loadingCanvas\" oncontextmenu=\"event.preventDefault()\" width=\"800\" height=\"600\"></canvas>
        </div>
    </center>

    <script type='text/javascript'>
        alert(\"caso o jogo fique travado atualize a página para normalizar\");
        var loveUrl = \"{{base_url()}}/Games/Love/\";
        var gameUrl = \"{{base_url()}}/Games/{{ game }}/\";
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
    <script async type=\"text/javascript\" src=\"{{ base_url() }}/Games/Love/love.js\"></script>
{% endblock %}
", "View/FlashMath/FlashMath.twig", "/var/www/html/CatalogoDeJogos/app/src/View/FlashMath/FlashMath.twig");
    }
}
