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

/* evenement/index.html.twig */
class __TwigTemplate_7823e4012bc6ed7e2a1ab5788bda854493f752188c34fb613711eafe1d43feb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "evenement/index.html.twig", 1);
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
    <section class=\"light-content our-team\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "danger"]], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "            <div class=\"alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " message-flash\">
                ";
                // line 9
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"container\">
    
\t\t\t<div class=\"row\">
                
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Calendrier</h2>
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\" class=\"large-button green-color\">Ajouter un événement</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>

    <div id=\"calendar-holder\">
    </div>
    


";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "

    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/locales/fr.js'></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script> 
    

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                editable: true,
                eventLimit: true, // for all non-TimeGrid views
                        views: {
                            timeGrid: {
                                eventLimit: 1 // adjust to 6 only for timeGridWeek/timeGridDay
                                        }
                                },   
                eventSources: [
                    {
                        url: \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fc_load_events");
        echo "\",
                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        },
                    },
                ],
                eventTimeFormat: { // like '14:30:00'
                        hour: '2-digit',
                        minute: '2-digit',
                        hour12: false
                        },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                locale: 'fr',
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                editable: true, // https://fullcalendar.io/docs/plugin-index
                timeZone: 'UTC',
            });
            calendar.render();
        });
    </script>
</br>
        
<div class=\"col-10\">
<div class=\"add-event section-header\">
    <h1 class=\"section-title\">Liste des événéments du calendrier</h1>
        <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\" class=\"large-button green-color \">Ajouter un événement</a>
        </div>
    <table class=\"table\">
    
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Début</th>
                <th>Fin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 112
            echo "            <tr>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "name", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                <td>";
            // line 115
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "beginAt", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "beginAt", [], "any", false, false, false, 115), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 116
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "endAt", [], "any", false, false, false, 116)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "endAt", [], "any", false, false, false, 116), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\" class=\"large-button green-color\">Détails</a>
                    <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\" class=\"large-button green-color\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "            <tr>
                <td colspan=\"8\">Aucun événement dans le Calendrier</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </tbody>
    </table>
</div>

    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 35,  273 => 34,  257 => 127,  248 => 123,  239 => 119,  235 => 118,  230 => 116,  226 => 115,  222 => 114,  218 => 113,  215 => 112,  210 => 111,  193 => 97,  157 => 64,  130 => 39,  128 => 34,  111 => 20,  102 => 13,  96 => 12,  87 => 9,  82 => 8,  77 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedashboard.html.twig' %}

{% block body %}
    
    <section class=\"light-content our-team\">
    {% for label, messages in app.flashes(['success', 'danger']) %}
        {% for message in messages %}
            <div class=\"alert-{{ label }} message-flash\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
<div class=\"container\">
    
\t\t\t<div class=\"row\">
                
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h2 class=\"section-title\">Calendrier</h2>
\t\t\t\t\t\t<a href=\"{{ path('evenement_new') }}\" class=\"large-button green-color\">Ajouter un événement</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.section-header -->
\t\t\t\t</div>
\t\t\t\t<!-- /.col-md-12 -->
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t</div>

    <div id=\"calendar-holder\">
    </div>
    


{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
{% endblock %}


    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/locales/fr.js'></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script> 
    

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                editable: true,
                eventLimit: true, // for all non-TimeGrid views
                        views: {
                            timeGrid: {
                                eventLimit: 1 // adjust to 6 only for timeGridWeek/timeGridDay
                                        }
                                },   
                eventSources: [
                    {
                        url: \"{{ path('fc_load_events') }}\",
                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        },
                    },
                ],
                eventTimeFormat: { // like '14:30:00'
                        hour: '2-digit',
                        minute: '2-digit',
                        hour12: false
                        },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                locale: 'fr',
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                editable: true, // https://fullcalendar.io/docs/plugin-index
                timeZone: 'UTC',
            });
            calendar.render();
        });
    </script>
</br>
        
<div class=\"col-10\">
<div class=\"add-event section-header\">
    <h1 class=\"section-title\">Liste des événéments du calendrier</h1>
        <a href=\"{{ path('evenement_new') }}\" class=\"large-button green-color \">Ajouter un événement</a>
        </div>
    <table class=\"table\">
    
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Début</th>
                <th>Fin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for evenement in evenements %}
            <tr>
                <td>{{ evenement.name }}</td>
                <td>{{ evenement.type }}</td>
                <td>{{ evenement.beginAt ? evenement.beginAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ evenement.endAt ? evenement.endAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\" class=\"large-button green-color\">Détails</a>
                    <a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\" class=\"large-button green-color\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">Aucun événement dans le Calendrier</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

    </section>

{% endblock %}", "evenement/index.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/evenement/index.html.twig");
    }
}
