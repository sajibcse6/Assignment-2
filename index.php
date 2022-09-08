<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "product") or die("Connection Failed");

        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

        if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Expire Date</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['expire_date']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php }
        else echo "<h1>No Record Found</h1>";
        mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
