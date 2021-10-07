<?php
namespace App\Entity;

use App\Entity\Profil;
use App\Entity\Workflow;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Ldap\Ldap;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="matricule", message="Le matricule {{ value }} existe deja. Veuillez en choisir un nouveau")
 * @UniqueEntity(fields="email", message="Le Email {{ value }} existe deja. Veuillez en choisir un nouveau")
 * @UniqueEntity(fields="username", message="Le username {{ value }} existe deja. Veuillez en choisir un nouveau")
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;


    /**
     * @var string The hashed password
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
     */
    private $nom;

    protected $roles = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricule;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity=profil::class, inversedBy="users")
     */
    private $profil;

    /**
     * @ORM\ManyToOne(targetEntity=workflow::class, inversedBy="users")
     */
    private $workflow;

    /**
     * @ORM\OneToMany(targetEntity=Activite::class, mappedBy="user")
     */
    private $activites;

    /**
     * @ORM\ManyToOne(targetEntity=AdminPP::class, inversedBy="user")
     */
    private $adminPP;

    public function __construct()
    {
        parent::__construct();
        $this->activites = new ArrayCollection();
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
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this -> profil -> getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

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

    public function getProfile(): ?string
    {
        return $this->profile;
    }

   

    public function setProfil(?profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getProfil(): ?profil
    {
        return $this->profil;
    }

    public function getWorkflow(): ?workflow
    {
        return $this->workflow;
    }

    public function setWorkflow(?workflow $workflow): self
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * @return Collection|Activite[]
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->setUser($this);
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getUser() === $this) {
                $activite->setUser(null);
            }
        }

        return $this;
    }

    public function getAdminPP(): ?AdminPP
    {
        return $this->adminPP;
    }

    public function setAdminPP(?AdminPP $adminPP): self
    {
        $this->adminPP = $adminPP;

        return $this;
    }

   

  
}
