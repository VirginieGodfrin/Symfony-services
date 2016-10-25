<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2d01dc6bdd498344bda692acf0dcdcc8fa7c0a9b18dd95defb22c6d94d9f843a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6627adb44df51eff045d66417614764c5889fd260bd4b50cfab8199acdb1dc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6627adb44df51eff045d66417614764c5889fd260bd4b50cfab8199acdb1dc1b->enter($__internal_6627adb44df51eff045d66417614764c5889fd260bd4b50cfab8199acdb1dc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6627adb44df51eff045d66417614764c5889fd260bd4b50cfab8199acdb1dc1b->leave($__internal_6627adb44df51eff045d66417614764c5889fd260bd4b50cfab8199acdb1dc1b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8247cb9c3b14db4507953e9bd74e5f6430a2a95629bb57204c4e5116a9a657ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8247cb9c3b14db4507953e9bd74e5f6430a2a95629bb57204c4e5116a9a657ef->enter($__internal_8247cb9c3b14db4507953e9bd74e5f6430a2a95629bb57204c4e5116a9a657ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8247cb9c3b14db4507953e9bd74e5f6430a2a95629bb57204c4e5116a9a657ef->leave($__internal_8247cb9c3b14db4507953e9bd74e5f6430a2a95629bb57204c4e5116a9a657ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a09cb61cf881a49602e8ae11c5c1ef675ea83c6d80a3566d288d91f237a331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a09cb61cf881a49602e8ae11c5c1ef675ea83c6d80a3566d288d91f237a331->enter($__internal_16a09cb61cf881a49602e8ae11c5c1ef675ea83c6d80a3566d288d91f237a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16a09cb61cf881a49602e8ae11c5c1ef675ea83c6d80a3566d288d91f237a331->leave($__internal_16a09cb61cf881a49602e8ae11c5c1ef675ea83c6d80a3566d288d91f237a331_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea4402bae4acd132335504e0d2de28234606566ba5ef03afe82af026bba2b14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4402bae4acd132335504e0d2de28234606566ba5ef03afe82af026bba2b14e->enter($__internal_ea4402bae4acd132335504e0d2de28234606566ba5ef03afe82af026bba2b14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea4402bae4acd132335504e0d2de28234606566ba5ef03afe82af026bba2b14e->leave($__internal_ea4402bae4acd132335504e0d2de28234606566ba5ef03afe82af026bba2b14e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
