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

/* emails/mailInscription.html.twig */
class __TwigTemplate_51a08e04492dcd8510d9a2b30c8de91ef1161d755008f458bfbe15a9aa0d5629 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/mailInscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/mailInscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700\" rel=\"stylesheet\">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*=\"margin: 16px 0\"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}


    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

\t    .primary{
\tbackground: #17bebb;
}
.bg_white{
\tbackground: #ffffff;
}
.bg_light{
\tbackground: #f7fafa;
}
.bg_black{
\tbackground: #000000;
}
.bg_dark{
\tbackground: rgba(0,0,0,.8);
}
.email-section{
\tpadding:2.5em;
}

/*BUTTON*/
.btn{
\tpadding: 10px 15px;
\tdisplay: inline-block;
}
.btn.btn-primary{
\tborder-radius: 5px;
\tbackground: #17bebb;
\tcolor: #ffffff;
}
.btn.btn-white{
\tborder-radius: 5px;
\tbackground: #ffffff;
\tcolor: #000000;
}
.btn.btn-white-outline{
\tborder-radius: 5px;
\tbackground: transparent;
\tborder: 1px solid #fff;
\tcolor: #fff;
}
.btn.btn-black-outline{
\tborder-radius: 0px;
\tbackground: transparent;
\tborder: 2px solid #000;
\tcolor: #000;
\tfont-weight: 700;
}
.btn-custom{
\tcolor: rgba(0,0,0,.3);
\ttext-decoration: underline;
}

h1,h2,h3,h4,h5,h6{
\tfont-family: 'Poppins', sans-serif;
\tcolor: #000000;
\tmargin-top: 0;
\tfont-weight: 400;
}

body{
\tfont-family: 'Poppins', sans-serif;
\tfont-weight: 400;
\tfont-size: 15px;
\tline-height: 1.8;
\tcolor: rgba(0,0,0,.4);
}

a{
\tcolor: #17bebb;
}

table{
}
/*LOGO*/

.logo h1{
\tmargin: 0;
}
.logo h1 a{
\tcolor: #17bebb;
\tfont-size: 24px;
\tfont-weight: 700;
\tfont-family: 'Poppins', sans-serif;
}

/*HERO*/
.hero{
\tposition: relative;
\tz-index: 0;
}

.hero .text{
\tcolor: rgba(0,0,0,.3);
}
.hero .text h2{
\tcolor: #000;
\tfont-size: 34px;
\tmargin-bottom: 0;
\tfont-weight: 200;
\tline-height: 1.4;
}
.hero .text h3{
\tfont-size: 24px;
\tfont-weight: 300;
}
.hero .text h2 span{
\tfont-weight: 600;
\tcolor: #000;
}

.text-author{
\tbordeR: 1px solid rgba(0,0,0,.05);
\tmax-width: 50%;
\tmargin: 0 auto;
\tpadding: 2em;
}
.text-author img{
\tborder-radius: 50%;
\tpadding-bottom: 20px;
}
.text-author h3{
\tmargin-bottom: 0;
}
ul.social{
\tpadding: 0;
}
ul.social li{
\tdisplay: inline-block;
\tmargin-right: 10px;
}

/*FOOTER*/

.footer{
\tborder-top: 1px solid rgba(0,0,0,.05);
\tcolor: rgba(0,0,0,.5);
}
.footer .heading{
\tcolor: #000;
\tfont-size: 20px;
}
.footer ul{
\tmargin: 0;
\tpadding: 0;
}
.footer ul li{
\tlist-style: none;
\tmargin-bottom: 10px;
}
.footer ul li a{
\tcolor: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;\">
\t<center style=\"width: 100%; background-color: #f1f1f1;\">
    <div style=\"display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style=\"max-width: 600px; margin: 0 auto;\" class=\"email-container\">
    \t<!-- BEGIN BODY -->
      <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: auto;\">
      \t<tr>
          <td valign=\"top\" class=\"bg_white\" style=\"padding: 1em 2.5em 0 2.5em;\">
          \t<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
          \t\t<tr>
          \t\t\t<td class=\"logo\" style=\"text-align: center;\">
\t\t\t            <h1>His Life</h1>
\t\t\t          </td>
          \t\t</tr>
          \t</table>
          </td>
\t      </tr><!-- end tr -->
\t\t\t\t<tr>
          <td valign=\"middle\" class=\"hero bg_white\" style=\"padding: 2em 0 4em 0;\">
            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            \t<tr>
            \t\t<td style=\"padding: 0 2.5em; text-align: center; padding-bottom: 3em;\">
            \t\t\t<div class=\"text\">
            \t\t\t\t<h2>Merci de votre inscription sur His Life</h2>
            \t\t\t</div>
            \t\t</td>
            \t</tr>
            \t<tr>
\t\t\t          <td style=\"text-align: center;\">
\t\t\t          \t<div class=\"text-author\">
\t\t\t\t          \t<img src=\"images/person_2.jpg\" alt=\"\" style=\"width: 100px; max-width: 600px; height: auto; margin: auto; display: block;\">
\t\t\t\t          \t<h3 class=\"name\">";
        // line 320
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 320, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t          \t<span class=\"position\">";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 321, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t  <p> Connectez vous à votre compte </p>
\t\t\t\t           \t<p><a href=\"http://ec2-34-227-161-244.compute-1.amazonaws.com/connexion\" class=\"btn btn-primary\">Se connecter</a></p>
\t\t\t           \t</div>
\t\t\t          </td>
\t\t\t        </tr>
            </table>
          </td>
\t      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
      ";
        // line 385
        echo "
    </div>
  </center>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/mailInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 385,  368 => 321,  364 => 320,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700\" rel=\"stylesheet\">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*=\"margin: 16px 0\"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}


    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

\t    .primary{
\tbackground: #17bebb;
}
.bg_white{
\tbackground: #ffffff;
}
.bg_light{
\tbackground: #f7fafa;
}
.bg_black{
\tbackground: #000000;
}
.bg_dark{
\tbackground: rgba(0,0,0,.8);
}
.email-section{
\tpadding:2.5em;
}

/*BUTTON*/
.btn{
\tpadding: 10px 15px;
\tdisplay: inline-block;
}
.btn.btn-primary{
\tborder-radius: 5px;
\tbackground: #17bebb;
\tcolor: #ffffff;
}
.btn.btn-white{
\tborder-radius: 5px;
\tbackground: #ffffff;
\tcolor: #000000;
}
.btn.btn-white-outline{
\tborder-radius: 5px;
\tbackground: transparent;
\tborder: 1px solid #fff;
\tcolor: #fff;
}
.btn.btn-black-outline{
\tborder-radius: 0px;
\tbackground: transparent;
\tborder: 2px solid #000;
\tcolor: #000;
\tfont-weight: 700;
}
.btn-custom{
\tcolor: rgba(0,0,0,.3);
\ttext-decoration: underline;
}

h1,h2,h3,h4,h5,h6{
\tfont-family: 'Poppins', sans-serif;
\tcolor: #000000;
\tmargin-top: 0;
\tfont-weight: 400;
}

body{
\tfont-family: 'Poppins', sans-serif;
\tfont-weight: 400;
\tfont-size: 15px;
\tline-height: 1.8;
\tcolor: rgba(0,0,0,.4);
}

a{
\tcolor: #17bebb;
}

table{
}
/*LOGO*/

.logo h1{
\tmargin: 0;
}
.logo h1 a{
\tcolor: #17bebb;
\tfont-size: 24px;
\tfont-weight: 700;
\tfont-family: 'Poppins', sans-serif;
}

/*HERO*/
.hero{
\tposition: relative;
\tz-index: 0;
}

.hero .text{
\tcolor: rgba(0,0,0,.3);
}
.hero .text h2{
\tcolor: #000;
\tfont-size: 34px;
\tmargin-bottom: 0;
\tfont-weight: 200;
\tline-height: 1.4;
}
.hero .text h3{
\tfont-size: 24px;
\tfont-weight: 300;
}
.hero .text h2 span{
\tfont-weight: 600;
\tcolor: #000;
}

.text-author{
\tbordeR: 1px solid rgba(0,0,0,.05);
\tmax-width: 50%;
\tmargin: 0 auto;
\tpadding: 2em;
}
.text-author img{
\tborder-radius: 50%;
\tpadding-bottom: 20px;
}
.text-author h3{
\tmargin-bottom: 0;
}
ul.social{
\tpadding: 0;
}
ul.social li{
\tdisplay: inline-block;
\tmargin-right: 10px;
}

/*FOOTER*/

.footer{
\tborder-top: 1px solid rgba(0,0,0,.05);
\tcolor: rgba(0,0,0,.5);
}
.footer .heading{
\tcolor: #000;
\tfont-size: 20px;
}
.footer ul{
\tmargin: 0;
\tpadding: 0;
}
.footer ul li{
\tlist-style: none;
\tmargin-bottom: 10px;
}
.footer ul li a{
\tcolor: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;\">
\t<center style=\"width: 100%; background-color: #f1f1f1;\">
    <div style=\"display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style=\"max-width: 600px; margin: 0 auto;\" class=\"email-container\">
    \t<!-- BEGIN BODY -->
      <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: auto;\">
      \t<tr>
          <td valign=\"top\" class=\"bg_white\" style=\"padding: 1em 2.5em 0 2.5em;\">
          \t<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
          \t\t<tr>
          \t\t\t<td class=\"logo\" style=\"text-align: center;\">
\t\t\t            <h1>His Life</h1>
\t\t\t          </td>
          \t\t</tr>
          \t</table>
          </td>
\t      </tr><!-- end tr -->
\t\t\t\t<tr>
          <td valign=\"middle\" class=\"hero bg_white\" style=\"padding: 2em 0 4em 0;\">
            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            \t<tr>
            \t\t<td style=\"padding: 0 2.5em; text-align: center; padding-bottom: 3em;\">
            \t\t\t<div class=\"text\">
            \t\t\t\t<h2>Merci de votre inscription sur His Life</h2>
            \t\t\t</div>
            \t\t</td>
            \t</tr>
            \t<tr>
\t\t\t          <td style=\"text-align: center;\">
\t\t\t          \t<div class=\"text-author\">
\t\t\t\t          \t<img src=\"images/person_2.jpg\" alt=\"\" style=\"width: 100px; max-width: 600px; height: auto; margin: auto; display: block;\">
\t\t\t\t          \t<h3 class=\"name\">{{ firstname }}</h3>
\t\t\t\t          \t<span class=\"position\">{{ lastname }}</span>
\t\t\t\t\t\t\t  <p> Connectez vous à votre compte </p>
\t\t\t\t           \t<p><a href=\"http://ec2-34-227-161-244.compute-1.amazonaws.com/connexion\" class=\"btn btn-primary\">Se connecter</a></p>
\t\t\t           \t</div>
\t\t\t          </td>
\t\t\t        </tr>
            </table>
          </td>
\t      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
      {# <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: auto;\">
      \t<tr>
          <td valign=\"middle\" class=\"bg_light footer email-section\">
            <table>
            \t<tr>
                <td valign=\"top\" width=\"33.333%\" style=\"padding-top: 20px;\">
                  <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                    <tr>
                      <td style=\"text-align: left; padding-right: 10px;\">
                      \t<h3 class=\"heading\">About</h3>
                      \t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      </td>
                    </tr>
                  </table>
                </td>
                <td valign=\"top\" width=\"33.333%\" style=\"padding-top: 20px;\">
                  <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                    <tr>
                      <td style=\"text-align: left; padding-left: 5px; padding-right: 5px;\">
                      \t<h3 class=\"heading\">Contact Info</h3>
                      \t<ul>
\t\t\t\t\t                <li><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t\t\t\t\t                <li><span class=\"text\">+2 392 3929 210</span></a></li>
\t\t\t\t\t              </ul>
                      </td>
                    </tr>
                  </table>
                </td>
                <td valign=\"top\" width=\"33.333%\" style=\"padding-top: 20px;\">
                  <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                    <tr>
                      <td style=\"text-align: left; padding-left: 10px;\">
                      \t<h3 class=\"heading\">Useful Links</h3>
                      \t<ul>
\t\t\t\t\t                <li><a href=\"#\">Home</a></li>
\t\t\t\t\t                <li><a href=\"#\">About</a></li>
\t\t\t\t\t                <li><a href=\"#\">Services</a></li>
\t\t\t\t\t                <li><a href=\"#\">Work</a></li>
\t\t\t\t\t              </ul>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
        <tr>
          <td class=\"bg_light\" style=\"text-align: center;\">
          \t<p>No longer want to receive these email? You can <a href=\"#\" style=\"color: rgba(0,0,0,.8);\">Unsubscribe here</a></p>
          </td>
        </tr>
      </table> #}

    </div>
  </center>
</body>
</html>", "emails/mailInscription.html.twig", "/Users/franckbats/Sites/projet-his-life/templates/emails/mailInscription.html.twig");
    }
}
