<?php

namespace App\Repository;

use App\Entity\News;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class NewsRepository extends ServiceEntityRepository
{
    private const COUNT_TO_PAGE = 10;

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, News::class);
    }

    /**
     * @param int $pages
     * @param \DateTime|null $date
     * @return mixed
     */
    public function findPages(int $pages, \DateTime $date = null)
    {
        $offset = ($pages - 1) * self::COUNT_TO_PAGE;

        $qb = $this->createQueryBuilder('n')
            ->andWhere('n.enable = :enable')
            ->setParameter('enable', true)
            ->orderBy('n.date', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults(self::COUNT_TO_PAGE);


        if ($date instanceof \DateTime) {
            $dateEnd = clone $date;
            $dateEnd->modify('+1 month');

            $qb->andWhere('n.date > :startDate')
                ->andWhere('n.date < :endDate')
                ->setParameter('startDate', $date)
                ->setParameter('endDate', $dateEnd);
        }

        $query = $qb->getQuery();

        return $query->execute();
    }

    public function pagesCount( \DateTime $date = null)
    {
        $qb = $this->createQueryBuilder('n')
            ->select('count(n.id)')
            ->andWhere('n.enable = :enable')
            ->setParameter('enable', true);


        if ($date instanceof \DateTime) {
            $dateEnd = clone $date;
            $dateEnd->modify('+1 month');

            $qb->andWhere('n.date > :startDate')
                ->andWhere('n.date < :endDate')
                ->setParameter('startDate', $date)
                ->setParameter('endDate', $dateEnd);
        }

        $query = $qb->getQuery();

        return $query->getSingleScalarResult();
    }

    /**
     * @TODO Получить список дат(год + месяц) в которых есть новости
     * @return array
     */
    public function archive()
    {
        return [];
    }
}