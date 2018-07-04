<?php

namespace Projet2\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="role_idrole_seq", allocationSize=1, initialValue=1)
     */
    private $idrole;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=45, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcompetition", type="integer", nullable=false)
     */
    private $idcompetition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Notation", mappedBy="idrole")
     */
    private $idnotation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idnotation = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

