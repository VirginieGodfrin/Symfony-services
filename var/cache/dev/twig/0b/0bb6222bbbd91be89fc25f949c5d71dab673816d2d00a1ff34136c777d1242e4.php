<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a71a24480853be9347f17a1589cb0efbcb525eb729f631888b4e05e1124a8bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50feef46f1d7e373dad0ae5ac88fd566911be008ea78a94139c4ad9b4f67497a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50feef46f1d7e373dad0ae5ac88fd566911be008ea78a94139c4ad9b4f67497a->enter($__internal_50feef46f1d7e373dad0ae5ac88fd566911be008ea78a94139c4ad9b4f67497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50feef46f1d7e373dad0ae5ac88fd566911be008ea78a94139c4ad9b4f67497a->leave($__internal_50feef46f1d7e373dad0ae5ac88fd566911be008ea78a94139c4ad9b4f67497a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_396d9569c948ce86ce0d045776ab69cd613c7cce46a4d1d3c5964c7108a8a841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396d9569c948ce86ce0d045776ab69cd613c7cce46a4d1d3c5964c7108a8a841->enter($__internal_396d9569c948ce86ce0d045776ab69cd613c7cce46a4d1d3c5964c7108a8a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_396d9569c948ce86ce0d045776ab69cd613c7cce46a4d1d3c5964c7108a8a841->leave($__internal_396d9569c948ce86ce0d045776ab69cd613c7cce46a4d1d3c5964c7108a8a841_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5c2baf7ee47d7164cd0ff2fd5e521e467bb6f983fa3661e02219ecc2f358067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c2baf7ee47d7164cd0ff2fd5e521e467bb6f983fa3661e02219ecc2f358067->enter($__internal_d5c2baf7ee47d7164cd0ff2fd5e521e467bb6f983fa3661e02219ecc2f358067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5c2baf7ee47d7164cd0ff2fd5e521e467bb6f983fa3661e02219ecc2f358067->leave($__internal_d5c2baf7ee47d7164cd0ff2fd5e521e467bb6f983fa3661e02219ecc2f358067_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85cc0e8b881df0c3c814ca5f5d5993a802e39711e73bae4b36b6ec4090796cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cc0e8b881df0c3c814ca5f5d5993a802e39711e73bae4b36b6ec4090796cdd->enter($__internal_85cc0e8b881df0c3c814ca5f5d5993a802e39711e73bae4b36b6ec4090796cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85cc0e8b881df0c3c814ca5f5d5993a802e39711e73bae4b36b6ec4090796cdd->leave($__internal_85cc0e8b881df0c3c814ca5f5d5993a802e39711e73bae4b36b6ec4090796cdd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
