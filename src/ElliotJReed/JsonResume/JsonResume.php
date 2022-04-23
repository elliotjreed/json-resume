<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume;

use ElliotJReed\JsonResume\Entity\Resume;
use ElliotJReed\JsonResume\Normaliser\NullObjectNormaliser;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;

class JsonResume
{
    public function asJson(Resume $resume): string
    {
        return (new Serializer(
            [new DateTimeNormalizer([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d']), new NullObjectNormaliser()],
            [new JsonEncoder()]
        ))->serialize($resume, 'json');
    }
}
