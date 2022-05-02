<?php

namespace App\Repository;

use App\Entity\BookDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BookDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookDetails[]    findAll()
 * @method BookDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookDetails::class);
    }

    // /**
    //  * @return BookDetails[] Returns an array of BookDetails objects
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
    public function findOneBySomeField($value): ?BookDetails
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
