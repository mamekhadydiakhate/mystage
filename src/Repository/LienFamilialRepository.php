<?php

namespace App\Repository;

use App\Entity\LienFamilial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LienFamilial|null find($id, $lockMode = null, $lockVersion = null)
 * @method LienFamilial|null findOneBy(array $criteria, array $orderBy = null)
 * @method LienFamilial[]    findAll()
 * @method LienFamilial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LienFamilialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LienFamilial::class);
    }

    // /**
    //  * @return LienFamilial[] Returns an array of LienFamilial objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LienFamilial
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function listLiensFamilial(){
        return $this->createQueryBuilder('l')
            ->select('l.id, l.libelle')
            ->getQuery()
            ->getResult()
            ;
    }
}
