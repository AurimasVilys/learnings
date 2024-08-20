<?php

namespace AurimasVilys\OopAndSolid\Service\VehicleDelivery;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;

interface DeliveryStep
{
    public function execute(OrderInquiry $orderInquiry): void;
}
