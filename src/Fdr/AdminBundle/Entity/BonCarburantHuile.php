<?php

namespace Fdr\AdminBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * BonCarburantHuile
 *
 * @ORM\Table(name="boncarburanthuile")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\BonCarburantHuileRepository")
 */
class BonCarburantHuile
{
    public function __construct() {
        $this->date = new \Datetime();   
    }
     /**
   * @ORM\ManyToOne(targetEntity="FeuilleDeRoute",inversedBy="bonCarburantHuiles")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   */
    private $feuilleDeRoute;
     /**
   * @ORM\ManyToOne(targetEntity="TypeConsommation",inversedBy="bonCarburantHuiles")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   */
  
    private $typeConsommation;
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
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="lieu", type="string", length=100, nullable=false)
     * @Assert\NotBlank()
     */
    private $lieu;
    /**
     * @var string
     * @ORM\Column(name="numcarte", type="string", length=100, nullable=false)
     * @Assert\NotBlank()
     */
    private $numCarte;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;

    /**
     * @var float
     * @Assert\NotBlank() 
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var integer
     * @Assert\NotBlank()      
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="compteur", type="bigint")
     */
    private $compteur;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup1", type="string", length=100, nullable=true)
     */
    private $champSup1;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup2", type="string", length=100,nullable=true)
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
     * Set lieu
     *
     * @param string $lieu
     * @return BonCarburantHuile
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return BonCarburantHuile
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set quantite
     *
     * @param float $quantite
     * @return BonCarburantHuile
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return float 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return BonCarburantHuile
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
     * Set compteur
     *
     * @param integer $compteur
     * @return BonCarburantHuile
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
     * Set champSup1
     *
     * @param string $champSup1
     * @return BonCarburantHuile
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
     * @return BonCarburantHuile
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
     * Set typeConsommation
     *
     * @param \Fdr\AdminBundle\Entity\TypeConsommation $typeConsommation
     * @return BonCarburantHuile
     */
    public function setTypeConsommation(\Fdr\AdminBundle\Entity\TypeConsommation $typeConsommation)
    {
        $this->typeConsommation = $typeConsommation;
    
        return $this;
    }

    /**
     * Get typeConsommation
     *
     * @return \Fdr\AdminBundle\Entity\TypeConsommation 
     */
    public function getTypeConsommation()
    {
        return $this->typeConsommation;
    }

    /**
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return BonCarburantHuile
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
        return $this->id;
    }

    /**
     * Set numCarte
     *
     * @param string $numCarte
     * @return BonCarburantHuile
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
}
