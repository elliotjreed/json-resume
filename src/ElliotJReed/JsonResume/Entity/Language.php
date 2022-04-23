<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

final class Language
{
    private ?string $language = null;
    private ?string $fluency = null;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getFluency(): ?string
    {
        return $this->fluency;
    }

    public function setFluency(?string $fluency): self
    {
        $this->fluency = $fluency;

        return $this;
    }
}
