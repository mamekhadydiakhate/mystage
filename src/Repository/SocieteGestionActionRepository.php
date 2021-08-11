<?php

namespace App\Repository;

use App\Entity\SocieteGestionAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SocieteGestionAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method SocieteGestionAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method SocieteGestionAction[]    findAll()
 * @method SocieteGestionAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocieteGestionActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SocieteGestionAction::class);
    }

    // /**
    //  * @return SocieteGestionAction[] Returns an array of SocieteGestionAction objects
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
    public function findOneBySomeField($value): ?SocieteGestionAction
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function searchSociete($value){
        return $this->createQueryBuilder('s')
            ->select('s.id,s.libelle')
            ->where('s.libelle LIKE :value')
            ->setParameter('value',"%$value%")
            ->getQuery()
            ->getResult();
    }

    public function listSociete($page,$limit){
        return $this->createQueryBuilder('s')
            ->select('s.id,s.libelle')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countSociete(){
        return $this->createQueryBuilder('s')
            ->select('count(s.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

}
