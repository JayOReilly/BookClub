<?php

namespace App\Repository;

use App\Entity\BookCat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BookCat|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookCat|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookCat[]    findAll()
 * @method BookCat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookCatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookCat::class);
    }

    // /**
    //  * @return BookCat[] Returns an array of BookCat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BookCat
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
