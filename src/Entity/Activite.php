<?php

namespace App\Entity;

use App\Entity\Difficulte;
use App\Entity\Historique;
use App\Entity\TrancheHoraire;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\PointDeCoordination;
use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
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
     * @ORM\ManyToOne(targetEntity=Structure::class, inversedBy="activite")
     */
    private $structure;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="activites")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=pointDeCoordination::class, mappedBy="activite")
     */
    private $pointDeCoordination;

    /**
     * @ORM\OneToMany(targetEntity=difficulte::class, mappedBy="activite")
     */
    private $difficulte;

    /**
     * @ORM\ManyToOne(targetEntity=trancheHoraire::class, inversedBy="activites")
     */
    private $trancheHoraire;

    /**
     * @ORM\OneToOne(targetEntity=historique::class, cascade={"persist", "remove"})
     */
    private $historique;

    public function __construct()
    {
        $this->pointDeCoordination = new ArrayCollection();
        $this->difficulte = new ArrayCollection();
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

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|pointDeCoordination[]
     */
    public function getPointDeCoordination(): Collection
    {
        return $this->pointDeCoordination;
    }

    public function addPointDeCoordination(pointDeCoordination $pointDeCoordination): self
    {
        if (!$this->pointDeCoordination->contains($pointDeCoordination)) {
            $this->pointDeCoordination[] = $pointDeCoordination;
            $pointDeCoordination->setActivite($this);
        }

        return $this;
    }

    public function removePointDeCoordination(pointDeCoordination $pointDeCoordination): self
    {
        if ($this->pointDeCoordination->removeElement($pointDeCoordination)) {
            // set the owning side to null (unless already changed)
            if ($pointDeCoordination->getActivite() === $this) {
                $pointDeCoordination->setActivite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|difficulte[]
     */
    public function getDifficulte(): Collection
    {
        return $this->difficulte;
    }

    public function addDifficulte(difficulte $difficulte): self
    {
        if (!$this->difficulte->contains($difficulte)) {
            $this->difficulte[] = $difficulte;
            $difficulte->setActivite($this);
        }

        return $this;
    }

    public function removeDifficulte(difficulte $difficulte): self
    {
        if ($this->difficulte->removeElement($difficulte)) {
            // set the owning side to null (unless already changed)
            if ($difficulte->getActivite() === $this) {
                $difficulte->setActivite(null);
            }
        }

        return $this;
    }

    public function getTrancheHoraire(): ?trancheHoraire
    {
        return $this->trancheHoraire;
    }

    public function setTrancheHoraire(?trancheHoraire $trancheHoraire): self
    {
        $this->trancheHoraire = $trancheHoraire;

        return $this;
    }

    public function getHistorique(): ?historique
    {
        return $this->historique;
    }

    public function setHistorique(?historique $historique): self
    {
        $this->historique = $historique;

        return $this;
    }
}
