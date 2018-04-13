<?php


namespace App\Components\ReserveService;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Utils\ArrayHash;
use App\Database\ORM\Service\ServiceRepository;
use App\Model\Reservation\ReservationFacade;
use App\Database\ORM\Reservation\Reservation;

class ReserveService extends Control {

    /** @var ReservationFacade */
    private $reservationFacade;
    
    /** @var ServiceRepository */
    private $serviceRepository;
    
    public function __construct(ReservationFacade $reservationFacade, ServiceRepository $serviceRepository) {
        parent::__construct();
        $this->reservationFacade = $reservationFacade;
        $this->serviceRepository = $serviceRepository;
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ReserveService.latte');
        $this->template->render();
    }
    
    public function createComponentReserveService() : Form {
        $form = new Form;
        $form->addSelect('service', 'service:', $this->serviceRepository->findAll()->fetchPairs('id', 'name'))
                ->setRequired('Choose service');
        $form->addText('date', 'date:')
                ->setRequired('Fill date');
        $form->addSubmit('confirm', 'Confirm:');
        $form->onSuccess[] = [$this, 'success'];
        return $form;
    }
    
    public function success(Form $form, ArrayHash $values) : void {
        $service = $this->serviceRepository->getById($values->service);
        $reservation = new Reservation;
        $reservation->id_service = $service;
        $reservation->date = $values->date;
        $this->reservationFacade->createServiceReservation($reservation);
        $this->redirect('this');
    }
    
}
