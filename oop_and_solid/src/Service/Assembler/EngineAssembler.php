<?php

namespace AurimasVilys\OopAndSolid\Service\Assembler;

use AurimasVilys\OopAndSolid\Model\Vehicle;

class EngineAssembler implements AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void
    {
        echo "Engine is assembled successfully for model " . $vehicle->getModel() . "\n";
    }
}
