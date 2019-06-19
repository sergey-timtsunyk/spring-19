<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_D34A04ADD614C7E7", columns={"price"})}, indexes={@ORM\Index(name="fk_product_product_category1_idx", columns={"product_category_id"})})
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
     * @var string|null
     *
     * @ORM\Column(name="owner", type="string", length=255, nullable=true)
     */
    private $owner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="string", length=25, nullable=true)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="about", type="text", length=65535, nullable=true)
     */
    private $about;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

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
     * @var ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory", inversedBy="products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var BidHistory
     *
     * @ORM\OneToMany(targetEntity="BidHistory", mappedBy="product")
     */
    private $bitHistories;

    /**
     * @var Order
     *
     * @ORM\OneToOne(targetEntity="Order", mappedBy="product")
     */
    private $order;

    /**
     * Product constructor.
     * @param int $id
     */
    public function __construct()
    {
        $dateTime = new \DateTime();
        $this->startAt = clone $dateTime->modify('+ 1 day');
        $this->finishAt = $dateTime->modify('+ 6 day');
    }

    /**
     * @return int
     */
        public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }

    /**
     * @param string|null $owner
     */
    public function setOwner(?string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string|null $price
     */
    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    /**
     * @param string|null $photo
     */
    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @param string|null $about
     */
    public function setAbout(?string $about): void
    {
        $this->about = $about;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCode(): ?int
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
    public function getStartAt(): ?\DateTime
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
    public function getFinishAt(): ?\DateTime
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
     * @return ProductCategory
     */
    public function getCategory(): ?ProductCategory
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
     * @return BidHistory
     */
    public function getBitHistories(): BidHistory
    {
        return $this->bitHistories;
    }

    /**
     * @param BidHistory $bitHistories
     */
    public function setBitHistories(BidHistory $bitHistories): void
    {
        $this->bitHistories = $bitHistories;
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
}
