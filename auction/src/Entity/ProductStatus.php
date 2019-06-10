<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductStatus
 *
 * @ORM\Table(name="product_status")
 * @ORM\Entity
 */
class ProductStatus
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
     * @ORM\Column(name="name_status", type="string", length=45, nullable=false)
     */
    private $nameStatus;

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
    public function getNameStatus(): ?string
    {
        return $this->nameStatus;
    }

    /**
     * @param string $nameStatus
     */
    public function setNameStatus(string $nameStatus): void
    {
        $this->nameStatus = $nameStatus;
    }

}
