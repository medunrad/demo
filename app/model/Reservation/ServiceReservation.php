<?php

namespace App\Model\Reservation;

use App\Database\ORM\Reservation\ReservationRepository;
use App\Database\ORM\Reservation\Reservation;

/**
 * manages service reservation related things
 */
class ServiceReservation implements IReservation {
    
    /** @var ReservationRepository */
    private $reservationRepository;
    
    /**
     * @param ReservationRepository $reservationRepository
     */
    public function __construct(ReservationRepository $reservationRepository) {
        $this->reservationRepository  = $reservationRepository;
    }
    
    /**
     * @param Reservation $reservation
     * @return int reservation id
     */
    public function createReservation(Reservation $reservation) : int {
        $this->reservationRepository->persistAndFlush($reservation);
        return $reservation->id;
    }
    
}
