<?php
require_once "admin/database.php";
    
    $db = database::Connect();
    $stmt = $db->prepare('SELECT * FROM categories');
    $stmt->execute();
    $categories = $stmt->fetchAll();
    database::disconnect();

?>