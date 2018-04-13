<?php

namespace App\Model\Reservation;

use App\Database\ORM\Reservation\Reservation;

interface IReservation {
    
    public function createReservation(Reservation $reservation) : int;
    
}
