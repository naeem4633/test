<?php 

class ProductView extends Product
{
    public function showAllProducts(){

        $allProducts = array();

        $results = $this->getBooks();
        foreach($results as $result){
            $book = new Book();
            $book->setData($result);
            array_push($allProducts, $book);
        }

        $results = $this->getDvds();
        foreach($results as $result){
            $dvd = new Dvd();
            $dvd->setData($result);
            array_push($allProducts, $dvd);
        }
 
        $results = $this->getFurniture();
        foreach($results as $result){
            $furniture = new Furniture();
            $furniture->setData($result);
            array_push($allProducts, $furniture);
        }

        foreach($allProducts as $product){
            echo "<div class='card m-5 d-flex justify-content-center align-items-center' style='width: 270px; height: 180px;'>
            <input class= 'delete-checkbox position-absolute top-0 start-0 m-2' type='checkbox'>
            <p class='sku fs-5 fw-semibolds mt-4 mb-0 p-0'>" .$product->getSku(). "<p>
            <p class='my-0 p-0'>" .$product->getName(). "<p>
            <p class='my-0 p-0'>" .$product->getPrice(). " <p>
            <p class='my-0 p-0'>" .$product->getAttributes(). "<p> </div>";
        }
    }
}