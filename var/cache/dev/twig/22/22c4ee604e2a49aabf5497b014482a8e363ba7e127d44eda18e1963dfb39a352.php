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

/* grade/edit.html.twig */
class __TwigTemplate_678e3d79195fc4fd5ed3b365c2585c891de11ffa53483cfadf30c9fa6ba88982 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grade/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grade/edit.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "grade/edit.html.twig", 1);
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
\t\t\t\t\t\t<h2 class=\"section-title\">Bulletin de Note</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->

\t\t<div class=\"font-poppinsdeux\">
\t\t\t<div class=\"wrapper wrapper--w780\">
\t\t\t\t<div class=\"card card-12\">
\t\t\t\t\t<div class=\"card-heading\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2 class=\"title\">Modifier
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'row');
        echo "
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'row');
        echo "
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "child", [], "any", false, false, false, 33), 'row');
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "file", [], "any", false, false, false, 34), 'row');
        echo "
\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t<span style=\"color: #ffffff;\">* Ces champs sont obligatoires</span>
\t\t\t\t\t\t\t<button class=\"large-button white-color\" type=\"submit\">Valider</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</br>
\t\t\t\t\t";
        // line 43
        echo twig_include($this->env, $context, "grade/_delete_form.html.twig");
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</br>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "grade/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  121 => 41,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  68 => 5,  58 => 4,  35 => 1,);
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
\t\t\t\t\t\t<h2 class=\"section-title\">Bulletin de Note</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>
\t\t<!-- /.container -->

\t\t<div class=\"font-poppinsdeux\">
\t\t\t<div class=\"wrapper wrapper--w780\">
\t\t\t\t<div class=\"card card-12\">
\t\t\t\t\t<div class=\"card-heading\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2 class=\"title\">Modifier
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t\t{{ form_row(form.description) }}
\t\t\t\t\t\t{{ form_row(form.child) }}
\t\t\t\t\t\t{{ form_row(form.file) }}
\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t<span style=\"color: #ffffff;\">* Ces champs sont obligatoires</span>
\t\t\t\t\t\t\t<button class=\"large-button white-color\" type=\"submit\">Valider</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</br>
\t\t\t\t\t{{ include('grade/_delete_form.html.twig') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</br>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</section>


{% endblock %}
", "grade/edit.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/grade/edit.html.twig");
    }
}
