<?php 
namespace Parkinglot\Vehicle\Types;

use Parkinglot\Vehicle\Vehicle;

class Car extends Vehicle
{
    public function __construct(
        string $vehicleNumberPlate = '', 
        int $numberOfOccupants = 1, 
        string $vehicleManufacturer = '',
        string $vehicleModel = '')
    {
        $this->vehicleType = 'Car';
        $this->vehicleModel = $vehicleModel;
        $this->numberOfOccupants   = $numberOfOccupants;
        $this->vehicleNumberPlate  = $vehicleNumberPlate;
        $this->vehicleManufacturer = $vehicleManufacturer;
    }
}