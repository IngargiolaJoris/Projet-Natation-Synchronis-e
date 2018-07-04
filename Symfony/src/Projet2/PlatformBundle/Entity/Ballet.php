<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ballet
 *
 * @ORM\Table(name="ballet")
 * @ORM\Entity
 */
class Ballet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idballet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ballet_idballet_seq", allocationSize=1, initialValue=1)
     */
    private $idballet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcompetition", type="integer", nullable=false)
     */
    private $idcompetition;


}

