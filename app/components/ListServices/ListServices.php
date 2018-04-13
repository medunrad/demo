<?php

namespace App\Components\ListServices;

use Nette\Application\UI\Control;
use App\Database\ORM\Service\ServiceRepository;


class ListServices extends Control {
    
    /** @var ServiceRepository */
    private $serviceRepository;
    
    public function __construct(ServiceRepository $serviceRepository) {
        parent::__construct();
        $this->serviceRepository = $serviceRepository;
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ListServices.latte');
        $this->template->services = $this->serviceRepository->findAll();
        $this->template->render();
    }
    
}
