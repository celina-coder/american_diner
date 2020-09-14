<?php
    require "admin/database.php";
    $category=$_GET['id'];
    $db = database::Connect();
    $stmt = $db->prepare('SELECT * FROM items WHERE items.category = ? ');
    $stmt->execute(array($category));
    $items = $stmt->fetchAll();
    database::disconnect();
    include "views/categories_view.php"

?>
