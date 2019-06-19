<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="first_name", type="string", length=45, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=200, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=false)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=150, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=15, nullable=true, options={"default"="USER"})
     */
    private $role = 'USER';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=true, options={"default"="NEW"})
     */
    private $status = 'NEW';

    /**
     * @var string|null
     *
     * @ORM\Column(name="identific_code", type="string", length=45, nullable=true)
     */
    private $identificCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_registration", type="datetime", nullable=false)
     */
    private $dateRegistration;

    /**
     * @var Order[]
     *
     * @ORM\OneToMany(targetEntity="Order", mappedBy="user")
     */
    private $orders;

    /**
     * @var BidHistory[]
     *
     * @ORM\OneToMany(targetEntity="BidHistory", mappedBy="user")
     */
    private $bitHistories;
}
