<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ed71ddddb11a2dfce3f52de7133bea51f26cbefbb12c26ef74955852e481d63c extends Twig_Template
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
        $__internal_f60da7263678efc146b5b217654f8fc8ecb822ae33cc4cb52dd34cd527fefbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60da7263678efc146b5b217654f8fc8ecb822ae33cc4cb52dd34cd527fefbb2->enter($__internal_f60da7263678efc146b5b217654f8fc8ecb822ae33cc4cb52dd34cd527fefbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60da7263678efc146b5b217654f8fc8ecb822ae33cc4cb52dd34cd527fefbb2->leave($__internal_f60da7263678efc146b5b217654f8fc8ecb822ae33cc4cb52dd34cd527fefbb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ba08d1aec1160c35e8846e0a4ec2cf882d6e1a196345913a1cb733edddb64a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba08d1aec1160c35e8846e0a4ec2cf882d6e1a196345913a1cb733edddb64a0->enter($__internal_6ba08d1aec1160c35e8846e0a4ec2cf882d6e1a196345913a1cb733edddb64a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ba08d1aec1160c35e8846e0a4ec2cf882d6e1a196345913a1cb733edddb64a0->leave($__internal_6ba08d1aec1160c35e8846e0a4ec2cf882d6e1a196345913a1cb733edddb64a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f08574f8dea6b113bd546ecac716f7adda7bf1b00c62038f8b9263ef8495498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08574f8dea6b113bd546ecac716f7adda7bf1b00c62038f8b9263ef8495498c->enter($__internal_f08574f8dea6b113bd546ecac716f7adda7bf1b00c62038f8b9263ef8495498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f08574f8dea6b113bd546ecac716f7adda7bf1b00c62038f8b9263ef8495498c->leave($__internal_f08574f8dea6b113bd546ecac716f7adda7bf1b00c62038f8b9263ef8495498c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58f916920281bb7505984d415f695e64d74eb09a639d2643067d6acf5ac0c3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f916920281bb7505984d415f695e64d74eb09a639d2643067d6acf5ac0c3ff->enter($__internal_58f916920281bb7505984d415f695e64d74eb09a639d2643067d6acf5ac0c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58f916920281bb7505984d415f695e64d74eb09a639d2643067d6acf5ac0c3ff->leave($__internal_58f916920281bb7505984d415f695e64d74eb09a639d2643067d6acf5ac0c3ff_prof);

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
