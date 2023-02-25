<?php
class Product extends Database
{
    protected function getBooks(){
        $sql = 'SELECT * FROM products WHERE weight != 0';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getDvds(){
        $sql = 'SELECT * FROM products WHERE size != 0';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getFurniture(){
        $sql = 'SELECT * FROM products WHERE height != 0';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setItem($sku, $name, $price, $size, $weight, $height, $width, $length){
        $sql = 'INSERT INTO products(sku, name, price, size, weight, height, width, length) 
         VALUES(?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sku, $name, $price, $size, $weight, $height, $width, $length]);
    }

    protected function removeItem($sku){
        $sql = 'DELETE FROM products WHERE sku = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sku]);
    }

    public function checkItemExists($sku){
        $sql = 'SELECT * FROM products WHERE sku = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sku]);
        $result = $stmt->fetchAll();
        if (count($result) == 0) {
            return false;
        } else {
            return true;
        }
    }
}