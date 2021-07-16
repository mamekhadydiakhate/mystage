<?php

namespace App\Repository;

use App\Entity\SignatureCachet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SignatureCachet|null find($id, $lockMode = null, $lockVersion = null)
 * @method SignatureCachet|null findOneBy(array $criteria, array $orderBy = null)
 * @method SignatureCachet[]    findAll()
 * @method SignatureCachet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignatureCachetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SignatureCachet::class);
    }

    // /**
    //  * @return SignatureCachet[] Returns an array of SignatureCachet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SignatureCachet
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
