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

/* etat/index.html.twig */
class __TwigTemplate_3be199113d04679e3d2b5386dcb10123a2655806a8a080283b2026fd3470cb7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etat/index.html.twig", 1);
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

        echo "Liste des états";
        
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
        echo "    <div class=\"pc\">
        ";
        // line 7
        if (twig_test_empty((isset($context["etats"]) || array_key_exists("etats", $context) ? $context["etats"] : (function () { throw new RuntimeError('Variable "etats" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "         <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucun État</h1></center>
        ";
        } else {
            // line 10
            echo "        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Liste des états</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
        <table class=\"table\" style=\"color:white;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etats"]) || array_key_exists("etats", $context) ? $context["etats"] : (function () { throw new RuntimeError('Variable "etats" does not exist.', 23, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 24
                echo "            <tr>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etat"], "libelle", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                <td>
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Détails  |  </a>
                    
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">Modifier</a>
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 34
                echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
        }
        // line 39
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_new");
        echo "\">Create new</a>
        </div>
    </div>
    <div class=\"mobile\">
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Liste des états</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
        <table class=\"table\" style=\"color:white;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etats"]) || array_key_exists("etats", $context) ? $context["etats"] : (function () { throw new RuntimeError('Variable "etats" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
            // line 60
            echo "            <tr>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etat"], "libelle", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Détails</a>
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_new");
        echo "\">Create new</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 76,  219 => 73,  210 => 69,  201 => 65,  197 => 64,  192 => 62,  188 => 61,  185 => 60,  180 => 59,  160 => 42,  155 => 39,  152 => 38,  143 => 34,  134 => 30,  129 => 28,  124 => 26,  120 => 25,  117 => 24,  112 => 23,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des états{% endblock %}

{% block body %}
    <div class=\"pc\">
        {% if etats is empty %}
         <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Aucun État</h1></center>
        {% else %}
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Liste des états</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
        <table class=\"table\" style=\"color:white;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etat in etats %}
            <tr>
                <td>{{ etat.id }}</td>
                <td>{{ etat.libelle }}</td>
                <td>
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"{{ path('etat_show', {'id': etat.id}) }}\">Détails  |  </a>
                    
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"{{ path('etat_edit', {'id': etat.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>

    <a href=\"{{ path('etat_new') }}\">Create new</a>
        </div>
    </div>
    <div class=\"mobile\">
        <br/><br/><br/>
        <center><h1 class=\"title text-light\" style=\"font-size:50px; border\">Liste des états</h1></center>
        <br/>
        <div class=\"p-5 border\" style=\"background-color:#374e6e \">
        <table class=\"table\" style=\"color:white;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etat in etats %}
            <tr>
                <td>{{ etat.id }}</td>
                <td>{{ etat.libelle }}</td>
                <td>
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"{{ path('etat_show', {'id': etat.id}) }}\">Détails</a>
                    <a style=\"color:white; margin-left:-100px; text-decoration: none;\" href=\"{{ path('etat_edit', {'id': etat.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('etat_new') }}\">Create new</a>
        </div>
    </div>
{% endblock %}
", "etat/index.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\etat\\index.html.twig");
    }
}
