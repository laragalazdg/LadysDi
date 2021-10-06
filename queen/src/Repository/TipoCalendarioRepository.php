<?php

namespace App\Repository;

use App\Entity\TipoCalendario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoCalendario|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoCalendario|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoCalendario[]    findAll()
 * @method TipoCalendario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoCalendarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoCalendario::class);
    }

    // /**
    //  * @return TipoCalendario[] Returns an array of TipoCalendario objects
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
    public function findOneBySomeField($value): ?TipoCalendario
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
