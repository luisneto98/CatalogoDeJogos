<?php

/* View/ListGames.twig */
class __TwigTemplate_07039020f00fb9050808e47bc7a4b30c92fefc0b910a7c48dcb1f125a7c1c863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/ListGames.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Lista de Jogos ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Lista de Jogos";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row ml-5\">
            <div class=\"card m-3\">
                <img class=\"card-img-top\" style=\"max-width: 20rem; max-height: 10rem\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Games/FlashMath/Image/FlashMathImage.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Flash Math</h5>
                    <h6 class=\"card-subtitle text-muted\">Lógica e Matemática</h6>
                    <div style=\"max-height: 20rem; max-width: 15rem;\">
                        <p class=\"card-text text-truncate\" >Este Jogo vai lhe ajudar a <br>desenvolver suas habilidades<br> em matemática e lógica</p>

                        <p class=\"card-text\"><small class=\"text-muted\">Autor: Tiago</small></p>
                    </div>
                    <a class=\"btn btn-primary float-right\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("catalogo.home.FlashMath"), "html", null, true);
        echo "\">Entrar</a>
                </div>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "View/ListGames.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  49 => 7,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Lista de Jogos {% endblock %}
{% block titlePage %}Lista de Jogos{% endblock %}
{% block content %}
    <div class=\"row ml-5\">
            <div class=\"card m-3\">
                <img class=\"card-img-top\" style=\"max-width: 20rem; max-height: 10rem\" src=\"{{ base_url() }}/Games/FlashMath/Image/FlashMathImage.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Flash Math</h5>
                    <h6 class=\"card-subtitle text-muted\">Lógica e Matemática</h6>
                    <div style=\"max-height: 20rem; max-width: 15rem;\">
                        <p class=\"card-text text-truncate\" >Este Jogo vai lhe ajudar a <br>desenvolver suas habilidades<br> em matemática e lógica</p>

                        <p class=\"card-text\"><small class=\"text-muted\">Autor: Tiago</small></p>
                    </div>
                    <a class=\"btn btn-primary float-right\" href=\"{{ path_for('catalogo.home.FlashMath') }}\">Entrar</a>
                </div>
            </div>
    </div>
{% endblock %}", "View/ListGames.twig", "/var/www/html/CatalogoDeJogos/app/src/View/ListGames.twig");
    }
}
