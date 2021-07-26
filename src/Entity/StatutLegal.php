<?php

namespace App\Entity;

use App\Repository\StatutLegalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatutLegalRepository::class)
 */
class StatutLegal
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
     * @ORM\OneToMany(targetEntity=AyantDroit::class, mappedBy="statutLegal")
     */
    private $ayantDroits;

    public function __construct()
    {
        $this->ayantDroits = new ArrayCollection();
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
     * @return Collection|AyantDroit[]
     */
    public function getAyantDroits(): Collection
    {
        return $this->ayantDroits;
    }

    public function addAyantDroit(AyantDroit $ayantDroit): self
    {
        if (!$this->ayantDroits->contains($ayantDroit)) {
            $this->ayantDroits[] = $ayantDroit;
            $ayantDroit->setStatutLegal($this);
        }

        return $this;
    }

    public function removeAyantDroit(AyantDroit $ayantDroit): self
    {
        if ($this->ayantDroits->removeElement($ayantDroit)) {
            // set the owning side to null (unless already changed)
            if ($ayantDroit->getStatutLegal() === $this) {
                $ayantDroit->setStatutLegal(null);
            }
        }

        return $this;
    }
}
