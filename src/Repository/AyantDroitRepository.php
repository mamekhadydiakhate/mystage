<?php

namespace App\Repository;

use App\Entity\AyantDroit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AyantDroit|null find($id, $lockMode = null, $lockVersion = null)
 * @method AyantDroit|null findOneBy(array $criteria, array $orderBy = null)
 * @method AyantDroit[]    findAll()
 * @method AyantDroit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AyantDroitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AyantDroit::class);
    }

    // /**
    //  * @return AyantDroit[] Returns an array of AyantDroit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AyantDroit
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
