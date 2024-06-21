<?php

namespace AurimasVilys\OopAndSolid\Service\Assembler;

use AurimasVilys\OopAndSolid\Model\Vehicle;

class BodyAssembler implements AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void
    {
        echo "Body is assembled successfully for model " . $vehicle->getModel() . "\n";
    }
}