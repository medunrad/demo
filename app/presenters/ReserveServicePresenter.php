<?php

namespace App\Presenters;

use App\Components\ReserveService\IReserveServiceFactory;
use App\Components\ReserveService\ReserveService;
use App\Database\ORM\Reservation\ReservationRepository;
use App\Components\ListReservations\IListReservationsFactory;
use App\Components\ListReservations\ListReservations;
use App\Database\ORM\Service\ServiceRepository;
use App\Model\Reservation\ReservationFacade;

class ReserveServicePresenter extends BasePresenter {
    
    /** @var IReserveServiceFactory @inject */
    public $reserveServiceFactory;
    
    /** @var ReservationRepository @inject */
    public $reservationRepository;
    
    /** @var ServiceRepository @inject */
    public $serviceRepository;
    
    /** @var ReservationFacade @inject */
    public $reservationFacade;
    
    /** @var IListReservationsFactory @inject */
    public $listReservationsFactory;
    
    public function actionDefault(){
        
    }
    
    public function createComponentReserveService() : ReserveService {
        return $this->reserveServiceFactory->create($this->reservationFacade, $this->serviceRepository);
    }
    
    public function createComponentListReservations() : ListReservations {
        return $this->listReservationsFactory->create($this->reservationRepository);
    }
    
}
