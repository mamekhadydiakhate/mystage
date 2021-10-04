<?php

namespace App\Repository;

use App\Entity\AdminPP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdminPP|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminPP|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminPP[]    findAll()
 * @method AdminPP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminPPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminPP::class);
    }

    // /**
    //  * @return AdminPP[] Returns an array of AdminPP objects
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
    public function findOneBySomeField($value): ?AdminPP
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
