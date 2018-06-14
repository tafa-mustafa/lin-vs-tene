<?php

namespace biblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunteur
 *
 * @ORM\Table(name="emprunteur")
 * @ORM\Entity(repositoryClass="biblioBundle\Repository\EmprunteurRepository")
 */
class Emprunteur
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
     * @ORM\Column(name="nom", type="string", length=38)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", unique=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=38)
     */
    private $adress;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Emprunteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Emprunteur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    


    /**
     * Get the value of adress
     *
     * @return  string
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @param  string  $adress
     *
     * @return  self
     */ 
    public function setAdress(string $adress)
    {
        $this->adress = $adress;

        return $this;
    }
}

