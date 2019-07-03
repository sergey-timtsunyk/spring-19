<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BidHistory
 *
 * @ORM\Table(name="bid_history", indexes={@ORM\Index(name="bid_history_user_id_fk", columns={"user_id"}), @ORM\Index(name="fk_bid_history_product1_idx", columns={"product_id"})})
 * @ORM\Entity
 */
class BidHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bid_time", type="datetime", nullable=false)
     */
    private $bidTime;

    /**
     * @var string
     *
     * @ORM\Column(name="bid_amount", type="string", length=45, nullable=false)
     */
    private $bidAmount;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="bitHistories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="bitHistories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function __construct()
    {
        $this->bidTime = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getBidTime(): \DateTime
    {
        return $this->bidTime;
    }

    /**
     * @return string
     */
    public function getBidAmount(): string
    {
        return $this->bidAmount;
    }

    /**
     * @param string $bidAmount
     */
    public function setBidAmount(string $bidAmount): void
    {
        $this->bidAmount = $bidAmount;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

}
