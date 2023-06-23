<?php

namespace Parkinglot\ParkingLocation;

interface Parkable
{
    public function assignParkingSpace();

    public function dissociateParkingSpace();
}