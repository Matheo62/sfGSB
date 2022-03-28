<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Fraisforfait;

class FraisForfaitFixtures extends Fixture
{
    public const FRAISFORFAIT_ID_REFERENCE = 'idFrais' ;
    public const FRAISFORFAIT2_ID_REFERENCE = 'idFrais2' ;

    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $unFrais = new Fraisforfait;
        $unFrais->setId("SE");
        $unFrais->setLibelle("Prix Semaine");
        $unFrais->setMontant("50");
        
        $unFrais2 = new Fraisforfait;
        $unFrais2->setId("WE");
        $unFrais2->setLibelle("Prix Week-end");
        $unFrais2->setMontant("80");
        
        $manager->persist($unFrais);
        
        $manager->persist($unFrais2);
        
        //$manager->persist($unEtat2);
        

        $manager->flush();
        
        $this->addReference( self :: FRAISFORFAIT_ID_REFERENCE , $unFrais );
        $this->addReference( self :: FRAISFORFAIT2_ID_REFERENCE , $unFrais2 );
    }
    
    
}
