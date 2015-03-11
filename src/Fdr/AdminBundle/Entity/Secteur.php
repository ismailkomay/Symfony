<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Secteur
 * @UniqueEntity("libelle",  message ="Cette libelle existe déja.Veuillez choisir une autre")
 * @UniqueEntity("code",  message ="Ce code existe déja.Veuillez choisir une autre")
 * @ORM\Table(name="secteur")
 * @ORM\Entity
 */
class Secteur
{
    /**
   * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="secteur")
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
    /**
   * @ORM\ManyToMany(targetEntity="Client",mappedBy="secteurs")
   * @ORM\JoinColumn(nullable=true)
   */
    private $clients;
     /**
   * @ORM\OneToMany(targetEntity="Prestation",mappedBy="secteur")
   * @ORM\JoinColumn(nullable=true)
   */
    private $prestations;
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
     * @ORM\Column(name="code", type="string", length=100, nullable=false,unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false, unique=true)
     */
    private $libelle;
     /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="depart", type="string", length=100, nullable=true)
     */
    private $depart;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="arrivee", type="string", length=100, nullable=true)
     */
    private $arrivee;
    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;

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
     * Constructor
     */
    public function __construct()
    {
        $this->prestations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->feuilleDeRoutes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set depart
     *
     * @param string $depart
     * @return Itineraire
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    
        return $this;
    }

    /**
     * Get depart
     *
     * @return string 
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set arrivee
     *
     * @param string $arrivee
     * @return Itineraire
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;
    
        return $this;
    }

    /**
     * Get arrivee
     *
     * @return string 
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }
    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Itineraire
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
     * Set code
     *
     * @param string $code
     * @return Secteur
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
     * Set type
     *
     * @param string $type
     * @return Secteur
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Secteur
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
     * @return Secteur
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
     * @return Secteur
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
     * @return Secteur
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

    /**
     * Add clients
     *
     * @param \Fdr\AdminBundle\Entity\Client $clients
     * @return Secteur
     */
    public function addClient(\Fdr\AdminBundle\Entity\Client $clients)
    {
        $this->clients[] = $clients;
    
        return $this;
    }

    /**
     * Remove clients
     *
     * @param \Fdr\AdminBundle\Entity\Client $clients
     */
    public function removeClient(\Fdr\AdminBundle\Entity\Client $clients)
    {
        $this->clients->removeElement($clients);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClients()
    {
        return $this->clients;
    }
    
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Secteur
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
