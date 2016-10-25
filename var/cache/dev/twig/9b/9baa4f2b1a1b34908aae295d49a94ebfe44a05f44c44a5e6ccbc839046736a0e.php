<?php

/* genus/list.html.twig */
class __TwigTemplate_4dd086e8d89e0cf796e38a1d0c73255a1dad197646e4f4b0d086b3e6d689bc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/list.html.twig", 1);
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
        $__internal_af602600b7fc4c9c8bcabb9646051409a7984240ecb2bbffbfba531b4be93a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af602600b7fc4c9c8bcabb9646051409a7984240ecb2bbffbfba531b4be93a90->enter($__internal_af602600b7fc4c9c8bcabb9646051409a7984240ecb2bbffbfba531b4be93a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af602600b7fc4c9c8bcabb9646051409a7984240ecb2bbffbfba531b4be93a90->leave($__internal_af602600b7fc4c9c8bcabb9646051409a7984240ecb2bbffbfba531b4be93a90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b16c4f1f051eaef6eca8bcf3ea71f7b6347165e75ad1c4c80870116c13d1f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b16c4f1f051eaef6eca8bcf3ea71f7b6347165e75ad1c4c80870116c13d1f75->enter($__internal_9b16c4f1f051eaef6eca8bcf3ea71f7b6347165e75ad1c4c80870116c13d1f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Genus</th>
                <th># of species</th>
                <th>Last updated</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genuses"]) ? $context["genuses"] : $this->getContext($context, "genuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["genus"]) {
            // line 14
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genus_show", array("genusName" => $this->getAttribute($context["genus"], "name", array()))), "html", null, true);
            echo "\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "name", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "speciesCount", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["genus"], "updatedAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
";
        
        $__internal_9b16c4f1f051eaef6eca8bcf3ea71f7b6347165e75ad1c4c80870116c13d1f75->leave($__internal_9b16c4f1f051eaef6eca8bcf3ea71f7b6347165e75ad1c4c80870116c13d1f75_prof);

    }

    public function getTemplateName()
    {
        return "genus/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  73 => 21,  69 => 20,  63 => 17,  59 => 16,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Genus</th>
                <th># of species</th>
                <th>Last updated</th>
            </tr>
        </thead>
        <tbody>
            {% for genus in genuses %}
                <tr>
                    <td>
                        <a href=\"{{ path('genus_show', {'genusName': genus.name}) }}\">
                            {{ genus.name }}
                        </a>
                    </td>
                    <td>{{ genus.speciesCount }}</td>
                    <td>{{ genus.updatedAt|date('Y-m-d') }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
";
    }
}
