<?php

namespace App\Repository;

use App\Entity\DbSeries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DbSeries|null find($id, $lockMode = null, $lockVersion = null)
 * @method DbSeries|null findOneBy(array $criteria, array $orderBy = null)
 * @method DbSeries[]    findAll()
 * @method DbSeries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DbSeriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DbSeries::class);
    }

    public function findAll()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c.anno , c.creador FROM App:DbSeries c'
            )
            ->getResult();
    }

    // /**
    //  * @return DbSeries[] Returns an array of DbSeries objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DbSeries
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
