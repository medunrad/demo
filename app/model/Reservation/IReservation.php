<?php

namespace App\Model\Reservation;

use App\Database\ORM\Reservation\Reservation;

/**
 * reservation interface should be implemented by every reservation related class
 */
interface IReservation {
    
    /**
     * @param Reservation $reservation
     */
    public function createReservation(Reservation $reservation) : int;
    
}
