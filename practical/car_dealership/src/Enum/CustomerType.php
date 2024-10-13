<?php

namespace AurimasVilys\CarDealership\Enum;

enum CustomerType: string
{
    case B2B = 'B2B';
    case B2C = 'B2C';

    public static function getCustomerTypeFromString(string $input): ?CustomerType
    {
        return match ($input) {
            self::B2B->value => self::B2B,
            self::B2C->value => self::B2C,
            default => null,
        };
    }
}
