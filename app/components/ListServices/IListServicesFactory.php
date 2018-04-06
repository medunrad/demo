<?php

namespace App\Components\ListServices;

use App\Database\ORM\Service\ServiceRepository;

interface IListServicesFactory {
    
    /** @return ListServices */
    public function create(ServiceRepository $serviceRepository) : ListServices;
    
}
