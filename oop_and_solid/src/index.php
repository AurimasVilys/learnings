<?php

require __DIR__ . '/../vendor/autoload.php';

$carProductionInformer = new \AurimasVilys\OopAndSolid\Service\CarProductionInformer();
$orderInquiryFactory = new \AurimasVilys\OopAndSolid\Factory\OrderInquiryFactory();
$deliverySteps = [
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\PrepareVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\WashVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\PolishVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\LoadVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\DeliverVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\UnloadVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\FuelVehicle(),
    new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\FinalizeDelivery(),
];
$vehicleDeliveryHandler = new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\VehicleDeliveryHandler($deliverySteps);

$assemblers = [
    new \AurimasVilys\OopAndSolid\Service\Assembler\BodyAssembler(),
    new \AurimasVilys\OopAndSolid\Service\Assembler\TruckBedAssembler(),
    new \AurimasVilys\OopAndSolid\Service\Assembler\EngineAssembler()
];
$assembler = new \AurimasVilys\OopAndSolid\Service\Assembler\VehicleAssembler($assemblers);

$carProductionInformer->welcomeMessage();
$carProductionInformer->showCarOptions();

$vehicleType = rtrim(fgets(STDIN));
$factory = \AurimasVilys\OopAndSolid\Service\VehicleFactoryProvider::getFactory($vehicleType);

$vehicle = $factory->create((int)($vehicleType));

if ($vehicle === null) {
    $carProductionInformer->vehicleTypeNotAvailable();
    throw new \LogicException('Invalid input');
}

$orderInquiry = $orderInquiryFactory->createOrderInquiry($vehicle);
$carProductionInformer->informOrderDetails($orderInquiry, $vehicle);

$assembler->assemble($orderInquiry->getVehicle());

$vehicleDeliveryHandler->deliver($orderInquiry);
