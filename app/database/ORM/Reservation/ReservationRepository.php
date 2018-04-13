<?php

namespace App\Database\ORM\Reservation;

use Nextras\Orm\Repository\Repository;

class ReservationRepository extends Repository {
    
    /**
     * 
     * @return array entity name
     */
    public static function getEntityClassNames() : array {
        return [Reservation::class];
    }
}
