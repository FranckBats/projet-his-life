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

/* basedashboard.html.twig */
class __TwigTemplate_b85c70645ecab36308568d0ccb43f6ba99100aeb5360d1b5cfcc24fda34b1232 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basedashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basedashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\"/>
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>

\t\t<link rel=\"stylesheet\" href=\"../../assets/bootstrap/bootstrap.css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/misc.css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/blue-scheme.css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/main.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/cards.css\" media=\"all\">
\t\t<!-- JavaScripts -->
\t\t<script src=\"../../assets/js/jquery-1.10.2.min.js\"></script>
\t\t<script src=\"../../assets/js/jquery-migrate-1.2.1.min.js\"></script>

        <script src=\"https://use.fontawesome.com/053bf391bc.js\"></script>
\t\t<link rel=\"shortcut icon\" href=\"../../assets/images/favicon.ico\" type=\"image/x-icon\" />

\t\t";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "\t</head>
\t<body>
\t\t<div class=\"responsive_menu\">
\t\t\t<ul class=\"main_menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">Vie Scolaire</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_browse");
        echo "\">Mots des Professeurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grade_browse");
        echo "\">Bulletin de note</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("healthbook_browse");
        echo "\">Santé</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picture");
        echo "\">Galerie photo</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_browse");
        echo "\">Répertoire</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\">Calendrier</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_browse");
        echo "\">Message</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "firstname", [], "any", false, false, false, 55), "html", null, true);
        echo "</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("people_profile");
            echo "\">Mon Profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("child_profile");
            echo "\">Profil Enfant</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family_profile");
            echo "\">Famille</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- /.main_menu -->
\t\t</div>
\t\t<!-- /.responsive_menu -->

\t\t<header class=\"site-header clearfix\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<div class=\"pull-left logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"../../assets/images/includes/logo.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.logo -->

\t\t\t\t\t\t<div class=\"main-navigation pull-right\">

\t\t\t\t\t\t\t<nav class=\"main-nav visible-md visible-lg\">
\t\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Vie Scolaire</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_browse");
        echo "\">Mots des Professeurs</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grade_browse");
        echo "\">Bulletin de note</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("healthbook_browse");
        echo "\">Santé</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picture");
        echo "\">Galerie photo</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_browse");
        echo "\">Répertoire</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\">Calendrier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_browse");
        echo "\">Message</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("people_profile");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "firstname", [], "any", false, false, false, 125), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 127
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127)) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("people_profile");
            echo "\">Mon Profil</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("child_profile");
            echo "\">Profil Enfant</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family_profile");
            echo "\">Famille</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- /.sf-menu -->
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- /.main-nav -->


\t\t\t\t\t\t<!-- This one in here is responsive menu for tablet and mobiles -->
\t\t\t\t\t\t<div class=\"responsive-navigation visible-sm visible-xs\">
\t\t\t\t\t\t\t<a href=\"#nogo\" class=\"menu-toggle-btn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars fa-7x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /responsive_navigation -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.main-navigation -->

\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->

\t\t\t</div>
\t\t\t<!-- /.row -->

\t\t</div>
\t\t<!-- /.container -->
\t</body>
</html></header><!-- /.site-header -->

\t";
        // line 172
        $this->displayBlock('body', $context, $blocks);
        // line 173
        echo "\t<footer class=\"site-footer\">
<div class=\"container\">

\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"footer-nav clearfix\">
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_about");
        echo "\">Notre équipe</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_contact_us");
        echo "\">Nous contacter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_mentions_legales");
        echo "\">Mentions légales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- /.footer-menu -->
\t\t\t</nav>
\t\t\t<!-- /.footer-nav -->
\t\t</div>
\t\t<!-- /.col-md-12 -->
\t</div>
\t<!-- /.row -->
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<p class=\"copyright-text\">Droits d'auteur &copy; HISLIFE
\t\t\t</p>
\t\t</div>
\t\t<!-- /.col-md-12 -->
\t</div>
\t<!-- /.row -->
</div>
<!-- /.container --></footer>

<script src=\"../../assets/js/min/plugins.min.js\"></script>
<script src=\"../../assets/js/min/medigo-custom.min.js\"></script>


<script src=\"../../assets/jsinsc/select2/select2.min.js\"></script>
<script src=\"../../assets/jsinsc/datepicker/moment.min.js\"></script>
<script src=\"../../assets/jsinsc/datepicker/daterangepicker.js\"></script>

<script src=\"../../assets/js/global.js\"></script> 
<!-- jQuery CDN - -->
";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 635
        echo "</body></html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "His Life
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"../../assets/js/moment-with-locales.js\"></script> 


<script type=\"text/javascript\">
\twindow.addEventListener('DOMContentLoaded', function (e) {
var idSelect = 0;
\$.ajax({
url: '";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_action");
        echo "',
type: \"POST\",
dataType: \"json\",
data: {
\"idSelect\": idSelect

},
async: true,
success: function test(data) {

moment.locale('fr');
";
        // line 238
        echo " 
";
        // line 240
        echo "
let selectedChildSchoolEvent_lastPost = document.getElementById('selectedChildSchoolEvent_lastPost');

if (data.lastSchoolEventArray.created_at !== undefined) {

let date = data.lastSchoolEventArray.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');
selectedChildSchoolEvent_lastPost.textContent = date;

} else {
selectedChildSchoolEvent_lastPost.textContent = ''
}

";
        // line 254
        echo "
let selectedChildSchoolEvent_name = document.getElementById('selectedChildSchoolEvent_name')
selectedChildSchoolEvent_name.textContent = data.lastSchoolEventArray.name

if (data.lastSchoolEventArray.name === undefined) {
selectedChildSchoolEvent_name.textContent = 'Aucun entrée dans vie scolaire'
}

";
        // line 263
        echo "let selectedChildSchoolEvent_img = document.getElementById('selectedChildSchoolEvent_img');

if (data.lastSchoolEventArray.file !== undefined) {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = data.lastSchoolEventArray.file;
} else {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = '../assets/images/ecoleprimaire.jpg'
}

";
        // line 274
        echo "let selectedChildSchoolEvent_detail = document.getElementById('selectedChildSchoolEvent_detail');
let selectedChildSchoolEvent_button_href = selectedChildSchoolEvent_detail.attributes[1]
if (data.lastSchoolEventArray.type === 'grade') {
selectedChildSchoolEvent_button_href.textContent = '";
        // line 277
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grade_browse");
        echo "'
}
else {
selectedChildSchoolEvent_button_href.textContent = '";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_browse");
        echo "'
}


";
        // line 284
        echo " 
";
        // line 286
        echo "
let selectedChildHealthEvent = document.getElementById('selectedChildHealthEvent');

if (data.lastHealthbook.created_at !== undefined) {
let date = data.lastHealthbook.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildHealthEvent.textContent = date;
} else {
selectedChildHealthEvent.textContent = '';
}


";
        // line 299
        echo "
let selectedChildHealthEvent_name = document.getElementById('selectedChildHealthEvent_name')
selectedChildHealthEvent_name.textContent = data.lastHealthbook.name

if (data.lastHealthbook.name === undefined) {
selectedChildHealthEvent_name.textContent = 'Aucune entrée dans Santé'
}

";
        // line 308
        echo "
let selectedChildHealthEvent_img = document.getElementById('selectedChildHealthEvent_img');

if (data.lastHealthbook.file !== undefined) {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = data.lastHealthbook.file;
} else {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = '../assets/images/sante.jpg'
}

";
        // line 320
        echo "
let selectedChildLastFamilyPicture_title = document.getElementById('selectedChildLastFamilyPicture_title')
selectedChildLastFamilyPicture_title.textContent = data.lastFamilyPicture.title

if (data.lastFamilyPicture.title === undefined) {
selectedChildLastFamilyPicture_title.textContent = 'Aucune photo récente postée'
}

";
        // line 329
        echo "
let selectedChildLastFamilyPicture_lastPost = document.getElementById('selectedChildLastFamilyPicture_lastPost');

if (data.lastFamilyPicture.created_at !== undefined) {

let date = data.lastFamilyPicture.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastFamilyPicture_lastPost.textContent = date;

} else {
selectedChildLastFamilyPicture_lastPost.textContent = '';
}

";
        // line 343
        echo "
let selectedChildLastFamilyPicture_img = document.getElementById('selectedChildLastFamilyPicture_img');

if (data.lastFamilyPicture.file !== undefined) {
let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];
selectedChildLastFamilyPicture_img_src.value = data.lastFamilyPicture.file;
} 
else {

let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];

selectedChildLastFamilyPicture_img_src.value = '../assets/images/includes/member3.jpg'
}

";
        // line 358
        echo "
let selectedChildLastEvent_name = document.getElementById('selectedChildLastEvent_name')
selectedChildLastEvent_name.textContent = data.lastFamilyEvent.name

if (data.lastFamilyEvent.name === undefined) {
selectedChildLastEvent_name.textContent = 'Aucune entrée dans le calendrier'
}

";
        // line 367
        echo "
let selectedChildLastEvent_type = document.getElementById('selectedChildLastEvent_type')
selectedChildLastEvent_type.textContent = data.lastFamilyEvent.type

if (data.lastFamilyEvent.type === undefined) {
selectedChildLastEvent_type.textContent = ''
}

";
        // line 376
        echo "
let selectedChildLastEvent_lastPost = document.getElementById('selectedChildLastEvent_lastPost');

if (data.lastFamilyEvent.created_at !== undefined) {

let date = data.lastFamilyEvent.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_lastPost.textContent = date;

}

";
        // line 388
        echo "
let selectedChildLastEvent_beginAt = document.getElementById('selectedChildLastEvent_beginAt')
let selectedChildLastEvent_img = document.getElementById('selectedChildLastEvent_img');
let selectedChildLastEvent_img_src = selectedChildLastEvent_img.attributes[1];

if (data.lastFamilyEvent.begin_at !== undefined) {

let date = data.lastFamilyEvent.begin_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_beginAt.textContent = date;

selectedChildLastEvent_img_src.value = '';
}

else {
selectedChildLastEvent_beginAt.textContent = ''
selectedChildLastEvent_img_src.value = '';
}

";
        // line 408
        echo "
let selectedChildLastEvent_endAt = document.getElementById('selectedChildLastEvent_endAt')

if (data.lastFamilyEvent.end_at !== undefined) {

let date = data.lastFamilyEvent.end_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_endAt.textContent = date;

}

else {
selectedChildLastEvent_endAt.textContent = ''
}

}
})});
</script>


<script type=\"text/javascript\">
\t\$('#selectType').on('change', function (e) {
var idSelect = e.currentTarget.value;

console.log(e);
\$.ajax({
url: '";
        // line 434
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_action");
        echo "',
type: \"POST\",
dataType: \"json\",
data: {
\"idSelect\": idSelect
},

async: true,
success: function test(data) {

";
        // line 446
        echo "
let selectedChildSchoolEvent_lastPost = document.getElementById('selectedChildSchoolEvent_lastPost');

if (data.lastSchoolEventArray.created_at !== undefined) {

let date = data.lastSchoolEventArray.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');
selectedChildSchoolEvent_lastPost.textContent = date;

} else {
selectedChildSchoolEvent_lastPost.textContent = ''
}

";
        // line 460
        echo "
let selectedChildSchoolEvent_name = document.getElementById('selectedChildSchoolEvent_name')
selectedChildSchoolEvent_name.textContent = data.lastSchoolEventArray.name

if (data.lastSchoolEventArray.name === undefined) {
selectedChildSchoolEvent_name.textContent = 'Aucun entrée dans vie scolaire'
}

";
        // line 469
        echo "let selectedChildSchoolEvent_img = document.getElementById('selectedChildSchoolEvent_img');

if (data.lastSchoolEventArray.file !== undefined) {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = data.lastSchoolEventArray.file;
} else {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = '../../assets/images/ecoleprimaire.jpg'
}

";
        // line 480
        echo "let selectedChildSchoolEvent_detail = document.getElementById('selectedChildSchoolEvent_detail');
let selectedChildSchoolEvent_button_href = selectedChildSchoolEvent_detail.attributes[1]
if (data.lastSchoolEventArray.type === 'grade') {
selectedChildSchoolEvent_button_href.textContent = '";
        // line 483
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("grade_browse");
        echo "'
}
else {
selectedChildSchoolEvent_button_href.textContent = '";
        // line 486
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note_browse");
        echo "'
}


";
        // line 490
        echo " 
";
        // line 492
        echo "
let selectedChildHealthEvent = document.getElementById('selectedChildHealthEvent');

if (data.lastHealthbook.created_at !== undefined) {

let date = data.lastHealthbook.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildHealthEvent.textContent = date;

} else {
selectedChildHealthEvent.textContent = '';
}


";
        // line 507
        echo "
let selectedChildHealthEvent_name = document.getElementById('selectedChildHealthEvent_name')
selectedChildHealthEvent_name.textContent = data.lastHealthbook.name

if (data.lastHealthbook.name === undefined) {
selectedChildHealthEvent_name.textContent = 'Aucune entrée dans Santé'
}

";
        // line 516
        echo "
let selectedChildHealthEvent_img = document.getElementById('selectedChildHealthEvent_img');

if (data.lastHealthbook.file !== undefined) {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = data.lastHealthbook.file;
} else {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = '../../assets/images/sante.jpg'
}


";
        // line 529
        echo "
let selectedChildLastFamilyPicture_title = document.getElementById('selectedChildLastFamilyPicture_title')
selectedChildLastFamilyPicture_title.textContent = data.lastFamilyPicture.title

if (data.lastFamilyPicture.title === undefined) {
selectedChildLastFamilyPicture_title.textContent = 'Aucune photo récente postée'
}

";
        // line 538
        echo "
let selectedChildLastFamilyPicture_lastPost = document.getElementById('selectedChildLastFamilyPicture_lastPost');

if (data.lastFamilyPicture.created_at !== undefined) {

let date = data.lastFamilyPicture.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastFamilyPicture_lastPost.textContent = date;

} else {
selectedChildLastFamilyPicture_lastPost.textContent = '';
}

";
        // line 552
        echo "
let selectedChildLastFamilyPicture_img = document.getElementById('selectedChildLastFamilyPicture_img');

if (data.lastFamilyPicture.file !== undefined) {
let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];
selectedChildLastFamilyPicture_img_src.value = data.lastFamilyPicture.file;
} 
else {

let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];

selectedChildLastFamilyPicture_img_src.value = '../assets/images/includes/member3.jpg'
}

";
        // line 567
        echo "
let selectedChildLastEvent_name = document.getElementById('selectedChildLastEvent_name')
selectedChildLastEvent_name.textContent = data.lastFamilyEvent.name

if (data.lastFamilyEvent.name === undefined) {
selectedChildLastEvent_name.textContent = 'Aucune entrée dans le calendrier'
}

";
        // line 576
        echo "
let selectedChildLastEvent_lastPost = document.getElementById('selectedChildLastEvent_lastPost');

if (data.lastFamilyEvent.created_at !== undefined) {

let date = data.lastFamilyEvent.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_lastPost.textContent = date;
}

";
        // line 587
        echo "
let selectedChildLastEvent_type = document.getElementById('selectedChildLastEvent_type')
selectedChildLastEvent_type.textContent = data.lastFamilyEvent.type

if (data.lastFamilyEvent.type === undefined) {
selectedChildLastEvent_type.textContent = ''
}

";
        // line 596
        echo "
let selectedChildLastEvent_beginAt = document.getElementById('selectedChildLastEvent_beginAt')
let selectedChildLastEvent_img = document.getElementById('selectedChildLastEvent_img');
let selectedChildLastEvent_img_src = selectedChildLastEvent_img.attributes[1];

if (data.lastFamilyEvent.begin_at !== undefined) {

let date = data.lastFamilyEvent.begin_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_beginAt.textContent = date;

selectedChildLastEvent_img_src.value = '';
}

else {
selectedChildLastEvent_beginAt.textContent = ''
selectedChildLastEvent_img_src.value = '';
}

";
        // line 616
        echo "
let selectedChildLastEvent_endAt = document.getElementById('selectedChildLastEvent_endAt')

if (data.lastFamilyEvent.end_at !== undefined) {

let date = data.lastFamilyEvent.end_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_endAt.textContent = date;

}

else {
selectedChildLastEvent_endAt.textContent = ''
}


}
})});
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basedashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  898 => 616,  877 => 596,  867 => 587,  855 => 576,  845 => 567,  829 => 552,  814 => 538,  804 => 529,  790 => 516,  780 => 507,  764 => 492,  761 => 490,  754 => 486,  748 => 483,  743 => 480,  731 => 469,  721 => 460,  706 => 446,  693 => 434,  665 => 408,  644 => 388,  631 => 376,  621 => 367,  611 => 358,  595 => 343,  580 => 329,  570 => 320,  557 => 308,  547 => 299,  533 => 286,  530 => 284,  523 => 280,  517 => 277,  512 => 274,  500 => 263,  490 => 254,  475 => 240,  472 => 238,  458 => 227,  448 => 219,  438 => 218,  420 => 172,  402 => 23,  382 => 7,  372 => 635,  370 => 218,  336 => 187,  330 => 184,  324 => 181,  314 => 173,  312 => 172,  280 => 142,  274 => 139,  267 => 135,  261 => 132,  255 => 129,  252 => 128,  250 => 127,  243 => 125,  237 => 122,  231 => 119,  225 => 116,  219 => 113,  213 => 110,  204 => 104,  198 => 101,  181 => 87,  164 => 72,  158 => 69,  151 => 65,  145 => 62,  139 => 59,  136 => 58,  134 => 57,  129 => 55,  123 => 52,  117 => 49,  111 => 46,  105 => 43,  99 => 40,  91 => 35,  85 => 32,  75 => 24,  73 => 23,  57 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\"/>
\t\t<title>
\t\t\t{% block title %}His Life
\t\t\t{% endblock %}
\t\t</title>

\t\t<link rel=\"stylesheet\" href=\"../../assets/bootstrap/bootstrap.css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/misc.css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/blue-scheme.css\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/main.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" href=\"../../assets/css/cards.css\" media=\"all\">
\t\t<!-- JavaScripts -->
\t\t<script src=\"../../assets/js/jquery-1.10.2.min.js\"></script>
\t\t<script src=\"../../assets/js/jquery-migrate-1.2.1.min.js\"></script>

        <script src=\"https://use.fontawesome.com/053bf391bc.js\"></script>
\t\t<link rel=\"shortcut icon\" href=\"../../assets/images/favicon.ico\" type=\"image/x-icon\" />

\t\t{% block stylesheets %}{% endblock %}
\t</head>
\t<body>
\t\t<div class=\"responsive_menu\">
\t\t\t<ul class=\"main_menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">Vie Scolaire</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('note_browse')}}\">Mots des Professeurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('grade_browse')}}\">Bulletin de note</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('healthbook_browse') }}\">Santé</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('picture')}}\">Galerie photo</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('contact_browse')}}\">Répertoire</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('evenement_index') }}\">Calendrier</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('post_browse')}}\">Message</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"\">{{ app.user.firstname }}</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('people_profile')}}\">Mon Profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('child_profile')}}\">Profil Enfant</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('family_profile') }}\">Famille</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- /.main_menu -->
\t\t</div>
\t\t<!-- /.responsive_menu -->

\t\t<header class=\"site-header clearfix\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<div class=\"pull-left logo\">
\t\t\t\t\t\t\t<a href=\"{{ path('dashboard') }}\">
\t\t\t\t\t\t\t\t<img src=\"../../assets/images/includes/logo.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.logo -->

\t\t\t\t\t\t<div class=\"main-navigation pull-right\">

\t\t\t\t\t\t\t<nav class=\"main-nav visible-md visible-lg\">
\t\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Vie Scolaire</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('note_browse')}}\">Mots des Professeurs</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('grade_browse')}}\">Bulletin de note</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('healthbook_browse') }}\">Santé</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('picture')}}\">Galerie photo</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('contact_browse')}}\">Répertoire</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('evenement_index') }}\">Calendrier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('post_browse')}}\">Message</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('people_profile')}}\">{{ app.user.firstname }}</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('people_profile')}}\">Mon Profil</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('child_profile')}}\">Profil Enfant</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('family_profile') }}\">Famille</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- /.sf-menu -->
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- /.main-nav -->


\t\t\t\t\t\t<!-- This one in here is responsive menu for tablet and mobiles -->
\t\t\t\t\t\t<div class=\"responsive-navigation visible-sm visible-xs\">
\t\t\t\t\t\t\t<a href=\"#nogo\" class=\"menu-toggle-btn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars fa-7x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /responsive_navigation -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.main-navigation -->

\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->

\t\t\t</div>
\t\t\t<!-- /.row -->

\t\t</div>
\t\t<!-- /.container -->
\t</body>
</html></header><!-- /.site-header -->

\t{% block body %}{% endblock %}
\t<footer class=\"site-footer\">
<div class=\"container\">

\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"footer-nav clearfix\">
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('dashboard_about') }}\">Notre équipe</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('dashboard_contact_us') }}\">Nous contacter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('dashboard_mentions_legales') }}\">Mentions légales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- /.footer-menu -->
\t\t\t</nav>
\t\t\t<!-- /.footer-nav -->
\t\t</div>
\t\t<!-- /.col-md-12 -->
\t</div>
\t<!-- /.row -->
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<p class=\"copyright-text\">Droits d'auteur &copy; HISLIFE
\t\t\t</p>
\t\t</div>
\t\t<!-- /.col-md-12 -->
\t</div>
\t<!-- /.row -->
</div>
<!-- /.container --></footer>

<script src=\"../../assets/js/min/plugins.min.js\"></script>
<script src=\"../../assets/js/min/medigo-custom.min.js\"></script>


<script src=\"../../assets/jsinsc/select2/select2.min.js\"></script>
<script src=\"../../assets/jsinsc/datepicker/moment.min.js\"></script>
<script src=\"../../assets/jsinsc/datepicker/daterangepicker.js\"></script>

<script src=\"../../assets/js/global.js\"></script> 
<!-- jQuery CDN - -->
{% block javascripts %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"../../assets/js/moment-with-locales.js\"></script> 


<script type=\"text/javascript\">
\twindow.addEventListener('DOMContentLoaded', function (e) {
var idSelect = 0;
\$.ajax({
url: '{{ path('ajax_action') }}',
type: \"POST\",
dataType: \"json\",
data: {
\"idSelect\": idSelect

},
async: true,
success: function test(data) {

moment.locale('fr');
{# SCHOOL BLOCK #} 
{# SCHOOL - LASTPOST = created_at #}

let selectedChildSchoolEvent_lastPost = document.getElementById('selectedChildSchoolEvent_lastPost');

if (data.lastSchoolEventArray.created_at !== undefined) {

let date = data.lastSchoolEventArray.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');
selectedChildSchoolEvent_lastPost.textContent = date;

} else {
selectedChildSchoolEvent_lastPost.textContent = ''
}

{# SCHOOL - NAME #}

let selectedChildSchoolEvent_name = document.getElementById('selectedChildSchoolEvent_name')
selectedChildSchoolEvent_name.textContent = data.lastSchoolEventArray.name

if (data.lastSchoolEventArray.name === undefined) {
selectedChildSchoolEvent_name.textContent = 'Aucun entrée dans vie scolaire'
}

{# SCHOOL - FILE #}
let selectedChildSchoolEvent_img = document.getElementById('selectedChildSchoolEvent_img');

if (data.lastSchoolEventArray.file !== undefined) {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = data.lastSchoolEventArray.file;
} else {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = '../assets/images/ecoleprimaire.jpg'
}

{# SCHOOL - READ BUTTON #}
let selectedChildSchoolEvent_detail = document.getElementById('selectedChildSchoolEvent_detail');
let selectedChildSchoolEvent_button_href = selectedChildSchoolEvent_detail.attributes[1]
if (data.lastSchoolEventArray.type === 'grade') {
selectedChildSchoolEvent_button_href.textContent = '{{ path('grade_browse') }}'
}
else {
selectedChildSchoolEvent_button_href.textContent = '{{ path('note_browse') }}'
}


{# HEALTH - BLOCK #} 
{# HEALTH - LASPOST #}

let selectedChildHealthEvent = document.getElementById('selectedChildHealthEvent');

if (data.lastHealthbook.created_at !== undefined) {
let date = data.lastHealthbook.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildHealthEvent.textContent = date;
} else {
selectedChildHealthEvent.textContent = '';
}


{# HEALTH - NAME #}

let selectedChildHealthEvent_name = document.getElementById('selectedChildHealthEvent_name')
selectedChildHealthEvent_name.textContent = data.lastHealthbook.name

if (data.lastHealthbook.name === undefined) {
selectedChildHealthEvent_name.textContent = 'Aucune entrée dans Santé'
}

{# HEALTH - FILE #}

let selectedChildHealthEvent_img = document.getElementById('selectedChildHealthEvent_img');

if (data.lastHealthbook.file !== undefined) {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = data.lastHealthbook.file;
} else {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = '../assets/images/sante.jpg'
}

{# PICTURE - TITLE #}

let selectedChildLastFamilyPicture_title = document.getElementById('selectedChildLastFamilyPicture_title')
selectedChildLastFamilyPicture_title.textContent = data.lastFamilyPicture.title

if (data.lastFamilyPicture.title === undefined) {
selectedChildLastFamilyPicture_title.textContent = 'Aucune photo récente postée'
}

{# PICTURE - LASTPOST #}

let selectedChildLastFamilyPicture_lastPost = document.getElementById('selectedChildLastFamilyPicture_lastPost');

if (data.lastFamilyPicture.created_at !== undefined) {

let date = data.lastFamilyPicture.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastFamilyPicture_lastPost.textContent = date;

} else {
selectedChildLastFamilyPicture_lastPost.textContent = '';
}

{# PICTURE - FILE #}

let selectedChildLastFamilyPicture_img = document.getElementById('selectedChildLastFamilyPicture_img');

if (data.lastFamilyPicture.file !== undefined) {
let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];
selectedChildLastFamilyPicture_img_src.value = data.lastFamilyPicture.file;
} 
else {

let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];

selectedChildLastFamilyPicture_img_src.value = '../assets/images/includes/member3.jpg'
}

{# EVENT- NAME #}

let selectedChildLastEvent_name = document.getElementById('selectedChildLastEvent_name')
selectedChildLastEvent_name.textContent = data.lastFamilyEvent.name

if (data.lastFamilyEvent.name === undefined) {
selectedChildLastEvent_name.textContent = 'Aucune entrée dans le calendrier'
}

{# EVENT- TYPE #}

let selectedChildLastEvent_type = document.getElementById('selectedChildLastEvent_type')
selectedChildLastEvent_type.textContent = data.lastFamilyEvent.type

if (data.lastFamilyEvent.type === undefined) {
selectedChildLastEvent_type.textContent = ''
}

{# EVENT - CREATED AT#}

let selectedChildLastEvent_lastPost = document.getElementById('selectedChildLastEvent_lastPost');

if (data.lastFamilyEvent.created_at !== undefined) {

let date = data.lastFamilyEvent.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_lastPost.textContent = date;

}

{# EVENT- BEGIN AT #}

let selectedChildLastEvent_beginAt = document.getElementById('selectedChildLastEvent_beginAt')
let selectedChildLastEvent_img = document.getElementById('selectedChildLastEvent_img');
let selectedChildLastEvent_img_src = selectedChildLastEvent_img.attributes[1];

if (data.lastFamilyEvent.begin_at !== undefined) {

let date = data.lastFamilyEvent.begin_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_beginAt.textContent = date;

selectedChildLastEvent_img_src.value = '';
}

else {
selectedChildLastEvent_beginAt.textContent = ''
selectedChildLastEvent_img_src.value = '';
}

{# EVENT- END AT #}

let selectedChildLastEvent_endAt = document.getElementById('selectedChildLastEvent_endAt')

if (data.lastFamilyEvent.end_at !== undefined) {

let date = data.lastFamilyEvent.end_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_endAt.textContent = date;

}

else {
selectedChildLastEvent_endAt.textContent = ''
}

}
})});
</script>


<script type=\"text/javascript\">
\t\$('#selectType').on('change', function (e) {
var idSelect = e.currentTarget.value;

console.log(e);
\$.ajax({
url: '{{ path('ajax_action') }}',
type: \"POST\",
dataType: \"json\",
data: {
\"idSelect\": idSelect
},

async: true,
success: function test(data) {

{# SCHOOL BLOCK #}
{# SCHOOL - LASTPOST = created_at #}

let selectedChildSchoolEvent_lastPost = document.getElementById('selectedChildSchoolEvent_lastPost');

if (data.lastSchoolEventArray.created_at !== undefined) {

let date = data.lastSchoolEventArray.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');
selectedChildSchoolEvent_lastPost.textContent = date;

} else {
selectedChildSchoolEvent_lastPost.textContent = ''
}

{# SCHOOL - NAME #}

let selectedChildSchoolEvent_name = document.getElementById('selectedChildSchoolEvent_name')
selectedChildSchoolEvent_name.textContent = data.lastSchoolEventArray.name

if (data.lastSchoolEventArray.name === undefined) {
selectedChildSchoolEvent_name.textContent = 'Aucun entrée dans vie scolaire'
}

{# SCHOOL - FILE #}
let selectedChildSchoolEvent_img = document.getElementById('selectedChildSchoolEvent_img');

if (data.lastSchoolEventArray.file !== undefined) {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = data.lastSchoolEventArray.file;
} else {
let selectedChildSchoolEvent_img_src = selectedChildSchoolEvent_img.attributes[1];
selectedChildSchoolEvent_img_src.value = '../../assets/images/ecoleprimaire.jpg'
}

{# SCHOOL - READ BUTTON #}
let selectedChildSchoolEvent_detail = document.getElementById('selectedChildSchoolEvent_detail');
let selectedChildSchoolEvent_button_href = selectedChildSchoolEvent_detail.attributes[1]
if (data.lastSchoolEventArray.type === 'grade') {
selectedChildSchoolEvent_button_href.textContent = '{{ path('grade_browse') }}'
}
else {
selectedChildSchoolEvent_button_href.textContent = '{{ path('note_browse') }}'
}


{# HEALTH - BLOCK #} 
{# HEALTH - LASPOST #}

let selectedChildHealthEvent = document.getElementById('selectedChildHealthEvent');

if (data.lastHealthbook.created_at !== undefined) {

let date = data.lastHealthbook.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildHealthEvent.textContent = date;

} else {
selectedChildHealthEvent.textContent = '';
}


{# HEALTH - NAME #}

let selectedChildHealthEvent_name = document.getElementById('selectedChildHealthEvent_name')
selectedChildHealthEvent_name.textContent = data.lastHealthbook.name

if (data.lastHealthbook.name === undefined) {
selectedChildHealthEvent_name.textContent = 'Aucune entrée dans Santé'
}

{# HEALTH - FILE #}

let selectedChildHealthEvent_img = document.getElementById('selectedChildHealthEvent_img');

if (data.lastHealthbook.file !== undefined) {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = data.lastHealthbook.file;
} else {
let selectedChildHealthEvent_img_src = selectedChildHealthEvent_img.attributes[1];
selectedChildHealthEvent_img_src.value = '../../assets/images/sante.jpg'
}


{# PICTURE - TITLE #}

let selectedChildLastFamilyPicture_title = document.getElementById('selectedChildLastFamilyPicture_title')
selectedChildLastFamilyPicture_title.textContent = data.lastFamilyPicture.title

if (data.lastFamilyPicture.title === undefined) {
selectedChildLastFamilyPicture_title.textContent = 'Aucune photo récente postée'
}

{# PICTURE - LASTPOST #}

let selectedChildLastFamilyPicture_lastPost = document.getElementById('selectedChildLastFamilyPicture_lastPost');

if (data.lastFamilyPicture.created_at !== undefined) {

let date = data.lastFamilyPicture.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastFamilyPicture_lastPost.textContent = date;

} else {
selectedChildLastFamilyPicture_lastPost.textContent = '';
}

{# PICTURE - FILE #}

let selectedChildLastFamilyPicture_img = document.getElementById('selectedChildLastFamilyPicture_img');

if (data.lastFamilyPicture.file !== undefined) {
let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];
selectedChildLastFamilyPicture_img_src.value = data.lastFamilyPicture.file;
} 
else {

let selectedChildLastFamilyPicture_img_src = selectedChildLastFamilyPicture_img.attributes[1];

selectedChildLastFamilyPicture_img_src.value = '../assets/images/includes/member3.jpg'
}

{# EVENT- NAME #}

let selectedChildLastEvent_name = document.getElementById('selectedChildLastEvent_name')
selectedChildLastEvent_name.textContent = data.lastFamilyEvent.name

if (data.lastFamilyEvent.name === undefined) {
selectedChildLastEvent_name.textContent = 'Aucune entrée dans le calendrier'
}

{# EVENT - CREATED AT#}

let selectedChildLastEvent_lastPost = document.getElementById('selectedChildLastEvent_lastPost');

if (data.lastFamilyEvent.created_at !== undefined) {

let date = data.lastFamilyEvent.created_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_lastPost.textContent = date;
}

{# EVENT- TYPE #}

let selectedChildLastEvent_type = document.getElementById('selectedChildLastEvent_type')
selectedChildLastEvent_type.textContent = data.lastFamilyEvent.type

if (data.lastFamilyEvent.type === undefined) {
selectedChildLastEvent_type.textContent = ''
}

{# EVENT- BEGIN AT #}

let selectedChildLastEvent_beginAt = document.getElementById('selectedChildLastEvent_beginAt')
let selectedChildLastEvent_img = document.getElementById('selectedChildLastEvent_img');
let selectedChildLastEvent_img_src = selectedChildLastEvent_img.attributes[1];

if (data.lastFamilyEvent.begin_at !== undefined) {

let date = data.lastFamilyEvent.begin_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_beginAt.textContent = date;

selectedChildLastEvent_img_src.value = '';
}

else {
selectedChildLastEvent_beginAt.textContent = ''
selectedChildLastEvent_img_src.value = '';
}

{# EVENT- END AT #}

let selectedChildLastEvent_endAt = document.getElementById('selectedChildLastEvent_endAt')

if (data.lastFamilyEvent.end_at !== undefined) {

let date = data.lastFamilyEvent.end_at.date;
date = moment(date).format('dddd DD MMMM YYYY HH:mm');\t
selectedChildLastEvent_endAt.textContent = date;

}

else {
selectedChildLastEvent_endAt.textContent = ''
}


}
})});
</script>{% endblock %}
</body></html>", "basedashboard.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/basedashboard.html.twig");
    }
}
