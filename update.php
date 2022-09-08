<?php
    $product_id = $_GET['id'];
    $product_name = $_POST['name'];
    $product_description = $_POST['description'];
    $product_quantity = $_POST['quantity'];
    $product_price = $_POST['price'];
    $product_expire = $_POST['expire_date'];

    $conn = mysqli_connect("localhost", "root", "", "product") or die("Connection Failed");

    $sql = "UPDATE product SET name = '{$product_name}', description = '{$product_description}', quantity = {$product_quantity}, price = {$product_price}, expire_date = '{$product_expire}' WHERE id = {$product_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    header("Location: http://localhost/product/index.php");

    mysqli_close($conn);

?>