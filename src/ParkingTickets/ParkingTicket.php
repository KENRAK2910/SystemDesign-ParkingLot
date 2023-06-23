<?php
namespace Parkinglot\ParkingTickets;

use DateTime;
use Parkinglot\Vehicle\Vehicle;

abstract class ParkingTicket implements ParkingTicketInterface
{
    protected Vehicle $vehicle;

    protected $checkInTime;
    protected $checkOutTime;

    protected $parkingFee = 0.0;

    protected $parkingLocation = null;

    public function getVehicle() : Vehicle
    {
        return $this->vehicle;
    }

    public function getCheckInTime() : DateTime
    {
        return $this->checkInTime;
    }

    public function getCheckOutTime() : DateTime
    {
        return $this->checkOutTime;
    }

    public function getParkingFee()
    {
        return $this->parkingFee;
    }

    public function getParkingLocation()
    {
        return $this->parkingLocation;
    }
}