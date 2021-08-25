<?php

namespace App\Repository;

use App\Entity\StatutLegal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatutLegal|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatutLegal|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatutLegal[]    findAll()
 * @method StatutLegal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatutLegalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatutLegal::class);
    }

    // /**
    //  * @return StatutLegal[] Returns an array of StatutLegal objects
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
    public function findOneBySomeField($value): ?StatutLegal
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function listStatutLegal(){
        return $this->createQueryBuilder('s')
            ->select('s.id, s.libelle')
            ->getQuery()
            ->getResult()
            ;
    }
}
