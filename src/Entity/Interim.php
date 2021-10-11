<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\AdminPP;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\InterimRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=InterimRepository::class)
 */
class Interim extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $personne_remplacee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity=AdminPP::class, inversedBy="interim")
     */
    private $adminPP;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonneRemplacee(): ?string
    {
        return $this->personne_remplacee;
    }

    public function setPersonneRemplacee(string $personne_remplacee): self
    {
        $this->personne_remplacee = $personne_remplacee;

        return $this;
    }

    public function getIdUtilisateur(): ?string
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(string $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function getAdminPP(): ?AdminPP
    {
        return $this->adminPP;
    }

    public function setAdminPP(?AdminPP $adminPP): self
    {
        $this->adminPP = $adminPP;

        return $this;
    }

    

   
}
