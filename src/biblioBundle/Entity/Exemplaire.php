<?php

namespace biblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exemplaire
 *
 * @ORM\Table(name="exemplaire")
 * @ORM\Entity(repositoryClass="biblioBundle\Repository\ExemplaireRepository")
 */
class Exemplaire
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
     * @var bool
     *
     * @ORM\Column(name="emprunt", type="boolean")
     */
    private $emprunt;

    /**
     * @var int
     *
     * @ORM\Column(name="isbn", type="integer", unique=true)
     */
    private $isbn;

   
    


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
     * Set emprunt
     *
     * @param boolean $emprunt
     *
     * @return Exemplaire
     */
    public function setEmprunt($emprunt)
    {
        $this->emprunt = $emprunt;

        return $this;
    }

    /**
     * Get emprunt
     *
     * @return bool
     */
    public function getEmprunt()
    {
        return $this->emprunt;
    }

    /**
     * Set isbn
     *
     * @param integer $isbn
     *
     * @return Exemplaire
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return int
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

   

    
}

