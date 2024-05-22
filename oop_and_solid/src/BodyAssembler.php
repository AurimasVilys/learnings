<?php

namespace AurimasVilys\OopAndSolid;

class BodyAssembler implements AssemblerInterface
{
    public function assemble(OrderInquiry $orderInquiry): void
    {
        // Logic to assemble the body
        echo "Body is assembled successfully for model " . $orderInquiry->getVehicle()->getModel() . "\n";

        if ($orderInquiry->getVehicle() instanceof Truck) {
            // Logic to assemble the truck bed
            echo "Truck bed is assembled successfully for model " . $orderInquiry->getVehicle()->getModel() . "\n";
        }
    }
}
