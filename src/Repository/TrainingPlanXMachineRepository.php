<?php

namespace App\Repository;

use App\Entity\TrainingPlanXMachine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrainingPlanXMachine>
 *
 * @method TrainingPlanXMachine|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingPlanXMachine|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingPlanXMachine[]    findAll()
 * @method TrainingPlanXMachine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingPlanXMachineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrainingPlanXMachine::class);
    }

//    /**
//     * @return TrainingPlanXMachine[] Returns an array of TrainingPlanXMachine objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TrainingPlanXMachine
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
