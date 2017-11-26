<?php

namespace TR\MaitreDesMotsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Search
 *
 * @ORM\Table(name="search")
 * @ORM\Entity(repositoryClass="TR\MaitreDesMotsBundle\Repository\SearchRepository")
 */
class Search
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mot", type="string", length=255)
     */
    private $mot;

    /**
     * @var string
     *
     * @ORM\Column(name="relType", type="string", length=255)
     */
    private $relType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mot
     *
     * @param string $mot
     *
     * @return Search
     */
    public function setMot($mot)
    {
        $this->mot = $mot;

        return $this;
    }

    /**
     * Get mot
     *
     * @return string
     */
    public function getMot()
    {
        return $this->mot;
    }

    /**
     * Set relType
     *
     * @param string $relType
     *
     * @return Search
     */
    public function setRelType($relType)
    {
        $this->relType = $relType;

        return $this;
    }

    /**
     * Get relType
     *
     * @return string
     */
    public function getRelType()
    {
        return $this->relType;
    }
}

