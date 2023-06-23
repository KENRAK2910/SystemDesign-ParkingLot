<?php

namespace Parkinglot\ParkingTickets;

class ParkingPrices
{
    public const PRICES = [
        'car'   => 100,
        'bike'  => 50,
        'truck' => 150,
    ];

    public static function getHourlyParkingFee($vehicleType = '')
    {
        return self::PRICES[ strtolower($vehicleType) ];
    }
}