<?php

use \AurimasVilys\CarDealership\Models\Vehicle;

class Prototyper
{
    public static function clone(Vehicle $vehicle): Vehicle
    {
        return clone $vehicle;
    }
}