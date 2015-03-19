<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Indisponibilite
 *
 * @ORM\Table(name="indisponibilite")
 * @ORM\Entity
 */
class Indisponibilite
{
    
    public function __construct() {
         $this->datedebut = new \Datetime();  
          $this->datefin = new \Datetime();  
    }
    /**
   * @ORM\ManyToOne(targetEntity="Chauffeur",inversedBy="indisponibilites", cascade={"remove"})
   * @ORM\JoinColumn(nullable=false)
    * @Assert\NotBlank()
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
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="motif", type="string", length=255, nullable=false)
     */
    private $motif;

    /**
     * @var \DateTime
     *@Assert\NotBlank()
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="datefin", type="datetime", nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp1", type="string", length=100, nullable=false, nullable=true)
     */
    private $champssupp1;
    

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100, nullable=false, nullable=true)
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

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Indisponibilite
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
    
    public function __toString()
    {
        return $this->chauffeur."/".$this->motif."(".$this->datedebut."->".$this->datefin.")";
    }
}
