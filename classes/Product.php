<?php
require_once "Database.php";

class Product extends Database {
    public function store($request)
    {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO products (product_name, price, quantity) VALUES ('$product_name', '$price', '$quantity')";

        if($this->conn->query($sql)) {
            header('location: ../views');
            exit;
        } else {
            die('Error add product: ' . $this->conn->error);
        }
    }

    public function getAllProducts()
    {
        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($resulut = $this->conn->query($sql)) {
            return $resulut;
        } else {
            die('Error retrieving all products: ' . $this->conn->error);
        }
        
    }

    public function getProduct($id)
    {

        $sql = "SELECT id, product_name, price, quantity FROM products WHERE id = $id";

        if($resulut = $this->conn->query($sql)) {
            return $resulut->fetch_assoc();
        } else {
            die('Error retrieving the product: ' . $this->conn->error);
        }
    }

    public function addProduct($product_name, $price, $quantity){
        
        $sql = "INSERT INTO `products`(`product_name`, `price`, `quantity`) VALUES ('$product_name','$price','$quantity')";
        
        if($this->conn->query($sql)) {
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error add product: ' . $this->conn->error);
        }
    }

    public function editProduct($request)
    {
        

        $id = $request['product_id'];
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products
                SET product_name = '$product_name',
                    price = '$price',
                    quantity = '$quantity'
                WHERE id = $id";

        if($this->conn->query($sql)) {
            
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error uploading the product: ' . $this->conn->error);
        }
    }

    public function deleteProduct($id)
    {
        
        echo $id;

        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)) {
            header('location: ../views/dashboard.php');
            exit;


        } else {
            die('Error deletinng your product: ' . $this->conn->error);
        }
    }

    
}

?>