<?php
namespace Parkinglot\ParkingTickets\Types;

use DateTime;
use Parkinglot\Vehicle\Vehicle;
use Parkinglot\ParkingLocation\Parkable;
use Parkinglot\ParkingTickets\ParkingPrices;
use Parkinglot\ParkingTickets\ParkingTicket;

class PaperTicket extends ParkingTicket
{
    public function __construct(Vehicle $vehicle = null, DateTime $checkInTime = null, Parkable $parkingLocation = null)
    {
        $this->vehicle         = $vehicle;
        $this->checkInTime     = $checkInTime;
        $this->parkingLocation = $parkingLocation;

        $this->parkingFee      = $this->calculateFee();
    }

    public function calculateFee()
    {
        $currentTime = new DateTime('now');
        $differenceTime = $this->checkInTime->diff($currentTime);

        $hourlyParkingFee = ParkingPrices::getHourlyParkingFee( $this->vehicle->getVehicleType() );

        // $this->parkingFee = round($differenceTime->h * $hourlyParkingFee);
        $this->parkingFee = (rand(1, 10) * $hourlyParkingFee);

        return $this->applyDiscount();
    }

    public function applyDiscount()
    {
        $this->parkingFee = (10/100 * $this->parkingFee);
    }

    public function punchCheckOutTime()
    {
        $this->checkOutTime = new DateTime('now');
    }
}