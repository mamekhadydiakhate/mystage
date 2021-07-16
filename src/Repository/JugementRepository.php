<?php

namespace App\Repository;

use App\Entity\Jugement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jugement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jugement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jugement[]    findAll()
 * @method Jugement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JugementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jugement::class);
    }


    public function listJugements($page,$limit) {
        //here
        return $this->createQueryBuilder('j')
            ->select('j')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }


    public function countJugements() {
        //here
        return $this->createQueryBuilder('j')
            ->select('count(j.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }
    // /**
    //  * @return Jugement[] Returns an array of Jugement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jugement
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
