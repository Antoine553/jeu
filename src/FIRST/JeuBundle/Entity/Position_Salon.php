<?php

namespace FIRST\JeuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position_Salon
 *
 * @ORM\Table(name="position__salon")
 * @ORM\Entity(repositoryClass="FIRST\JeuBundle\Repository\Position_SalonRepository")
 */
class Position_Salon
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
     * @var string
     *
     * @ORM\Column(name="id_salon", type="string", length=255, unique=true)
     */
    private $idSalon;

    /**
     * @var string
     *
     * @ORM\Column(name="carte1", type="string", length=255, nullable=true)
     */
    private $carte1;

    /**
     * @var string
     *
     * @ORM\Column(name="carte2", type="string", length=255, nullable=true)
     */
    private $carte2;

    /**
     * @var string
     *
     * @ORM\Column(name="carte3", type="string", length=255, nullable=true)
     */
    private $carte3;

    /**
     * @var string
     *
     * @ORM\Column(name="carte4", type="string", length=255, nullable=true)
     */
    private $carte4;

    /**
     * @var string
     *
     * @ORM\Column(name="carte5", type="string", length=255, nullable=true)
     */
    private $carte5;

    /**
     * @var string
     *
     * @ORM\Column(name="carte6", type="string", length=255, nullable=true)
     */
    private $carte6;

    /**
     * @var string
     *
     * @ORM\Column(name="carte7", type="string", length=255, nullable=true)
     */
    private $carte7;

    /**
     * @var string
     *
     * @ORM\Column(name="carte8", type="string", length=255, nullable=true)
     */
    private $carte8;

    /**
     * @var string
     *
     * @ORM\Column(name="carte9", type="string", length=255, nullable=true)
     */
    private $carte9;

    /**
     * @var string
     *
     * @ORM\Column(name="carte10", type="string", length=255, nullable=true)
     */
    private $carte10;

    /**
     * @var string
     *
     * @ORM\Column(name="carte11", type="string", length=255, nullable=true)
     */
    private $carte11;

    /**
     * @var string
     *
     * @ORM\Column(name="carte12", type="string", length=255, nullable=true)
     */
    private $carte12;

    /**
     * @var string
     *
     * @ORM\Column(name="carte13", type="string", length=255, nullable=true)
     */
    private $carte13;

    /**
     * @var string
     *
     * @ORM\Column(name="carte14", type="string", length=255, nullable=true)
     */
    private $carte14;

    /**
     * @var string
     *
     * @ORM\Column(name="carte15", type="string", length=255, nullable=true)
     */
    private $carte15;

    /**
     * @var string
     *
     * @ORM\Column(name="carte16", type="string", length=255, nullable=true)
     */
    private $carte16;

    /**
     * @var string
     *
     * @ORM\Column(name="carte17", type="string", length=255, nullable=true)
     */
    private $carte17;

    /**
     * @var string
     *
     * @ORM\Column(name="carte18", type="string", length=255, nullable=true)
     */
    private $carte18;

    /**
     * @var string
     *
     * @ORM\Column(name="carte19", type="string", length=255, nullable=true)
     */
    private $carte19;

    /**
     * @var string
     *
     * @ORM\Column(name="carte20", type="string", length=255, nullable=true)
     */
    private $carte20;

    /**
     * @var string
     *
     * @ORM\Column(name="carte21", type="string", length=255, nullable=true)
     */
    private $carte21;

    /**
     * @var string
     *
     * @ORM\Column(name="carte22", type="string", length=255, nullable=true)
     */
    private $carte22;

    /**
     * @var string
     *
     * @ORM\Column(name="carte23", type="string", length=255, nullable=true)
     */
    private $carte23;

    /**
     * @var string
     *
     * @ORM\Column(name="carte24", type="string", length=255, nullable=true)
     */
    private $carte24;

    /**
     * @var string
     *
     * @ORM\Column(name="carte25", type="string", length=255, nullable=true)
     */
    private $carte25;

    /**
     * @var string
     *
     * @ORM\Column(name="carte26", type="string", length=255, nullable=true)
     */
    private $carte26;

    /**
     * @var string
     *
     * @ORM\Column(name="carte27", type="string", length=255, nullable=true)
     */
    private $carte27;

    /**
     * @var string
     *
     * @ORM\Column(name="carte28", type="string", length=255, nullable=true)
     */
    private $carte28;

    /**
     * @var string
     *
     * @ORM\Column(name="carte29", type="string", length=255, nullable=true)
     */
    private $carte29;

    /**
     * @var string
     *
     * @ORM\Column(name="carte30", type="string", length=255, nullable=true)
     */
    private $carte30;

    /**
     * @var string
     *
     * @ORM\Column(name="carte31", type="string", length=255, nullable=true)
     */
    private $carte31;

    /**
     * @var string
     *
     * @ORM\Column(name="carte32", type="string", length=255, nullable=true)
     */
    private $carte32;

    /**
     * @var string
     *
     * @ORM\Column(name="carte33", type="string", length=255, nullable=true)
     */
    private $carte33;

    /**
     * @var string
     *
     * @ORM\Column(name="carte34", type="string", length=255, nullable=true)
     */
    private $carte34;

    /**
     * @var string
     *
     * @ORM\Column(name="carte35", type="string", length=255, nullable=true)
     */
    private $carte35;

    /**
     * @var string
     *
     * @ORM\Column(name="carte36", type="string", length=255, nullable=true)
     */
    private $carte36;

    /**
     * @var string
     *
     * @ORM\Column(name="carte37", type="string", length=255, nullable=true)
     */
    private $carte37;

    /**
     * @var string
     *
     * @ORM\Column(name="carte38", type="string", length=255, nullable=true)
     */
    private $carte38;

    /**
     * @var string
     *
     * @ORM\Column(name="carte39", type="string", length=255, nullable=true)
     */
    private $carte39;

    /**
     * @var string
     *
     * @ORM\Column(name="carte40", type="string", length=255, nullable=true)
     */
    private $carte40;

    /**
     * @var string
     *
     * @ORM\Column(name="carte41", type="string", length=255, nullable=true)
     */
    private $carte41;

    /**
     * @var string
     *
     * @ORM\Column(name="carte42", type="string", length=255, nullable=true)
     */
    private $carte42;

    /**
     * @var string
     *
     * @ORM\Column(name="carte43", type="string", length=255, nullable=true)
     */
    private $carte43;

    /**
     * @var string
     *
     * @ORM\Column(name="carte44", type="string", length=255, nullable=true)
     */
    private $carte44;

    /**
     * @var string
     *
     * @ORM\Column(name="carte45", type="string", length=255, nullable=true)
     */
    private $carte45;

    /**
     * @var string
     *
     * @ORM\Column(name="carte46", type="string", length=255, nullable=true)
     */
    private $carte46;

    /**
     * @var string
     *
     * @ORM\Column(name="carte47", type="string", length=255, nullable=true)
     */
    private $carte47;

    /**
     * @var string
     *
     * @ORM\Column(name="carte48", type="string", length=255, nullable=true)
     */
    private $carte48;

    /**
     * @var string
     *
     * @ORM\Column(name="carte49", type="string", length=255, nullable=true)
     */
    private $carte49;

    /**
     * @var string
     *
     * @ORM\Column(name="carte50", type="string", length=255, nullable=true)
     */
    private $carte50;

    /**
     * @var string
     *
     * @ORM\Column(name="carte51", type="string", length=255, nullable=true)
     */
    private $carte51;

    /**
     * @var string
     *
     * @ORM\Column(name="carte52", type="string", length=255, nullable=true)
     */
    private $carte52;

    /**
     * @var string
     *
     * @ORM\Column(name="carte53", type="string", length=255, nullable=true)
     */
    private $carte53;

    /**
     * @var string
     *
     * @ORM\Column(name="carte54", type="string", length=255, nullable=true)
     */
    private $carte54;

    /**
     * @var string
     *
     * @ORM\Column(name="carte55", type="string", length=255, nullable=true)
     */
    private $carte55;

    /**
     * @var string
     *
     * @ORM\Column(name="carte56", type="string", length=255, nullable=true)
     */
    private $carte56;

    /**
     * @var string
     *
     * @ORM\Column(name="carte57", type="string", length=255, nullable=true)
     */
    private $carte57;

    /**
     * @var string
     *
     * @ORM\Column(name="carte58", type="string", length=255, nullable=true)
     */
    private $carte58;

    /**
     * @var string
     *
     * @ORM\Column(name="carte59", type="string", length=255, nullable=true)
     */
    private $carte59;

    /**
     * @var string
     *
     * @ORM\Column(name="carte60", type="string", length=255, nullable=true)
     */
    private $carte60;


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
     * Set idSalon
     *
     * @param string $idSalon
     *
     * @return Position_Salon
     */
    public function setIdSalon($idSalon)
    {
        $this->idSalon = $idSalon;

        return $this;
    }

    /**
     * Get idSalon
     *
     * @return string
     */
    public function getIdSalon()
    {
        return $this->idSalon;
    }

    /**
     * Set carte01
     *
     * @param string $carte1
     *
     * @return Position_Salon
     */
    public function setCarte1($carte1)
    {
        $this->carte1 = $carte1;

        return $this;
    }

    /**
     * Get carte1
     *
     * @return string
     */
    public function getCarte1()
    {
        return $this->carte1;
    }

    /**
     * Set carte2
     *
     * @param string $carte2
     *
     * @return Position_Salon
     */
    public function setCarte2($carte2)
    {
        $this->carte2 = $carte2;

        return $this;
    }

    /**
     * Get carte2
     *
     * @return string
     */
    public function getCarte2()
    {
        return $this->carte2;
    }

    /**
     * Set carte3
     *
     * @param string $carte3
     *
     * @return Position_Salon
     */
    public function setCarte3($carte3)
    {
        $this->carte3 = $carte3;

        return $this;
    }

    /**
     * Get carte3
     *
     * @return string
     */
    public function getCarte3()
    {
        return $this->carte3;
    }

    /**
     * Set carte4
     *
     * @param string $carte4
     *
     * @return Position_Salon
     */
    public function setCarte4($carte4)
    {
        $this->carte4 = $carte4;

        return $this;
    }

    /**
     * Get carte4
     *
     * @return string
     */
    public function getCarte4()
    {
        return $this->carte4;
    }

    /**
     * Set carte5
     *
     * @param string $carte5
     *
     * @return Position_Salon
     */
    public function setCarte5($carte5)
    {
        $this->carte5 = $carte5;

        return $this;
    }

    /**
     * Get carte5
     *
     * @return string
     */
    public function getCarte5()
    {
        return $this->carte5;
    }

    /**
     * Set carte6
     *
     * @param string $carte6
     *
     * @return Position_Salon
     */
    public function setCarte6($carte6)
    {
        $this->carte6 = $carte6;

        return $this;
    }

    /**
     * Get carte6
     *
     * @return string
     */
    public function getCarte6()
    {
        return $this->carte6;
    }

    /**
     * Set carte7
     *
     * @param string $carte7
     *
     * @return Position_Salon
     */
    public function setCarte7($carte7)
    {
        $this->carte7 = $carte7;

        return $this;
    }

    /**
     * Get carte7
     *
     * @return string
     */
    public function getCarte7()
    {
        return $this->carte7;
    }

    /**
     * Set carte8
     *
     * @param string $carte8
     *
     * @return Position_Salon
     */
    public function setCarte8($carte8)
    {
        $this->carte8 = $carte8;

        return $this;
    }

    /**
     * Get carte8
     *
     * @return string
     */
    public function getCarte8()
    {
        return $this->carte8;
    }

    /**
     * Set carte9
     *
     * @param string $carte9
     *
     * @return Position_Salon
     */
    public function setCarte9($carte9)
    {
        $this->carte9 = $carte9;

        return $this;
    }

    /**
     * Get carte9
     *
     * @return string
     */
    public function getCarte9()
    {
        return $this->carte9;
    }

    /**
     * Set carte10
     *
     * @param string $carte10
     *
     * @return Position_Salon
     */
    public function setCarte10($carte10)
    {
        $this->carte10 = $carte10;

        return $this;
    }

    /**
     * Get carte10
     *
     * @return string
     */
    public function getCarte10()
    {
        return $this->carte10;
    }

    /**
     * Set carte11
     *
     * @param string $carte11
     *
     * @return Position_Salon
     */
    public function setCarte11($carte11)
    {
        $this->carte11 = $carte11;

        return $this;
    }

    /**
     * Get carte11
     *
     * @return string
     */
    public function getCarte11()
    {
        return $this->carte11;
    }

    /**
     * Set carte12
     *
     * @param string $carte12
     *
     * @return Position_Salon
     */
    public function setCarte12($carte12)
    {
        $this->carte12 = $carte12;

        return $this;
    }

    /**
     * Get carte12
     *
     * @return string
     */
    public function getCarte12()
    {
        return $this->carte12;
    }

    /**
     * Set carte13
     *
     * @param string $carte13
     *
     * @return Position_Salon
     */
    public function setCarte13($carte13)
    {
        $this->carte13 = $carte13;

        return $this;
    }

    /**
     * Get carte13
     *
     * @return string
     */
    public function getCarte13()
    {
        return $this->carte13;
    }

    /**
     * Set carte14
     *
     * @param string $carte14
     *
     * @return Position_Salon
     */
    public function setCarte14($carte14)
    {
        $this->carte14 = $carte14;

        return $this;
    }

    /**
     * Get carte14
     *
     * @return string
     */
    public function getCarte14()
    {
        return $this->carte14;
    }

    /**
     * Set carte15
     *
     * @param string $carte15
     *
     * @return Position_Salon
     */
    public function setCarte15($carte15)
    {
        $this->carte15 = $carte15;

        return $this;
    }

    /**
     * Get carte15
     *
     * @return string
     */
    public function getCarte15()
    {
        return $this->carte15;
    }

    /**
     * Set carte16
     *
     * @param string $carte16
     *
     * @return Position_Salon
     */
    public function setCarte16($carte16)
    {
        $this->carte16 = $carte16;

        return $this;
    }

    /**
     * Get carte16
     *
     * @return string
     */
    public function getCarte16()
    {
        return $this->carte16;
    }

    /**
     * Set carte17
     *
     * @param string $carte17
     *
     * @return Position_Salon
     */
    public function setCarte17($carte17)
    {
        $this->carte17 = $carte17;

        return $this;
    }

    /**
     * Get carte17
     *
     * @return string
     */
    public function getCarte17()
    {
        return $this->carte17;
    }

    /**
     * Set carte18
     *
     * @param string $carte18
     *
     * @return Position_Salon
     */
    public function setCarte18($carte18)
    {
        $this->carte18 = $carte18;

        return $this;
    }

    /**
     * Get carte18
     *
     * @return string
     */
    public function getCarte18()
    {
        return $this->carte18;
    }

    /**
     * Set carte19
     *
     * @param string $carte19
     *
     * @return Position_Salon
     */
    public function setCarte19($carte19)
    {
        $this->carte19 = $carte19;

        return $this;
    }

    /**
     * Get carte19
     *
     * @return string
     */
    public function getCarte19()
    {
        return $this->carte19;
    }

    /**
     * Set carte20
     *
     * @param string $carte20
     *
     * @return Position_Salon
     */
    public function setCarte20($carte20)
    {
        $this->carte20 = $carte20;

        return $this;
    }

    /**
     * Get carte20
     *
     * @return string
     */
    public function getCarte20()
    {
        return $this->carte20;
    }

    /**
     * Set carte21
     *
     * @param string $carte21
     *
     * @return Position_Salon
     */
    public function setCarte21($carte21)
    {
        $this->carte21 = $carte21;

        return $this;
    }

    /**
     * Get carte21
     *
     * @return string
     */
    public function getCarte21()
    {
        return $this->carte21;
    }

    /**
     * Set carte22
     *
     * @param string $carte22
     *
     * @return Position_Salon
     */
    public function setCarte22($carte22)
    {
        $this->carte22 = $carte22;

        return $this;
    }

    /**
     * Get carte22
     *
     * @return string
     */
    public function getCarte22()
    {
        return $this->carte22;
    }

    /**
     * Set carte23
     *
     * @param string $carte23
     *
     * @return Position_Salon
     */
    public function setCarte23($carte23)
    {
        $this->carte23 = $carte23;

        return $this;
    }

    /**
     * Get carte23
     *
     * @return string
     */
    public function getCarte23()
    {
        return $this->carte23;
    }

    /**
     * Set carte24
     *
     * @param string $carte24
     *
     * @return Position_Salon
     */
    public function setCarte24($carte24)
    {
        $this->carte24 = $carte24;

        return $this;
    }

    /**
     * Get carte24
     *
     * @return string
     */
    public function getCarte24()
    {
        return $this->carte24;
    }

    /**
     * Set carte25
     *
     * @param string $carte25
     *
     * @return Position_Salon
     */
    public function setCarte25($carte25)
    {
        $this->carte25 = $carte25;

        return $this;
    }

    /**
     * Get carte25
     *
     * @return string
     */
    public function getCarte25()
    {
        return $this->carte25;
    }

    /**
     * Set carte26
     *
     * @param string $carte26
     *
     * @return Position_Salon
     */
    public function setCarte26($carte26)
    {
        $this->carte26 = $carte26;

        return $this;
    }

    /**
     * Get carte26
     *
     * @return string
     */
    public function getCarte26()
    {
        return $this->carte26;
    }

    /**
     * Set carte27
     *
     * @param string $carte27
     *
     * @return Position_Salon
     */
    public function setCarte27($carte27)
    {
        $this->carte27 = $carte27;

        return $this;
    }

    /**
     * Get carte27
     *
     * @return string
     */
    public function getCarte27()
    {
        return $this->carte27;
    }

    /**
     * Set carte28
     *
     * @param string $carte28
     *
     * @return Position_Salon
     */
    public function setCarte28($carte28)
    {
        $this->carte28 = $carte28;

        return $this;
    }

    /**
     * Get carte28
     *
     * @return string
     */
    public function getCarte28()
    {
        return $this->carte28;
    }

    /**
     * Set carte29
     *
     * @param string $carte29
     *
     * @return Position_Salon
     */
    public function setCarte29($carte29)
    {
        $this->carte29 = $carte29;

        return $this;
    }

    /**
     * Get carte29
     *
     * @return string
     */
    public function getCarte29()
    {
        return $this->carte29;
    }

    /**
     * Set carte30
     *
     * @param string $carte30
     *
     * @return Position_Salon
     */
    public function setCarte30($carte30)
    {
        $this->carte30 = $carte30;

        return $this;
    }

    /**
     * Get carte30
     *
     * @return string
     */
    public function getCarte30()
    {
        return $this->carte30;
    }

    /**
     * Set carte31
     *
     * @param string $carte31
     *
     * @return Position_Salon
     */
    public function setCarte31($carte31)
    {
        $this->carte31 = $carte31;

        return $this;
    }

    /**
     * Get carte31
     *
     * @return string
     */
    public function getCarte31()
    {
        return $this->carte31;
    }

    /**
     * Set carte32
     *
     * @param string $carte32
     *
     * @return Position_Salon
     */
    public function setCarte32($carte32)
    {
        $this->carte32 = $carte32;

        return $this;
    }

    /**
     * Get carte32
     *
     * @return string
     */
    public function getCarte32()
    {
        return $this->carte32;
    }

    /**
     * Set carte33
     *
     * @param string $carte33
     *
     * @return Position_Salon
     */
    public function setCarte33($carte33)
    {
        $this->carte33 = $carte33;

        return $this;
    }

    /**
     * Get carte33
     *
     * @return string
     */
    public function getCarte33()
    {
        return $this->carte33;
    }

    /**
     * Set carte34
     *
     * @param string $carte34
     *
     * @return Position_Salon
     */
    public function setCarte34($carte34)
    {
        $this->carte34 = $carte34;

        return $this;
    }

    /**
     * Get carte34
     *
     * @return string
     */
    public function getCarte34()
    {
        return $this->carte34;
    }

    /**
     * Set carte35
     *
     * @param string $carte35
     *
     * @return Position_Salon
     */
    public function setCarte35($carte35)
    {
        $this->carte35 = $carte35;

        return $this;
    }

    /**
     * Get carte35
     *
     * @return string
     */
    public function getCarte35()
    {
        return $this->carte35;
    }

    /**
     * Set carte36
     *
     * @param string $carte36
     *
     * @return Position_Salon
     */
    public function setCarte36($carte36)
    {
        $this->carte36 = $carte36;

        return $this;
    }

    /**
     * Get carte36
     *
     * @return string
     */
    public function getCarte36()
    {
        return $this->carte36;
    }

    /**
     * Set carte37
     *
     * @param string $carte37
     *
     * @return Position_Salon
     */
    public function setCarte37($carte37)
    {
        $this->carte37 = $carte37;

        return $this;
    }

    /**
     * Get carte37
     *
     * @return string
     */
    public function getCarte37()
    {
        return $this->carte37;
    }

    /**
     * Set carte38
     *
     * @param string $carte38
     *
     * @return Position_Salon
     */
    public function setCarte38($carte38)
    {
        $this->carte38 = $carte38;

        return $this;
    }

    /**
     * Get carte38
     *
     * @return string
     */
    public function getCarte38()
    {
        return $this->carte38;
    }

    /**
     * Set carte39
     *
     * @param string $carte39
     *
     * @return Position_Salon
     */
    public function setCarte39($carte39)
    {
        $this->carte39 = $carte39;

        return $this;
    }

    /**
     * Get carte39
     *
     * @return string
     */
    public function getCarte39()
    {
        return $this->carte39;
    }

    /**
     * Set carte40
     *
     * @param string $carte40
     *
     * @return Position_Salon
     */
    public function setCarte40($carte40)
    {
        $this->carte40 = $carte40;

        return $this;
    }

    /**
     * Get carte40
     *
     * @return string
     */
    public function getCarte40()
    {
        return $this->carte40;
    }

    /**
     * Set carte41
     *
     * @param string $carte41
     *
     * @return Position_Salon
     */
    public function setCarte41($carte41)
    {
        $this->carte41 = $carte41;

        return $this;
    }

    /**
     * Get carte41
     *
     * @return string
     */
    public function getCarte41()
    {
        return $this->carte41;
    }

    /**
     * Set carte42
     *
     * @param string $carte42
     *
     * @return Position_Salon
     */
    public function setCarte42($carte42)
    {
        $this->carte42 = $carte42;

        return $this;
    }

    /**
     * Get carte42
     *
     * @return string
     */
    public function getCarte42()
    {
        return $this->carte42;
    }

    /**
     * Set carte43
     *
     * @param string $carte43
     *
     * @return Position_Salon
     */
    public function setCarte43($carte43)
    {
        $this->carte43 = $carte43;

        return $this;
    }

    /**
     * Get carte43
     *
     * @return string
     */
    public function getCarte43()
    {
        return $this->carte43;
    }

    /**
     * Set carte44
     *
     * @param string $carte44
     *
     * @return Position_Salon
     */
    public function setCarte44($carte44)
    {
        $this->carte44 = $carte44;

        return $this;
    }

    /**
     * Get carte44
     *
     * @return string
     */
    public function getCarte44()
    {
        return $this->carte44;
    }

    /**
     * Set carte45
     *
     * @param string $carte45
     *
     * @return Position_Salon
     */
    public function setCarte45($carte45)
    {
        $this->carte45 = $carte45;

        return $this;
    }

    /**
     * Get carte45
     *
     * @return string
     */
    public function getCarte45()
    {
        return $this->carte45;
    }

    /**
     * Set carte46
     *
     * @param string $carte46
     *
     * @return Position_Salon
     */
    public function setCarte46($carte46)
    {
        $this->carte46 = $carte46;

        return $this;
    }

    /**
     * Get carte46
     *
     * @return string
     */
    public function getCarte46()
    {
        return $this->carte46;
    }

    /**
     * Set carte47
     *
     * @param string $carte47
     *
     * @return Position_Salon
     */
    public function setCarte47($carte47)
    {
        $this->carte47 = $carte47;

        return $this;
    }

    /**
     * Get carte47
     *
     * @return string
     */
    public function getCarte47()
    {
        return $this->carte47;
    }

    /**
     * Set carte48
     *
     * @param string $carte48
     *
     * @return Position_Salon
     */
    public function setCarte48($carte48)
    {
        $this->carte48 = $carte48;

        return $this;
    }

    /**
     * Get carte48
     *
     * @return string
     */
    public function getCarte48()
    {
        return $this->carte48;
    }

    /**
     * Set carte49
     *
     * @param string $carte49
     *
     * @return Position_Salon
     */
    public function setCarte49($carte49)
    {
        $this->carte49 = $carte49;

        return $this;
    }

    /**
     * Get carte49
     *
     * @return string
     */
    public function getCarte49()
    {
        return $this->carte49;
    }

    /**
     * Set carte50
     *
     * @param string $carte50
     *
     * @return Position_Salon
     */
    public function setCarte50($carte50)
    {
        $this->carte50 = $carte50;

        return $this;
    }

    /**
     * Get carte50
     *
     * @return string
     */
    public function getCarte50()
    {
        return $this->carte50;
    }

    /**
     * Set carte51
     *
     * @param string $carte51
     *
     * @return Position_Salon
     */
    public function setCarte51($carte51)
    {
        $this->carte51 = $carte51;

        return $this;
    }

    /**
     * Get carte51
     *
     * @return string
     */
    public function getCarte51()
    {
        return $this->carte51;
    }

    /**
     * Set carte52
     *
     * @param string $carte52
     *
     * @return Position_Salon
     */
    public function setCarte52($carte52)
    {
        $this->carte52 = $carte52;

        return $this;
    }

    /**
     * Get carte52
     *
     * @return string
     */
    public function getCarte52()
    {
        return $this->carte52;
    }

    /**
     * Set carte53
     *
     * @param string $carte53
     *
     * @return Position_Salon
     */
    public function setCarte53($carte53)
    {
        $this->carte53 = $carte53;

        return $this;
    }

    /**
     * Get carte53
     *
     * @return string
     */
    public function getCarte53()
    {
        return $this->carte53;
    }

    /**
     * Set carte54
     *
     * @param string $carte54
     *
     * @return Position_Salon
     */
    public function setCarte54($carte54)
    {
        $this->carte54 = $carte54;

        return $this;
    }

    /**
     * Get carte54
     *
     * @return string
     */
    public function getCarte54()
    {
        return $this->carte54;
    }

    /**
     * Set carte55
     *
     * @param string $carte55
     *
     * @return Position_Salon
     */
    public function setCarte55($carte55)
    {
        $this->carte55 = $carte55;

        return $this;
    }

    /**
     * Get carte55
     *
     * @return string
     */
    public function getCarte55()
    {
        return $this->carte55;
    }

    /**
     * Set carte56
     *
     * @param string $carte56
     *
     * @return Position_Salon
     */
    public function setCarte56($carte56)
    {
        $this->carte56 = $carte56;

        return $this;
    }

    /**
     * Get carte56
     *
     * @return string
     */
    public function getCarte56()
    {
        return $this->carte56;
    }

    /**
     * Set carte57
     *
     * @param string $carte57
     *
     * @return Position_Salon
     */
    public function setCarte57($carte57)
    {
        $this->carte57 = $carte57;

        return $this;
    }

    /**
     * Get carte57
     *
     * @return string
     */
    public function getCarte57()
    {
        return $this->carte57;
    }

    /**
     * Set carte58
     *
     * @param string $carte58
     *
     * @return Position_Salon
     */
    public function setCarte58($carte58)
    {
        $this->carte58 = $carte58;

        return $this;
    }

    /**
     * Get carte58
     *
     * @return string
     */
    public function getCarte58()
    {
        return $this->carte58;
    }

    /**
     * Set carte59
     *
     * @param string $carte59
     *
     * @return Position_Salon
     */
    public function setCarte59($carte59)
    {
        $this->carte59 = $carte59;

        return $this;
    }

    /**
     * Get carte59
     *
     * @return string
     */
    public function getCarte59()
    {
        return $this->carte59;
    }

    /**
     * Set carte60
     *
     * @param string $carte60
     *
     * @return Position_Salon
     */
    public function setCarte60($carte60)
    {
        $this->carte60 = $carte60;

        return $this;
    }

    /**
     * Get carte60
     *
     * @return string
     */
    public function getCarte60()
    {
        return $this->carte60;
    }
}

