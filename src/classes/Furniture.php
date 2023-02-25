<?php 

class Furniture extends Item
{
    private $height;
    private $width;
    private $length;
    
    function setData($data){
        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->height = $data['height'];
        $this->width = $data['width'];
        $this->length = $data['length'];
    }

    function setheight($height){
        $this->height = $height;
    }
    function setWidth($width){
        $this->width = $width;
    }
    function setLength($length){
        $this->length = $length;
    }

    function getAttributes()
    {
        return "Dimensions: $this->height x $this->width x $this->length";
    }

    function save()
    {
        $productController = new ProductController();
        $productController->addItem($this->sku, $this->name, $this->price, NULL, NULL, $this->height, $this->width, $this->length);
    }
}