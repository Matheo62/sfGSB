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

/* users/users.html.twig */
class __TwigTemplate_2c8d1ee8c29296d07e1a888ff8a2e182729b2a43e05eb4b33599b7640bc029f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/users.html.twig", 1);
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
        echo "    <div class=\"pc\">
        ";
        // line 4
        if (twig_test_empty((isset($context["lesUsers"]) || array_key_exists("lesUsers", $context) ? $context["lesUsers"] : (function () { throw new RuntimeError('Variable "lesUsers" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Inscription</h1></center>
        ";
        } else {
            // line 8
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs<br/></b></h1><p class=\"title\" style=\"color:white; font-size: 18px;\">";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lesUsers"]) || array_key_exists("lesUsers", $context) ? $context["lesUsers"] : (function () { throw new RuntimeError('Variable "lesUsers" does not exist.', 9, $this->source); })())), "html", null, true);
            echo " utilisateurs inscris sur le site</p></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Adresse</th>
      <th scope=\"col\">Cp</th>
      <th scope=\"col\">Ville</th>
      <th scope=\"col\">Date Embauche</th>
      <th scope=\"col\">Catégorie</th>

    </tr>
  </thead>
  <tbody>
      ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesUsers"]) || array_key_exists("lesUsers", $context) ? $context["lesUsers"] : (function () { throw new RuntimeError('Variable "lesUsers" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 27
                echo "    <tr> 
      <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
      <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
      <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "adresse", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
      <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "cp", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
      <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "ville", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
      <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "dateEmbauche", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                echo "</td>.
      <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unUser"], "laCategorie", [], "any", false, false, false, 34), "libelle", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo ":
     ";
        }
        // line 38
        echo "  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        ";
        // line 43
        if (twig_test_empty((isset($context["lesUsers"]) || array_key_exists("lesUsers", $context) ? $context["lesUsers"] : (function () { throw new RuntimeError('Variable "lesUsers" does not exist.', 43, $this->source); })()))) {
            // line 44
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Inscription</h1></center>
        ";
        } else {
            // line 47
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Adresse</th>
      <th scope=\"col\">Cp</th>
      <th scope=\"col\">Ville</th>
      <th scope=\"col\">Date Embauche</th>
      <th scope=\"col\">Catégorie</th>

    </tr>
  </thead>
  <tbody>
      ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesUsers"]) || array_key_exists("lesUsers", $context) ? $context["lesUsers"] : (function () { throw new RuntimeError('Variable "lesUsers" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 66
                echo "    <tr> 
      <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
      <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
      <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "adresse", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
      <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "cp", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
      <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "ville", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
      <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "dateEmbauche", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
                echo "</td>
      <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unUser"], "laCategorie", [], "any", false, false, false, 73), "libelle", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo ":
     ";
        }
        // line 77
        echo "  </tbody>
</table>
    </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 77,  219 => 75,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  194 => 69,  190 => 68,  186 => 67,  183 => 66,  179 => 65,  159 => 47,  154 => 44,  152 => 43,  145 => 38,  141 => 36,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  105 => 27,  101 => 26,  81 => 9,  78 => 8,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"pc\">
        {% if lesUsers is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Inscription</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs<br/></b></h1><p class=\"title\" style=\"color:white; font-size: 18px;\">{{ lesUsers |length }} utilisateurs inscris sur le site</p></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Adresse</th>
      <th scope=\"col\">Cp</th>
      <th scope=\"col\">Ville</th>
      <th scope=\"col\">Date Embauche</th>
      <th scope=\"col\">Catégorie</th>

    </tr>
  </thead>
  <tbody>
      {% for unUser in lesUsers %}
    <tr> 
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>
      <td>{{ unUser.adresse }}</td>
      <td>{{ unUser.cp }}</td>
      <td>{{ unUser.ville }}</td>
      <td>{{ unUser.dateEmbauche|date('d/m/Y')}}</td>.
      <td>{{ unUser.laCategorie.libelle}}</td>
    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        {% if lesUsers is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Inscription</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Adresse</th>
      <th scope=\"col\">Cp</th>
      <th scope=\"col\">Ville</th>
      <th scope=\"col\">Date Embauche</th>
      <th scope=\"col\">Catégorie</th>

    </tr>
  </thead>
  <tbody>
      {% for unUser in lesUsers %}
    <tr> 
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>
      <td>{{ unUser.adresse }}</td>
      <td>{{ unUser.cp }}</td>
      <td>{{ unUser.ville }}</td>
      <td>{{ unUser.dateEmbauche|date('d/m/Y')}}</td>
      <td>{{ unUser.laCategorie.libelle}}</td>
    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    
{% endblock %}{# empty Twig template #}
", "users/users.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\users\\users.html.twig");
    }
}
