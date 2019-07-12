<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Origine
 *
 * @ORM\Table(name="origine")
 * @ORM\Entity
 */
class Origine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_appellation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="origine_id_appellation_seq", allocationSize=1, initialValue=1)
     */
    private $idAppellation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_appellation", type="string", length=30, nullable=false)
     */
    private $nomAppellation;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=30, nullable=false)
     */
    private $region;


    /**
     * @return int
     */
    public function getIdAppellation()
    {
        return $this->idAppellation;
    }

    /**
     * @return string
     */
    public function getNomAppellation()
    {
        return $this->nomAppellation;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }


    /**
     * @param string $nomAppellation
     */
    public function setNomAppellation($nomAppellation)
    {
        $this->nomAppellation = $nomAppellation;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

}

