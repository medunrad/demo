<?php


namespace App\Components\NewProduct;

use App\Database\ORM\Product\ProductRepository;

interface INewProductFactory {
    
    public function create(ProductRepository $productRepository) : NewProduct;
    
}
