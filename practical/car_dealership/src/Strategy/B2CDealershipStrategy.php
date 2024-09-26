<?php

namespace AurimasVilys\CarDealership\Strategy;

use AurimasVilys\CarDealership\Models\Car;
use AurimasVilys\CarDealership\Models\RV;

class B2CDealershipStrategy extends AbstractDealershipStrategy
{
    protected const AVAILABLE_VEHICLE_TYPES = [
        Car::NAME,
        RV::NAME
    ];
}