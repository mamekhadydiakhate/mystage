<?php

namespace App\Entity;

use App\Repository\RoleDestinataireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleDestinataireRepository::class)
 */
class RoleDestinataire
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
     * @ORM\OneToMany(targetEntity=Destinataire::class, mappedBy="roleDestinataire")
     */
    private $destinataire;

    /**
     * @ORM\ManyToOne(targetEntity=Periodicite::class, inversedBy="roleDestinataire")
     */
    private $periodicite;

    public function __construct()
    {
        $this->destinataire = new ArrayCollection();
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
     * @return Collection|Destinataire[]
     */
    public function getDestinataire(): Collection
    {
        return $this->destinataire;
    }

    public function addDestinataire(Destinataire $destinataire): self
    {
        if (!$this->destinataire->contains($destinataire)) {
            $this->destinataire[] = $destinataire;
            $destinataire->setRoleDestinataire($this);
        }

        return $this;
    }

    public function removeDestinataire(Destinataire $destinataire): self
    {
        if ($this->destinataire->removeElement($destinataire)) {
            // set the owning side to null (unless already changed)
            if ($destinataire->getRoleDestinataire() === $this) {
                $destinataire->setRoleDestinataire(null);
            }
        }

        return $this;
    }

    public function getPeriodicite(): ?Periodicite
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?Periodicite $periodicite): self
    {
        $this->periodicite = $periodicite;

        return $this;
    }
}
