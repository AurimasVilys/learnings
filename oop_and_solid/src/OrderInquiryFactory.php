<?php

namespace AurimasVilys\OopAndSolid;

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
