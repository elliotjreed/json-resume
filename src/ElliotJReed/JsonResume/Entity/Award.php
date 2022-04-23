<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

use DateTimeInterface;

final class Award
{
    private ?string $title = null;
    private ?DateTimeInterface $date = null;
    private ?string $awarder = null;
    private ?string $summary = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAwarder(): ?string
    {
        return $this->awarder;
    }

    public function setAwarder(?string $awarder): self
    {
        $this->awarder = $awarder;

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
}
