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

/* repartition/repartition.html.twig */
class __TwigTemplate_c44bbaa53e2078cc75ee87881d8bf8c746ab542cbf2874073c63911e1ab07824 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repartition/repartition.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repartition/repartition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "repartition/repartition.html.twig", 1);
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>La r??partition du r??seaux</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La r??partition du r??seaux</b></u><br/><br/>
                 Chaque ??tage dispose d'une baie de
                brassage qui le relie <b style=\"color:#6EA2CA;\">par une fibre ?? la
                baie centrale de la salle serveurs</b>.<br/><br/>
                Toutes les salles de r??union sont
                ??quip??es d'un point d'acc??s <b style=\"color:#6EA2CA;\">Wifi</b>
                positionn?? par d??faut dans le VLAN
                \"Visiteurs\" qui autorise uniquement un
                acc??s Internet. <br/><br/>
                Les portables connect??s en wifi ?? ce
                point d'acc??s re??oivent ainsi une
                <b style=\"color:#6EA2CA;\">adresse IP</b> et n'ont, par cons??quent
                acc??s qu'aux services DHCP et DNS.
                Le point d???acc??s peut ??tre configur?? ??
                la demande pour ??tre raccord?? ?? un
                VLAN pr??sent au niveau de l'??tage.
                Chaque salle de r??union dispose d'un
                vid??oprojecteur, d'enceintes et d'un
                tableau num??rique interactif. <br/><br/>
                La salle \"D??monstration\" est destin??e ??
                l'accueil des organismes de sant??
                <b style=\"color:#6EA2CA;\">(AFSSAPS notamment)</b> et des
                partenaires scientifiques. Elle dispose
                de paillasses et d'??quipements de
                laboratoire, en plus d'une salle de
                r??union.<br/><br/>
              <center><img src=\"img/aboutRep.png\"/></center>


                  

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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>L'equipement</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">L'equipement</b></u><br/><br/>
                 Chaque ??tage dispose d'une baie de
                brassage qui le relie <b style=\"color:#6EA2CA;\">par une fibre ?? la
                baie centrale de la salle serveurs</b>.<br/><br/>
                Toutes les salles de r??union sont
                ??quip??es d'un point d'acc??s <b style=\"color:#6EA2CA;\">Wifi</b>
                positionn?? par d??faut dans le VLAN
                \"Visiteurs\" qui autorise uniquement un
                acc??s Internet. <br/><br/>
                Les portables connect??s en wifi ?? ce
                point d'acc??s re??oivent ainsi une
                <b style=\"color:#6EA2CA;\">adresse IP</b> et n'ont, par cons??quent
                acc??s qu'aux services DHCP et DNS.
                Le point d???acc??s peut ??tre configur?? ??
                la demande pour ??tre raccord?? ?? un
                VLAN pr??sent au niveau de l'??tage.
                Chaque salle de r??union dispose d'un
                vid??oprojecteur, d'enceintes et d'un
                tableau num??rique interactif. <br/><br/>
                La salle \"D??monstration\" est destin??e ??
                l'accueil des organismes de sant??
                <b style=\"color:#6EA2CA;\">(AFSSAPS notamment)</b> et des
                partenaires scientifiques. Elle dispose
                de paillasses et d'??quipements de
                laboratoire, en plus d'une salle de
                r??union.<br/><br/>
              <center><img src=\"img/aboutRep.png\" style=\"max-width: 100%;
    height: auto;\"/></center>

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
        return "repartition/repartition.html.twig";
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>La r??partition du r??seaux</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">La r??partition du r??seaux</b></u><br/><br/>
                 Chaque ??tage dispose d'une baie de
                brassage qui le relie <b style=\"color:#6EA2CA;\">par une fibre ?? la
                baie centrale de la salle serveurs</b>.<br/><br/>
                Toutes les salles de r??union sont
                ??quip??es d'un point d'acc??s <b style=\"color:#6EA2CA;\">Wifi</b>
                positionn?? par d??faut dans le VLAN
                \"Visiteurs\" qui autorise uniquement un
                acc??s Internet. <br/><br/>
                Les portables connect??s en wifi ?? ce
                point d'acc??s re??oivent ainsi une
                <b style=\"color:#6EA2CA;\">adresse IP</b> et n'ont, par cons??quent
                acc??s qu'aux services DHCP et DNS.
                Le point d???acc??s peut ??tre configur?? ??
                la demande pour ??tre raccord?? ?? un
                VLAN pr??sent au niveau de l'??tage.
                Chaque salle de r??union dispose d'un
                vid??oprojecteur, d'enceintes et d'un
                tableau num??rique interactif. <br/><br/>
                La salle \"D??monstration\" est destin??e ??
                l'accueil des organismes de sant??
                <b style=\"color:#6EA2CA;\">(AFSSAPS notamment)</b> et des
                partenaires scientifiques. Elle dispose
                de paillasses et d'??quipements de
                laboratoire, en plus d'une salle de
                r??union.<br/><br/>
              <center><img src=\"img/aboutRep.png\"/></center>


                  

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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>L'equipement</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">L'equipement</b></u><br/><br/>
                 Chaque ??tage dispose d'une baie de
                brassage qui le relie <b style=\"color:#6EA2CA;\">par une fibre ?? la
                baie centrale de la salle serveurs</b>.<br/><br/>
                Toutes les salles de r??union sont
                ??quip??es d'un point d'acc??s <b style=\"color:#6EA2CA;\">Wifi</b>
                positionn?? par d??faut dans le VLAN
                \"Visiteurs\" qui autorise uniquement un
                acc??s Internet. <br/><br/>
                Les portables connect??s en wifi ?? ce
                point d'acc??s re??oivent ainsi une
                <b style=\"color:#6EA2CA;\">adresse IP</b> et n'ont, par cons??quent
                acc??s qu'aux services DHCP et DNS.
                Le point d???acc??s peut ??tre configur?? ??
                la demande pour ??tre raccord?? ?? un
                VLAN pr??sent au niveau de l'??tage.
                Chaque salle de r??union dispose d'un
                vid??oprojecteur, d'enceintes et d'un
                tableau num??rique interactif. <br/><br/>
                La salle \"D??monstration\" est destin??e ??
                l'accueil des organismes de sant??
                <b style=\"color:#6EA2CA;\">(AFSSAPS notamment)</b> et des
                partenaires scientifiques. Elle dispose
                de paillasses et d'??quipements de
                laboratoire, en plus d'une salle de
                r??union.<br/><br/>
              <center><img src=\"img/aboutRep.png\" style=\"max-width: 100%;
    height: auto;\"/></center>

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
{% endblock %}", "repartition/repartition.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\repartition\\repartition.html.twig");
    }
}
