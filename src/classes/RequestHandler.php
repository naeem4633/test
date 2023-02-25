<?php 
    include_once 'config.php';
    include_once 'TypeChecker.php';

    class RequestHandler{
        public function sortAndSave($data){
            $typeChecker = new TypeChecker();
            $className = $typeChecker->getClassName($data['type']);
            $item = new $className();
            $item->setData($data);
            $item->save();
        }
        
        public function delete($sku){
            $delete = $sku;
            $deleteArray = explode(',',$delete);
            forEach($deleteArray as $deleteNumber)
            {
                $productController = new ProductController();
                $productController->deleteItem($deleteNumber);
            }
            header("location: ../public/index.php");
        }
    }