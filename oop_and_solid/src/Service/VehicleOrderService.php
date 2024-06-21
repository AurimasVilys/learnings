<?php

namespace AurimasVilys\OopAndSolid\Service;

class VehicleOrderService
{
    public function serve(): void
    {
        $carProductionInformer = new \AurimasVilys\OopAndSolid\Service\CarProductionInformer();
        $orderInquiryFactory = new \AurimasVilys\OopAndSolid\Factory\OrderInquiryFactory();
        $vehicleDeliveryHandler = new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\VehicleDeliveryHandler($this->getDeliverySteps());
        $assembler = new \AurimasVilys\OopAndSolid\Service\Assembler\VehicleAssembler($this->getAssemblers());

        $carProductionInformer->welcomeMessage();
        $carProductionInformer->showCarOptions();
        $vehicleType = $this->getVehicleTypeFromInput();

        try {
            $factory = $this->getVehicleFactory($vehicleType);
        } catch (\Exception $e) {
            $carProductionInformer->vehicleTypeNotAvailable();
            throw new \LogicException($e->getMessage());
        }

        $vehicle = $factory->create((int)($vehicleType));
        $orderInquiry = $orderInquiryFactory->createOrderInquiry($vehicle);

        $carProductionInformer->informOrderDetails($orderInquiry, $vehicle);
        $assembler->assemble($vehicle);
        $vehicleDeliveryHandler->deliver($orderInquiry);
    }

    private function getDeliverySteps(): array
    {
        return [
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\PrepareVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\WashVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\PolishVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\LoadVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\DeliverVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\UnloadVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\FuelVehicle(),
            new \AurimasVilys\OopAndSolid\Service\VehicleDelivery\FinalizeDelivery(),
        ];
    }

    private function getAssemblers(): array
    {
        return [
            new \AurimasVilys\OopAndSolid\Service\Assembler\BodyAssembler(),
            new \AurimasVilys\OopAndSolid\Service\Assembler\TruckBedAssembler(),
            new \AurimasVilys\OopAndSolid\Service\Assembler\EngineAssembler()
        ];
    }

    private function getVehicleTypeFromInput(): int
    {
        $vehicleType = rtrim(fgets(STDIN));

        if (!is_numeric($vehicleType)) {
            throw new \InvalidArgumentException('Invalid input type. Expected an integer.');
        }

        return (int)$vehicleType;
    }

    private function getVehicleFactory(int $vehicleType): \AurimasVilys\OopAndSolid\Factory\VehicleFactoryInterface
    {
        try {
            return \AurimasVilys\OopAndSolid\Service\VehicleFactoryProvider::getFactory($vehicleType);
        } catch (\TypeError $e) {
            throw new \InvalidArgumentException("Invalid type provided for vehicle type: " . $e->getMessage());
        } catch (\Exception $e) {
            throw new \RuntimeException("Error retrieving vehicle factory: " . $e->getMessage());
        }
    }
}