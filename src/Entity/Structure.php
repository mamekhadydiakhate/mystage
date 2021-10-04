<?php

namespace App\Entity;

use App\Entity\Activite;
use App\Entity\Evenement;
use App\Entity\Extraction;
use App\Entity\TypeStructure;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StructureRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=StructureRepository::class)
 */
class Structure
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
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity=Extraction::class, inversedBy="structure")
     */
    private $extraction;

    /**
     * @ORM\OneToOne(targetEntity=typeStructure::class, cascade={"persist", "remove"})
     */
    private $typeStructure;

    /**
     * @ORM\OneToMany(targetEntity=activite::class, mappedBy="structure")
     */
    private $activite;

    /**
     * @ORM\OneToMany(targetEntity=evenement::class, mappedBy="structure")
     */
    private $evenement;

    public function __construct()
    {
        $this->activite = new ArrayCollection();
        $this->evenement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getExtraction(): ?Extraction
    {
        return $this->extraction;
    }

    public function setExtraction(?Extraction $extraction): self
    {
        $this->extraction = $extraction;

        return $this;
    }

    public function getTypeStructure(): ?typeStructure
    {
        return $this->typeStructure;
    }

    public function setTypeStructure(?typeStructure $typeStructure): self
    {
        $this->typeStructure = $typeStructure;

        return $this;
    }

    /**
     * @return Collection|activite[]
     */
    public function getActivite(): Collection
    {
        return $this->activite;
    }

    public function addActivite(activite $activite): self
    {
        if (!$this->activite->contains($activite)) {
            $this->activite[] = $activite;
            $activite->setStructure($this);
        }

        return $this;
    }

    public function removeActivite(activite $activite): self
    {
        if ($this->activite->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getStructure() === $this) {
                $activite->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|evenement[]
     */
    public function getEvenement(): Collection
    {
        return $this->evenement;
    }

    public function addEvenement(evenement $evenement): self
    {
        if (!$this->evenement->contains($evenement)) {
            $this->evenement[] = $evenement;
            $evenement->setStructure($this);
        }

        return $this;
    }

    public function removeEvenement(evenement $evenement): self
    {
        if ($this->evenement->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getStructure() === $this) {
                $evenement->setStructure(null);
            }
        }

        return $this;
    }
}
