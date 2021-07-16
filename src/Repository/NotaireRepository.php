<?php

namespace App\Repository;

use App\Entity\Notaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Notaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Notaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Notaire[]    findAll()
 * @method Notaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notaire::class);
    }

    // /**
    //  * @return Notaire[] Returns an array of Notaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Notaire
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function listNotaires($page,$limit) {
        //here
        return $this->createQueryBuilder('n')
            ->select('n.id,n.prenom,n.nom,n.email')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }


    public function countNotaires() {
        //here
        return $this->createQueryBuilder('n')
            ->select('count(n.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
