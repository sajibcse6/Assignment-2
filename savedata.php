<?php
    $product_name = $_POST['name'];
    $product_description = $_POST['description'];
    $product_quantity = $_POST['quantity'];
    $product_price = $_POST['price'];
    $product_expire = $_POST['expire_date'];

    $conn = mysqli_connect("localhost", "root", "", "product") or die("Connection Failed");

    $sql = "INSERT INTO product(name, description, quantity, price, expire_date) VALUES('{$product_name}', '{$product_description}', {$product_quantity}, {$product_price}, '{$product_expire}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    header("Location: http://localhost/product/index.php");

    mysqli_close($conn);

?>