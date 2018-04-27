<?php


namespace App\Components\ListReservations;

use Nette\Application\UI\Control;
use App\Database\ORM\Reservation\ReservationRepository;
use Ublaboo\DataGrid\DataGrid;

class ListReservations extends Control {
    
    /** @var ReservationRepository */
    private $reservationRepository;
    
    /**
     * @param ReservationRepository $reservationRepository
     */
    public function __construct(ReservationRepository $reservationRepository) {
        parent::__construct();
        $this->reservationRepository = $reservationRepository;
        
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ListReservations.latte');
        $this->template->reservations = $reservation = $this->reservationRepository->findAll();
        $this->template->render();
    }
    
    public function createComponentReservationList() : void {
        $grid = new DataGrid();
        $this->addComponent($grid, 'reservationList');
        $grid->setDataSource($this->reservationRepository->findAll());
        $grid->addColumnText('id', 'Id')
                ->setSortable();
        $grid->addFilterText('id', 'Id');
    }
    
}
