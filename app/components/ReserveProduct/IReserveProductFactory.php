<?php

namespace App\Components\ReserveProduct;

use App\Model\Reservation\ReservationFacade;
use App\Database\ORM\Product\ProductRepository;

interface IReserveProductFactory {
    
    /** @return ReserveProduct */
    public function create(ReservationFacade $reservationFacade, ProductRepository $productRepository) : ReserveProduct;
    
}
