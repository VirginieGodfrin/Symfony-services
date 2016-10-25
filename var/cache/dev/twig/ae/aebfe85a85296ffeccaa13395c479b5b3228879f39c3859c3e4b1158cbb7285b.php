<?php

/* base.html.twig */
class __TwigTemplate_69880de969a885d63151bde742617ceb91a47a4df6f6169b0de9217d377b7ca6 extends Twig_Template
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
        $__internal_1bc59290881e04b53da35aedebc8d41fd4024d693bf67fe9834739c9eb8a1df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc59290881e04b53da35aedebc8d41fd4024d693bf67fe9834739c9eb8a1df4->enter($__internal_1bc59290881e04b53da35aedebc8d41fd4024d693bf67fe9834739c9eb8a1df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1bc59290881e04b53da35aedebc8d41fd4024d693bf67fe9834739c9eb8a1df4->leave($__internal_1bc59290881e04b53da35aedebc8d41fd4024d693bf67fe9834739c9eb8a1df4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb2fa611683fe47528300bf6607380738ab1cb0f06a7862bddac4159eacfbacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2fa611683fe47528300bf6607380738ab1cb0f06a7862bddac4159eacfbacc->enter($__internal_cb2fa611683fe47528300bf6607380738ab1cb0f06a7862bddac4159eacfbacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_cb2fa611683fe47528300bf6607380738ab1cb0f06a7862bddac4159eacfbacc->leave($__internal_cb2fa611683fe47528300bf6607380738ab1cb0f06a7862bddac4159eacfbacc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e217bd17013c61a9a7a9956b31c96a6d57fded7a6a3f517376806d9286620075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e217bd17013c61a9a7a9956b31c96a6d57fded7a6a3f517376806d9286620075->enter($__internal_e217bd17013c61a9a7a9956b31c96a6d57fded7a6a3f517376806d9286620075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e217bd17013c61a9a7a9956b31c96a6d57fded7a6a3f517376806d9286620075->leave($__internal_e217bd17013c61a9a7a9956b31c96a6d57fded7a6a3f517376806d9286620075_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec87d62b11d8e8fd55e801af54df1c1d7a86c5d59257739264bcb418f925401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec87d62b11d8e8fd55e801af54df1c1d7a86c5d59257739264bcb418f925401->enter($__internal_3ec87d62b11d8e8fd55e801af54df1c1d7a86c5d59257739264bcb418f925401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ec87d62b11d8e8fd55e801af54df1c1d7a86c5d59257739264bcb418f925401->leave($__internal_3ec87d62b11d8e8fd55e801af54df1c1d7a86c5d59257739264bcb418f925401_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0d773dc22e2acaadb11d80f8a306fcccc74fef9ecb2fc3023a09eba8a5d604c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d773dc22e2acaadb11d80f8a306fcccc74fef9ecb2fc3023a09eba8a5d604c->enter($__internal_b0d773dc22e2acaadb11d80f8a306fcccc74fef9ecb2fc3023a09eba8a5d604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b0d773dc22e2acaadb11d80f8a306fcccc74fef9ecb2fc3023a09eba8a5d604c->leave($__internal_b0d773dc22e2acaadb11d80f8a306fcccc74fef9ecb2fc3023a09eba8a5d604c_prof);

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
