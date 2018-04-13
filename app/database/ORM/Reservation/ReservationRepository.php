<?php

namespace App\Database\ORM\Reservation;

use Nextras\Orm\Repository\Repository;

/**
 * @property-read ReservationMapper $mapper
 *
 */
class ReservationRepository extends Repository {
    
    /**
     * 
     * @return array entity name
     */
    public static function getEntityClassNames() : array {
        return [Reservation::class];
    }
}
