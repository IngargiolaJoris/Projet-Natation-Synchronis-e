<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nageuse
 *
 * @ORM\Table(name="nageuse")
 * @ORM\Entity
 */
class Nageuse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnageuse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nageuse_idnageuse_seq", allocationSize=1, initialValue=1)
     */
    private $idnageuse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_nageuse", type="string", length=45, nullable=false)
     */
    private $nomNageuse;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_nageuse", type="string", length=45, nullable=false)
     */
    private $prenomNageuse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedenaissance", type="date", nullable=false)
     */
    private $datedenaissance;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipe", inversedBy="idnageuse")
     * @ORM\JoinTable(name="faitparti",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idnageuse", referencedColumnName="idnageuse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idequipe", referencedColumnName="idequipe")
     *   }
     * )
     */
    private $idequipe;

    /**
     * Set idNageuse
     *
     * @param string $idNageuse
     *
     * @return Nageuse
     */
    public function setidNageuse($idNageuse)
    {
        $this->idNageuse = $idNageuse;

        return $this;
    }

    /**
     * Get idnageuse
     *
     * @return string
     */
    public function getidnageuse()
    {
        return $this->idnageuse;
    }

    /**
     * Set nomNageuse
     *
     * @param string $nomNageuse
     *
     * @return Nageuse
     */
    public function setnomNageuse($nomNageuse)
    {
        $this->nomNageuse = $nomNageuse;

        return $this;
    }

    /**
     * Get nomNageuse
     *
     * @return string
     */
    public function getnomNageuse()
    {
        return $this->nomNageuse;
    }

    /**
     * Set prenomNageuse
     *
     * @param string $prenomNageuse
     *
     * @return Nageuse
     */
    public function setprenomNageuse($prenomNageuse)
    {
        $this->prenomNageuse = $prenomNageuse;

        return $this;
    }
    /**
     * Get prenomNageuse
     *
     * @return string
     */
    public function getprenomNageuse()
    {
        return $this->prenomNageuse;
    }

    /**
     * Set dateDeNaissance
     *
     * @param string $dateDeNaissance
     *
     * @return Nageuse
     */
    public function setdateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }
    /**
     * Get dateDeNaissance
     *
     * @return string
     */

    public function getdateDeNaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idequipe = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

