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

/* people/profile.html.twig */
class __TwigTemplate_a3195ef364521c3a8568d5dbe5571e183e82969a14bca9fc4b77ff2aabc60860 extends Template
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
        // line 39
        return "basedashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "people/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "people/profile.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "people/profile.html.twig", 39);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "


<section class=\"light-content our-team\">
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "danger"]], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                echo "            <div class=\"alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " message-flash\">
                ";
                // line 50
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mon Profil </h2>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->

<div class=\"photo-card\">
<div class=\"photo-details boum\">
        <div class=\"\" style=\"display:flex;\">
            <div>
                <h1 style=\"color:#65C8D0; font-size: 30px;\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 73, $this->source); })()), "firstname", [], "any", false, false, false, 73), "html", null, true);
        echo "</h1>
                <h1 style=\"color:#65C8D0; font-size: 30px;\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 74, $this->source); })()), "lastname", [], "any", false, false, false, 74), "html", null, true);
        echo "</h1>
                <h2 style=\"color:#65C8D0; font-size: 15px;\">né le ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 75, $this->source); })()), "birthdate", [], "any", false, false, false, 75), "d/m/Y"), "html", null, true);
        echo "</h2>  
                <p style=\"color:white\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), "html", null, true);
        echo "</p></br>
            </div>
            <div class=\"thumb-post profile-picture\">
            ";
        // line 79
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 79, $this->source); })()), "picture", [], "any", false, false, false, 79))) {
            // line 80
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/../assets/images/profile.svg"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle\">
            ";
        } else {
            // line 82
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 82, $this->source); })()), "picture", [], "any", false, false, false, 82)), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle\">
            ";
        }
        // line 84
        echo "            </div>
        </div>
        <h1 style=\"color:#65C8D0; font-size: 30px;\">Mes familles:</h1>
\t\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 87, $this->source); })()), "families", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
            // line 88
            echo "\t\t\t\t\t    <p style=\"color:white; font-style: italic;\">";
            echo twig_escape_filter($this->env, $context["family"], "html", null, true);
            echo " </p>
                        <p style=\"color:white;\">Lien d'invitation pour cette famille :</p>
                        <p style=\"color:black\">http://ec2-34-227-161-244.compute-1.amazonaws.com/inscription?token=";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "token", [], "any", false, false, false, 90), "html", null, true);
            echo "</p>
                        </br>
\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo " 
        <h1 style=\"color:#65C8D0; font-size: 30px;\">Mes enfants:</h1>
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 94, $this->source); })()), "families", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
            // line 95
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["family"], "children", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 96
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("child_read", ["id" => twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                echo "\">
                        <p style=\"color:white; font-style: italic;\" class=\"col-3\"> ";
                // line 97
                echo twig_escape_filter($this->env, $context["child"], "html", null, true);
                echo " </p></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
</br>
                    <a class=\"photo-background\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("people_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\" style=\"margin-left:42% ;\">Editer Le Profil</button>
\t\t\t\t\t</a>
</div>
</div>

\t\t


</section>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "people/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 101,  206 => 99,  198 => 97,  193 => 96,  188 => 95,  184 => 94,  180 => 92,  171 => 90,  165 => 88,  161 => 87,  156 => 84,  150 => 82,  144 => 80,  142 => 79,  136 => 76,  132 => 75,  128 => 74,  124 => 73,  103 => 54,  97 => 53,  88 => 50,  83 => 49,  78 => 48,  74 => 47,  68 => 43,  58 => 42,  35 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'basedashboard.html.twig' coucou tata ca va tonton ? ouiiiiiii tes bien et toi ? la pataaaaaaate !!!! %}


{% block body %}

<h1>Mon compte</h1>

<dl class=\"row\">
    <dt class=\"col-3\">Prénom d'utilisateur</dt>
    <dd class=\"col-9\">{{ people.firstname }}</dd>
    <dt class=\"col-3\">Adresse e-mail</dt>
    <dd class=\"col-9\">{{ people.email }}</dd>
   
    <dt class=\"col-12\">Liste de familles</dt>
    {% for family in people.families %}
    <dd class=\"col-3\"> {{ family }} </li> </dd>
    <dt class=\"col-2\">Lien d'invitation :</dt>
    <dd class=\"col-7\">www.localhost:8080/register?token={{ family.token }}</dd> 
    {% endfor %}
    <dt class=\"col-12\">Liste des enfants</dt>
    {% for family in people.families %}
    {% for child in family.children %}
    <dd class=\"col-3\"> {{ child }} </dd>
    {% endfor %}
    {% endfor %}

</dl>
    <td><a href=\"{{path('people_edit')}}\" class=\"btn btn-primary \">Modifier mes informations personnelles</a></td>


\t<div class=\"card-btn\">
          {{ include('people/_delete_form.html.twig')}}
        </div>


{% endblock %} #}


{% extends 'basedashboard.html.twig' %}


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
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mon Profil </h2>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->

<div class=\"photo-card\">
<div class=\"photo-details boum\">
        <div class=\"\" style=\"display:flex;\">
            <div>
                <h1 style=\"color:#65C8D0; font-size: 30px;\">{{ people.firstname }}</h1>
                <h1 style=\"color:#65C8D0; font-size: 30px;\">{{ people.lastname }}</h1>
                <h2 style=\"color:#65C8D0; font-size: 15px;\">né le {{ people.birthdate|date(\"d/m/Y\") }}</h2>  
                <p style=\"color:white\">{{ people.email }}</p></br>
            </div>
            <div class=\"thumb-post profile-picture\">
            {% if (people.picture is null) %}
                <img src=\"{{ asset('/../assets/images/profile.svg')}}\" alt=\"\" class=\"img-circle\">
            {% else %}
                <img src=\"{{ asset(people.picture)}}\" alt=\"\" class=\"img-circle\">
            {% endif %}
            </div>
        </div>
        <h1 style=\"color:#65C8D0; font-size: 30px;\">Mes familles:</h1>
\t\t\t\t{% for family in people.families %}
\t\t\t\t\t    <p style=\"color:white; font-style: italic;\">{{ family }} </p>
                        <p style=\"color:white;\">Lien d'invitation pour cette famille :</p>
                        <p style=\"color:black\">http://ec2-34-227-161-244.compute-1.amazonaws.com/inscription?token={{ family.token }}</p>
                        </br>
\t\t\t\t\t {% endfor %} 
        <h1 style=\"color:#65C8D0; font-size: 30px;\">Mes enfants:</h1>
                    {% for family in people.families %}
                    {% for child in family.children %}
                    <a href=\"{{ path('child_read', {'id': child.id}) }}\">
                        <p style=\"color:white; font-style: italic;\" class=\"col-3\"> {{ child }} </p></a>
    {% endfor %}
    {% endfor %}  
</br>
                    <a class=\"photo-background\" href=\"{{ path('people_edit', {'id': people.id}) }}\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\" style=\"margin-left:42% ;\">Editer Le Profil</button>
\t\t\t\t\t</a>
</div>
</div>

\t\t


</section>





{% endblock %}
", "people/profile.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/people/profile.html.twig");
    }
}
