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

/* etat/show.html.twig */
class __TwigTemplate_c6f1565b88d2346972778a513d7f371f8461d1f24873da566eef4561f4cd9f4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etat/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails de l'état";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <div class=\"pc\">
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Détails de l'état</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 19, $this->source); })()), "libelle", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

                <center><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_index");
        echo "\">Retour</a>

    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">Modifier</a>
    
    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">Supprimer</a></center>

        </div>
   </div>
    
    <div class=\"mobile\">
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Détails de l'état</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 46, $this->source); })()), "libelle", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_index");
        echo "\" style=\"font-size:14px;\">Retour</a>

    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" style=\"font-size:14px;\">Modifier</a>
    
    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" style=\"font-size:14px;\">Supprimer</a>

        </div>
   </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 55,  161 => 53,  156 => 51,  148 => 46,  141 => 42,  124 => 28,  119 => 26,  114 => 24,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'état{% endblock %}

{% block body %}
   <div class=\"pc\">
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Détails de l'état</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ etat.id }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ etat.libelle }}</td>
            </tr>
        </tbody>
    </table>

                <center><a href=\"{{ path('etat_index') }}\">Retour</a>

    <a href=\"{{ path('etat_edit', {'id': etat.id}) }}\">Modifier</a>
    
    <a href=\"{{ path('etat_delete', {'id':etat.id}) }}\">Supprimer</a></center>

        </div>
   </div>
    
    <div class=\"mobile\">
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Détails de l'état</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ etat.id }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ etat.libelle }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('etat_index') }}\" style=\"font-size:14px;\">Retour</a>

    <a href=\"{{ path('etat_edit', {'id': etat.id}) }}\" style=\"font-size:14px;\">Modifier</a>
    
    <a href=\"{{ path('etat_delete', {'id':etat.id}) }}\" style=\"font-size:14px;\">Supprimer</a>

        </div>
   </div>
{% endblock %}
", "etat/show.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\etat\\show.html.twig");
    }
}
