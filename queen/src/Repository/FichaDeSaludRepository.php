<?php

namespace App\Repository;

use App\Entity\FichaDeSalud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FichaDeSalud|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichaDeSalud|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichaDeSalud[]    findAll()
 * @method FichaDeSalud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichaDeSaludRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FichaDeSalud::class);
    }

    // /**
    //  * @return FichaDeSalud[] Returns an array of FichaDeSalud objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FichaDeSalud
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
