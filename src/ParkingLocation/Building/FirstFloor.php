<?php
namespace Parkinglot\ParkingLocation\Building;

class FirstFloor extends BuildingParking
{
    private $description = 'First Floor Parking';
    private $PARKING_CAPACITY = 1;

    public function getCapacity()
    {
        return $this->PARKING_CAPACITY;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function assignParkingSpace()
    {
        $this->PARKING_CAPACITY--;

        return $this;
    }

    public function dissociateParkingSpace()
    {
        $this->PARKING_CAPACITY++;

        return $this;
    }
}