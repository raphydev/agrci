<?php

namespace Labs\BackBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AboutRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AboutRepository extends EntityRepository
{
    /**
     * @param $entity
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOne($entity)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->where($qb->expr()->eq('a.id', ':id'));
        $qb->setParameter(':id', $entity);
        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findPage()
    {
        $qb = $this->createQueryBuilder('a');
        return $qb->getQuery()->getOneOrNullResult();
    }
}
