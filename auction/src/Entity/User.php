<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_address1_idx", columns={"address_id"}), @ORM\Index(name="fk_user_user_role1_idx", columns={"user_role_id"}), @ORM\Index(name="fk_user_currency_idx", columns={"currency_id"}), @ORM\Index(name="fk_user_profile_user1_idx", columns={"profile_user_id"})})
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
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \UserProfile
     *
     * @ORM\ManyToOne(targetEntity="UserProfile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_user_id", referencedColumnName="id")
     * })
     */
    private $profileUser;

    /**
     * @var \UserRole
     *
     * @ORM\ManyToOne(targetEntity="UserRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_role_id", referencedColumnName="id")
     * })
     */
    private $userRole;


}
