<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressCities
 *
 * @ORM\Table(name="address_cities", indexes={@ORM\Index(name="fk_address_cities_address_countries1_idx", columns={"address_countries_id"})})
 * @ORM\Entity
 */
class City
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
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_countries_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var Address[]
     * @ ORM\OneToMany(targetEntity="Address", mappedBy="city")
     */
    //private $address;

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
     * @return Country
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('[%s] %s', $this->id, $this->name);
    }
}
