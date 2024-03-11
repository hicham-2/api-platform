<?php

namespace App\Repository;

use App\Entity\Difficulté;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Difficulté>
 *
 * @method Difficulté|null find($id, $lockMode = null, $lockVersion = null)
 * @method Difficulté|null findOneBy(array $criteria, array $orderBy = null)
 * @method Difficulté[]    findAll()
 * @method Difficulté[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DifficultéRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Difficulté::class);
    }

//    /**
//     * @return Difficulté[] Returns an array of Difficulté objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Difficulté
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
