<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;

class UtilisateurFixtures extends Fixture
{
    public const USER_ID_REFERENCE = 'idUtilisateur' ;

    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $unUtili = new Utilisateur();
        $unUtili->setId("ul");
        $unUtili->setNom("Dicule");
        $unUtili->setPrenom("Terry");
        $unUtili->setAdresse("25, rue du jambon");
        $unUtili->setCp("62999");
        $unUtili->setVille("Leport");
        $date = new \DateTime('2019-10-01');
        $unUtili->setDateembauche($date);
        $unUtili->setLaCategorie($this->getReference(CategorieFixtures::CAT_ID_REFERENCE));
   
        $manager->persist($unUtili);
        
        //$manager->persist($unEtat2);
        

        $manager->flush();
        
        $this->addReference( self :: USER_ID_REFERENCE , $unUtili );
    }
    
    public function getDependencies ()
    {
        return array (
            CategorieFixtures:: class,   
            
            );
    }
    
}
