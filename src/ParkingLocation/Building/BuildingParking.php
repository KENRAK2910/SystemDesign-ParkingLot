<?php
namespace Parkinglot\ParkingLocation\Building;

use Parkinglot\ParkingLocation\Parkable;
use Parkinglot\ParkingLocation\Building\FirstFloor;
use Parkinglot\ParkingLocation\Building\GroundFloor;
use Parkinglot\ParkingLocation\Building\SecondFloor;
use Parkinglot\Exceptions\ParkingCapacityReachedException;

class BuildingParking implements Parkable
{
    protected $guideMessage = '';

    public function assignParkingSpace()
    {
        $parkingLocation = null;

        if( (new GroundFloor)->getCapacity() > 0 )
        {
            $parkingLocation = (new GroundFloor)->assignParkingSpace();
        }
        elseif( (new FirstFloor)->getCapacity() > 0 )
        {
            $parkingLocation = (new FirstFloor)->assignParkingSpace();
        }elseif( (new SecondFloor)->getCapacity() > 0 )
        {
            $parkingLocation = (new SecondFloor)->assignParkingSpace();
        }

        if( ! $parkingLocation instanceof Parkable ) throw new ParkingCapacityReachedException('Sorry, building parking is full.');

        $this->guideMessage = $parkingLocation->getDescription();
    }

    public function dissociateParkingSpace()
    {

    }

    public function getGuideMessage()
    {
        return $this->guideMessage;
    }
}