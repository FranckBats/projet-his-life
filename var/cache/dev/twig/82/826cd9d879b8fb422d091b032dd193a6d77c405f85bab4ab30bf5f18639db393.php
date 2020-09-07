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

/* post/browse.html.twig */
class __TwigTemplate_cbfdc3947f1611e57db5e78d389081cbaa7732e7a5f734672ec94b856fb2e298 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/browse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/browse.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "post/browse.html.twig", 1);
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

\t<section class=\"light-content our-team\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "danger"]], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "\t\t\t\t<div class=\"alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " message-flash\">
\t\t\t\t\t";
                // line 11
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mes Messages</h2>
\t\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_add");
        echo "\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t</div><!-- /.row -->
\t\t
\t\t\t\t
\t\t\t<div class=\"col-md\"><!-- /.col-md-12 -->

\t\t\t\t


\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "\t\t\t\t\t\t<div class=\"last-post clearfix\">
\t\t\t\t\t\t\t\t<div class=\"thumb pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_read", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"titre-message\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<span>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 42), "d-m-Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span>de
\t\t\t\t\t\t\t\t\t\t<strong class=\"family-name\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "people", [], "any", false, false, false, 44), "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t<span>dans la famille
\t\t\t\t\t\t\t\t\t\t<strong class=\"family-name\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "family", [], "any", false, false, false, 46), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t<h4>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 47), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t\t\t\t\t<button class=\"large-button purple\" type=\"submit\">Modifier</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- /.last-post -->
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t</div>\t<!-- /.container -->


\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 59,  166 => 51,  159 => 47,  155 => 46,  150 => 44,  145 => 42,  137 => 37,  133 => 36,  129 => 34,  125 => 33,  110 => 21,  102 => 15,  96 => 14,  87 => 11,  82 => 10,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}


{% block body %}


\t<section class=\"light-content our-team\">
\t\t{% for label, messages in app.flashes(['success', 'danger']) %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"alert-{{ label }} message-flash\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mes Messages</h2>
\t\t\t\t\t\t<a href=\"{{ path('post_add') }}\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t</div><!-- /.row -->
\t\t
\t\t\t\t
\t\t\t<div class=\"col-md\"><!-- /.col-md-12 -->

\t\t\t\t


\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t<div class=\"last-post clearfix\">
\t\t\t\t\t\t\t\t<div class=\"thumb pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('post_read', {'id': post.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"titre-message\">{{ post.title }}</h3>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<span>{{post.createdAt|date('d-m-Y')}}</span>
\t\t\t\t\t\t\t\t\t<span>de
\t\t\t\t\t\t\t\t\t\t<strong class=\"family-name\">{{post.people.firstname}}</strong></span>
\t\t\t\t\t\t\t\t\t<span>dans la famille
\t\t\t\t\t\t\t\t\t\t<strong class=\"family-name\">{{post.family}}</strong></span>
\t\t\t\t\t\t\t\t\t<h4>{{ post.content }}</h4>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('post_edit', {'id': post.id}) }}\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t\t\t\t\t<button class=\"large-button purple\" type=\"submit\">Modifier</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- /.last-post -->
\t\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t</div>\t<!-- /.container -->


\t\t{% endblock %}
", "post/browse.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/post/browse.html.twig");
    }
}
