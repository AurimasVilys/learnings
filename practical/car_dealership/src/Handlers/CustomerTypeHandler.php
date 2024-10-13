<?php

namespace AurimasVilys\CarDealership\Handlers;

use AurimasVilys\CarDealership\Enum\CustomerType;
use AurimasVilys\CarDealership\Models\Order;
use AurimasVilys\CarDealership\Service\TerminalService;

final class CustomerTypeHandler extends OrderHandler
{
    protected function process(Order $order): void
    {
        $terminalService = TerminalService::getInstance();
        $input = $terminalService->promptAndListen('Customer type: ' . implode(', ', array_map(fn($type) => $type->value, CustomerType::cases())));
        $customerType = CustomerType::getCustomerTypeFromString($input);
        $order->setCustomerType($customerType);
    }
}
