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

/* home/dashboard.html.twig */
class __TwigTemplate_cb3b25c5efb1770fe8e3404982a1708bf9ebeef8c45057c24cd4af1e440d7e3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "home/dashboard.html.twig", 1);
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

\t\t\t\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">TABLEAU DE BORD</h2> 
\t\t\t\t\t";
        // line 12
        if ((isset($context["families"]) || array_key_exists("families", $context))) {
            // line 13
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<select class=\"custom-select\" id=\"selectType\">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["families"]) || array_key_exists("families", $context) ? $context["families"] : (function () { throw new RuntimeError('Variable "families" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
                // line 16
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["family"], "children", [], "any", true, true, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["family"], "children", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 18), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "firstname", [], "any", false, false, false, 18), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t</div>  
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div> 
\t\t<!-- /.container -->
\t\t<div class=\"team-members\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\"><h4 class=\"member-name\">Calendrier</h4></a></br>
\t\t\t\t\t\t\t\t    <h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_lastPost\"></span></br></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_name\"></span></p></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Genre: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_type\"></p><br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Début de l'événement: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_beginAt\"></p></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\">Fin de l'événement:   </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_endAt\"></p></br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img id=\"selectedChildLastEvent_img\" src=\"\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Vie Scolaire</h4>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildSchoolEvent_lastPost\"></span></p>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildSchoolEvent_name\"></span></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<a id=\"selectedChildSchoolEvent_detail\" href=\"\"><img id=\"selectedChildSchoolEvent_img\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ecoleprimaire.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Galerie Photo</h4>
\t\t\t\t\t\t\t\t    <h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t\t<p><span id=\"selectedChildLastFamilyPicture_lastPost\"></span></h6></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t\t<p><span id=\"selectedChildLastFamilyPicture_title\"></span></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picture");
        echo "\"><img id=\"selectedChildLastFamilyPicture_img\" src=\"assets/images/includes/member3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Santé</h4>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t<h6><span id=\"selectedChildHealthEvent\"></span></h6></br>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildHealthEvent_name\"></span></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("healthbook_browse");
        echo "\"><img id=\"selectedChildHealthEvent_img\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/sante.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t\t

\t\t\t\t</div>
\t\t\t\t<!-- /.row -->

\t\t\t</div>
\t\t\t<!-- /.container -->
\t\t</div>
\t\t<!-- /.team-members -->
\t</section>
\t<!-- /.our-team -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 121,  232 => 103,  208 => 82,  173 => 50,  167 => 46,  158 => 43,  155 => 42,  150 => 41,  141 => 38,  138 => 37,  134 => 36,  120 => 24,  116 => 22,  110 => 21,  107 => 20,  96 => 18,  91 => 17,  88 => 16,  84 => 15,  80 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}

{% block body %}


\t\t\t\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">TABLEAU DE BORD</h2> 
\t\t\t\t\t{% if families is defined %}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<select class=\"custom-select\" id=\"selectType\">
\t\t\t\t\t{% for family in families %}
\t\t\t\t\t\t\t{% if family.children is defined %}
\t\t\t\t\t\t\t{% for child in family.children %}
\t\t\t\t\t\t\t<option value=\"{{child.id}}\">{{child.firstname}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>  
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div> 
\t\t<!-- /.container -->
\t\t<div class=\"team-members\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('evenement_index') }}\"><h4 class=\"member-name\">Calendrier</h4></a></br>
\t\t\t\t\t\t\t\t    <h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_lastPost\"></span></br></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_name\"></span></p></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Genre: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_type\"></p><br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Début de l'événement: </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_beginAt\"></p></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\">Fin de l'événement:   </h5>
\t\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildLastEvent_endAt\"></p></br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img id=\"selectedChildLastEvent_img\" src=\"\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Vie Scolaire</h4>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildSchoolEvent_lastPost\"></span></p>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildSchoolEvent_name\"></span></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<a id=\"selectedChildSchoolEvent_detail\" href=\"\"><img id=\"selectedChildSchoolEvent_img\" src=\"{{ asset('assets/images/ecoleprimaire.jpg') }}\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Galerie Photo</h4>
\t\t\t\t\t\t\t\t    <h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t\t<p><span id=\"selectedChildLastFamilyPicture_lastPost\"></span></h6></br>
\t\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t\t<p><span id=\"selectedChildLastFamilyPicture_title\"></span></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('picture')}}\"><img id=\"selectedChildLastFamilyPicture_img\" src=\"assets/images/includes/member3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-md-6 col-sm-12 center-block\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Santé</h4>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Posté le: </h5>
\t\t\t\t\t\t\t\t<h6><span id=\"selectedChildHealthEvent\"></span></h6></br>
\t\t\t\t\t\t\t\t<h5 class=\"titre\"> Titre: </h5>
\t\t\t\t\t\t\t\t<p> <span id=\"selectedChildHealthEvent_name\"></span></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('healthbook_browse')}}\"><img id=\"selectedChildHealthEvent_img\" src=\"{{ asset('assets/images/sante.jpg') }}\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.team-member -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col-md-4 -->
\t\t\t\t\t

\t\t\t\t</div>
\t\t\t\t<!-- /.row -->

\t\t\t</div>
\t\t\t<!-- /.container -->
\t\t</div>
\t\t<!-- /.team-members -->
\t</section>
\t<!-- /.our-team -->

{% endblock %}", "home/dashboard.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/home/dashboard.html.twig");
    }
}
