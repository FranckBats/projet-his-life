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

/* contact/browse.html.twig */
class __TwigTemplate_cb847a6eb42acc78b3a5e1b3035feba63cf25e7403ed313006cca3c01795c5bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/browse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/browse.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "contact/browse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<section class=\"light-content our-team\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "danger"]], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "            <div class=\"alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " message-flash\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t
\t<div class=\"container\">
        
\t\t\t<div class=\"row\">
            
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">REPERTOIRE</h2> 
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_add");
        echo "\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div> <!-- /.section-header -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->

<table class=\"table table-hover\">
     <thead>
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Métier</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Famille</th>
            <th scope=\"col\">Modification</th>
            
        </tr>
     </thead>
     <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 44
            echo "        <tr>
            <th scope=\"row\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</th>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "job", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "family", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"large-button green-color\">Modifier</a></td>
            
        </tr>
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "     </tbody>
    </table>



</section> <!-- /.our-team -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 56,  167 => 51,  163 => 50,  159 => 49,  155 => 48,  151 => 47,  147 => 46,  143 => 45,  140 => 44,  136 => 43,  113 => 23,  103 => 15,  97 => 14,  88 => 11,  83 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}

{% block body %}



<section class=\"light-content our-team\">
\t\t{% for label, messages in app.flashes(['success', 'danger']) %}
        {% for message in messages %}
            <div class=\"alert-{{ label }} message-flash\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
\t
\t<div class=\"container\">
        
\t\t\t<div class=\"row\">
            
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">REPERTOIRE</h2> 
\t\t\t\t\t\t<a href=\"{{ path('contact_add') }}\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div> <!-- /.section-header -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->

<table class=\"table table-hover\">
     <thead>
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Métier</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Famille</th>
            <th scope=\"col\">Modification</th>
            
        </tr>
     </thead>
     <tbody>
        {% for contact in contacts %}
        <tr>
            <th scope=\"row\">{{contact.name}}</th>
            <td>{{contact.job}}</td>
            <td>{{contact.address}}</td>
            <td>{{contact.phone}}</td>
            <td>{{contact.email}}</td>
            <td>{{contact.family}}</td>
            <td><a href=\"{{path('contact_edit', {'id': contact.id})}}\" class=\"large-button green-color\">Modifier</a></td>
            
        </tr>
         
        {% endfor %}
     </tbody>
    </table>



</section> <!-- /.our-team -->

{# <div class=\"\">
    <div>
        <h1>Liste des Contacts</h1>
    </div>
    <a href=\"{{path('contact_add')}}\" class=\"btn btn-primary\">Ajouter un contact</a>

    <table class=\"table table-hover\">
     <thead>
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Job</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Famille</th>
            <th scope=\"col\">Modification</th>
        </tr>
     </thead>
     <tbody>
        {% for contact in contacts %}
        <tr>
            <th scope=\"row\">{{contact.name}}</th>
            <td>{{contact.job}}</td>
            <td>{{contact.address}}</td>
            <td>{{contact.phone}}</td>
            <td>{{contact.email}}</td>
            <td>{{contact.family}}</td>
            <td><a href=\"{{path('contact_edit', {'id': contact.id})}}\" class=\"btn btn-primary \">Modifier</a></td>
        </tr>
        {% endfor %}
     </tbody>
    </table>

    
</div> #}
{% endblock %}
", "contact/browse.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/contact/browse.html.twig");
    }
}
