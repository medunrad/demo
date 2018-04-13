<?php

namespace App\Database\ORM\Service;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;
use App\Database\ORM\Reservation\Reservation;

/**
 * @property int $id {primary}
 * @property string $name
 * @property int $duration
 * @property Reservation[]|OneHasMany $reservations    {1:m Reservation::$id_service}
 */
final class Service extends Entity{
    
    
    
}
