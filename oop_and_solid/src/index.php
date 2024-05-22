<?php

require __DIR__ . '/../vendor/autoload.php';


echo "Welcome to the vehicle order configurator!\n";

$orderInputCollector = new AurimasVilys\OopAndSolid\OrderInquiryCollector();
$orderInquiry = $orderInputCollector->collectOrder();


$assembler = new AurimasVilys\OopAndSolid\VehicleAssembler(
    new \AurimasVilys\OopAndSolid\BodyAssembler(),
    new \AurimasVilys\OopAndSolid\EngineAssembler()
);
$assembler->assemble($orderInquiry);

$vehicleDeliveryHandler = new AurimasVilys\OopAndSolid\VehicleDeliveryHandler();
$vehicleDeliveryHandler->deliver($orderInquiry);
