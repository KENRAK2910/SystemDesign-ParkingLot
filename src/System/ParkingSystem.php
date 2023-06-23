<?php
namespace Parkinglot\System;

use DateTime;
use Parkinglot\Vehicle\Vehicle;
use Parkinglot\ParkingTickets\ParkingTicket;
use Parkinglot\ParkingLocation\Parkable;
use Parkinglot\ParkingTickets\Types\PaperTicket;
use Parkinglot\ParkingTickets\ParkingTicketInterface;
use Parkinglot\ParkingLocation\Building\GroundParking;
use Parkinglot\ParkingLocation\Building\BuildingParking;
use Parkinglot\Exceptions\InvalidParkingLocationException;

class ParkingSystem
{
    protected Parkable $parkingLocation;
    protected ParkingTicket $parkingTicket;

    public function __construct(string $parkingLocationType = '')
    {
        $this->setParkingLocation( $parkingLocationType );
    }

    // Check-in function
    public function assignParking(Vehicle $vehicle = null, DateTime $checkInTime = null) : ParkingTicketInterface
    {
        $parkingTicket = new PaperTicket($vehicle, $checkInTime, $this->parkingLocation);

        $this->parkingLocation->assignParkingSpace($parkingTicket);

        return $parkingTicket;
    }

    // Check-out function
    public function dissociateParking(ParkingTicket $parkingTicket) : ParkingTicketInterface
    {
        $this->parkingLocation->dissociateParkingSpace($parkingTicket);

        return $parkingTicket;
    }

    private function setParkingLocation($parkingLocationType = '')
    {
        switch (strtolower($parkingLocationType))
        {
            case 'building':
                $this->parkingLocation = new BuildingParking();
                break;
            case 'ground-parking':
                $this->parkingLocation = new GroundParking();
                break;
            default:
                throw new InvalidParkingLocationException('Invalid parking location.');
                break;
        }
    }
}