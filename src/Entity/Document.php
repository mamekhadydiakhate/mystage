<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroDocument;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDelivrance;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateValidite;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateExpiration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDocument::class, inversedBy="documents")
     */
    private $typeDocument;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="documents")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Jugement::class, inversedBy="documents")
     */
    private $jugement;

    /**
     * @ORM\ManyToOne(targetEntity=Notaire::class, inversedBy="documents")
     */
    private $notaire;

    /**
     * @ORM\ManyToOne(targetEntity=Agent::class, inversedBy="document")
     */
    private $agent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroDocument(): ?int
    {
        return $this->numeroDocument;
    }

    public function setNumeroDocument(?int $numeroDocument): self
    {
        $this->numeroDocument = $numeroDocument;

        return $this;
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

    public function getDateDelivrance(): ?\DateTimeInterface
    {
        return $this->dateDelivrance;
    }

    public function setDateDelivrance(?\DateTimeInterface $dateDelivrance): self
    {
        $this->dateDelivrance = $dateDelivrance;

        return $this;
    }

    public function getDateValidite(): ?\DateTimeInterface
    {
        return $this->dateValidite;
    }

    public function setDateValidite(?\DateTimeInterface $dateValidite): self
    {
        $this->dateValidite = $dateValidite;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?\DateTimeInterface $dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(?string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getTypeDocument(): ?TypeDocument
    {
        return $this->typeDocument;
    }

    public function setTypeDocument(?TypeDocument $typeDocument): self
    {
        $this->typeDocument = $typeDocument;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getJugement(): ?Jugement
    {
        return $this->jugement;
    }

    public function setJugement(?Jugement $jugement): self
    {
        $this->jugement = $jugement;

        return $this;
    }

    public function getNotaire(): ?Notaire
    {
        return $this->notaire;
    }

    public function setNotaire(?Notaire $notaire): self
    {
        $this->notaire = $notaire;

        return $this;
    }

    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(?Agent $agent): self
    {
        $this->agent = $agent;

        return $this;
    }
}
