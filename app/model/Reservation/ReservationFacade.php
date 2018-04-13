<?php

namespace App\Model\Reservation;

use App\Database\ORM\Reservation\Reservation;

/**
 * manage reservation things
 */
class ReservationFacade {
    
    /** @var ServiceReservation */
    private $serviceReservation;
    
    /** @var ProductReservation */
    private $productReservation;
    
    /**
     * @param \App\Model\Reservation\ServiceReservation $serviceReservation
     * @param \App\Model\Reservation\ProductReservation $productReservation
     */
    public function __construct(ServiceReservation $serviceReservation, ProductReservation $productReservation) {
        $this->serviceReservation = $serviceReservation;
        $this->productReservation = $productReservation;
    }
    
    /**
     * @param Reservation $reservation
     * @return int reservation id
     */
    public function createProductReservation(Reservation $reservation) : int {
        return $this->productReservation->createReservation($reservation);
    }
    
    /**
     * @param Reservation $reservation
     * @return int reservation id
     */
    public function createServiceReservation(Reservation $reservation) : int {
        return $this->serviceReservation->createReservation($reservation);
    }
    
}
