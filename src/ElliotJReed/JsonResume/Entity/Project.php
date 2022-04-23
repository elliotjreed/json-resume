<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

use DateTimeInterface;

final class Project
{
    private ?string $name = null;
    private ?string $description = null;
    private array $highlights = [];
    private array $keywords = [];
    private ?DateTimeInterface $startDate = null;
    private ?DateTimeInterface $endDate = null;
    private ?string $url = null;
    private array $roles = [];
    private ?string $entity = null;
    private ?string $type = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHighlights(): array
    {
        return $this->highlights;
    }

    public function setHighlights(string ...$highlights): self
    {
        $this->highlights = $highlights;

        return $this;
    }

    public function addHighlights(string ...$highlights): self
    {
        $this->highlights = [...$this->highlights, ...$highlights];

        return $this;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function setKeywords(string ...$keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function addKeywords(string ...$keywords): self
    {
        $this->keywords = [...$this->keywords, ...$keywords];

        return $this;
    }

    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(string ...$roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function addRoles(string ...$roles): self
    {
        $this->roles = [...$this->roles, ...$roles];

        return $this;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(?string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
