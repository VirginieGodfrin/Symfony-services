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
        $__internal_2600ba8e3b7a2f7db993c3be8e62edddb3b11dabc9ea843af4400b66ac94d587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2600ba8e3b7a2f7db993c3be8e62edddb3b11dabc9ea843af4400b66ac94d587->enter($__internal_2600ba8e3b7a2f7db993c3be8e62edddb3b11dabc9ea843af4400b66ac94d587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2600ba8e3b7a2f7db993c3be8e62edddb3b11dabc9ea843af4400b66ac94d587->leave($__internal_2600ba8e3b7a2f7db993c3be8e62edddb3b11dabc9ea843af4400b66ac94d587_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a5b6c306358acb3ab9b484490d0632b00568d2f3e1a80d2e1d15b8af58c1137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5b6c306358acb3ab9b484490d0632b00568d2f3e1a80d2e1d15b8af58c1137->enter($__internal_2a5b6c306358acb3ab9b484490d0632b00568d2f3e1a80d2e1d15b8af58c1137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_2a5b6c306358acb3ab9b484490d0632b00568d2f3e1a80d2e1d15b8af58c1137->leave($__internal_2a5b6c306358acb3ab9b484490d0632b00568d2f3e1a80d2e1d15b8af58c1137_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4860dff009e973c097a48e6ddd08eab615781801d48888beeca5aaf91884b0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4860dff009e973c097a48e6ddd08eab615781801d48888beeca5aaf91884b0fc->enter($__internal_4860dff009e973c097a48e6ddd08eab615781801d48888beeca5aaf91884b0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4860dff009e973c097a48e6ddd08eab615781801d48888beeca5aaf91884b0fc->leave($__internal_4860dff009e973c097a48e6ddd08eab615781801d48888beeca5aaf91884b0fc_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_61546380a6755bf6c9f0fb84d2e3bd69cbcb3dc7b49e641c523e07ff47ae06c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61546380a6755bf6c9f0fb84d2e3bd69cbcb3dc7b49e641c523e07ff47ae06c7->enter($__internal_61546380a6755bf6c9f0fb84d2e3bd69cbcb3dc7b49e641c523e07ff47ae06c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61546380a6755bf6c9f0fb84d2e3bd69cbcb3dc7b49e641c523e07ff47ae06c7->leave($__internal_61546380a6755bf6c9f0fb84d2e3bd69cbcb3dc7b49e641c523e07ff47ae06c7_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fb92c99e29a6863edc9fcb09a9a74e1170f12e5c2462371761f040de28b9095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb92c99e29a6863edc9fcb09a9a74e1170f12e5c2462371761f040de28b9095->enter($__internal_0fb92c99e29a6863edc9fcb09a9a74e1170f12e5c2462371761f040de28b9095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0fb92c99e29a6863edc9fcb09a9a74e1170f12e5c2462371761f040de28b9095->leave($__internal_0fb92c99e29a6863edc9fcb09a9a74e1170f12e5c2462371761f040de28b9095_prof);

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
