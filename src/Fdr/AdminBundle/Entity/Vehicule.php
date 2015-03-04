<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
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
     * @var float
     *
     * @ORM\Column(name="tonnage", type="float", precision=10, scale=0, nullable=false)
     */
    private $tonnage;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remorque", type="boolean", nullable=false)
     */
    private $remorque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

    /**
     * @var integer
     *
     * @ORM\Column(name="vidange", type="bigint", nullable=false)
     */
    private $vidange;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteur", type="bigint", nullable=false)
     */
    private $compteur;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=100, nullable=false)
     */
    private $matricule;

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
