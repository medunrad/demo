<?php


namespace App\Components\ListProducts;

use App\Database\ORM\Product\ProductRepository;

interface IListProductsFactory {
    
    /** @return ListProducts */
    public function create(ProductRepository $productRepository): ListProducts;
    
}
