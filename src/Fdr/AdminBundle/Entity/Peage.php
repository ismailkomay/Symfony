<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peage
 *
 * @ORM\Table(name="peage")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\PeageRepository")
 */
class Peage
{
    /**
   * @ORM\ManyToOne(targetEntity="FeuilleDeRoute",inversedBy="peages")
   * @ORM\JoinColumn(nullable=false)
   */
  
    private $feuilleDeRoute;
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
     * @ORM\Column(name="numCarte", type="string", length=100)
     */
    private $numCarte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DatePassage", type="datetime")
     */
    private $datePassage;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

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
     * Set numCarte
     *
     * @param string $numCarte
     * @return Peage
     */
    public function setNumCarte($numCarte)
    {
        $this->numCarte = $numCarte;
    
        return $this;
    }

    /**
     * Get numCarte
     *
     * @return string 
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * Set datePassage
     *
     * @param \DateTime $datePassage
     * @return Peage
     */
    public function setDatePassage($datePassage)
    {
        $this->datePassage = $datePassage;
    
        return $this;
    }

    /**
     * Get datePassage
     *
     * @return \DateTime 
     */
    public function getDatePassage()
    {
        return $this->datePassage;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Peage
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set champSup1
     *
     * @param string $champSup1
     * @return Peage
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
     * @return Peage
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
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return Peage
     */
    public function setFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute)
    {
        $this->feuilleDeRoute = $feuilleDeRoute;
    
        return $this;
    }

    /**
     * Get feuilleDeRoute
     *
     * @return \Fdr\AdminBundle\Entity\FeuilleDeRoute 
     */
    public function getFeuilleDeRoute()
    {
        return $this->feuilleDeRoute;
    }
    
    public function __toString()
    {
        return "Peage : ".$this->id."/ montant:".$this->montant;
    }
}
