<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

final class Skill
{
    private ?string $name = null;
    private ?string $level = null;
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

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

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
