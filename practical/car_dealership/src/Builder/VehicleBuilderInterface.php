<?php

use \AurimasVilys\CarDealership\Models\Vehicle;

interface VehicleBuilderInterface {
    public function build(): Vehicle;
}