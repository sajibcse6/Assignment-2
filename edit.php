<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "product") or die("Connection Failed");
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE id = {$product_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");
        if(mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {
    ?>

    <form class="post-form" action="update.php?id=<?php echo $row['id'] ?>" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $row['name'] ?>"/>
      </div>
      <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" value="<?php echo $row['description'] ?>"/>
      </div>
      <div class="form-group">
          <label>Quantity</label>
          <input type="number" name="quantity" value="<?php echo $row['quantity'] ?>"/>
      </div>
      <div class="form-group">
          <label>Price</label>
          <input type="float" name="price" value="<?php echo $row['price'] ?>"/>
      </div>
      <div class="form-group">
          <label>Expire Date</label>
          <input type="date" name="expire_date" value="<?php echo $row['expire_date'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }} ?>
</div>
</div>
</body>
</html>
