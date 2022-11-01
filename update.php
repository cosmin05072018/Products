<?php
require_once("updateProduct.php");
$query = $db->query("SELECT * FROM products WHERE id = " . (int)$_GET['id']);
$row = $query->fetch_assoc();
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
        <?php if(isset($errors['message'])): ?>
            <div class="errors"><p><?= $errors['message']?></p></div>
            <?php endif; ?>
        <form action="" method="POST">
            <label for="productName">Enter product name</label>
            <input type="text" placeholder="Enter product name" name="productName" value="<?= isset($_GET['id']) ? $row['nameProduct'] : ''; ?>">

            <label for="productName">Enter product desctiption</label>
            <input type="text" placeholder="Enter product description" name="productDescription" value="<?= isset($_GET['id']) ? $row['description'] : ''; ?>">

            <label for="productName">Enter product price</label>
            <input type="text" placeholder="Enter product price" name="productPrice" value="<?= isset($_GET['id']) ? $row['price'] : ''; ?>">

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>