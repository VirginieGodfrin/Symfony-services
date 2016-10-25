<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_016c3bd9ff1281f62e1ffc8d6a1886142f14674551577ae4eddcbc147da3bd00 extends Twig_Template
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
        $__internal_8c0049754688e29fd6ae887ac67a8066d4d0ea05691cd048a1d288540ac49c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0049754688e29fd6ae887ac67a8066d4d0ea05691cd048a1d288540ac49c9d->enter($__internal_8c0049754688e29fd6ae887ac67a8066d4d0ea05691cd048a1d288540ac49c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0049754688e29fd6ae887ac67a8066d4d0ea05691cd048a1d288540ac49c9d->leave($__internal_8c0049754688e29fd6ae887ac67a8066d4d0ea05691cd048a1d288540ac49c9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a569cc052d907fb37ca05cda6b6ebeef3af25a98cc473cf3b41b01c1c03ee6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a569cc052d907fb37ca05cda6b6ebeef3af25a98cc473cf3b41b01c1c03ee6b3->enter($__internal_a569cc052d907fb37ca05cda6b6ebeef3af25a98cc473cf3b41b01c1c03ee6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a569cc052d907fb37ca05cda6b6ebeef3af25a98cc473cf3b41b01c1c03ee6b3->leave($__internal_a569cc052d907fb37ca05cda6b6ebeef3af25a98cc473cf3b41b01c1c03ee6b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1aac13adcda37f3db9a029f7f4aea87ef6877b8e6f71c0676f1bff28e3982953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aac13adcda37f3db9a029f7f4aea87ef6877b8e6f71c0676f1bff28e3982953->enter($__internal_1aac13adcda37f3db9a029f7f4aea87ef6877b8e6f71c0676f1bff28e3982953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1aac13adcda37f3db9a029f7f4aea87ef6877b8e6f71c0676f1bff28e3982953->leave($__internal_1aac13adcda37f3db9a029f7f4aea87ef6877b8e6f71c0676f1bff28e3982953_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31a6d22cc4e407bfdd68adf0d46674ebe96c201653e3217fab7f71502574e3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a6d22cc4e407bfdd68adf0d46674ebe96c201653e3217fab7f71502574e3ef->enter($__internal_31a6d22cc4e407bfdd68adf0d46674ebe96c201653e3217fab7f71502574e3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31a6d22cc4e407bfdd68adf0d46674ebe96c201653e3217fab7f71502574e3ef->leave($__internal_31a6d22cc4e407bfdd68adf0d46674ebe96c201653e3217fab7f71502574e3ef_prof);

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
