<?php
    $product_id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "product") or die("Connection Failed");

    $sql = "DELETE FROM product WHERE id = {$product_id}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    header("Location: http://localhost/product/index.php");

    mysqli_close($conn);

?>