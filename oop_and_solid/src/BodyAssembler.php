<?php

namespace AurimasVilys\OopAndSolid;

class BodyAssembler implements AssemblerInterface
{
    public function assemble(Vehicle $vehicle): void
    {
        echo $vehicle->getBodyAssembleDetails();
    }
}
