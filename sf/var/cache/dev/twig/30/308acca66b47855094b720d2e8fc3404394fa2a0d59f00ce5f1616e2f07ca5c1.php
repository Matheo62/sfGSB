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

/* domaine/domaine.html.twig */
class __TwigTemplate_1f1dd09c4dcf3e3b31515eefe4fc62b3ed93f46866bda6a68220d7b8c07f1f78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domaine/domaine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domaine/domaine.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "domaine/domaine.html.twig", 1);
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
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Catégorie avec leur Domaines</h1></center>
        ";
        } else {
            // line 8
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des Catégorie avec leur Domaines<br/></b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Catégorie</th>
      <th scope=\"col\">Domaine</th>
      <th scope=\"col\">2ème Domaine (s'il y en a)</th>

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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "libelle", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["unUser"], "leDomaine", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
                    // line 26
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 26), "html", null, true);
                    echo "</td>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "     ";
        }
        // line 31
        echo "  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        ";
        // line 36
        if (twig_test_empty((isset($context["laliste"]) || array_key_exists("laliste", $context) ? $context["laliste"] : (function () { throw new RuntimeError('Variable "laliste" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Catégorie avec leur Domaines</h1></center>
        ";
        } else {
            // line 40
            echo "    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des Catégorie avec leur Domaines</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Catégorie</th>
      <th scope=\"col\">Domaine</th>
      <th scope=\"col\">2ème Domaine (s'il y en a)</th>
      

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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUser"], "libelle", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
        ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["unUser"], "leDomaine", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
                    // line 59
                    echo "            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 59), "html", null, true);
                    echo "</td>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "     ";
        }
        // line 64
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
        return "domaine/domaine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 64,  190 => 63,  183 => 61,  174 => 59,  170 => 58,  166 => 57,  163 => 56,  159 => 55,  142 => 40,  137 => 37,  135 => 36,  128 => 31,  125 => 30,  118 => 28,  109 => 26,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  78 => 8,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"pc\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Catégorie avec leur Domaines</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des Catégorie avec leur Domaines<br/></b></h1></center>
    <br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Catégorie</th>
      <th scope=\"col\">Domaine</th>
      <th scope=\"col\">2ème Domaine (s'il y en a)</th>

    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.libelle }}</td>
        {% for domaine in unUser.leDomaine %}
            <td>{{ domaine.nomDomaine }}</td>
        {% endfor %}
    </tr>
     {% endfor %}
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    <div class=\"mobile\">
        {% if laliste is empty %}
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucune Catégorie avec leur Domaines</h1></center>
        {% else %}
    <br/><br/><br/><br/><br/>
    <center><h1 class=\"title text-light\" style=\"font-size:50px; border\"><b>Liste des Catégorie avec leur Domaines</b></h1></center>
    <br/><br/><br/><br/><br/>
    <div class=\"p-5 border\" style=\"background-color:#374e6e \">
    <table class=\"table\" style=\"color:white;\">
  <thead style=\"color:white;\">
    <tr>
      <th scope=\"col\">Catégorie</th>
      <th scope=\"col\">Domaine</th>
      <th scope=\"col\">2ème Domaine (s'il y en a)</th>
      

    </tr>
  </thead>
  <tbody>
      {% for unUser in laliste %}
    <tr> 
      <td>{{ unUser.libelle }}</td>
        {% for domaine in unUser.leDomaine %}
            <td>{{ domaine.nomDomaine }}</td>
        {% endfor %}
    </tr>
     {% endfor %}
     {% endif %}
  </tbody>
</table>
    </div>
    </div>
    
{% endblock %}{# empty Twig template #}
", "domaine/domaine.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\domaine\\domaine.html.twig");
    }
}
