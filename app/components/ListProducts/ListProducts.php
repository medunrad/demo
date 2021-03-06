<?php


namespace App\Components\ListProducts;

use Nette\Application\UI\Control;
use App\Database\ORM\Product\ProductRepository;
use Ublaboo\DataGrid\DataGrid;

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
        $this->template->render();
    }
    
    public function createComponentProductList() : void {
        $grid = new DataGrid();
        $this->addComponent($grid, 'productList');
        $grid->setDataSource($this->productRepository->findAll());
        $grid->addColumnText('name', 'Id')
                ->setSortable();
        $grid->addFilterText('name', 'Search');
    }
}
