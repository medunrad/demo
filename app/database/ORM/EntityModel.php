<?php

namespace App\Model\Database\ORM;

use Nextras\Orm\Model\Model;
use App\Database\ORM\Product\ProductRepository;
use App\Database\ORM\Service\ServiceRepository;

/**
 * @property-read ProductRepository $product
 * @property-read ServiceRepository $service
 */
final class EntityModel extends Model
{

}