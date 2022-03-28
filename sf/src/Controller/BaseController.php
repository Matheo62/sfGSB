<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etat;
use App\Form\EtatType;
use App\Repository\EtatRepository;
use Symfony\Component\HttpFoundation\Request;


class BaseController extends AbstractController
{
    /**
     * @Route("/base", name="base")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
    
    /**
     * @Route("/accueil", name="accueil")
     */
    public function pageAccueil():Response{
        return $this->render('accueil/accueil.html.twig',[
            
        ]);
    }
    
    /**
     * @Route("/presentationSI", name="presentationSI")
     */
    public function presentationSI():Response{
        return $this->render('presentationSI/presentationSI.html.twig',[
            
        ]);
    }
    
    /**
     * @Route("/gestionSI", name="gestionSI")
     */
    public function gestionSI():Response{
        return $this->render('gestionSI/gestionSI.html.twig',[
            
        ]);
    }
    
    /**
     * @Route("/equipment", name="equipment")
     */
    public function equipment():Response{
        return $this->render('equipment/equipment.html.twig',[
            
        ]);
    }
    
    /**
     * @Route("/repartition", name="repartition")
     */
    public function repartition():Response{
        return $this->render('repartition/repartition.html.twig',[
            
        ]);
    }
    
    /**
     * @Route("/segmentation", name="segmentation")
     */
    public function segmentation():Response{
        return $this->render('segmentation/segmentation.html.twig',[
            
        ]);
    }
    
    /**
     * @Route("/users", name="users")
     */
    public function users(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $lesUsers = $repo->findAll();
        $nbUser=$repo->nbUtili();
        return $this->render('users/users.html.twig',['lesUsers'=>$lesUsers,'nbUser'=>$nbUser[0]["1"]]
            
        );
    }
    
    /**
     * @Route("/cadurcien", name="cadurcien")
     */
    public function listeCadurciens(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $ville="Cahors";
        $laliste = $repo->listeInscrisCadurcien($ville);
        return $this->render('cadurcien/cadurcien.html.twig',['laliste'=>$laliste]
            
        );
    }
    
    /**
     * @Route("/ayantFrais", name="ayantFrais")
     */
    public function ayantFrais():Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Fichefrais::class);
        $laliste = $repo->listeAyantFrais();
        return $this->render('ayantFrais/ayantFrais.html.twig',['laliste'=>$laliste]
       );
    }
    
    /**
     * @Route("/nayantPasFrais", name="nayantPasFrais")
     */
    public function nayantPasFrais():Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Fichefrais::class);
        $laliste = $repo->listeNayantPasFrais();
        return $this->render('nayantPasFrais/nayantPasFrais.html.twig',['laliste'=>$laliste]
       );
    }
    
    /**
     * @Route("/nbfrais", name="nbfrais")
     */
    public function nbFrais():Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Fichefrais::class);
        $laliste = $repo->nbFrais();
        return $this->render('nbfrais/nbfrais.html.twig',['laliste'=>$laliste]
       );
    }
    
    /**
     * @Route("/domaine", name="domaine")
     */
    public function domaine():Response{
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Categorie::class);
        $laliste = $repo->findAll();
        return $this->render('domaine/domaine.html.twig',['laliste'=>$laliste]
        );
    }
    
    /**
     * @Route("/utiliConcerne", name="utiliConcerne")
     */
    public function utiliConcerne(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\UtilisateurSecondaire::class);
        $laliste = $repo->findAll();
        return $this->render('utilisateurConcerne/utilisateurConcerne.html.twig',['laliste'=>$laliste]
            
        );
    }
    
    /**
     * @Route("/new", name="etat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $etat = new Etat();
        $form = $this->createForm(EtatType::class, $etat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($etat);
            $entityManager->flush();

            return $this->redirectToRoute('etat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('etat/new.html.twig', [
            'etat' => $etat,
            'form' => $form,
        ]);
    }


    
}
