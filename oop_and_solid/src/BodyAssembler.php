<?php

namespace AurimasVilys\OopAndSolid;

class BodyAssembler implements AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void
    {
        // Logic to assemble the body
        echo "Body is assembled successfully for model " . $vehicle->getModel() . "\n";

        if ($vehicle instanceof Truck) {
            // Logic to assemble the truck bed
            echo "Truck bed is assembled successfully for model " . $vehicle->getModel() . "\n";
        }
    }
}
