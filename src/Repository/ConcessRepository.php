<?php

namespace App\Repository;

use App\Entity\Concess;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Concess|null find($id, $lockMode = null, $lockVersion = null)
 * @method Concess|null findOneBy(array $criteria, array $orderBy = null)
 * @method Concess[]    findAll()
 * @method Concess[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConcessRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Concess::class);
    }

    // /**
    //  * @return Concess[] Returns an array of Concess objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Concess
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
