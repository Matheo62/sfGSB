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

/* segmentation/segmentation.html.twig */
class __TwigTemplate_08581473f845494df3cddb5cc7a65eef00d314599aebd15d78ee03b5083daae6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "segmentation/segmentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "segmentation/segmentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "segmentation/segmentation.html.twig", 1);
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>La segmentation du réseaux</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La segmentation du réseaux</b></u><br/><br/>
                  L'organisation des VLAN et de l'adressage IP est la suivante : </p><br/><br/>
              <center><img src=\"img/aboutSeg.png\"/></center><br/><br/>
              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  Les règles actuelles concernant les vlans sont les suivantes :</p>
              <ul class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <li>Chaque vlan (sauf le vlan visiteur) peut uniquement accéder (quel que soit le protocole) aux 
                      vlans \"Serveurs\" et \"Sortie\";</li>
                  <li>Le vlan \"Visiteurs\" peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;</li>
                 </ul> 





                  

              
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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>L'equipement</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La segmentation du réseaux</b></u><br/><br/>
                  L'organisation des VLAN et de l'adressage IP est la suivante : </p><br/><br/>
              <center><img src=\"img/aboutSeg.png\" style=\"max-width: 100%;height: auto;\"/></center><br/><br/>
              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  Les règles actuelles concernant les vlans sont les suivantes :</p>
              <ul class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <li>Chaque vlan (sauf le vlan visiteur) peut uniquement accéder (quel que soit le protocole) aux 
                      vlans \"Serveurs\" et \"Sortie\";</li>
                  <li>Le vlan \"Visiteurs\" peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;</li>
                 </ul> 
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
        return "segmentation/segmentation.html.twig";
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>La segmentation du réseaux</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La segmentation du réseaux</b></u><br/><br/>
                  L'organisation des VLAN et de l'adressage IP est la suivante : </p><br/><br/>
              <center><img src=\"img/aboutSeg.png\"/></center><br/><br/>
              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  Les règles actuelles concernant les vlans sont les suivantes :</p>
              <ul class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <li>Chaque vlan (sauf le vlan visiteur) peut uniquement accéder (quel que soit le protocole) aux 
                      vlans \"Serveurs\" et \"Sortie\";</li>
                  <li>Le vlan \"Visiteurs\" peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;</li>
                 </ul> 





                  

              
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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>L'equipement</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La segmentation du réseaux</b></u><br/><br/>
                  L'organisation des VLAN et de l'adressage IP est la suivante : </p><br/><br/>
              <center><img src=\"img/aboutSeg.png\" style=\"max-width: 100%;height: auto;\"/></center><br/><br/>
              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  Les règles actuelles concernant les vlans sont les suivantes :</p>
              <ul class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <li>Chaque vlan (sauf le vlan visiteur) peut uniquement accéder (quel que soit le protocole) aux 
                      vlans \"Serveurs\" et \"Sortie\";</li>
                  <li>Le vlan \"Visiteurs\" peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;</li>
                 </ul> 
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
{% endblock %}", "segmentation/segmentation.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\segmentation\\segmentation.html.twig");
    }
}
