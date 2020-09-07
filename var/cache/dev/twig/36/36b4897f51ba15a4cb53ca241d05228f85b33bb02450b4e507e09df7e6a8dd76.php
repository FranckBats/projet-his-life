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

/* evenement/show.html.twig */
class __TwigTemplate_bd989d314a37839ad41e6451349a95d74f53a9c1318444ccd318e7da5f7910e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "evenement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "\t<div class=\"alert alert-success\">
\t\t";
            // line 53
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

<section class=\"light-content our-team\">


\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2 class=\"section-title\">Calendrier</h2>
\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t</div>
\t\t\t\t<!-- /.section-header -->
\t\t\t</div>
\t\t\t<!-- /.col-md-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t<!-- /.container -->

\t
\t\t<div class=\"photo-card\">

\t\t\t

\t\t\t<div class=\"col-md-12 background-event\">
\t\t\t\t<div class=\"project-info\"></br>
\t\t\t\t<h3 class=\"project-title\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "</h3>
\t\t\t</br>
\t\t\t<span class=\"date\">Posté le:
\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 86, $this->source); })()), "createdAt", [], "any", false, false, false, 86), "d-m-Y"), "html", null, true);
        echo "</span>
\t\t</br>
\t</br>
\t<p class=\"description\">Description:
\t\t</p>

<div class=\"p-t-10\">
\t\t\t\t\t<a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color button-show-event\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>


\t\t\t\t</div>
</div><!-- /.project-info -->
</div>
</div>

</section><!-- /.our-team -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 93,  125 => 86,  119 => 83,  99 => 66,  87 => 56,  78 => 53,  75 => 52,  71 => 51,  68 => 50,  58 => 49,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}



{# {% block body %}
    <h1>Event</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ evenement.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ evenement.name }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ evenement.type }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ evenement.createdAt ? evenement.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ evenement.updatedAt ? evenement.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>BeginAt</th>
                <td>{{ evenement.beginAt ? evenement.beginAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>EndAt</th>
                <td>{{ evenement.endAt ? evenement.endAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>
    <a href=\"{{ path('evenement_index') }}\">back to list</a>

    <a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\">edit</a>
 #}


 
    {# {{ include('evenement/_delete_form.html.twig') }}
{% endblock %} #}

{% block body %}

{% for message in app.flashes('success') %}
\t<div class=\"alert alert-success\">
\t\t{{ message }}
\t</div>
{% endfor %}


<section class=\"light-content our-team\">


\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2 class=\"section-title\">Calendrier</h2>
\t\t\t\t\t<a href=\"{{ path('evenement_new') }}\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t</div>
\t\t\t\t<!-- /.section-header -->
\t\t\t</div>
\t\t\t<!-- /.col-md-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t<!-- /.container -->

\t
\t\t<div class=\"photo-card\">

\t\t\t

\t\t\t<div class=\"col-md-12 background-event\">
\t\t\t\t<div class=\"project-info\"></br>
\t\t\t\t<h3 class=\"project-title\">{{ evenement.name }}</h3>
\t\t\t</br>
\t\t\t<span class=\"date\">Posté le:
\t\t\t\t{{evenement.createdAt|date('d-m-Y')}}</span>
\t\t</br>
\t</br>
\t<p class=\"description\">Description:
\t\t</p>

<div class=\"p-t-10\">
\t\t\t\t\t<a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color button-show-event\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>


\t\t\t\t</div>
</div><!-- /.project-info -->
</div>
</div>

</section><!-- /.our-team -->
{% endblock %}
", "evenement/show.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/evenement/show.html.twig");
    }
}
