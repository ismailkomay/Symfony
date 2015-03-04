<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chauffeur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ChauffeurRepository")
 */
class Chauffeur
{
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=100)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateembauche", type="date")
     */
    private $dateembauche;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="typeconvention", type="string", length=100)
     */
    private $typeconvention;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp1", type="string", length=100)
     */
    private $champssupp1;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100)
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
     * Set champssupp2
     *
     * @param string $champssupp2
     * @return Chauffeur
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
}
