<?php

namespace App\Entity;

use App\Repository\TribunalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TribunalRepository::class)
 */
class Tribunal
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity=Jugement::class, mappedBy="tribunal")
     */
    private $jugement;

    public function __construct()
    {
        $this->jugement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdress(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return Collection|Jugement[]
     */
    public function getJugement(): Collection
    {
        return $this->jugement;
    }

    public function addJugement(Jugement $jugement): self
    {
        if (!$this->jugement->contains($jugement)) {
            $this->jugement[] = $jugement;
            $jugement->setTribunal($this);
        }

        return $this;
    }

    public function removeJugement(Jugement $jugement): self
    {
        if ($this->jugement->removeElement($jugement)) {
            // set the owning side to null (unless already changed)
            if ($jugement->getTribunal() === $this) {
                $jugement->setTribunal(null);
            }
        }

        return $this;
    }
}
