<?php

namespace AurimasVilys\OopAndSolid\Factory;

use AurimasVilys\OopAndSolid\Model\Vehicle;

interface VehicleFactoryInterface
{
    public function create(int $type): ?Vehicle;
}
