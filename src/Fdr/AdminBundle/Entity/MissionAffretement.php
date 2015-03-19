<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Missionaffretement
 *
 * @ORM\Table(name="missionaffretement")
 * @ORM\Entity
 */
class MissionAffretement
{
    
    public function __construct() {
          $this->dateramassage = new \Datetime();  
          $this->datelivraison = new \Datetime();
          $this->dateGeneree = new \Datetime();
    }
  
  /**
   * @ORM\ManyToOne(targetEntity="Client",inversedBy="missionAffretements")
   * @ORM\JoinColumn(nullable=false)
   */
  private $client=null;
  /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateGeneree", type="datetime")
     */
    private $dateGeneree;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecc", type="boolean", nullable=true)
     */
    private $ecc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ect",  type="boolean", nullable=true)
     */
    private $ect;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ebl", type="boolean", nullable=true)
     */
    private $ebl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="espece", type="boolean", nullable=true)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="autredoc", type="string", length=100, nullable=true)
     */
    private $autredoc;

    /**
     * @var float
     *
     * @ORM\Column(name="valdeclassurance", type="float", precision=2, scale=0, nullable=true)
     * @Assert\Type(type="numeric", message="La valeur du champs n'est pas valide.")
     * @Assert\Currency
     */
    private $valdeclassurance;

    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="bonlivraison", type="string", length=100, nullable=true)
     */
    private $bonlivraison;

    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="numexpedition", type="string", length=100, nullable=true)
     */
    private $numexpedition;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="dateramassage", type="datetime", nullable=false)
     */
    private $dateramassage;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuramassage", type="string", length=100, nullable=false)
     * @Assert\NotBlank()
     */
    private $lieuramassage;
    /**
     * @var string
     *
     * @ORM\Column(name="nomresponsable", type="string", length=100, nullable=true)
     */
    private $nomresponsable;
    /**
     * @var string
     *@Assert\Regex("/[\d\-\ ]+/")
     *@Assert\Length(min = "10")
     * @ORM\Column(name="telresponsable", type="string", length=10, nullable=true)
     */
    private $telresponsable;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur du champs doit être un entier.")
     * @ORM\Column(name="nbrecolis", type="integer", nullable=true)
     */
    private $nbrecolis;

    /**
     * @var string
     *
     * @ORM\Column(name="naturemarchandise", type="string", length=255, nullable=true)
     */
    private $naturemarchandise;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="datelivraison", type="datetime", nullable=false)
     */
    private $datelivraison;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="lieulivraison", type="string", length=100, nullable=false)
     */
    private $lieulivraison;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Type(type="float", message="La valeur du champs doit être un nombre.")
     * @ORM\Column(name="montantfacture", type="float", precision=2, scale=0, nullable=false)
     */
    private $montantfacture;

    /**
     * @var integer
     * @Assert\Type(type="numeric", message="La valeur du champs doit être un nombre.")
     * @ORM\Column(name="remise", type="float",precision=4, nullable=true)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="motifremise", type="string", length=100, nullable=true)
     */
    private $motifremise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="montantregle", type="boolean", nullable=true)
     */
    private $montantregle;

    /**
     * @var string
     *
     * @ORM\Column(name="nombnq", type="string", length=100, nullable=true)
     */
    private $nombnq;

    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur du champs doit être un entier.")
     * @ORM\Column(name="numcheque", type="string", length=100, nullable=true)
     */
    private $numcheque;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=100, nullable=true)
     */
    private $remarques;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="confRecDocClient",  type="boolean", nullable=true)
     */
    private $confRecDocClient;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confRecDocCtm", type="boolean", nullable=true)
     */
    private $confRecDocCtm;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100, nullable=true)
     */
    private $champssupp2;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp3", type="string", length=100, nullable=true)
     */
    private $champssupp3;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp4", type="string", length=100, nullable=true)
     */
    private $champssupp4;



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
     * Set ecc
     *
     * @param boolean $ecc
     * @return MissionAffretement
     */
    public function setEcc($ecc)
    {
        $this->ecc = $ecc;
    
        return $this;
    }

    /**
     * Get ecc
     *
     * @return boolean 
     */
    public function getEcc()
    {
        return $this->ecc;
    }

    /**
     * Set ect
     *
     * @param boolean $ect
     * @return MissionAffretement
     */
    public function setEct($ect)
    {
        $this->ect = $ect;
    
        return $this;
    }

    /**
     * Get ect
     *
     * @return boolean 
     */
    public function getEct()
    {
        return $this->ect;
    }

    /**
     * Set ebl
     *
     * @param boolean $ebl
     * @return MissionAffretement
     */
    public function setEbl($ebl)
    {
        $this->ebl = $ebl;
    
        return $this;
    }

    /**
     * Get ebl
     *
     * @return boolean
     *  
     */
    public function getEbl()
    {
        return $this->ebl;
    }

    /**
     * Set espece
     *
     * @param boolean $espece
     * @return MissionAffretement
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;
    
        return $this;
    }

    /**
     * Get espece
     *
     * @return boolean 
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set autredoc
     *
     * @param string $autredoc
     * @return MissionAffretement
     */
    public function setAutredoc($autredoc)
    {
        $this->autredoc = $autredoc;
    
        return $this;
    }

    /**
     * Get autredoc
     *
     * @return string 
     */
    public function getAutredoc()
    {
        return $this->autredoc;
    }

    /**
     * Set valdeclassurance
     *
     * @param float $valdeclassurance
     * @return MissionAffretement
     */
    public function setValdeclassurance($valdeclassurance)
    {
        $this->valdeclassurance = $valdeclassurance;
    
        return $this;
    }

    /**
     * Get valdeclassurance
     *
     * @return float 
     */
    public function getValdeclassurance()
    {
        return $this->valdeclassurance;
    }

    /**
     * Set bonlivraison
     *
     * @param string $bonlivraison
     * @return MissionAffretement
     */
    public function setBonlivraison($bonlivraison)
    {
        $this->bonlivraison = $bonlivraison;
    
        return $this;
    }

    /**
     * Get bonlivraison
     *
     * @return string 
     */
    public function getBonlivraison()
    {
        return $this->bonlivraison;
    }

    /**
     * Set numexpedition
     *
     * @param string $numexpedition
     * @return MissionAffretement
     */
    public function setNumexpedition($numexpedition)
    {
        $this->numexpedition = $numexpedition;
    
        return $this;
    }

    /**
     * Get numexpedition
     *
     * @return string 
     */
    public function getNumexpedition()
    {
        return $this->numexpedition;
    }

    /**
     * Set dateramassage
     *
     * @param \DateTime $dateramassage
     * @return MissionAffretement
     */
    public function setDateramassage($dateramassage)
    {
        $this->dateramassage = $dateramassage;
    
        return $this;
    }

    /**
     * Get dateramassage
     *
     * @return \DateTime 
     */
    public function getDateramassage()
    {
        return $this->dateramassage;
    }

    /**
     * Set lieuramassage
     *
     * @param string $lieuramassage
     * @return MissionAffretement
     */
    public function setLieuramassage($lieuramassage)
    {
        $this->lieuramassage = $lieuramassage;
    
        return $this;
    }

    /**
     * Get lieuramassage
     *
     * @return string 
     */
    public function getLieuramassage()
    {
        return $this->lieuramassage;
    }

    /**
     * Set nbrecolis
     *
     * @param integer $nbrecolis
     * @return MissionAffretement
     */
    public function setNbrecolis($nbrecolis)
    {
        $this->nbrecolis = $nbrecolis;
    
        return $this;
    }

    /**
     * Get nbrecolis
     *
     * @return integer 
     */
    public function getNbrecolis()
    {
        return $this->nbrecolis;
    }

    /**
     * Set naturemarchandise
     *
     * @param string $naturemarchandise
     * @return MissionAffretement
     */
    public function setNaturemarchandise($naturemarchandise)
    {
        $this->naturemarchandise = $naturemarchandise;
    
        return $this;
    }

    /**
     * Get naturemarchandise
     *
     * @return string 
     */
    public function getNaturemarchandise()
    {
        return $this->naturemarchandise;
    }

    /**
     * Set datelivraison
     *
     * @param \DateTime $datelivraison
     * @return MissionAffretement
     */
    public function setDatelivraison($datelivraison)
    {
        $this->datelivraison = $datelivraison;
    
        return $this;
    }

    /**
     * Get datelivraison
     *
     * @return \DateTime 
     */
    public function getDatelivraison()
    {
        return $this->datelivraison;
    }

    /**
     * Set lieulivraison
     *
     * @param string $lieulivraison
     * @return MissionAffretement
     */
    public function setLieulivraison($lieulivraison)
    {
        $this->lieulivraison = $lieulivraison;
    
        return $this;
    }

    /**
     * Get lieulivraison
     *
     * @return string 
     */
    public function getLieulivraison()
    {
        return $this->lieulivraison;
    }

    /**
     * Set montantfacture
     *
     * @param float $montantfacture
     * @return MissionAffretement
     */
    public function setMontantfacture($montantfacture)
    {
        $this->montantfacture = $montantfacture;
    
        return $this;
    }

    /**
     * Get montantfacture
     *
     * @return float 
     */
    public function getMontantfacture()
    {
        return $this->montantfacture;
    }

    /**
     * Set remise
     *
     * @param float $remise
     * @return MissionAffretement
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;
    
        return $this;
    }

    /**
     * Get remise
     *
     * @return float 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set motifremise
     *
     * @param string $motifremise
     * @return MissionAffretement
     */
    public function setMotifremise($motifremise)
    {
        $this->motifremise = $motifremise;
    
        return $this;
    }

    /**
     * Get motifremise
     *
     * @return string 
     */
    public function getMotifremise()
    {
        return $this->motifremise;
    }

    /**
     * Set montantregle
     *
     * @param boolean $montantregle
     * @return MissionAffretement
     */
    public function setMontantregle($montantregle)
    {
        $this->montantregle = $montantregle;
    
        return $this;
    }

    /**
     * Get montantregle
     *
     * @return boolean 
     */
    public function getMontantregle()
    {
        return $this->montantregle;
    }

    /**
     * Set nombnq
     *
     * @param string $nombnq
     * @return MissionAffretement
     */
    public function setNombnq($nombnq)
    {
        $this->nombnq = $nombnq;
    
        return $this;
    }

    /**
     * Get nombnq
     *
     * @return string 
     */
    public function getNombnq()
    {
        return $this->nombnq;
    }

    /**
     * Set numcheque
     *
     * @param string $numcheque
     * @return MissionAffretement
     */
    public function setNumcheque($numcheque)
    {
        $this->numcheque = $numcheque;
    
        return $this;
    }

    /**
     * Get numcheque
     *
     * @return string 
     */
    public function getNumcheque()
    {
        return $this->numcheque;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return MissionAffretement
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;
    
        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set champssupp2
     *
     * @param string $champssupp2
     * @return MissionAffretement
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
     * Set champssupp3
     *
     * @param string $champssupp3
     * @return MissionAffretement
     */
    public function setChampssupp3($champssupp3)
    {
        $this->champssupp3 = $champssupp3;
    
        return $this;
    }

    /**
     * Get champssupp3
     *
     * @return string 
     */
    public function getChampssupp3()
    {
        return $this->champssupp3;
    }

    /**
     * Set champssupp4
     *
     * @param string $champssupp4
     * @return MissionAffretement
     */
    public function setChampssupp4($champssupp4)
    {
        $this->champssupp4 = $champssupp4;
    
        return $this;
    }

    /**
     * Get champssupp4
     *
     * @return string 
     */
    public function getChampssupp4()
    {
        return $this->champssupp4;
    }

    
   
    /**
     * Set client
     *
     * @param \Fdr\AdminBundle\Entity\Client $client
     * @return MissionAffretement
     */
    public function setClient(\Fdr\AdminBundle\Entity\Client $client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return \Fdr\AdminBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    
    public function __toString()
    {
        return "AFF-".$this->id;
    }

    /**
     * Set confRecDocClient
     *
     * @param boolean $confRecDocClient
     * @return MissionAffretement
     */
    public function setConfRecDocClient($confRecDocClient)
    {
        $this->confRecDocClient = $confRecDocClient;
    
        return $this;
    }

    /**
     * Get confRecDocClient
     *
     * @return boolean 
     */
    public function getConfRecDocClient()
    {
        return $this->confRecDocClient;
    }

    /**
     * Set confRecDocCtm
     *
     * @param boolean $confRecDocCtm
     * @return MissionAffretement
     */
    public function setConfRecDocCtm($confRecDocCtm)
    {
        $this->confRecDocCtm = $confRecDocCtm;
    
        return $this;
    }

    /**
     * Get confRecDocCtm
     *
     * @return boolean 
     */
    public function getConfRecDocCtm()
    {
        return $this->confRecDocCtm;
    }

    /**
     * Set nomresponsable
     *
     * @param string $nomresponsable
     * @return MissionAffretement
     */
    public function setNomresponsable($nomresponsable)
    {
        $this->nomresponsable = $nomresponsable;
    
        return $this;
    }

    /**
     * Get nomresponsable
     *
     * @return string 
     */
    public function getNomresponsable()
    {
        return $this->nomresponsable;
    }

    /**
     * Set telresponsable
     *
     * @param string $telresponsable
     * @return MissionAffretement
     */
    public function setTelresponsable($telresponsable)
    {
        $this->telresponsable = $telresponsable;
    
        return $this;
    }

    /**
     * Get telresponsable
     *
     * @return string 
     */
    public function getTelresponsable()
    {
        return $this->telresponsable;
    }

    /**
     * Set dateGeneree
     *
     * @param \DateTime $dateGeneree
     * @return MissionAffretement
     */
    public function setDateGeneree($dateGeneree)
    {
        $this->dateGeneree = $dateGeneree;

        return $this;
    }

    /**
     * Get dateGeneree
     *
     * @return \DateTime 
     */
    public function getDateGeneree()
    {
        return $this->dateGeneree;
    }
}
