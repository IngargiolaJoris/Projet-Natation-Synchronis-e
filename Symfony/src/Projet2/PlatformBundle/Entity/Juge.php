<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juge
 *
 * @ORM\Table(name="juge", indexes={@ORM\Index(name="IDX_30810A7784A67BCA", columns={"idrole"}), @ORM\Index(name="IDX_30810A77DBDD131C", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Juge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idjuge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="juge_idjuge_seq", allocationSize=1, initialValue=1)
     */
    private $idjuge;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_juge", type="string", length=45, nullable=false)
     */
    private $nomJuge;

    /**
     * @var \Role
     *
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrole", referencedColumnName="idrole")
     * })
     */
    private $idrole;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="idutilisateur")
     * })
     */
    private $idutilisateur;


    /**
     * Set idjuge
     *
     * @param string $idjuge
     *
     * @return juge
     */
    public function setidjuge($idjuge)
    {
        $this->idjuge = $idjuge;

        return $this;
    }

    /**
     * Get idjuge
     *
     * @return int
     */
    public function getidjuge()
    {
        return $this->idjuge;
    }

    /**
     * Set nomJuge
     *
     * @param string $nomJuge
     *
     * @return Juge
     */
    public function setnomJuge($nomJuge)
    {
        $this->nomJuge = $nomJuge;

        return $this;
    }

    /**
     * Get nomJuge
     *
     * @return string
     */
    public function getnomJuge()
    {
        return $this->nomJuge;
    }

    /**
     * Set idrole
     *
     * @param string $idrole
     *
     * @return Juge
     */
    public function setidrole($idrole)
    {
        $this->idrole = $idrole;

        return $this;
    }

    /**
     * Get idrole
     *
     * @return string
     */
    public function getidrole()
    {
        return $this->idrole;
    }

    /**
     * Set idutilisateur
     *
     * @param string $idutilisateur
     *
     * @return Juge
     */
    public function setidutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return string
     */
    public function getidutilisateur()
    {
        return $this->idutilisateur;
    }
}

