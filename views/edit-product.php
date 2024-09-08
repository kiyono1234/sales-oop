<?php

session_start();

include '../classes/Product.php';
$product = new Product;
$product_detail = $product->getProduct($_GET['product_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Product</title>
</head>
<body>
    <main class="container">
        <div class="card text-center border-0 w-50">
            <div class="col">
                <h1 class="text-warning mb-3 fw-bold">Edit Product</h1>

                <form action="" method="post">
                    <div class="mb-3">
                        <div class="row">
                            <label for="product_name" class="form-label ">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product_detail['product_name'] ?>">
                        </div>
                        
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="product_price" class="form-label small fw-bold">Product Price</label>
                                <div class="input-group">
                                    <div class="input-group-text">$</div>
                                    <input type="number" name="price" id="price" class="form-control" step="0.01" value="<?= $product_detail['price'] ?>">

                                </div>
                            </div>
                            <div class="col-6">
                                <label for="quantity" class="form-label small fw-bold">Quntity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" step="0.01" value="<?= $product_detail['quantity'] ?>">                                    
                            </div>
                        </div>                        
                    </div>
                    <input type="number" name="product_id" id="product_id" class="form-control" value="<?= $_GET['product_id'] ?>" hidden >
                    <button type="submit" name="btn_add" class="btn btn-info fw-bold w-100">
                    <a href="dashboard.php" class="btn btn-info">
                    Edit
                    </a>
                    </button>


                    
                </form>

                <?php
                    if(isset($_POST['btn_add'])){
                        $product_name = $_POST['product_name'];
                        $price = $_POST['price'];
                        $quantity = $_POST['quantity'];
                        $id = $_GET['product_id'];

                        

                        $product->editProduct($_POST);
                    }
                ?>
            </div>
        </div>
    </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>