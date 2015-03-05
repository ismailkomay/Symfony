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
   * @ORM\ManyToOne(targetEntity="Chauffeur",inversedBy="indisponibilites", cascade={"remove"})
   * @ORM\JoinColumn(nullable=false)
   */
  
    private $chauffeur;
    
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
     * @ORM\Column(name="etatContrat", type="string", length=100, nullable=false)
     */
    private $etatContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100, nullable=false)
     */
    private $champssupp2;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return Indisponibilite
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;
    
        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Indisponibilite
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Indisponibilite
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set etatContrat
     *
     * @param string $etatContrat
     * @return Indisponibilite
     */
    public function setEtatContrat($etatContrat)
    {
        $this->etatContrat = $etatContrat;
    
        return $this;
    }

    /**
     * Get etatContrat
     *
     * @return string 
     */
    public function getEtatContrat()
    {
        return $this->etatContrat;
    }

    /**
     * Set champssupp2
     *
     * @param string $champssupp2
     * @return Indisponibilite
     */
    public function setChampssupp2($champssupp2)
    {
        $this->champssupp2 = $champssupp2;
    
        return $this;
    }

    /**
     * Get champssupp2
     *
     * @return string 
     */
    public function getChampssupp2()
    {
        return $this->champssupp2;
    }

    /**
     * Set chauffeur
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeur
     * @return Indisponibilite
     */
    public function setChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeur)
    {
        $this->chauffeur = $chauffeur;
    
        return $this;
    }

    /**
     * Get chauffeur
     *
     * @return \Fdr\AdminBundle\Entity\Chauffeur 
     */
    public function getChauffeur()
    {
        return $this->chauffeur;
    }
}
