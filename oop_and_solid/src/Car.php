<?php

declare(strict_types=1);

namespace AurimasVilys\OopAndSolid;

class Car implements Vehicle
{
    public const TYPE_NUM = 1;
    public const PRINT_NAME = 'Car';

    private string $model;
    private string $engine;
    private string $transmission;
    private string $fuelType;

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

        echo "Engine:\n";
        $engine = rtrim(fgets(STDIN));

        echo "Transmission:\n";
        $transmission = rtrim(fgets(STDIN));

        echo "Fuel type:\n";
        $fuelType = rtrim(fgets(STDIN));

        $car = new Car();
        $car->setModel($model);
        $car->setEngine($engine);
        $car->setTransmission($transmission);
        $car->setFuelType($fuelType);

        return $car;
    }

    public function output(): void
    {
        echo "Model: " . $this->getModel() . "\n";
        echo "Engine: " . $this->getEngine() . "\n";
        echo "Transmission: " . $this->getTransmission() . "\n";
        echo "Fuel type: " . $this->getFuelType() . "\n";
    }

    public function getBodyAssembleDetails(): string
    {
        return "Body is assembled successfully for model " . $this->getModel() . "\n";
    }

    public function getFuelFillingDetails(): string
    {
        return "Vehicle is fueled with " . $this->getFuelType() . " \n";
    }
}
