<?php

namespace PI\AppelBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="appeldoffre")
 */
class appeldoffre
{
    /**
     * @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    private $id;
    /**
     *@ORM\Column(type="string", length=255)
     */
    private $sujet;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemax", type="date")
     */
    private $datemax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="PI\UserBundle\Entity\User")
     */

    private $patisserie;
    /**

     * @ORM\Column(type="integer")

     */
    private $statut;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return \DateTime
     */
    public function getDatemax()
    {
        return $this->datemax;
    }

    /**
     * @param \DateTime $datemax
     */
    public function setDatemax($datemax)
    {
        $this->datemax = $datemax;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPatisserie()
    {
        return $this->patisserie;
    }

    /**
     * @param mixed $patisserie
     */
    public function setPatisserie($patisserie)
    {
        $this->patisserie = $patisserie;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

}

