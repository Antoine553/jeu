<?php

namespace FIRST\JeuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salon_joueur
 *
 * @ORM\Table(name="salon_joueur")
 * @ORM\Entity(repositoryClass="FIRST\JeuBundle\Repository\Salon_joueurRepository")
 */
class Salon_joueur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="FIRST\JeuBundle\Entity\Tchat", cascade={"persist"})
     * @ORM\OneToMany(targetEntity="FIRST\JeuBundle\Entity\Position_salon", cascade={"persist"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="salon_id", type="integer", unique=true)
     */
    private $salonId;

    /**
     * @var int
     *
     * @ORM\Column(name="salon_nom", type="string", length=255, nullable=true)
     */
    private $salonNom;

    /**
     * @var string
     *
     * @ORM\Column(name="gagnant", type="string", length=255, nullable=true)
     */
    private $gagnant;

    /**
     * @var string
     *
     * @ORM\Column(name="perdant", type="string", length=255, nullable=true)
     */
    private $perdant;

    /**
     * @var string
     *
     * @ORM\Column(name="joueur_1", type="string", length=255)
     */
    private $joueur1;

    /**
     * @var string
     *
     * @ORM\Column(name="joueur_2", type="string", length=255, nullable=true)
     */
    private $joueur2;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_tour", type="integer")
     */
    private $numeroTour;


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
     * Set salonId
     *
     * @param integer $salonId
     *
     * @return Salon_joueur
     */
    public function setSalonId($salonId)
    {
        $this->salonId = $salonId;

        return $this;
    }

    /**
     * Get salonId
     *
     * @return int
     */
    public function getSalonId()
    {
        return $this->salonId;
    }

    /**
     * Set salonNom
     *
     * @param string $salonNom
     *
     * @return Salon_joueur
     */
    public function setSalonNom($salonNom)
    {
        $this->salonNom = $salonNom;

        return $this;
    }

    /**
     * Get salonNom
     *
     * @return string
     */
    public function getSalonNom()
    {
        return $this->salonNom;
    }

    /**
     * Set gagnant
     *
     * @param string $gagnant
     *
     * @return Salon_joueur
     */
    public function setGagnant($gagnant)
    {
        $this->gagnant = $gagnant;

        return $this;
    }

    /**
     * Get gagnant
     *
     * @return string
     */
    public function getGagnant()
    {
        return $this->gagnant;
    }

    /**
     * Set perdant
     *
     * @param string $perdant
     *
     * @return Salon_joueur
     */
    public function setPerdant($perdant)
    {
        $this->perdant = $perdant;

        return $this;
    }

    /**
     * Get perdant
     *
     * @return string
     */
    public function getPerdant()
    {
        return $this->perdant;
    }

    /**
     * Set joueur1
     *
     * @param string $joueur1
     *
     * @return Salon_joueur
     */
    public function setJoueur1($joueur1)
    {
        $this->joueur1 = $joueur1;

        return $this;
    }

    /**
     * Get joueur1
     *
     * @return string
     */
    public function getJoueur1()
    {
        return $this->joueur1;
    }

    /**
     * Set joueur2
     *
     * @param string $joueur2
     *
     * @return Salon_joueur
     */
    public function setJoueur2($joueur2)
    {
        $this->joueur2 = $joueur2;

        return $this;
    }

    /**
     * Get joueur2
     *
     * @return string
     */
    public function getJoueur2()
    {
        return $this->joueur2;
    }

    /**
     * Set numeroTour
     *
     * @param integer $numeroTour
     *
     * @return Salon_joueur
     */
    public function setNumeroTour($numeroTour)
    {
        $this->numeroTour = $numeroTour;

        return $this;
    }

    /**
     * Get numeroTour
     *
     * @return int
     */
    public function getNumeroTour()
    {
        return $this->numeroTour;
    }
}
