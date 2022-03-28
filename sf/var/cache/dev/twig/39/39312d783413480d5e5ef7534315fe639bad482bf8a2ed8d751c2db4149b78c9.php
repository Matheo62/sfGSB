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

/* base.html.twig */
class __TwigTemplate_629542dcec0343796fe5e409f70d555e51ef2db75e067804887eaf9c952baf9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link  rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link  rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF\" crossorigin=\"anonymous\">
    <title>Le site GSB</title>
  </head>
        ";
        // line 14
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    

  <body>
      
      <nav class=\"navbar navbar-expand-md navbar-dark p-md-1\" style=\"background-color:rgba(0,0,0,0.4);\">
          <a class=\"px-5\" href=\"/accueil\"><b class=\"text-light\" style=\"font-size:40px\">GSB</b></a>
          <button class=\"btn navbar-toggler\" style=\"color:white; font-size:20px;\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#nav\" aria-expanded=\"false\" aria-controls=\"nav\"><i class=\"fa fa-bars\"></i></button>
          <div class=\"collapse navbar-collapse justify-content-between\" id=\"nav\">
          <ul class=\"navbar-nav\">
              <li class=\"nav-item\"><a class=\"nav-link text-light text-uppercase px-3\" style=\"margin-top:7.7px; font-weight:bold;\" href=\"/accueil\">Accueil</a></li>
              
              <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <b>Le SI</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton1\">
                  <li><a class=\"dropdown-item\" style=\"color:white;\" href=\"/presentationSI\">Présentation du SI</a></li>
                  <li><a class=\"dropdown-item\" style=\"color:white;\" href=\"/gestionSI\">Gestion</a></li>
                  <li><a class=\"dropdown-item\" style=\"color:white;\" href=\"/equipment\">Équipement</a></li>
                  </ul></div></li>
                  
                  <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                  <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <b>Le Réseau</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton2\">
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/repartition\">Répartition</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/segmentation\">Segmentation</a></li>
                  

                </ul>
                <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                  <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <b>Les utilisateurs</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton2\">
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/users\">Liste des utilisateurs</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/cadurcien\">Liste des Cadurciens</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/ayantFrais\">Ayant des frais</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/nayantPasFrais\">N'ayant pas de frais</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/nbfrais\">Nombre  de frais</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/utiliConcerne\">Utilisateur Concernés</a></li>
                </ul>
        </div></li>
                <li class=\"nav-item\"><a class=\"nav-link text-light text-uppercase px-3\" style=\"margin-top:7.7px; font-weight:bold;\" href=\"/domaine\">Domaine</a></li>
                
                <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                  <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <b>Les États</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton2\">
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/etat\">Liste des états</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/etat/new\">Créer un état</a></li>
                </ul>
        </div></li>
          </ul>
              </div>
      </nav>
      
      <div>
               ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "      
      
    <!-- Optional JavaScript; choose one of the two! -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->

    
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        // line 16
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        // line 20
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "<!--<div class=\"content text-center\">
                   <br/><br/><br/><br/><br/>
                   <h1 class=\"text-light\" style=\"font-size:60px\"><b>BIENVENUE !</b></h1>-->
                   
              
      </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 81,  191 => 20,  189 => 19,  179 => 18,  169 => 16,  167 => 15,  157 => 14,  137 => 87,  135 => 81,  73 => 21,  71 => 18,  68 => 17,  65 => 14,  57 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link  rel=\"stylesheet\" href=\"{{asset('/css/bootstrap.min.css')}}\"/>
    <link  rel=\"stylesheet\" href=\"{{asset('/css/style.css')}}\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF\" crossorigin=\"anonymous\">
    <title>Le site GSB</title>
  </head>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    

  <body>
      
      <nav class=\"navbar navbar-expand-md navbar-dark p-md-1\" style=\"background-color:rgba(0,0,0,0.4);\">
          <a class=\"px-5\" href=\"/accueil\"><b class=\"text-light\" style=\"font-size:40px\">GSB</b></a>
          <button class=\"btn navbar-toggler\" style=\"color:white; font-size:20px;\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#nav\" aria-expanded=\"false\" aria-controls=\"nav\"><i class=\"fa fa-bars\"></i></button>
          <div class=\"collapse navbar-collapse justify-content-between\" id=\"nav\">
          <ul class=\"navbar-nav\">
              <li class=\"nav-item\"><a class=\"nav-link text-light text-uppercase px-3\" style=\"margin-top:7.7px; font-weight:bold;\" href=\"/accueil\">Accueil</a></li>
              
              <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <b>Le SI</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton1\">
                  <li><a class=\"dropdown-item\" style=\"color:white;\" href=\"/presentationSI\">Présentation du SI</a></li>
                  <li><a class=\"dropdown-item\" style=\"color:white;\" href=\"/gestionSI\">Gestion</a></li>
                  <li><a class=\"dropdown-item\" style=\"color:white;\" href=\"/equipment\">Équipement</a></li>
                  </ul></div></li>
                  
                  <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                  <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <b>Le Réseau</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton2\">
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/repartition\">Répartition</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/segmentation\">Segmentation</a></li>
                  

                </ul>
                <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                  <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <b>Les utilisateurs</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton2\">
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/users\">Liste des utilisateurs</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/cadurcien\">Liste des Cadurciens</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/ayantFrais\">Ayant des frais</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/nayantPasFrais\">N'ayant pas de frais</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/nbfrais\">Nombre  de frais</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/utiliConcerne\">Utilisateur Concernés</a></li>
                </ul>
        </div></li>
                <li class=\"nav-item\"><a class=\"nav-link text-light text-uppercase px-3\" style=\"margin-top:7.7px; font-weight:bold;\" href=\"/domaine\">Domaine</a></li>
                
                <li class=\"nav-item dropdown\"><div class=\"dropdown nav-link px-3\">
                  <button class=\"btn dropdown-toggle\" style=\"color:white; font-size:25px; text-transform: uppercase;\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <b>Les États</b>
                </button>
                <ul class=\"dropdown-menu\" style=\"background-color:#374e6e;\" aria-labelledby=\"dropdownMenuButton2\">
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/etat\">Liste des états</a></li>
                    <li><a class=\"dropdown-item menudel\" style=\"color:white;\" href=\"/etat/new\">Créer un état</a></li>
                </ul>
        </div></li>
          </ul>
              </div>
      </nav>
      
      <div>
               {% block body %}<!--<div class=\"content text-center\">
                   <br/><br/><br/><br/><br/>
                   <h1 class=\"text-light\" style=\"font-size:60px\"><b>BIENVENUE !</b></h1>-->
                   
              
      </div>{% endblock %}
      
      
    <!-- Optional JavaScript; choose one of the two! -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->

    
  </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\base.html.twig");
    }
}
