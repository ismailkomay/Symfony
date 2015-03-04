<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="nomRole", type="string", length=100)
     */
    private $nomRole;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDFDR", type="string", length=100)
     */
    private $cRUDFDR;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDFDRPanne", type="string", length=100)
     */
    private $cRUDFDRPanne;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDFDRAgence", type="string", length=100)
     */
    private $cRUDFDRAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDClientCompeFDL", type="string", length=100)
     */
    private $cRUDClientCompeFDL;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDClientNonCompteFDL", type="string", length=100)
     */
    private $cRUDClientNonCompteFDL;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affectationVehiculeAffr", type="boolean")
     */
    private $affectationVehiculeAffr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cloturerFDR", type="boolean")
     */
    private $cloturerFDR;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cloturerFDRAffr", type="boolean")
     */
    private $cloturerFDRAffr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confRecDocCtm", type="boolean")
     */
    private $confRecDocCtm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confRecDocClient", type="boolean")
     */
    private $confRecDocClient;

    /**
     * @var boolean
     *
     * @ORM\Column(name="editCompteur", type="boolean")
     */
    private $editCompteur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pourcentageAssurance", type="boolean")
     */
    private $pourcentageAssurance;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDClient", type="string", length=100)
     */
    private $cRUDClient;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDVehicule", type="string", length=100)
     */
    private $cRUDVehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDChauffeur", type="string", length=100)
     */
    private $cRUDChauffeur;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDUtilisateur", type="string", length=100)
     */
    private $cRUDUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDDepot", type="string", length=100)
     */
    private $cRUDDepot;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDFiliale", type="string", length=100)
     */
    private $cRUDFiliale;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDManutentionnaire", type="string", length=100)
     */
    private $cRUDManutentionnaire;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDIndisponibilite", type="string", length=100)
     */
    private $cRUDIndisponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDItineraire", type="string", length=100)
     */
    private $cRUDItineraire;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDPrestation", type="string", length=100)
     */
    private $cRUDPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDTypePrestation", type="string", length=100)
     */
    private $cRUDTypePrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDSecteur", type="string", length=100)
     */
    private $cRUDSecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="CRUDTypeConsommation", type="string", length=100)
     */
    private $cRUDTypeConsommation;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup1", type="string", length=100)
     */
    private $champSup1;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup2", type="string", length=100)
     */
    private $champSup2;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup3", type="string", length=100)
     */
    private $champSup3;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup4", type="string", length=100)
     */
    private $champSup4;


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
     * Set nomRole
     *
     * @param string $nomRole
     * @return Role
     */
    public function setNomRole($nomRole)
    {
        $this->nomRole = $nomRole;
    
        return $this;
    }

    /**
     * Get nomRole
     *
     * @return string 
     */
    public function getNomRole()
    {
        return $this->nomRole;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Role
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cRUDFDR
     *
     * @param string $cRUDFDR
     * @return Role
     */
    public function setCRUDFDR($cRUDFDR)
    {
        $this->cRUDFDR = $cRUDFDR;
    
        return $this;
    }

    /**
     * Get cRUDFDR
     *
     * @return string 
     */
    public function getCRUDFDR()
    {
        return $this->cRUDFDR;
    }

    /**
     * Set cRUDFDRPanne
     *
     * @param string $cRUDFDRPanne
     * @return Role
     */
    public function setCRUDFDRPanne($cRUDFDRPanne)
    {
        $this->cRUDFDRPanne = $cRUDFDRPanne;
    
        return $this;
    }

    /**
     * Get cRUDFDRPanne
     *
     * @return string 
     */
    public function getCRUDFDRPanne()
    {
        return $this->cRUDFDRPanne;
    }

    /**
     * Set cRUDFDRAgence
     *
     * @param string $cRUDFDRAgence
     * @return Role
     */
    public function setCRUDFDRAgence($cRUDFDRAgence)
    {
        $this->cRUDFDRAgence = $cRUDFDRAgence;
    
        return $this;
    }

    /**
     * Get cRUDFDRAgence
     *
     * @return string 
     */
    public function getCRUDFDRAgence()
    {
        return $this->cRUDFDRAgence;
    }

    /**
     * Set cRUDClientCompeFDL
     *
     * @param string $cRUDClientCompeFDL
     * @return Role
     */
    public function setCRUDClientCompeFDL($cRUDClientCompeFDL)
    {
        $this->cRUDClientCompeFDL = $cRUDClientCompeFDL;
    
        return $this;
    }

    /**
     * Get cRUDClientCompeFDL
     *
     * @return string 
     */
    public function getCRUDClientCompeFDL()
    {
        return $this->cRUDClientCompeFDL;
    }

    /**
     * Set cRUDClientNonCompteFDL
     *
     * @param string $cRUDClientNonCompteFDL
     * @return Role
     */
    public function setCRUDClientNonCompteFDL($cRUDClientNonCompteFDL)
    {
        $this->cRUDClientNonCompteFDL = $cRUDClientNonCompteFDL;
    
        return $this;
    }

    /**
     * Get cRUDClientNonCompteFDL
     *
     * @return string 
     */
    public function getCRUDClientNonCompteFDL()
    {
        return $this->cRUDClientNonCompteFDL;
    }

    /**
     * Set affectationVehiculeAffr
     *
     * @param boolean $affectationVehiculeAffr
     * @return Role
     */
    public function setAffectationVehiculeAffr($affectationVehiculeAffr)
    {
        $this->affectationVehiculeAffr = $affectationVehiculeAffr;
    
        return $this;
    }

    /**
     * Get affectationVehiculeAffr
     *
     * @return boolean 
     */
    public function getAffectationVehiculeAffr()
    {
        return $this->affectationVehiculeAffr;
    }

    /**
     * Set cloturerFDR
     *
     * @param boolean $cloturerFDR
     * @return Role
     */
    public function setCloturerFDR($cloturerFDR)
    {
        $this->cloturerFDR = $cloturerFDR;
    
        return $this;
    }

    /**
     * Get cloturerFDR
     *
     * @return boolean 
     */
    public function getCloturerFDR()
    {
        return $this->cloturerFDR;
    }

    /**
     * Set cloturerFDRAffr
     *
     * @param boolean $cloturerFDRAffr
     * @return Role
     */
    public function setCloturerFDRAffr($cloturerFDRAffr)
    {
        $this->cloturerFDRAffr = $cloturerFDRAffr;
    
        return $this;
    }

    /**
     * Get cloturerFDRAffr
     *
     * @return boolean 
     */
    public function getCloturerFDRAffr()
    {
        return $this->cloturerFDRAffr;
    }

    /**
     * Set confRecDocCtm
     *
     * @param boolean $confRecDocCtm
     * @return Role
     */
    public function setConfRecDocCtm($confRecDocCtm)
    {
        $this->confRecDocCtm = $confRecDocCtm;
    
        return $this;
    }

    /**
     * Get confRecDocCtm
     *
     * @return boolean 
     */
    public function getConfRecDocCtm()
    {
        return $this->confRecDocCtm;
    }

    /**
     * Set confRecDocClient
     *
     * @param boolean $confRecDocClient
     * @return Role
     */
    public function setConfRecDocClient($confRecDocClient)
    {
        $this->confRecDocClient = $confRecDocClient;
    
        return $this;
    }

    /**
     * Get confRecDocClient
     *
     * @return boolean 
     */
    public function getConfRecDocClient()
    {
        return $this->confRecDocClient;
    }

    /**
     * Set editCompteur
     *
     * @param boolean $editCompteur
     * @return Role
     */
    public function setEditCompteur($editCompteur)
    {
        $this->editCompteur = $editCompteur;
    
        return $this;
    }

    /**
     * Get editCompteur
     *
     * @return boolean 
     */
    public function getEditCompteur()
    {
        return $this->editCompteur;
    }

    /**
     * Set pourcentageAssurance
     *
     * @param boolean $pourcentageAssurance
     * @return Role
     */
    public function setPourcentageAssurance($pourcentageAssurance)
    {
        $this->pourcentageAssurance = $pourcentageAssurance;
    
        return $this;
    }

    /**
     * Get pourcentageAssurance
     *
     * @return boolean 
     */
    public function getPourcentageAssurance()
    {
        return $this->pourcentageAssurance;
    }

    /**
     * Set cRUDClient
     *
     * @param string $cRUDClient
     * @return Role
     */
    public function setCRUDClient($cRUDClient)
    {
        $this->cRUDClient = $cRUDClient;
    
        return $this;
    }

    /**
     * Get cRUDClient
     *
     * @return string 
     */
    public function getCRUDClient()
    {
        return $this->cRUDClient;
    }

    /**
     * Set cRUDVehicule
     *
     * @param string $cRUDVehicule
     * @return Role
     */
    public function setCRUDVehicule($cRUDVehicule)
    {
        $this->cRUDVehicule = $cRUDVehicule;
    
        return $this;
    }

    /**
     * Get cRUDVehicule
     *
     * @return string 
     */
    public function getCRUDVehicule()
    {
        return $this->cRUDVehicule;
    }

    /**
     * Set cRUDChauffeur
     *
     * @param string $cRUDChauffeur
     * @return Role
     */
    public function setCRUDChauffeur($cRUDChauffeur)
    {
        $this->cRUDChauffeur = $cRUDChauffeur;
    
        return $this;
    }

    /**
     * Get cRUDChauffeur
     *
     * @return string 
     */
    public function getCRUDChauffeur()
    {
        return $this->cRUDChauffeur;
    }

    /**
     * Set cRUDUtilisateur
     *
     * @param string $cRUDUtilisateur
     * @return Role
     */
    public function setCRUDUtilisateur($cRUDUtilisateur)
    {
        $this->cRUDUtilisateur = $cRUDUtilisateur;
    
        return $this;
    }

    /**
     * Get cRUDUtilisateur
     *
     * @return string 
     */
    public function getCRUDUtilisateur()
    {
        return $this->cRUDUtilisateur;
    }

    /**
     * Set cRUDDepot
     *
     * @param string $cRUDDepot
     * @return Role
     */
    public function setCRUDDepot($cRUDDepot)
    {
        $this->cRUDDepot = $cRUDDepot;
    
        return $this;
    }

    /**
     * Get cRUDDepot
     *
     * @return string 
     */
    public function getCRUDDepot()
    {
        return $this->cRUDDepot;
    }

    /**
     * Set cRUDFiliale
     *
     * @param string $cRUDFiliale
     * @return Role
     */
    public function setCRUDFiliale($cRUDFiliale)
    {
        $this->cRUDFiliale = $cRUDFiliale;
    
        return $this;
    }

    /**
     * Get cRUDFiliale
     *
     * @return string 
     */
    public function getCRUDFiliale()
    {
        return $this->cRUDFiliale;
    }

    /**
     * Set cRUDManutentionnaire
     *
     * @param string $cRUDManutentionnaire
     * @return Role
     */
    public function setCRUDManutentionnaire($cRUDManutentionnaire)
    {
        $this->cRUDManutentionnaire = $cRUDManutentionnaire;
    
        return $this;
    }

    /**
     * Get cRUDManutentionnaire
     *
     * @return string 
     */
    public function getCRUDManutentionnaire()
    {
        return $this->cRUDManutentionnaire;
    }

    /**
     * Set cRUDIndisponibilite
     *
     * @param string $cRUDIndisponibilite
     * @return Role
     */
    public function setCRUDIndisponibilite($cRUDIndisponibilite)
    {
        $this->cRUDIndisponibilite = $cRUDIndisponibilite;
    
        return $this;
    }

    /**
     * Get cRUDIndisponibilite
     *
     * @return string 
     */
    public function getCRUDIndisponibilite()
    {
        return $this->cRUDIndisponibilite;
    }

    /**
     * Set cRUDItineraire
     *
     * @param string $cRUDItineraire
     * @return Role
     */
    public function setCRUDItineraire($cRUDItineraire)
    {
        $this->cRUDItineraire = $cRUDItineraire;
    
        return $this;
    }

    /**
     * Get cRUDItineraire
     *
     * @return string 
     */
    public function getCRUDItineraire()
    {
        return $this->cRUDItineraire;
    }

    /**
     * Set cRUDPrestation
     *
     * @param string $cRUDPrestation
     * @return Role
     */
    public function setCRUDPrestation($cRUDPrestation)
    {
        $this->cRUDPrestation = $cRUDPrestation;
    
        return $this;
    }

    /**
     * Get cRUDPrestation
     *
     * @return string 
     */
    public function getCRUDPrestation()
    {
        return $this->cRUDPrestation;
    }

    /**
     * Set cRUDTypePrestation
     *
     * @param string $cRUDTypePrestation
     * @return Role
     */
    public function setCRUDTypePrestation($cRUDTypePrestation)
    {
        $this->cRUDTypePrestation = $cRUDTypePrestation;
    
        return $this;
    }

    /**
     * Get cRUDTypePrestation
     *
     * @return string 
     */
    public function getCRUDTypePrestation()
    {
        return $this->cRUDTypePrestation;
    }

    /**
     * Set cRUDSecteur
     *
     * @param string $cRUDSecteur
     * @return Role
     */
    public function setCRUDSecteur($cRUDSecteur)
    {
        $this->cRUDSecteur = $cRUDSecteur;
    
        return $this;
    }

    /**
     * Get cRUDSecteur
     *
     * @return string 
     */
    public function getCRUDSecteur()
    {
        return $this->cRUDSecteur;
    }

    /**
     * Set cRUDTypeConsommation
     *
     * @param string $cRUDTypeConsommation
     * @return Role
     */
    public function setCRUDTypeConsommation($cRUDTypeConsommation)
    {
        $this->cRUDTypeConsommation = $cRUDTypeConsommation;
    
        return $this;
    }

    /**
     * Get cRUDTypeConsommation
     *
     * @return string 
     */
    public function getCRUDTypeConsommation()
    {
        return $this->cRUDTypeConsommation;
    }

    /**
     * Set champSup1
     *
     * @param string $champSup1
     * @return Role
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
     * @return Role
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
     * Set champSup3
     *
     * @param string $champSup3
     * @return Role
     */
    public function setChampSup3($champSup3)
    {
        $this->champSup3 = $champSup3;
    
        return $this;
    }

    /**
     * Get champSup3
     *
     * @return string 
     */
    public function getChampSup3()
    {
        return $this->champSup3;
    }

    /**
     * Set champSup4
     *
     * @param string $champSup4
     * @return Role
     */
    public function setChampSup4($champSup4)
    {
        $this->champSup4 = $champSup4;
    
        return $this;
    }

    /**
     * Get champSup4
     *
     * @return string 
     */
    public function getChampSup4()
    {
        return $this->champSup4;
    }
}
