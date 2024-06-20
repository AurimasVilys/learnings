<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class PrepareVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        $vehicle = $orderInquiry->getVehicle();
        echo "Vehicle with model " . $vehicle->getModel() . " and order number " . $orderInquiry->getOrderNumber() . " is being prepared for delivery\n";
    }
}