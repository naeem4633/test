<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<header class="bg-secondary d-flex align-items-center sticky-top border border-dark border-2" style="height: 80px">
        <p class="mx-4 my-2 fs-3 fw-bold flex-grow-1">Product List</p>
        <button id="add-product-btn" class="m-2 btn btn-success">ADD</button>
        <button id="delete-product-btn" class="m-2 btn btn-danger">MASS DELETE</button>
</header>
<body class="bg-secondary">
    <div class="container-fluid d-flex flex-wrap justify-content-centre">
        <?php
            include '../src/classes/config.php';
            
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                if(!empty($_GET)){
                    $requestHandler = new RequestHandler();
                    $requestHandler->delete($_GET['delete']);
                }
            }
            $view = new ProductView();
            $view->showAllProducts();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/productListScript.js"></script>
</body>

<footer class="bg-secondary fixed-bottom border border-dark border-2 d-flex justify-content-center">
    <p class="m-2 fs-6 fw-bold">Scandiweb Test Assignment</p>
</footer>
</html>