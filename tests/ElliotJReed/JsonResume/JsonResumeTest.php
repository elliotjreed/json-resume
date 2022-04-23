<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume;

use DateTimeImmutable;
use ElliotJReed\JsonResume\Entity\Award;
use ElliotJReed\JsonResume\Entity\Basics;
use ElliotJReed\JsonResume\Entity\Certificate;
use ElliotJReed\JsonResume\Entity\Education;
use ElliotJReed\JsonResume\Entity\Interest;
use ElliotJReed\JsonResume\Entity\Language;
use ElliotJReed\JsonResume\Entity\Location;
use ElliotJReed\JsonResume\Entity\Profile;
use ElliotJReed\JsonResume\Entity\Project;
use ElliotJReed\JsonResume\Entity\Publication;
use ElliotJReed\JsonResume\Entity\Reference;
use ElliotJReed\JsonResume\Entity\Resume;
use ElliotJReed\JsonResume\Entity\Skill;
use ElliotJReed\JsonResume\Entity\Volunteer;
use ElliotJReed\JsonResume\Entity\Work;
use PHPUnit\Framework\TestCase;

final class JsonResumeTest extends TestCase
{
    public function testItGreetsUser(): void
    {
        $resume = (new Resume())
            ->setBasics((new Basics())
                ->setName('Elliot Reed')
                ->setLabel('Technical Lead in Software Development')
                ->setImage('https://res.cloudinary.com/elliotjreed/image/upload/v1553434444/elliotjreed.jpg')
                ->setEmail('email@example.com')
                ->setPhone('123 456 789')
                ->setUrl('https://www.elliotjreed.com')
                ->setSummary('Technical Lead with over nine years software development and management experience')
                ->setLocation((new Location())
                    ->setAddress('253 Beckhampton Road')
                    ->setPostalCode('NG5 5NE')
                    ->setCity('Nottingham')
                    ->setCountryCode('GB')
                    ->setRegion('Nottinghamshire'))
                    ->setProfiles((new Profile())
                        ->setUsername('elliotjreed')
                        ->setNetwork('LinkedIn')
                        ->setUrl('https://www.linkedin.com/in/elliotjreed/'))
                    ->addProfiles((new Profile())
                        ->setUsername('elliotjreed')
                        ->setNetwork('GitHub')
                        ->setUrl('https://github.com/elliotjreed')))
            ->setWork((new Work())
                ->setName('Bunches')
                ->setPosition('Technical Lead')
                ->setUrl('https://www.bunches.co.uk')
                ->setStartDate(new DateTimeImmutable('2017-02-27 08:30:00'))
                ->setEndDate(null)
                ->setSummary(
                    'Responsible for designing, developing, and maintaining public websites and internal systems.'
                )
                ->setHighlights(
                    'Trained developers in test-driven development, SOLID design and clean code practices.',
                    'Introduced a wide range of logging, analytics, and A/B testing tools.'
                ))
            ->addWork((new Work())
                ->setName('Bunches')
                ->setPosition('Head of Software Development')
                ->setUrl('https://www.universal-textiles.com/')
                ->setStartDate(new DateTimeImmutable('2015-12-01 08:30:00'))
                ->setEndDate(new DateTimeImmutable('2017-02-26 23:59:59'))
                ->setSummary(
                    'Responsible for the development team and integrating third-party suppliers and clients'
                )
                ->addHighlights('Integrations developed for platforms in over 30 countries and 8 languages'))
            ->setVolunteer((new Volunteer())
                ->setOrganization('British Red Cross')
                ->setPosition('Refugee Support')
                ->setUrl('https://www.redcross.org.uk/')
                ->setStartDate(new DateTimeImmutable('2008-10-22 09:00:00'))
                ->setEndDate(new DateTimeImmutable('2012-07-01 05:00:00'))
                ->setSummary('Ran a series of courses for refugees aiming to take the British Citizenship Test')
                ->setHighlights('The course was successful and rolled out nationally.'))
            ->addVolunteer((new Volunteer())
                ->setOrganization('Nottingham Law Centre')
                ->setPosition('Legal Support')
                ->setUrl('https://www.nottinghamlawcentre.org.uk/')
                ->setStartDate(new DateTimeImmutable('2011-11-01 09:00:00'))
                ->setEndDate(new DateTimeImmutable('2012-07-01 05:00:00'))
                ->setSummary('Supported the centre providing free legal advice')
                ->addHighlights('The centre was busy'))
            ->setEducation((new Education())
                ->setInstitution('University of Nottingham')
                ->setUrl('https://www.nottingham.ac.uk/')
                ->setArea('Theology')
                ->setStudyType('BA (Hons.)')
                ->setStartDate(new DateTimeImmutable('2008-09-22 11:00:00'))
                ->setEndDate(new DateTimeImmutable('2011-06-27 13:00:00'))
                ->setScore('Upper Second-Class Honours')
                ->setCourses(''))
            ->addEducation((new Education())
                ->setInstitution('Nottingham Law School')
                ->setUrl('https://www.ntu.ac.uk/study-and-courses/academic-schools/nottingham-law-school')
                ->setArea('Graduate Diploma in Law')
                ->setStudyType('Graduate Diploma')
                ->setStartDate(new DateTimeImmutable('2011-09-22 09:00:00'))
                ->setEndDate(new DateTimeImmutable('2012-06-20 17:00:00'))
                ->setScore('Graduated')
                ->setCourses('Introduction to Law')
                ->addCourses('EU Law', 'Contract Law'))
            ->setAwards((new Award())
                ->setTitle('An Award')
                ->setDate(new DateTimeImmutable('2009-09-22 11:00:00'))
                ->setAwarder('Awarder Inc.')
                ->setSummary('Award for being awarded with awards'))
            ->addAwards((new Award())
                ->setTitle('Another Award')
                ->setDate(new DateTimeImmutable('2010-09-28 14:00:00'))
                ->setAwarder('Another Awarder Inc.')
                ->setSummary('Another award for being awarded with awards'))
            ->setCertificates(
                (new Certificate())
                    ->setName('Personal Alcohol Licence')
                    ->setDate(new DateTimeImmutable('2013-04-01 16:00:00'))
                    ->setIssuer('Nottingham City Council')
                    ->setUrl('https://www.nottinghamcity.gov.uk/')
            )
            ->addCertificates((new Certificate())
                ->setName('First Aid at Work')
                ->setDate(new DateTimeImmutable('2021-08-20 16:00:00'))
                ->setIssuer('St John Ambulance')
                ->setUrl('https://www.sja.org.uk/'))
            ->setPublications((new Publication())
                ->setName('A Publication')
                ->setPublisher('A Publisher')
                ->setReleaseDate(new DateTimeImmutable('2018-01-01 12:00:00'))
                ->setUrl('https://www.example.com')
                ->setSummary('A publication on publications'))
            ->addPublications((new Publication())
                ->setName('Another Publication')
                ->setPublisher('Another Publisher')
                ->setReleaseDate(new DateTimeImmutable('2011-01-01 12:00:00'))
                ->setUrl('https://www.example.net')
                ->setSummary('Another publication on publications'))
            ->setSkills(
                (new Skill())
                    ->setName('SQL')
                    ->setLevel('Proficient')
                    ->setKeywords('MySQL', 'SQLite')->addKeywords('RDS', 'Postgres'),
                (new Skill())
                    ->setName('SQL')
                    ->setLevel('Proficient')
                    ->setKeywords('Symfony', 'PHPUnit')->addKeywords('Composer')
            )
            ->addSkills((new Skill())
                ->setName('Javascript')
                ->setLevel('Proficient')
                ->setKeywords('React'))
            ->setLanguages((new Language())
                ->setLanguage('English')
                ->setFluency('Native'))
            ->addLanguages((new Language())
                ->setLanguage('French')
                ->setFluency('Below Basic, malheureusement!'))
            ->setInterests((new Interest())
                ->setName('Linux')
                ->setKeywords('Fedora', 'Ubuntu')
                ->addKeywords('Debian', 'Alpine'))
            ->addInterests((new Interest())
                ->setName('Docker')
                ->setKeywords('Docker Compose'))
            ->setReferences((new Reference())
                ->setName('Me')
                ->setReference('Types code and makes grunting noises proficiently'))
            ->addReferences((new Reference())
                ->setName('My Cat')
                ->setReference('Feeds me on demand'))
            ->setProjects((new Project())
                ->setName('JSON Resume PHP Package')
                ->setDescription('A PHP package for building a JSON Resume')
                ->setHighlights('It conforms to the JSON Resume standard')
                ->addHighlights('It works, so that is nice.')
                ->setKeywords('JSON', 'Resume')
                ->addKeywords('PHP')
                ->setStartDate(new DateTimeImmutable('2022-04-21 17:30:00'))
                ->setEndDate(new DateTimeImmutable('2022-04-22 17:00:00'))
                ->setUrl('https://github.com/elliotjreed/json-resume')
                ->setRoles('Developer')
                ->addRoles('Maintainer')
                ->setEntity('Personal Project')
                ->setType('Package'))
        ->addProjects((new Project())
                ->setName('Disposable email filter')
                ->setDescription('A PHP package for detecting temporary email addresses')
                ->setHighlights('It automatically updates daily')
                ->addHighlights('Over 12 000 installs so far')
                ->setKeywords('Email', 'Spam')
                ->addKeywords('PHP')
                ->setStartDate(new DateTimeImmutable('2019-03-03 22:30:00'))
                ->setUrl('github.com/elliotjreed/disposable-emails-filter-php')
                ->setRoles('Developer')
                ->addRoles('Maintainer')
                ->setEntity('Personal Project')
                ->setType('Package'));

        $this->assertJsonStringEqualsJsonString('{
          "awards": [
            {
              "awarder": "Awarder Inc.",
              "date": "2009-09-22",
              "summary": "Award for being awarded with awards",
              "title": "An Award"
            },
            {
              "awarder": "Another Awarder Inc.",
              "date": "2010-09-28",
              "summary": "Another award for being awarded with awards",
              "title": "Another Award"
            }
          ],
          "basics": {
            "email": "email@example.com",
            "image": "https://res.cloudinary.com/elliotjreed/image/upload/v1553434444/elliotjreed.jpg",
            "label": "Technical Lead in Software Development",
            "location": {
              "address": "253 Beckhampton Road",
              "city": "Nottingham",
              "countryCode": "GB",
              "postalCode": "NG5 5NE",
              "region": "Nottinghamshire"
            },
            "name": "Elliot Reed",
            "phone": "123 456 789",
            "profiles": [
              {
                "network": "LinkedIn",
                "url": "https://www.linkedin.com/in/elliotjreed/",
                "username": "elliotjreed"
              },
              {
                "network": "GitHub",
                "url": "https://github.com/elliotjreed",
                "username": "elliotjreed"
              }
            ],
            "summary": "Technical Lead with over nine years software development and management experience",
            "url": "https://www.elliotjreed.com"
          },
          "certificates": [
            {
              "date": "2013-04-01",
              "issuer": "Nottingham City Council",
              "name": "Personal Alcohol Licence",
              "url": "https://www.nottinghamcity.gov.uk/"
            },
            {
              "date": "2021-08-20",
              "issuer": "St John Ambulance",
              "name": "First Aid at Work",
              "url": "https://www.sja.org.uk/"
            }
          ],
          "education": [
            {
              "area": "Theology",
              "courses": [
                ""
              ],
              "endDate": "2011-06-27",
              "institution": "University of Nottingham",
              "score": "Upper Second-Class Honours",
              "startDate": "2008-09-22",
              "studyType": "BA (Hons.)",
              "url": "https://www.nottingham.ac.uk/"
            },
            {
              "area": "Graduate Diploma in Law",
              "courses": [
                "Introduction to Law",
                "EU Law",
                "Contract Law"
              ],
              "endDate": "2012-06-20",
              "institution": "Nottingham Law School",
              "score": "Graduated",
              "startDate": "2011-09-22",
              "studyType": "Graduate Diploma",
              "url": "https://www.ntu.ac.uk/study-and-courses/academic-schools/nottingham-law-school"
            }
          ],
          "interests": [
            {
              "keywords": [
                "Fedora",
                "Ubuntu",
                "Debian",
                "Alpine"
              ],
              "name": "Linux"
            },
            {
              "keywords": [
                "Docker Compose"
              ],
              "name": "Docker"
            }
          ],
          "languages": [
            {
              "fluency": "Native",
              "language": "English"
            },
            {
              "fluency": "Below Basic, malheureusement!",
              "language": "French"
            }
          ],
          "projects": [
            {
              "description": "A PHP package for building a JSON Resume",
              "endDate": "2022-04-22",
              "entity": "Personal Project",
              "highlights": [
                "It conforms to the JSON Resume standard",
                "It works, so that is nice."
              ],
              "keywords": [
                "JSON",
                "Resume",
                "PHP"
              ],
              "name": "JSON Resume PHP Package",
              "roles": [
                "Developer",
                "Maintainer"
              ],
              "startDate": "2022-04-21",
              "type": "Package",
              "url": "https://github.com/elliotjreed/json-resume"
            },
            {
              "description": "A PHP package for detecting temporary email addresses",
              "entity": "Personal Project",
              "highlights": [
                "It automatically updates daily",
                "Over 12 000 installs so far"
              ],
              "keywords": [
                "Email",
                "Spam",
                "PHP"
              ],
              "name": "Disposable email filter",
              "roles": [
                "Developer",
                "Maintainer"
              ],
              "startDate": "2019-03-03",
              "type": "Package",
              "url": "github.com/elliotjreed/disposable-emails-filter-php"
            }
          ],
          "publications": [
            {
              "name": "A Publication",
              "publisher": "A Publisher",
              "releaseDate": "2018-01-01",
              "summary": "A publication on publications",
              "url": "https://www.example.com"
            },
            {
              "name": "Another Publication",
              "publisher": "Another Publisher",
              "releaseDate": "2011-01-01",
              "summary": "Another publication on publications",
              "url": "https://www.example.net"
            }
          ],
          "references": [
            {
              "name": "Me",
              "reference": "Types code and makes grunting noises proficiently"
            },
            {
              "name": "My Cat",
              "reference": "Feeds me on demand"
            }
          ],
          "skills": [
            {
              "keywords": [
                "MySQL",
                "SQLite",
                "RDS",
                "Postgres"
              ],
              "level": "Proficient",
              "name": "SQL"
            },
            {
              "keywords": [
                "Symfony",
                "PHPUnit",
                "Composer"
              ],
              "level": "Proficient",
              "name": "SQL"
            },
            {
              "keywords": [
                "React"
              ],
              "level": "Proficient",
              "name": "Javascript"
            }
          ],
          "volunteer": [
            {
              "endDate": "2012-07-01",
              "highlights": [
                "The course was successful and rolled out nationally."
              ],
              "organization": "British Red Cross",
              "position": "Refugee Support",
              "startDate": "2008-10-22",
              "summary": "Ran a series of courses for refugees aiming to take the British Citizenship Test",
              "url": "https://www.redcross.org.uk/"
            },
            {
              "endDate": "2012-07-01",
              "highlights": [
                "The centre was busy"
              ],
              "organization": "Nottingham Law Centre",
              "position": "Legal Support",
              "startDate": "2011-11-01",
              "summary": "Supported the centre providing free legal advice",
              "url": "https://www.nottinghamlawcentre.org.uk/"
            }
          ],
          "work": [
            {
              "highlights": [
                "Trained developers in test-driven development, SOLID design and clean code practices.",
                "Introduced a wide range of logging, analytics, and A/B testing tools."
              ],
              "name": "Bunches",
              "position": "Technical Lead",
              "startDate": "2017-02-27",
              "summary": "Responsible for designing, developing, and maintaining public websites and internal systems.",
              "url": "https://www.bunches.co.uk"
            },
            {
              "endDate": "2017-02-26",
              "highlights": [
                "Integrations developed for platforms in over 30 countries and 8 languages"
              ],
              "name": "Bunches",
              "position": "Head of Software Development",
              "startDate": "2015-12-01",
              "summary": "Responsible for the development team and integrating third-party suppliers and clients",
              "url": "https://www.universal-textiles.com/"
            }
          ]
        }', (new JsonResume())->asJson($resume));
    }
}
