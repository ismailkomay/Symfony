<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="nomresponsable", type="string", length=100)
     */
    private $nomresponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomresponsable", type="string", length=100)
     */
    private $prenomresponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=100)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=100)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="nomentreprise", type="string", length=100)
     */
    private $nomentreprise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encompte", type="boolean")
     */
    private $encompte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientaffret", type="boolean")
     */
    private $clientaffret;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientramass", type="boolean")
     */
    private $clientramass;

    /**
     * @var string
     *
     * @ORM\Column(name="numcompte", type="string", length=100)
     */
    private $numcompte;

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
     * Set nomresponsable
     *
     * @param string $nomresponsable
     * @return Client
     */
    public function setNomresponsable($nomresponsable)
    {
        $this->nomresponsable = $nomresponsable;

        return $this;
    }

    /**
     * Get nomresponsable
     *
     * @return string 
     */
    public function getNomresponsable()
    {
        return $this->nomresponsable;
    }

    /**
     * Set prenomresponsable
     *
     * @param string $prenomresponsable
     * @return Client
     */
    public function setPrenomresponsable($prenomresponsable)
    {
        $this->prenomresponsable = $prenomresponsable;

        return $this;
    }

    /**
     * Get prenomresponsable
     *
     * @return string 
     */
    public function getPrenomresponsable()
    {
        return $this->prenomresponsable;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Client
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
     * @return Client
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
     * Set cin
     *
     * @param string $cin
     * @return Client
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
     * Set email
     *
     * @param string $email
     * @return Client
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
     * Set fax
     *
     * @param string $fax
     * @return Client
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     * @return Client
     */
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string 
     */
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }

    /**
     * Set encompte
     *
     * @param boolean $encompte
     * @return Client
     */
    public function setEncompte($encompte)
    {
        $this->encompte = $encompte;

        return $this;
    }

    /**
     * Get encompte
     *
     * @return boolean 
     */
    public function getEncompte()
    {
        return $this->encompte;
    }

    /**
     * Set clientaffret
     *
     * @param boolean $clientaffret
     * @return Client
     */
    public function setClientaffret($clientaffret)
    {
        $this->clientaffret = $clientaffret;

        return $this;
    }

    /**
     * Get clientaffret
     *
     * @return boolean 
     */
    public function getClientaffret()
    {
        return $this->clientaffret;
    }

    /**
     * Set clientramass
     *
     * @param boolean $clientramass
     * @return Client
     */
    public function setClientramass($clientramass)
    {
        $this->clientramass = $clientramass;

        return $this;
    }

    /**
     * Get clientramass
     *
     * @return boolean 
     */
    public function getClientramass()
    {
        return $this->clientramass;
    }

    /**
     * Set numcompte
     *
     * @param string $numcompte
     * @return Client
     */
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;

        return $this;
    }

    /**
     * Get numcompte
     *
     * @return string 
     */
    public function getNumcompte()
    {
        return $this->numcompte;
    }

    /**
     * Set champssupp1
     *
     * @param string $champssupp1
     * @return Client
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
     * @return Client
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
