<?php

namespace App\Repository;

use App\Entity\RoleDestinataire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RoleDestinataire|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleDestinataire|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleDestinataire[]    findAll()
 * @method RoleDestinataire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleDestinataireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoleDestinataire::class);
    }

    // /**
    //  * @return RoleDestinataire[] Returns an array of RoleDestinataire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoleDestinataire
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
