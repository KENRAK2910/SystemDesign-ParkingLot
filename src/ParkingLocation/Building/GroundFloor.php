<?php
namespace Parkinglot\ParkingLocation\Building;

class GroundFloor
{
    private $description = 'Ground Floor Parking';
    private $PARKING_CAPACITY = 0;

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