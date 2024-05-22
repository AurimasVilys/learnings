<?php

declare(strict_types=1);

namespace AurimasVilys\OopAndSolid;

class ElectricCar extends Car
{
    private string $model;
    private string $engine;
    private string $transmission;
    private string $fuelType;

    public function __construct()
    {
        $this->setFuelType('Electric');
        $this->setEngine('Electric');
        $this->setTransmission('Automatic');
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }

    public function setEngine(string $engine): void
    {
        $this->engine = $engine;
    }

    public function getTransmission(): string
    {
        return $this->transmission;
    }

    public function setTransmission(string $transmission): void
    {
        $this->transmission = $transmission;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function setFuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function getTruckBedVolume(): int
    {
        throw new \LogicException('Car does not have a truck bed volume');
    }

    public static function create(): Car
    {
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        $car = new ElectricCar();
        $car->setModel($model);

        return $car;
    }
}
