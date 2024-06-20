<?php

require __DIR__ . '/../vendor/autoload.php';

$vehicleOrderService = new \AurimasVilys\OopAndSolid\Service\VehicleOrderService();
$vehicleOrderService->serve();
