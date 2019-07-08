<?php

namespace App\Sevices;

use App\Entity\BidHistory;
use App\Entity\Product;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Model\User;

class CreateBid
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * CreateBid constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param User $user
     * @param Product $product
     * @param string $amount
     * @return bool
     */
    public function create(User $user, Product $product, string $amount): bool
    {
        if (!($product->isActive() && $user->isEnabled())) {
            return false;
        }

        try {
            $this->em->beginTransaction();

            $bid = new BidHistory();
            $bid->setUser($user);
            $bid->setProduct($product);
            $bid->setBidAmount($amount);

            $this->em->persist($user);
            $this->em->persist($bid);

            $this->em->flush();

            $this->em->commit();
        } catch (\Exception $e) {
            $this->em->rollback();

            return false;
        }

        return true;
    }
}