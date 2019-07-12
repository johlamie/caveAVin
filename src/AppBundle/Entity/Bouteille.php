<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bouteille
 *
 * @ORM\Table(name="bouteille", indexes={@ORM\Index(name="IDX_11157C4C2FACB91B", columns={"id_vin"})})
 * @ORM\Entity
 */
class Bouteille
{
    /**
     * @var integer
     *
     * @ORM\Column(name="millesime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $millesime;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_note", type="string", nullable=true)
     */
    private $dateNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Vin
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Vin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vin", referencedColumnName="id_vin")
     * })
     */
    private $idVin;


    public function getIdVin() //VOIR LE TYPE DE $idVin
    {
        return $this->idVin;
    }

    /**
     * @param \Vin $idVin
     */
    public function setIdVin($idVin): void
    {
        $this->idVin = $idVin;
    }

    public function getMillesime(){
        return $this->millesime;
    }

    /**
     * @param int $millesime
     */
    public function setMillesime(int $millesime): void
    {
        $this->millesime = $millesime;
    }

    public function getPrix(){
        return $this->prix;
    }
    public function setPrix(float $price){
        $this->prix=$price;
    }

    public function getQuantite(){
        return $this->quantite;
    }
    public function setQuantite(int $quantiteValue){
        $this->quantite=$quantiteValue;
    }

    public function getNote(){
        return $this->note;
    }
    public function setNote(int $noteValue){
        $this->note=$noteValue;
    }

    public function getDateNote(){
        return $this->dateNote;
    }
    public function setDateNote(date $valueDate){
        $this->dateNote=$valueDate;
    }

}

