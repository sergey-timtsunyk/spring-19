<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", indexes={@ORM\Index(name="fk_order_price1_idx", columns={"price_id"}), @ORM\Index(name="fk_order_order_status1_idx", columns={"order_status_id"}), @ORM\Index(name="fk_order_product1_idx", columns={"product_id"}), @ORM\Index(name="fk_order_bank_details1_idx", columns={"bank_details_id"})})
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
     * @var \BankDetails
     *
     * @ORM\ManyToOne(targetEntity="BankDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_details_id", referencedColumnName="id")
     * })
     */
    private $bankDetails;

    /**
     * @var \OrderStatus
     *
     * @ORM\ManyToOne(targetEntity="OrderStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_status_id", referencedColumnName="id")
     * })
     */
    private $orderStatus;

    /**
     * @var \Price
     *
     * @ORM\ManyToOne(targetEntity="Price")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_id", referencedColumnName="id")
     * })
     */
    private $price;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;


}
