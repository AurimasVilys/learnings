<?php

namespace AurimasVilys\OopAndSolid;

interface Vehicle
{
    public function getModel(): string;

    public function getEngine(): string;

    public function getTransmission(): string;

    public function getFuelType(): string;

    public function getTruckBedVolume(): int;
}
