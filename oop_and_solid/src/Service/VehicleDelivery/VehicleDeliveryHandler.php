<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

class VehicleDeliveryHandler
{
    private array $deliverySteps = [];

    public function __construct(array $deliverySteps)
    {
        $this->deliverySteps = $deliverySteps;
    }

    public function deliver(OrderInquiry $orderInquiry): void
    {
        foreach ($this->deliverySteps as $step) {
            $step->execute($orderInquiry);
        }
    }
}