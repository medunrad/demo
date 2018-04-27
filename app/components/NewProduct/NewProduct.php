<?php


namespace App\Components\NewProduct;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use App\Database\ORM\Product\ProductRepository;
use App\Database\ORM\Product\Product;
use Nette\Utils\ArrayHash;

class NewProduct extends Control {

    /** @var ProductRepository */
    private $productRepository;
    
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository) {
        parent::__construct();
        $this->productRepository = $productRepository;
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/NewProduct.latte');
        $this->template->render();
    }
    
    public function createComponentNewProduct() : Form {
        $form = new Form;
        $form->onRender[] = '\App\Model\MakeBootstrap\MakeBootstrap::makeBootstrap';
        $form->addText('name', 'Name of product:')
                ->setRequired('Please, fill the product name');
        $form->addSubmit('save', 'Save');
        $form->onSuccess[] = [$this, 'success'];
        return $form;
    }
    
    /**
     * @param Form $form
     * @param ArrayHash $values
     */
    public function success(Form $form, ArrayHash $values) : void {
        $product = new Product;
        $product->name = $values->name;
        $this->productRepository->persistAndFlush($product);
        $this->redirect('this');
    }
    
    
}
