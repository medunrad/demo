<?php

namespace App\Database\ORM\Reservation;

use Nextras\Orm\Entity\Entity;
use App\Database\ORM\Product\Product;
use App\Database\ORM\Service\Service;

/**
 * @property int $id {primary}
 * @property Product|null $id_product {m:1 Product::$reservations}
 * @property Service|null $id_service {m:1 Service::$reservations}
 * @property \DateTimeImmutable|null $date
 */
final class Reservation extends Entity{
    
    
    
}
