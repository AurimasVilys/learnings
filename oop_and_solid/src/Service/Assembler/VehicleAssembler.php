<?php

namespace AurimasVilys\OopAndSolid\Service\Assembler;

use AurimasVilys\OopAndSolid\Model\Vehicle;

class VehicleAssembler implements AssemblerInterface
{
    private array $assemblers = [];

    public function __construct(array $assemblers)
    {
        foreach ($assemblers as $assembler) {
            $this->assemblers[] = $assembler;
        }
    }

    public function assemble(Vehicle $vehicle): void
    {
        foreach ($this->assemblers as $assembler) {
            $assembler->assemble($vehicle);
        }
    }
}
