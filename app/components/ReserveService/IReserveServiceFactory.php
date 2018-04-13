<?php

namespace App\Components\ReserveService;

use App\Database\ORM\Service\ServiceRepository;
use App\Model\Reservation\ReservationFacade;

interface IReserveServiceFactory {
    
    /** @return ReserveService */
    public function create(ReservationFacade $reservationFacade, ServiceRepository $serviceRepository) : ReserveService;
    
}
