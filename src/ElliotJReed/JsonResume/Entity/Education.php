<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

use DateTimeInterface;

final class Education
{
    private ?string $institution = null;
    private ?string $url = null;
    private ?string $area = null;
    private ?string $studyType = null;
    private ?DateTimeInterface $startDate = null;
    private ?DateTimeInterface $endDate = null;
    private ?string $score = null;
    private array $courses = [];

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(?string $institution): self
    {
        $this->institution = $institution;

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

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getStudyType(): ?string
    {
        return $this->studyType;
    }

    public function setStudyType(?string $studyType): self
    {
        $this->studyType = $studyType;

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

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getCourses(): array
    {
        return $this->courses;
    }

    public function setCourses(string ...$courses): self
    {
        $this->courses = $courses;

        return $this;
    }

    public function addCourses(string ...$courses): self
    {
        $this->courses = [...$this->courses, ...$courses];

        return $this;
    }
}
