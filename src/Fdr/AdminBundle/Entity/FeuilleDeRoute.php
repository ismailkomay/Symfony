<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * FeuilleDeRoute
 *
 * @ORM\Table(name="feuillederoute")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\FeuilleDeRouteRepository")
 */
class FeuilleDeRoute
{
    /**
   * @ORM\ManyToOne(targetEntity="Vehicule",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=false)
   */
  private $vehicule;
  
   /**
   * @ORM\ManyToOne(targetEntity="Prestation",inversedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=false)
   */
  private $prestation;
  
  /**
   * @ORM\OneToMany(targetEntity="BonCarburantHuile",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=false)
   */
    private $bonCarburantHuiles;
  
    /**
   * @ORM\ManyToMany(targetEntity="Manutentionnaire",mappedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=true)
   */
    private $manutentionnaires;
    /**
   * @ORM\ManyToMany(targetEntity="Chauffeur",mappedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=false)
   */
    private $chauffeurs;
    /**
   * @ORM\ManyToMany(targetEntity="Utilisateur",mappedBy="feuilleDeRoutes")
   * @ORM\JoinColumn(nullable=false)
   */
    private $utilisateurs;
    
    /**
    * @ORM\ManyToOne(targetEntity="Depot", inversedBy="feuilleDeRoutes")
	* @ORM\JoinColumn(nullable=false)
    */
    private $depot;

     /**
   * @ORM\OneToMany(targetEntity="Modification",mappedBy="feuilleDeRoute")
   * @ORM\JoinColumn(nullable=true)
   */
    private $modifications;
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
        $this->chauffeurs = new ArrayCollection() ;
        $this->utilisateurs = new ArrayCollection() ;
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
     * @ORM\Column(name="nombreManutention", type="integer")
     */
    private $nombreManutention;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreManutentionChauf1", type="integer")
     */
    private $nombreManutentionChauf1;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreManutentionChauf2", type="integer")
     */
    private $nombreManutentionChauf2;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManExterne1", type="string", length=100)
     */
    private $nomManExterne1;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManExterne2", type="string", length=100)
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
     *
     * @ORM\Column(name="compteurFinal", type="bigint")
     */
    private $compteurFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="calcDiffKm", type="integer")
     */
    private $calcDiffKm;

    /**
     * @var integer
     *
     * @ORM\Column(name="calcKmParcourus", type="integer")
     */
    private $calcKmParcourus;

    /**
     * @var integer
     *
     * @ORM\Column(name="calcNbRepas", type="integer")
     */
    private $calcNbRepas;

    /**
     * @var integer
     *
     * @ORM\Column(name="calcNbPetitDej", type="integer")
     */
    private $calcNbPetitDej;

    /**
     * @var integer
     *
     * @ORM\Column(name="calcNbDecoucher", type="integer")
     */
    private $calcNbDecoucher;

    /**
     * @var float
     *
     * @ORM\Column(name="calcQuantite", type="float")
     */
    private $calcQuantite;

    /**
     * @var float
     *
     * @ORM\Column(name="calcMontantCarburant", type="float")
     */
    private $calcMontantCarburant;

    /**
     * @var float
     *
     * @ORM\Column(name="calcMontantPeage", type="float")
     */
    private $calcMontantPeage;

    /**
     * @var float
     *
     * @ORM\Column(name="calcNbJours", type="float")
     */
    private $calcNbJours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="primeRemorque", type="boolean")
     */
    private $primeRemorque;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text")
     */
    private $remarques;

    /**
     * @var string
     *
     * @ORM\Column(name="agentSaisie", type="string", length=100)
     */
    private $agentSaisie;

    /**
     * @var string
     *
     * @ORM\Column(name="operationnel", type="string", length=100)
     */
    private $operationnel;

    /**
     * @var string
     *
     * @ORM\Column(name="surveillant", type="string", length=100)
     */
    private $surveillant;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup1", type="string", length=100)
     */
    private $champSup1;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup2", type="string", length=100)
     */
    private $champSup2;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup3", type="string", length=100)
     */
    private $champSup3;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup4", type="string", length=100)
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
     * Set etat
     *
     * @param string $etat
     * @return FeuilleDeRoute
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
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
     * Set prestation
     *
     * @param \Fdr\AdminBundle\Entity\Prestation $prestation
     * @return FeuilleDeRoute
     */
    public function setPrestation(\Fdr\AdminBundle\Entity\Prestation $prestation)
    {
        $this->prestation = $prestation;
    
        return $this;
    }

    /**
     * Get prestation
     *
     * @return \Fdr\AdminBundle\Entity\Prestation 
     */
    public function getPrestation()
    {
        return $this->prestation;
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
     * Add chauffeurs
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeurs
     * @return FeuilleDeRoute
     */
    public function addChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeurs)
    {
        $this->chauffeurs[] = $chauffeurs;
    
        return $this;
    }

    /**
     * Remove chauffeurs
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeurs
     */
    public function removeChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeurs)
    {
        $this->chauffeurs->removeElement($chauffeurs);
    }

    /**
     * Get chauffeurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChauffeurs()
    {
        return $this->chauffeurs;
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
}
