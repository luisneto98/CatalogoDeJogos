<?php

/* View/Layout.twig */
class __TwigTemplate_c863a9da9ec1fc0fd54f1fc69a6317b56368ec145f08e27a9f588caf694351ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripthead' => array($this, 'block_scripthead'),
            'arena' => array($this, 'block_arena'),
            'practice' => array($this, 'block_practice'),
            'registerUser' => array($this, 'block_registerUser'),
            'arenasControl' => array($this, 'block_arenasControl'),
            'titlePage' => array($this, 'block_titlePage'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"description\" content=\"site Wandarena\">
    <meta name=\"author\" content=\"Luis Alves\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Images/System/Wandarena.ico\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/style.css\">
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <title>Wandarena | ";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 20
        $this->displayBlock('scripthead', $context, $blocks);
        // line 21
        echo "


</head>
<body class=\" backgroundBody\">
    <div style=\"max-height: 100%; min-height: 100%\">
        <header class=\"d-inline\">
            <nav class=\"navbar navbar-expand-lg bg-yellow navbar-light\">
                <a class=\"navbar-brand font-weight-bold text-dark\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.home.index"), "html", null, true);
        echo "\">Wandarena<b class=\"font-weight-normal text-secondary\">Telemídia</b></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse d-inline\" id=\"navbarNavAltMarkup\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item ";
        // line 35
        $this->displayBlock('arena', $context, $blocks);
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.home.listar"), "html", null, true);
        echo "\">Arenas </a>
                        </li>
                        ";
        // line 38
        if ((($context["admin"] ?? null) == true)) {
            // line 39
            echo "                            <li class=\"nav-item ";
            $this->displayBlock('practice', $context, $blocks);
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.home.practice"), "html", null, true);
            echo "\">Praticar </a>
                            </li>
                        ";
        }
        // line 43
        echo "                        ";
        if ((($context["admin"] ?? null) == true)) {
            // line 44
            echo "                            <li class=\"nav-item ";
            $this->displayBlock('registerUser', $context, $blocks);
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.user.register"), "html", null, true);
            echo "\">Cadastrar Usuário </a>
                            </li>
                            <li class=\"nav-item ";
            // line 47
            $this->displayBlock('arenasControl', $context, $blocks);
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.control.index"), "html", null, true);
            echo "\">Controle de Arenas </a>
                            </li>
                        ";
        }
        // line 51
        echo "
                    </ul>
                    <a class=\"nav-link\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
        echo "\">Sair</a>
                </div>

            </nav>

        </header>
       <main>
           <h3 class=\"mb-5 mt-3 ml-5\"> ";
        // line 60
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</h3>
           <section class=\"container-fluid mb-5\" >
               ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "           </section>
       </main>
        <footer class=\"mt-auto bg-dark text-light border-top footer border-white position-fixed\" style=\"bottom: 0px; width: 100%\">
            <div class=\" float-right hidden-xs mr-2 version\">
                <b>Version</b> 0.1.2
            </div>
            <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a> e <a href=\"#\">Telemídia</a></strong>.
            All rights
            reserved.
        </footer>

    </div>
</body>

</html>";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_scripthead($context, array $blocks = array())
    {
    }

    // line 35
    public function block_arena($context, array $blocks = array())
    {
    }

    // line 39
    public function block_practice($context, array $blocks = array())
    {
    }

    // line 44
    public function block_registerUser($context, array $blocks = array())
    {
    }

    // line 47
    public function block_arenasControl($context, array $blocks = array())
    {
    }

    // line 60
    public function block_titlePage($context, array $blocks = array())
    {
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "View/Layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 62,  198 => 60,  193 => 47,  188 => 44,  183 => 39,  178 => 35,  173 => 20,  168 => 19,  150 => 63,  148 => 62,  143 => 60,  133 => 53,  129 => 51,  123 => 48,  119 => 47,  114 => 45,  109 => 44,  106 => 43,  100 => 40,  95 => 39,  93 => 38,  88 => 36,  84 => 35,  75 => 29,  65 => 21,  63 => 20,  59 => 19,  52 => 15,  48 => 14,  44 => 13,  39 => 11,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!doctype html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"description\" content=\"site Wandarena\">
    <meta name=\"author\" content=\"Luis Alves\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ base_url() }}/Images/System/Wandarena.ico\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/style.css\">
    <script src=\"{{ base_url() }}/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <title>Wandarena | {% block title %}{% endblock %}</title>
    {% block scripthead %}{% endblock %}



</head>
<body class=\" backgroundBody\">
    <div style=\"max-height: 100%; min-height: 100%\">
        <header class=\"d-inline\">
            <nav class=\"navbar navbar-expand-lg bg-yellow navbar-light\">
                <a class=\"navbar-brand font-weight-bold text-dark\" href=\"{{  path_for('wanda.home.index') }}\">Wandarena<b class=\"font-weight-normal text-secondary\">Telemídia</b></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse d-inline\" id=\"navbarNavAltMarkup\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item {% block arena %}{% endblock %}\">
                            <a class=\"nav-link\" href=\"{{ path_for('wanda.home.listar') }}\">Arenas </a>
                        </li>
                        {% if admin == true %}
                            <li class=\"nav-item {% block practice %}{% endblock %}\">
                                <a class=\"nav-link\" href=\"{{ path_for('wanda.home.practice') }}\">Praticar </a>
                            </li>
                        {% endif %}
                        {% if admin == true %}
                            <li class=\"nav-item {% block registerUser %}{% endblock %}\">
                                <a class=\"nav-link\" href=\"{{ path_for('wanda.user.register') }}\">Cadastrar Usuário </a>
                            </li>
                            <li class=\"nav-item {% block arenasControl %}{% endblock %}\">
                                <a class=\"nav-link\" href=\"{{ path_for('wanda.arena.control.index') }}\">Controle de Arenas </a>
                            </li>
                        {% endif %}

                    </ul>
                    <a class=\"nav-link\" href=\"{{ path_for('logout') }}\">Sair</a>
                </div>

            </nav>

        </header>
       <main>
           <h3 class=\"mb-5 mt-3 ml-5\"> {% block titlePage %}{% endblock %}</h3>
           <section class=\"container-fluid mb-5\" >
               {% block content%} {% endblock %}
           </section>
       </main>
        <footer class=\"mt-auto bg-dark text-light border-top footer border-white position-fixed\" style=\"bottom: 0px; width: 100%\">
            <div class=\" float-right hidden-xs mr-2 version\">
                <b>Version</b> 0.1.2
            </div>
            <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a> e <a href=\"#\">Telemídia</a></strong>.
            All rights
            reserved.
        </footer>

    </div>
</body>

</html>", "View/Layout.twig", "/var/www/html/Wandarena/app/src/View/Layout.twig");
    }
}
