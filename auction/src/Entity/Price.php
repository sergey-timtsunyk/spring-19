<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table(name="price")
 * @ORM\Entity
 */
class Price
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
     * @ORM\Column(name="estimated_price", type="string", length=45, nullable=false)
     */
    private $estimatedPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="start_price", type="string", length=45, nullable=false)
     */
    private $startPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="reserve_price", type="string", length=45, nullable=false)
     */
    private $reservePrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="winner_prise", type="string", length=45, nullable=true)
     */
    private $winnerPrise;


}
