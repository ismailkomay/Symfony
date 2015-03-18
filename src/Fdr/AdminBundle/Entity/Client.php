<?php

namespace Fdr\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Client
 * @UniqueEntity("email", * message ="Cet email existe déja.Veuillez choisir un autre")
 * @UniqueEntity("cin",  message ="Ce cin existe déja.")
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
   * @ORM\OneToMany(targetEntity="ClientFdrV",mappedBy="client")
   * @ORM\JoinColumn(nullable=true)
   */
    private $clientFdrVs;
    /**
   * @ORM\OneToMany(targetEntity="ClientFdrF",mappedBy="client")
   * @ORM\JoinColumn(nullable=true)
   */
    private $clientFdrFs;
    
     /**
   * @ORM\ManyToMany(targetEntity="Secteur",inversedBy="clients")
   * @ORM\JoinColumn(nullable=true)
   */
    private $secteurs;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->secteurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clientFdrVs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clientFdrFs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur {{ value }} n'est pas digit.")
     * @ORM\Column(name="tel", type="string", length=100, nullable=true)
     */
    private $tel;

    /**
     * @var string
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="cin", type="string", length=100, nullable=true, unique=true)
     */
    private $cin;

    /**
     * @var string
     * @Assert\Email()
     * @ORM\Column(name="email", type="string", length=100, nullable=true, unique=true)
     */
    private $email;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="fax", type="string", length=100, nullable=true)
     */
    private $fax;

    /**
     * @var string
     * @ORM\Column(name="nomentreprise", type="string", length=100, nullable=true)
     */
    private $nomentreprise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encompte", type="boolean", nullable=true)
     */
    private $encompte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientaffret", type="boolean", nullable=true)
     */
    private $clientaffret;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientramass", type="boolean", nullable=true)
     */
    private $clientramass;

    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur {{ value }} n'est pas digit.")
     * @ORM\Column(name="numcompte", type="string", length=100, nullable=true)
     */
    private $numcompte;

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
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Client
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Client
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     * @return Client
     */
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;
    
        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string 
     */
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }

    /**
     * Set encompte
     *
     * @param boolean $encompte
     * @return Client
     */
    public function setEncompte($encompte)
    {
        $this->encompte = $encompte;
    
        return $this;
    }

    /**
     * Get encompte
     *
     * @return boolean 
     */
    public function getEncompte()
    {
        return $this->encompte;
    }

    /**
     * Set clientaffret
     *
     * @param boolean $clientaffret
     * @return Client
     */
    public function setClientaffret($clientaffret)
    {
        $this->clientaffret = $clientaffret;
    
        return $this;
    }

    /**
     * Get clientaffret
     *
     * @return boolean 
     */
    public function getClientaffret()
    {
        return $this->clientaffret;
    }

    /**
     * Set clientramass
     *
     * @param boolean $clientramass
     * @return Client
     */
    public function setClientramass($clientramass)
    {
        $this->clientramass = $clientramass;
    
        return $this;
    }

    /**
     * Get clientramass
     *
     * @return boolean 
     */
    public function getClientramass()
    {
        return $this->clientramass;
    }

    /**
     * Set numcompte
     *
     * @param string $numcompte
     * @return Client
     */
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;
    
        return $this;
    }

    /**
     * Get numcompte
     *
     * @return string 
     */
    public function getNumcompte()
    {
        return $this->numcompte;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Client
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
     * @return Client
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
     * Add secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     * @return Client
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
     * Add clientFdrVs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs
     * @return Client
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
        $sortie = (empty($this->nom))?$this->nomentreprise:($this->nom." ".$this->prenom);
        $cnt = ($this->encompte)?"*/":"";
        return $cnt.$sortie;
    }
}
