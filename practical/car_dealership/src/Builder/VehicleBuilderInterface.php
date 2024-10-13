<?php

namespace AurimasVilys\CarDealership\Builder;

use \AurimasVilys\CarDealership\Models\Vehicle;

interface VehicleBuilderInterface {
    public function build(): Vehicle;
}