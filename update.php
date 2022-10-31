<?php
require_once("connect.php");
require_once("updateProduct.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="addProducts.css">
</head>

<body>
    <div class="content">
        <form action="" method="POST">
            <label for="productName">Enter product name</label>
            <input type="text" placeholder="Enter product name" name="productName">

            <label for="productName">Enter product desctiption</label>
            <input type="text" placeholder="Enter product description" name="productDescription">

            <label for="productName">Enter product price</label>
            <input type="text" placeholder="Enter product price" name="productPrice">

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>