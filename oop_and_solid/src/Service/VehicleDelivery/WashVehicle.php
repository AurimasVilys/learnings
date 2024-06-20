<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class WashVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        echo "Vehicle is washed\n";
    }
}