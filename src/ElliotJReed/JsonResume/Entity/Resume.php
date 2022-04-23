<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Entity;

final class Resume
{
    private ?Basics $basics = null;
    private array $work = [];
    private array $volunteer = [];
    private array $education = [];
    private array $awards = [];
    private array $certificates = [];
    private array $publications = [];
    private array $skills = [];
    private array $languages = [];
    private array $interests = [];
    private array $references = [];
    private array $projects = [];

    public function getBasics(): ?Basics
    {
        return $this->basics;
    }

    public function setBasics(?Basics $basics): self
    {
        $this->basics = $basics;

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Work[]
     */
    public function getWork(): array
    {
        return $this->work;
    }

    public function setWork(Work ...$work): self
    {
        $this->work = $work;

        return $this;
    }

    public function addWork(Work ...$work): self
    {
        $this->work = [...$this->work, ...$work];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Volunteer[]
     */
    public function getVolunteer(): array
    {
        return $this->volunteer;
    }

    public function setVolunteer(Volunteer ...$volunteer): self
    {
        $this->volunteer = $volunteer;

        return $this;
    }

    public function addVolunteer(Volunteer ...$volunteer): self
    {
        $this->volunteer = [...$this->volunteer, ...$volunteer];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Education[]
     */
    public function getEducation(): array
    {
        return $this->education;
    }

    public function setEducation(Education ...$education): self
    {
        $this->education = $education;

        return $this;
    }

    public function addEducation(Education ...$education): self
    {
        $this->education = [...$this->education, ...$education];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Award[]
     */
    public function getAwards(): array
    {
        return $this->awards;
    }

    public function setAwards(Award ...$award): self
    {
        $this->awards = $award;

        return $this;
    }

    public function addAwards(Award ...$award): self
    {
        $this->awards = [...$this->awards, ...$award];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Certificate[]
     */
    public function getCertificates(): array
    {
        return $this->certificates;
    }

    public function setCertificates(Certificate ...$certificate): self
    {
        $this->certificates = $certificate;

        return $this;
    }

    public function addCertificates(Certificate ...$certificate): self
    {
        $this->certificates = [...$this->certificates, ...$certificate];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Publication[]
     */
    public function getPublications(): array
    {
        return $this->publications;
    }

    public function setPublications(Publication ...$publication): self
    {
        $this->publications = $publication;

        return $this;
    }

    public function addPublications(Publication ...$publication): self
    {
        $this->publications = [...$this->publications, ...$publication];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Skill[]
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    public function setSkills(Skill ...$skill): self
    {
        $this->skills = $skill;

        return $this;
    }

    public function addSkills(Skill ...$skill): self
    {
        $this->skills = [...$this->skills, ...$skill];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Language[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(Language ...$language): self
    {
        $this->languages = $language;

        return $this;
    }

    public function addLanguages(Language ...$language): self
    {
        $this->languages = [...$this->languages, ...$language];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Interest[]
     */
    public function getInterests(): array
    {
        return $this->interests;
    }

    public function setInterests(Interest ...$interest): self
    {
        $this->interests = $interest;

        return $this;
    }

    public function addInterests(Interest ...$interest): self
    {
        $this->interests = [...$this->interests, ...$interest];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Reference[]
     */
    public function getReferences(): array
    {
        return $this->references;
    }

    public function setReferences(Reference ...$reference): self
    {
        $this->references = $reference;

        return $this;
    }

    public function addReferences(Reference ...$reference): self
    {
        $this->references = [...$this->references, ...$reference];

        return $this;
    }

    /**
     * @return \ElliotJReed\JsonResume\Entity\Project[]
     */
    public function getProjects(): array
    {
        return $this->projects;
    }

    public function setProjects(Project ...$project): self
    {
        $this->projects = $project;

        return $this;
    }

    public function addProjects(Project ...$project): self
    {
        $this->projects = [...$this->projects, ...$project];

        return $this;
    }
}
