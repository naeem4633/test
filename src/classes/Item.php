<?php 
include_once 'config.php';
abstract class Item
{
    protected $sku;
    protected $name;
    protected $price;
    protected $attributes;

    function getSku()
    {
        return $this->sku;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return "$this->price $";
    }

    abstract function getAttributes();
}