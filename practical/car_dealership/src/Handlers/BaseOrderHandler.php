<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Models\Order;

final class BaseOrderHandler extends OrderHandler
{
    protected function process(Order $order): void
    {
    }
}