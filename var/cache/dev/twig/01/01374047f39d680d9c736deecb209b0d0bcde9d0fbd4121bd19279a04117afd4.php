<?php

/* base.html.twig */
class __TwigTemplate_85dc09a1e3605a48661923ec3313d5d53fbe046eb053f43232c2ab7189efca58 extends Twig_Template
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
        $__internal_7d0bb3004520bd49f06df1b018536fb0e49fd168e8d78ac30a91476030af1913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0bb3004520bd49f06df1b018536fb0e49fd168e8d78ac30a91476030af1913->enter($__internal_7d0bb3004520bd49f06df1b018536fb0e49fd168e8d78ac30a91476030af1913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7d0bb3004520bd49f06df1b018536fb0e49fd168e8d78ac30a91476030af1913->leave($__internal_7d0bb3004520bd49f06df1b018536fb0e49fd168e8d78ac30a91476030af1913_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_31cd256969cf8de48a435a397117d9c9c73c143b1fd16586cf576d02787e94eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cd256969cf8de48a435a397117d9c9c73c143b1fd16586cf576d02787e94eb->enter($__internal_31cd256969cf8de48a435a397117d9c9c73c143b1fd16586cf576d02787e94eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_31cd256969cf8de48a435a397117d9c9c73c143b1fd16586cf576d02787e94eb->leave($__internal_31cd256969cf8de48a435a397117d9c9c73c143b1fd16586cf576d02787e94eb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be1d789b5fda29b72ee510d73ee6b720313022c591b4a82e2c4a70a5e74041d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1d789b5fda29b72ee510d73ee6b720313022c591b4a82e2c4a70a5e74041d5->enter($__internal_be1d789b5fda29b72ee510d73ee6b720313022c591b4a82e2c4a70a5e74041d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_be1d789b5fda29b72ee510d73ee6b720313022c591b4a82e2c4a70a5e74041d5->leave($__internal_be1d789b5fda29b72ee510d73ee6b720313022c591b4a82e2c4a70a5e74041d5_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf47e4118950efac6558bcdda76a0b4d59963fa1d33abd20667a860616e5741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf47e4118950efac6558bcdda76a0b4d59963fa1d33abd20667a860616e5741->enter($__internal_7cf47e4118950efac6558bcdda76a0b4d59963fa1d33abd20667a860616e5741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7cf47e4118950efac6558bcdda76a0b4d59963fa1d33abd20667a860616e5741->leave($__internal_7cf47e4118950efac6558bcdda76a0b4d59963fa1d33abd20667a860616e5741_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5c4da61b5bc9b7c191e155d5696c1d108714dcd9476b0e436e7626c8ff95a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c4da61b5bc9b7c191e155d5696c1d108714dcd9476b0e436e7626c8ff95a14->enter($__internal_f5c4da61b5bc9b7c191e155d5696c1d108714dcd9476b0e436e7626c8ff95a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f5c4da61b5bc9b7c191e155d5696c1d108714dcd9476b0e436e7626c8ff95a14->leave($__internal_f5c4da61b5bc9b7c191e155d5696c1d108714dcd9476b0e436e7626c8ff95a14_prof);

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
