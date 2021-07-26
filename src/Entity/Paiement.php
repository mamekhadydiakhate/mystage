<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaiementRepository::class)
 */
class Paiement
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
    private $numeroPaiement;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateEmission;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateReception;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroDossier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $validite;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity=AyantDroit::class, inversedBy="paiements")
     */
    private $ayantDroit;

    /**
     * @ORM\ManyToOne(targetEntity=Agent::class, inversedBy="paiements")
     */
    private $agent;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="paiements")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroPaiement(): ?int
    {
        return $this->numeroPaiement;
    }

    public function setNumeroPaiement(?int $numeroPaiement): self
    {
        $this->numeroPaiement = $numeroPaiement;

        return $this;
    }

    public function getDateEmission(): ?\DateTimeInterface
    {
        return $this->dateEmission;
    }

    public function setDateEmission(?\DateTimeInterface $dateEmission): self
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    public function getDateReception(): ?\DateTimeInterface
    {
        return $this->dateReception;
    }

    public function setDateReception(?\DateTimeInterface $dateReception): self
    {
        $this->dateReception = $dateReception;

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

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(?string $fichier): self
    {
        $this->fichier = $fichier;

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

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getAyantDroit(): ?AyantDroit
    {
        return $this->ayantDroit;
    }

    public function setAyantDroit(?AyantDroit $ayantDroit): self
    {
        $this->ayantDroit = $ayantDroit;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
