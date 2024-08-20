<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class DeliverVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        echo "Vehicle is delivered\n";
    }
}