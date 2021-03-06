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

/* equipment/equipment.html.twig */
class __TwigTemplate_d539ad15d7d7bb33b707c3ce1357ea97284fbb9238006d2a4a0a42865823e7a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipment/equipment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipment/equipment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipment/equipment.html.twig", 1);
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>L'equipement</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">L'equipement</b></u><br/><br/>
                 L'informatique est fortement r??pandue sur le site. Chaque employ?? est ??quip?? d'un poste fixe reli?? au
                syst??me central. On d??nombre ainsi plus de 350 ??quipements terminaux et un nombre de serveurs
                physiques cons??quent <b style=\"color:#6EA2CA;\">(45 en 2012)</b> sur lesquels tournent plus de <b style=\"color:#6EA2CA;\">100 serveurs virtuels</b>.<br/><br/>
                On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude
                d'ordinateurs portables <b style=\"color:#6EA2CA;\">(personnels de direction, service informatique, services commerciaux, etc)</b>. <br/><br/>
                Les visiteurs m??dicaux re??oivent une indemnit?? bisannuelle pour s'??quiper en informatique (politique
                Swiss-Bourdin) ou une dotation en ??quipement <b style=\"color:#6EA2CA;\">(politique Galaxy)</b>. Il n'y a pas ?? l'heure actuelle
                d'uniformisation des machines ni du mode de fonctionnement <br/><br/>
                Chaque employ?? de l'entreprise a une adresse de messagerie de la formea <b style=\"color:#6EA2CA;\">nomUtilisateur@swissgalaxy.com </b>. Les anciennes adresses de chaque laboratoire ont ??t?? d??finitivement ferm??es au 1er
                janvier 2011. 


                  

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
                  L'informatique est fortement r??pandue sur le site. Chaque employ?? est ??quip?? d'un poste fixe reli?? au
                syst??me central. On d??nombre ainsi plus de 350 ??quipements terminaux et un nombre de serveurs
                physiques cons??quent <b style=\"color:#6EA2CA;\">(45 en 2012)</b> sur lesquels tournent plus de <b style=\"color:#6EA2CA;\">100 serveurs virtuel</b>s.<br/><br/>
                On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude
                d'ordinateurs portables <b style=\"color:#6EA2CA;\">(personnels de direction, service informatique, services commerciaux, etc)</b>. <br/><br/>
                Les visiteurs m??dicaux re??oivent une indemnit?? bisannuelle pour s'??quiper en informatique (politique
                Swiss-Bourdin) ou une dotation en ??quipement <b style=\"color:#6EA2CA;\">(politique Galaxy)</b>. Il n'y a pas ?? l'heure actuelle
                d'uniformisation des machines ni du mode de fonctionnement <br/><br/>
                Chaque employ?? de l'entreprise a une adresse de messagerie de la formea <b style=\"color:#6EA2CA; font-size: 18px;\">nomUtilisateur@swissgalaxy.com </b>. Les anciennes adresses de chaque laboratoire ont ??t?? d??finitivement ferm??es au 1er
                janvier 2011. 

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
        return "equipment/equipment.html.twig";
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
     <center><h1 class=\"title text-light\" style=\"font-size:50px; margin-top: -100px;\"><b>L'equipement</b></h1></center>
            <div class=\"container my-5 d-grind gap-5\">
          <div class=\"p-5 border\" style=\"background-color:#2f496c\">

              <p class=\"text-light paragraphe\" style=\"font-size:30px; text-align: justify\">
                  <u style=\"color:#6EA2CA;\"><b style=\"color:#6EA2CA;\">L'equipement</b></u><br/><br/>
                 L'informatique est fortement r??pandue sur le site. Chaque employ?? est ??quip?? d'un poste fixe reli?? au
                syst??me central. On d??nombre ainsi plus de 350 ??quipements terminaux et un nombre de serveurs
                physiques cons??quent <b style=\"color:#6EA2CA;\">(45 en 2012)</b> sur lesquels tournent plus de <b style=\"color:#6EA2CA;\">100 serveurs virtuels</b>.<br/><br/>
                On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude
                d'ordinateurs portables <b style=\"color:#6EA2CA;\">(personnels de direction, service informatique, services commerciaux, etc)</b>. <br/><br/>
                Les visiteurs m??dicaux re??oivent une indemnit?? bisannuelle pour s'??quiper en informatique (politique
                Swiss-Bourdin) ou une dotation en ??quipement <b style=\"color:#6EA2CA;\">(politique Galaxy)</b>. Il n'y a pas ?? l'heure actuelle
                d'uniformisation des machines ni du mode de fonctionnement <br/><br/>
                Chaque employ?? de l'entreprise a une adresse de messagerie de la formea <b style=\"color:#6EA2CA;\">nomUtilisateur@swissgalaxy.com </b>. Les anciennes adresses de chaque laboratoire ont ??t?? d??finitivement ferm??es au 1er
                janvier 2011. 


                  

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
                  L'informatique est fortement r??pandue sur le site. Chaque employ?? est ??quip?? d'un poste fixe reli?? au
                syst??me central. On d??nombre ainsi plus de 350 ??quipements terminaux et un nombre de serveurs
                physiques cons??quent <b style=\"color:#6EA2CA;\">(45 en 2012)</b> sur lesquels tournent plus de <b style=\"color:#6EA2CA;\">100 serveurs virtuel</b>s.<br/><br/>
                On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude
                d'ordinateurs portables <b style=\"color:#6EA2CA;\">(personnels de direction, service informatique, services commerciaux, etc)</b>. <br/><br/>
                Les visiteurs m??dicaux re??oivent une indemnit?? bisannuelle pour s'??quiper en informatique (politique
                Swiss-Bourdin) ou une dotation en ??quipement <b style=\"color:#6EA2CA;\">(politique Galaxy)</b>. Il n'y a pas ?? l'heure actuelle
                d'uniformisation des machines ni du mode de fonctionnement <br/><br/>
                Chaque employ?? de l'entreprise a une adresse de messagerie de la formea <b style=\"color:#6EA2CA; font-size: 18px;\">nomUtilisateur@swissgalaxy.com </b>. Les anciennes adresses de chaque laboratoire ont ??t?? d??finitivement ferm??es au 1er
                janvier 2011. 

              </p>
          </div>
      </div>
      </div>
            </div>
        </div> 
    </div>
    </div>
    
{% endblock %}", "equipment/equipment.html.twig", "C:\\wamp64\\www\\Symfony_GSB_3\\sf\\templates\\equipment\\equipment.html.twig");
    }
}
