<?php

namespace biblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pret
 *
 * @ORM\Table(name="pret")
 * @ORM\Entity(repositoryClass="biblioBundle\Repository\PretRepository")
 */
class Pret
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


      /** 
    * @ORM\ManyToOne(targetEntity="biblioBundle\Entity\Emprunteur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $Emprunteur;


    /**

    * @ORM\OneToOne(targetEntity="biblioBundle\Entity\Exemplaire", cascade={"persist"})

   */

   private $Exemplaire;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Pret
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of Emprunteur
     */ 
    public function getEmprunteur()
    {
        return $this->Emprunteur;
    }

    /**
     * Set the value of Emprunteur
     *
     * @return  self
     */ 
    public function setEmprunteur($Emprunteur)
    {
        $this->Emprunteur = $Emprunteur;

        return $this;
    }
}

