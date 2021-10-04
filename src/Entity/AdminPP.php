<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Interim;
use App\Entity\Workflow;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AdminPPRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=AdminPPRepository::class)
 */
class AdminPP extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity=interim::class, inversedBy="adminPPs")
     */
    private $interim;

    /**
     * @ORM\OneToMany(targetEntity=user::class, mappedBy="adminPP")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=workflow::class, mappedBy="adminPP")
     */
    private $workflow;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInterim(): ?interim
    {
        return $this->interim;
    }

    public function setInterim(?interim $interim): self
    {
        $this->interim = $interim;

        return $this;
    }

    /**
     * @return Collection|user[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(user $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->setAdminPP($this);
        }

        return $this;
    }

    public function removeUser(user $user): self
    {
        if ($this->user->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getAdminPP() === $this) {
                $user->setAdminPP(null);
            }
        }

        return $this;
    }


    public function addWorkflow(workflow $workflow): self
    {
        if (!$this->workflow->contains($workflow)) {
            $this->workflow[] = $workflow;
            $workflow->setAdminPP($this);
        }

        return $this;
    }

    public function removeWorkflow(workflow $workflow): self
    {
        if ($this->workflow->removeElement($workflow)) {
            // set the owning side to null (unless already changed)
            if ($workflow->getAdminPP() === $this) {
                $workflow->setAdminPP(null);
            }
        }

        return $this;
    }
}
