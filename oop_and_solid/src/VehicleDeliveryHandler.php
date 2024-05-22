<?php

namespace AurimasVilys\OopAndSolid;

class VehicleDeliveryHandler
{
    public function deliver(OrderInquiry $orderInquiry): void
    {
        echo "Vehicle with model " . $orderInquiry->getVehicle()->getModel() . " and order number " . $orderInquiry->getOrderNumber() . " is being prepared for delivery\n";
        echo "Vehicle is washed\n";
        echo "Vehicle is polished\n";
        echo "Vehicle is loaded to the truck\n";
        echo "Vehicle is delivered\n";
        echo "Vehicle is unloaded from the truck\n";

        echo "Vehicle is on the way to gas station and\n";
        if (!$orderInquiry->getVehicle() instanceof ElectricCar) {
            echo "Vehicle is fueled with " . $orderInquiry->getVehicle()->getFuelType() . " \n";
        } else {
            echo "Oh no! Electric vehicle shouldn't be fueled with gas!\n";
        }

        echo "Vehicle is ready for the customer\n";
    }
}
