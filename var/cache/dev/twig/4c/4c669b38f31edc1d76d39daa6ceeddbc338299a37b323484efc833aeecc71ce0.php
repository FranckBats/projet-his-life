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

/* cgu_dashboard.html.twig */
class __TwigTemplate_8d0e6e7e4211f3e5aa2963406c518cd9808cdcc2b13afbf3cb5107b1b71b03f7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu_dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu_dashboard.html.twig"));

        $this->parent = $this->loadTemplate("basedashboard.html.twig", "cgu_dashboard.html.twig", 1);
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
    <div class=\"container\">
    <div class=\"section-header\">
\t\t<h2 class=\"section-title\">Conditions Generales d'Utilisation (CGU)</h2>
\t\t\t\t\t\t\t
\t</div>
    <div class=\"row\">
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


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cgu_dashboard.html.twig";
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
        return new Source("{% extends 'basedashboard.html.twig' %}

{% block body %}

<section class=\"light-content our-team\">
    <div class=\"container\">
    <div class=\"section-header\">
\t\t<h2 class=\"section-title\">Conditions Generales d'Utilisation (CGU)</h2>
\t\t\t\t\t\t\t
\t</div>
    <div class=\"row\">
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


{% endblock %}", "cgu_dashboard.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/cgu_dashboard.html.twig");
    }
}
