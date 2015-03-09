<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Itineraire
 *
 * @ORM\Table(name="itineraire")
 * @ORM\Entity
 */
class Itineraire
{
    /**
   * @ORM\OneToMany(targetEntity="MissionAffretement",mappedBy="itineraire")
   * @ORM\JoinColumn(nullable=true)
   */
    private $missionAffretements;
    
    public function __construct() {
        $this->missionAffretements = new ArrayCollection() ;
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
     * @ORM\Column(name="depart", type="string", length=100, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee", type="string", length=100, nullable=false)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=false)
     */
    private $disponible=true;

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
     * Set disponible
     *
     * @param boolean $disponible
     * @return Itineraire
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    
        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Itineraire
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
     * @return Itineraire
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
     * Add missionAffretements
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements
     * @return Itineraire
     */
    public function addMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements)
    {
        $this->missionAffretements[] = $missionAffretements;
    
        return $this;
    }

    /**
     * Remove missionAffretements
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements
     */
    public function removeMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements)
    {
        $this->missionAffretements->removeElement($missionAffretements);
    }

    /**
     * Get missionAffretements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMissionAffretements()
    {
        return $this->missionAffretements;
    }
    
    public function __toString()
    {
        return $this->depart."<->".$this->arrivee;
    }
}
