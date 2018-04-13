<?php

namespace App\Presenters;

use App\Components\ReserveProduct\IReserveProductFactory;
use App\Model\Reservation\ReservationFacade;
use App\Database\ORM\Product\ProductRepository;

class ReserveProductPresenter extends BasePresenter {
    
    /** @var IReserveProductFactory @inject */
    public $reserveProductFactory;
    
    /** @var ReservationFacade @inject */
    public $reservationFacade;
    
    /** @var ProductRepository @inject */
    public $productRepository;
    
    public function actionDefault(){
        
    }
    
    public function createComponentReserveProduct(){
        return $this->reserveProductFactory->create($this->reservationFacade, $this->productRepository);
    }
    
}
