<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

final class Basics
{
    private ?string $name = null;
    private ?string $label = null;
    private ?string $image = null;
    private ?string $email = null;
    private ?string $phone = null;
    private ?string $url = null;
    private ?string $summary = null;
    private ?Location $location = null;
    private array $profiles = [];

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

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

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getProfiles(): array
    {
        return $this->profiles;
    }

    public function setProfiles(Profile ...$profiles): self
    {
        $this->profiles = $profiles;

        return $this;
    }

    public function addProfiles(Profile ...$profiles): self
    {
        $this->profiles = [...$this->profiles, ...$profiles];

        return $this;
    }
}
