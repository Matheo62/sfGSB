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

/* utilisateurConcerne/utilisateurConcerne.html.twig */
class __TwigTemplate_9fce28e65402d47b9041f217d427e9e9d498c6ef808b34c4371d6eaefe52339e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurConcerne/utilisateurConcerne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurConcerne/utilisateurConcerne.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateurConcerne/utilisateurConcerne.html.twig", 1);
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
        if (twig_test_empty((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune utilisateur concerné par les fiche frais</h1></center>
        ";
        } else {
            // line 8
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs concernés par les fiche frais<br/></b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">ID Fiche Frais</th>
      <th scope=\"col\">Nom Utilisateur Secondaire</th>
      <th scope=\"col\">Prénom Utilisateur Secondaire</th>
      <th scope=\"col\">Niveau Utilisateur Secondaire</th>
      

    </tr>
  </thead>
  <tbody>
      ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 25
                echo "    <tr> 
      <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
      <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
      <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
      <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "niveau", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>

    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo ":
     ";
        }
        // line 34
        echo "  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        ";
        // line 39
        if (twig_test_empty((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune utilisateur concerné par les fiche frais</h1></center>
        ";
        } else {
            // line 43
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs concernés par les fiche frais</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">ID Fiche Frais</th>
      <th scope=\"col\">Nom Utilisateur Principale</th>
      <th scope=\"col\">Prénom Utilisateur Principale</th>
      <th scope=\"col\">Niveau Utilisateur Secondaire</th>
      

    </tr>
  </thead>
  <tbody>
      ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 60
                echo "    <tr> 
      <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unUser"], "idFicheFrais", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
      <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unUser"], "idFicheFrais", [], "any", false, false, false, 62), "idutilisateur", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
      <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unUser"], "idFicheFrais", [], "any", false, false, false, 63), "idutilisateur", [], "any", false, false, false, 63), "prenom", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
      <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
      <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "niveau", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>

    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo ":
     ";
        }
        // line 70
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
        return "utilisateurConcerne/utilisateurConcerne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 70,  194 => 68,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  168 => 61,  165 => 60,  161 => 59,  143 => 43,  138 => 40,  136 => 39,  129 => 34,  125 => 32,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  100 => 25,  96 => 24,  78 => 8,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"pc\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune utilisateur concerné par les fiche frais</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs concernés par les fiche frais<br/></b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">ID Fiche Frais</th>
      <th scope=\"col\">Nom Utilisateur Secondaire</th>
      <th scope=\"col\">Prénom Utilisateur Secondaire</th>
      <th scope=\"col\">Niveau Utilisateur Secondaire</th>
      

    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.id }}</td>
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>
      <td>{{ unUser.niveau }}</td>

    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune utilisateur concerné par les fiche frais</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs concernés par les fiche frais</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">ID Fiche Frais</th>
      <th scope=\"col\">Nom Utilisateur Principale</th>
      <th scope=\"col\">Prénom Utilisateur Principale</th>
      <th scope=\"col\">Niveau Utilisateur Secondaire</th>
      

    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.idFicheFrais.id}}</td>
      <td>{{ unUser.idFicheFrais.idutilisateur.nom }}</td>
      <td>{{ unUser.idFicheFrais.idutilisateur.prenom }}</td>
      <td>{{ unUser.prenom }}</td>
      <td>{{ unUser.niveau }}</td>

    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    
{% endblock %}{# empty Twig template #}
", "utilisateurConcerne/utilisateurConcerne.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\utilisateurConcerne\\utilisateurConcerne.html.twig");
    }
}
