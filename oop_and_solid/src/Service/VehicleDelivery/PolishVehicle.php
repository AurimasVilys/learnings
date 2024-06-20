<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class PolishVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        echo "Vehicle is polished\n";
    }
}