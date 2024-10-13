<?php

namespace AurimasVilys\CarDealership\Models;

use AurimasVilys\CarDealership\Enum\CustomerType;

class Order
{
    public array $vehicles = [];

    private ?CustomerType $customerType = null;

    public function setCustomerType(CustomerType $customerType): void
    {
        $this->customerType = $customerType;
    }

    public function getCustomerType(): ?CustomerType
    {
        return $this->customerType;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function getVehicles(): array
    {
        return $this->vehicles;
    }
}
