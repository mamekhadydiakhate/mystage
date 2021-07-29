<?php

namespace App\Entity;

use App\Repository\AyantDroitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AyantDroitRepository::class)
 */
class AyantDroit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="le nom est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="le prenom est obligatoire")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="la date de naissance est obligatoire")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="l'email est obligatoire")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="le tel1 est obligatoire")
     */
    private $tel1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="le sexe est obligatoire")
     */
    private $sexe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $validite;

    /**
     * @ORM\OneToOne(targetEntity=Document::class, cascade={"persist", "remove"})
     */
    private $document;

    /**
     * @ORM\OneToOne(targetEntity=LienFamilial::class, cascade={"persist", "remove"})
     */
    private $lienFamilial;

    /**
     * @ORM\ManyToOne(targetEntity=Agent::class, inversedBy="ayantDroit")
     */
    private $agent;

    /**
     * @ORM\ManyToOne(targetEntity=StatutLegal::class, inversedBy="ayantDroits")
     */
    private $statutLegal;

    /**
     * @ORM\OneToMany(targetEntity=Paiement::class, mappedBy="ayantDroit")
     */
    private $paiements;

    public function __construct()
    {
        $this->paiements = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(?string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(?string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

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

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getLienFamilial(): ?LienFamilial
    {
        return $this->lienFamilial;
    }

    public function setLienFamilial(?LienFamilial $lienFamilial): self
    {
        $this->lienFamilial = $lienFamilial;

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

    public function getStatutLegal(): ?StatutLegal
    {
        return $this->statutLegal;
    }

    public function setStatutLegal(?StatutLegal $statutLegal): self
    {
        $this->statutLegal = $statutLegal;

        return $this;
    }

    /**
     * @return Collection|Paiement[]
     */
    public function getPaiements(): Collection
    {
        return $this->paiements;
    }

    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiements->contains($paiement)) {
            $this->paiements[] = $paiement;
            $paiement->setAyantDroit($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getAyantDroit() === $this) {
                $paiement->setAyantDroit(null);
            }
        }

        return $this;
    }

}
