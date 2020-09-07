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

/* child/read.html.twig */
class __TwigTemplate_824f72a9b12df35ce0ae6ea8514dd3e195f5617041c74966cd73ae5b0a7da017 extends Template
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
        // line 3
        return "basedashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "child/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "child/read.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "child/read.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mes enfants</h2>
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("child_create");
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
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 28, $this->source); })()), "firstname", [], "any", false, false, false, 28), "html", null, true);
        echo "</h3>
                                <h2 class=\"titre\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 29, $this->source); })()), "lastname", [], "any", false, false, false, 29), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<span class=\"meta-date\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Le :";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 31, $this->source); })()), "birthdate", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"meta-author\">
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.blog-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.post-blog -->
\t\t\t\t\t\t<div class=\"blog-image\">
\t\t\t\t\t\t\t";
        // line 40
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 40, $this->source); })()), "picture", [], "any", false, false, false, 40))) {
            // line 41
            echo "\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/../assets/images/enfantbase.jpg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo " 
\t\t\t\t\t\t\t<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 43, $this->source); })()), "picture", [], "any", false, false, false, 43)), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t</div>
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
        return "child/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  126 => 43,  123 => 42,  117 => 41,  115 => 40,  103 => 31,  98 => 29,  94 => 28,  78 => 15,  68 => 7,  58 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'basedashboard.html.twig' %}


{% block body %}

\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Mes enfants</h2>
\t\t\t\t\t\t<a href=\"{{ path('child_create') }}\" class=\"large-button green-color\">Ajouter</a>
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
\t\t\t\t\t\t\t\t<h3 class=\"titre\">{{ child.firstname }}</h3>
                                <h2 class=\"titre\">{{ child.lastname }}</h2>
\t\t\t\t\t\t\t\t<span class=\"meta-date\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Le :{{child.birthdate|date('d-m-Y')}}</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"meta-author\">
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.blog-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.post-blog -->
\t\t\t\t\t\t<div class=\"blog-image\">
\t\t\t\t\t\t\t{% if (child.picture is null) %}
\t\t\t\t\t\t\t<img src=\"{{asset('/../assets/images/enfantbase.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t<img src=\"{{asset(child.picture)}}\" alt=\"\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
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
", "child/read.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/child/read.html.twig");
    }
}
