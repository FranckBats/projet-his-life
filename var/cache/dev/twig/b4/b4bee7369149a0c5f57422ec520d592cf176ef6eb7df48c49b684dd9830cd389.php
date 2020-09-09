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

/* note/browse.html.twig */
class __TwigTemplate_c9dc1fd4a38060a3b4f1e1a644779d632427c323f7c46bc4746e04b73718ce97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/browse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/browse.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "note/browse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


<section class=\"light-content our-team\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "danger"]], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " message-flash\">
                ";
                // line 12
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mots des Professeurs</h2>
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_add");
        echo "\" class=\"large-button green-color\">Ajouter</a>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "\t<div class=\"alert alert-danger\">
\t";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->

\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 39
            echo "\t\t\t<div class=\"photo-card\">
\t\t\t\t<div class=\"photo-background\" style=\"background-image:url('";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["note"], "file", [], "any", false, false, false, 40)), "html", null, true);
            echo "'); \">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"project-info\"></br>
\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_read", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
\t\t\t\t<h3 class=\"project-title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</h3></br>
\t\t\t\t<span style=\"color:white;\">Appartient à : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "child", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
\t\t\t</br>
\t\t\t<span class=\"date\">Posté le:
\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "createdAt", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true);
            echo "</span>
\t\t</br>
\t</br>
\t";
            // line 54
            echo "\t\t\t\t</a><div class=\"p-t-10\">
\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>

</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "note/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 65,  180 => 55,  177 => 54,  171 => 49,  165 => 46,  161 => 45,  157 => 44,  150 => 40,  147 => 39,  143 => 38,  132 => 29,  123 => 26,  120 => 25,  116 => 24,  112 => 23,  103 => 16,  97 => 15,  88 => 12,  83 => 11,  78 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}


{% block body %}



<section class=\"light-content our-team\">
{% for label, messages in app.flashes(['success', 'danger']) %}
        {% for message in messages %}
            <div class=\"alert-{{ label }} message-flash\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mots des Professeurs</h2>
\t\t\t\t\t\t<a href=\"{{ path('note_add') }}\" class=\"large-button green-color\">Ajouter</a>
{% for message in app.flashes('danger') %}
\t<div class=\"alert alert-danger\">
\t{{ message }}
\t</div>
{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->

\t\t{% for note in notes %}
\t\t\t<div class=\"photo-card\">
\t\t\t\t<div class=\"photo-background\" style=\"background-image:url('{{asset(note.file)}}'); \">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"project-info\"></br>
\t\t\t\t<a href=\"{{ path('note_read', {'id': note.id}) }}\">
\t\t\t\t<h3 class=\"project-title\">{{ note.name }}</h3></br>
\t\t\t\t<span style=\"color:white;\">Appartient à : {{ note.child }}</span>
\t\t\t</br>
\t\t\t<span class=\"date\">Posté le:
\t\t\t\t{{note.createdAt|date('d-m-Y')}}</span>
\t\t</br>
\t</br>
\t{# <p class=\"description\">Description:
\t\t{{ note.description }}</p> #}
\t\t\t\t</a><div class=\"p-t-10\">
\t\t\t\t\t<a href=\"{{ path('note_edit', {'id': note.id}) }}\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>

</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t{% endfor %}


</section>

{% endblock %}








", "note/browse.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/note/browse.html.twig");
    }
}
