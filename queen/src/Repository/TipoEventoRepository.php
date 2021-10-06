<?php

namespace App\Repository;

use App\Entity\TipoEvento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoEvento|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoEvento|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoEvento[]    findAll()
 * @method TipoEvento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoEventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoEvento::class);
    }

    // /**
    //  * @return TipoEvento[] Returns an array of TipoEvento objects
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
    public function findOneBySomeField($value): ?TipoEvento
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
