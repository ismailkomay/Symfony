<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
   * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="vehicule")
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
    
    public function __construct() {
        $this->feuilleDeRoutes = new ArrayCollection() ;
    }
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
     * Set tonnage
     *
     * @param float $tonnage
     * @return Vehicule
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;
    
        return $this;
    }

    /**
     * Get tonnage
     *
     * @return float 
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Vehicule
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set remorque
     *
     * @param boolean $remorque
     * @return Vehicule
     */
    public function setRemorque($remorque)
    {
        $this->remorque = $remorque;
    
        return $this;
    }

    /**
     * Get remorque
     *
     * @return boolean 
     */
    public function getRemorque()
    {
        return $this->remorque;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Vehicule
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    
        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set vidange
     *
     * @param integer $vidange
     * @return Vehicule
     */
    public function setVidange($vidange)
    {
        $this->vidange = $vidange;
    
        return $this;
    }

    /**
     * Get vidange
     *
     * @return integer 
     */
    public function getVidange()
    {
        return $this->vidange;
    }

    /**
     * Set compteur
     *
     * @param integer $compteur
     * @return Vehicule
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;
    
        return $this;
    }

    /**
     * Get compteur
     *
     * @return integer 
     */
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Vehicule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Vehicule
     */
    public function setChampssupp1($champssupp1)
    {
        $this->champssupp1 = $champssupp1;
    
        return $this;
    }

    /**
     * Get champssupp1
     *
     * @return string 
     */
    public function getChampssupp1()
    {
        return $this->champssupp1;
    }

    /**
     * Set champssupp2
     *
     * @param string $champssupp2
     * @return Vehicule
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
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Vehicule
     */
    public function addFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes)
    {
        $this->feuilleDeRoutes[] = $feuilleDeRoutes;
    
        return $this;
    }

    /**
     * Remove feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     */
    public function removeFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes)
    {
        $this->feuilleDeRoutes->removeElement($feuilleDeRoutes);
    }

    /**
     * Get feuilleDeRoutes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeuilleDeRoutes()
    {
        return $this->feuilleDeRoutes;
    }
}
