<?php

namespace FIRST\JeuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tchat
 *
 * @ORM\Table(name="tchat")
 * @ORM\Entity(repositoryClass="FIRST\JeuBundle\Repository\TchatRepository")
 */
class Tchat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="tchat_id", type="integer", unique=true)
     */
    private $tchatId;

    /**
     * @var int
     *
     * @ORM\Column(name="tchat_salon_id", type="integer", unique=true)
     */
    private $tchatSalonId;

    /**
     * @var string
     *
     * @ORM\Column(name="tchat_joueur_1", type="string", length=255, nullable=true)
     */
    private $tchatJoueur1;

    /**
     * @var string
     *
     * @ORM\Column(name="tchat_joueur_2", type="string", length=255, nullable=true)
     */
    private $tchatJoueur2;

    /**
     * @var string
     *
     * @ORM\Column(name="date_envoie", type="string", length=255)
     */
    private $dateEnvoie;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=true)
     */
    private $message;


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
     * Set tchatId
     *
     * @param integer $tchatId
     *
     * @return Tchat
     */
    public function setTchatId($tchatId)
    {
        $this->tchatId = $tchatId;

        return $this;
    }

    /**
     * Get tchatId
     *
     * @return int
     */
    public function getTchatId()
    {
        return $this->tchatId;
    }

    /**
     * Set tchatSalonId
     *
     * @param integer $tchatSalonId
     *
     * @return Tchat
     */
    public function setTchatSalonId($tchatSalonId)
    {
        $this->tchatSalonId = $tchatSalonId;

        return $this;
    }

    /**
     * Get tchatSalonId
     *
     * @return int
     */
    public function getTchatSalonId()
    {
        return $this->tchatSalonId;
    }

    /**
     * Set tchatJoueur1
     *
     * @param string $tchatJoueur1
     *
     * @return Tchat
     */
    public function setTchatJoueur1($tchatJoueur1)
    {
        $this->tchatJoueur1 = $tchatJoueur1;

        return $this;
    }

    /**
     * Get tchatJoueur1
     *
     * @return string
     */
    public function getTchatJoueur1()
    {
        return $this->tchatJoueur1;
    }

    /**
     * Set tchatJoueur2
     *
     * @param string $tchatJoueur2
     *
     * @return Tchat
     */
    public function setTchatJoueur2($tchatJoueur2)
    {
        $this->tchatJoueur2 = $tchatJoueur2;

        return $this;
    }

    /**
     * Get tchatJoueur2
     *
     * @return string
     */
    public function getTchatJoueur2()
    {
        return $this->tchatJoueur2;
    }

    /**
     * Set dateEnvoie
     *
     * @param string $dateEnvoie
     *
     * @return Tchat
     */
    public function setDateEnvoie($dateEnvoie)
    {
        $this->dateEnvoie = $dateEnvoie;

        return $this;
    }

    /**
     * Get dateEnvoie
     *
     * @return string
     */
    public function getDateEnvoie()
    {
        return $this->dateEnvoie;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Tchat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
