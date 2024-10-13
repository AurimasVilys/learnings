<?php

namespace AurimasVilys\CarDealership\Service;

class TerminalService
{
    private static $instance = null;

    private function __construct()
    {
        // Your initialization code, if any
    }

    private function __clone()
    {
    }

    public static function getInstance(): TerminalService
    {
        if (self::$instance === null) {
            self::$instance = new TerminalService();
        }

        return self::$instance;
    }

    public function promptAndListen(string $message): string
    {
        echo "Please enter $message: ";

        $handle = fopen("php://stdin", "r");
        if ($handle) {
            $input = trim(fgets($handle));
            fclose($handle);

            return $input;
        }

        return '';
    }
}