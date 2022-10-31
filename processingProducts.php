<?php
require_once("connect.php");
$errors = [];
if (isset($_POST['submit'])) {
    $name = $_POST['productName'];
    $description = $_POST['productDescription'];
    $price = $_POST['productPrice'];

    if (!$name) {
        $errors['message'] = 'Input required';
    }
    if (!$description) {
        $errors['message'] = 'Input required';
    }
    if (!$price) {
        $errors['message'] = 'Input required';
    }
    if(!is_numeric($price)){
        $errors['message'] = 'Please enter a price';
    }else{
        $db->query("INSERT INTO products SET
        nameProduct = '" . $db->real_escape_string($name) . "',
        description = '" . $db->real_escape_string($description) . "',
        price = '" . $db->real_escape_string($price) . "'
         ");
         header("Location: index.php");
    }   
}
