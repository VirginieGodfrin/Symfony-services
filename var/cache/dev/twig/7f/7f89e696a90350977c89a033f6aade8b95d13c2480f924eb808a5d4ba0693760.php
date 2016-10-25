<?php

/* base.html.twig */
class __TwigTemplate_f1f89b3207c6ab555b1a485a1dd4534c0c398fb82e49ce1d487b1b0c65022d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_296d9c6ec4700808381d9dbf4e6fa8d05b025ddd094c5f6d2cd20a8b1e7caf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296d9c6ec4700808381d9dbf4e6fa8d05b025ddd094c5f6d2cd20a8b1e7caf95->enter($__internal_296d9c6ec4700808381d9dbf4e6fa8d05b025ddd094c5f6d2cd20a8b1e7caf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_296d9c6ec4700808381d9dbf4e6fa8d05b025ddd094c5f6d2cd20a8b1e7caf95->leave($__internal_296d9c6ec4700808381d9dbf4e6fa8d05b025ddd094c5f6d2cd20a8b1e7caf95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32654eaf1c82ac5e343642c30b01850bcbadc809c0d847bc2a3b6703d7ae4367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32654eaf1c82ac5e343642c30b01850bcbadc809c0d847bc2a3b6703d7ae4367->enter($__internal_32654eaf1c82ac5e343642c30b01850bcbadc809c0d847bc2a3b6703d7ae4367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_32654eaf1c82ac5e343642c30b01850bcbadc809c0d847bc2a3b6703d7ae4367->leave($__internal_32654eaf1c82ac5e343642c30b01850bcbadc809c0d847bc2a3b6703d7ae4367_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59b83eaef2512d19ffeb2701c466dd24f0d0b7d74dd50db316a06cff0817090c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b83eaef2512d19ffeb2701c466dd24f0d0b7d74dd50db316a06cff0817090c->enter($__internal_59b83eaef2512d19ffeb2701c466dd24f0d0b7d74dd50db316a06cff0817090c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_59b83eaef2512d19ffeb2701c466dd24f0d0b7d74dd50db316a06cff0817090c->leave($__internal_59b83eaef2512d19ffeb2701c466dd24f0d0b7d74dd50db316a06cff0817090c_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c8723bfb06f1587b4cc5f84dbe1e63cb9e8edd14cbecb1dab2515c914de816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c8723bfb06f1587b4cc5f84dbe1e63cb9e8edd14cbecb1dab2515c914de816->enter($__internal_f9c8723bfb06f1587b4cc5f84dbe1e63cb9e8edd14cbecb1dab2515c914de816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9c8723bfb06f1587b4cc5f84dbe1e63cb9e8edd14cbecb1dab2515c914de816->leave($__internal_f9c8723bfb06f1587b4cc5f84dbe1e63cb9e8edd14cbecb1dab2515c914de816_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cd4f51395c0d82ef30f2af66a115ba67edfbaacc1b5de7704032aba8f4d53a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd4f51395c0d82ef30f2af66a115ba67edfbaacc1b5de7704032aba8f4d53a4->enter($__internal_6cd4f51395c0d82ef30f2af66a115ba67edfbaacc1b5de7704032aba8f4d53a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6cd4f51395c0d82ef30f2af66a115ba67edfbaacc1b5de7704032aba8f4d53a4->leave($__internal_6cd4f51395c0d82ef30f2af66a115ba67edfbaacc1b5de7704032aba8f4d53a4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  138 => 38,  132 => 37,  121 => 30,  112 => 10,  108 => 9,  103 => 8,  97 => 7,  85 => 5,  76 => 41,  74 => 37,  66 => 31,  64 => 30,  52 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}AquaNote!{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"{{ asset('images/aquanote-logo.png') }}\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            {% block body %}{% endblock %}
        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        {% block javascripts %}
            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
";
    }
}
