<?php

namespace App\Presenters;

use App\Components\ReserveProduct\IReserveProductFactory;
use App\Model\Reservation\ReservationFacade;
use App\Database\ORM\Product\ProductRepository;
use App\Components\ListReservations\IListReservationsFactory;
use App\Components\ListReservations\ListReservations;
use App\Components\ReserveProduct\ReserveProduct;
use App\Database\ORM\Reservation\ReservationRepository;

class ReserveProductPresenter extends BasePresenter {
    
    /** @var IReserveProductFactory @inject */
    public $reserveProductFactory;
    
    /** @var ReservationFacade @inject */
    public $reservationFacade;
    
    /** @var ProductRepository @inject */
    public $productRepository;
    
    /** @var IListReservationsFactory @inject */
    public $listReservationsFactory;
    
    /** @var ReservationRepository @inject */
    public $reservationRepository;
    
    public function actionDefault() : void {
        
    }
    
    public function createComponentReserveProduct() : ReserveProduct {
        return $this->reserveProductFactory->create($this->reservationFacade, $this->productRepository);
    }
    
    public function createComponentListReservations() : ListReservations {
        return $this->listReservationsFactory->create($this->reservationRepository);
    }
}
