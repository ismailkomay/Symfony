<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomresponsable", type="string", length=100, nullable=false)
     */
    private $nomresponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomresponsable", type="string", length=100, nullable=false)
     */
    private $prenomresponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=100, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=100, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="nomentreprise", type="string", length=100, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encompte", type="boolean", nullable=false)
     */
    private $encompte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientaffret", type="boolean", nullable=false)
     */
    private $clientaffret;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientramass", type="boolean", nullable=false)
     */
    private $clientramass;

    /**
     * @var string
     *
     * @ORM\Column(name="numcompte", type="string", length=100, nullable=false)
     */
    private $numcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp1", type="string", length=100, nullable=false)
     */
    private $champssupp1;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100, nullable=false)
     */
    private $champssupp2;


}
