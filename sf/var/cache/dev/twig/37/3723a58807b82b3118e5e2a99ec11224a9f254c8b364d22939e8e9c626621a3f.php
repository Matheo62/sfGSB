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

/* gestionSI/gestionSI.html.twig */
class __TwigTemplate_6b6c1969e3da7079bff6e9a3ab924282bdcd05790d5bf75f3de9a30771cab53b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionSI/gestionSI.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionSI/gestionSI.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionSI/gestionSI.html.twig", 1);
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>Gestion du SI</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La Gestion</b></u><br/><br/>
                  La DSI (Direction des Services Informatiques) est une entité importante de la structure Europe qui
                    participe aux choix stratégiques.<br/><br/> 
                    Pour Swiss-Bourdin, qui occupait le siège parisien avant la fusion, l'outil informatique et l'utilisation
                    d'outils décisionnels pour améliorer la vision et la planification de l'activité ont toujours fait partie de la
                    politique maison, en particulier pour ce qui concerne la partie recherche, production, communication et
                    juridique.<br/><br/>
                    <b style=\"color:#6EA2CA;\">La partie commerciale </b>a été le parent pauvre de cette informatisation, les visiteurs étant vus
                    comme des acteurs distants autonomes. La DSI a <b style=\"color:#6EA2CA;\">convaincu </b>l'entreprise que l'intégration des
                    données fournies par cette partie aura un <b style=\"color:#6EA2CA;\">impact important sur l'ensemble de l'activité</b>.


                  

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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>Gestion du SI</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La Gestion</b></u><br/><br/>
                  La DSI (Direction des Services Informatiques) est une entité importante de la structure Europe qui
                    participe aux choix stratégiques.<br/><br/> 
                    Pour Swiss-Bourdin, qui occupait le siège parisien avant la fusion, l'outil informatique et l'utilisation
                    d'outils décisionnels pour améliorer la vision et la planification de l'activité ont toujours fait partie de la
                    politique maison, en particulier pour ce qui concerne la partie recherche, production, communication et
                    juridique.<br/><br/>
                    <<b style=\"color:#6EA2CA;\">La partie commerciale </b>a été le parent pauvre de cette informatisation, les visiteurs étant vus
                    comme des acteurs distants autonomes. La DSI a <b style=\"color:#6EA2CA;\">convaincu </b>l'entreprise que l'intégration des
                    données fournies par cette partie aura un <b style=\"color:#6EA2CA;\">impact important sur l'ensemble de l'activité</b>.

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
        return "gestionSI/gestionSI.html.twig";
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>Gestion du SI</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La Gestion</b></u><br/><br/>
                  La DSI (Direction des Services Informatiques) est une entité importante de la structure Europe qui
                    participe aux choix stratégiques.<br/><br/> 
                    Pour Swiss-Bourdin, qui occupait le siège parisien avant la fusion, l'outil informatique et l'utilisation
                    d'outils décisionnels pour améliorer la vision et la planification de l'activité ont toujours fait partie de la
                    politique maison, en particulier pour ce qui concerne la partie recherche, production, communication et
                    juridique.<br/><br/>
                    <b style=\"color:#6EA2CA;\">La partie commerciale </b>a été le parent pauvre de cette informatisation, les visiteurs étant vus
                    comme des acteurs distants autonomes. La DSI a <b style=\"color:#6EA2CA;\">convaincu </b>l'entreprise que l'intégration des
                    données fournies par cette partie aura un <b style=\"color:#6EA2CA;\">impact important sur l'ensemble de l'activité</b>.


                  

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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>Gestion du SI</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La Gestion</b></u><br/><br/>
                  La DSI (Direction des Services Informatiques) est une entité importante de la structure Europe qui
                    participe aux choix stratégiques.<br/><br/> 
                    Pour Swiss-Bourdin, qui occupait le siège parisien avant la fusion, l'outil informatique et l'utilisation
                    d'outils décisionnels pour améliorer la vision et la planification de l'activité ont toujours fait partie de la
                    politique maison, en particulier pour ce qui concerne la partie recherche, production, communication et
                    juridique.<br/><br/>
                    <<b style=\"color:#6EA2CA;\">La partie commerciale </b>a été le parent pauvre de cette informatisation, les visiteurs étant vus
                    comme des acteurs distants autonomes. La DSI a <b style=\"color:#6EA2CA;\">convaincu </b>l'entreprise que l'intégration des
                    données fournies par cette partie aura un <b style=\"color:#6EA2CA;\">impact important sur l'ensemble de l'activité</b>.

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
{% endblock %}", "gestionSI/gestionSI.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\gestionSI\\gestionSI.html.twig");
    }
}
