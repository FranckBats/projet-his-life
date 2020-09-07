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

/* base.html.twig */
class __TwigTemplate_7ddec04bd63e6c8d655ef1a3e0da5bfd8706a43c3c19fbd1a95d5c210536f3fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\" />
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t
\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "\t
\t\t
\t</head>
\t    <body>
\t<div class=\"responsive_menu\">
        <ul class=\"main_menu\">
            <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a></li>
            <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion <i class=\"icon-button fa fa-user\"></i></a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

\t<header class=\"site-header clearfix\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<div class=\"pull-left logo\">
\t\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t\t\t<img src=\"assets/images/includes/logo.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>\t<!-- /.logo -->

\t\t\t\t\t<div class=\"main-navigation pull-right\">

\t\t\t\t\t\t<nav class=\"main-nav visible-md visible-lg\">
\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a></li>
            \t\t\t\t\t<li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion <i class=\"icon-button fa fa-user\"></i> </a></li>
\t\t\t\t\t\t\t</ul> <!-- /.sf-menu -->
\t\t\t\t\t\t</nav> <!-- /.main-nav -->

\t\t\t\t\t\t<!-- This one in here is responsive menu for tablet and mobiles -->
\t\t\t\t\t    <div class=\"responsive-navigation visible-sm visible-xs\">
\t\t\t\t\t        <a href=\"#nogo\" class=\"menu-toggle-btn\">
\t\t\t\t\t            <i class=\"fa fa-bars fa-7x\"></i>
\t\t\t\t\t        </a>
\t\t\t\t\t    </div> <!-- /responsive_navigation -->

\t\t\t\t\t</div> <!-- /.main-navigation -->

\t\t\t\t</div> <!-- /.col-md-12 -->

\t\t\t</div> <!-- /.row -->

\t\t</div> <!-- /.container -->
\t</header> <!-- /.site-header -->

\t";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
\t<footer class=\"site-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<nav class=\"footer-nav clearfix\">
\t\t\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Notre équipe</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_us");
        echo "\">Nous contacter</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">Mentions légales</a></li>
\t\t\t\t\t\t</ul> <!-- /.footer-menu -->
\t\t\t\t\t</nav> <!-- /.footer-nav -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"copyright-text\">Tous droits réservés &copy; HISLIFE 
                    </p>
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</footer> <!-- /.site-footer -->



  

\t\t\t


\t\t
\t\t";
        // line 108
        echo "
\t\t";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "\t\t<!-- Scripts -->
\t<script src=\"assets/js/min/plugins.min.js\"></script>
\t<script src=\"assets/js/min/medigo-custom.min.js\"></script>

\t<script src=\"assets/jsinsc/jquery/jquery.min.js\"></script>

\t<script src=\"assets/jsinsc/select2/select2.min.js\"></script>
    <script src=\"assets/jsinsc/datepicker/moment.min.js\"></script>
    <script src=\"assets/jsinsc/datepicker/daterangepicker.js\"></script>

\t<script src=\"assets/js/global.js\"></script>

\t</body>
</html>
";
        
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

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"../../assets/css/misc.css\">
\t<link rel=\"stylesheet\" href=\"../../assets/bootstrap/bootstrap.css\">
\t<link rel=\"stylesheet\" href=\"../../assets/css/blue-scheme.css\"> 
\t<link rel=\"stylesheet\" href=\"../../assets/css/main.css\" media=\"all\">
\t
\t<!-- JavaScripts -->
\t<script src=\"../../assets/js/jquery-1.10.2.min.js\"></script>
\t<script src=\"../../assets/js/jquery-migrate-1.2.1.min.js\"></script>
\t   
\t    
\t<script src=\"https://use.fontawesome.com/053bf391bc.js\"></script>
\t<link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\" type=\"image/x-icon\" />
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
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

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 109,  255 => 75,  232 => 12,  222 => 11,  202 => 7,  178 => 110,  176 => 109,  173 => 108,  148 => 85,  144 => 84,  140 => 83,  131 => 76,  129 => 75,  106 => 55,  102 => 54,  90 => 45,  75 => 33,  71 => 32,  63 => 26,  61 => 11,  57 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\" />
\t\t<title>
\t\t\t{% block title %}His Life
\t\t\t{% endblock %}
\t\t</title>
\t
\t{% block stylesheets %}
\t\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"../../assets/css/misc.css\">
\t<link rel=\"stylesheet\" href=\"../../assets/bootstrap/bootstrap.css\">
\t<link rel=\"stylesheet\" href=\"../../assets/css/blue-scheme.css\"> 
\t<link rel=\"stylesheet\" href=\"../../assets/css/main.css\" media=\"all\">
\t
\t<!-- JavaScripts -->
\t<script src=\"../../assets/js/jquery-1.10.2.min.js\"></script>
\t<script src=\"../../assets/js/jquery-migrate-1.2.1.min.js\"></script>
\t   
\t    
\t<script src=\"https://use.fontawesome.com/053bf391bc.js\"></script>
\t<link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\" type=\"image/x-icon\" />
\t{% endblock %}
\t
\t\t
\t</head>
\t    <body>
\t<div class=\"responsive_menu\">
        <ul class=\"main_menu\">
            <li><a href=\"{{ path('app_register') }}\">S'inscrire</a></li>
            <li><a href=\"{{ path('app_login') }}\">Connexion <i class=\"icon-button fa fa-user\"></i></a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

\t<header class=\"site-header clearfix\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<div class=\"pull-left logo\">
\t\t\t\t\t\t<a href=\"{{path('home')}}\">
\t\t\t\t\t\t\t<img src=\"assets/images/includes/logo.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>\t<!-- /.logo -->

\t\t\t\t\t<div class=\"main-navigation pull-right\">

\t\t\t\t\t\t<nav class=\"main-nav visible-md visible-lg\">
\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_register') }}\">S'inscrire</a></li>
            \t\t\t\t\t<li><a href=\"{{ path('app_login') }}\">Connexion <i class=\"icon-button fa fa-user\"></i> </a></li>
\t\t\t\t\t\t\t</ul> <!-- /.sf-menu -->
\t\t\t\t\t\t</nav> <!-- /.main-nav -->

\t\t\t\t\t\t<!-- This one in here is responsive menu for tablet and mobiles -->
\t\t\t\t\t    <div class=\"responsive-navigation visible-sm visible-xs\">
\t\t\t\t\t        <a href=\"#nogo\" class=\"menu-toggle-btn\">
\t\t\t\t\t            <i class=\"fa fa-bars fa-7x\"></i>
\t\t\t\t\t        </a>
\t\t\t\t\t    </div> <!-- /responsive_navigation -->

\t\t\t\t\t</div> <!-- /.main-navigation -->

\t\t\t\t</div> <!-- /.col-md-12 -->

\t\t\t</div> <!-- /.row -->

\t\t</div> <!-- /.container -->
\t</header> <!-- /.site-header -->

\t{% block body %}{% endblock %}

\t<footer class=\"site-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<nav class=\"footer-nav clearfix\">
\t\t\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('about') }}\">Notre équipe</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('contact_us') }}\">Nous contacter</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('mentions_legales') }}\">Mentions légales</a></li>
\t\t\t\t\t\t</ul> <!-- /.footer-menu -->
\t\t\t\t\t</nav> <!-- /.footer-nav -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"copyright-text\">Tous droits réservés &copy; HISLIFE 
                    </p>
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</footer> <!-- /.site-footer -->



  

\t\t\t


\t\t
\t\t{# ------>container #}

\t\t{% block javascripts %}{% endblock %}
\t\t<!-- Scripts -->
\t<script src=\"assets/js/min/plugins.min.js\"></script>
\t<script src=\"assets/js/min/medigo-custom.min.js\"></script>

\t<script src=\"assets/jsinsc/jquery/jquery.min.js\"></script>

\t<script src=\"assets/jsinsc/select2/select2.min.js\"></script>
    <script src=\"assets/jsinsc/datepicker/moment.min.js\"></script>
    <script src=\"assets/jsinsc/datepicker/daterangepicker.js\"></script>

\t<script src=\"assets/js/global.js\"></script>

\t</body>
</html>
", "base.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/base.html.twig");
    }
}
