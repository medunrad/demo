<?php

namespace App\Model\Reservation;

use App\Database\ORM\Reservation\ReservationRepository;
use App\Database\ORM\Reservation\Reservation;

class ServiceReservation implements IReservation {
    
    /** @var ReservationRepository */
    private $reservationRepository;
    
    public function __construct(ReservationRepository $reservationRepository) {
        $this->reservationRepository  = $reservationRepository;
    }
    
    public function createReservation(Reservation $reservation) : int {
        $this->reservationRepository->persistAndFlush($reservation);
        return $reservation->id;
    }
    
}
