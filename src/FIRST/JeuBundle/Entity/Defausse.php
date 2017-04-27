<?php

namespace FIRST\JeuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * defausse
 *
 * @ORM\Table(name="defausse")
 * @ORM\Entity(repositoryClass="FIRST\JeuBundle\Repository\defausseRepository")
 */
class Defausse
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
     * @ORM\Column(name="salid", type="integer", unique=true)
     */
    private $salid;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_1", type="string", length=255, nullable=true)
     */
    private $colonne11;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_2", type="string", length=255, nullable=true)
     */
    private $colonne12;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_3", type="string", length=255, nullable=true)
     */
    private $colonne13;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_4", type="string", length=255, nullable=true)
     */
    private $colonne14;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_5", type="string", length=255, nullable=true)
     */
    private $colonne15;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_6", type="string", length=255, nullable=true)
     */
    private $colonne16;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_7", type="string", length=255, nullable=true)
     */
    private $colonne17;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_8", type="string", length=255, nullable=true)
     */
    private $colonne18;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_9", type="string", length=255, nullable=true)
     */
    private $colonne19;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_10", type="string", length=255, nullable=true)
     */
    private $colonne110;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_11", type="string", length=255, nullable=true)
     */
    private $colonne111;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne1_12", type="string", length=255, nullable=true)
     */
    private $colonne112;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_1", type="string", length=255, nullable=true)
     */
    private $colonne21;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_2", type="string", length=255, nullable=true)
     */
    private $colonne22;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_3", type="string", length=255, nullable=true)
     */
    private $colonne23;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_4", type="string", length=255, nullable=true)
     */
    private $colonne24;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_5", type="string", length=255, nullable=true)
     */
    private $colonne25;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_6", type="string", length=255, nullable=true)
     */
    private $colonne26;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_7", type="string", length=255, nullable=true)
     */
    private $colonne27;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_8", type="string", length=255, nullable=true)
     */
    private $colonne28;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_9", type="string", length=255, nullable=true)
     */
    private $colonne29;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_10", type="string", length=255, nullable=true)
     */
    private $colonne210;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_11", type="string", length=255, nullable=true)
     */
    private $colonne211;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne2_12", type="string", length=255, nullable=true)
     */
    private $colonne212;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_1", type="string", length=255, nullable=true)
     */
    private $colonne31;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_2", type="string", length=255, nullable=true)
     */
    private $colonne32;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_3", type="string", length=255, nullable=true)
     */
    private $colonne33;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_4", type="string", length=255, nullable=true)
     */
    private $colonne34;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_5", type="string", length=255, nullable=true)
     */
    private $colonne35;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_6", type="string", length=255, nullable=true)
     */
    private $colonne36;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_7", type="string", length=255, nullable=true)
     */
    private $colonne37;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_8", type="string", length=255, nullable=true)
     */
    private $colonne38;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_9", type="string", length=255, nullable=true)
     */
    private $colonne39;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_10", type="string", length=255, nullable=true)
     */
    private $colonne310;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_11", type="string", length=255, nullable=true)
     */
    private $colonne311;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne3_12", type="string", length=255, nullable=true)
     */
    private $colonne312;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_1", type="string", length=255, nullable=true)
     */
    private $colonne41;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_2", type="string", length=255, nullable=true)
     */
    private $colonne42;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_3", type="string", length=255, nullable=true)
     */
    private $colonne43;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_4", type="string", length=255, nullable=true)
     */
    private $colonne44;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_5", type="string", length=255, nullable=true)
     */
    private $colonne45;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_6", type="string", length=255, nullable=true)
     */
    private $colonne46;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_7", type="string", length=255, nullable=true)
     */
    private $colonne47;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_8", type="string", length=255, nullable=true)
     */
    private $colonne48;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_9", type="string", length=255, nullable=true)
     */
    private $colonne49;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_10", type="string", length=255, nullable=true)
     */
    private $colonne410;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_11", type="string", length=255, nullable=true)
     */
    private $colonne411;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne4_12", type="string", length=255, nullable=true)
     */
    private $colonne412;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_1", type="string", length=255, nullable=true)
     */
    private $colonne51;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_2", type="string", length=255, nullable=true)
     */
    private $colonne52;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_3", type="string", length=255, nullable=true)
     */
    private $colonne53;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_4", type="string", length=255, nullable=true)
     */
    private $colonne54;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_5", type="string", length=255, nullable=true)
     */
    private $colonne55;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_6", type="string", length=255, nullable=true)
     */
    private $colonne56;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_7", type="string", length=255, nullable=true)
     */
    private $colonne57;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_8", type="string", length=255, nullable=true)
     */
    private $colonne58;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_9", type="string", length=255, nullable=true)
     */
    private $colonne59;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_10", type="string", length=255, nullable=true)
     */
    private $colonne510;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_11", type="string", length=255, nullable=true)
     */
    private $colonne511;

    /**
     * @var string
     *
     * @ORM\Column(name="colonne5_12", type="string", length=255, nullable=true)
     */
    private $colonne512;


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
     * Set salid
     *
     * @param integer $salid
     *
     * @return defausse
     */
    public function setSalid($salid)
    {
        $this->salid = $salid;

        return $this;
    }

    /**
     * Get salid
     *
     * @return int
     */
    public function getSalid()
    {
        return $this->salid;
    }

    /**
     * Set colonne11
     *
     * @param string $colonne11
     *
     * @return defausse
     */
    public function setColonne11($colonne11)
    {
        $this->colonne11 = $colonne11;

        return $this;
    }

    /**
     * Get colonne11
     *
     * @return string
     */
    public function getColonne11()
    {
        return $this->colonne11;
    }

    /**
     * Set colonne12
     *
     * @param string $colonne12
     *
     * @return defausse
     */
    public function setColonne12($colonne12)
    {
        $this->colonne12 = $colonne12;

        return $this;
    }

    /**
     * Get colonne12
     *
     * @return string
     */
    public function getColonne12()
    {
        return $this->colonne12;
    }

    /**
     * Set colonne13
     *
     * @param string $colonne13
     *
     * @return defausse
     */
    public function setColonne13($colonne13)
    {
        $this->colonne13 = $colonne13;

        return $this;
    }

    /**
     * Get colonne13
     *
     * @return string
     */
    public function getColonne13()
    {
        return $this->colonne13;
    }

    /**
     * Set colonne14
     *
     * @param string $colonne14
     *
     * @return defausse
     */
    public function setColonne14($colonne14)
    {
        $this->colonne14 = $colonne14;

        return $this;
    }

    /**
     * Get colonne14
     *
     * @return string
     */
    public function getColonne14()
    {
        return $this->colonne14;
    }

    /**
     * Set colonne15
     *
     * @param string $colonne15
     *
     * @return defausse
     */
    public function setColonne15($colonne15)
    {
        $this->colonne15 = $colonne15;

        return $this;
    }

    /**
     * Get colonne15
     *
     * @return string
     */
    public function getColonne15()
    {
        return $this->colonne15;
    }

    /**
     * Set colonne16
     *
     * @param string $colonne16
     *
     * @return defausse
     */
    public function setColonne16($colonne16)
    {
        $this->colonne16 = $colonne16;

        return $this;
    }

    /**
     * Get colonne16
     *
     * @return string
     */
    public function getColonne16()
    {
        return $this->colonne16;
    }

    /**
     * Set colonne17
     *
     * @param string $colonne17
     *
     * @return defausse
     */
    public function setColonne17($colonne17)
    {
        $this->colonne17 = $colonne17;

        return $this;
    }

    /**
     * Get colonne17
     *
     * @return string
     */
    public function getColonne17()
    {
        return $this->colonne17;
    }

    /**
     * Set colonne18
     *
     * @param string $colonne18
     *
     * @return defausse
     */
    public function setColonne18($colonne18)
    {
        $this->colonne18 = $colonne18;

        return $this;
    }

    /**
     * Get colonne18
     *
     * @return string
     */
    public function getColonne18()
    {
        return $this->colonne18;
    }

    /**
     * Set colonne19
     *
     * @param string $colonne19
     *
     * @return defausse
     */
    public function setColonne19($colonne19)
    {
        $this->colonne19 = $colonne19;

        return $this;
    }

    /**
     * Get colonne19
     *
     * @return string
     */
    public function getColonne19()
    {
        return $this->colonne19;
    }

    /**
     * Set colonne110
     *
     * @param string $colonne110
     *
     * @return defausse
     */
    public function setColonne110($colonne110)
    {
        $this->colonne110 = $colonne110;

        return $this;
    }

    /**
     * Get colonne110
     *
     * @return string
     */
    public function getColonne110()
    {
        return $this->colonne110;
    }

    /**
     * Set colonne111
     *
     * @param string $colonne111
     *
     * @return defausse
     */
    public function setColonne111($colonne111)
    {
        $this->colonne111 = $colonne111;

        return $this;
    }

    /**
     * Get colonne111
     *
     * @return string
     */
    public function getColonne111()
    {
        return $this->colonne111;
    }

    /**
     * Set colonne112
     *
     * @param string $colonne112
     *
     * @return defausse
     */
    public function setColonne112($colonne112)
    {
        $this->colonne112 = $colonne112;

        return $this;
    }

    /**
     * Get colonne112
     *
     * @return string
     */
    public function getColonne112()
    {
        return $this->colonne112;
    }

    /**
     * Set colonne21
     *
     * @param string $colonne21
     *
     * @return defausse
     */
    public function setColonne21($colonne21)
    {
        $this->colonne21 = $colonne21;

        return $this;
    }

    /**
     * Get colonne21
     *
     * @return string
     */
    public function getColonne21()
    {
        return $this->colonne21;
    }

    /**
     * Set colonne22
     *
     * @param string $colonne22
     *
     * @return defausse
     */
    public function setColonne22($colonne22)
    {
        $this->colonne22 = $colonne22;

        return $this;
    }

    /**
     * Get colonne22
     *
     * @return string
     */
    public function getColonne22()
    {
        return $this->colonne22;
    }

    /**
     * Set colonne23
     *
     * @param string $colonne23
     *
     * @return defausse
     */
    public function setColonne23($colonne23)
    {
        $this->colonne23 = $colonne23;

        return $this;
    }

    /**
     * Get colonne23
     *
     * @return string
     */
    public function getColonne23()
    {
        return $this->colonne23;
    }

    /**
     * Set colonne24
     *
     * @param string $colonne24
     *
     * @return defausse
     */
    public function setColonne24($colonne24)
    {
        $this->colonne24 = $colonne24;

        return $this;
    }

    /**
     * Get colonne24
     *
     * @return string
     */
    public function getColonne24()
    {
        return $this->colonne24;
    }

    /**
     * Set colonne25
     *
     * @param string $colonne25
     *
     * @return defausse
     */
    public function setColonne25($colonne25)
    {
        $this->colonne25 = $colonne25;

        return $this;
    }

    /**
     * Get colonne25
     *
     * @return string
     */
    public function getColonne25()
    {
        return $this->colonne25;
    }

    /**
     * Set colonne26
     *
     * @param string $colonne26
     *
     * @return defausse
     */
    public function setColonne26($colonne26)
    {
        $this->colonne26 = $colonne26;

        return $this;
    }

    /**
     * Get colonne26
     *
     * @return string
     */
    public function getColonne26()
    {
        return $this->colonne26;
    }

    /**
     * Set colonne27
     *
     * @param string $colonne27
     *
     * @return defausse
     */
    public function setColonne27($colonne27)
    {
        $this->colonne27 = $colonne27;

        return $this;
    }

    /**
     * Get colonne27
     *
     * @return string
     */
    public function getColonne27()
    {
        return $this->colonne27;
    }

    /**
     * Set colonne28
     *
     * @param string $colonne28
     *
     * @return defausse
     */
    public function setColonne28($colonne28)
    {
        $this->colonne28 = $colonne28;

        return $this;
    }

    /**
     * Get colonne28
     *
     * @return string
     */
    public function getColonne28()
    {
        return $this->colonne28;
    }

    /**
     * Set colonne29
     *
     * @param string $colonne29
     *
     * @return defausse
     */
    public function setColonne29($colonne29)
    {
        $this->colonne29 = $colonne29;

        return $this;
    }

    /**
     * Get colonne29
     *
     * @return string
     */
    public function getColonne29()
    {
        return $this->colonne29;
    }

    /**
     * Set colonne210
     *
     * @param string $colonne210
     *
     * @return defausse
     */
    public function setColonne210($colonne210)
    {
        $this->colonne210 = $colonne210;

        return $this;
    }

    /**
     * Get colonne210
     *
     * @return string
     */
    public function getColonne210()
    {
        return $this->colonne210;
    }

    /**
     * Set colonne211
     *
     * @param string $colonne211
     *
     * @return defausse
     */
    public function setColonne211($colonne211)
    {
        $this->colonne211 = $colonne211;

        return $this;
    }

    /**
     * Get colonne211
     *
     * @return string
     */
    public function getColonne211()
    {
        return $this->colonne211;
    }

    /**
     * Set colonne212
     *
     * @param string $colonne212
     *
     * @return defausse
     */
    public function setColonne212($colonne212)
    {
        $this->colonne212 = $colonne212;

        return $this;
    }

    /**
     * Get colonne212
     *
     * @return string
     */
    public function getColonne212()
    {
        return $this->colonne212;
    }

    /**
     * Set colonne31
     *
     * @param string $colonne31
     *
     * @return defausse
     */
    public function setColonne31($colonne31)
    {
        $this->colonne31 = $colonne31;

        return $this;
    }

    /**
     * Get colonne31
     *
     * @return string
     */
    public function getColonne31()
    {
        return $this->colonne31;
    }

    /**
     * Set colonne32
     *
     * @param string $colonne32
     *
     * @return defausse
     */
    public function setColonne32($colonne32)
    {
        $this->colonne32 = $colonne32;

        return $this;
    }

    /**
     * Get colonne32
     *
     * @return string
     */
    public function getColonne32()
    {
        return $this->colonne32;
    }

    /**
     * Set colonne33
     *
     * @param string $colonne33
     *
     * @return defausse
     */
    public function setColonne33($colonne33)
    {
        $this->colonne33 = $colonne33;

        return $this;
    }

    /**
     * Get colonne33
     *
     * @return string
     */
    public function getColonne33()
    {
        return $this->colonne33;
    }

    /**
     * Set colonne34
     *
     * @param string $colonne34
     *
     * @return defausse
     */
    public function setColonne34($colonne34)
    {
        $this->colonne34 = $colonne34;

        return $this;
    }

    /**
     * Get colonne34
     *
     * @return string
     */
    public function getColonne34()
    {
        return $this->colonne34;
    }

    /**
     * Set colonne35
     *
     * @param string $colonne35
     *
     * @return defausse
     */
    public function setColonne35($colonne35)
    {
        $this->colonne35 = $colonne35;

        return $this;
    }

    /**
     * Get colonne35
     *
     * @return string
     */
    public function getColonne35()
    {
        return $this->colonne35;
    }

    /**
     * Set colonne36
     *
     * @param string $colonne36
     *
     * @return defausse
     */
    public function setColonne36($colonne36)
    {
        $this->colonne36 = $colonne36;

        return $this;
    }

    /**
     * Get colonne36
     *
     * @return string
     */
    public function getColonne36()
    {
        return $this->colonne36;
    }

    /**
     * Set colonne37
     *
     * @param string $colonne37
     *
     * @return defausse
     */
    public function setColonne37($colonne37)
    {
        $this->colonne37 = $colonne37;

        return $this;
    }

    /**
     * Get colonne37
     *
     * @return string
     */
    public function getColonne37()
    {
        return $this->colonne37;
    }

    /**
     * Set colonne38
     *
     * @param string $colonne38
     *
     * @return defausse
     */
    public function setColonne38($colonne38)
    {
        $this->colonne38 = $colonne38;

        return $this;
    }

    /**
     * Get colonne38
     *
     * @return string
     */
    public function getColonne38()
    {
        return $this->colonne38;
    }

    /**
     * Set colonne39
     *
     * @param string $colonne39
     *
     * @return defausse
     */
    public function setColonne39($colonne39)
    {
        $this->colonne39 = $colonne39;

        return $this;
    }

    /**
     * Get colonne39
     *
     * @return string
     */
    public function getColonne39()
    {
        return $this->colonne39;
    }

    /**
     * Set colonne310
     *
     * @param string $colonne310
     *
     * @return defausse
     */
    public function setColonne310($colonne310)
    {
        $this->colonne310 = $colonne310;

        return $this;
    }

    /**
     * Get colonne310
     *
     * @return string
     */
    public function getColonne310()
    {
        return $this->colonne310;
    }

    /**
     * Set colonne311
     *
     * @param string $colonne311
     *
     * @return defausse
     */
    public function setColonne311($colonne311)
    {
        $this->colonne311 = $colonne311;

        return $this;
    }

    /**
     * Get colonne311
     *
     * @return string
     */
    public function getColonne311()
    {
        return $this->colonne311;
    }

    /**
     * Set colonne312
     *
     * @param string $colonne312
     *
     * @return defausse
     */
    public function setColonne312($colonne312)
    {
        $this->colonne312 = $colonne312;

        return $this;
    }

    /**
     * Get colonne312
     *
     * @return string
     */
    public function getColonne312()
    {
        return $this->colonne312;
    }

    /**
     * Set colonne41
     *
     * @param string $colonne41
     *
     * @return defausse
     */
    public function setColonne41($colonne41)
    {
        $this->colonne41 = $colonne41;

        return $this;
    }

    /**
     * Get colonne41
     *
     * @return string
     */
    public function getColonne41()
    {
        return $this->colonne41;
    }

    /**
     * Set colonne42
     *
     * @param string $colonne42
     *
     * @return defausse
     */
    public function setColonne42($colonne42)
    {
        $this->colonne42 = $colonne42;

        return $this;
    }

    /**
     * Get colonne42
     *
     * @return string
     */
    public function getColonne42()
    {
        return $this->colonne42;
    }

    /**
     * Set colonne43
     *
     * @param string $colonne43
     *
     * @return defausse
     */
    public function setColonne43($colonne43)
    {
        $this->colonne43 = $colonne43;

        return $this;
    }

    /**
     * Get colonne43
     *
     * @return string
     */
    public function getColonne43()
    {
        return $this->colonne43;
    }

    /**
     * Set colonne44
     *
     * @param string $colonne44
     *
     * @return defausse
     */
    public function setColonne44($colonne44)
    {
        $this->colonne44 = $colonne44;

        return $this;
    }

    /**
     * Get colonne44
     *
     * @return string
     */
    public function getColonne44()
    {
        return $this->colonne44;
    }

    /**
     * Set colonne45
     *
     * @param string $colonne45
     *
     * @return defausse
     */
    public function setColonne45($colonne45)
    {
        $this->colonne45 = $colonne45;

        return $this;
    }

    /**
     * Get colonne45
     *
     * @return string
     */
    public function getColonne45()
    {
        return $this->colonne45;
    }

    /**
     * Set colonne46
     *
     * @param string $colonne46
     *
     * @return defausse
     */
    public function setColonne46($colonne46)
    {
        $this->colonne46 = $colonne46;

        return $this;
    }

    /**
     * Get colonne46
     *
     * @return string
     */
    public function getColonne46()
    {
        return $this->colonne46;
    }

    /**
     * Set colonne47
     *
     * @param string $colonne47
     *
     * @return defausse
     */
    public function setColonne47($colonne47)
    {
        $this->colonne47 = $colonne47;

        return $this;
    }

    /**
     * Get colonne47
     *
     * @return string
     */
    public function getColonne47()
    {
        return $this->colonne47;
    }

    /**
     * Set colonne48
     *
     * @param string $colonne48
     *
     * @return defausse
     */
    public function setColonne48($colonne48)
    {
        $this->colonne48 = $colonne48;

        return $this;
    }

    /**
     * Get colonne48
     *
     * @return string
     */
    public function getColonne48()
    {
        return $this->colonne48;
    }

    /**
     * Set colonne49
     *
     * @param string $colonne49
     *
     * @return defausse
     */
    public function setColonne49($colonne49)
    {
        $this->colonne49 = $colonne49;

        return $this;
    }

    /**
     * Get colonne49
     *
     * @return string
     */
    public function getColonne49()
    {
        return $this->colonne49;
    }

    /**
     * Set colonne410
     *
     * @param string $colonne410
     *
     * @return defausse
     */
    public function setColonne410($colonne410)
    {
        $this->colonne410 = $colonne410;

        return $this;
    }

    /**
     * Get colonne410
     *
     * @return string
     */
    public function getColonne410()
    {
        return $this->colonne410;
    }

    /**
     * Set colonne411
     *
     * @param string $colonne411
     *
     * @return defausse
     */
    public function setColonne411($colonne411)
    {
        $this->colonne411 = $colonne411;

        return $this;
    }

    /**
     * Get colonne411
     *
     * @return string
     */
    public function getColonne411()
    {
        return $this->colonne411;
    }

    /**
     * Set colonne412
     *
     * @param string $colonne412
     *
     * @return defausse
     */
    public function setColonne412($colonne412)
    {
        $this->colonne412 = $colonne412;

        return $this;
    }

    /**
     * Get colonne412
     *
     * @return string
     */
    public function getColonne412()
    {
        return $this->colonne412;
    }

    /**
     * Set colonne51
     *
     * @param string $colonne51
     *
     * @return defausse
     */
    public function setColonne51($colonne51)
    {
        $this->colonne51 = $colonne51;

        return $this;
    }

    /**
     * Get colonne51
     *
     * @return string
     */
    public function getColonne51()
    {
        return $this->colonne51;
    }

    /**
     * Set colonne52
     *
     * @param string $colonne52
     *
     * @return defausse
     */
    public function setColonne52($colonne52)
    {
        $this->colonne52 = $colonne52;

        return $this;
    }

    /**
     * Get colonne52
     *
     * @return string
     */
    public function getColonne52()
    {
        return $this->colonne52;
    }

    /**
     * Set colonne53
     *
     * @param string $colonne53
     *
     * @return defausse
     */
    public function setColonne53($colonne53)
    {
        $this->colonne53 = $colonne53;

        return $this;
    }

    /**
     * Get colonne53
     *
     * @return string
     */
    public function getColonne53()
    {
        return $this->colonne53;
    }

    /**
     * Set colonne54
     *
     * @param string $colonne54
     *
     * @return defausse
     */
    public function setColonne54($colonne54)
    {
        $this->colonne54 = $colonne54;

        return $this;
    }

    /**
     * Get colonne54
     *
     * @return string
     */
    public function getColonne54()
    {
        return $this->colonne54;
    }

    /**
     * Set colonne55
     *
     * @param string $colonne55
     *
     * @return defausse
     */
    public function setColonne55($colonne55)
    {
        $this->colonne55 = $colonne55;

        return $this;
    }

    /**
     * Get colonne55
     *
     * @return string
     */
    public function getColonne55()
    {
        return $this->colonne55;
    }

    /**
     * Set colonne56
     *
     * @param string $colonne56
     *
     * @return defausse
     */
    public function setColonne56($colonne56)
    {
        $this->colonne56 = $colonne56;

        return $this;
    }

    /**
     * Get colonne56
     *
     * @return string
     */
    public function getColonne56()
    {
        return $this->colonne56;
    }

    /**
     * Set colonne57
     *
     * @param string $colonne57
     *
     * @return defausse
     */
    public function setColonne57($colonne57)
    {
        $this->colonne57 = $colonne57;

        return $this;
    }

    /**
     * Get colonne57
     *
     * @return string
     */
    public function getColonne57()
    {
        return $this->colonne57;
    }

    /**
     * Set colonne58
     *
     * @param string $colonne58
     *
     * @return defausse
     */
    public function setColonne58($colonne58)
    {
        $this->colonne58 = $colonne58;

        return $this;
    }

    /**
     * Get colonne58
     *
     * @return string
     */
    public function getColonne58()
    {
        return $this->colonne58;
    }

    /**
     * Set colonne59
     *
     * @param string $colonne59
     *
     * @return defausse
     */
    public function setColonne59($colonne59)
    {
        $this->colonne59 = $colonne59;

        return $this;
    }

    /**
     * Get colonne59
     *
     * @return string
     */
    public function getColonne59()
    {
        return $this->colonne59;
    }

    /**
     * Set colonne510
     *
     * @param string $colonne510
     *
     * @return defausse
     */
    public function setColonne510($colonne510)
    {
        $this->colonne510 = $colonne510;

        return $this;
    }

    /**
     * Get colonne510
     *
     * @return string
     */
    public function getColonne510()
    {
        return $this->colonne510;
    }

    /**
     * Set colonne511
     *
     * @param string $colonne511
     *
     * @return defausse
     */
    public function setColonne511($colonne511)
    {
        $this->colonne511 = $colonne511;

        return $this;
    }

    /**
     * Get colonne511
     *
     * @return string
     */
    public function getColonne511()
    {
        return $this->colonne511;
    }

    /**
     * Set colonne512
     *
     * @param string $colonne512
     *
     * @return defausse
     */
    public function setColonne512($colonne512)
    {
        $this->colonne512 = $colonne512;

        return $this;
    }

    /**
     * Get colonne512
     *
     * @return string
     */
    public function getColonne512()
    {
        return $this->colonne512;
    }
}

