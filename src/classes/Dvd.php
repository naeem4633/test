<?php 

class Dvd extends Item
{
    private $size;

    function setData($data){
        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->size = $data['size'];
    }

    function getAttributes()
    {
        return "Size: $this->size MB";
    }

    function save()
    {
        $productController = new ProductController();
        $productController->addItem($this->sku, $this->name, $this->price, $this->size, NULL, NULL, NULL, NULL);
    }
}