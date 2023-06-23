<?php 
namespace Parkinglot\Vehicle;

abstract class Vehicle
{
    protected $vehicleType   = '';       // Car, Bike, Truck

    protected $vehicleModel        = ''; // Accord, City, 7-Series, 4Matic etc
    protected $vehicleNumberPlate  = '';
    protected $vehicleManufacturer = ''; // Honda, Volkswagen, Mercedes, etc

    protected $numberOfOccupants = 0;

    public function getVehicleType() : string
    {
        return $this->vehicleType;
    }

    public function getVehicleNumberPlate() : string
    {
        return $this->vehicleNumberPlate;
    }

    public function getVehicleManufacturer() : string
    {
        return $this->vehicleManufacturer;
    }

    public function getVehicleModel() : string
    {
        return $this->vehicleModel;
    }

    public function getNumberOfOccupants() : int
    {
        return $this->numberOfOccupants;
    }
}