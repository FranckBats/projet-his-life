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

/* mentions-legales.html.twig */
class __TwigTemplate_164bf2c9b257875faad65b69aad1a08963e23af425ad9de53bce383b3d4b30d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions-legales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions-legales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions-legales.html.twig", 1);
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

\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t<div class=\"section-header\">
\t\t<h2 class=\"section-title\">Mentions Légales</h2>
\t\t\t\t\t\t\t
\t</div>
\t\t
\t\t\t<div class=\"row\">
\t\t\t<div>
        \t\t<h4>Lien pour aller voir les <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Conditions générales d'utilisation</a></h4>
    \t\t</div>
\t\t\t\t<p>La seule contrepartie à l'utilisation de ces mentions légales, est l'engagement total à laisser le lien crédit subdelirium sur cette page de mentions légales.</p><br/>
\t\t\t\t
\t\t\t\t<h2>Informations légales</h2>
\t\t\t\t<h3>1. Présentation du site.</h3>
\t\t\t\t<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tl'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Propriétaire</strong>
\t\t\t\t\t: Hislife –  – <br/>
\t\t\t\t\t<strong>Créateur</strong>
\t\t\t\t\t:
\t\t\t\t\tAudrey Bodin<br/>
\t\t\t\t\t<strong>Responsable publication</strong>
\t\t\t\t\t: Audrey Bodin – hislife.contact@gmail.com<br/>
\t\t\t\t\tLe responsable publication est une personne physique ou une personne morale.<br/>
\t\t\t\t\t<strong>Webmaster</strong>
\t\t\t\t\t: Audrey Bodin – hislife.contact@gmail.com<br/>
\t\t\t\t\t<strong>Hébergeur</strong>
\t\t\t\t\t: Aws Amazon – Aws Amazon<br/>
\t\t\t\t\tCrédits : développeur : Audrey Bodin, Franck Bats, Gaëtan Canovas, Floriane Gitton<br/>
\t\t\t\t\tLe modèle de mentions légales est offert par Subdelirium.com
\t\t\t\t\tMentions légales
\t\t\t\t</p>
\t\t\t\t<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
\t\t\t\t<p>L’utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\timplique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tsont donc invités à les consulter de manière régulière.</p>
\t\t\t\t<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Hislife, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
\t\t\t\t<p>Le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\test mis à jour régulièrement par Audrey Bodin. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
\t\t\t\t<h3>3. Description des services fournis.</h3>
\t\t\t\t<p>Le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\ta pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
\t\t\t\t<p>Hislife s’efforce de fournir sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tdes informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
\t\t\t\t<p>Tous les informations indiquées sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tsont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
\t\t\t\t<h3>4. Limitations contractuelles sur les données techniques.</h3>
\t\t\t\t<p>Le site utilise la technologie JavaScript.</p>
\t\t\t\t<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
\t\t\t\t<h3>5. Propriété intellectuelle et contrefaçons.</h3>
\t\t\t\t<p>Hislife est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
\t\t\t\t<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Hislife.</p>
\t\t\t\t<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
\t\t\t\t<h3>6. Limitations de responsabilité.</h3>
\t\t\t\t<p>Hislife ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://ec2-34-227-161-244.compute-1.amazonaws.com/, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
\t\t\t\t<p>Hislife ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>.</p>
\t\t\t\t<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Hislife se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Hislife se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
\t\t\t\t<h3>7. Gestion des données personnelles.</h3>
\t\t\t\t<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
\t\t\t\t<p>A l'occasion de l'utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
\t\t\t\t<p>
\t\t\t\t\tEn tout état de cause Hislife ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tl’obligation ou non de fournir ces informations.</p>
\t\t\t\t<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
\t\t\t\t<p>Aucune information personnelle de l'utilisateur du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tn'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Hislife et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>.</p>
\t\t\t\t<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
\t\t\t\t<h3>8. Liens hypertextes et cookies.</h3>
\t\t\t\t<p>Le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tcontient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Hislife. Cependant, Hislife n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
\t\t\t\t<p>La navigation sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\test susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
\t\t\t\t<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
\t\t\t\t<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
\t\t\t\t<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
\t\t\t\t\t                Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
\t\t\t\t<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section \"Confidentialité\", cliquez sur Paramètres de contenu. Dans la section \"Cookies\", vous pouvez bloquer les cookies.</p>
\t\t\t\t<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section \"Confidentialité\", cliquez sur préférences.  Dans l'onglet \"Confidentialité\", vous pouvez bloquer les cookies.</p>

\t\t\t\t<h3>9. Droit applicable et attribution de juridiction.</h3>
\t\t\t\t<p>Tout litige en relation avec l’utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\test soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
\t\t\t\t<h3>10. Les principales lois concernées.</h3>
\t\t\t\t<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
\t\t\t\t<p>
\t\t\t\t\tLoi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
\t\t\t\t<h3>11. Lexique.</h3>
\t\t\t\t<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
\t\t\t\t<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions-legales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


\t<section class=\"light-content our-team\">
\t\t<div class=\"container\">
\t\t<div class=\"section-header\">
\t\t<h2 class=\"section-title\">Mentions Légales</h2>
\t\t\t\t\t\t\t
\t</div>
\t\t
\t\t\t<div class=\"row\">
\t\t\t<div>
        \t\t<h4>Lien pour aller voir les <a href=\"{{ path('cgu')}}\">Conditions générales d'utilisation</a></h4>
    \t\t</div>
\t\t\t\t<p>La seule contrepartie à l'utilisation de ces mentions légales, est l'engagement total à laisser le lien crédit subdelirium sur cette page de mentions légales.</p><br/>
\t\t\t\t
\t\t\t\t<h2>Informations légales</h2>
\t\t\t\t<h3>1. Présentation du site.</h3>
\t\t\t\t<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tl'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Propriétaire</strong>
\t\t\t\t\t: Hislife –  – <br/>
\t\t\t\t\t<strong>Créateur</strong>
\t\t\t\t\t:
\t\t\t\t\tAudrey Bodin<br/>
\t\t\t\t\t<strong>Responsable publication</strong>
\t\t\t\t\t: Audrey Bodin – hislife.contact@gmail.com<br/>
\t\t\t\t\tLe responsable publication est une personne physique ou une personne morale.<br/>
\t\t\t\t\t<strong>Webmaster</strong>
\t\t\t\t\t: Audrey Bodin – hislife.contact@gmail.com<br/>
\t\t\t\t\t<strong>Hébergeur</strong>
\t\t\t\t\t: Aws Amazon – Aws Amazon<br/>
\t\t\t\t\tCrédits : développeur : Audrey Bodin, Franck Bats, Gaëtan Canovas, Floriane Gitton<br/>
\t\t\t\t\tLe modèle de mentions légales est offert par Subdelirium.com
\t\t\t\t\tMentions légales
\t\t\t\t</p>
\t\t\t\t<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
\t\t\t\t<p>L’utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\timplique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tsont donc invités à les consulter de manière régulière.</p>
\t\t\t\t<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Hislife, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
\t\t\t\t<p>Le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\test mis à jour régulièrement par Audrey Bodin. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
\t\t\t\t<h3>3. Description des services fournis.</h3>
\t\t\t\t<p>Le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\ta pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
\t\t\t\t<p>Hislife s’efforce de fournir sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tdes informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
\t\t\t\t<p>Tous les informations indiquées sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tsont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
\t\t\t\t<h3>4. Limitations contractuelles sur les données techniques.</h3>
\t\t\t\t<p>Le site utilise la technologie JavaScript.</p>
\t\t\t\t<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
\t\t\t\t<h3>5. Propriété intellectuelle et contrefaçons.</h3>
\t\t\t\t<p>Hislife est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
\t\t\t\t<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Hislife.</p>
\t\t\t\t<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
\t\t\t\t<h3>6. Limitations de responsabilité.</h3>
\t\t\t\t<p>Hislife ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://ec2-34-227-161-244.compute-1.amazonaws.com/, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
\t\t\t\t<p>Hislife ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>.</p>
\t\t\t\t<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Hislife se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Hislife se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
\t\t\t\t<h3>7. Gestion des données personnelles.</h3>
\t\t\t\t<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
\t\t\t\t<p>A l'occasion de l'utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
\t\t\t\t<p>
\t\t\t\t\tEn tout état de cause Hislife ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tl’obligation ou non de fournir ces informations.</p>
\t\t\t\t<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
\t\t\t\t<p>Aucune information personnelle de l'utilisateur du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tn'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Hislife et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>.</p>
\t\t\t\t<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
\t\t\t\t<h3>8. Liens hypertextes et cookies.</h3>
\t\t\t\t<p>Le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\tcontient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Hislife. Cependant, Hislife n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
\t\t\t\t<p>La navigation sur le site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\test susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
\t\t\t\t<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
\t\t\t\t<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
\t\t\t\t<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
\t\t\t\t\t                Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
\t\t\t\t<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section \"Confidentialité\", cliquez sur Paramètres de contenu. Dans la section \"Cookies\", vous pouvez bloquer les cookies.</p>
\t\t\t\t<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section \"Confidentialité\", cliquez sur préférences.  Dans l'onglet \"Confidentialité\", vous pouvez bloquer les cookies.</p>

\t\t\t\t<h3>9. Droit applicable et attribution de juridiction.</h3>
\t\t\t\t<p>Tout litige en relation avec l’utilisation du site
\t\t\t\t\t<a href=\"http://http://ec2-34-227-161-244.compute-1.amazonaws.com//\">http://ec2-34-227-161-244.compute-1.amazonaws.com/</a>
\t\t\t\t\test soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
\t\t\t\t<h3>10. Les principales lois concernées.</h3>
\t\t\t\t<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
\t\t\t\t<p>
\t\t\t\t\tLoi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
\t\t\t\t<h3>11. Lexique.</h3>
\t\t\t\t<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
\t\t\t\t<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "mentions-legales.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/mentions-legales.html.twig");
    }
}
