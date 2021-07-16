<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
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
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreAction;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTransfertAction;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $validite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroDossier;

    /**
     * @ORM\ManyToOne(targetEntity=TransfertAction::class, inversedBy="agents")
     */
    private $transfertAction;

    /**
     * @ORM\OneToMany(targetEntity=AyantDroit::class, mappedBy="agent")
     */
    private $ayantDroit;

    /**
     * @ORM\OneToMany(targetEntity=Document::class, mappedBy="agent")
     */
    private $document;

    public function __construct()
    {
        $this->ayantDroit = new ArrayCollection();
        $this->document = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

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

    public function getNombreAction(): ?int
    {
        return $this->nombreAction;
    }

    public function setNombreAction(?int $nombreAction): self
    {
        $this->nombreAction = $nombreAction;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDateTransfertAction(): ?\DateTimeInterface
    {
        return $this->dateTransfertAction;
    }

    public function setDateTransfertAction(?\DateTimeInterface $dateTransfertAction): self
    {
        $this->dateTransfertAction = $dateTransfertAction;

        return $this;
    }

    public function getValidite(): ?int
    {
        return $this->validite;
    }

    public function setValidite(?int $validite): self
    {
        $this->validite = $validite;

        return $this;
    }

    public function getNumeroDossier(): ?int
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?int $numeroDossier): self
    {
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getTransfertAction(): ?TransfertAction
    {
        return $this->transfertAction;
    }

    public function setTransfertAction(?TransfertAction $transfertAction): self
    {
        $this->transfertAction = $transfertAction;

        return $this;
    }

    /**
     * @return Collection|AyantDroit[]
     */
    public function getAyantDroit(): Collection
    {
        return $this->ayantDroit;
    }

    public function addAyantDroit(AyantDroit $ayantDroit): self
    {
        if (!$this->ayantDroit->contains($ayantDroit)) {
            $this->ayantDroit[] = $ayantDroit;
            $ayantDroit->setAgent($this);
        }

        return $this;
    }

    public function removeAyantDroit(AyantDroit $ayantDroit): self
    {
        if ($this->ayantDroit->removeElement($ayantDroit)) {
            // set the owning side to null (unless already changed)
            if ($ayantDroit->getAgent() === $this) {
                $ayantDroit->setAgent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Document[]
     */
    public function getDocument(): Collection
    {
        return $this->document;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->document->contains($document)) {
            $this->document[] = $document;
            $document->setAgent($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->document->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getAgent() === $this) {
                $document->setAgent(null);
            }
        }

        return $this;
    }
}
