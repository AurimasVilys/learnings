<?php

namespace AurimasVilys\CarDealership\Models;

class Truck implements Vehicle
{
    public const NAME = 'truck';

    private string $fuelType;

    private string $color;

    private string $transmission;

    private string $truckType;

    private array $extras;

    public function setFuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setTransmission(string $transmission): void
    {
        $this->transmission = $transmission;
    }

    public function setTruckType(string $truckType): void
    {
        $this->truckType = $truckType;
    }

    public function setExtras(array $extras): void
    {
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

    public function getTruckType(): string
    {
        return $this->truckType;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
