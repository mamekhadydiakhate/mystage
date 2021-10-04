<?php

namespace App\Entity;

use App\Entity\Personne;
use App\Entity\Evenement;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AutoriteRepository;

/**
 * @ORM\Entity(repositoryClass=AutoriteRepository::class)
 */
class Autorite extends Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_personne;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="autorite")
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPersonne(): ?string
    {
        return $this->id_personne;
    }

    public function setIdPersonne(string $id_personne): self
    {
        $this->id_personne = $id_personne;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
