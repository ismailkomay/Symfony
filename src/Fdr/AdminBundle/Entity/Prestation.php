<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestation
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity
 */
class Prestation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp1", type="string", length=100, nullable=false)
     */
    private $champssupp1;

    /**
     * @var string
     *
     * @ORM\Column(name="champssupp2", type="string", length=100, nullable=false)
     */
    private $champssupp2;


}
