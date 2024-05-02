<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = "Open";
    case C = "Closed";
    case P = "Pendent";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status ) { //self::cases() == chamar SupportStatus
            if ($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$status is not a valid");
    }
}