<?php

namespace Pantono\Contracts\Types\Geometry;

use Pantono\Contracts\Types\Interfaces\SavableType;
use Pantono\Contracts\Types\Interfaces\HydratableType;

class Point implements SavableType, HydratableType
{
    private float $latitude;
    private float $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getSaveValue(): string
    {
        return 'POINT(' . $this->getLatitude() . ' ' . $this->getLongitude() . ')';
    }

    public static function hydrate(string $input): ?self
    {
        $data = unpack('x/x/x/x/d*', substr($input, 5));
        if ($data === false) {
            return null;
        }
        if (is_float($data[0]) && is_float($data[1])) {
            return new self($data[0], $data[1]);
        }

        return null;
    }
}
