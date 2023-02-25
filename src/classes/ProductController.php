<?php 

class ProductController extends Product
{
    public function addItem($sku, $name, $price, $size, $weight, $height, $width, $length){
        if($this->checkItemExists($sku)){
            header("location: ../public/addProduct.php?itemExists=1");
        }else{
            $this->setItem($sku, $name, $price, $size, $weight, $height, $width, $length);
            header("location: ../public/index.php");
        }
    }

    public function deleteItem($sku){
        $this->removeItem($sku);
    }
}