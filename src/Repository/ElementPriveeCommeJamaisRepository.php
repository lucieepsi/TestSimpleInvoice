<?php

namespace App\Repository;

use App\Entity\ElementPriveeCommeJamais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ElementPriveeCommeJamais>
 *
 * @method ElementPriveeCommeJamais|null find($id, $lockMode = null, $lockVersion = null)
 * @method ElementPriveeCommeJamais|null findOneBy(array $criteria, array $orderBy = null)
 * @method ElementPriveeCommeJamais[]    findAll()
 * @method ElementPriveeCommeJamais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElementPriveeCommeJamaisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ElementPriveeCommeJamais::class);
    }

    public function save(ElementPriveeCommeJamais $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ElementPriveeCommeJamais $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ElementPriveeCommeJamais[] Returns an array of ElementPriveeCommeJamais objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ElementPriveeCommeJamais
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
