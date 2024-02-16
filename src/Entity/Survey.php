<?php

namespace App\Entity;

use App\Repository\SurveyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SurveyRepository::class)]
class Survey
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $question = null;

    #[ORM\Column]
    private ?int $discussionId = null;

    #[ORM\Column]
    private ?int $creatorId = null;

    #[ORM\Column]
    private ?int $endedAt = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $options = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getDiscussionId(): ?int
    {
        return $this->discussionId;
    }

    public function setDiscussionId(int $discussionId): static
    {
        $this->discussionId = $discussionId;

        return $this;
    }

    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }

    public function setCreatorId(int $creatorId): static
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getEndedAt(): ?int
    {
        return $this->endedAt;
    }

    public function setEndedAt(int $endedAt): static
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }
}
