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


    public function assemble(OrderInquiry $orderInquiry): void
    {
        $this->bodyAssembler->assemble($orderInquiry);
        $this->engineAssembler->assemble($orderInquiry);
    }
}
