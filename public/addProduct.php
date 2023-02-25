<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<header class="d-flex align-items-center sticky-top border border-dark border-2" style="height: 80px">
    <p class="mx-4 my-2 fs-3 fw-bold flex-grow-1">Add Product</p>
    <button id="cancel-btn" class="m-2 btn btn-danger">Cancel</button>
    <button id="save-btn" class="m-2 btn btn-success" type="submit"    form = "product_form">Save</button>
</header>

<?php
    include_once '../src/classes/RequestHandler.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST)){
            $requestHandler = new RequestHandler();
            $requestHandler->sortAndSave($_POST);
        }
    }
?>

<body class="bg-secondary">

    <form action="" method="post" id="product_form">
        <?php
            if (isset($_GET['itemExists'])) {
                echo "<div class='alert alert-danger mx-4 my-0 rounded-0' style='width: 350px;'>Error! An item with this SKU already exists.</div>";
            }            
        ?>
        <div class="mb-4 mx-4 border border-light" style="width: 350px;">
            <div class="input-group m-3" style="width: 300px;">
                <span class="input-group-text">SKU</span>
                <input type="text" class="form-control" placeholder="Sku" id="sku" name="sku">
            </div>
            <div class="input-group m-3" style="width: 300px;">
                <span class="input-group-text">Name</span>
                <input type="text" class="form-control" placeholder="Name" id="name" name="name">
            </div>
            <div class="input-group m-3" style="width: 300px;">
                <span class="input-group-text">Price</span>
                <input type="number" class="form-control" placeholder="Price" id="price" name="price">
            </div>
        </div>
        

        <div class="m-4 border border-light border-2 d-inline-block" style="width: 400px;">
            <div>
                <label class="fs-5 fw-semibold text-light ms-2" for="typeSwitcher">Type Switcher</label>
                <button id="typeSwitcher" class="btn btn-secondary dropdown-toggle ms-2 border border-light border-2" type="button" data-bs-toggle="dropdown">
                  Select
                </button>
                <input type="hidden" value="" name="type" id="type"/> 
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" onclick="displayDvdForm()" value="dvd" id="DVD">Dvd</a></li>
                  <li><a class="dropdown-item" onclick="displayFurnitureForm()" value="furniture" id="Furniture">Furniture</a></li>
                  <li><a class="dropdown-item" onclick="displayBookForm()" value="book" id="Book">Book</a></li>
                </ul>
            </div>

            <div class="dvdForm">
                <div class="my-4 input-group ms-2">
                    <label class="fs-5 me-2" style="width: 70px;" for="size">Size</label>
                    <input placeholder="0" name="size" type="number" class="form-control rounded-start">
                    <span class="input-group-text">Mb</span>
                </div>
                <p class="fs-6 fw-bold ms-2">Please provide size in MB</p>
            </div>

            <div class="bookForm">
                <div class="my-4 input-group ms-2">
                    <label class="fs-5 me-2" style="width: 70px;" for="weight">Weight</label>
                    <input placeholder="0.0" step="any" id="weight" name="weight" 
                    class="form-control rounded-start">
                    <span class="input-group-text">KG</span>
                </div>
                <p class="fs-6 fw-bold ms-2">Please provide weight in KG</p>
            </div>
    
            <div class="furnitureForm">
                <div class="my-4 input-group ms-2">
                    <label class="fs-5 me-2" style="width: 70px;" for="height">Height</label>
                    <input placeholder="0" id="height" name="height" type="number" class="form-control rounded-start">
                    <span class="input-group-text">cm</span>
                </div>
                <div class="my-4 input-group ms-2">
                    <label class="fs-5 me-2" style="width: 70px;" for="width">Width</label>
                    <input placeholder="0" id="width" name="width" type="number" class="form-control rounded-start">
                    <span class="input-group-text">cm</span>
                </div>
                <div class="my-4 input-group ms-2">
                    <label class="fs-5 me-2" style="width: 70px;" for="length">Length</label>
                    <input placeholder="0" id="length" name="length" type="number" class="form-control rounded-start">
                    <span class="input-group-text">cm</span>
                </div>
                <p class="fs-6 fw-bold ms-2">Please provide dimensions in cm</p>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/addProductScript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</body>

<footer class="fixed-bottom border border-dark border-2 d-flex justify-content-center">
    <p class="m-2 fs-6 fw-bold">Scandiweb Test Assignment</p>
</footer>
</html>