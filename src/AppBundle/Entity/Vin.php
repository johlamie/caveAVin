<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vin
 *
 * @ORM\Table(name="vin", indexes={@ORM\Index(name="IDX_B108514168966F", columns={"id_appellation"})})
 * @ORM\Entity
 */
class Vin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vin_id_vin_seq", allocationSize=1, initialValue=1)
     */
    private $idVin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vin", type="string", length=30, nullable=false)
     */
    private $nomVin;

    /**
     * @var string
     *
     * @ORM\Column(name="type_vin", type="string", length=15, nullable=true)
     */
    private $typeVin;

    /**
     * @var \Origine
     *
     * @ORM\ManyToOne(targetEntity="Origine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_appellation", referencedColumnName="id_appellation")
     * })
     */
    private $idAppellation;


    /**
     * @return int
     */
    public function getIdVin()
    {
        return $this->idVin;
    }

    /**
     * @param int $idVin
     */
    public function setIdVin(int $idVin): void
    {
        $this->idVin = $idVin;
    }

    /**
     * @return \Origine
     */
    public function getIdAppellation()
    {
        return $this->idAppellation;
    }

    /**
     * @return string
     */
    public function getNomVin()
    {
        return $this->nomVin;
    }

    /**
     * @return string
     */
    public function getTypeVin()
    {
        return $this->typeVin;
    }

    /**
     * @param string $nomVin
     */
    public function setNomVin($nomVin)
    {
        $this->nomVin = $nomVin;
    }

    /**
     * @param string $typeVin
     */
    public function setTypeVin($typeVin)
    {
        $this->typeVin = $typeVin;
    }

    /**
     * @param \Origine $idAppellation
     */
    public function setIdAppellation($idAppellation)
    {
        $this->idAppellation = $idAppellation;
    }

}

