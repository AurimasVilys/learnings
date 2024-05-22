<?php

namespace AurimasVilys\OopAndSolid;

class EngineAssembler implements AssemblerInterface
{
    public function assemble(OrderInquiry $orderInquiry): void
    {
        echo "Engine is assembled successfully for model " . $orderInquiry->getVehicle()->getModel() . "\n";
    }
}
