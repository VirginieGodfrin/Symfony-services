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
        $__internal_b32e52741df6118109b3e9d0db7a56a21d448b65489f255cc015107526ad281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32e52741df6118109b3e9d0db7a56a21d448b65489f255cc015107526ad281c->enter($__internal_b32e52741df6118109b3e9d0db7a56a21d448b65489f255cc015107526ad281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32e52741df6118109b3e9d0db7a56a21d448b65489f255cc015107526ad281c->leave($__internal_b32e52741df6118109b3e9d0db7a56a21d448b65489f255cc015107526ad281c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9181e670e73dba7f5b599834e12a6b8dd39c090a84d4f574e24e80319037d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9181e670e73dba7f5b599834e12a6b8dd39c090a84d4f574e24e80319037d53->enter($__internal_d9181e670e73dba7f5b599834e12a6b8dd39c090a84d4f574e24e80319037d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9181e670e73dba7f5b599834e12a6b8dd39c090a84d4f574e24e80319037d53->leave($__internal_d9181e670e73dba7f5b599834e12a6b8dd39c090a84d4f574e24e80319037d53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_daae3dd236d1706e376b292dac69b14bbd4687e6c2208c138999a8d89bc5df9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daae3dd236d1706e376b292dac69b14bbd4687e6c2208c138999a8d89bc5df9f->enter($__internal_daae3dd236d1706e376b292dac69b14bbd4687e6c2208c138999a8d89bc5df9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_daae3dd236d1706e376b292dac69b14bbd4687e6c2208c138999a8d89bc5df9f->leave($__internal_daae3dd236d1706e376b292dac69b14bbd4687e6c2208c138999a8d89bc5df9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f7418853896eb2ff9eb4bb09234f8301e038e3879684fc6650efa6d1abfacd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7418853896eb2ff9eb4bb09234f8301e038e3879684fc6650efa6d1abfacd4->enter($__internal_9f7418853896eb2ff9eb4bb09234f8301e038e3879684fc6650efa6d1abfacd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f7418853896eb2ff9eb4bb09234f8301e038e3879684fc6650efa6d1abfacd4->leave($__internal_9f7418853896eb2ff9eb4bb09234f8301e038e3879684fc6650efa6d1abfacd4_prof);

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
