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

/* picture/read.html.twig */
class __TwigTemplate_2f935ac54e44951da2a1e6992be7e0ad7a3fcdc2fe698c7e8b714dba6bb5821c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "picture/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "picture/read.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "picture/read.html.twig", 1);
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
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Galerie Photo</h2>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picture_add");
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
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t<span class=\"meta-date\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Le :";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 28, $this->source); })()), "createdAt", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"meta-author\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 31, $this->source); })()), "people", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t\t<p class=\"light-text\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.blog-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.post-blog -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"blog-image\">

\t\t\t\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 41, $this->source); })()), "file", [], "any", false, false, false, 41)), "html", null, true);
        echo "\" alt=\"\">

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
<!-- /.container -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "picture/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  110 => 33,  105 => 31,  99 => 28,  94 => 26,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}


{% block body %}

\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Galerie Photo</h2>
\t\t\t\t\t\t<a href=\"{{ path('picture_add') }}\" class=\"large-button green-color\">Ajouter</a>
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
\t\t\t\t\t\t\t\t<h3 class=\"titre\">{{ picture.title }}</h3>
\t\t\t\t\t\t\t\t<span class=\"meta-date\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Le :{{picture.createdAt|date('d-m-Y')}}</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"meta-author\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{picture.people.firstname}}</a>
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t\t<p class=\"light-text\">{{ picture.description }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.blog-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.post-blog -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"blog-image\">

\t\t\t\t\t\t\t<img src=\"{{asset(picture.file)}}\" alt=\"\">

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
", "picture/read.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/picture/read.html.twig");
    }
}
