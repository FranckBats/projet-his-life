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

/* post/read.html.twig */
class __TwigTemplate_359db82a3fc48b515379ccf75cb423ad74e6990f17466b15edbc04237821e044 extends Template
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
        // line 25
        return "basedashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/read.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "post/read.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "
\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Message</h2>
\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_add");
        echo "\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>

\t\t\t<div class=\"col-md-8 blog-posts\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"post-blog\">

\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t<h3 class=\"titre\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t<span class=\"meta-date\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Le :";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 52, $this->source); })()), "createdAt", [], "any", false, false, false, 52), "d-m-Y"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"meta-author\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 55, $this->source); })()), "people", [], "any", false, false, false, 55), "firstname", [], "any", false, false, false, 55), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t\t<h4>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 57, $this->source); })()), "content", [], "any", false, false, false, 57), "html", null, true);
        echo "</h4>

                                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.blog-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.post-blog -->
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- /.blog-image -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-12 -->

\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.col-md-8 -->

\t\t</div>
\t\t<!-- /.col-md-4 -->

\t</div>
\t<!-- /.row -->
</div>
<!-- /.container -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 59,  110 => 57,  105 => 55,  99 => 52,  94 => 50,  78 => 37,  68 => 29,  58 => 28,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"row\">
    <h1>Message</h1>
</div>

<div class=\"row\">


    <div class=\"card col-3\">
        <a href=\"{{path('grade_browse')}}\" class=\"btn btn-primary\">Retour</a>
    <div class=\"card-body\">
        <h3 class=\"card-title\">{{ post.title }}</h3>
        <h4> {{post.content}} </h4>

        
    </div>
        <div class=\"card-btn\">
            <a href=\"{{ path('post_edit', {'id': post.id}) }}\" class=\"btn btn-primary\">Modifier</a>
            
        </div>
    </div>
{{ include('post/_delete_form.html.twig')}}
</div> #}


{% extends 'basedashboard.html.twig' %}


{% block body %}

\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Message</h2>
\t\t\t\t\t\t<a href=\"{{ path('note_add') }}\" class=\"large-button green-color\">Ajouter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>

\t\t\t<div class=\"col-md-8 blog-posts\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"post-blog\">

\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t<h3 class=\"titre\">{{ post.title }}</h3>
\t\t\t\t\t\t\t\t<span class=\"meta-date\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Le :{{post.createdAt|date('d-m-Y')}}</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"meta-author\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{post.people.firstname}}</a>
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t\t<h4>{{ post.content }}</h4>

                                <a href=\"{{ path('post_edit', {'id': post.id}) }}\" class=\"large-button-blanc white-color\">
\t\t\t\t\t\t<button class=\"large-button-blanc white-color\" type=\"submit\">Modifier</button>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.blog-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.post-blog -->
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- /.blog-image -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-12 -->

\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.col-md-8 -->

\t\t</div>
\t\t<!-- /.col-md-4 -->

\t</div>
\t<!-- /.row -->
</div>
<!-- /.container -->{% endblock %}
", "post/read.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/post/read.html.twig");
    }
}
