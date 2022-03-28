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

/* nbfrais/nbfrais.html.twig */
class __TwigTemplate_4fb17426aa509f06252a17e043d5863c53cc88ce7358712b4b364c20e268e1ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nbfrais/nbfrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nbfrais/nbfrais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nbfrais/nbfrais.html.twig", 1);
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
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateurs ayant des frais </h1></center>
        ";
        } else {
            // line 8
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs ayant des frais </b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Nombre de frais</th>


    </tr>
  </thead>
  <tbody>
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 24
                echo "    <tr> 
      <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
      <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
      <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "Nombre", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>

    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo ":
     ";
        }
        // line 32
        echo "  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        ";
        // line 37
        if (twig_test_empty((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateur ayant des frais</h1></center>
        ";
        } else {
            // line 41
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs ayant des frais</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Nombre de frais</th>

    </tr>
  </thead>
  <tbody>
      ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 56
                echo "    <tr> 
      <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
      <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
      <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "Nombre", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
      
      
    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo ":
     ";
        }
        // line 65
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
        return "nbfrais/nbfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  180 => 63,  169 => 59,  165 => 58,  161 => 57,  158 => 56,  154 => 55,  138 => 41,  133 => 38,  131 => 37,  124 => 32,  120 => 30,  110 => 27,  106 => 26,  102 => 25,  99 => 24,  95 => 23,  78 => 8,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"pc\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateurs ayant des frais </h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs ayant des frais </b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Nombre de frais</th>


    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>
      <td>{{ unUser.Nombre }}</td>

    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateur ayant des frais</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs ayant des frais</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>
      <th scope=\"col\">Nombre de frais</th>

    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>
      <td>{{ unUser.Nombre }}</td>
      
      
    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    
{% endblock %}{# empty Twig template #}
", "nbfrais/nbfrais.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\nbfrais\\nbfrais.html.twig");
    }
}
