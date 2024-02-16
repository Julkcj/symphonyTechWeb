<?php

namespace App\Entity;

use App\Repository\DiscussionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscussionsRepository::class)]
class Discussions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $tag = null;

    #[ORM\Column]
    private ?int $createBy = null;

    #[ORM\Column(length: 255)]
    private ?string $lastMessage = null;

    #[ORM\Column(length: 255)]
    private ?string $photoUlr = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updateAt = null;

    #[ORM\Column(type: Types::OBJECT)]
    private ?object $member = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): static
    {
        $this->tag = $tag;

        return $this;
    }

    public function getCreateBy(): ?int
    {
        return $this->createBy;
    }

    public function setCreateBy(int $createBy): static
    {
        $this->createBy = $createBy;

        return $this;
    }

    public function getLastMessage(): ?string
    {
        return $this->lastMessage;
    }

    public function setLastMessage(string $lastMessage): static
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    public function getPhotoUlr(): ?string
    {
        return $this->photoUlr;
    }

    public function setPhotoUlr(string $photoUlr): static
    {
        $this->photoUlr = $photoUlr;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeImmutable $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getMember(): ?object
    {
        return $this->member;
    }

    public function setMember(object $member): static
    {
        $this->member = $member;

        return $this;
    }
}
