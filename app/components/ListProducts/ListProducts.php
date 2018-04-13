<?php


namespace App\Components\ListProducts;

use Nette\Application\UI\Control;
use App\Database\ORM\Product\ProductRepository;

class ListProducts extends Control {
    
    private $productRepository;
    
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository) {
        parent::__construct();
        $this->productRepository = $productRepository;
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ListProduct.latte');
        $this->template->products = $this->productRepository->findAll();
        $this->template->render();
    }
    
}
