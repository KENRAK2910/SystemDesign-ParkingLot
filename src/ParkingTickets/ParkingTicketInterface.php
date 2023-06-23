<?php
namespace Parkinglot\ParkingTickets;

interface ParkingTicketInterface
{
    public function calculateFee();

    public function applyDiscount();

    public function punchCheckOutTime();
}