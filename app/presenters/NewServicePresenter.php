<?php


namespace App\Presenters;

use App\Components\NewService\INewServiceFactory;
use App\Database\ORM\Service\ServiceRepository;
use App\Components\NewService\NewService;
use App\Components\ListServices\IListServicesFactory;
use App\Components\ListServices\ListServices;

class NewServicePresenter extends BasePresenter {
    
    /** @var INewServiceFactory @inject */
    public $newServiceFactory;
    
    /** @var ServiceRepository @inject */
    public $serviceRepository;
    
    /** @var IListServicesFactory @inject */
    public $listServicesFactory;
    
    public function actionDefault() : void {
    }
    
    public function createComponentNewService() : NewService {
        return $this->newServiceFactory->create($this->serviceRepository);
    }
 
    public function createComponentListServices() : ListServices {
        return $this->listServicesFactory->create($this->serviceRepository);
    }
    
}
