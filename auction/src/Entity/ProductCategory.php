<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategory
 *
 * @ORM\Table(name="product_category", indexes={@ORM\Index(name="fk_product_category_product_category1_idx", columns={"parent_id"})})
 * @ORM\Entity
 */
class ProductCategory
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var Product[]
     *
     * @ORM\OneToMany(targetEntity="Product", mappedBy="productCategory")
     */
    private $products;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return ProductCategory
     */
    public function getParent(): ?ProductCategory
    {
        return $this->parent;
    }

    /**
     * @param ProductCategory $parent
     */
    public function setParent(ProductCategory $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param Product[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
