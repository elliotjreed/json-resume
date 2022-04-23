<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

use DateTimeInterface;

final class Work
{
    private ?string $name = null;
    private ?string $position = null;
    private ?string $url = null;
    private ?DateTimeInterface $startDate = null;
    private ?DateTimeInterface $endDate = null;
    private ?string $summary = null;
    private array $highlights = [];

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

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

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getHighlights(): array
    {
        return $this->highlights;
    }

    public function setHighlights(string ...$highlights): self
    {
        $this->highlights = [...$highlights];

        return $this;
    }

    public function addHighlights(string ...$highlights): self
    {
        $this->highlights = [...$this->highlights, ...$highlights];

        return $this;
    }
}
