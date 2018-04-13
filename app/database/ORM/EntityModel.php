<?php

namespace App\Model\Database\ORM;

use Nextras\Orm\Model\Model;
use App\Database\ORM\Product\ProductRepository;
use App\Database\ORM\Service\ServiceRepository;
use App\Database\ORM\Reservation\ReservationRepository;

/**
 * @property-read ProductRepository $product
 * @property-read ServiceRepository $service
 * @property-read ReservationRepository $reservation
 */
final class EntityModel extends Model
{

}