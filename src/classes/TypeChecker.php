<?php
include_once 'Redirect.php';
    class TypeChecker{
        function getClassName($type){
            $typeArray = [
                'furniture' => 'Furniture',
                'dvd' => 'Dvd',
                'book' => 'Book'
            ];
    
            if(!($className = $typeArray[$type])){
                $redirect = new Redirect();
                $redirect->redirectTo("../public/addProduct.php?typeEmpty=1");
            }
            return $className;
        }
    }