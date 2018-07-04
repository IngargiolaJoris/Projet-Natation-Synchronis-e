<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="IDX_2449BA156B21C9D2", columns={"idclub"})})
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idequipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipe_idequipe_seq", allocationSize=1, initialValue=1)
     */
    private $idequipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_equipe", type="string", length=45, nullable=false)
     */
    private $nomEquipe;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclub", referencedColumnName="idclub")
     * })
     */
    private $idclub;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Nageuse", mappedBy="idequipe")
     */
    private $idnageuse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idnageuse = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

