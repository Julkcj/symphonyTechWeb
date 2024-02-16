<?php

namespace App\Entity;

use App\Repository\MessagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessagesRepository::class)]
class Messages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $text = null;

    #[ORM\Column(length: 255)]
    private ?string $surveyId = null;

    #[ORM\Column]
    private ?int $senderId = null;

    #[ORM\Column]
    private ?int $discussionsId = null;

    #[ORM\Column]
    private ?int $responseToMsgId = null;

    #[ORM\Column]
    private ?int $createdAt = null;

    #[ORM\Column(type: Types::OBJECT)]
    private ?object $reaction = null;

    #[ORM\Column(type: Types::OBJECT)]
    private ?object $file = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getSurveyId(): ?string
    {
        return $this->surveyId;
    }

    public function setSurveyId(string $surveyId): static
    {
        $this->surveyId = $surveyId;

        return $this;
    }

    public function getSenderId(): ?int
    {
        return $this->senderId;
    }

    public function setSenderId(int $senderId): static
    {
        $this->senderId = $senderId;

        return $this;
    }

    public function getDiscussionsId(): ?int
    {
        return $this->discussionsId;
    }

    public function setDiscussionsId(int $discussionsId): static
    {
        $this->discussionsId = $discussionsId;

        return $this;
    }

    public function getResponseToMsgId(): ?int
    {
        return $this->responseToMsgId;
    }

    public function setResponseToMsgId(int $responseToMsgId): static
    {
        $this->responseToMsgId = $responseToMsgId;

        return $this;
    }

    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getReaction(): ?object
    {
        return $this->reaction;
    }

    public function setReaction(object $reaction): static
    {
        $this->reaction = $reaction;

        return $this;
    }

    public function getFile(): ?object
    {
        return $this->file;
    }

    public function setFile(object $file): static
    {
        $this->file = $file;

        return $this;
    }
}
