<?php

namespace App\Repository;

use App\Entity\Sintoma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sintoma|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sintoma|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sintoma[]    findAll()
 * @method Sintoma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SintomaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sintoma::class);
    }

    // /**
    //  * @return Sintoma[] Returns an array of Sintoma objects
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
    public function findOneBySomeField($value): ?Sintoma
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
