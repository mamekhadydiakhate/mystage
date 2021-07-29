<?php

namespace App\Entity;

use App\Repository\DestinataireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DestinataireRepository::class)
 */
class Destinataire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="l'email est obligatoire")
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=RoleDestinataire::class, inversedBy="destinataire")
     */
    private $roleDestinataire;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getRoleDestinataire(): ?RoleDestinataire
    {
        return $this->roleDestinataire;
    }

    public function setRoleDestinataire(?RoleDestinataire $roleDestinataire): self
    {
        $this->roleDestinataire = $roleDestinataire;

        return $this;
    }
}
