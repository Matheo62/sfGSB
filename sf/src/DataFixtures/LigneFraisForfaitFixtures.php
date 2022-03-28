<?php 
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;
use App\DataFixtures\UtilisateurFixtures;
use App\DataFixtures\FicheFraisFixtures;
use App\DataFixtures\FraisForfaitFixtures;
use App\Entity\Lignefraisforfait;

class LigneFraisForfaitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $uneLigne=new Lignefraisforfait();
        $uneLigne->setIdfiche($this->getReference(FicheFraisFixtures::FICHEFRAIS1_ID_REFERENCE));
        $uneLigne->setIdfraisforfait($this->getReference(FraisForfaitFixtures::FRAISFORFAIT_ID_REFERENCE));
        $uneLigne->setQuantite(12);
        
        $uneLigne2=new Lignefraisforfait();
        $uneLigne2->setIdfiche($this->getReference(FicheFraisFixtures::FICHEFRAIS2_ID_REFERENCE));
        $uneLigne2->setIdfraisforfait($this->getReference(FraisForfaitFixtures::FRAISFORFAIT2_ID_REFERENCE));
        $uneLigne2->setQuantite(3);
        
        
       
        $manager->persist($uneLigne);
        $manager->persist($uneLigne2);
        $manager->flush();
    }
    
    public function getDependencies ()
    {
        return array (
            FicheFraisFixtures::class ,
            FraisForfaitFixtures::class,
        );

   }
}
