<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="orders", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_F52993984584665A", columns={"product_id"})}, indexes={@ORM\Index(name="fk_order_product1_idx", columns={"product_id"}), @ORM\Index(name="order_user_id_fk", columns={"user_id"})})
 * @ORM\Entity
 */
class Order
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
     * @var string|null
     *
     * @ORM\Column(name="price", type="string", length=20, nullable=true)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_details", type="text", length=65535, nullable=true)
     */
    private $paymentDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;


    /**
     * @var Product
     *
     * @ORM\OneToOne(targetEntity="Product", inversedBy="order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->id;
    }
}
