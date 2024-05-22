<?php

namespace AurimasVilys\OopAndSolid;

class OrderInquiryCollector
{
    public function collectOrder(): OrderInquiry
    {
        echo "What would you like to order?\n";
        echo "Please code:\n - 1 for Car\n - 2 for Electric car\n - 3 for Truck\n";
        $input = rtrim(fgets(STDIN));

        echo match ($input) {
            '1' => "You chose Car\n",
            '2' => "You chose Electric car\n",
            '3' => "You chose Truck\n",
            default => "We are not able to provide your selection\n",
        };

        $vehicle = match ($input) {
            '1' => Car::create(),
            '2' => ElectricCar::create(),
            '3' => Truck::create(),
            default => null,
        };

        if ($vehicle === null) {
            throw new \LogicException('Invalid input');
        }

        $orderInquiry = new OrderInquiry();
        $orderInquiry->setVehicle($vehicle);
        $orderInquiry->setOrderNumber(uniqid());

        echo 'Your order number is ' . $orderInquiry->getOrderNumber() . "\n";
        echo 'You have ordered a ' . get_class($vehicle) . "\n";
        echo "Vehicle information:\n";
        $vehicle->output();

        return $orderInquiry;
    }
}
