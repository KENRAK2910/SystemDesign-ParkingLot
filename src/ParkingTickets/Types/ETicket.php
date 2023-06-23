<?php
namespace Parkinglot\ParkingTickets\Types;

use DateTime;
use Parkinglot\Vehicle\Vehicle;
use Parkinglot\ParkingTickets\ParkingTicket;

class ETicket extends ParkingTicket
{
    public function __construct(Vehicle $vehicle = null, DateTime $checkInTime = null)
    {
        $this->vehicle     = $vehicle;
        $this->checkInTime = $checkInTime;
    }
    
    public function calculateFee()
    {
        
    }

    public function applyDiscount()
    {
        
    }

    public function punchCheckOutTime()
    {
        
    }
}