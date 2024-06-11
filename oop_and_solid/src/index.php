<?php

require __DIR__ . '/../vendor/autoload.php';

$carProductionInformer = new AurimasVilys\OopAndSolid\CarProductionInformer();
$orderInquiryFactory = new AurimasVilys\OopAndSolid\OrderInquiryFactory();
$vehicleDeliveryHandler = new AurimasVilys\OopAndSolid\VehicleDeliveryHandler();
$vehicleFactory = new \AurimasVilys\OopAndSolid\VehicleFactory();
$assembler = new AurimasVilys\OopAndSolid\VehicleAssembler(
    new \AurimasVilys\OopAndSolid\BodyAssembler(),
    new \AurimasVilys\OopAndSolid\EngineAssembler()
);

$carProductionInformer->welcomeMessage();
$carProductionInformer->showCarOptions();

$carType = rtrim(fgets(STDIN));

$vehicle = $vehicleFactory->createVehicle((int)($carType));

if ($vehicle === null) {
    $carProductionInformer->vehicleTypeNotAvailable();
    throw new \LogicException('Invalid input');
}

$orderInquiry = $orderInquiryFactory->createOrderInquiry($vehicle);
$carProductionInformer->informOrderDetails($orderInquiry, $vehicle);

$assembler->assemble($orderInquiry->getVehicle());

$vehicleDeliveryHandler->deliver($orderInquiry);
