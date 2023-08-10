
<?php  
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/head.php" ?>
</head>
<body>
      <?php include "includes/navbar.php" ?>
  <h1>Add Product</h1>
<form class="form-product" action="http://localhost/pf-dwwm-master/actions/reviews/addPrdoductsAction.php" method="POST">

    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" required><br>
    
    <label for="description">Description:</label>
    <textarea name="description" rows="4" cols="50"></textarea><br>
    
    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" required><br>
    
    <label for="stock_quantity">Stock Quantity:</label>
    <input type="number" name="stock_quantity" required><br>
    
    <label for="product_category">Product Category:</label>
    <input type="text" name="product_category"><br>
    
    <label for="product_image">Product Image URL:</label>
    <input type="text" name="product_image"><br>
    
    <label for="size_product">Size:</label>
    <input type="text" name="size_product"><br>
    
    <label for="color_product">Color:</label>
    <input type="text" name="color_product"><br>
    
    <input type="submit" value="Add Product">
  </form>

  <?php include "includes/footer.php" ?>
</body>
</html>

