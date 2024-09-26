<?php

namespace AurimasVilys\CarDealership\Models;

interface Vehicle extends Prototype
{
    public function getFuelType(): string;

    public function getColor(): string;

    public function getTransmission(): string;

    public function getExtras(): array;
}
