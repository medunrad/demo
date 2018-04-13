<?php


namespace App\Components\ReserveProduct;

use Nette\Application\UI\Control;
use App\Model\Reservation\ReservationFacade;
use Nette\Application\UI\Form;
use App\Database\ORM\Product\ProductRepository;
use Nette\Utils\ArrayHash;
use App\Database\ORM\Product\Product;
use App\Database\ORM\Reservation\Reservation;

class ReserveProduct extends Control {
    
    /** @var ReservationFacade */
    private $reservationFacade;
    
    /** @var ProductRepository */
    private $productRepository;
    
    public function __construct(ReservationFacade $reservationFacade, ProductRepository $productRepository) {
        parent::__construct();
        $this->reservationFacade = $reservationFacade;
        $this->productRepository = $productRepository;
    }
    
    public function render() : void {
        $this->template->setFile(__DIR__ . '/ReserveProduct.latte');
        $this->template->render();
    }
    
    public function createComponentReserveProduct() : Form {
        $form = new Form;
        $form->addSelect('product', 'Product:', $this->productRepository->findAll()->fetchPairs('id', 'name'))
                ->setRequired('Choose product');
        $form->addSubmit('confirm', 'Confirm');
        $form->onSuccess[] = [$this, 'success'];
        return $form;
    }
    
    public function success(Form $form, ArrayHash $values) : void {
        $product = $this->productRepository->getById($values->product);
        $reservation = new Reservation;
        $reservation->id_product = $product;
        $this->reservationFacade->createProductReservation($reservation);
        $this->redirect('this');
    }
    
}
