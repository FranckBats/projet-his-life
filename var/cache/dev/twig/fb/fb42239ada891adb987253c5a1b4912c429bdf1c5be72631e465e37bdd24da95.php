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

/* registration/register.html.twig */
class __TwigTemplate_da618eaa749c37835431fc4a5e2f2d9a41f76922e2a381138a5f7b53a8349f85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<link rel=\"stylesheet\" href=\"../../assets/css/modal.css\">


\t\t<section class=\"light-content our-team\">
\t\t\t<div class=\"font-poppins\">
\t\t\t\t<div class=\"wrapper wrapper--w780\">
\t\t\t\t\t<div class=\"card card-3\">
\t\t\t\t\t\t<div class=\"card-heading\"></div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 14, $this->source); })()), "lastname", [], "any", false, false, false, 14), 'row');
        echo "
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15), 'row');
        echo "
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 16, $this->source); })()), "birthdate", [], "any", false, false, false, 16), 'row');
        echo "
              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 17, $this->source); })()), "file", [], "any", false, false, false, 17), 'row');
        echo "
\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 18, $this->source); })()), "role", [], "any", false, false, false, 18), 'row');
        echo "
\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'row');
        echo "
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), 'row');
        echo "
\t\t\t\t\t\t\t<a id=\"myBtn\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 26, $this->source); })()), "agreeTerms", [], "any", false, false, false, 26), 'row');
        echo "</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t

<!-- Trigger/Open The Modal -->
<!-- The Modal -->
<div id=\"myModal\" class=\"modal background-modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    
\t<section class=\"light-content our-team\">
\t<span class=\"close\">&times;</span>
    <div>
    
    <div class=\"row\">
\t<div class=\"section-header\">
\t\t<h2 class=\"section-title\">Conditions Generales d'Utilisation (CGU)</h2>
\t\t\t\t\t\t\t
\t</div>
        <p><strong>Préambule </strong></p>

        <p>Les présentes conditions générales d'utilisation sont conclues entre :</p>

        <p>- le gérant du site internet, ci-après désigné « l’Éditeur »,</p>

        <p>- toute personne souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».</p>

        <h2>Article 1 - Principes</h2>

        <p>Les présentes conditions générales d'utilisation ont pour objet l'encadrement juridique de l’utilisation du site Hislife et de ses services.</p>

        <p>Le site Internet <a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a> est un service de :</p>

        <ul class=\"puce\">
            <li>Hislife située en France</li>
            <li>adresse URL du site : <a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a></li>
            <li>e-mail : hislife.contact@gmail.com</li>
            
        </ul>
        <p>Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.</p>

        <h2>Article 2 - Evolution et durée des CGU</h2>

        <p>Les présentes conditions générales d'utilisation sont conclues pour une durée indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter du début de l’utilisation du service.</p>

        <p>Le site Hislife se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.</p>

        <h2>Article 3 - Accès au site</h2>

        <p>Tout Utilisateur ayant accès à internet peut accéder gratuitement et depuis n’importe où au site Hislife. Les frais supportés par l’Utilisateur pour y accéder (connexion internet, matériel informatique, etc.) ne sont pas à la charge de l’Éditeur.</p>

        <p>Le site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.</p>

        <p>L'Utilisateur du site a accès aux services suivants : ajout d'une famille, ajout d'un enfant, ajout de contenu (bulletin de notes, messages des professeurs, carnet de santé, photos), ajout d'un évènement dans le calendrier, poster des messages entre les parent de ou des enfant(s)..</p>

        <p>Le site comprend un espace membre gratuit réservé aux utilisateurs inscrits. Ces utilisateurs pourront y accéder en utilisant leurs identifiants de connexion.</p>

        <p>Les services réservés a l'utilisateur sont les suivants : ajout d'une famille, ajout d'un enfant, ajout de contenu (bulletin de notes, messages des professeurs, carnet de santé, photos), ajout d'un évènement dans le calendrier, poster des messages entre les parent de ou des enfant(s).</p>

        <h2>Article 4  - Responsabilités </h2>

        <p>La responsabilité de l'Éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.</p>

        <p>Le matériel de connexion au site utilisée est sous l'entière responsabilité de l'Utilisateur qui doit prendre toutes les mesures appropriées pour protéger le matériel et les données notamment d'attaques virales par Internet. L'utilisateur est par ailleurs le seul responsable des sites et données qu'il consulte.</p>

        <p>L'Éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à l'encontre de l'Utilisateur :</p>

        <p>-  du fait de l'usage du site ou de tout service accessible via Internet ;</p>

        <p>-  du fait du non-respect par l'Utilisateur des présentes conditions générales.</p>

        <p>L'Éditeur n'est pas responsable des dommages causés à l'Utilisateur, à des tiers et/ou à l'équipement de l'Utilisateur du fait de sa connexion ou de son utilisation du site et l'Utilisateur renonce à toute action contre l'Éditeur de ce fait.</p>

        <p>Si l'Éditeur venait à faire l'objet d'une procédure amiable ou judiciaire à raison de  l'utilisation du site par l'Utilisateur, il pourra retourner contre lui pour obtenir indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.</p>

        <p>Il est permis à l'Utilisateur de publier sur le site Hislife :</p>

        <p>- des textes ;</p>

        <p>- des photos ;</p>

        <p>L'Utilisateur s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification.</p>

        <p>En publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.</p>

        <p>L’Éditeur s'engage toutefois à citer le membre en cas d’utilisation de  sa publication.</p>

        <h2>Article 5  - Propriété intellectuelle</h2>

        <p>Tous les documents techniques, produits, photographies, textes, logos, dessins, vidéos, etc., sont soumis à des droits d'auteur et sont protégés par le Code de la propriété intellectuelle. Lorsqu'ils sont remis à nos clients, ils demeurent la propriété exclusive de Hislife, seul titulaire des droits de propriété intellectuelle sur ces documents, qui doivent lui être rendus à sa demande.</p>

        <p>Nos clients s'engagent à ne faire aucun usage de ces documents, susceptible de porter atteinte aux droits de propriété industrielle ou intellectuelle du fournisseur et s'engagent à ne les divulguer à aucun tiers, en dehors d'une autorisation expresse et préalable donnée par l'Editeur.</p>

        <h2>Article 6  - Liens hypertextes</h2>

        <p>La mise en place par l'Utilisateur de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite de l'Éditeur, sollicitée par courriel à l'adresse suivante : hislife.contact@gmail.com.</p>

        <p>L'Éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l'Éditeur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la charge de l'Éditeur.</p>

        <p>Dans tous les cas, tout lien devra être retiré sur simple demande de l'Éditeur.</p>

        <p>Toute information accessible via un lien vers d'autres sites n'est pas sous le contrôle de l'Éditeur qui décline toute responsabilité quant à leur contenu.</p>

        <h2>Article 7 - Protection des données personnelles</h2>

        <p>Données collectées</p>

        <p>Les données à caractère personnel qui sont collectées sur ce site sont les suivantes :</p>

        <p>- ouverture de compte : lors de la création du compte de l'utilisateur :  adresse électronique ; photo; date de naissance; rôle dans la famille (père ou mère...) ;</p>

        <p>- connexion : lors de la connexion de l'utilisateur au site web, celui-ci enregistre, notamment, ses données de connexion, d'utilisation;</p>

        <p>- profil : l'utilisation des prestations prévues sur le site web permet de renseigner un profil, pouvant comprendre un email ; le nom ; le prénom ; date de naissance ; rôle dans la famille (père ou mère...) ; le nom de la famille ou des familles ; les noms des enfants relié au compte.</p>

        <p>- communication : lorsque le site web est utilisé pour communiquer avec d'autres membres, les données concernant les communications de l'utilisateur font l'objet d'une conservation temporaire ;</p>

        <p>- cookies : les cookies sont utilisés, dans le cadre de l'utilisation du site. L'utilisateur a la possibilité de désactiver les cookies à partir des paramètres de son navigateur.</p>

        <p>Utilisation des données personnelles</p>

        <p>Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services du site web, leur amélioration et le maintien d'un environnement sécurisé. Plus précisément, les utilisations sont les suivantes :</p>

        <p>-  accès et utilisation du site web par l'utilisateur ;</p>

        <p>-  gestion du fonctionnement et optimisation du site web ;</p>

        <p>-  vérification, identification et authentification des données transmises par l'utilisateur ;</p>

        <p>-  proposition à l'utilisateur de la possibilité de communiquer avec d'autres utilisateurs du site web ;</p>

        <p>-  mise en oeuvre d'une assistance utilisateurs ;</p>

        <p>-  personnalisation des services en affichant des publicités en fonction de l'historique de navigation de l'utilisateur, selon ses préférences ;</p>

        <p>-  prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sécurité ;</p>

        <p>-  gestion des éventuels litiges avec les utilisateurs ;</p>

        <p>-  envoi d'informations commerciales et publicitaires, en fonction des préférences de l'utilisateur.</p>

        <p>Partage des données personnelles avec des tiers</p>

        <p>Les données personnelles peuvent être partagées avec des sociétés tierces, dans les cas suivants :</p>

        <p>-  lorsque l'Utilisateur publie, dans les zones de commentaires libres du site web, des informations accessibles au public ;</p>

        <p>-  lorsque l'Utilisateur autorise le site web d'un tiers à accéder à ses données ;</p>

        <p>-  lorsque le site web recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicité et les services de paiement. Ces prestataires disposent d'un accès limité aux données de l'utilisateur, dans le cadre de l'exécution de ces prestations, et ont une obligation contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en matière protection des données à caractère personnel ;</p>

        <p>-  si la loi l'exige, le site web peut effectuer la transmission de données pour donner suite aux réclamations présentées contre le site web et se conformer aux procédures administratives et judiciaires ;</p>

        <p>-  si le site web est impliquée dans une opération de fusion, acquisition, cession d'actifs ou procédure de redressement judiciaire, elle pourra être amenée à céder ou partager tout ou partie de ses actifs, y compris les données à caractère personnel. Dans ce cas, les utilisateurs seraient informés, avant que les données à caractère personnel ne soient transférées à une tierce partie.</p>

        <p>Sécurité et confidentialité </p>
        <p>Le site web met en oeuvre des mesures organisationnelles, techniques, logicielles et physiques en matière de sécurité du numérique pour protéger les données personnelles contre les altérations, destructions et accès non autorisés. Toutefois, il est à signaler qu'internet n'est pas un environnement complètement sécurisé et le site web ne peut pas garantir la sécurité de la transmission ou du stockage des informations sur internet.</p>

        <p>Mise en oeuvre des droits des utilisateurs</p>

        <p>En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants, qu'ils peuvent exercer en faisant leur demande à l'adresse suivante : hislife.contact@gmail.com.</p>

        <ul class=\"puce\">
            <li>le droit d’accès : ils peuvent exercer leur droit d'accès, pour connaître les données personnelles les concernant. Dans ce cas, avant la mise en œuvre de ce droit, le site web peut demander une preuve de l'identité de l'utilisateur afin d'en vérifier l'exactitude.</li>
            <li>le droit de rectification : si les données à caractère personnel détenues par le site web sont inexactes, ils peuvent demander la mise à jour des informations.</li>
            <li>le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données.</li>
            <li>le droit à la limitation du traitement : les utilisateurs peuvent de demander au site web de limiter le traitement des données personnelles conformément aux hypothèses prévues par le RGPD.</li>
            <li>le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que ses données soient traitées conformément aux hypothèses prévues par le RGPD.</li>
            <li>le droit à la portabilité : ils peuvent réclamer que le site web leur remette les données personnelles qui lui sont fournies pour les transmettre à un nouveau site web.</li>
        </ul>

        <p>Evolution de la présente clause</p>

        <p>Le site web se réserve le droit d'apporter toute modification à la présente clause relative à la protection des données à caractère personnel à tout moment. Si une modification est apportée à la présente clause de protection des données à caractère personnel, le site web s'engage à publier la nouvelle version sur son site. Le site web informera également les utilisateurs de la modification par messagerie électronique, dans un délai minimum de 15 jours avant la date d'effet. Si l'utilisateur n'est pas d'accord avec les termes de la nouvelle rédaction de la clause de protection des données à caractère personnel, il a la possibilité de supprimer son compte.</p>

        <h2>Article 8  - Cookies</h2>

        <p>Le site Hislife peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l'agencement et à d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.</p>

        <h2>Article 9 - Loi applicable</h2>

        <p>Les présentes conditions générales d'utilisation sont soumises à l'application du droit français.</p>

        <p>Si les parties n'arrivent pas à résoudre un litige à l'amiable, le litige sera soumis à la compétence des tribunaux français.</p>

    </div>
    </div>
</section>

  </div>

</div>
\t\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t\t\t<button class=\"large-button white-color\" type=\"submit\">Valider</button>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 225
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 225, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><button class=\"large-button white-color\" type=\"submit\">Accueil</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t</section>
\t\t\t<!-- /.our-team -->
\t\t\t";
        // line 239
        $this->displayBlock('javascripts', $context, $blocks);
        // line 240
        echo "
<script>
// Get the modal
var modal = document.getElementById(\"myModal\");

// Get the button that opens the modal
var btn = document.getElementById(\"myBtn\");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName(\"close\")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = \"block\";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = \"none\";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = \"none\";
  }
}
</script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$(\".js-datepicker\").datepicker({
viewMode: \"years\",
weekStart: 1,
daysOfWeekHighlighted: \"6,0\",
autoclose: true,
todayHighlight: true,
startDate: '-30y',
endDate: '+0d',
format: 'dd/MM/yyyy'
});

\$('.js-datepicker').datepicker(\"setDate\", new Date());
});


\t\t\t</script>


\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 239
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 239,  354 => 240,  352 => 239,  337 => 227,  332 => 225,  130 => 26,  126 => 25,  121 => 24,  112 => 21,  109 => 20,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<link rel=\"stylesheet\" href=\"../../assets/css/modal.css\">


\t\t<section class=\"light-content our-team\">
\t\t\t<div class=\"font-poppins\">
\t\t\t\t<div class=\"wrapper wrapper--w780\">
\t\t\t\t\t<div class=\"card card-3\">
\t\t\t\t\t\t<div class=\"card-heading\"></div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t{{ form_start(register) }}
                            {{ form_row(register.lastname) }}
                            {{ form_row(register.firstname) }}
\t\t\t\t\t\t\t{{ form_row(register.birthdate) }}
              {{ form_row(register.file)}}
\t\t\t\t\t\t\t{{ form_row(register.role) }}
\t\t\t\t\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{{ form_row(register.email) }}
\t\t\t\t\t\t\t{{ form_row(register.password) }}
\t\t\t\t\t\t\t<a id=\"myBtn\">{{ form_row(register.agreeTerms) }}</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t

<!-- Trigger/Open The Modal -->
<!-- The Modal -->
<div id=\"myModal\" class=\"modal background-modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    
\t<section class=\"light-content our-team\">
\t<span class=\"close\">&times;</span>
    <div>
    
    <div class=\"row\">
\t<div class=\"section-header\">
\t\t<h2 class=\"section-title\">Conditions Generales d'Utilisation (CGU)</h2>
\t\t\t\t\t\t\t
\t</div>
        <p><strong>Préambule </strong></p>

        <p>Les présentes conditions générales d'utilisation sont conclues entre :</p>

        <p>- le gérant du site internet, ci-après désigné « l’Éditeur »,</p>

        <p>- toute personne souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».</p>

        <h2>Article 1 - Principes</h2>

        <p>Les présentes conditions générales d'utilisation ont pour objet l'encadrement juridique de l’utilisation du site Hislife et de ses services.</p>

        <p>Le site Internet <a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a> est un service de :</p>

        <ul class=\"puce\">
            <li>Hislife située en France</li>
            <li>adresse URL du site : <a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a></li>
            <li>e-mail : hislife.contact@gmail.com</li>
            
        </ul>
        <p>Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.</p>

        <h2>Article 2 - Evolution et durée des CGU</h2>

        <p>Les présentes conditions générales d'utilisation sont conclues pour une durée indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter du début de l’utilisation du service.</p>

        <p>Le site Hislife se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.</p>

        <h2>Article 3 - Accès au site</h2>

        <p>Tout Utilisateur ayant accès à internet peut accéder gratuitement et depuis n’importe où au site Hislife. Les frais supportés par l’Utilisateur pour y accéder (connexion internet, matériel informatique, etc.) ne sont pas à la charge de l’Éditeur.</p>

        <p>Le site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.</p>

        <p>L'Utilisateur du site a accès aux services suivants : ajout d'une famille, ajout d'un enfant, ajout de contenu (bulletin de notes, messages des professeurs, carnet de santé, photos), ajout d'un évènement dans le calendrier, poster des messages entre les parent de ou des enfant(s)..</p>

        <p>Le site comprend un espace membre gratuit réservé aux utilisateurs inscrits. Ces utilisateurs pourront y accéder en utilisant leurs identifiants de connexion.</p>

        <p>Les services réservés a l'utilisateur sont les suivants : ajout d'une famille, ajout d'un enfant, ajout de contenu (bulletin de notes, messages des professeurs, carnet de santé, photos), ajout d'un évènement dans le calendrier, poster des messages entre les parent de ou des enfant(s).</p>

        <h2>Article 4  - Responsabilités </h2>

        <p>La responsabilité de l'Éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.</p>

        <p>Le matériel de connexion au site utilisée est sous l'entière responsabilité de l'Utilisateur qui doit prendre toutes les mesures appropriées pour protéger le matériel et les données notamment d'attaques virales par Internet. L'utilisateur est par ailleurs le seul responsable des sites et données qu'il consulte.</p>

        <p>L'Éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à l'encontre de l'Utilisateur :</p>

        <p>-  du fait de l'usage du site ou de tout service accessible via Internet ;</p>

        <p>-  du fait du non-respect par l'Utilisateur des présentes conditions générales.</p>

        <p>L'Éditeur n'est pas responsable des dommages causés à l'Utilisateur, à des tiers et/ou à l'équipement de l'Utilisateur du fait de sa connexion ou de son utilisation du site et l'Utilisateur renonce à toute action contre l'Éditeur de ce fait.</p>

        <p>Si l'Éditeur venait à faire l'objet d'une procédure amiable ou judiciaire à raison de  l'utilisation du site par l'Utilisateur, il pourra retourner contre lui pour obtenir indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.</p>

        <p>Il est permis à l'Utilisateur de publier sur le site Hislife :</p>

        <p>- des textes ;</p>

        <p>- des photos ;</p>

        <p>L'Utilisateur s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification.</p>

        <p>En publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.</p>

        <p>L’Éditeur s'engage toutefois à citer le membre en cas d’utilisation de  sa publication.</p>

        <h2>Article 5  - Propriété intellectuelle</h2>

        <p>Tous les documents techniques, produits, photographies, textes, logos, dessins, vidéos, etc., sont soumis à des droits d'auteur et sont protégés par le Code de la propriété intellectuelle. Lorsqu'ils sont remis à nos clients, ils demeurent la propriété exclusive de Hislife, seul titulaire des droits de propriété intellectuelle sur ces documents, qui doivent lui être rendus à sa demande.</p>

        <p>Nos clients s'engagent à ne faire aucun usage de ces documents, susceptible de porter atteinte aux droits de propriété industrielle ou intellectuelle du fournisseur et s'engagent à ne les divulguer à aucun tiers, en dehors d'une autorisation expresse et préalable donnée par l'Editeur.</p>

        <h2>Article 6  - Liens hypertextes</h2>

        <p>La mise en place par l'Utilisateur de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite de l'Éditeur, sollicitée par courriel à l'adresse suivante : hislife.contact@gmail.com.</p>

        <p>L'Éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l'Éditeur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la charge de l'Éditeur.</p>

        <p>Dans tous les cas, tout lien devra être retiré sur simple demande de l'Éditeur.</p>

        <p>Toute information accessible via un lien vers d'autres sites n'est pas sous le contrôle de l'Éditeur qui décline toute responsabilité quant à leur contenu.</p>

        <h2>Article 7 - Protection des données personnelles</h2>

        <p>Données collectées</p>

        <p>Les données à caractère personnel qui sont collectées sur ce site sont les suivantes :</p>

        <p>- ouverture de compte : lors de la création du compte de l'utilisateur :  adresse électronique ; photo; date de naissance; rôle dans la famille (père ou mère...) ;</p>

        <p>- connexion : lors de la connexion de l'utilisateur au site web, celui-ci enregistre, notamment, ses données de connexion, d'utilisation;</p>

        <p>- profil : l'utilisation des prestations prévues sur le site web permet de renseigner un profil, pouvant comprendre un email ; le nom ; le prénom ; date de naissance ; rôle dans la famille (père ou mère...) ; le nom de la famille ou des familles ; les noms des enfants relié au compte.</p>

        <p>- communication : lorsque le site web est utilisé pour communiquer avec d'autres membres, les données concernant les communications de l'utilisateur font l'objet d'une conservation temporaire ;</p>

        <p>- cookies : les cookies sont utilisés, dans le cadre de l'utilisation du site. L'utilisateur a la possibilité de désactiver les cookies à partir des paramètres de son navigateur.</p>

        <p>Utilisation des données personnelles</p>

        <p>Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services du site web, leur amélioration et le maintien d'un environnement sécurisé. Plus précisément, les utilisations sont les suivantes :</p>

        <p>-  accès et utilisation du site web par l'utilisateur ;</p>

        <p>-  gestion du fonctionnement et optimisation du site web ;</p>

        <p>-  vérification, identification et authentification des données transmises par l'utilisateur ;</p>

        <p>-  proposition à l'utilisateur de la possibilité de communiquer avec d'autres utilisateurs du site web ;</p>

        <p>-  mise en oeuvre d'une assistance utilisateurs ;</p>

        <p>-  personnalisation des services en affichant des publicités en fonction de l'historique de navigation de l'utilisateur, selon ses préférences ;</p>

        <p>-  prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sécurité ;</p>

        <p>-  gestion des éventuels litiges avec les utilisateurs ;</p>

        <p>-  envoi d'informations commerciales et publicitaires, en fonction des préférences de l'utilisateur.</p>

        <p>Partage des données personnelles avec des tiers</p>

        <p>Les données personnelles peuvent être partagées avec des sociétés tierces, dans les cas suivants :</p>

        <p>-  lorsque l'Utilisateur publie, dans les zones de commentaires libres du site web, des informations accessibles au public ;</p>

        <p>-  lorsque l'Utilisateur autorise le site web d'un tiers à accéder à ses données ;</p>

        <p>-  lorsque le site web recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicité et les services de paiement. Ces prestataires disposent d'un accès limité aux données de l'utilisateur, dans le cadre de l'exécution de ces prestations, et ont une obligation contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en matière protection des données à caractère personnel ;</p>

        <p>-  si la loi l'exige, le site web peut effectuer la transmission de données pour donner suite aux réclamations présentées contre le site web et se conformer aux procédures administratives et judiciaires ;</p>

        <p>-  si le site web est impliquée dans une opération de fusion, acquisition, cession d'actifs ou procédure de redressement judiciaire, elle pourra être amenée à céder ou partager tout ou partie de ses actifs, y compris les données à caractère personnel. Dans ce cas, les utilisateurs seraient informés, avant que les données à caractère personnel ne soient transférées à une tierce partie.</p>

        <p>Sécurité et confidentialité </p>
        <p>Le site web met en oeuvre des mesures organisationnelles, techniques, logicielles et physiques en matière de sécurité du numérique pour protéger les données personnelles contre les altérations, destructions et accès non autorisés. Toutefois, il est à signaler qu'internet n'est pas un environnement complètement sécurisé et le site web ne peut pas garantir la sécurité de la transmission ou du stockage des informations sur internet.</p>

        <p>Mise en oeuvre des droits des utilisateurs</p>

        <p>En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants, qu'ils peuvent exercer en faisant leur demande à l'adresse suivante : hislife.contact@gmail.com.</p>

        <ul class=\"puce\">
            <li>le droit d’accès : ils peuvent exercer leur droit d'accès, pour connaître les données personnelles les concernant. Dans ce cas, avant la mise en œuvre de ce droit, le site web peut demander une preuve de l'identité de l'utilisateur afin d'en vérifier l'exactitude.</li>
            <li>le droit de rectification : si les données à caractère personnel détenues par le site web sont inexactes, ils peuvent demander la mise à jour des informations.</li>
            <li>le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données.</li>
            <li>le droit à la limitation du traitement : les utilisateurs peuvent de demander au site web de limiter le traitement des données personnelles conformément aux hypothèses prévues par le RGPD.</li>
            <li>le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que ses données soient traitées conformément aux hypothèses prévues par le RGPD.</li>
            <li>le droit à la portabilité : ils peuvent réclamer que le site web leur remette les données personnelles qui lui sont fournies pour les transmettre à un nouveau site web.</li>
        </ul>

        <p>Evolution de la présente clause</p>

        <p>Le site web se réserve le droit d'apporter toute modification à la présente clause relative à la protection des données à caractère personnel à tout moment. Si une modification est apportée à la présente clause de protection des données à caractère personnel, le site web s'engage à publier la nouvelle version sur son site. Le site web informera également les utilisateurs de la modification par messagerie électronique, dans un délai minimum de 15 jours avant la date d'effet. Si l'utilisateur n'est pas d'accord avec les termes de la nouvelle rédaction de la clause de protection des données à caractère personnel, il a la possibilité de supprimer son compte.</p>

        <h2>Article 8  - Cookies</h2>

        <p>Le site Hislife peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l'agencement et à d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.</p>

        <h2>Article 9 - Loi applicable</h2>

        <p>Les présentes conditions générales d'utilisation sont soumises à l'application du droit français.</p>

        <p>Si les parties n'arrivent pas à résoudre un litige à l'amiable, le litige sera soumis à la compétence des tribunaux français.</p>

    </div>
    </div>
</section>

  </div>

</div>
\t\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t\t\t<button class=\"large-button white-color\" type=\"submit\">Valider</button>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_end(register) }}
\t\t\t\t\t\t\t<div class=\"p-t-10\">
\t\t\t\t\t\t\t\t<a href=\"{{ path ('home')}}\"><button class=\"large-button white-color\" type=\"submit\">Accueil</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t</section>
\t\t\t<!-- /.our-team -->
\t\t\t{% block javascripts %}{% endblock %}

<script>
// Get the modal
var modal = document.getElementById(\"myModal\");

// Get the button that opens the modal
var btn = document.getElementById(\"myBtn\");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName(\"close\")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = \"block\";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = \"none\";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = \"none\";
  }
}
</script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$(\".js-datepicker\").datepicker({
viewMode: \"years\",
weekStart: 1,
daysOfWeekHighlighted: \"6,0\",
autoclose: true,
todayHighlight: true,
startDate: '-30y',
endDate: '+0d',
format: 'dd/MM/yyyy'
});

\$('.js-datepicker').datepicker(\"setDate\", new Date());
});


\t\t\t</script>


\t\t{% endblock %}
", "registration/register.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/registration/register.html.twig");
    }
}
