<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestation
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity
 */
class Prestation
{
    /**
   * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="prestation")
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
    
    /**
   * @ORM\ManyToOne(targetEntity="TypePrestation" ,inversedBy="prestations")
     * @ORM\JoinColumn(nullable=false)
   */
  //@ORM\JoinColumn(,referencedColumnName="id")
    private $typePrestation;
    /**
   * @ORM\ManyToOne(targetEntity="Secteur",inversedBy="prestations")
   * @ORM\JoinColumn(nullable=true)
   */
  
    private $secteur;
    
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
     * @ORM\Column(name="code", type="string", length=100, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

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
     * Set code
     *
     * @param string $code
     * @return Prestation
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Prestation
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Prestation
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
     * @return Prestation
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
     * Set typePrestation
     *
     * @param \Fdr\AdminBundle\Entity\TypePrestation $typePrestation
     * @return Prestation
     */
    public function setTypePrestation(\Fdr\AdminBundle\Entity\TypePrestation $typePrestation)
    {
        $this->typePrestation = $typePrestation;
    
        return $this;
    }

    /**
     * Get typePrestation
     *
     * @return \Fdr\AdminBundle\Entity\TypePrestation 
     */
    public function getTypePrestation()
    {
        return $this->typePrestation;
    }

    /**
     * Set secteur
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteur
     * @return Prestation
     */
    public function setSecteur(\Fdr\AdminBundle\Entity\Secteur $secteur = null)
    {
        $this->secteur = $secteur;
    
        return $this;
    }

    /**
     * Get secteur
     *
     * @return \Fdr\AdminBundle\Entity\Secteur 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->feuilleDeRoutes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Prestation
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
