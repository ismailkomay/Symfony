<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Missionaffretement
 *
 * @ORM\Table(name="missionaffretement")
 * @ORM\Entity
 */
class Missionaffretement
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
     * @ORM\Column(name="ecc", type="string", length=10, nullable=false)
     */
    private $ecc;

    /**
     * @var string
     *
     * @ORM\Column(name="ect", type="string", length=10, nullable=false)
     */
    private $ect;

    /**
     * @var string
     *
     * @ORM\Column(name="ebl", type="string", length=10, nullable=false)
     */
    private $ebl;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=10, nullable=false)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="autredoc", type="string", length=10, nullable=false)
     */
    private $autredoc;

    /**
     * @var float
     *
     * @ORM\Column(name="valdeclassurance", type="float", precision=10, scale=0, nullable=false)
     */
    private $valdeclassurance;

    /**
     * @var string
     *
     * @ORM\Column(name="bonlivraison", type="string", length=100, nullable=false)
     */
    private $bonlivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="numexpedition", type="string", length=100, nullable=false)
     */
    private $numexpedition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateramassage", type="datetime", nullable=false)
     */
    private $dateramassage;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuramassage", type="string", length=100, nullable=false)
     */
    private $lieuramassage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrecolis", type="integer", nullable=false)
     */
    private $nbrecolis;

    /**
     * @var string
     *
     * @ORM\Column(name="naturemarchandise", type="string", length=255, nullable=false)
     */
    private $naturemarchandise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datelivraison", type="datetime", nullable=false)
     */
    private $datelivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="lieulivraison", type="string", length=100, nullable=false)
     */
    private $lieulivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="montantfacture", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="remise", type="integer", nullable=false)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="motifremise", type="string", length=100, nullable=false)
     */
    private $motifremise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="montantregle", type="boolean", nullable=false)
     */
    private $montantregle;

    /**
     * @var string
     *
     * @ORM\Column(name="nombnq", type="string", length=100, nullable=false)
     */
    private $nombnq;

    /**
     * @var string
     *
     * @ORM\Column(name="numcheque", type="string", length=100, nullable=false)
     */
    private $numcheque;

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

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp3", type="string", length=100, nullable=false)
     */
    private $champssupp3;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp4", type="string", length=100, nullable=false)
     */
    private $champssupp4;


}
