<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Autorite;
use App\Entity\Activite;
use App\Entity\Commentaire;
use App\Entity\Periodicite;
use App\Entity\TrancheHoraire;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\HistoriqueEvenement;
use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"commentaire:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="text" )
     * @Groups({"evenement:read" ,"evenement:detail" ,"autorite:read"})
     * 
     */
    private $thematique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"commentaire:read", "evenement:read" ,"autorite:read" })
     */
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     * @var string A "d-m-y " formatted value
     * @Groups({"commentaire:read" ,"evenement:read" ,"evenement:detail" ,"autorite:read"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     * @Groups({"commentaire:read" ,"evenement:read" ,"evenement:detail"})
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"commentaire:read" ,"evenement:read" ,"evenement:detail"})
     */
    private $structureOrg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true )
     * @Groups({"commentaire:read" ,"evenement:read" ,"evenement:detail"})
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"commentaire:read" ,"evenement:read"})
     */
    private $structureConcernee;

    /**
     * @ORM\ManyToOne(targetEntity=Structure::class, inversedBy="evenement", cascade={"persist"})
     * @Groups({"commentaire:read" ,"evenement:read" ,"evenement:detail"})
     */
    private $structure;

    /**
     * @ORM\OneToMany(targetEntity=commentaire::class, mappedBy="evenement", cascade={"persist"} )
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"commentaire:read" ,"evenement:read" ,"evenement:detail"})
     */
    private $commentaire;

    
    private $historiqueEvenement;

    /**
     * @ORM\ManyToOne(targetEntity=periodicite::class, inversedBy="evenements", cascade={"persist"})
     * @ORM\JoinColumn(nullable= false)
     * @Groups({"evenement:read" ,"evenement:detail"})
     */
    private $periodicite;
   

    /**
     * @ORM\OneToMany(targetEntity=TrancheHoraire::class, mappedBy="evenement" ,cascade={"persist"})
     * 
     */
    private $trancheHoraires;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="evenements")
     * @Groups({"evenement:read" ,"evenement:detail"})
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=activite::class, inversedBy="evenements")
     */
    private $activite;

    /**
     * @ORM\OneToMany(targetEntity=Autorite::class, mappedBy="evenement")
     */
    private $autorites;

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
        $this->autorite = new ArrayCollection();
        $this->trancheHoraires = new ArrayCollection();
        $this->activite = new ArrayCollection();
        $this->autorites = new ArrayCollection();
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

    public function addCommentaire(Commentaire $commentaire): self
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
     * @return Collection|TrancheHoraire[]
     */
    public function getTrancheHoraires(): Collection
    {
        return $this->trancheHoraires;
    }

    public function addTrancheHoraire(TrancheHoraire $trancheHoraire): self
    {
        if (!$this->trancheHoraires->contains($trancheHoraire)) {
            $this->trancheHoraires[] = $trancheHoraire;
            $trancheHoraire->setEvenement($this);
        }

        return $this;
    }

    public function removeTrancheHoraire(TrancheHoraire $trancheHoraire): self
    {
        if ($this->trancheHoraires->removeElement($trancheHoraire)) {
            // set the owning side to null (unless already changed)
            if ($trancheHoraire->getEvenement() === $this) {
                $trancheHoraire->setEvenement(null);
            }
        }

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
        }

        return $this;
    }

    public function removeActivite(activite $activite): self
    {
        $this->activite->removeElement($activite);

        return $this;
    }

    /**
     * @return Collection|Autorite[]
     */
    public function getAutorites(): Collection
    {
        return $this->autorites;
    }

    public function addAutorite(Autorite $autorite): self
    {
        if (!$this->autorites->contains($autorite)) {
            $this->autorites[] = $autorite;
            $autorite->setEvenement($this);
        }

        return $this;
    }

    public function removeAutorite(Autorite $autorite): self
    {
        if ($this->autorites->removeElement($autorite)) {
            // set the owning side to null (unless already changed)
            if ($autorite->getEvenement() === $this) {
                $autorite->setEvenement(null);
            }
        }

        return $this;
    }
}
