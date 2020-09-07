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

/* healthbook/browse.html.twig */
class __TwigTemplate_7b14af742d686a02c39cfb22c2a173b0717a554b0d42c4d914ee364ebe46c08c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "healthbook/browse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "healthbook/browse.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "healthbook/browse.html.twig", 1);
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
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2 class=\"section-title\">Santé</h2>
\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("healthbook_add");
        echo "\" class=\"large-button green-color\">Ajouter</a>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "\t<div class=\"alert alert-danger\">
\t";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.section-header -->
\t\t\t</div>
\t\t\t<!-- /.col-md-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t<!-- /.container -->

\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["healthbooks"]) || array_key_exists("healthbooks", $context) ? $context["healthbooks"] : (function () { throw new RuntimeError('Variable "healthbooks" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["healthbook"]) {
            // line 38
            echo "\t\t<div class=\"photo-card\">

\t\t\t<div class=\"photo-background\" style=\"background-image:url('";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["healthbook"], "file", [], "any", false, false, false, 40)), "html", null, true);
            echo "'); \"></div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"project-info\"></br>
\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("healthbook_read", ["id" => twig_get_attribute($this->env, $this->source, $context["healthbook"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
\t\t\t\t<h3 class=\"project-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["healthbook"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</h3></br>
\t\t\t\t<span style=\"color:white;\">Appartient à : ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["healthbook"], "child", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
\t\t\t\t</br>
\t\t\t<span class=\"date\">Posté le:
\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["healthbook"], "createdAt", [], "any", false, false, false, 48), "d-m-Y"), "html", null, true);
            echo "</span>
\t\t</br>
\t</br>
<div class=\"p-t-10\">
\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("healthbook_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["healthbook"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>


\t\t\t\t</div>
</div><!-- /.project-info -->
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['healthbook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</section><!-- /.our-team -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "healthbook/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 62,  177 => 52,  170 => 48,  164 => 45,  160 => 44,  156 => 43,  150 => 40,  146 => 38,  142 => 37,  131 => 28,  122 => 25,  119 => 24,  115 => 23,  111 => 22,  103 => 16,  97 => 15,  88 => 12,  83 => 11,  78 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
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

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2 class=\"section-title\">Santé</h2>
\t\t\t\t\t<a href=\"{{ path('healthbook_add') }}\" class=\"large-button green-color\">Ajouter</a>
{% for message in app.flashes('danger') %}
\t<div class=\"alert alert-danger\">
\t{{ message }}
\t</div>
{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- /.section-header -->
\t\t\t</div>
\t\t\t<!-- /.col-md-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t<!-- /.container -->

\t{% for healthbook in healthbooks %}
\t\t<div class=\"photo-card\">

\t\t\t<div class=\"photo-background\" style=\"background-image:url('{{asset(healthbook.file)}}'); \"></div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"project-info\"></br>
\t\t\t\t<a href=\"{{ path('healthbook_read', {'id': healthbook.id}) }}\">
\t\t\t\t<h3 class=\"project-title\">{{ healthbook.name }}</h3></br>
\t\t\t\t<span style=\"color:white;\">Appartient à : {{ healthbook.child }}</span>
\t\t\t\t</br>
\t\t\t<span class=\"date\">Posté le:
\t\t\t\t{{healthbook.createdAt|date('d-m-Y')}}</span>
\t\t</br>
\t</br>
<div class=\"p-t-10\">
\t\t\t\t\t<a href=\"{{ path('healthbook_edit', {'id': healthbook.id}) }}\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>


\t\t\t\t</div>
</div><!-- /.project-info -->
</div>
</div>
{% endfor %}
</section><!-- /.our-team -->
{% endblock %}
", "healthbook/browse.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/healthbook/browse.html.twig");
    }
}
