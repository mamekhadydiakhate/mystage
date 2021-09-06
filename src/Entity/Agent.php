<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="le nom est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank(message="le nombre d'actions est obligatoire")
     */
    private $nombreAction;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank(message="le commentaire est obligatoire")
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
     * @ORM\ManyToOne(targetEntity=TransfertAction::class, inversedBy="agents")
     */
    private $transfertAction;

    /**
     * @ORM\OneToMany(targetEntity=Document::class, mappedBy="agent")
     */
    private $document;

    /**
     * @ORM\OneToMany(targetEntity=AyantDroit::class, mappedBy="agent")
     */
    private $ayantDroit;

    /**
     * @ORM\OneToMany(targetEntity=Paiement::class, mappedBy="agent")
     */
    private $paiements;

    /**
     * @ORM\OneToMany(targetEntity=Courrier::class, mappedBy="agent")
     */
    private $courriers;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sensibilite;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutActions;

    public function __construct()
    {
        $this->document = new ArrayCollection();
        $this->ayantDroit = new ArrayCollection();
        $this->paiements = new ArrayCollection();
        $this->courriers = new ArrayCollection();
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
            $paiement->setAgent($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getAgent() === $this) {
                $paiement->setAgent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Courrier[]
     */
    public function getCourriers(): Collection
    {
        return $this->courriers;
    }

    public function addCourrier(Courrier $courrier): self
    {
        if (!$this->courriers->contains($courrier)) {
            $this->courriers[] = $courrier;
            $courrier->setAgent($this);
        }

        return $this;
    }

    public function removeCourrier(Courrier $courrier): self
    {
        if ($this->courriers->removeElement($courrier)) {
            // set the owning side to null (unless already changed)
            if ($courrier->getAgent() === $this) {
                $courrier->setAgent(null);
            }
        }

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

    public function getSensibilite(): ?string
    {
        return $this->sensibilite;
    }

    public function setSensibilite(?string $sensibilite): self
    {
        $this->sensibilite = $sensibilite;

        return $this;
    }





    public function getStatutActions(): ?string
    {
        return $this->statutActions;
    }

    public function setStatutActions(?string $statutActions): self
    {
        $this->statutActions = $statutActions;

        return $this;
    }
}
