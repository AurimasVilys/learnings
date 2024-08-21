<?php

use AurimasVilys\CarDealership\Models\CustomerInterface;

class Dealership
{
    private CustomerInterface $customer;

    public function createCustomer(string $type): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function getVehicles(): array
    {
        return $this->vehicles;
    }
}