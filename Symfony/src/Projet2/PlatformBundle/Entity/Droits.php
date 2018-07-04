<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droits
 *
 * @ORM\Table(name="droits")
 * @ORM\Entity
 */
class Droits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddroits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="droits_iddroits_seq", allocationSize=1, initialValue=1)
     */
    private $iddroits;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=false)
     */
    private $commentaire;


}

