<?php

namespace App\Repository;

use App\Entity\DocumentAyantDroit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DocumentAyantDroit|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentAyantDroit|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentAyantDroit[]    findAll()
 * @method DocumentAyantDroit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentAyantDroitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocumentAyantDroit::class);
    }

    // /**
    //  * @return DocumentAyantDroit[] Returns an array of DocumentAyantDroit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DocumentAyantDroit
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
