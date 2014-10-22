<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(nullable=true, name="postal_code")
     */
    private $postalCode;

    /**
     * @ORM\Column(nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(nullable=true, name="contact_phone")
     */
    private $contactPhone;

    /**
     * @ORM\Column(nullable=true, name="contact_email")
     */
    private $contactEmail;

    /**
     * @ORM\Column(type="string", nullable=true, name="contact_name")
     */
    private $contactName;
}