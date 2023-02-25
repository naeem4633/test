<?php 

class Book extends Item
{
    private $weight;

    function setData($data){
        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->weight = $data['weight'];
    }

    function setWeight($weight){
        $this->weight = $weight;
    }

    function getAttributes()
    {
        return "Weight: $this->weight KG";
    }

    function save()
    {
        $productController = new ProductController();
        $productController->addItem($this->sku, $this->name, $this->price, NULL, $this->weight, NULL, NULL, NULL);
    }
}