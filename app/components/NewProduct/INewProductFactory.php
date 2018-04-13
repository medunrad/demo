<?php


namespace App\Components\NewProduct;

use App\Database\ORM\Product\ProductRepository;

interface INewProductFactory {
    
    /** @return NewProduct */
    public function create(ProductRepository $productRepository) : NewProduct;
    
}
