<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notation
 *
 * @ORM\Table(name="notation", indexes={@ORM\Index(name="IDX_268BC95D2CFF594", columns={"idparticipation"}), @ORM\Index(name="IDX_268BC95E34EFBD7", columns={"idjuge"})})
 * @ORM\Entity
 */
class Notation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="notation_idnotation_seq", allocationSize=1, initialValue=1)
     */
    private $idnotation;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var \Participation
     *
     * @ORM\ManyToOne(targetEntity="Participation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idparticipation", referencedColumnName="idparticipation")
     * })
     */
    private $idparticipation;

    /**
     * @var \Juge
     *
     * @ORM\ManyToOne(targetEntity="Juge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjuge", referencedColumnName="idjuge")
     * })
     */
    private $idjuge;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="idnotation")
     * @ORM\JoinTable(name="penalite",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idnotation", referencedColumnName="idnotation")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idrole", referencedColumnName="idrole")
     *   }
     * )
     */
    private $idrole;

    /**
     * Set idnotation
     *
     * @param string $idnotation
     *
     * @return notation
     */
    public function setidnotation($idnotation)
    {
        $this->idnotation = $idnotation;

        return $this;
    }

    /**
     * Get idnotation
     *
     * @return int
     */
    public function getidnotation()
    {
        return $this->idnotation;
    }

    /**
     * Set idparticipation
     *
     * @param string $idparticipation
     *
     * @return Notation
     */
    public function setidparticipation($idparticipation)
    {
        $this->idparticipation = $idparticipation;

        return $this;
    }

    /**
     * Get idparticipation
     *
     * @return string
     */
    public function getidparticipation()
    {
        return $this->idparticipation;
    }

    /**
     * Set idjuge
     *
     * @param string $idjuge
     *
     * @return notation
     */
    public function setidjuge($idjuge)
    {
        $this->idjuge = $idjuge;

        return $this;
    }

    /**
     * Get idjuge
     *
     * @return string
     */
    public function getidjuge()
    {
        return $this->idjuge;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return notation
     */
    public function setnote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getnote()
    {
        return $this->note;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->idrole = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idparticipation = new \Projet2\PlatformBundle\Entity\Participation();
        $this->idjuge = new \Projet2\PlatformBundle\Entity\Juge();
    }

}

