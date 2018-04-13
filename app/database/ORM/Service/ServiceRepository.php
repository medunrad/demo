<?php

namespace App\Database\ORM\Service;

use Nextras\Orm\Repository\Repository;

/**
 * @property-read ServiceMapper $mapper
 *
 */
final class ServiceRepository extends Repository{
    
    /**
     * 
     * @return array entity name
     */
    public static function getEntityClassNames() : array {
        return [Service::class];
    }
    
}
