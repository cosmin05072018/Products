<?php
require_once("connect.php");
if (isset($_GET['id']) && $_GET['id']) {
    $query=$db->query("SELECT id FROM products WHERE id = ".(int)$_GET['id']); 

    if(!$query->num_rows){
        header("Location: index.php?id=notFound");
    } 
    elseif($query->num_rows) {
        $db->query("DELETE FROM products WHERE id = ".(int)$_GET['id']);
        header("Location:index.php?deleteProduct=success");
    }
}
