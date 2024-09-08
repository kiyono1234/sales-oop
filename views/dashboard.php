<?php
session_start();

include '../classes/Product.php';

require '../classes/User.php';

$user_obj = new User;
$all_users = $user_obj->getAllUsers();
$product = new Product;
$all_products = $product->getAllProducts();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="styleseet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand"><i class="fa-solid fa-house"></i></a>
            <div class="navbar-nav">
                <span class="navbar-text"><?= $_SESSION['username'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">Product List</h2>
            <a href="add-product.php"><i class="fa-solid fa-plus text-info"></i></a>
            
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($products = $all_products->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?= $products['id'] ?></td>
                            <td><?= $products['product_name'] ?></td>
                            <td><?= $products['price'] ?></td>
                            <td><?= $products['quantity'] ?></td>
                            <td>
                                
                                    <a href="../views/edit-product.php?product_id=<?= $products['id'] ?>"  class="btn btn-warning" title="Edit">
                                        <i class="fa-regular fa-pen-to-square text-dark"></i>
                                    </a>
                                    <a href="../actions/delete-product.php?product_id=<?= $products['id'] ?>" class="btn btn-danger" title="Delete">
                                        <i class="fa-regular fa-trash-can text-white"></i>
                                    </a>
                                
                            </td>
                            <td>
                            
                                    <a href="buy-product.php" class="btn btn-success" title="Pay">
                                        <i class="fa-solid fa-cash-register text-white"></i>
                                    </a>
                                
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </main>




        <!-- always put script at  the bottom -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>