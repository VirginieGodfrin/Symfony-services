<?php

/* main/homepage.html.twig */
class __TwigTemplate_763681e2ad7c4cc481eb0c82c36a3139c845bb015813af34e3c2dfbcc72fed56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_437e306da7497a55de6040c22ea3655aa05baecb9e92a770988f7a1c196a9e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437e306da7497a55de6040c22ea3655aa05baecb9e92a770988f7a1c196a9e93->enter($__internal_437e306da7497a55de6040c22ea3655aa05baecb9e92a770988f7a1c196a9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437e306da7497a55de6040c22ea3655aa05baecb9e92a770988f7a1c196a9e93->leave($__internal_437e306da7497a55de6040c22ea3655aa05baecb9e92a770988f7a1c196a9e93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ae6c61141370a052b8b67d500723a8a481bd799977cc2634153470019b35f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae6c61141370a052b8b67d500723a8a481bd799977cc2634153470019b35f2a->enter($__internal_5ae6c61141370a052b8b67d500723a8a481bd799977cc2634153470019b35f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_5ae6c61141370a052b8b67d500723a8a481bd799977cc2634153470019b35f2a->leave($__internal_5ae6c61141370a052b8b67d500723a8a481bd799977cc2634153470019b35f2a_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
{% endblock %}
";
    }
}
