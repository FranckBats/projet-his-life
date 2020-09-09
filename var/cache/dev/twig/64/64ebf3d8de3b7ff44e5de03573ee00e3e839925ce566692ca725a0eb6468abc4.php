<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* note/index.html.twig */
class __TwigTemplate_44373de99e690abd9dd57857dd2d731bef094f53b72a2be24e034f0389e10b0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basedashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "note/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "


";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-success\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t

<section class=\"light-content our-team\">
\t\t
\t
\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">MOTS DES PROFESSEURS</h2> 
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_add");
        echo "\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div> <!-- /.section-header -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->


";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 38, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 39
            echo "\t<div class=\"container\">\t
\t\t<div class=\"row project-single\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"project-img\">
\t\t\t\t\t<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["note"], "file", [], "any", false, false, false, 43)), "html", null, true);
            echo "\" alt=\"Project Image 1\">
\t\t\t\t</div> <!-- /.project-img -->
\t\t\t</div> <!-- /.col-md-8 -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"project-info\">
\t\t\t\t\t<h3 class=\"project-title\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</h3>
\t\t\t\t\t<div class=\"btnchoice\">
\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"large-button green-color\">Modifier</a>
\t\t\t\t\t";
            // line 51
            echo twig_include($this->env, $context, "note/_delete_form.html.twig");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t</div> <!-- /.project-info -->
\t\t\t</div> <!-- /.col-md-4 -->
\t\t</div> <!-- /.row -->
\t</div> <!-- /.container -->\t
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t
\t </section> <!-- /.our-team -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 60,  176 => 56,  171 => 51,  167 => 50,  162 => 48,  154 => 43,  148 => 39,  131 => 38,  121 => 31,  108 => 20,  99 => 17,  96 => 16,  92 => 15,  87 => 12,  78 => 9,  75 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}



{% block body %}

{% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}



{% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}

\t

<section class=\"light-content our-team\">
\t\t
\t
\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">MOTS DES PROFESSEURS</h2> 
\t\t\t\t\t\t<a href=\"{{ path('note_add') }}\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div> <!-- /.section-header -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->


{% for note in notes %}
\t<div class=\"container\">\t
\t\t<div class=\"row project-single\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"project-img\">
\t\t\t\t\t<img src=\"{{asset(note.file)}}\" alt=\"Project Image 1\">
\t\t\t\t</div> <!-- /.project-img -->
\t\t\t</div> <!-- /.col-md-8 -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"project-info\">
\t\t\t\t\t<h3 class=\"project-title\">{{ note.name }}</h3>
\t\t\t\t\t<div class=\"btnchoice\">
\t\t\t\t\t<a href=\"{{ path('note_edit', {'id': note.id}) }}\" class=\"large-button green-color\">Modifier</a>
\t\t\t\t\t{{ include('note/_delete_form.html.twig')}}
\t\t\t\t\t</div>
\t\t\t\t\t{# <ul class=\"meta-post\">
\t\t\t\t\t\t<li><span>Date:</span>{{ healthbook.createdAt }}</li>
\t\t\t\t\t</ul> #}
\t\t\t\t</div> <!-- /.project-info -->
\t\t\t</div> <!-- /.col-md-4 -->
\t\t</div> <!-- /.row -->
\t</div> <!-- /.container -->\t
{% endfor %}\t
\t </section> <!-- /.our-team -->

{% endblock %}




", "note/index.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/note/index.html.twig");
    }
}
