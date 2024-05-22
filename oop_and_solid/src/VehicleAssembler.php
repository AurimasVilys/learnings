<?php

namespace AurimasVilys\OopAndSolid;

class VehicleAssembler implements AssemblerInterface
{
    private BodyAssembler $bodyAssembler;

    private EngineAssembler $engineAssembler;

    public function __construct(
        BodyAssembler $bodyAssembler,
        EngineAssembler $engineAssembler
    ) {
        $this->bodyAssembler = $bodyAssembler;
        $this->engineAssembler = $engineAssembler;
    }


    public function assemble(Vehicle $vehicle): void
    {
        $this->bodyAssembler->assemble($vehicle);
        $this->engineAssembler->assemble($vehicle);
    }
}
