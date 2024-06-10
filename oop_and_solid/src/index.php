<?php

require __DIR__ . '/../vendor/autoload.php';

$carProductionInformer = new AurimasVilys\OopAndSolid\CarProductionInformer();
$orderInquiryFactory = new AurimasVilys\OopAndSolid\OrderInquiryFactory();
$vehicleDeliveryHandler = new AurimasVilys\OopAndSolid\VehicleDeliveryHandler();
$assembler = new AurimasVilys\OopAndSolid\VehicleAssembler(
    new \AurimasVilys\OopAndSolid\BodyAssembler(),
    new \AurimasVilys\OopAndSolid\EngineAssembler()
);

$carProductionInformer->welcomeMessage();
$carProductionInformer->showCarOptions();

$carType = rtrim(fgets(STDIN));

$carProductionInformer->informCarType($carType);

$vehicle = \AurimasVilys\OopAndSolid\VehicleFactory::createVehicle((int)($carType));

if ($vehicle === null) {
    throw new \LogicException('Invalid input');
}

$orderInquiry = $orderInquiryFactory->createOrderInquiry($vehicle);
$carProductionInformer->informOrderDetails($orderInquiry, $vehicle);

$assembler->assemble($orderInquiry->getVehicle());

$vehicleDeliveryHandler->deliver($orderInquiry);
