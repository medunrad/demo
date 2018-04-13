<?php

namespace App\Model\Reservation;

use App\Database\ORM\Reservation\Reservation;

class ReservationFacade {
    
    /** @var ServiceReservation */
    private $serviceReservation;
    
    /** @var ProductReservation */
    private $productReservation;
    
    public function __construct(ServiceReservation $serviceReservation, ProductReservation $productReservation) {
        $this->serviceReservation = $serviceReservation;
        $this->productReservation = $productReservation;
    }
    
    public function createProductReservation(Reservation $reservation) : int {
        return $this->productReservation->createReservation($reservation);
    }
    
    public function createServiceReservation(Reservation $reservation) : int {
        return $this->serviceReservation->createReservation($reservation);
    }
    
}
