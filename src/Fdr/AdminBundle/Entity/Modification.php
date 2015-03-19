<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modification
 *
 * @ORM\Table(name="modification")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ModificationRepository")
 */
class Modification
{
    public function __construct() {
         $this->dateMaj = new \Datetime(); 
    }
    /**
   * @ORM\ManyToOne(targetEntity="Utilisateur",inversedBy="modifications")
   * @ORM\JoinColumn(nullable=false)
   */
  
    private $utilisateur;
    /**
   * @ORM\ManyToOne(targetEntity="FeuilleDeRoute",inversedBy="modifications")
   * @ORM\JoinColumn(nullable=false)
   */
  
    private $feuilleDeRoute;
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
     * @ORM\Column(name="motif", type="string", length=100)
     */
    private $motif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMaj", type="datetime")
     */
    private $dateMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="text", nullable=false)
     */
    private $remarque;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return Modification
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;
    
        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set dateMaj
     *
     * @param \DateTime $dateMaj
     * @return Modification
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;
    
        return $this;
    }

    /**
     * Get dateMaj
     *
     * @return \DateTime 
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return Modification
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
    
        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set champSup1
     *
     * @param string $champSup1
     * @return Modification
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
     * @return Modification
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
     * Set utilisateur
     *
     * @param \Fdr\AdminBundle\Entity\Utilisateur $utilisateur
     * @return Modification
     */
    public function setUtilisateur(\Fdr\AdminBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;
    
        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Fdr\AdminBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return Modification
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
        return "Modif-".$this->id."-Par ".$this->utilisateur.":".$this->motif;
    }
}
