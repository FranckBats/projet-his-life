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

/* about.html.twig */
class __TwigTemplate_aa8346ae174feabb6c176127e078adf1b698505958a105cb969601aa57a2d9ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 1);
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
        echo "<section id=\"blogPosts\" class=\"parallax\" style=\"margin-top: 5vh\">
\t    <div class=\"parallax-overlay\">
\t\t    <div class=\"container\">
\t\t        <div class=\"row\">
\t\t        \t<div class=\"col-md-12\">
\t\t        \t\t<div class=\"section-header\">
\t\t\t\t\t\t\t<h2 class=\"section-title\">L'équipe Hislife</h2>
\t\t\t\t\t\t\t<p class=\"section-desc\"></p>
\t\t\t\t\t\t</div> <!-- /.section-header -->
\t\t        \t</div> <!-- /.col-md-12 -->
\t\t        </div> <!-- /.row -->
\t\t        <div class=\"row latest-posts\">
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/audrey.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Audrey</br>Bodin</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Product Owner</span></br>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Lead Dev Front</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/franck.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Franck</br>Bats</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Git Master</span></br>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Référent Technique</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/gaetan.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Gaëtan</br>Canovas</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Lead Dev Back</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t\t\t\t\t\t\t
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/floriane.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Floriane</br>Gitton</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Scrum Master</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t\t\t\t\t\t\t
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        </div> <!-- /.row -->
\t\t    </div> <!-- /.container -->
\t    </div> <!-- /.parallax-overlay -->
\t</section> <!-- /#blogPosts -->




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<section id=\"blogPosts\" class=\"parallax\" style=\"margin-top: 5vh\">
\t    <div class=\"parallax-overlay\">
\t\t    <div class=\"container\">
\t\t        <div class=\"row\">
\t\t        \t<div class=\"col-md-12\">
\t\t        \t\t<div class=\"section-header\">
\t\t\t\t\t\t\t<h2 class=\"section-title\">L'équipe Hislife</h2>
\t\t\t\t\t\t\t<p class=\"section-desc\"></p>
\t\t\t\t\t\t</div> <!-- /.section-header -->
\t\t        \t</div> <!-- /.col-md-12 -->
\t\t        </div> <!-- /.row -->
\t\t        <div class=\"row latest-posts\">
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/audrey.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Audrey</br>Bodin</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Product Owner</span></br>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Lead Dev Front</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/franck.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Franck</br>Bats</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Git Master</span></br>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Référent Technique</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/gaetan.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Gaëtan</br>Canovas</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Lead Dev Back</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t\t\t\t\t\t\t
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        \t<div class=\"col-md-3 col-sm-3\">
\t\t        \t\t<div class=\"blog-post clearfix\">
\t\t        \t\t\t<div class=\"thumb-post\">
\t\t        \t\t\t\t<img src=\"../assets/images/includes/floriane.jpg\" alt=\"\" class=\"img-circle\">
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"blog-post-content\">
\t\t        \t\t\t\t<h4 class=\"post-title\" style=\"margin-bottom: 0px;\"><a href=\"\">Floriane</br>Gitton</a></h4>
\t\t        \t\t\t\t<span class=\"meta-post-date\">Scrum Master</span>
\t\t\t\t\t\t\t\t<span class=\"meta-post-date\">Développeur back-end</span>
\t\t\t\t\t\t\t\t
\t\t        \t\t\t</div>
\t\t        \t\t</div> <!-- /.blog-post -->
\t\t        \t</div> <!-- /.col-md-4 -->
\t\t        </div> <!-- /.row -->
\t\t    </div> <!-- /.container -->
\t    </div> <!-- /.parallax-overlay -->
\t</section> <!-- /#blogPosts -->




{% endblock %}", "about.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/about.html.twig");
    }
}
