<?php

/* View/Layout.twig */
class __TwigTemplate_d5bf960a489331f27816d251a9502cf10861a945a5bb1f8f77dbcde8b5ea6d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripthead' => array($this, 'block_scripthead'),
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

    <meta name=\"description\" content=\"site que mostra um catalogo dos jogos da disciplina de algoritimos 1 da universidade UFMA\">
    <meta name=\"author\" content=\"Luis Alves\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/style.css\">
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <title>Catálogo de Jogos | ";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 16
        $this->displayBlock('scripthead', $context, $blocks);
        // line 17
        echo "


</head>
<body>
    <div style=\"max-height: 100%; min-height: 100%\">
        <header class=\"d-inline\">
            <nav class=\"navbar navbar-expand-lg bg-dark navbar-light justify-content-center\">
                <a class=\"navbar-brand font-weight-bold font-weight-normal text-light text-center\" style=\"font-family: 'Comic Sans MS'\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("catalogo.home.index"), "html", null, true);
        echo "\">Catálogo de Jogos</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </nav>

        </header>
       <main>
           <h3 class=\"mb-5 mt-3 ml-5\"> ";
        // line 33
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</h3>
           <section class=\"container-fluid mb-5\" >
               ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "           </section>
       </main>
        <footer class=\"mt-auto bg-dark text-light border-top footer border-white position-fixed\" style=\"bottom: 0px; width: 100%\">
            <div class=\" float-right hidden-xs mr-2 version\">
                <b>Version</b> 0.1.2
            </div>
            <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a>, <a href=\"#\">Telemídia</a> e <a href=\"https://github.com/TannerRogalsky/love.js/\">TannerRogalsky</a></strong>.
            All rights
            reserved.
        </footer>

    </div>
</body>

</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_scripthead($context, array $blocks = array())
    {
    }

    // line 33
    public function block_titlePage($context, array $blocks = array())
    {
    }

    // line 35
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
        return array (  116 => 35,  111 => 33,  106 => 16,  101 => 15,  82 => 36,  80 => 35,  75 => 33,  64 => 25,  54 => 17,  52 => 16,  48 => 15,  44 => 14,  40 => 13,  36 => 12,  23 => 1,);
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

    <meta name=\"description\" content=\"site que mostra um catalogo dos jogos da disciplina de algoritimos 1 da universidade UFMA\">
    <meta name=\"author\" content=\"Luis Alves\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/style.css\">
    <script src=\"{{ base_url() }}/js/bootstrap.min.js\"></script>
    <title>Catálogo de Jogos | {% block title %}{% endblock %}</title>
    {% block scripthead %}{% endblock %}



</head>
<body>
    <div style=\"max-height: 100%; min-height: 100%\">
        <header class=\"d-inline\">
            <nav class=\"navbar navbar-expand-lg bg-dark navbar-light justify-content-center\">
                <a class=\"navbar-brand font-weight-bold font-weight-normal text-light text-center\" style=\"font-family: 'Comic Sans MS'\" href=\"{{  path_for('catalogo.home.index') }}\">Catálogo de Jogos</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
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
            <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a>, <a href=\"#\">Telemídia</a> e <a href=\"https://github.com/TannerRogalsky/love.js/\">TannerRogalsky</a></strong>.
            All rights
            reserved.
        </footer>

    </div>
</body>

</html>
", "View/Layout.twig", "/var/www/html/CatalogoDeJogos/app/src/View/Layout.twig");
    }
}
