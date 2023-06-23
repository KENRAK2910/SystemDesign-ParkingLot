<?php
require "vendor/autoload.php";

use Parkinglot\Exceptions\InvalidParkingLocationException;
use Parkinglot\Vehicle\Types\Car;
use Parkinglot\System\ParkingSystem;
use Parkinglot\Exceptions\ParkingCapacityReachedException;

$vehicle = new Car('MH 04 7755', 4, 'Honda', 'Accord MT');

try {
    $buildingParking = new ParkingSystem('ground-parking');
} catch (InvalidParkingLocationException $ex){
    echo $ex->getMessage()."\n";
    return;
}


try {
    $parkingTicket = $buildingParking->assignParking($vehicle, new DateTime('now'));
} catch (ParkingCapacityReachedException $ex) {
    echo $ex->getMessage();
    return;
}

print_r($parkingTicket);