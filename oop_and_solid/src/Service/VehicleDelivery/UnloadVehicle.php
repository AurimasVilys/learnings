<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class UnloadVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        echo "Vehicle is unloaded from the truck\n";
    }
}