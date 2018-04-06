<?php


namespace App\Presenters;
use App\Components\NewProduct\INewProductFactory;
use App\Components\NewProduct\NewProduct;
use App\Database\ORM\Product\ProductRepository;
use App\Components\ListProducts\IListProductsFactory;
use App\Components\ListProducts\ListProducts;

class NewProductPresenter extends BasePresenter {
    
    /** @var INewProductFactory @inject */
    public $newProductFactory;
    
    /** @var ProductRepository @inject */
    public $productRepository;
    
    /** @var IListProductsFactory @inject */
    public $listProductFactory;
    
    public function actionDefaut() : void {
        
    }
    
    public function createComponentNewProduct() : NewProduct {
        return $this->newProductFactory->create($this->productRepository);
    }
    
    public function createComponentListProducts() : ListProducts {
        return $this->listProductFactory->create($this->productRepository);
    }
    
}
