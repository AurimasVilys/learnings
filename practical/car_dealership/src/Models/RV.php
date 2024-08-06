<?php

namespace AurimasVilys\CarDealership\Models;

class RV implements VehicleInterface
{
    private string $fuelType;

    private string $color;

    private string $transmission;

    private array $extras;

    private string $size;

    public function __construct(
        string $fuelType,
        string $color,
        string $transmission,
        array $extras,
        string $size
    ) {
        $this->fuelType = $fuelType;
        $this->color = $color;
        $this->transmission = $transmission;
        $this->extras = $extras;
        $this->size = $size;
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

    public function getSize(): string
    {
        return $this->size;
    }
}
