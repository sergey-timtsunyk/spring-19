<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="product_order_id_fk", columns={"order_id"}), @ORM\Index(name="fk_product_price1_idx", columns={"price_id"}), @ORM\Index(name="fk_product_author_name1_idx", columns={"author_id"}), @ORM\Index(name="fk_product_product_status1_idx", columns={"product_status_id"}), @ORM\Index(name="product_product_about_id_fk", columns={"product_about_id"}), @ORM\Index(name="fk_product_user1_idx", columns={"owner_id"}), @ORM\Index(name="fk_product_product_category1_idx", columns={"product_category_id"})})
 * @ORM\Entity
 */
class Product
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
     * @var int
     *
     * @ORM\Column(name="product_code", type="integer", nullable=false)
     */
    private $productCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_at", type="datetime", nullable=false)
     */
    private $startAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_at", type="datetime", nullable=false)
     */
    private $finishAt;

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
     * @var \ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_category_id", referencedColumnName="id")
     * })
     */
    private $productCategory;

    /**
     * @var \ProductStatus
     *
     * @ORM\ManyToOne(targetEntity="ProductStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_status_id", referencedColumnName="id")
     * })
     */
    private $productStatus;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;

    /**
     * @var \Author
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * })
     */
    private $author;

    /**
     * @var \Order
     *
     * @ORM\ManyToOne(targetEntity="Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;

    /**
     * @var \ProductAbout
     *
     * @ORM\ManyToOne(targetEntity="ProductAbout")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_about_id", referencedColumnName="id")
     * })
     */
    private $productAbout;


}
