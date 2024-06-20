<?php

namespace AurimasVilys\OopAndSolid\Factory;

use AurimasVilys\OopAndSolid\Model\OrderInquiry;
use AurimasVilys\OopAndSolid\Model\Vehicle;

class OrderInquiryFactory
{
    public function createOrderInquiry(Vehicle $vehicle): OrderInquiry
    {
        $orderInquiry = new OrderInquiry();
        $orderInquiry->setVehicle($vehicle);
        $orderInquiry->setOrderNumber(uniqid());

        return $orderInquiry;
    }
}
