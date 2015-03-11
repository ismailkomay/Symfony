<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Typeprestation
 *
 * @ORM\Table(name="typeprestation")
 * @ORM\Entity
 * 
 */
class TypePrestation
{
    
     /**
   * @ORM\OneToMany(targetEntity="Prestation",mappedBy="typePrestation")
   * @ORM\JoinColumn(nullable=true)
   */
    private $prestations;
   
    
    public function __construct() {
        $this->prestations = new ArrayCollection() ;
        $this->feuilleDeRoutes = new ArrayCollection();
    }
    
 /**
   * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="typePrestation")
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
    
    
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
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false, unique=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp1", type="string", length=100, nullable=true)
     */
    private $champssupp1;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100, nullable=true)
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
     * Set libelle
     *
     * @param string $libelle
     * @return TypePrestation
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return TypePrestation
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
     * @return TypePrestation
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
     * Add prestations
     *
     * @param \Fdr\AdminBundle\Entity\Prestation $prestations
     * @return TypePrestation
     */
    public function addPrestation(\Fdr\AdminBundle\Entity\Prestation $prestations)
    {
        $this->prestations[] = $prestations;
    
        return $this;
    }

    /**
     * Remove prestations
     *
     * @param \Fdr\AdminBundle\Entity\Prestation $prestations
     */
    public function removePrestation(\Fdr\AdminBundle\Entity\Prestation $prestations)
    {
        $this->prestations->removeElement($prestations);
    }

    /**
     * Get prestations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrestations()
    {
        return $this->prestations;
    }
    
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return TypePrestation
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
