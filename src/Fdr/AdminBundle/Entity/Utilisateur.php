<?php

namespace Fdr\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Utilisateur
 * @UniqueEntity("cin",  message ="Ce cin existe déja.")
 * @UniqueEntity("email",  message ="Cet email existe déja.Veuillez choisir un autre")
 * @UniqueEntity("login",  message ="Ce login existe déja.Veuillez choisir un autre")
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
{
    /**
   * @ORM\OneToMany(targetEntity="Modification",mappedBy="utilisateur")
   * @ORM\JoinColumn(nullable=true)
   */
    private $modifications;
    /**
   * @ORM\ManyToMany(targetEntity="FeuilleDeRoute",mappedBy="utilisateurs")
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->feuilleDeRoutes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modifications = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
   * @ORM\ManyToOne(targetEntity="Role",inversedBy="utilisateurs")
   * @ORM\JoinColumn(nullable=false)
   */
  
    private $role;
    
    /**
   * @ORM\ManyToOne(targetEntity="Depot",inversedBy="utilisateurs")
   * @ORM\JoinColumn(nullable=false)
   * @Assert\NotBlank()
   * @Assert\Type(type="alnum", message="La valeur du champs n'est pas valide.")
   */
  
    private $depot;
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
     * @Assert\Type(type="alpha", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alpha", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas un {{ type }}.")
     * @ORM\Column(name="login", type="string", length=100, unique=true)
     */
    private $login;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas un {{ type }}.")
     * @ORM\Column(name="motDePasse", type="string", length=100)
     */
    private $motDePasse;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas un {{ type }}.") 
     * @ORM\Column(name="matricule", type="string", length=100)
     */
    private $matricule;

    /**
     * @var string
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas un {{ type }}.") 
     * @ORM\Column(name="cin", type="string", length=100, nullable=true,unique=true)
     */
    private $cin;

    /**
     * @var string
     * @Assert\Email()
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;
    
    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur {{ value }} n'est pas un {{ type }}.")
     * @ORM\Column(name="tel", type="string", length=100, nullable=true, unique=true)
     */
    private $tel;

    /**
     * @var string
     *  @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas un {{ type }}.")
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set login
     *
     * @param string $login
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Utilisateur
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    
        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Utilisateur
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
     * Set cin
     *
     * @param string $cin
     * @return Utilisateur
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
     * Set tel
     *
     * @param string $tel
     * @return Utilisateur
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
     * Set adresse
     *
     * @param string $adresse
     * @return Utilisateur
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
     * Set champSup1
     *
     * @param string $champSup1
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set role
     *
     * @param \Fdr\AdminBundle\Entity\Role $role
     * @return Utilisateur
     */
    public function setRole(\Fdr\AdminBundle\Entity\Role $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \Fdr\AdminBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Utilisateur
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
     * Add modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     * @return Utilisateur
     */
    public function addModification(\Fdr\AdminBundle\Entity\Modification $modifications)
    {
        $this->modifications[] = $modifications;
    
        return $this;
    }

    /**
     * Remove modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     */
    public function removeModification(\Fdr\AdminBundle\Entity\Modification $modifications)
    {
        $this->modifications->removeElement($modifications);
    }

    /**
     * Get modifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModifications()
    {
        return $this->modifications;
    }
    
    public function __toString()
    {
        return $this->nom."-".$this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return Utilisateur
     */
    public function setDepot(\Fdr\AdminBundle\Entity\Depot $depot)
    {
        $this->depot = $depot;

        return $this;
    }

    /**
     * Get depot
     *
     * @return \Fdr\AdminBundle\Entity\Depot 
     */
    public function getDepot()
    {
        return $this->depot;
    }
}
