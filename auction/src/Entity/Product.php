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
    private $code;

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
     * @var Price
     *
     * @ORM\OneToOne(targetEntity="Price")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_id", referencedColumnName="id")
     * })
     */
    private $price;

    /**
     * @var ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var ProductStatus
     *
     * @ORM\ManyToOne(targetEntity="ProductStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_status_id", referencedColumnName="id")
     * })
     */
    private $productStatus;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * })
     */
    private $author;

    /**
     * @var Order
     *
     * @ORM\OneToOne(targetEntity="Order", mappedBy="product")
     */
    private $order;

    /**
     * @var ProductAbout
     *
     * @ORM\OneToOne(targetEntity="ProductAbout", inversedBy="product")
     * @ORM\JoinColumn(name="product_about_id", referencedColumnName="id")
     */
    private $productAbout;

    /**
     * @var ProductPhoto
     *
     * @ORM\OneToMany(targetEntity="ProductPhoto", mappedBy="product")
     */
    private $photos;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return \DateTime
     */
    public function getStartAt(): \DateTime
    {
        return $this->startAt;
    }

    /**
     * @param \DateTime $startAt
     */
    public function setStartAt(\DateTime $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return \DateTime
     */
    public function getFinishAt(): \DateTime
    {
        return $this->finishAt;
    }

    /**
     * @param \DateTime $finishAt
     */
    public function setFinishAt(\DateTime $finishAt): void
    {
        $this->finishAt = $finishAt;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @param Price $price
     */
    public function setPrice(Price $price): void
    {
        $this->price = $price;
    }

    /**
     * @return ProductCategory
     */
    public function getCategory(): ProductCategory
    {
        return $this->category;
    }

    /**
     * @param ProductCategory $category
     */
    public function setCategory(ProductCategory $category): void
    {
        $this->category = $category;
    }

    /**
     * @return ProductStatus
     */
    public function getProductStatus(): ProductStatus
    {
        return $this->productStatus;
    }

    /**
     * @param ProductStatus $productStatus
     */
    public function setProductStatus(ProductStatus $productStatus): void
    {
        $this->productStatus = $productStatus;
    }

    /**
     * @return User
     */
    public function getOwner(): User
    {
        return $this->owner;
    }

    /**
     * @param User $owner
     */
    public function setOwner(User $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return ProductAbout
     */
    public function getProductAbout(): ProductAbout
    {
        return $this->productAbout;
    }

    /**
     * @param ProductAbout $productAbout
     */
    public function setProductAbout(ProductAbout $productAbout): void
    {
        $this->productAbout = $productAbout;
    }

    /**
     * @return ProductPhoto
     */
    public function getPhotos(): ProductPhoto
    {
        return $this->photos;
    }

    /**
     * @param ProductPhoto $photos
     */
    public function setPhotos(ProductPhoto $photos): void
    {
        $this->photos = $photos;
    }
}
