<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Chauffeur
 *
 * @ORM\Table(name="chauffeur")
 * @ORM\Entity
 */
class Chauffeur
{
    /**
   * @ORM\ManyToMany(targetEntity="FeuilleDeRoute",inversedBy="chauffeurs")
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
     /**
    * @ORM\OneToMany(targetEntity="Indisponibilite",mappedBy="chauffeur")
   * @ORM\JoinColumn(nullable=true)
    */
     private $indisponibilites;
     
     public function __construct() {
        $this->indisponibilites = new ArrayCollection() ;
        $this->feuilleDeRoutes = new ArrayCollection() ;
    }
     
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=100, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateembauche", type="date", nullable=false)
     */
    private $dateembauche;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=false)
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="typeconvention", type="string", length=100, nullable=false)
     */
    private $typeconvention;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp1", type="string", length=100, nullable=false)
     */
    private $champssupp1;

    /**
     * @var string
     *
     * @ORM\Column(name="etatContrat", type="string", length=100, nullable=false)
     */
    private $etatContrat;



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
     * @return Chauffeur
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
     * @return Chauffeur
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
     * @return Chauffeur
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
     * Set cin
     *
     * @param string $cin
     * @return Chauffeur
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
     * Set adresse
     *
     * @param string $adresse
     * @return Chauffeur
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
     * Set dateembauche
     *
     * @param \DateTime $dateembauche
     * @return Chauffeur
     */
    public function setDateembauche($dateembauche)
    {
        $this->dateembauche = $dateembauche;
    
        return $this;
    }

    /**
     * Get dateembauche
     *
     * @return \DateTime 
     */
    public function getDateembauche()
    {
        return $this->dateembauche;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     * @return Chauffeur
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    
        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return boolean 
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set typeconvention
     *
     * @param string $typeconvention
     * @return Chauffeur
     */
    public function setTypeconvention($typeconvention)
    {
        $this->typeconvention = $typeconvention;
    
        return $this;
    }

    /**
     * Get typeconvention
     *
     * @return string 
     */
    public function getTypeconvention()
    {
        return $this->typeconvention;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Chauffeur
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
     * Add indisponibilites
     *
     * @param \Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites
     * @return Chauffeur
     */
    public function addIndisponibilite(\Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites)
    {
        $this->indisponibilites[] = $indisponibilites;
    
        return $this;
    }

    /**
     * Remove indisponibilites
     *
     * @param \Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites
     */
    public function removeIndisponibilite(\Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites)
    {
        $this->indisponibilites->removeElement($indisponibilites);
    }

    /**
     * Get indisponibilites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndisponibilites()
    {
        return $this->indisponibilites;
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Chauffeur
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

    /**
     * Set etatContrat
     *
     * @param string $etatContrat
     * @return Chauffeur
     */
    public function setEtatContrat($etatContrat)
    {
        $this->etatContrat = $etatContrat;
    
        return $this;
    }

    /**
     * Get etatContrat
     *
     * @return string 
     */
    public function getEtatContrat()
    {
        return $this->etatContrat;
    }
}
