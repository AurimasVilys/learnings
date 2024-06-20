<?php

namespace AurimasVilys\OopAndSolid\Service\Assembler;

use AurimasVilys\OopAndSolid\Model\Vehicle;

interface AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void;
}
