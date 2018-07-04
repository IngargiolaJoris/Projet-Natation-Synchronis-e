<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="IDX_AB55E24F40F417B9", columns={"idequipe"}), @ORM\Index(name="IDX_AB55E24F4BCEAC9B", columns={"idballet"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idparticipation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="participation_idparticipation_seq", allocationSize=1, initialValue=1)
     */
    private $idparticipation;

    /**
     * @var float
     *
     * @ORM\Column(name="resultat", type="float", precision=10, scale=0, nullable=true)
     */
    private $resultat;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idequipe", referencedColumnName="idequipe")
     * })
     */
    private $idequipe;

    /**
     * @var \Ballet
     *
     * @ORM\ManyToOne(targetEntity="Ballet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idballet", referencedColumnName="idballet")
     * })
     */
    private $idballet;

    /**
     * Set idparticipation
     *
     * @param string $idparticipation
     *
     * @return participation
     */
    public function setidparticipation($idparticipation)
    {
        $this->idparticipation = $idparticipation;

        return $this;
    }

    /**
     * Get idparticipation
     *
     * @return int
     */
    public function getidparticipation()
    {
        return $this->idparticipation;
    }

    /**
     * Set resultat
     *
     * @param string resultat
     *
     * @return participation
     */
    public function setresultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return float
     */
    public function getresultat()
    {
        return $this->resultat;
    }

    /**
     * Set idequipe
     *
     * @param string idequipe
     *
     * @return participation
     */
    public function setidequipe($idequipe)
    {
        $this->idequipe = $idequipe;

        return $this;
    }

    /**
     * Get idequipe
     *
     * @return \Equipe
     */
    public function getidequipe()
    {
        return $this->idequipe;
    }


    /**
     * Set idballet
     *
     * @param string idballet
     *
     * @return participation
     */
    public function setidballet($idballet)
    {
        $this->idballet = $idballet;

        return $this;
    }

    /**
     * Get idequipe
     *
     * @return \Ballet
     */
    public function getidballet()
    {
        return $this->idballet;
    }
}

