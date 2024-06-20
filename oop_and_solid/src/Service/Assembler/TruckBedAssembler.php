<?php

namespace AurimasVilys\OopAndSolid\Service\Assembler;

use AurimasVilys\OopAndSolid\Model\Truck;
use AurimasVilys\OopAndSolid\Model\Vehicle;

class TruckBedAssembler implements AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Truck) {
            echo "Truck bed is assembled successfully for model " . $vehicle->getModel() . "\n";
        }
    }
}