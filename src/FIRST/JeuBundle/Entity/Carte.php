<?php

namespace FIRST\JeuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carte
 *
 * @ORM\Table(name="carte")
 * @ORM\Entity(repositoryClass="FIRST\JeuBundle\Repository\CarteRepository")
 */
class Carte
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
     * @ORM\Column(name="carte_id", type="integer", unique=true)
     */
    private $carteId;

    /**
     * @var string
     *
     * @ORM\Column(name="carte_nom", type="string", length=255, nullable=true)
     */
    private $carteNom;

    /**
     * @var string
     *
     * @ORM\Column(name="carte_image", type="string", length=255, unique=true)
     */
    private $carteImage;

    /**
     * @var string
     *
     * @ORM\Column(name="carte_valeur", type="string", length=255, nullable=true)
     */
    private $carteValeur;

    /**
     * @var string
     *
     * @ORM\Column(name="carte_extra", type="string", length=255)
     */
    private $carteExtra;


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
     * Set carteId
     *
     * @param integer $carteId
     *
     * @return Carte
     */
    public function setCarteId($carteId)
    {
        $this->carteId = $carteId;

        return $this;
    }

    /**
     * Get carteId
     *
     * @return int
     */
    public function getCarteId()
    {
        return $this->carteId;
    }

    /**
     * Set carteNom
     *
     * @param string $carteNom
     *
     * @return Carte
     */
    public function setCarteNom($carteNom)
    {
        $this->carteNom = $carteNom;

        return $this;
    }

    /**
     * Get carteNom
     *
     * @return string
     */
    public function getCarteNom()
    {
        return $this->carteNom;
    }

    /**
     * Set carteImage
     *
     * @param string $carteImage
     *
     * @return Carte
     */
    public function setCarteImage($carteImage)
    {
        $this->carteImage = $carteImage;

        return $this;
    }

    /**
     * Get carteImage
     *
     * @return string
     */
    public function getCarteImage()
    {
        return $this->carteImage;
    }

    /**
     * Set carteValeur
     *
     * @param string $carteValeur
     *
     * @return Carte
     */
    public function setCarteValeur($carteValeur)
    {
        $this->carteValeur = $carteValeur;

        return $this;
    }

    /**
     * Get carteValeur
     *
     * @return string
     */
    public function getCarteValeur()
    {
        return $this->carteValeur;
    }

    /**
     * Set carteExtra
     *
     * @param string $carteExtra
     *
     * @return Carte
     */
    public function setCarteExtra($carteExtra)
    {
        $this->carteExtra = $carteExtra;

        return $this;
    }

    /**
     * Get carteExtra
     *
     * @return string
     */
    public function getCarteExtra()
    {
        return $this->carteExtra;
    }
}
