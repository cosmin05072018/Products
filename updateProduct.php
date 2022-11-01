<?php
require_once("connect.php");
$errors = [];
function oldInput($key) {
    return isset($_POST[$key]) ? $_POST[$key] : '';
  }
if (!isset($_GET['id']) && !$_GET['id']) {
    header("Location: index.php");
}
if (isset($_GET['id']) && $_GET['id']) {
    $query = $db->query("SELECT id FROM products WHERE id = " . (int)$_GET['id']);
    if (!$query->num_rows) {
        header("Location: index.php?id=notFound");
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['productName'];
        $description = $_POST['productDescription'];
        $price = $_POST['productPrice'];
        if (!$name) {
            $errors['message'] = 'Input required';
        } elseif (!$description) {
            $errors['message'] = 'Input required';
        } elseif (!$price || !is_numeric($price)) {
            $errors['message'] = 'Please enter a price';
        } else {
            $db->query("UPDATE products SET
                nameProduct = '" . $db->real_escape_string($name) . "',
                description = '" . $db->real_escape_string($description) . "',
                price = '" . $db->real_escape_string($price) . "'
                WHERE id = $_GET[id]
            ");
            header("Location: index.php");
        }
    }
}
