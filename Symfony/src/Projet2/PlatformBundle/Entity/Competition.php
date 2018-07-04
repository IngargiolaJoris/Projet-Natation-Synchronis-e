<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Competition
 *
 * @ORM\Table(name="competition", indexes={@ORM\Index(name="IDX_B50A2CB1D78124D", columns={"idorganisateur"})})
 * @ORM\Entity
 */
class Competition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcompetition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcompetition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_competition", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateCompetiton;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_competition", type="string", length=45, nullable=false)
     */
    private $nomCompetition;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_competition", type="string", length=45, nullable=false)
     */
    private $lieuCompetition;

    /**
     * @var \Organisateur
     *
     * @ORM\ManyToOne(targetEntity="Organisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idorganisateur", referencedColumnName="idorganisateur")
     * })
     */
    private $idorganisateur;


    /**
     * Set idcompetition
     *
     * @param string $idcompetition
     *
     * @return competition
     */
    public function setidcompetition($idcompetition)
    {
        $this->idcompetition = $idcompetition;

        return $this;
    }

    /**
     * Get idcompetition
     *
     * @return int
     */
    public function getidcompetition()
    {
        return $this->idcompetition;
    }

    /**
     * Set nomCompetition
     *
     * @param string $nomCompetition
     *
     * @return competition
     */
    public function setnomCompetition($nomCompetition)
    {
        $this->nomCompetition = $nomCompetition;

        return $this;
    }

    /**
     * Get nomCompetition
     *
     * @return string
     */
    public function getnomCompetition()
    {
        return $this->nomCompetition;
    }

    /**
     * Set lieuCompetition
     *
     * @param string $lieuCompetition
     *
     * @return competition
     */
    public function setlieuCompetition($lieuCompetition)
    {
        $this->lieuCompetition = $lieuCompetition;

        return $this;
    }
    /**
     * Get lieuCompetition
     *
     * @return string
     */
    public function getlieuCompetition()
    {
        return $this->lieuCompetition;
    }

    /**
     * Set dateCompetiton
     *
     * @param \DateTime $dateCompetiton
     *
     * @return competition
     */
    public function setdateCompetiton($dateCompetiton)
    {
        $this->dateCompetiton = $dateCompetiton;

        return $this;
    }
    /**
     * Get dateCompetiton
     *
     * @return string
     */
    public function getdateCompetiton()
    {
        return $this->dateCompetiton;
    }

    /**
     * Set idorganisateur
     *
     * @param string $idorganisateur
     *
     * @return competition
     */
    public function setidorganisateur($idorganisateur)
    {
        $this->idorganisateur = $idorganisateur;

        return $this;
    }

    /**
     * Get idorganisateur
     *
     * @return \Organisateur
     */
    public function getidorganisateur()
    {
        return $this->idorganisateur;
    }

}

