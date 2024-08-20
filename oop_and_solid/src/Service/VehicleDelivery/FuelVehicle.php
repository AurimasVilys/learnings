<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\GasFuelled;
use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class FuelVehicle implements DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void
    {
        $vehicle = $orderInquiry->getVehicle();
        if ($vehicle instanceof GasFuelled) {
            echo "Vehicle is on the way to gas station and\n";
            echo "Vehicle is fueled with " . $vehicle->getFuelType() . " \n";
        }
    }
}