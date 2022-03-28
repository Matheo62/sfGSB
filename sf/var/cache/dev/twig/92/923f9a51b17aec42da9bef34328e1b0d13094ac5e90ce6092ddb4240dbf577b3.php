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

/* presentationSI/presentationSI.html.twig */
class __TwigTemplate_e7726874b436942644101e4228e84343deaf8d0f922fa3543c2fcf138e67876b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentationSI/presentationSI.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentationSI/presentationSI.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presentationSI/presentationSI.html.twig", 1);
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>Présentation du SI</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">Le système d'information</b></u><br/><br/>
                  Sur le site parisien, toutes les fonctions administratives <b style=\"color:#6EA2CA;\">(gestion des ressources humaines,
                      comptabilité, direction, commerciale, etc.)</b> sont présentes. On trouve en outre un service laborecherche, le service juridique et le service communication.<br/><br/>
                      La salle serveur occupe le 6ème étage du bâtiment et les accès y sont restreints <b style=\"color:#6EA2CA;\">(étage accessible par
ascenseur à l'aide d'une clé sécurisée, portes d'accès par escalier munies d'un lecteur de badge, sas
d'entrée avec gardien présent 24h/24)</b>. <br/><br/>
Les serveurs assurent les fonctions de base du réseau <b style=\"color:#6EA2CA;\">(DHCP, DNS, Annuaire et gestion centralisée
    des environnements)</b> et les fonctions de communication <b style=\"color:#6EA2CA;\">(Intranet, Messagerie, Agenda partagé, etc...)</b>. 
On trouve aussi de nombreuses applications métier (base d'information pharmaceutique, serveurs
dédiés à la recherche, base de données des produits du laboratoire, base de données des licences
d'exploitation pharmaceutique, etc.) et les fonctions plus génériques de toute entreprise <b style=\"color:#6EA2CA;\">(Progiciel de
Gestion Intégré avec ses modules RH, GRC, etc...)</b>. 
Un nombre croissant de serveurs est virtualisé.<br/><br/>
Constitué autour de VLAN, le réseau segmente les services de manière à fluidifier le trafic.<br/><br/>
Les données de l'entreprises sont considérées comme stratégiques et ne peuvent tolérer ni fuite, ni
destruction. L'ensemble des informations est répliqué quotidiennement aux Etats-Unis par un lien
dédié. Toutes les fonctions de redondances <b style=\"color:#6EA2CA;\">(RAID, alimentation, lien réseau redondant, Spanningtree, clustering, etc...)</b> sont mises en œuvre pour assurer une tolérance aux pannes maximale.


                  

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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>Présentation du SI</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">Le système d'information</b></u><br/><br/>
                  Sur le site parisien, toutes les fonctions administratives <b style=\"color:#6EA2CA;\">(gestion des ressources humaines,
                      comptabilité, direction, commerciale, etc.)</b> sont présentes. On trouve en outre un service laborecherche, le service juridique et le service communication.<br/><br/>
                      La salle serveur occupe le 6ème étage du bâtiment et les accès y sont restreints <b style=\"color:#6EA2CA;\">(étage accessible par
                ascenseur à l'aide d'une clé sécurisée, portes d'accès par escalier munies d'un lecteur de badge, sas
                d'entrée avec gardien présent 24h/24)</b>. <br/><br/>
                Les serveurs assurent les fonctions de base du réseau <b style=\"color:#6EA2CA;\">(DHCP, DNS, Annuaire et gestion centralisée
                    des environnements)</b> et les fonctions de communication <b style=\"color:#6EA2CA;\">(Intranet, Messagerie, Agenda partagé, etc...)</b>. 
                On trouve aussi de nombreuses applications métier (base d'information pharmaceutique, serveurs
                dédiés à la recherche, base de données des produits du laboratoire, base de données des licences
                d'exploitation pharmaceutique, etc.) et les fonctions plus génériques de toute entreprise <b style=\"color:#6EA2CA;\">(Progiciel de
                Gestion Intégré avec ses modules RH, GRC, etc...)</b>. 
                Un nombre croissant de serveurs est virtualisé.<br/><br/>
                Constitué autour de VLAN, le réseau segmente les services de manière à fluidifier le trafic.<br/><br/>
                Les données de l'entreprises sont considérées comme stratégiques et ne peuvent tolérer ni fuite, ni
                destruction. L'ensemble des informations est répliqué quotidiennement aux Etats-Unis par un lien
                dédié. Toutes les fonctions de redondances <b style=\"color:#6EA2CA;\">(RAID, alimentation, lien réseau redondant, Spanningtree, clustering, etc...)</b> sont mises en œuvre pour assurer une tolérance aux pannes maximale.
                  

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
        return "presentationSI/presentationSI.html.twig";
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>Présentation du SI</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">Le système d'information</b></u><br/><br/>
                  Sur le site parisien, toutes les fonctions administratives <b style=\"color:#6EA2CA;\">(gestion des ressources humaines,
                      comptabilité, direction, commerciale, etc.)</b> sont présentes. On trouve en outre un service laborecherche, le service juridique et le service communication.<br/><br/>
                      La salle serveur occupe le 6ème étage du bâtiment et les accès y sont restreints <b style=\"color:#6EA2CA;\">(étage accessible par
ascenseur à l'aide d'une clé sécurisée, portes d'accès par escalier munies d'un lecteur de badge, sas
d'entrée avec gardien présent 24h/24)</b>. <br/><br/>
Les serveurs assurent les fonctions de base du réseau <b style=\"color:#6EA2CA;\">(DHCP, DNS, Annuaire et gestion centralisée
    des environnements)</b> et les fonctions de communication <b style=\"color:#6EA2CA;\">(Intranet, Messagerie, Agenda partagé, etc...)</b>. 
On trouve aussi de nombreuses applications métier (base d'information pharmaceutique, serveurs
dédiés à la recherche, base de données des produits du laboratoire, base de données des licences
d'exploitation pharmaceutique, etc.) et les fonctions plus génériques de toute entreprise <b style=\"color:#6EA2CA;\">(Progiciel de
Gestion Intégré avec ses modules RH, GRC, etc...)</b>. 
Un nombre croissant de serveurs est virtualisé.<br/><br/>
Constitué autour de VLAN, le réseau segmente les services de manière à fluidifier le trafic.<br/><br/>
Les données de l'entreprises sont considérées comme stratégiques et ne peuvent tolérer ni fuite, ni
destruction. L'ensemble des informations est répliqué quotidiennement aux Etats-Unis par un lien
dédié. Toutes les fonctions de redondances <b style=\"color:#6EA2CA;\">(RAID, alimentation, lien réseau redondant, Spanningtree, clustering, etc...)</b> sont mises en œuvre pour assurer une tolérance aux pannes maximale.


                  

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
     <center><h1 class=\"title text-light\" style=\"font-size:40px; margin-top: -150px;\"><b>Présentation du SI</b></h1></center>
            <div class=\"my-5 d-grind gap-2\">
          <div class=\"border p-5\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:20px;\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">Le système d'information</b></u><br/><br/>
                  Sur le site parisien, toutes les fonctions administratives <b style=\"color:#6EA2CA;\">(gestion des ressources humaines,
                      comptabilité, direction, commerciale, etc.)</b> sont présentes. On trouve en outre un service laborecherche, le service juridique et le service communication.<br/><br/>
                      La salle serveur occupe le 6ème étage du bâtiment et les accès y sont restreints <b style=\"color:#6EA2CA;\">(étage accessible par
                ascenseur à l'aide d'une clé sécurisée, portes d'accès par escalier munies d'un lecteur de badge, sas
                d'entrée avec gardien présent 24h/24)</b>. <br/><br/>
                Les serveurs assurent les fonctions de base du réseau <b style=\"color:#6EA2CA;\">(DHCP, DNS, Annuaire et gestion centralisée
                    des environnements)</b> et les fonctions de communication <b style=\"color:#6EA2CA;\">(Intranet, Messagerie, Agenda partagé, etc...)</b>. 
                On trouve aussi de nombreuses applications métier (base d'information pharmaceutique, serveurs
                dédiés à la recherche, base de données des produits du laboratoire, base de données des licences
                d'exploitation pharmaceutique, etc.) et les fonctions plus génériques de toute entreprise <b style=\"color:#6EA2CA;\">(Progiciel de
                Gestion Intégré avec ses modules RH, GRC, etc...)</b>. 
                Un nombre croissant de serveurs est virtualisé.<br/><br/>
                Constitué autour de VLAN, le réseau segmente les services de manière à fluidifier le trafic.<br/><br/>
                Les données de l'entreprises sont considérées comme stratégiques et ne peuvent tolérer ni fuite, ni
                destruction. L'ensemble des informations est répliqué quotidiennement aux Etats-Unis par un lien
                dédié. Toutes les fonctions de redondances <b style=\"color:#6EA2CA;\">(RAID, alimentation, lien réseau redondant, Spanningtree, clustering, etc...)</b> sont mises en œuvre pour assurer une tolérance aux pannes maximale.
                  

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
{% endblock %}", "presentationSI/presentationSI.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\presentationSI\\presentationSI.html.twig");
    }
}
