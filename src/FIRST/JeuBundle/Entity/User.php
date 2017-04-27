<?php

namespace FIRST\JeuBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="FIRST\JeuBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="FIRST\JeuBundle\Entity\Salon_joueur", cascade={"persist"})
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    protected $avatar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", nullable=true)
     */
    protected $dateInscription;


    /**
     * @var string
     *
     * @ORM\Column(name="totale_game", type="string", length=255, nullable=true)
     */
    protected $totaleGame;

    /**
     * @var string
     *
     * @ORM\Column(name="totale_victoire", type="string", length=255, nullable=true)
     */
    protected $totaleVictoire;

    /**
     * @var string
     *
     * @ORM\Column(name="totale_defaite", type="string", length=255, nullable=true)
     */
    protected $totaleDefaite;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
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
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set totaleGame
     *
     * @param string $totaleGame
     *
     * @return User
     */
    public function setTotaleGame($totaleGame)
    {
        $this->totaleGame = $totaleGame;

        return $this;
    }

    /**
     * Get totaleGame
     *
     * @return string
     */
    public function getTotaleGame()
    {
        return $this->totaleGame;
    }

    /**
     * Set totaleVictoire
     *
     * @param string $totaleVictoire
     *
     * @return User
     */
    public function setTotaleVictoire($totaleVictoire)
    {
        $this->totaleVictoire = $totaleVictoire;

        return $this;
    }

    /**
     * Get totaleVictoire
     *
     * @return string
     */
    public function getTotaleVictoire()
    {
        return $this->totaleVictoire;
    }

    /**
     * Set totaleDefaite
     *
     * @param string $totaleDefaite
     *
     * @return User
     */
    public function setTotaleDefaite($totaleDefaite)
    {
        $this->totaleDefaite = $totaleDefaite;

        return $this;
    }

    /**
     * Get totaleDefaite
     *
     * @return string
     */
    public function getTotaleDefaite()
    {
        return $this->totaleDefaite;
    }
}
