<?php 
include_once 'Redirect.php';

class ProductController extends Product
{
    public function addItem($sku, $name, $price, $size, $weight, $height, $width, $length){
        $redirect = new Redirect();
        if($this->checkItemExists($sku)){
            $redirect->redirectTo("../public/addProduct.php?itemExists=1");
        }else{
            $this->setItem($sku, $name, $price, $size, $weight, $height, $width, $length);
            $redirect->redirectTo("../public/index.php");
        }
    }

    public function deleteItem($sku){
        $this->removeItem($sku);
    }
}