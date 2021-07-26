<?php

namespace App\Entity;

use App\Repository\PeriodiciteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeriodiciteRepository::class)
 */
class Periodicite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=RoleDestinataire::class, mappedBy="periodicite")
     */
    private $roleDestinataire;

    public function __construct()
    {
        $this->roleDestinataire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|RoleDestinataire[]
     */
    public function getRoleDestinataire(): Collection
    {
        return $this->roleDestinataire;
    }

    public function addRoleDestinataire(RoleDestinataire $roleDestinataire): self
    {
        if (!$this->roleDestinataire->contains($roleDestinataire)) {
            $this->roleDestinataire[] = $roleDestinataire;
            $roleDestinataire->setPeriodicite($this);
        }

        return $this;
    }

    public function removeRoleDestinataire(RoleDestinataire $roleDestinataire): self
    {
        if ($this->roleDestinataire->removeElement($roleDestinataire)) {
            // set the owning side to null (unless already changed)
            if ($roleDestinataire->getPeriodicite() === $this) {
                $roleDestinataire->setPeriodicite(null);
            }
        }

        return $this;
    }
}
