<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ville
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\VilleRepository")
 */
class Ville
{
    /**
   * @ORM\OneToMany(targetEntity="Secteur",mappedBy="ville")
   * @ORM\JoinColumn(nullable=true)
   */
    private $secteurs;
    /**
   * @ORM\OneToMany(targetEntity="Depot",mappedBy="ville")
   * @ORM\JoinColumn(nullable=true)
   */
    private $depots;
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
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Ville
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
    public function __construct() {
        $this->depots = new ArrayCollection() ;
        $this->secteurs = new ArrayCollection() ;
    }

    /**
     * Add secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     * @return Ville
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
     * Add depots
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depots
     * @return Ville
     */
    public function addDepot(\Fdr\AdminBundle\Entity\Depot $depots)
    {
        $this->depots[] = $depots;

        return $this;
    }

    /**
     * Remove depots
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depots
     */
    public function removeDepot(\Fdr\AdminBundle\Entity\Depot $depots)
    {
        $this->depots->removeElement($depots);
    }

    /**
     * Get depots
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepots()
    {
        return $this->depots;
    }
     public function __toString()
    {
        return $this->libelle;
    }
}
