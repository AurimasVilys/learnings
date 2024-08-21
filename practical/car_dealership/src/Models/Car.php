<?php

namespace AurimasVilys\CarDealership\Models;

class Car implements Vehicle
{
    private string $fuelType;

    private string $color;

    private string $transmission;

    private array $extras;

    public function __construct(string $fuelType, string $color, string $transmission, array $extras)
    {
        $this->fuelType = $fuelType;
        $this->color = $color;
        $this->transmission = $transmission;
        $this->extras = $extras;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTransmission(): string
    {
        return $this->transmission;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
