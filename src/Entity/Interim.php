<?php

namespace App\Entity;

use App\Repository\InterimRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterimRepository::class)
 */
class Interim
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
    private $personne_remplacee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_utilisateur;

    /**
     * @ORM\OneToMany(targetEntity=AdminPP::class, mappedBy="interim")
     */
    private $adminPPs;

    public function __construct()
    {
        $this->adminPPs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonneRemplacee(): ?string
    {
        return $this->personne_remplacee;
    }

    public function setPersonneRemplacee(string $personne_remplacee): self
    {
        $this->personne_remplacee = $personne_remplacee;

        return $this;
    }

    public function getIdUtilisateur(): ?string
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(string $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * @return Collection|AdminPP[]
     */
    public function getAdminPPs(): Collection
    {
        return $this->adminPPs;
    }

    public function addAdminPP(AdminPP $adminPP): self
    {
        if (!$this->adminPPs->contains($adminPP)) {
            $this->adminPPs[] = $adminPP;
            $adminPP->setInterim($this);
        }

        return $this;
    }

    public function removeAdminPP(AdminPP $adminPP): self
    {
        if ($this->adminPPs->removeElement($adminPP)) {
            // set the owning side to null (unless already changed)
            if ($adminPP->getInterim() === $this) {
                $adminPP->setInterim(null);
            }
        }

        return $this;
    }
}
