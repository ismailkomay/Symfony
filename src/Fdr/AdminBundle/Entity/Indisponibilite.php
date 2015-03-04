<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indisponibilite
 *
 * @ORM\Table(name="indisponibilite")
 * @ORM\Entity
 */
class Indisponibilite
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
     * @ORM\Column(name="motif", type="string", length=255, nullable=false)
     */
    private $motif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=false)
     */
    private $datefin;

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
