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
        $this->showMessage("Please code:\n - 1 for Car\n - 2 for Electric car\n - 3 for Truck\n");
    }

    public function informCarType(string $carType): void
    {
        $this->showMessage(match ($carType) {
            '1' => "You chose Car\n",
            '2' => "You chose Electric car\n",
            '3' => "You chose Truck\n",
            default => "We are not able to provide your selection\n",
        });
    }

    public function informOrderDetails(OrderInquiry $orderInquiry, Vehicle $vehicle): void
    {
        $this->showMessage('Your order number is ' . $orderInquiry->getOrderNumber());
        $this->showMessage('You have ordered a ' . get_class($vehicle));
        $this->showMessage('Vehicle information:');

        $vehicle->output();
    }
}
