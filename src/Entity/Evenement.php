<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
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
    private $thematique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $structureOrg;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $structureConcernee;

    /**
     * @ORM\ManyToOne(targetEntity=Structure::class, inversedBy="evenement")
     */
    private $structure;

    /**
     * @ORM\OneToMany(targetEntity=commentaire::class, mappedBy="evenement")
     */
    private $commentaire;

    /**
     * @ORM\OneToOne(targetEntity=historiqueEvenement::class, cascade={"persist", "remove"})
     */
    private $historiqueEvenement;

    /**
     * @ORM\ManyToOne(targetEntity=periodicite::class, inversedBy="evenements")
     */
    private $periodicite;

    /**
     * @ORM\OneToMany(targetEntity=autorite::class, mappedBy="evenement")
     */
    private $autorite;

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
        $this->autorite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThematique(): ?string
    {
        return $this->thematique;
    }

    public function setThematique(string $thematique): self
    {
        $this->thematique = $thematique;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getStructureOrg(): ?string
    {
        return $this->structureOrg;
    }

    public function setStructureOrg(string $structureOrg): self
    {
        $this->structureOrg = $structureOrg;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getStructureConcernee(): ?string
    {
        return $this->structureConcernee;
    }

    public function setStructureConcernee(string $structureConcernee): self
    {
        $this->structureConcernee = $structureConcernee;

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

    /**
     * @return Collection|commentaire[]
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(commentaire $commentaire): self
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire[] = $commentaire;
            $commentaire->setEvenement($this);
        }

        return $this;
    }

    public function removeCommentaire(commentaire $commentaire): self
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getEvenement() === $this) {
                $commentaire->setEvenement(null);
            }
        }

        return $this;
    }

    public function getHistoriqueEvenement(): ?historiqueEvenement
    {
        return $this->historiqueEvenement;
    }

    public function setHistoriqueEvenement(?historiqueEvenement $historiqueEvenement): self
    {
        $this->historiqueEvenement = $historiqueEvenement;

        return $this;
    }

    public function getPeriodicite(): ?periodicite
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?periodicite $periodicite): self
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * @return Collection|autorite[]
     */
    public function getAutorite(): Collection
    {
        return $this->autorite;
    }

    public function addAutorite(autorite $autorite): self
    {
        if (!$this->autorite->contains($autorite)) {
            $this->autorite[] = $autorite;
            $autorite->setEvenement($this);
        }

        return $this;
    }

    public function removeAutorite(autorite $autorite): self
    {
        if ($this->autorite->removeElement($autorite)) {
            // set the owning side to null (unless already changed)
            if ($autorite->getEvenement() === $this) {
                $autorite->setEvenement(null);
            }
        }

        return $this;
    }
}
