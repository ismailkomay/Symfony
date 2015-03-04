<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itineraire
 *
 * @ORM\Table(name="itineraire")
 * @ORM\Entity
 */
class Itineraire
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
     * @ORM\Column(name="depart", type="string", length=100, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee", type="string", length=100, nullable=false)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=false)
     */
    private $remarques;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=false)
     */
    private $disponible;

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
