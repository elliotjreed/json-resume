<?php

declare(strict_types=1);

namespace ElliotJReed\JsonResume\Normaliser;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

final class NullObjectNormaliser extends ObjectNormalizer
{
    public function normalize($object, string $format = null, array $context = []): array
    {
        $data = parent::normalize($object, $format, $context);

        return \array_filter($data, static function ($value): bool {
            return null !== $value;
        });
    }
}
