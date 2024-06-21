<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class LoadVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        echo "Vehicle is loaded to the truck\n";
    }
}