<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use \Fdr\AdminBundle\Controller\FeuilleDeRouteController;
/**
 * FeuilleDeRoute
 *
 * @ORM\Table(name="feuillederoute")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\FeuilleDeRouteRepository")
 */
class FeuilleDeRoute
{
    /**
   * @ORM\OneToOne(targetEntity="MissionAffretement")
   * @ORM\JoinColumn(nullable=true)
   */
 private $missionAffretement=null;
    /**
   * @ORM\ManyToOne(targetEntity="Vehicule",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=false)
   */
  private $vehicule;
  
   /**
   *
   * @ORM\ManyToOne(targetEntity="TypePrestation",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=true)
   */
  private $typePrestation;
 
  
  /**
   * @ORM\ManyToMany(targetEntity="Secteur",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=true)
   */
  private $secteurs;
  
  /**
   * @ORM\OneToMany(targetEntity="BonCarburantHuile",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   */
    private $bonCarburantHuiles;
  
    /**
   * @ORM\ManyToMany(targetEntity="Manutentionnaire",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=true)
   */
    private $manutentionnaires;
   
    /**
    * @ORM\ManyToOne(targetEntity="Chauffeur", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
    */
    private $chauffeur1;
    
    /**
    * @ORM\ManyToOne(targetEntity="Chauffeur", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
    */
    private $chauffeur2;
    /**
   * @ORM\ManyToMany(targetEntity="Utilisateur",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   */
    private $utilisateurs;
    
    /**
    * @ORM\ManyToOne(targetEntity="Filiale", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
    */
    private $filiale;
    
    /**
     * @ORM\ManyToOne(targetEntity="Depot", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
    */
    private $depot;
    
     /**
   * @ORM\OneToMany(targetEntity="Modification",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=true)
   */
    private $modifications;
    /**
   * @ORM\OneToMany(targetEntity="ClientFdrV",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=true)
   */
    private $clientFdrVs;
    /**
   * @ORM\OneToMany(targetEntity="ClientFdrF",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=true)
   */
    private $clientFdrFs;
    /**
   * @ORM\OneToMany(targetEntity="Peage",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=true)
   */
    private $peages;
    
    public function __construct() {
        $this->modifications = new ArrayCollection() ;
        $this->peages = new ArrayCollection() ;
        $this->bonCarburantHuiles = new ArrayCollection() ;
        $this->manutentionnaires = new ArrayCollection() ;
        $this->utilisateurs = new ArrayCollection() ;
        $this->clientFdrVs = new ArrayCollection() ;
        $this->clientFdrFs = new ArrayCollection() ;
        $this->secteurs = new ArrayCollection() ;
        $this->dateFinMission= new \DateTime();
        $this->dateDebutMission= new \DateTime();
        $this->dateGeneree = new \Datetime();       
        
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateGeneree", type="datetime")
     */
    private $dateGeneree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutMission", type="datetime")
     */
    private $dateDebutMission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinMission", type="datetime")
     */
    private $dateFinMission;
    /**
     * @var integer
     *
     * @ORM\Column(name="nombreManutention", type="integer", nullable=true)
     */
    private $nombreManutention;
    /**
     * @var integer
     *
     * @ORM\Column(name="nombreManutentionChauf1", type="integer", nullable=true)
     */
    private $nombreManutentionChauf1;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreManutentionChauf2", type="integer", nullable=true)
     */
    private $nombreManutentionChauf2;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManExterne1", type="string", length=100, nullable=true)
     */
    private $nomManExterne1;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManExterne2", type="string", length=100, nullable=true)
     */
    private $nomManExterne2;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteurReel", type="bigint")
     */
    private $compteurReel;

    /**
     * @var integer
     * @ORM\Column(name="compteurFinal", type="bigint", nullable=true)
     */
    private $compteurFinal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cloture", type="boolean", nullable=true)
     */
    private $cloture;

    /**
     * @var integer
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcDiffKm", type="integer", nullable=true)
     */
    private $calcDiffKm;

    /**
     * @var integer
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcKmParcourus", type="integer", nullable=true)
     */
    private $calcKmParcourus;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbRepas", type="integer", nullable=true)
     */
    private $calcNbRepas;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbPetitDej", type="integer", nullable=true)
     */
    private $calcNbPetitDej;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbDecoucher", type="integer", nullable=true)
     */
    private $calcNbDecoucher;

    /**
     * @var float
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcQuantite", type="float", nullable=true)
     */
    private $calcQuantite;

    /**
     * @var float
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcMontantCarburant", type="float", nullable=true)
     */
    private $calcMontantCarburant;

    /**
     * @var float
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcMontantPeage", type="float", nullable=true)
     */
    private $calcMontantPeage;

    /**
     * @var float
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbJours", type="float", nullable=true)
     */
    private $calcNbJours;

    /**
     * @var boolean
     * @ORM\Column(name="primeRemorque", type="boolean", nullable=true)
     */
    private $primeRemorque;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text", nullable=true)
     */
    private $remarques;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="agentSaisie", type="string", length=100, nullable=true)
     */
    private $agentSaisie;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="operationnel", type="string", length=100, nullable=true)
     */
    private $operationnel;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="surveillant", type="string", length=100, nullable=true)
     */
    private $surveillant;

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
     * @var string
     *
     * @ORM\Column(name="champSup3", type="string", length=100, nullable=true)
     */
    private $champSup3;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup4", type="string", length=100, nullable=true)
     */
    private $champSup4;


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
     * Set dateGeneree
     *
     * @param \DateTime $dateGeneree
     * @return FeuilleDeRoute
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

    /**
     * Set dateDebutMission
     *
     * @param \DateTime $dateDebutMission
     * @return FeuilleDeRoute
     */
    public function setDateDebutMission($dateDebutMission)
    {
        $this->dateDebutMission = $dateDebutMission;
    
        return $this;
    }

    /**
     * Get dateDebutMission
     *
     * @return \DateTime 
     */
    public function getDateDebutMission()
    {
        return $this->dateDebutMission;
    }

    /**
     * Set dateFinMission
     *
     * @param \DateTime $dateFinMission
     * @return FeuilleDeRoute
     */
    public function setDateFinMission($dateFinMission)
    {
        $this->dateFinMission = $dateFinMission;
    
        return $this;
    }

    /**
     * Get dateFinMission
     *
     * @return \DateTime 
     */
    public function getDateFinMission()
    {
        return $this->dateFinMission;
    }

    /**
     * Set nombreManutention
     *
     * @param integer $nombreManutention
     * @return FeuilleDeRoute
     */
    public function setNombreManutention($nombreManutention)
    {
        $this->nombreManutention = $nombreManutention;
    
        return $this;
    }

    /**
     * Get nombreManutention
     *
     * @return integer 
     */
    public function getNombreManutention()
    {
        return $this->nombreManutention;
    }

    /**
     * Set nombreManutentionChauf1
     *
     * @param integer $nombreManutentionChauf1
     * @return FeuilleDeRoute
     */
    public function setNombreManutentionChauf1($nombreManutentionChauf1)
    {
        $this->nombreManutentionChauf1 = $nombreManutentionChauf1;
    
        return $this;
    }

    /**
     * Get nombreManutentionChauf1
     *
     * @return integer 
     */
    public function getNombreManutentionChauf1()
    {
        return $this->nombreManutentionChauf1;
    }

    /**
     * Set nombreManutentionChauf2
     *
     * @param integer $nombreManutentionChauf2
     * @return FeuilleDeRoute
     */
    public function setNombreManutentionChauf2($nombreManutentionChauf2)
    {
        $this->nombreManutentionChauf2 = $nombreManutentionChauf2;
    
        return $this;
    }

    /**
     * Get nombreManutentionChauf2
     *
     * @return integer 
     */
    public function getNombreManutentionChauf2()
    {
        return $this->nombreManutentionChauf2;
    }

    /**
     * Set nomManExterne1
     *
     * @param string $nomManExterne1
     * @return FeuilleDeRoute
     */
    public function setNomManExterne1($nomManExterne1)
    {
        $this->nomManExterne1 = $nomManExterne1;
    
        return $this;
    }

    /**
     * Get nomManExterne1
     *
     * @return string 
     */
    public function getNomManExterne1()
    {
        return $this->nomManExterne1;
    }

    /**
     * Set nomManExterne2
     *
     * @param string $nomManExterne2
     * @return FeuilleDeRoute
     */
    public function setNomManExterne2($nomManExterne2)
    {
        $this->nomManExterne2 = $nomManExterne2;
    
        return $this;
    }

    /**
     * Get nomManExterne2
     *
     * @return string 
     */
    public function getNomManExterne2()
    {
        return $this->nomManExterne2;
    }

    /**
     * Set compteurReel
     *
     * @param integer $compteurReel
     * @return FeuilleDeRoute
     */
    public function setCompteurReel($compteurReel)
    {
        $this->compteurReel = $compteurReel;
    
        return $this;
    }

    /**
     * Get compteurReel
     *
     * @return integer 
     */
    public function getCompteurReel()
    {
        return $this->compteurReel;
    }

    /**
     * Set compteurFinal
     *
     * @param integer $compteurFinal
     * @return FeuilleDeRoute
     */
    public function setCompteurFinal($compteurFinal)
    {
        $this->compteurFinal = $compteurFinal;
    
        return $this;
    }

    /**
     * Get compteurFinal
     *
     * @return integer 
     */
    public function getCompteurFinal()
    {
        return $this->compteurFinal;
    }

    /**
     * Set cloture
     *
     * @param boolean $cloture
     * @return FeuilleDeRoute
     */
    public function setCloture($cloture)
    {
        $this->cloture = $cloture;
    
        return $this;
    }

    /**
     * Get cloture
     *
     * @return boolean 
     */
    public function getCloture()
    {
        return $this->cloture;
    }

    /**
     * Set calcDiffKm
     *
     * @param integer $calcDiffKm
     * @return FeuilleDeRoute
     */
    public function setCalcDiffKm($calcDiffKm)
    {
        $this->calcDiffKm = $calcDiffKm;
    
        return $this;
    }

    /**
     * Get calcDiffKm
     *
     * @return integer 
     */
    public function getCalcDiffKm()
    {
        return $this->calcDiffKm;
    }

    /**
     * Set calcKmParcourus
     *
     * @param integer $calcKmParcourus
     * @return FeuilleDeRoute
     */
    public function setCalcKmParcourus($calcKmParcourus)
    {
        $this->calcKmParcourus = $calcKmParcourus;
    
        return $this;
    }

    /**
     * Get calcKmParcourus
     *
     * @return integer 
     */
    public function getCalcKmParcourus()
    {
        return $this->calcKmParcourus;
    }

    /**
     * Set calcNbRepas
     *
     * @param integer $calcNbRepas
     * @return FeuilleDeRoute
     */
    public function setCalcNbRepas($calcNbRepas)
    {
        $this->calcNbRepas = $calcNbRepas;
    
        return $this;
    }

    /**
     * Get calcNbRepas
     *
     * @return integer 
     */
    public function getCalcNbRepas()
    {
        return $this->calcNbRepas;
    }

    /**
     * Set calcNbPetitDej
     *
     * @param integer $calcNbPetitDej
     * @return FeuilleDeRoute
     */
    public function setCalcNbPetitDej($calcNbPetitDej)
    {
        $this->calcNbPetitDej = $calcNbPetitDej;
    
        return $this;
    }

    /**
     * Get calcNbPetitDej
     *
     * @return integer 
     */
    public function getCalcNbPetitDej()
    {
        return $this->calcNbPetitDej;
    }

    /**
     * Set calcNbDecoucher
     *
     * @param integer $calcNbDecoucher
     * @return FeuilleDeRoute
     */
    public function setCalcNbDecoucher($calcNbDecoucher)
    {
        $this->calcNbDecoucher = $calcNbDecoucher;
    
        return $this;
    }

    /**
     * Get calcNbDecoucher
     *
     * @return integer 
     */
    public function getCalcNbDecoucher()
    {
        return $this->calcNbDecoucher;
    }

    /**
     * Set calcQuantite
     *
     * @param float $calcQuantite
     * @return FeuilleDeRoute
     */
    public function setCalcQuantite($calcQuantite)
    {
        $this->calcQuantite = $calcQuantite;
    
        return $this;
    }

    /**
     * Get calcQuantite
     *
     * @return float 
     */
    public function getCalcQuantite()
    {
        return $this->calcQuantite;
    }

    /**
     * Set calcMontantCarburant
     *
     * @param float $calcMontantCarburant
     * @return FeuilleDeRoute
     */
    public function setCalcMontantCarburant($calcMontantCarburant)
    {
        $this->calcMontantCarburant = $calcMontantCarburant;
    
        return $this;
    }

    /**
     * Get calcMontantCarburant
     *
     * @return float 
     */
    public function getCalcMontantCarburant()
    {
        return $this->calcMontantCarburant;
    }

    /**
     * Set calcMontantPeage
     *
     * @param float $calcMontantPeage
     * @return FeuilleDeRoute
     */
    public function setCalcMontantPeage($calcMontantPeage)
    {
        $this->calcMontantPeage = $calcMontantPeage;
    
        return $this;
    }

    /**
     * Get calcMontantPeage
     *
     * @return float 
     */
    public function getCalcMontantPeage()
    {
        return $this->calcMontantPeage;
    }

    /**
     * Set calcNbJours
     *
     * @param float $calcNbJours
     * @return FeuilleDeRoute
     */
    public function setCalcNbJours($calcNbJours)
    {
        $this->calcNbJours = $calcNbJours;
    
        return $this;
    }

    /**
     * Get calcNbJours
     *
     * @return float 
     */
    public function getCalcNbJours()
    {
        return $this->calcNbJours;
    }

    /**
     * Set primeRemorque
     *
     * @param boolean $primeRemorque
     * @return FeuilleDeRoute
     */
    public function setPrimeRemorque($primeRemorque)
    {
        $this->primeRemorque = $primeRemorque;
    
        return $this;
    }

    /**
     * Get primeRemorque
     *
     * @return boolean 
     */
    public function getPrimeRemorque()
    {
        return $this->primeRemorque;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return FeuilleDeRoute
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
     * Set agentSaisie
     *
     * @param string $agentSaisie
     * @return FeuilleDeRoute
     */
    public function setAgentSaisie($agentSaisie)
    {
        $this->agentSaisie = $agentSaisie;
    
        return $this;
    }

    /**
     * Get agentSaisie
     *
     * @return string 
     */
    public function getAgentSaisie()
    {
        return $this->agentSaisie;
    }

    /**
     * Set operationnel
     *
     * @param string $operationnel
     * @return FeuilleDeRoute
     */
    public function setOperationnel($operationnel)
    {
        $this->operationnel = $operationnel;
    
        return $this;
    }

    /**
     * Get operationnel
     *
     * @return string 
     */
    public function getOperationnel()
    {
        return $this->operationnel;
    }

    /**
     * Set surveillant
     *
     * @param string $surveillant
     * @return FeuilleDeRoute
     */
    public function setSurveillant($surveillant)
    {
        $this->surveillant = $surveillant;
    
        return $this;
    }

    /**
     * Get surveillant
     *
     * @return string 
     */
    public function getSurveillant()
    {
        return $this->surveillant;
    }

    /**
     * Set champSup1
     *
     * @param string $champSup1
     * @return FeuilleDeRoute
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
     * @return FeuilleDeRoute
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
     * Set champSup3
     *
     * @param string $champSup3
     * @return FeuilleDeRoute
     */
    public function setChampSup3($champSup3)
    {
        $this->champSup3 = $champSup3;
    
        return $this;
    }

    /**
     * Get champSup3
     *
     * @return string 
     */
    public function getChampSup3()
    {
        return $this->champSup3;
    }

    /**
     * Set champSup4
     *
     * @param string $champSup4
     * @return FeuilleDeRoute
     */
    public function setChampSup4($champSup4)
    {
        $this->champSup4 = $champSup4;
    
        return $this;
    }

    /**
     * Get champSup4
     *
     * @return string 
     */
    public function getChampSup4()
    {
        return $this->champSup4;
    }

    /**
     * Add modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     * @return FeuilleDeRoute
     */
    public function addModification(\Fdr\AdminBundle\Entity\Modification $modifications)
    {
        $this->modifications[] = $modifications;
    
        return $this;
    }

    /**
     * Remove modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     */
    public function removeModification(\Fdr\AdminBundle\Entity\Modification $modifications)
    {
        $this->modifications->removeElement($modifications);
    }

    /**
     * Get modifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModifications()
    {
        return $this->modifications;
    }

    /**
     * Add peages
     *
     * @param \Fdr\AdminBundle\Entity\Peage $peages
     * @return FeuilleDeRoute
     */
    public function addPeage(\Fdr\AdminBundle\Entity\Peage $peages)
    {
        $this->peages[] = $peages;
    
        return $this;
    }

    /**
     * Remove peages
     *
     * @param \Fdr\AdminBundle\Entity\Peage $peages
     */
    public function removePeage(\Fdr\AdminBundle\Entity\Peage $peages)
    {
        $this->peages->removeElement($peages);
    }

    /**
     * Get peages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeages()
    {
        return $this->peages;
    }

    /**
     * Set filiale
     *
     * @param \Fdr\AdminBundle\Entity\Filiale $filiale
     * @return FeuilleDeRoute
     */
    public function setFiliale(\Fdr\AdminBundle\Entity\Filiale $filiale)
    {
        $this->filiale = $filiale;
    
        return $this;
    }

    /**
     * Get c
     *
     * @return \Fdr\AdminBundle\Entity\Filiale 
     */
    public function getFiliale()
    {
        return $this->filiale;
    }

    /**
     * Set vehicule
     *
     * @param \Fdr\AdminBundle\Entity\Vehicule $vehicule
     * @return FeuilleDeRoute
     */
    public function setVehicule(\Fdr\AdminBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicule = $vehicule;
    
        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \Fdr\AdminBundle\Entity\Vehicule 
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    
    /**
     * Add bonCarburantHuiles
     *
     * @param \Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles
     * @return FeuilleDeRoute
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

    /**
     * Add manutentionnaires
     *
     * @param \Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires
     * @return FeuilleDeRoute
     */
    public function addManutentionnaire(\Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires)
    {
        $this->manutentionnaires[] = $manutentionnaires;
    
        return $this;
    }

    /**
     * Remove manutentionnaires
     *
     * @param \Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires
     */
    public function removeManutentionnaire(\Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires)
    {
        $this->manutentionnaires->removeElement($manutentionnaires);
    }

    /**
     * Get manutentionnaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getManutentionnaires()
    {
        return $this->manutentionnaires;
    }

    
    /**
     * Add utilisateurs
     *
     * @param \Fdr\AdminBundle\Entity\Utilisateur $utilisateurs
     * @return FeuilleDeRoute
     */
    public function addUtilisateur(\Fdr\AdminBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;
    
        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \Fdr\AdminBundle\Entity\Utilisateur $utilisateurs
     */
    public function removeUtilisateur(\Fdr\AdminBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * Add clientFdrVs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs
     * @return FeuilleDeRoute
     */
    public function addClientFdrV(\Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs)
    {
        $this->clientFdrVs[] = $clientFdrVs;
    
        return $this;
    }

    /**
     * Remove clientFdrVs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs
     */
    public function removeClientFdrV(\Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs)
    {
        $this->clientFdrVs->removeElement($clientFdrVs);
    }

    /**
     * Get clientFdrVs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientFdrVs()
    {
        return $this->clientFdrVs;
    }
    
    public function __toString()
    {
        return "FDR-".$this->id;
    }

    /**
     * Set typePrestation
     *
     * @param \Fdr\AdminBundle\Entity\TypePrestation $typePrestation
     * @return FeuilleDeRoute
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
     * Add clientFdrFs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs
     * @return FeuilleDeRoute
     */
    public function addClientFdrF(\Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs)
    {
        $this->clientFdrFs[] = $clientFdrFs;
    
        return $this;
    }

    /**
     * Remove clientFdrFs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs
     */
    public function removeClientFdrF(\Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs)
    {
        $this->clientFdrFs->removeElement($clientFdrFs);
    }

    /**
     * Get clientFdrFs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientFdrFs()
    {
        return $this->clientFdrFs;
    }

    /**
     * Set missionAffretement
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretement
     * @return FeuilleDeRoute
     */
    public function setMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretement = null)
    {
        $this->missionAffretement = $missionAffretement;
    
        return $this;
    }

    /**
     * Get missionAffretement
     *
     * @return \Fdr\AdminBundle\Entity\MissionAffretement 
     */
    public function getMissionAffretement()
    {
        return $this->missionAffretement;
    }

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return FeuilleDeRoute
     */
    public function setDepot(\Fdr\AdminBundle\Entity\Depot $depot)
    {
        $this->depot = $depot;

        return $this;
    }

    /**
     * Get depot
     *
     * @return \Fdr\AdminBundle\Entity\Depot 
     */
    public function getDepot()
    {
        return $this->depot;
    }
    /**
     * Get client
     *
     *  @return \Doctrine\Common\Collections\Collection 
     */
    public function getClient()
    {
        $fCon=new FeuilleDeRouteController();
        return $fCon->clientsAction();
    }

    /**
     * Add secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     * @return FeuilleDeRoute
     */
    public function addSecteur(\Fdr\AdminBundle\Entity\Secteur $secteurs)
    {
        $this->secteurs[] = $secteurs;

        return $this;
    }

    /**
     * Remove secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     */
    public function removeSecteur(\Fdr\AdminBundle\Entity\Secteur $secteurs)
    {
        $this->secteurs->removeElement($secteurs);
    }

    /**
     * Get secteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecteurs()
    {
        return $this->secteurs;
    }

   

    /**
     * Set chauffeur1
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeur1
     * @return FeuilleDeRoute
     */
    public function setChauffeur1(\Fdr\AdminBundle\Entity\Chauffeur $chauffeur1)
    {
        $this->chauffeur1 = $chauffeur1;

        return $this;
    }

    /**
     * Get chauffeur1
     *
     * @return \Fdr\AdminBundle\Entity\Chauffeur 
     */
    public function getChauffeur1()
    {
        return $this->chauffeur1;
    }

    /**
     * Set chauffeur2
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeur2
     * @return FeuilleDeRoute
     */
    public function setChauffeur2(\Fdr\AdminBundle\Entity\Chauffeur $chauffeur2 = null)
    {
        $this->chauffeur2 = $chauffeur2;

        return $this;
    }

    /**
     * Get chauffeur2
     *
     * @return \Fdr\AdminBundle\Entity\Chauffeur 
     */
    public function getChauffeur2()
    {
        return $this->chauffeur2;
    }
}
