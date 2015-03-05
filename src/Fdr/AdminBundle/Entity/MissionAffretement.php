<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Missionaffretement
 *
 * @ORM\Table(name="missionaffretement")
 * @ORM\Entity
 */
class MissionAffretement
{
    /**
   * @ORM\OneToOne(targetEntity="FeuilleDeRoute", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
  private $feuilleDeRoute;
  
  /**
   * @ORM\ManyToOne(targetEntity="Itineraire",inversedBy="missionAffretements")
   * @ORM\JoinColumn(nullable=false)
   */
  private $itineraire;
  /**
   * @ORM\ManyToOne(targetEntity="Client")
   * @ORM\JoinColumn(nullable=false)
   */
  private $client;
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
     * @ORM\Column(name="ecc", type="string", length=10, nullable=false)
     */
    private $ecc;

    /**
     * @var string
     *
     * @ORM\Column(name="ect", type="string", length=10, nullable=false)
     */
    private $ect;

    /**
     * @var string
     *
     * @ORM\Column(name="ebl", type="string", length=10, nullable=false)
     */
    private $ebl;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=10, nullable=false)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="autredoc", type="string", length=10, nullable=false)
     */
    private $autredoc;

    /**
     * @var float
     *
     * @ORM\Column(name="valdeclassurance", type="float", precision=10, scale=0, nullable=false)
     */
    private $valdeclassurance;

    /**
     * @var string
     *
     * @ORM\Column(name="bonlivraison", type="string", length=100, nullable=false)
     */
    private $bonlivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="numexpedition", type="string", length=100, nullable=false)
     */
    private $numexpedition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateramassage", type="datetime", nullable=false)
     */
    private $dateramassage;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuramassage", type="string", length=100, nullable=false)
     */
    private $lieuramassage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrecolis", type="integer", nullable=false)
     */
    private $nbrecolis;

    /**
     * @var string
     *
     * @ORM\Column(name="naturemarchandise", type="string", length=255, nullable=false)
     */
    private $naturemarchandise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datelivraison", type="datetime", nullable=false)
     */
    private $datelivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="lieulivraison", type="string", length=100, nullable=false)
     */
    private $lieulivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="montantfacture", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="remise", type="integer", nullable=false)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="motifremise", type="string", length=100, nullable=false)
     */
    private $motifremise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="montantregle", type="boolean", nullable=false)
     */
    private $montantregle;

    /**
     * @var string
     *
     * @ORM\Column(name="nombnq", type="string", length=100, nullable=false)
     */
    private $nombnq;

    /**
     * @var string
     *
     * @ORM\Column(name="numcheque", type="string", length=100, nullable=false)
     */
    private $numcheque;

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
     * @var string
     *
     * @ORM\Column(name="champssupp3", type="string", length=100, nullable=false)
     */
    private $champssupp3;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp4", type="string", length=100, nullable=false)
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
     * @param string $ecc
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
     * @return string 
     */
    public function getEcc()
    {
        return $this->ecc;
    }

    /**
     * Set ect
     *
     * @param string $ect
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
     * @return string 
     */
    public function getEct()
    {
        return $this->ect;
    }

    /**
     * Set ebl
     *
     * @param string $ebl
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
     * @return string 
     */
    public function getEbl()
    {
        return $this->ebl;
    }

    /**
     * Set espece
     *
     * @param string $espece
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
     * @return string 
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
     * @param integer $remise
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
     * @return integer 
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
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return MissionAffretement
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
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return MissionAffretement
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

    /**
     * Set itineraire
     *
     * @param \Fdr\AdminBundle\Entity\Itineraire $itineraire
     * @return MissionAffretement
     */
    public function setItineraire(\Fdr\AdminBundle\Entity\Itineraire $itineraire)
    {
        $this->itineraire = $itineraire;
    
        return $this;
    }

    /**
     * Get itineraire
     *
     * @return \Fdr\AdminBundle\Entity\Itineraire 
     */
    public function getItineraire()
    {
        return $this->itineraire;
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
}
