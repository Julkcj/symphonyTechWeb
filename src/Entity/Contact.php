<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user1Id = null;

    #[ORM\Column]
    private ?int $user2id = null;

    #[ORM\Column]
    private ?bool $user1blocked = null;

    #[ORM\Column]
    private ?bool $user2blocked = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $addedAt = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser1Id(): ?int
    {
        return $this->user1Id;
    }

    public function setUser1Id(int $user1Id): static
    {
        $this->user1Id = $user1Id;

        return $this;
    }

    public function getUser2id(): ?int
    {
        return $this->user2id;
    }

    public function setUser2id(int $user2id): static
    {
        $this->user2id = $user2id;

        return $this;
    }

    public function isUser1blocked(): ?bool
    {
        return $this->user1blocked;
    }

    public function setUser1blocked(bool $user1blocked): static
    {
        $this->user1blocked = $user1blocked;

        return $this;
    }

    public function isUser2blocked(): ?bool
    {
        return $this->user2blocked;
    }

    public function setUser2blocked(bool $user2blocked): static
    {
        $this->user2blocked = $user2blocked;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeImmutable
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTimeImmutable $addedAt): static
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
