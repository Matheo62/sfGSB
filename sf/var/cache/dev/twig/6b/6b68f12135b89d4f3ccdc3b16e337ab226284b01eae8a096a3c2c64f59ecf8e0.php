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

/* accueil/accueil.html.twig */
class __TwigTemplate_72134dd5432c5a1e35a2b4f4ee29912d98a873302a92c113e752aac9928ed2f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/accueil.html.twig", 1);
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
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <div class=\"col-8\">
 <div class=\"block\">
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>Bienvenue sur le site de GSB !</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\">Qui sommes nous ?</u><br/><br/>
                  Le laboratoire <b style=\"color:#6EA2CA;\">Galaxy Swiss Bourdin</b>(GSB) est issu de la fusion entre le géant américain Galaxy
(spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat
européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union
de trois petits laboratoires .<br/><br/>
En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris. 
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.<br/>
<b style=\"color:#6EA2CA;\">La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</b><br/><br/>
<u>Sur quelle secteur agissons nous ?</u><br/><br/>

<b style=\"color:#6EA2CA;\">L’industrie pharmaceutique</b> est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures. <br/><br/>
Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.<br/><br/>

                  

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    <div class=\"mobile\">
        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <div class=\"col-8\">
 <div class=\"block\">
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>Bienvenue sur le site de GSB !</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u>Qui sommes nous ?</u><br/><br/>
                  Le laboratoire <b>Galaxy Swiss Bourdin</b>(GSB) est issu de la fusion entre le géant américain Galaxy
(spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat
européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union
de trois petits laboratoires .<br/><br/>
En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris. 
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.<br/>
<b>La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</b><br/><br/>
<u>Sur quelle secteur agissons nous ?</u><br/><br/>

<b>L’industrie pharmaceutique</b> est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures. <br/><br/>
Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.<br/><br/>

                  

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"pc\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <div class=\"col-8\">
 <div class=\"block\">
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>Bienvenue sur le site de GSB !</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\">Qui sommes nous ?</u><br/><br/>
                  Le laboratoire <b style=\"color:#6EA2CA;\">Galaxy Swiss Bourdin</b>(GSB) est issu de la fusion entre le géant américain Galaxy
(spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat
européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union
de trois petits laboratoires .<br/><br/>
En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris. 
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.<br/>
<b style=\"color:#6EA2CA;\">La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</b><br/><br/>
<u>Sur quelle secteur agissons nous ?</u><br/><br/>

<b style=\"color:#6EA2CA;\">L’industrie pharmaceutique</b> est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures. <br/><br/>
Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.<br/><br/>

                  

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    <div class=\"mobile\">
        <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <div class=\"col-8\">
 <div class=\"block\">
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>Bienvenue sur le site de GSB !</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u>Qui sommes nous ?</u><br/><br/>
                  Le laboratoire <b>Galaxy Swiss Bourdin</b>(GSB) est issu de la fusion entre le géant américain Galaxy
(spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat
européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union
de trois petits laboratoires .<br/><br/>
En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris. 
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.<br/>
<b>La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</b><br/><br/>
<u>Sur quelle secteur agissons nous ?</u><br/><br/>

<b>L’industrie pharmaceutique</b> est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures. <br/><br/>
Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.<br/><br/>

                  

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
{% endblock %}", "accueil/accueil.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\accueil\\accueil.html.twig");
    }
}
