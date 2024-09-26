<?php

namespace AurimasVilys\CarDealership;

use AurimasVilys\CarDealership\Strategy\B2BDealershipStrategy;
use AurimasVilys\CarDealership\Service\TerminalService;
use AurimasVilys\CarDealership\Strategy\B2CDealershipStrategy;

class Dealership
{
    private const CUSTOMER_TYPES = [
        'B2C',
        'B2B'
    ];

    private const DEALERSHIP_STRATEGIES = [
        'B2C' => B2CDealershipStrategy::class,
        'B2B' => B2BDealershipStrategy::class
    ];

    public function serve(): void
    {
        $terminalService = TerminalService::getInstance();

        $customerType = $terminalService->promptAndListen('Customer type: ' . implode(', ', self::CUSTOMER_TYPES));
        $strategyType = self::DEALERSHIP_STRATEGIES[$customerType];
        $strategy = new $strategyType();
        $result = $strategy->serve();

        print_r($result);
    }
}