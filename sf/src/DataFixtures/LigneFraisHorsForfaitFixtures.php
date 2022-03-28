<?php 
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;
use App\Entity\Lignefraishorsforfait;

class LigneFraisHorsForfaitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $uneLigneHors=new Lignefraishorsforfait();
        $uneLigneHors->setIdfiche($this->getReference(FicheFraisFixtures::FICHEFRAIS1_ID_REFERENCE));
        $uneLigneHors->setLibelle("Repas Gastronomique");
        $date = new \DateTime('2022-03-10');
        $uneLigneHors->setDate($date);
        $uneLigneHors->setMontant("1000");
        
        $manager->persist($uneLigneHors);
        $manager->flush();
    }
    
    public function getDependencies ()
    {
        return array (
            FicheFraisFixtures::class ,
        );

   }
}
