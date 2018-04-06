<?php


namespace App\Database\ORM\Product;


use Nextras\Orm\Repository\Repository;

/**
 * @property-read ProductMapper $mapper
 *
 */
final class ProductRepository extends Repository{
    
    /**
     * 
     * @return array entity name
     */
    public static function getEntityClassNames() : array {
        return [Product::class];
    }
    
}
