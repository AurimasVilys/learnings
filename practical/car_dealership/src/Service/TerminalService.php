<?php

class TerminalService
{
    public static function promptAndListen(string $message): string
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