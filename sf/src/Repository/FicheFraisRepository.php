<?php

namespace App\Repository;

use App\Entity\Fichefrais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fichefrais|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fichefrais|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fichefrais[]    findAll()
 * @method Fichefrais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheFraisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fichefrais::class);
    }

    // /**
    //  * @return Fichefrais[] Returns an array of Fichefrais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fichefrais
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function listeAyantFrais(){
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u.nom,u.prenom,SUM(f.montantvalide) as MontantValide FROM App\Entity\Fichefrais f INNER JOIN App\Entity\Utilisateur u WITH f.idutilisateur=u.id GROUP BY f.idutilisateur");
        $laListe = $query->getResult();
        return $laListe;
    }
    
    public function listeNayantPasFrais(){
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u.nom,u.prenom FROM App\Entity\Utilisateur u LEFT OUTER JOIN App\Entity\Fichefrais f WITH f.idutilisateur=u.id WHERE f.montantvalide IS NULL");
        $laListe = $query->getResult();
        return $laListe;
    }
    
    public function nbFrais(){
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u.nom,u.prenom, COUNT(f.id) as Nombre FROM App\Entity\Utilisateur u LEFT JOIN App\Entity\Fichefrais f WITH f.idutilisateur=u.id GROUP BY u.id");
        $laListe = $query->getResult();
        return $laListe;
    }
}
