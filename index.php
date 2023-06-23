<?php
require "vendor/autoload.php";

use Parkinglot\Exceptions\InvalidParkingLocationException;
use Parkinglot\Vehicle\Types\Car;
use Parkinglot\System\ParkingSystem;
use Parkinglot\Exceptions\ParkingCapacityReachedException;

$vehicle = new Car('MH 04 7755', 4, 'Honda', 'Accord MT');
$buildingParking = new ParkingSystem('building');

try {
    $parkingTicket = $buildingParking->assignParking($vehicle, new DateTime('now'));
} catch (ParkingCapacityReachedException $ex) {
    echo $ex->getMessage();
    die;
} catch (InvalidParkingLocationException $ex){
    echo $ex->getMessage();
    die;
}

var_dump($parkingTicket);