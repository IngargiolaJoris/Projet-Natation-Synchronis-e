<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
 */
class Club
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="club_idclub_seq", allocationSize=1, initialValue=1)
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_club", type="string", length=45, nullable=false)
     */
    private $nomClub;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=45, nullable=false)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nomdirigeant", type="string", length=45, nullable=false)
     */
    private $nomdirigeant;


}

