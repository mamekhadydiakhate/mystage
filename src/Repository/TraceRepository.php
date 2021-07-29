<?php

namespace App\Repository;

use App\Entity\Trace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trace|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trace|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trace[]    findAll()
 * @method Trace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trace::class);
    }

    // /**
    //  * @return Trace[] Returns an array of Trace objects
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
    public function findOneBySomeField($value): ?Trace
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function traceBetween($id,$start,$end,$page,$limit){
        return $this->createQueryBuilder('t')
            ->where('t.date >= :start')->andWhere('t.date <= :end')
            ->andWhere('t.user =:id')
            ->setParameters(array('start' => $start, 'end' => $end,'id'=>$id))
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
    public function countTraceBetween($id,$start,$end){
        return $this->createQueryBuilder('t')
            ->select('count(t.id)')
            ->where('t.date >= :start')->andWhere('t.date <= :end')
            ->andWhere('t.user =:id')
            ->setParameters(array('start' => $start, 'end' => $end,'id'=>$id))
            ->getQuery()
            ->getSingleScalarResult();
    }
}
