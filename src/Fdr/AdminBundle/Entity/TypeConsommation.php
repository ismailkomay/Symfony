<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * TypeConsommation
 *
 * @ORM\Table(name="typeconsommation")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\TypeConsommationRepository")
 */
class TypeConsommation
{
    /**
   * @ORM\OneToMany(targetEntity="BonCarburantHuile",mappedBy="typeConsommation")
   * @ORM\JoinColumn(nullable=true)
   */
    private $bonCarburantHuiles;
    
    public function __construct() {
        $this->bonCarburantHuiles = new ArrayCollection() ;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="agence", type="string", length=100)
     */
    private $agence;

    /**
     * @var string
     *
     * @ORM\Column(name="produit", type="string", length=100)
     */
    private $produit;

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaire", type="float")
     */
    private $prixUnitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup1", type="string", length=100, nullable=true)
     */
    private $champSup1;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup2", type="string", length=100, nullable=true)
     */
    private $champSup2;


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
     * Set type
     *
     * @param string $type
     * @return TypeConsommation
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
     * Set agence
     *
     * @param string $agence
     * @return TypeConsommation
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
    
        return $this;
    }

    /**
     * Get agence
     *
     * @return string 
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set produit
     *
     * @param string $produit
     * @return TypeConsommation
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    
        return $this;
    }

    /**
     * Get produit
     *
     * @return string 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     * @return TypeConsommation
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;
    
        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float 
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set champSup1
     *
     * @param string $champSup1
     * @return TypeConsommation
     */
    public function setChampSup1($champSup1)
    {
        $this->champSup1 = $champSup1;
    
        return $this;
    }

    /**
     * Get champSup1
     *
     * @return string 
     */
    public function getChampSup1()
    {
        return $this->champSup1;
    }

    /**
     * Set champSup2
     *
     * @param string $champSup2
     * @return TypeConsommation
     */
    public function setChampSup2($champSup2)
    {
        $this->champSup2 = $champSup2;
    
        return $this;
    }

    /**
     * Get champSup2
     *
     * @return string 
     */
    public function getChampSup2()
    {
        return $this->champSup2;
    }

    /**
     * Add bonCarburantHuiles
     *
     * @param \Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles
     * @return TypeConsommation
     */
    public function addBonCarburantHuile(\Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles)
    {
        $this->bonCarburantHuiles[] = $bonCarburantHuiles;
    
        return $this;
    }

    /**
     * Remove bonCarburantHuiles
     *
     * @param \Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles
     */
    public function removeBonCarburantHuile(\Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles)
    {
        $this->bonCarburantHuiles->removeElement($bonCarburantHuiles);
    }

    /**
     * Get bonCarburantHuiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBonCarburantHuiles()
    {
        return $this->bonCarburantHuiles;
    }
    
    public function __toString()
    {
        return $this->produit;
    }
}
