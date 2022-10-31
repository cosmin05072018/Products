<?php

//header("Location:index.php");

require_once("connect.php");
$db->query("DELETE FROM products WHERE id = 31");