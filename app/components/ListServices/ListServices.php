<?php

namespace App\Components\ListServices;

use Nette\Application\UI\Control;
use App\Database\ORM\Service\ServiceRepository;
use Ublaboo\DataGrid\DataGrid;

class ListServices extends Control {
    
    /** @var ServiceRepository */
    private $serviceRepository;
    
    /**
     * @param ServiceRepository $serviceRepository
     */
    public function __construct(ServiceRepository $serviceRepository) {
        parent::__construct();
        $this->serviceRepository = $serviceRepository;
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ListServices.latte');
        $this->template->render();
    }
    
    public function createComponentServicesList(){
        $grid = new DataGrid();
        $this->addComponent($grid, 'servicesList');
        $grid->setDataSource($this->serviceRepository->findAll());
        $grid->addColumnText('name', 'Name')
                ->setSortable();
        $grid->addColumnText('duration', 'Duration')
            ->setSortable();

        $grid->addFilterText('name', 'Search');
        $grid->addFilterText('duration', 'Search');
    }
    
}
