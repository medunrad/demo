<?php


namespace App\Components\ListReservations;

use Nette\Application\UI\Control;
use App\Database\ORM\Reservation\ReservationRepository;

class ListReservations extends Control {
    
    /** @var ReservationRepository */
    private $reservationRepository;
    
    public function __construct(ReservationRepository $reservationRepository) {
        parent::__construct();
        $this->reservationRepository = $reservationRepository;
        
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ListReservations.latte');
        $this->template->reservations = $this->reservationRepository->findAll();
        $this->template->render();
    }
    
}
