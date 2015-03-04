<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\VehiculeRepository")
 */
class Vehicule
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
     * @var float
     *
     * @ORM\Column(name="tonnage", type="float")
     */
    private $tonnage;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remorque", type="boolean")
     */
    private $remorque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;

    /**
     * @var integer
     *
     * @ORM\Column(name="vidange", type="bigint")
     */
    private $vidange;

    /**
     * @var integer
     *
     * @ORM\Column(name="compteur", type="bigint")
     */
    private $compteur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=100)
     */
    private $matricule;
    
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
     * Set matricule
     *
     * @param string $matricule
     * @return Vehicule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set tonnage
     *
     * @param float $tonnage
     * @return Vehicule
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;

        return $this;
    }

    /**
     * Get tonnage
     *
     * @return float 
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Vehicule
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
     * Set remorque
     *
     * @param boolean $remorque
     * @return Vehicule
     */
    public function setRemorque($remorque)
    {
        $this->remorque = $remorque;

        return $this;
    }

    /**
     * Get remorque
     *
     * @return boolean 
     */
    public function getRemorque()
    {
        return $this->remorque;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Vehicule
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set vidange
     *
     * @param integer $vidange
     * @return Vehicule
     */
    public function setVidange($vidange)
    {
        $this->vidange = $vidange;

        return $this;
    }

    /**
     * Get vidange
     *
     * @return integer 
     */
    public function getVidange()
    {
        return $this->vidange;
    }

    /**
     * Set compteur
     *
     * @param integer $compteur
     * @return Vehicule
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
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Manutentionnaire
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
     * @return Manutentionnaire
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
