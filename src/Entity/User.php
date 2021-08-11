<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="matricule", message="Le matricule {{ value }} existe deja. Veuillez en choisir un nouveau")
 */
class User extends BaseUser 
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;


    /**
     * @var string The hashed password
     * @Assert\Regex(
	 *     pattern="/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=_!*()@%&]).{8,}$/",
	 *     match=true,
	 *     message="Votre mot de passe doit contenir au moins 8 caractères, un majuscule et un caractere speciale"
	 * )
     * @Assert\NotBlank(message="Le mot de passe ne doit pas etre vide")
     */
    protected $password;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $loginTentative;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $loginTentativeAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Le nom est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Le prenom est obligatoire")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Le matricule est obligatoire")
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Le service est obligatoire")
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @Assert\NotBlank(message="Le profil est obligatoire")
     */
    private $profil;

    /**
     * @ORM\OneToMany(targetEntity=Trace::class, mappedBy="user")
     */
    private $traces;

    /**
     * @ORM\OneToMany(targetEntity=Document::class, mappedBy="user")
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity=Paiement::class, mappedBy="user")
     */
    private $paiements;

    /**
     * @ORM\OneToMany(targetEntity=Courrier::class, mappedBy="user")
     */
    private $courriers;


    public function __construct()
    {
    	parent::__construct();
     $this->traces = new ArrayCollection();
     $this->documents = new ArrayCollection();
     $this->paiements = new ArrayCollection();
     $this->courriers = new ArrayCollection();
 
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the hashed password
     *
     * @param  string  $password  The hashed password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getLoginTentative(): ?int
    {
        return $this->loginTentative;
    }

    public function setLoginTentative(?int $loginTentative): self
    {
        $this->loginTentative = $loginTentative;

        return $this;
    }

    public function getLoginTentativeAt(): ?\DateTimeInterface
    {
        return $this->loginTentativeAt;
    }

    public function setLoginTentativeAt(?\DateTimeInterface $loginTentativeAt): self
    {
        $this->loginTentativeAt = $loginTentativeAt;

        return $this;
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

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * @return Collection|Trace[]
     */
    public function getTraces(): Collection
    {
        return $this->traces;
    }

    public function addTrace(Trace $trace): self
    {
        if (!$this->traces->contains($trace)) {
            $this->traces[] = $trace;
            $trace->setUser($this);
        }

        return $this;
    }

    public function removeTrace(Trace $trace): self
    {
        if ($this->traces->removeElement($trace)) {
            // set the owning side to null (unless already changed)
            if ($trace->getUser() === $this) {
                $trace->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Document[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setUser($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getUser() === $this) {
                $document->setUser(null);
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
            $paiement->setUser($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getUser() === $this) {
                $paiement->setUser(null);
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
            $courrier->setUser($this);
        }

        return $this;
    }

    public function removeCourrier(Courrier $courrier): self
    {
        if ($this->courriers->removeElement($courrier)) {
            // set the owning side to null (unless already changed)
            if ($courrier->getUser() === $this) {
                $courrier->setUser(null);
            }
        }

        return $this;
    }

  
}
