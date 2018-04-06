<?php

namespace App\Components\NewService;

use App\Database\ORM\Service\ServiceRepository;

interface INewServiceFactory {
    
    /** @return NewService */
    public function create(ServiceRepository $serviceRepository) : NewService;
    
}
