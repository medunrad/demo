<?php

namespace App\Database\ORM\Product;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;
use App\Database\ORM\Reservation\Reservation;

/**
 * @property int $id {primary}
 * @property string $name
 * @property Reservation[]|OneHasMany $reservations    {1:m Reservation::$id_product}
 */
final class Product extends Entity{
    
    
    
}
