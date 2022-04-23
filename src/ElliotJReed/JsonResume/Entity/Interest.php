<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

final class Interest
{
    private ?string $name = null;
    private array $keywords = [];

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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
}
