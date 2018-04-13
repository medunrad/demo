<?php

namespace App\Components\NewService;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Utils\ArrayHash;
use App\Database\ORM\Service\ServiceRepository;
use App\Database\ORM\Service\Service;

class NewService extends Control {
    
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
        $this->template->setFile(__DIR__ . '/NewService.latte');
        $this->template->render();
    }
    
    public function createComponentNewService() : Form {
        $form = new Form;
        $form->addText('name', 'Name of service:')
                ->setRequired('Please, fill the service name');
        $form->addText('duration', 'Duration of service:')
                ->setHtmlType('number')
                ->setAttribute('min', 1)
                ->setRequired('Please, fill the duration of service');
        $form->addSubmit('save', 'Save');
        $form->onSuccess[] = [$this, 'success'];
        return $form;
    }
    
    /**
     * @param Form $form
     * @param ArrayHash $values
     */
    public function success(Form $form, ArrayHash $values) : void {
        $service = new Service;
        $service->name = $values->name;
        $service->duration = $values->duration;
        $this->serviceRepository->persistAndFlush($service);
        $this->redirect('this');
    }
}
