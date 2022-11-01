<?php
require_once("connect.php");
if (isset($_GET['id']) && $_GET['id']) {
    $db->query("DELETE FROM products WHERE id = ".(int)$_GET['id']);    
    if(!$query->num_rows){
        header("Location: index.php?id=notFound");
    } 
    if($query->num_rows) {
        $db->query("DELETE FROM products WHERE id =$_GET[id]");
        header("Location:index.php?deleteProduct=success");
    }
}
