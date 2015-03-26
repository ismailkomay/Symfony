<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Depot
 * @ORM\Table(name="depot")
 * @UniqueEntity("libelle",  message ="Cette libelle existe déja.Veuillez choisir une autre")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\DepotRepository")
 */
class Depot
{
     
    /**
   * @ORM\ManyToOne(targetEntity="Fdr\AdminBundle\Entity\Filiale", cascade={"remove"},inversedBy="depots")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   */
    private $filiale;
    
    /**
   * @ORM\ManyToOne(targetEntity="Fdr\AdminBundle\Entity\Ville", cascade={"remove"},inversedBy="depots")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   */
    private $ville;
    
    /**
    * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="filiale")
   * @ORM\JoinColumn(nullable=true)
    */
     private $feuilleDeRoutes;
   /**
   * @ORM\OneToMany(targetEntity="Utilisateur",mappedBy="role")
   * @ORM\JoinColumn(nullable=true)
   */
    private $utilisateurs;
    
    public function __construct() {
        $this->utilisateurs = new ArrayCollection() ;
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
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="libelle", type="string", length=100,nullable=false, unique=true)
     */
    private $libelle;

  
    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
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

    /**
     * Add utilisateurs
     *
     * @param \Fdr\AdminBundle\Entity\Utilisateur $utilisateurs
     * @return Depot
     */
    public function addUtilisateur(\Fdr\AdminBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;

        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \Fdr\AdminBundle\Entity\Utilisateur $utilisateurs
     */
    public function removeUtilisateur(\Fdr\AdminBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

   
    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Depot
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
     * Set ville
     *
     * @param \Fdr\AdminBundle\Entity\Ville $ville
     * @return Depot
     */
    public function setVille(\Fdr\AdminBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Fdr\AdminBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }
}
