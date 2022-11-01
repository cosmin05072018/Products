<?php
require_once("connect.php");
$errors = [];
function oldInput($key) {
    return isset($_POST[$key]) ? $_POST[$key] : '';
  }
if (isset($_POST['submit'])) {
    $name = $_POST['productName'] ?? null;
    $description = $_POST['productDescription'] ?? null;
    $price = $_POST['productPrice'] ?? null;

    if (!$name) {
        $errors['message'] = 'Input required';
    }
    elseif (!$description) {
        $errors['message'] = 'Input required';
    }
    elseif (!$price) {
        $errors['message'] = 'Input required';
    }
    elseif(!is_numeric($price)){
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
