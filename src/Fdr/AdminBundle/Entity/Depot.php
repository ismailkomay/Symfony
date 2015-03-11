<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Depot
 *
 * @ORM\Table(name="depot")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\DepotRepository")
 */
class Depot
{
     
    /**
   * @ORM\ManyToOne(targetEntity="Fdr\AdminBundle\Entity\Filiale", cascade={"remove"},inversedBy="depots")
   * @ORM\JoinColumn(nullable=false)
   */
    private $filiale;
    
    public function __construct() {
        
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100, unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100,nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="champ1", type="string", length=100, nullable=true)
     */
    private $champ1;

    /**
     * @var string
     *
     * @ORM\Column(name="champ2", type="string", length=100, nullable=true)
     */
    private $champ2;


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
     * Set code
     *
     * @param string $code
     * @return Depot
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
     * Set libelle
     *
     * @param string $libelle
     * @return Depot
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
     * Set adresse
     *
     * @param string $adresse
     * @return Depot
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
     * Set champ1
     *
     * @param string $champ1
     * @return Depot
     */
    public function setChamp1($champ1)
    {
        $this->champ1 = $champ1;
    
        return $this;
    }

    /**
     * Get champ1
     *
     * @return string 
     */
    public function getChamp1()
    {
        return $this->champ1;
    }

    /**
     * Set champ2
     *
     * @param string $champ2
     * @return Depot
     */
    public function setChamp2($champ2)
    {
        $this->champ2 = $champ2;
    
        return $this;
    }

    /**
     * Get champ2
     *
     * @return string 
     */
    public function getChamp2()
    {
        return $this->champ2;
    }

    /**
     * Set filiale
     *
     * @param \Fdr\AdminBundle\Entity\Filiale $filiale
     * @return Depot
     */
    public function setFiliale(\Fdr\AdminBundle\Entity\Filiale $filiale)
    {
        $this->filiale = $filiale;
    
        return $this;
    }

    /**
     * Get filiale
     *
     * @return \Fdr\AdminBundle\Entity\Filiale 
     */
    public function getFiliale()
    {
        return $this->filiale;
    }
 
    public function __toString()
    {
        return $this->libelle;
    }
}
