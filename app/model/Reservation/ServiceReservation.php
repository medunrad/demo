<?php

namespace App\Model\Reservation;

use App\Database\ORM\Service\ServiceRepository;
use App\Database\ORM\Reservation\Reservation;

class ServiceReservation implements IReservation {
    
    /** @var ServiceRepository */
    private $serviceRepository;
    
    public function __construct(ServiceRepository $serviceRepository) {
        $this->serviceRepository = $serviceRepository;
    }
    
    public function createReservation(Reservation $reservation) : int {
        ;
    }
    
}
