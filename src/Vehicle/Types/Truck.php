<?php 
namespace Parkinglot\Vehicle\Types;

use Parkinglot\Vehicle\Vehicle;

class Truck extends Vehicle
{
    public function __construct(
        string $vehicleNumberPlate = '', 
        int $numberOfOccupants = 1, 
        string $vehicleModel = '', 
        string $vehicleManufacturer = '')
    {
        $this->vehicleType = 'Truck';
        $this->vehicleModel = $vehicleModel;
        $this->numberOfOccupants   = $numberOfOccupants;
        $this->vehicleNumberPlate  = $vehicleNumberPlate;
        $this->vehicleManufacturer = $vehicleManufacturer;
    }
}