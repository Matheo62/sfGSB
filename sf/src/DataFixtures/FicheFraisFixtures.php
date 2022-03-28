<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;
use App\DataFixtures\UtilisateurFixtures;
use App\DataFixtures\EtatFixtures;
use App\Entity\Fichefrais;

class FicheFraisFixtures extends Fixture implements DependentFixtureInterface
{
    
    public const FICHEFRAIS1_ID_REFERENCE = 'idFicheFrais1' ;
    public const FICHEFRAIS2_ID_REFERENCE = 'idFicheFrais2' ;
    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $uneFiche = new Fichefrais();
        $uneFiche->setIdutilisateur($this->getReference(UtilisateurFixtures::USER_ID_REFERENCE));
        $uneFiche->setMois("202011");
        $uneFiche->setNbjustificatifs(2);
        $uneFiche->setIdetat($this->getReference(EtatFixtures::ETAT_ID_REFERENCE));
        
        $uneFiche2 = new Fichefrais();
        $uneFiche2->setIdutilisateur($this->getReference(UtilisateurFixtures::USER_ID_REFERENCE));
        $uneFiche2->setMois("202010");
        $uneFiche2->setNbjustificatifs(1);
        $uneFiche2->setMontantvalide("1000");
        $uneFiche2->setIdetat($this->getReference(EtatFixtures::ETAT_ID_REFERENCE));
        
       
        $manager->persist($uneFiche);
        $manager->persist($uneFiche2);
        $manager->flush();
        
        $this->addReference( self :: FICHEFRAIS1_ID_REFERENCE , $uneFiche );
        $this->addReference( self :: FICHEFRAIS2_ID_REFERENCE , $uneFiche2 );
    }
    
    public function getDependencies ()
    {
        return array (
            UtilisateurFixtures::class ,
            EtatFixtures::class,
            //FraisForfaitFixtures::class,
        );

   }
}
