<?php

namespace App\Repository;

use App\Entity\Creation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Creation>
 *
 * @method Creation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Creation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Creation[]    findAll()
 * @method Creation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Creation::class);
    }

    public function findPublicCreation(?int $nbCreations): array
    {
        $queryBuilder = $this->createQueryBuilder('c')
            ->where('c.isPublic = 1')
            ->orderBy('c.createdAt', 'DESC');

        if ($nbCreations === 0 || $nbCreations === null) {
            $queryBuilder->setMaxResults($nbCreations);
        }
        return $queryBuilder->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Creation[] Returns an array of Creation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Creation
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
