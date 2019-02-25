<?php

namespace App\Repository;

use App\Entity\Initiative;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Initiative|null find($id, $lockMode = null, $lockVersion = null)
 * @method Initiative|null findOneBy(array $criteria, array $orderBy = null)
 * @method Initiative[]    findAll()
 * @method Initiative[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InitiativeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Initiative::class);
    }

    // /**
    //  * @return Initiative[] Returns an array of Initiative objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Initiative
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
