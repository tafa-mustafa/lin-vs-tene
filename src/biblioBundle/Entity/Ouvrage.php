<?php

namespace biblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ouvrage
 *
 * @ORM\Table(name="ouvrage")
 * @ORM\Entity(repositoryClass="biblioBundle\Repository\OuvrageRepository")
 */
class Ouvrage
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
     * @ORM\Column(name="titre", type="string", length=38)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=38)
     */
    private $type;

    /** 
     * @ORM\ManyToOne(targetEntity="biblioBundle\Entity\Exemplaire")
     * @ORM\JoinColumn(nullable=false)
    */
    private $Exemplaire;

     /** 
    * @ORM\ManyToOne(targetEntity="biblioBundle\Entity\Reservation")
    * @ORM\JoinColumn(nullable=false)
    */
    private $Reservation;

    

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Ouvrage
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Ouvrage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

   

    /**
     * Get the value of Exemplaire
     */ 
    public function getExemplaire()
    {
        return $this->Exemplaire;
    }

    /**
     * Set the value of Exemplaire
     *
     * @return  self
     */ 
    public function setExemplaire($Exemplaire)
    {
        $this->Exemplaire = $Exemplaire;

        return $this;
    }

    /**
     * Get the value of Reservation
     */ 
    public function getReservation()
    {
        return $this->Reservation;
    }

    /**
     * Set the value of Reservation
     *
     * @return  self
     */ 
    public function setReservation($Reservation)
    {
        $this->Reservation = $Reservation;

        return $this;
    }

    
}

