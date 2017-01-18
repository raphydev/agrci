<?php

namespace Labs\BackBundle\Repository;

/**
 * AboutRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AboutRepository extends \Doctrine\ORM\EntityRepository
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
