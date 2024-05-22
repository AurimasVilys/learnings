<?php

namespace AurimasVilys\OopAndSolid;

class Truck implements Vehicle
{
    private string $model;
    private string $engine;
    private string $transmission;
    private string $fuelType;
    private int $truckBedVolume;

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
        return $this->truckBedVolume;
    }

    public function setTruckBedVolume(int $truckBedVolume): void
    {
        $this->truckBedVolume = $truckBedVolume;
    }

    public static function create(): Truck
    {
        echo "Model:\n";
        $model = rtrim(fgets(STDIN));

        echo "Engine:\n";
        $engine = rtrim(fgets(STDIN));

        echo "Transmission:\n";
        $transmission = rtrim(fgets(STDIN));

        echo "Fuel type:\n";
        $fuelType = rtrim(fgets(STDIN));

        echo "Truck bed volume:\n";
        $truckBedVolume = (int)rtrim(fgets(STDIN));

        $truck = new Truck();
        $truck->setModel($model);
        $truck->setEngine($engine);
        $truck->setTransmission($transmission);
        $truck->setFuelType($fuelType);
        $truck->setTruckBedVolume($truckBedVolume);

        return $truck;
    }

    public function output(): void
    {
        echo "Model: " . $this->getModel() . "\n";
        echo "Engine: " . $this->getEngine() . "\n";
        echo "Transmission: " . $this->getTransmission() . "\n";
        echo "Fuel type: " . $this->getFuelType() . "\n";
        echo "Truck bed volume: " . $this->getTruckBedVolume() . "\n";
    }
}
