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
        $__internal_d63d31bce932a8833289fba41bf6f6b3b12a99023b1d25a2974d59f4edcc16b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63d31bce932a8833289fba41bf6f6b3b12a99023b1d25a2974d59f4edcc16b2->enter($__internal_d63d31bce932a8833289fba41bf6f6b3b12a99023b1d25a2974d59f4edcc16b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63d31bce932a8833289fba41bf6f6b3b12a99023b1d25a2974d59f4edcc16b2->leave($__internal_d63d31bce932a8833289fba41bf6f6b3b12a99023b1d25a2974d59f4edcc16b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f5bf9d0177a1ea55cd46fe410121a894719a09765170a5bc88c46e1e8bde9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f5bf9d0177a1ea55cd46fe410121a894719a09765170a5bc88c46e1e8bde9b->enter($__internal_86f5bf9d0177a1ea55cd46fe410121a894719a09765170a5bc88c46e1e8bde9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()), "html", null, true);
        
        $__internal_86f5bf9d0177a1ea55cd46fe410121a894719a09765170a5bc88c46e1e8bde9b->leave($__internal_86f5bf9d0177a1ea55cd46fe410121a894719a09765170a5bc88c46e1e8bde9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfdcb26b4a8bca40fbbd56d2c433cde3ce6860f446ef3f443462b4b7c565f4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdcb26b4a8bca40fbbd56d2c433cde3ce6860f446ef3f443462b4b7c565f4fd->enter($__internal_bfdcb26b4a8bca40fbbd56d2c433cde3ce6860f446ef3f443462b4b7c565f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown($this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "funFact", array()));
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
        
        $__internal_bfdcb26b4a8bca40fbbd56d2c433cde3ce6860f446ef3f443462b4b7c565f4fd->leave($__internal_bfdcb26b4a8bca40fbbd56d2c433cde3ce6860f446ef3f443462b4b7c565f4fd_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_518ff617fb4425b61e07d5251aba400cde3ea08a2822b6405ce6ddbdce5b9586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518ff617fb4425b61e07d5251aba400cde3ea08a2822b6405ce6ddbdce5b9586->enter($__internal_518ff617fb4425b61e07d5251aba400cde3ea08a2822b6405ce6ddbdce5b9586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_518ff617fb4425b61e07d5251aba400cde3ea08a2822b6405ce6ddbdce5b9586->leave($__internal_518ff617fb4425b61e07d5251aba400cde3ea08a2822b6405ce6ddbdce5b9586_prof);

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
                <dd>{{ genus.funFact|markdown }}</dd>
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
