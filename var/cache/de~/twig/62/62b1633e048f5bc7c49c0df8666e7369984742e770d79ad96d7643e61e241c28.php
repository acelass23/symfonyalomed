<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @alomed/pages/view.html.twig */
class __TwigTemplate_0e0e4d3d255264e3ae825baf64d5c20f30f391036de7825d957d31ddf3fbccc5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>home page </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" />
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0000FF;
        }
        h3 {
            display: block;
            font-size: 3em;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
            color: #111111;
        }


        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
<ul>
    <li><a href=\"#\">Alomed plateforme</a></li>
</ul>
<div class=\"container\">
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a>
    <div class=\"list-group\">
        <table>
        <tr>LIVREUR
             <tr>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "id", []), "html", null, true);
        echo "
            <td><p class=\"list-group-item\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "nom", []), "html", null, true);
        echo " </p></td>
        <p class=\"list-group-item\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "prenom", []), "html", null, true);
        echo " </p>
        <p class=\"list-group-item\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "adresse", []), "html", null, true);
        echo " </p>
        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a>
        <tr>
        </table>
    </div>


</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@alomed/pages/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 61,  112 => 60,  108 => 59,  104 => 58,  100 => 57,  93 => 53,  43 => 6,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>home page </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ absolute_url(asset('css/bootstrap.css')) }}\" />
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0000FF;
        }
        h3 {
            display: block;
            font-size: 3em;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
            color: #111111;
        }


        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
<ul>
    <li><a href=\"#\">Alomed plateforme</a></li>
</ul>
<div class=\"container\">
    <a href=\"{{ absolute_url(asset('')) }}app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a>
    <div class=\"list-group\">
        <table>
        <tr>LIVREUR
             <tr>{{ livreur.id}}
            <td><p class=\"list-group-item\">{{ livreur.nom}} </p></td>
        <p class=\"list-group-item\">{{ livreur.prenom}} </p>
        <p class=\"list-group-item\">{{ livreur.adresse}} </p>
        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a>
        <tr>
        </table>
    </div>


</div>
</body>
</html>", "@alomed/pages/view.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/pages/view.html.twig");
    }
}
