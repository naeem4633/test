<?php
    class TypeChecker{
        function getClassName($type){
            $typeArray = [
                'furniture' => 'Furniture',
                'dvd' => 'Dvd',
                'book' => 'Book'
            ];
    
            $className = $typeArray[$type];
            return $className;
        }
    }