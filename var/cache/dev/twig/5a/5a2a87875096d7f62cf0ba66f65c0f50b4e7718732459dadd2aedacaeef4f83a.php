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

/* home/index.html.twig */
class __TwigTemplate_e3e3e450c672256cd96dce50530fdad16e9373ff15177aad81ffd91c6e3f75ea extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "\t<section id=\"homeIntro\" class=\"parallax first-widget\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "\t\t\t\t<div class=\"alert alert-danger message-flash\">
\t\t\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t    <div class=\"parallax-overlay\">
\t\t    <div class=\"container home-intro-content\">
\t\t        <div class=\"row\">
\t\t        \t<div class=\"col-md-12\">
\t\t        \t\t<h2>HIS LIFE</h2></br>
\t\t        \t\t<h3 style=\"font-weight:bold; color:white;\">Parents éloignés par le travail, séparés ou autre... soyez toujours au courant de ce qu'il ce passe dans la vie de vos enfants.</h3> </br>
\t\t        \t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"large-button white-color\">Inscrivez-vous</a>
\t\t        \t</div> <!-- /.col-md-12 -->
\t\t        </div> <!-- /.row -->
\t\t    </div> <!-- /.container -->
\t    </div> <!-- /.parallax-overlay -->
\t</section> <!-- /#homeIntro -->

\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Ce que His Life vous propose</h2>
\t\t\t\t\t\t<p class=\"section-desc\">Soyez toujours proche de vos enfants quelques soit la distance</p>
\t\t\t\t\t</div> <!-- /.section-header -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t\t<div class=\"team-members\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member1.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Santé</h4>
\t\t\t\t\t\t\t\t<p>Plus besoin d'avoir le carnet de santé sous la main, His Life se charge de ça pour vous.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member2.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Vie Scolaire</h4>
\t\t\t\t\t\t\t\t<p>Soyez toujours au courant de ce qu'il ce passe à l'école de votre enfant.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member3.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Galerie Photo</h4>
\t\t\t\t\t\t\t\t<p>Partagez avec vos proches vos photos souvenir.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member4.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Calendrier</h4>
\t\t\t\t\t\t\t\t<p>Ne ratez plus aucun rendez-vous concernant votre enfant.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->

\t\t\t\t</div> <!-- /.row -->
\t\t\t</div> <!-- /.container -->
\t\t</div> <!-- /.team-members -->
\t</section> <!-- /.our-team -->
\t
\t";
        // line 151
        echo "
\t";
        // line 173
        echo "


  

\t\t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 173,  173 => 151,  95 => 16,  87 => 10,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<section id=\"homeIntro\" class=\"parallax first-widget\">
\t\t{% for message in app.flashes('danger') %}
\t\t\t\t<div class=\"alert alert-danger message-flash\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t    <div class=\"parallax-overlay\">
\t\t    <div class=\"container home-intro-content\">
\t\t        <div class=\"row\">
\t\t        \t<div class=\"col-md-12\">
\t\t        \t\t<h2>HIS LIFE</h2></br>
\t\t        \t\t<h3 style=\"font-weight:bold; color:white;\">Parents éloignés par le travail, séparés ou autre... soyez toujours au courant de ce qu'il ce passe dans la vie de vos enfants.</h3> </br>
\t\t        \t\t<a href=\"{{ path('app_register') }}\" class=\"large-button white-color\">Inscrivez-vous</a>
\t\t        \t</div> <!-- /.col-md-12 -->
\t\t        </div> <!-- /.row -->
\t\t    </div> <!-- /.container -->
\t    </div> <!-- /.parallax-overlay -->
\t</section> <!-- /#homeIntro -->

\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Ce que His Life vous propose</h2>
\t\t\t\t\t\t<p class=\"section-desc\">Soyez toujours proche de vos enfants quelques soit la distance</p>
\t\t\t\t\t</div> <!-- /.section-header -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t\t<div class=\"team-members\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member1.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Santé</h4>
\t\t\t\t\t\t\t\t<p>Plus besoin d'avoir le carnet de santé sous la main, His Life se charge de ça pour vous.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member2.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Vie Scolaire</h4>
\t\t\t\t\t\t\t\t<p>Soyez toujours au courant de ce qu'il ce passe à l'école de votre enfant.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->

\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member3.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Galerie Photo</h4>
\t\t\t\t\t\t\t\t<p>Partagez avec vos proches vos photos souvenir.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 col-md-3 col-sm-4\">
\t\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t\t<div class=\"thumb-post\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/includes/member4.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"member-content\">
\t\t\t\t\t\t\t\t<h4 class=\"member-name\">Calendrier</h4>
\t\t\t\t\t\t\t\t<p>Ne ratez plus aucun rendez-vous concernant votre enfant.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.team-member -->
\t\t\t\t\t</div> <!-- /.col-md-4 -->

\t\t\t\t</div> <!-- /.row -->
\t\t\t</div> <!-- /.container -->
\t\t</div> <!-- /.team-members -->
\t</section> <!-- /.our-team -->
\t
\t{# <section id=\"blogPosts\" class=\"parallax\">
\t    <div class=\"parallax-overlay\">
\t\t    <div class=\"container\">
\t\t        <div class=\"row\">
\t\t        \t<div class=\"col-md-12\">
\t\t        \t\t<div class=\"section-header\">
\t\t\t\t\t\t\t<h2 class=\"section-title\">Notre équipe de dev</h2>
\t\t\t\t\t\t\t<p class=\"section-desc\">Everything you need to create a professional website.</p>
\t\t\t\t\t\t</div> <!-- /.section-header -->
\t\t        \t</div> <!-- /.col-md-12 -->
\t\t        </div> <!-- /.row -->
\t\t        <div class=\"row latest-posts\">
\t\t        \t<div class=\"col-md-3 col-sm-6\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<a href=\"blog-single.html\"><img src=\"assets/images/includes/blogthumb1.jpg\" alt=\"\" class=\"img-circle\"></a>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\"><a href=\"blog-single.html\">Audrey</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Titre</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-6\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<a href=\"blog-single.html\"><img src=\"assets/images/includes/blogthumb2.jpg\" alt=\"\" class=\"img-circle\"></a>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\"><a href=\"blog-single.html\">Franck</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Titre</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-6\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<a href=\"blog-single.html\"><img src=\"assets/images/includes/blogthumb3.jpg\" alt=\"\" class=\"img-circle\"></a>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\"><a href=\"blog-single.html\">Gaëtan</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Titre</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-6\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<a href=\"blog-single.html\"><img src=\"assets/images/includes/blogthumb3.jpg\" alt=\"\" class=\"img-circle\"></a>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\"><a href=\"blog-single.html\">Floriane</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Titre</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        </div> <!-- /.row -->
\t\t    </div> <!-- /.container -->
\t    </div> <!-- /.parallax-overlay -->
\t</section> <!-- /#blogPosts --> #}

\t{# <footer class=\"site-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<nav class=\"footer-nav clearfix\">
\t\t\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Nous contacter</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Mentions légales</a></li>
\t\t\t\t\t\t</ul> <!-- /.footer-menu -->
\t\t\t\t\t</nav> <!-- /.footer-nav -->
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"copyright-text\">Copyright &copy; HISLIFE 
                    </p>
\t\t\t\t</div> <!-- /.col-md-12 -->
\t\t\t</div> <!-- /.row -->
\t\t</div> <!-- /.container -->
\t</footer> <!-- /.site-footer --> #}



  

\t\t\t

{% endblock %}
\t\t
\t\t{# ------>container #}
{# 
\t\t{% block javascripts %}{% endblock %}
\t\t<!-- Scripts -->
\t<script src=\"js/min/plugins.min.js\"></script>
\t<script src=\"js/min/medigo-custom.min.js\"></script> #}


", "home/index.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/home/index.html.twig");
    }
}
