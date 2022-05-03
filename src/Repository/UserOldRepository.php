<?php

namespace App\Repository;

use App\Entity\UserOld;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserOld|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserOld|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserOld[]    findAll()
 * @method UserOld[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserOldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserOld::class);
    }

    // /**
    //  * @return UserOld[] Returns an array of UserOld objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserOld
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
