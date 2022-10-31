<?php require_once("connect.php"); 
if(isset($_GET['id'])){
    $db->query("DELETE FROM products WHERE id = $_GET[id]");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once("navbar.php");
    $query = $db->query("SELECT * FROM products");
    if ($query->num_rows) : ?>
        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">Description Product</th>
                        <th scope="col">Price Product</th>
                        <th scope="col">Update</th>
                        <th scope="col">Deleted</th>
                    </tr>
                </thead>
                <?php
                while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['nameProduct']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['price']; ?> <i class="uil uil-dollar-alt"></i></td>
                        <td><a href=<?php echo 'update.php?id='.$row['id']; ?>><i class="uil uil-atom"></i></a></td>
                        <td><a href=<?php echo 'index.php?id='.$row['id']; ?>><i class="uil uil-trash-alt"></i></a><td>
                    </tr>
                <?php }; ?>
            </table>
        </div>
    <?php else : ?>
        <p class="empty">The product list is empty.</p>
    <?php endif; ?>
</body>

</html>