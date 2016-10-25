<?php

/* genus/show.html.twig */
class __TwigTemplate_525bd62086aa238d210278192555541d419198601a10973f56377231df037359 extends Twig_Template
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
        $__internal_a1de64918be288d4782f548da4fdf32b9ebf7bc70abe0ea53b3cfdae0d146b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1de64918be288d4782f548da4fdf32b9ebf7bc70abe0ea53b3cfdae0d146b12->enter($__internal_a1de64918be288d4782f548da4fdf32b9ebf7bc70abe0ea53b3cfdae0d146b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1de64918be288d4782f548da4fdf32b9ebf7bc70abe0ea53b3cfdae0d146b12->leave($__internal_a1de64918be288d4782f548da4fdf32b9ebf7bc70abe0ea53b3cfdae0d146b12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b657883c3611fd6508c71e01c91172262c0aca3878a316e4cbf6b66d917f997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b657883c3611fd6508c71e01c91172262c0aca3878a316e4cbf6b66d917f997->enter($__internal_6b657883c3611fd6508c71e01c91172262c0aca3878a316e4cbf6b66d917f997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()), "html", null, true);
        
        $__internal_6b657883c3611fd6508c71e01c91172262c0aca3878a316e4cbf6b66d917f997->leave($__internal_6b657883c3611fd6508c71e01c91172262c0aca3878a316e4cbf6b66d917f997_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9e15b72d504db248f210fa443695b68faed6b98f2bcfdb8858c50005f5a8a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e15b72d504db248f210fa443695b68faed6b98f2bcfdb8858c50005f5a8a69->enter($__internal_c9e15b72d504db248f210fa443695b68faed6b98f2bcfdb8858c50005f5a8a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\MarkdownExtension')->parseMarkdown($this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "funFact", array())), "html", null, true);
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
        
        $__internal_c9e15b72d504db248f210fa443695b68faed6b98f2bcfdb8858c50005f5a8a69->leave($__internal_c9e15b72d504db248f210fa443695b68faed6b98f2bcfdb8858c50005f5a8a69_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e237af25b54f5c6c882a17a34287fa488ed024f503c0e289d7d62897ba360ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e237af25b54f5c6c882a17a34287fa488ed024f503c0e289d7d62897ba360ac->enter($__internal_3e237af25b54f5c6c882a17a34287fa488ed024f503c0e289d7d62897ba360ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e237af25b54f5c6c882a17a34287fa488ed024f503c0e289d7d62897ba360ac->leave($__internal_3e237af25b54f5c6c882a17a34287fa488ed024f503c0e289d7d62897ba360ac_prof);

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
                <dd>{{ genus.funFact|markdownify }}</dd>
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
