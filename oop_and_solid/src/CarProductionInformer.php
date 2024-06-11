<?php

declare(strict_types=1);

namespace AurimasVilys\OopAndSolid;

class CarProductionInformer
{
    private function showMessage(string $message): void
    {
        echo $message . PHP_EOL;
    }

    public function welcomeMessage(): void
    {
        $this->showMessage('Welcome to the vehicle order configurator!');
    }

    public function showCarOptions(): void
    {
        $this->showMessage('What would you like to order?');

        $vehicles = VehicleFactory::$vehicles;
        $message = "Please code:\n";
        foreach ($vehicles as $type => $name) {
            $message .= " - $type for $name\n";
        }

        $this->showMessage($message);
    }

    public function informOrderDetails(OrderInquiry $orderInquiry, Vehicle $vehicle): void
    {
        $this->showMessage('Your order number is ' . $orderInquiry->getOrderNumber());
        $this->showMessage('You have ordered a ' . get_class($vehicle));
        $this->showMessage('Vehicle information:');

        $vehicle->output();
    }

    public function vehicleTypeNotAvailable(): void
    {
        $this->showMessage("We are not able to provide your selection\n");
    }
}
