<?php

namespace PI\AppelBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="demandeoffre")
 */
class demandeoffre
{
    /**
     * @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="PI\UserBundle\Entity\User")
     */

    private $user;
    /**
     * @ORM\OneToOne(targetEntity="PI\AppelBundle\Entity\appeldoffre")
     */

    private $appel;
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getAppel()
    {
        return $this->appel;
    }

    /**
     * @param mixed $appel
     */
    public function setAppel($appel)
    {
        $this->appel = $appel;
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

