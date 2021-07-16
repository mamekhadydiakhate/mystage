<?php

namespace App\Repository;

use App\Entity\TransfertAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TransfertAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransfertAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransfertAction[]    findAll()
 * @method TransfertAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransfertActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransfertAction::class);
    }

    // /**
    //  * @return TransfertAction[] Returns an array of TransfertAction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TransfertAction
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function searchTransfertAction($value){
        return $this->createQueryBuilder('t')
            ->select('t')
            ->where('t.numeroTransfert LIKE :value')
            ->setParameter('value',"%$value%")
            ->getQuery()
            ->getResult();
    }
}
