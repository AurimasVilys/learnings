<?php

namespace AurimasVilys\OopAndSolid;

class EngineAssembler implements AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void
    {
        echo "Engine is assembled successfully for model " . $vehicle->getModel() . "\n";
    }
}
