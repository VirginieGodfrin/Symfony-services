<?php

/* main/homepage.html.twig */
class __TwigTemplate_2d5643b873c9efd2d09c273da1a21bdf08a881534ce07102942546c75675455c extends Twig_Template
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
        $__internal_b209b1c0ac9f67c6f1b6d1385e11d59fe9167fe6e29ac1b2fe55677a29221a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b209b1c0ac9f67c6f1b6d1385e11d59fe9167fe6e29ac1b2fe55677a29221a44->enter($__internal_b209b1c0ac9f67c6f1b6d1385e11d59fe9167fe6e29ac1b2fe55677a29221a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b209b1c0ac9f67c6f1b6d1385e11d59fe9167fe6e29ac1b2fe55677a29221a44->leave($__internal_b209b1c0ac9f67c6f1b6d1385e11d59fe9167fe6e29ac1b2fe55677a29221a44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_769c97df30cad21d024b789de12eecd01d17204855b2a41e6f543f2eae5f9737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769c97df30cad21d024b789de12eecd01d17204855b2a41e6f543f2eae5f9737->enter($__internal_769c97df30cad21d024b789de12eecd01d17204855b2a41e6f543f2eae5f9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_769c97df30cad21d024b789de12eecd01d17204855b2a41e6f543f2eae5f9737->leave($__internal_769c97df30cad21d024b789de12eecd01d17204855b2a41e6f543f2eae5f9737_prof);

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
