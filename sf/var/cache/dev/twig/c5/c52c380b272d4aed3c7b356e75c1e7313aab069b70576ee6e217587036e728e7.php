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

/* cadurcien/cadurcien.html.twig */
class __TwigTemplate_b64933070db0f456fa8e8404235f7cb23c5cebbd594a310c7a01fceb665d321f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cadurcien/cadurcien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cadurcien/cadurcien.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cadurcien/cadurcien.html.twig", 1);
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
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateurs à Cahors</h1></center>
        ";
        } else {
            // line 8
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs vivant à Cahors </b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>


    </tr>
  </thead>
  <tbody>
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 23
                echo "    <tr> 
      <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
      <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>

    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo ":
     ";
        }
        // line 30
        echo "  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        ";
        // line 35
        if (twig_test_empty((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateur à Cahors</h1></center>
        ";
        } else {
            // line 39
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs vivant à Cahors</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>

    </tr>
  </thead>
  <tbody>
      ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUser"]) {
                // line 53
                echo "    <tr> 
      <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "nom", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
      <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "prenom", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
      
    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo ":
     ";
        }
        // line 60
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
        return "cadurcien/cadurcien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  169 => 58,  159 => 55,  155 => 54,  152 => 53,  148 => 52,  133 => 39,  128 => 36,  126 => 35,  119 => 30,  115 => 28,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  78 => 8,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"pc\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateurs à Cahors</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs vivant à Cahors </b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>


    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>

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
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Utilisateur à Cahors</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des utilisateurs vivant à Cahors</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Prénom</th>

    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.nom }}</td>
      <td>{{ unUser.prenom }}</td>
      
    </tr>
     {% endfor %}:
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    
{% endblock %}{# empty Twig template #}
", "cadurcien/cadurcien.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\cadurcien\\cadurcien.html.twig");
    }
}
