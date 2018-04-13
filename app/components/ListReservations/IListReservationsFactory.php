<?php

namespace App\Components\ListReservations;

use App\Database\ORM\Reservation\ReservationRepository;

interface IListReservationsFactory {
    
    /** @return ListReservations */
    public function create(ReservationRepository $reservationRepository) : ListReservations;
    
}
