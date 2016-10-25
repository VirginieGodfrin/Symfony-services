<?php

/* genus/show.html.twig */
class __TwigTemplate_0a2cb09ffbe3d0cd328112b18f3f185c8b827b55479be0160c54ddb5ed17b28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5151dfe848508e5ba852c80bce945eedc5f3e4f161e5ffed1d540c9a52213e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5151dfe848508e5ba852c80bce945eedc5f3e4f161e5ffed1d540c9a52213e8->enter($__internal_d5151dfe848508e5ba852c80bce945eedc5f3e4f161e5ffed1d540c9a52213e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5151dfe848508e5ba852c80bce945eedc5f3e4f161e5ffed1d540c9a52213e8->leave($__internal_d5151dfe848508e5ba852c80bce945eedc5f3e4f161e5ffed1d540c9a52213e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a98150812946172e5ff5e28fedad4b0409e33c3840f1ddf10059b9d0429e5ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98150812946172e5ff5e28fedad4b0409e33c3840f1ddf10059b9d0429e5ef0->enter($__internal_a98150812946172e5ff5e28fedad4b0409e33c3840f1ddf10059b9d0429e5ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()), "html", null, true);
        
        $__internal_a98150812946172e5ff5e28fedad4b0409e33c3840f1ddf10059b9d0429e5ef0->leave($__internal_a98150812946172e5ff5e28fedad4b0409e33c3840f1ddf10059b9d0429e5ef0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea8c2b057c5aa088acd8bf671ae94072ac74b7d2f115855f383ecbbfe6ac2bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8c2b057c5aa088acd8bf671ae94072ac74b7d2f115855f383ecbbfe6ac2bb2->enter($__internal_ea8c2b057c5aa088acd8bf671ae94072ac74b7d2f115855f383ecbbfe6ac2bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "subFamily", array()), "html", null, true);
        echo "</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "speciesCount", array())), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["funFact"]) ? $context["funFact"] : $this->getContext($context, "funFact")), "html", null, true);
        echo "</dd>
                <dt>Recent Notes</dt>
                <dd>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["recentNoteCount"]) ? $context["recentNoteCount"] : $this->getContext($context, "recentNoteCount")), "html", null, true);
        echo "</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_ea8c2b057c5aa088acd8bf671ae94072ac74b7d2f115855f383ecbbfe6ac2bb2->leave($__internal_ea8c2b057c5aa088acd8bf671ae94072ac74b7d2f115855f383ecbbfe6ac2bb2_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_001c516d5b8db6e9678c628fe8f667b9ba7c6cd6978d284529c0c4617107085d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001c516d5b8db6e9678c628fe8f667b9ba7c6cd6978d284529c0c4617107085d->enter($__internal_001c516d5b8db6e9678c628fe8f667b9ba7c6cd6978d284529c0c4617107085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genus_show_notes", array("name" => $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()))), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
";
        
        $__internal_001c516d5b8db6e9678c628fe8f667b9ba7c6cd6978d284529c0c4617107085d->leave($__internal_001c516d5b8db6e9678c628fe8f667b9ba7c6cd6978d284529c0c4617107085d_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  109 => 32,  100 => 27,  94 => 26,  81 => 19,  76 => 17,  71 => 15,  66 => 13,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block title %}Genus {{ genus.name }}{% endblock %}

{% block body %}
    <h2 class=\"genus-name\">{{ genus.name }}</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>{{ genus.subFamily }}</dd>
                <dt>Known Species:</dt>
                <dd>{{ genus.speciesCount|number_format }}</dd>
                <dt>Fun Fact:</dt>
                <dd>{{ funFact }}</dd>
                <dt>Recent Notes</dt>
                <dd>{{ recentNoteCount }}</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"{{ asset('js/notes.react.js') }}\"></script>
    <script type=\"text/babel\">
        var notesUrl = '{{ path('genus_show_notes', {'name': genus.name}) }}';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
{% endblock %}
";
    }
}
